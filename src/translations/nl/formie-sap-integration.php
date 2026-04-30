<?php
/**
 * Formie SAP Integration translation file (Dutch)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Beheer uw SAP Cloud CRM-integratie.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Bekijk de SAP CRM-integratierichtlijnen en beheer de plugin-instellingen vanuit één werkruimte in het configuratiescherm.',
    'Open Formie SAP Integration' => 'Formie SAP Integration openen',
    'Plugin Name' => 'Pluginnaam',
    'The name of the plugin as it appears in the Control Panel menu' => 'De naam van de plugin zoals deze wordt weergegeven in het menu van het configuratiescherm',

    // Permissions
    'Manage settings' => 'Instellingen beheren',

    // Common
    '- None -' => '- Geen -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Verbindingstest mislukt met statuscode: {code}',
    'Unable to obtain access token.' => 'Kan toegangstoken niet ophalen.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} moet verwijzen naar een omgevingsvariabele ($VAR) of alias (@name) — letterlijke waarden zijn niet toegestaan.',

    // Settings: General
    'General Settings' => 'Algemene instellingen',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Dit wordt overschreven door de instelling `pluginName` in het bestand `config/formie-sap-integration.php`.',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Integratie-informatie',
    'Integration Location' => 'Integratielocatie',
    'SAP Integration Status' => 'SAP-integratiestatus',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Deze plugin biedt de SAP Cloud CRM-integratie voor Formie-formulieren. Configureer de integratie-instellingen in het tabblad Integraties van elk formulier.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'API-testen en probleemoplossing',
    'Documentation' => 'Documentatie',
    'Environment variable examples' => 'Voorbeelden van omgevingsvariabelen',
    'For setup instructions and API testing, see:' => 'Zie voor installatie-instructies en API-testen:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Kies tussen staging en productie',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Klik op de knop {refresh} in de rechter zijbalk.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Neem contact op met uw SAP-beheerder om OAuth-inloggegevens te verkrijgen.',
    'Save this integration.' => 'Sla deze integratie op.',
    'Step 1. Configure SAP Integration' => 'Stap 1. SAP-integratie configureren',
    'Step 2. Test Connection' => 'Stap 2. Verbinding testen',
    'The specific endpoint for form submissions (e.g., {path})' => 'Het specifieke eindpunt voor formulierinzendingen (bijv. {path})',
    'You\'ll need:' => 'U hebt het volgende nodig:',
    'Your OAuth application client ID' => 'De client-ID van uw OAuth-applicatie',
    'Your OAuth application client secret' => 'Het clientgeheim van uw OAuth-applicatie',

    // Integration: Plugin settings
    'API Endpoint' => 'API-eindpunt',
    'Client ID' => 'Client-ID',
    'Client Secret' => 'Client Secret',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Voer indien nodig een aangepaste OAuth-redirect-URI in. Laat leeg om de standaard van Craft te gebruiken.',
    'Enter the OAuth scopes required, comma-separated.' => 'Voer de vereiste OAuth-scopes in, gescheiden door komma\'s.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Voer het SAP API-eindpuntpad in (bijv. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Voer de SAP OAuth-autorisatie-URL in (bijv. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Voer de SAP OAuth Client-ID in.',
    'Enter the SAP OAuth Client Secret.' => 'Voer het SAP OAuth Client Secret in.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Voer de SAP OAuth-token-URL in (bijv. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Voer de SAP-omgeving in waarmee verbinding moet worden gemaakt (staging of productie).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Voer de basis-URL voor de productie-API in (bijv. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Voer de basis-URL voor de staging-API in (bijv. https://staging-api.sap.com/v1).',
    'Environment' => 'Omgeving',
    'OAuth Authorization URL' => 'OAuth-autorisatie-URL',
    'OAuth Redirect URI' => 'OAuth-redirect-URI',
    'OAuth Scope' => 'OAuth-scope',
    'OAuth Token URL' => 'OAuth-token-URL',
    'Production API URL' => 'Productie-API-URL',
    'Staging API URL' => 'Staging-API-URL',

    // Integration: Form settings
    'Additional Information' => 'Aanvullende informatie',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Alle formuliervelden worden automatisch opgenomen in de velden-array van de payload. De bovenstaande koppelingen bepalen alleen welke velden in de header verschijnen.',
    'Header Field Mapping' => 'Koppeling van headervelden',
    'Invoice ID Field' => 'Veld factuur-ID',
    'Member Email Field' => 'Veld e-mailadres lid',
    'Member ID Field' => 'Veld lid-ID',
    'Member Mobile Field' => 'Veld mobiel nummer lid',
    'Select the field that contains the email address.' => 'Selecteer het veld dat het e-mailadres bevat.',
    'Select the field that contains the invoice ID.' => 'Selecteer het veld dat de factuur-ID bevat.',
    'Select the field that contains the member ID.' => 'Selecteer het veld dat de lid-ID bevat.',
    'Select the field that contains the mobile number.' => 'Selecteer het veld dat het mobiele nummer bevat.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Selecteer welke formuliervelden moeten worden gekoppeld aan de headervelden (memberID, memberMobile, memberEmail, invoiceID) in de SAP-payload.',
];
