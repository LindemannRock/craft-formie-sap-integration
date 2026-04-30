<?php
/**
 * Formie SAP Integration translation file (English)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Manage your SAP Cloud CRM integration.',

    // Permissions
    'Manage settings' => 'Manage settings',

    // Common
    '- None -' => '- None -',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.',
    'Unable to obtain access token.' => 'Unable to obtain access token.',
    'Connection test failed with status code: {code}' => 'Connection test failed with status code: {code}',

    // Settings: General
    'API testing and troubleshooting' => 'API testing and troubleshooting',
    'Documentation' => 'Documentation',
    'Environment variable examples' => 'Environment variable examples',
    'For setup instructions and API testing, see:' => 'For setup instructions and API testing, see:',
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'General Settings' => 'General Settings',
    'Integration Information' => 'Integration Information',
    'Integration Location' => 'Integration Location',
    'Plugin Name' => 'Plugin Name',
    'SAP Integration Status' => 'SAP Integration Status',
    'The name of the plugin as it appears in the Control Panel menu' => 'The name of the plugin as it appears in the Control Panel menu',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.',

    // Integration: Plugin settings
    'API Endpoint' => 'API Endpoint',
    'Client ID' => 'Client ID',
    'Client Secret' => 'Client Secret',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.',
    'Enter the OAuth scopes required, comma-separated.' => 'Enter the OAuth scopes required, comma-separated.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Enter the SAP API endpoint path (e.g., /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Enter the SAP OAuth Client ID.',
    'Enter the SAP OAuth Client Secret.' => 'Enter the SAP OAuth Client Secret.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Enter the SAP environment to connect to (staging or production).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).',
    'Environment' => 'Environment',
    'OAuth Authorization URL' => 'OAuth Authorization URL',
    'OAuth Redirect URI' => 'OAuth Redirect URI',
    'OAuth Scope' => 'OAuth Scope',
    'OAuth Token URL' => 'OAuth Token URL',
    'Production API URL' => 'Production API URL',
    'Staging API URL' => 'Staging API URL',

    // Integration: Form settings
    'Additional Information' => 'Additional Information',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.',
    'Header Field Mapping' => 'Header Field Mapping',
    'Invoice ID Field' => 'Invoice ID Field',
    'Member Email Field' => 'Member Email Field',
    'Member ID Field' => 'Member ID Field',
    'Member Mobile Field' => 'Member Mobile Field',
    'Select the field that contains the email address.' => 'Select the field that contains the email address.',
    'Select the field that contains the invoice ID.' => 'Select the field that contains the invoice ID.',
    'Select the field that contains the member ID.' => 'Select the field that contains the member ID.',
    'Select the field that contains the mobile number.' => 'Select the field that contains the mobile number.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.',
];
