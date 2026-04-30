<?php
/**
 * Formie SAP Integration config.php
 *
 * This file exists only as a template for the Formie SAP Integration settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'formie-sap-integration.php'
 * and make your changes there to override default settings.
 *
 * @since 3.3.1
 */

return [
    // Global settings
    '*' => [
        // ========================================
        // GENERAL SETTINGS
        // ========================================

        /**
         * Plugin name shown in the Control Panel.
         */
        // 'pluginName' => 'Formie SAP Integration',

        // ========================================
        // SECURITY
        // ========================================

        /**
         * Optional host allowlist for SAP API endpoints (defense in depth against SSRF).
         *
         * When set, only these hosts are permitted for the integration's
         * stagingUrl / productionUrl (and OAuth URLs once OAuth is enabled).
         * Supports exact match and wildcard subdomains: '*.sap.com' matches
         * any host ending in '.sap.com'.
         *
         * When empty/unset, RFC1918 ranges, loopback, link-local, and known
         * cloud metadata endpoints are still blocked, but any other public
         * https host is allowed. For production, set an explicit allowlist.
         */
        // 'allowedHosts' => [
        //     'api.sap.com',
        //     '*.sap.com',
        // ],
    ],
];
