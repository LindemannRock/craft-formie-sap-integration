<?php
/**
 * Formie SAP Integration translation file (Danish)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Administrer din SAP Cloud CRM-integration.',

    // Permissions
    'Manage settings' => 'Administrer indstillinger',

    // Common
    '- None -' => '- Ingen -',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} skal referere til en miljøvariabel ($VAR) eller et alias (@name) — bogstavelige værdier er ikke tilladt.',
    'Unable to obtain access token.' => 'Det var ikke muligt at hente adgangstoken.',
    'Connection test failed with status code: {code}' => 'Forbindelsestesten mislykkedes med statuskode: {code}',

    // Settings: General
    'API testing and troubleshooting' => 'API-test og fejlfinding',
    'Documentation' => 'Dokumentation',
    'Environment variable examples' => 'Eksempler på miljøvariabler',
    'For setup instructions and API testing, see:' => 'For installationsvejledning og API-test, se:',
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'General Settings' => 'Generelle indstillinger',
    'Integration Information' => 'Integrationsoplysninger',
    'Integration Location' => 'Integrationsplacering',
    'Plugin Name' => 'Plugin-navn',
    'SAP Integration Status' => 'SAP-integrationsstatus',
    'The name of the plugin as it appears in the Control Panel menu' => 'Navnet på pluginnet som det vises i kontrolpanelets menu',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Dette tilsidesættes af indstillingen `pluginName` i filen `config/formie-sap-integration.php`.',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Dette plugin leverer SAP Cloud CRM-integrationen til Formie-formularer. Konfigurer integrationsindstillingerne under fanen Integrations i hvert enkelt formular.',

    // Integration: Plugin settings
    'API Endpoint' => 'API-slutpunkt',
    'Client ID' => 'Klient-ID',
    'Client Secret' => 'Klienthemmelighed',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Angiv en brugerdefineret OAuth-omdirigerings-URI efter behov. Lad feltet stå tomt for at bruge Crafts standard.',
    'Enter the OAuth scopes required, comma-separated.' => 'Angiv de nødvendige OAuth-omfang, adskilt af kommaer.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Angiv stien til SAP API-slutpunktet (f.eks. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Angiv SAP OAuth-autorisations-URL\'en (f.eks. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Angiv SAP OAuth-klient-ID\'et.',
    'Enter the SAP OAuth Client Secret.' => 'Angiv SAP OAuth-klienthemmeligheden.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Angiv SAP OAuth-token-URL\'en (f.eks. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Angiv det SAP-miljø, der skal oprettes forbindelse til (staging eller produktion).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Angiv basis-URL\'en for produktions-API\'et (f.eks. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Angiv basis-URL\'en for staging-API\'et (f.eks. https://staging-api.sap.com/v1).',
    'Environment' => 'Miljø',
    'OAuth Authorization URL' => 'OAuth-autorisations-URL',
    'OAuth Redirect URI' => 'OAuth-omdirigerings-URI',
    'OAuth Scope' => 'OAuth-omfang',
    'OAuth Token URL' => 'OAuth-token-URL',
    'Production API URL' => 'Produktions-API-URL',
    'Staging API URL' => 'Staging-API-URL',

    // Integration: Form settings
    'Additional Information' => 'Yderligere oplysninger',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Alle formularfelter inkluderes automatisk i payloadens feltarray. Ovenstående tilknytninger påvirker kun, hvilke felter der vises i headeren.',
    'Header Field Mapping' => 'Tilknytning af headerfelter',
    'Invoice ID Field' => 'Felt til faktura-ID',
    'Member Email Field' => 'Felt til members e-mail',
    'Member ID Field' => 'Felt til member-ID',
    'Member Mobile Field' => 'Felt til members mobilnummer',
    'Select the field that contains the email address.' => 'Vælg det felt, der indeholder e-mailadressen.',
    'Select the field that contains the invoice ID.' => 'Vælg det felt, der indeholder faktura-ID\'et.',
    'Select the field that contains the member ID.' => 'Vælg det felt, der indeholder member-ID\'et.',
    'Select the field that contains the mobile number.' => 'Vælg det felt, der indeholder mobilnummeret.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Vælg hvilke formularfelter der skal tilknyttes headerfelterne (memberID, memberMobile, memberEmail, invoiceID) i SAP-payloaden.',
];
