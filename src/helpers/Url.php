<?php
/**
 * Formie SAP Integration plugin for Craft CMS 5.x
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2026 LindemannRock
 */

namespace lindemannrock\formiesapintegration\helpers;

use craft\helpers\App;
use RuntimeException;

/**
 * URL parsing and SSRF-defense helpers for outbound SAP API calls.
 *
 * Centralises three concerns scattered across the integration:
 *   - resolving env-var references vs. literal values consistently (App::parseEnv)
 *   - validating absolute URLs as safe outbound targets (https-only,
 *     no embedded credentials, blocked private/loopback/IMDS hosts,
 *     optional config-driven host allowlist)
 *   - validating path-only API endpoint values to prevent path/CRLF
 *     injection when concatenated onto a base URL
 *
 * @since 1.0.0
 */
class Url
{
    /**
     * Hosts that must never be reached as SSRF targets, even when no
     * allowlist is configured. Cloud metadata endpoints are the
     * highest-value targets here.
     */
    private const BLOCKED_HOSTS = [
        'localhost',
        '127.0.0.1',
        '0.0.0.0',
        '::1',
        '169.254.169.254',          // AWS / OpenStack IMDS
        'metadata.google.internal', // GCP
        'metadata.azure.com',       // Azure
    ];

    /**
     * Parse a setting value that may be a literal string or an env-var
     * reference (`$VAR` or `@alias`). Returns the resolved string, or
     * null if empty/unset.
     */
    public static function parseEnv(?string $value): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }

        $resolved = App::parseEnv($value);

        if (!is_string($resolved) || $resolved === '') {
            return null;
        }

        return $resolved;
    }

    /**
     * Validate an absolute URL as a safe outbound target.
     *
     * @throws RuntimeException if the URL is not a safe target. Caller is
     *         expected to wrap and surface via Integration::apiError.
     */
    public static function validateOutboundUrl(string $url, array $allowedHosts = []): string
    {
        $parts = parse_url($url);

        if ($parts === false || empty($parts['scheme']) || empty($parts['host'])) {
            throw new RuntimeException('Invalid URL: must be an absolute URL with scheme and host.');
        }

        if (strtolower($parts['scheme']) !== 'https') {
            throw new RuntimeException('Invalid URL: only https scheme is permitted.');
        }

        // user@host or user:pass@host trickery
        if (isset($parts['user']) || isset($parts['pass'])) {
            throw new RuntimeException('Invalid URL: credentials in URL are not permitted.');
        }

        $host = strtolower($parts['host']);

        if (self::isBlockedHost($host)) {
            throw new RuntimeException(sprintf('Invalid URL: host "%s" is not allowed.', $host));
        }

        if (!empty($allowedHosts) && !self::hostMatchesAllowlist($host, $allowedHosts)) {
            throw new RuntimeException(sprintf('Invalid URL: host "%s" is not in the configured allowlist.', $host));
        }

        return rtrim($url, '/');
    }

    /**
     * Validate a path-only API endpoint value before concatenating it
     * onto a validated base URL. Rejects path traversal, CRLF injection,
     * and authority-injection (e.g. `@evil.host/x`) tricks.
     *
     * @throws RuntimeException if the value is not a safe path.
     */
    public static function validateApiPath(string $path): string
    {
        $path = '/' . ltrim($path, '/');

        // No control chars (rules out CRLF injection into the request line)
        if (preg_match('/[\x00-\x1f\x7f]/', $path)) {
            throw new RuntimeException('Invalid API endpoint: control characters are not permitted.');
        }

        // No path traversal segments
        if (str_contains($path, '..')) {
            throw new RuntimeException('Invalid API endpoint: path traversal is not permitted.');
        }

        // No `@` in the path — an `@` before the next `/` would be parsed
        // by some HTTP clients as userinfo, redirecting the request host
        if (str_contains($path, '@')) {
            throw new RuntimeException('Invalid API endpoint: "@" is not permitted in path.');
        }

        // Strict allowed character set: alphanumerics, common path/query
        // separators, and percent-encoded octets. Split into path and
        // optional query string for clarity.
        $queryPos = strpos($path, '?');
        $pathPart = $queryPos === false ? $path : substr($path, 0, $queryPos);
        $queryPart = $queryPos === false ? '' : substr($path, $queryPos + 1);

        if (!preg_match('#^[a-zA-Z0-9_\-./~%]+$#', $pathPart)) {
            throw new RuntimeException('Invalid API endpoint: path contains disallowed characters.');
        }

        if ($queryPart !== '' && !preg_match('#^[a-zA-Z0-9_\-./~%=&+]*$#', $queryPart)) {
            throw new RuntimeException('Invalid API endpoint: query string contains disallowed characters.');
        }

        return $path;
    }

    private static function isBlockedHost(string $host): bool
    {
        if (in_array($host, self::BLOCKED_HOSTS, true)) {
            return true;
        }

        // Reject IPv4 private/reserved/link-local ranges
        if (filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return !filter_var(
                $host,
                FILTER_VALIDATE_IP,
                FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
            );
        }

        // Reject IPv6 private/reserved (also covers loopback ::1, ULA fc00::/7,
        // link-local fe80::/10)
        if (filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            return !filter_var(
                $host,
                FILTER_VALIDATE_IP,
                FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
            );
        }

        return false;
    }

    private static function hostMatchesAllowlist(string $host, array $allowed): bool
    {
        foreach ($allowed as $pattern) {
            if (!is_string($pattern)) {
                continue;
            }

            $pattern = strtolower(trim($pattern));

            if ($pattern === '') {
                continue;
            }

            if ($pattern === $host) {
                return true;
            }

            // Wildcard subdomain: "*.sap.com" matches any host ending in ".sap.com"
            if (str_starts_with($pattern, '*.')) {
                $suffix = substr($pattern, 1); // ".sap.com"
                if (str_ends_with($host, $suffix)) {
                    return true;
                }
            }
        }

        return false;
    }
}
