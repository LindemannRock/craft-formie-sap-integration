<?php
/**
 * LindemannRock Formie SAP Integration
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2026 LindemannRock
 */

declare(strict_types=1);

namespace lindemannrock\formiesapintegration\tests\Integration;

use Craft;
use lindemannrock\formiesapintegration\helpers\Url as UrlHelper;
use lindemannrock\formiesapintegration\tests\TestCase;

/**
 * Pins {@see UrlHelper::parseEnv()} — the wrapper around `App::parseEnv`
 * that resolves literal values, `$VAR` references, and `@alias` references
 * with the same contract. Pins audit 3.3: prior implementation passed
 * literal strings into `App::env()` which expected an env-var name,
 * silently swapping in the hardcoded staging URL.
 *
 * @since 3.5.0
 */
final class UrlParseEnvTest extends TestCase
{
    /**
     * Environment variables seeded by tests. Restored in tearDown so the
     * suite doesn't leak FSI_TEST_* vars to later tests.
     *
     * @var list<string>
     */
    private array $seededEnvVars = [];

    /**
     * Aliases seeded by tests. Restored in tearDown so the suite doesn't
     * leak @fsiTest* aliases.
     *
     * @var list<string>
     */
    private array $seededAliases = [];

    protected function tearDown(): void
    {
        foreach ($this->seededEnvVars as $name) {
            putenv($name);
            unset($_SERVER[$name], $_ENV[$name]);
        }
        foreach ($this->seededAliases as $alias) {
            Craft::setAlias($alias, null);
        }
        parent::tearDown();
    }

    public function testNullAndEmptyReturnNull(): void
    {
        self::assertNull(UrlHelper::parseEnv(null));
        self::assertNull(UrlHelper::parseEnv(''));
    }

    public function testLiteralValuePassesThroughUnchanged(): void
    {
        // Audit 3.3: literal values must be returned as-is. Prior bug:
        // App::env('staging') looked up an env var named 'staging',
        // found nothing, and the caller silently fell back to the
        // hardcoded staging URL even when the admin meant to use the
        // literal 'staging' as a sentinel.
        self::assertSame('staging', UrlHelper::parseEnv('staging'));
        self::assertSame('production', UrlHelper::parseEnv('production'));
        self::assertSame('https://api.sap.com/v1', UrlHelper::parseEnv('https://api.sap.com/v1'));
    }

    public function testEnvVariableReferenceResolved(): void
    {
        $name = 'FSI_TEST_BASE_URL';
        putenv("$name=https://staging-api.example.com/v1");
        $_SERVER[$name] = 'https://staging-api.example.com/v1';
        $_ENV[$name] = 'https://staging-api.example.com/v1';
        $this->seededEnvVars[] = $name;

        self::assertSame(
            'https://staging-api.example.com/v1',
            UrlHelper::parseEnv('$' . $name),
        );
    }

    public function testUnsetEnvVariableReferenceReturnsNull(): void
    {
        // `$FSI_TEST_UNSET_XYZ` with no env var set — App::parseEnv returns
        // an empty string, which parseEnv normalises to null so callers can
        // fall back to defaults consistently.
        self::assertNull(UrlHelper::parseEnv('$FSI_TEST_UNSET_XYZ_' . uniqid()));
    }

    public function testAliasReferenceResolved(): void
    {
        $alias = '@fsiTestApiBase';
        Craft::setAlias($alias, 'https://staging-api.example.com/v1');
        $this->seededAliases[] = $alias;

        self::assertSame(
            'https://staging-api.example.com/v1',
            UrlHelper::parseEnv($alias),
        );
    }
}
