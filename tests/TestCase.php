<?php
/**
 * LindemannRock Formie SAP Integration
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2026 LindemannRock
 */

declare(strict_types=1);

namespace lindemannrock\formiesapintegration\tests;

use lindemannrock\base\testing\IntegrationTestCase;

/**
 * Base test case for formie-sap-integration integration tests.
 *
 * The plugin's testable surface is the pure `Url` helper (SSRF defence,
 * path validation, env-var resolution) — no DB state, no service stubs,
 * no external cleanup — so this subclass is a thin marker for now. Future
 * tests that touch the Sap integration object (Guzzle stubs, payload
 * shape) should add helpers here.
 *
 * @since 3.5.0
 */
abstract class TestCase extends IntegrationTestCase
{
}
