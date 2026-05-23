<?php
/**
 * Formie SAP Integration translation file (Swedish)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Hantera din SAP Cloud CRM-integration.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Granska vägledningen för SAP CRM-integration och hantera plugin-inställningar från ett enda arbetsområde i kontrollpanelen.',
    'Open Formie SAP Integration' => 'Öppna Formie SAP Integration',

    // Permissions
    'Manage settings' => 'Hantera inställningar',

    // Common
    '- None -' => '- Ingen -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Anslutningstestet misslyckades med statuskod: {code}',
    'Unable to obtain access token.' => 'Det gick inte att hämta åtkomsttoken.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} måste referera till en miljövariabel ($VAR) eller ett alias (@name) — literala värden är inte tillåtna.',

    // Settings: General
    'General Settings' => 'Allmänna inställningar',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Detta åsidosätts av inställningen `pluginName` i filen `config/formie-sap-integration.php`.',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Integrationsinformation',
    'Integration Location' => 'Integrationsplats',
    'SAP Integration Status' => 'SAP-integrationsstatus',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Det här pluginet tillhandahåller SAP Cloud CRM-integrationen för Formie-formulär. Konfigurera integrationsinställningarna på fliken Integrations i varje formulär.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'API-testning och felsökning',
    'Documentation' => 'Dokumentation',
    'Environment variable examples' => 'Exempel på miljövariabler',
    'For setup instructions and API testing, see:' => 'För installationsanvisningar och API-testning, se:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Välj mellan staging och produktion',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Klicka på knappen {refresh} i den högra sidopanelen.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Kontakta din SAP-administratör för att erhålla OAuth-uppgifter.',
    'Save this integration.' => 'Spara denna integration.',
    'Step 1. Configure SAP Integration' => 'Steg 1. Konfigurera SAP-integrationen',
    'Step 2. Test Connection' => 'Steg 2. Testa anslutningen',
    'The specific endpoint for form submissions (e.g., {path})' => 'Den specifika slutpunkten för formulärinlämningar (t.ex. {path})',
    'You\'ll need:' => 'Du behöver:',
    'Your OAuth application client ID' => 'Klient-ID för ditt OAuth-program',
    'Your OAuth application client secret' => 'Klienthemligheten för ditt OAuth-program',

    // Integration: Plugin settings
    'API Endpoint' => 'API-slutpunkt',
    'Client ID' => 'Klient-ID',
    'Client Secret' => 'Klienthemlighet',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Ange en anpassad OAuth-omdirigerings-URI om det behövs. Lämna tomt för att använda Crafts standardvärde.',
    'Enter the OAuth scopes required, comma-separated.' => 'Ange de OAuth-omfång som krävs, kommaseparerade.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Ange SAP API-slutpunktssökvägen (t.ex. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Ange SAP OAuth-auktoriserings-URL:en (t.ex. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Ange SAP OAuth-klient-ID.',
    'Enter the SAP OAuth Client Secret.' => 'Ange SAP OAuth-klienthemligheten.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Ange SAP OAuth-token-URL:en (t.ex. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Ange den SAP-miljö att ansluta till (staging eller produktion).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Ange bas-URL:en för produktions-API:et (t.ex. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Ange bas-URL:en för staging-API:et (t.ex. https://staging-api.sap.com/v1).',
    'Environment' => 'Miljö',
    'OAuth Authorization URL' => 'OAuth-auktoriserings-URL',
    'OAuth Redirect URI' => 'OAuth-omdirigerings-URI',
    'OAuth Scope' => 'OAuth-omfång',
    'OAuth Token URL' => 'OAuth-token-URL',
    'Production API URL' => 'Produktions-API-URL',
    'Staging API URL' => 'Staging-API-URL',

    // Integration: Form settings
    'Additional Information' => 'Ytterligare information',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Alla formulärfält kommer automatiskt att inkluderas i payloadens fältarray. Ovanstående mappningar påverkar bara vilka fält som visas i headern.',
    'Header Field Mapping' => 'Mappning av headerfält',
    'Invoice ID Field' => 'Fält för faktura-ID',
    'Member Email Field' => 'Fält för members e-post',
    'Member ID Field' => 'Fält för member-ID',
    'Member Mobile Field' => 'Fält för members mobilnummer',
    'Select the field that contains the email address.' => 'Välj det fält som innehåller e-postadressen.',
    'Select the field that contains the invoice ID.' => 'Välj det fält som innehåller faktura-ID:t.',
    'Select the field that contains the member ID.' => 'Välj det fält som innehåller member-ID:t.',
    'Select the field that contains the mobile number.' => 'Välj det fält som innehåller mobilnumret.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Välj vilka formulärfält som ska mappas till headerfälten (memberID, memberMobile, memberEmail, invoiceID) i SAP-payloaden.',
];
