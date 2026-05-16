<?php
/**
 * LindemannRock Formie SAP Integration
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2026 LindemannRock
 */

declare(strict_types=1);

namespace lindemannrock\formiesapintegration\tests\Integration;

use lindemannrock\formiesapintegration\helpers\Url as UrlHelper;
use lindemannrock\formiesapintegration\tests\TestCase;
use RuntimeException;

/**
 * Pins the SSRF / scheme / credential / IP-form contracts of
 * {@see UrlHelper::validateOutboundUrl()}. Covers audits 1.2 (SSRF base),
 * 7.1 (alternate-form IPv4 — decimal/hex/octal/short), 7.2 (IPv6 zone-ID),
 * and 8.1 (hex-word real-domain false-positive fix).
 *
 * @since 3.5.0
 */
final class UrlValidateOutboundUrlTest extends TestCase
{
    public function testHttpsAbsoluteUrlPassesAndTrailingSlashIsTrimmed(): void
    {
        self::assertSame(
            'https://api.sap.com/v1',
            UrlHelper::validateOutboundUrl('https://api.sap.com/v1/'),
        );

        self::assertSame(
            'https://api.sap.com',
            UrlHelper::validateOutboundUrl('https://api.sap.com'),
        );
    }

    public function testNonHttpsSchemeRejected(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('only https scheme is permitted');

        UrlHelper::validateOutboundUrl('http://api.sap.com/v1');
    }

    public function testFtpSchemeRejected(): void
    {
        // Any host-carrying non-https scheme trips the scheme check.
        // (Schemes without a host — `file:///etc/passwd` — are caught
        // earlier by the "must be absolute with scheme and host" guard.)
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('only https scheme is permitted');

        UrlHelper::validateOutboundUrl('ftp://api.example.com/x');
    }

    public function testMalformedUrlMissingHostRejected(): void
    {
        // `file:///etc/passwd`, `https:///x`, and similar schemes-without-host
        // shapes hit the first guard. The defense fires regardless of which
        // branch catches it — pin both so a refactor doesn't accidentally
        // skip one.
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('must be an absolute URL with scheme and host');

        UrlHelper::validateOutboundUrl('file:///etc/passwd');
    }

    public function testEmbeddedCredentialsRejected(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('credentials in URL are not permitted');

        UrlHelper::validateOutboundUrl('https://user:secret@api.sap.com/v1');
    }

    public function testBlockedHostsRejected(): void
    {
        $blocked = [
            'https://localhost/x',
            'https://127.0.0.1/x',
            'https://0.0.0.0/x',
            'https://169.254.169.254/latest/meta-data',          // AWS IMDS
            'https://metadata.google.internal/computeMetadata',  // GCP
            'https://metadata.azure.com/metadata/instance',      // Azure
        ];

        foreach ($blocked as $url) {
            try {
                UrlHelper::validateOutboundUrl($url);
                self::fail("expected $url to be rejected as a blocked host");
            } catch (RuntimeException $e) {
                self::assertStringContainsString('is not allowed', $e->getMessage(), $url);
            }
        }
    }

    public function testPrivateAndReservedIpRangesRejected(): void
    {
        $blocked = [
            'https://10.0.0.1/x',        // RFC1918 10/8
            'https://192.168.1.1/x',     // RFC1918 192.168/16
            'https://172.16.0.1/x',      // RFC1918 172.16/12
            'https://169.254.10.20/x',   // link-local
        ];

        foreach ($blocked as $url) {
            try {
                UrlHelper::validateOutboundUrl($url);
                self::fail("expected $url to be rejected as private/reserved IP");
            } catch (RuntimeException $e) {
                self::assertStringContainsString('is not allowed', $e->getMessage(), $url);
            }
        }
    }

    public function testIpv6LoopbackAndZoneIdRejected(): void
    {
        // Bracketed bare loopback
        try {
            UrlHelper::validateOutboundUrl('https://[::1]/x');
            self::fail('expected [::1] to be rejected');
        } catch (RuntimeException $e) {
            self::assertStringContainsString('is not allowed', $e->getMessage());
        }

        // Bracketed loopback with URL-encoded zone-id (audit 7.2)
        try {
            UrlHelper::validateOutboundUrl('https://[::1%25eth0]/x');
            self::fail('expected [::1%25eth0] zone-id form to be rejected');
        } catch (RuntimeException $e) {
            self::assertStringContainsString('is not allowed', $e->getMessage());
        }
    }

    public function testAlternateFormIpv4Rejected(): void
    {
        // Each of these forms resolves to a loopback / private address at the
        // OS / curl level but filter_var(FILTER_VALIDATE_IP, IPV4) rejects them
        // outright — the dedicated detector covers the gap (audit 7.1).
        $blocked = [
            'https://2130706433/x',         // pure decimal == 127.0.0.1
            'https://0x7f000001/x',         // hex-encoded == 127.0.0.1
            'https://0177.0.0.1/x',         // dotted-octal == 127.0.0.1
            'https://127.1/x',              // short-form == 127.0.0.1
        ];

        foreach ($blocked as $url) {
            try {
                UrlHelper::validateOutboundUrl($url);
                self::fail("expected $url to be rejected as alternate-form IPv4");
            } catch (RuntimeException $e) {
                self::assertStringContainsString('is not allowed', $e->getMessage(), $url);
            }
        }
    }

    public function testHexWordRealDomainsAreNotMisclassifiedAsAlternateFormIpv4(): void
    {
        // Audit 8.1 regression: hex-letter labels (bead, ace, cafe, be.ef, etc.)
        // are genuine registered domains, NOT alternate-form IPv4 literals.
        // inet_aton only treats labels as hex when prefixed with `0x`.
        $allowed = [
            'https://bead.ca/v1',
            'https://ace.ca/v1',
            'https://cafe.ca/v1',
            'https://be.ef/v1',
            'https://deaf.ca/v1',
            'https://fab.cab/v1',
        ];

        foreach ($allowed as $url) {
            self::assertSame(
                rtrim($url, '/'),
                UrlHelper::validateOutboundUrl($url),
                "expected $url to pass: hex-letter labels without 0x prefix are real domains"
            );
        }
    }

    public function testAllowlistRejectsHostsOutsideTheList(): void
    {
        // Allowlist is enforced AFTER the always-blocked check, so a normal
        // FQDN outside the list still fails — the integration operator opts
        // in to which hosts SAP is allowed to reach.
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('is not in the configured allowlist');

        UrlHelper::validateOutboundUrl('https://evil.example.com/x', ['api.sap.com']);
    }

    public function testAllowlistWildcardSubdomainMatches(): void
    {
        // `*.sap.com` matches any host ending in `.sap.com` — the documented
        // wildcard form. Bare-equal still works alongside it.
        self::assertSame(
            'https://my300000.crm.sap.com/v1',
            UrlHelper::validateOutboundUrl('https://my300000.crm.sap.com/v1', ['*.sap.com']),
        );

        self::assertSame(
            'https://api.sap.com/v1',
            UrlHelper::validateOutboundUrl('https://api.sap.com/v1', ['api.sap.com']),
        );
    }
}
