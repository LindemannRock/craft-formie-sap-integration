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
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.',
    'Open Formie SAP Integration' => 'Open Formie SAP Integration',

    // Permissions
    'Manage settings' => 'Manage settings',

    // Common
    '- None -' => '- None -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Connection test failed with status code: {code}',
    'Unable to obtain access token.' => 'Unable to obtain access token.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.',

    // Settings: General
    'General Settings' => 'General Settings',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Integration Information',
    'Integration Location' => 'Integration Location',
    'SAP Integration Status' => 'SAP Integration Status',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'API testing and troubleshooting',
    'Documentation' => 'Documentation',
    'Environment variable examples' => 'Environment variable examples',
    'For setup instructions and API testing, see:' => 'For setup instructions and API testing, see:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Choose between staging or production',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Click on the {refresh} button in the right-hand sidebar.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Contact your SAP administrator to obtain OAuth credentials.',
    'Save this integration.' => 'Save this integration.',
    'Step 1. Configure SAP Integration' => 'Step 1. Configure SAP Integration',
    'Step 2. Test Connection' => 'Step 2. Test Connection',
    'The specific endpoint for form submissions (e.g., {path})' => 'The specific endpoint for form submissions (e.g., {path})',
    'You\'ll need:' => 'You\'ll need:',
    'Your OAuth application client ID' => 'Your OAuth application client ID',
    'Your OAuth application client secret' => 'Your OAuth application client secret',

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
