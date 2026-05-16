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
 * Pins the path / CRLF / authority-injection contract of
 * {@see UrlHelper::validateApiPath()}. Covers audit 1.3 — `apiEndpoint`
 * is concatenated onto the validated base URL, so any traversal, control
 * character, or `@` in the path can redirect the request host or smuggle
 * headers.
 *
 * @since 3.5.0
 */
final class UrlValidateApiPathTest extends TestCase
{
    public function testReturnsPathWithLeadingSlashNormalised(): void
    {
        // Leading slash added when missing
        self::assertSame('/customer-feedback', UrlHelper::validateApiPath('customer-feedback'));

        // Leading slash preserved when present
        self::assertSame('/customer-feedback', UrlHelper::validateApiPath('/customer-feedback'));

        // Multiple leading slashes collapsed to one
        self::assertSame('/customer-feedback', UrlHelper::validateApiPath('///customer-feedback'));
    }

    public function testPathTraversalSegmentsRejected(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('path traversal is not permitted');

        UrlHelper::validateApiPath('/../../../etc/passwd');
    }

    public function testEmbeddedAtCharacterRejected(): void
    {
        // An `@` before the next `/` is parsed by some HTTP clients as
        // userinfo, redirecting the request host (`@evil.host/x` → host
        // becomes evil.host). Reject defensively even inside the path.
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('"@" is not permitted in path');

        UrlHelper::validateApiPath('/@evil.host/customer-feedback');
    }

    public function testControlCharactersRejected(): void
    {
        // CRLF injection into the HTTP request line
        try {
            UrlHelper::validateApiPath("/customer-feedback\r\nX-Injected: 1");
            self::fail('expected CRLF in path to be rejected');
        } catch (RuntimeException $e) {
            self::assertStringContainsString('control characters are not permitted', $e->getMessage());
        }

        // Null byte
        try {
            UrlHelper::validateApiPath("/customer\x00feedback");
            self::fail('expected null byte in path to be rejected');
        } catch (RuntimeException $e) {
            self::assertStringContainsString('control characters are not permitted', $e->getMessage());
        }
    }

    public function testDisallowedCharactersInPathRejected(): void
    {
        // Spaces, angle brackets, and other URL-unsafe characters land in
        // the strict-allowlist branch — not control chars, not `@`, not
        // `..`, but still disallowed.
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('path contains disallowed characters');

        UrlHelper::validateApiPath('/customer feedback');
    }

    public function testQueryStringWithAllowedCharactersPasses(): void
    {
        self::assertSame(
            '/customer-feedback?id=42&type=lead',
            UrlHelper::validateApiPath('/customer-feedback?id=42&type=lead'),
        );

        // Percent-encoded octets are explicitly allowed
        self::assertSame(
            '/customer-feedback?email=a%40b.com',
            UrlHelper::validateApiPath('/customer-feedback?email=a%40b.com'),
        );
    }

    public function testQueryStringWithDisallowedCharactersRejected(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('query string contains disallowed characters');

        UrlHelper::validateApiPath('/customer-feedback?xss=<script>');
    }
}
