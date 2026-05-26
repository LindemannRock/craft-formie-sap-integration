<?php
/**
 * Formie SAP Integration translation file (German)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Verwalten Sie Ihre SAP Cloud CRM-Integration.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Lesen Sie die Hinweise zur SAP CRM-Integration und verwalten Sie die Plugin-Einstellungen in einem zentralen Control-Panel-Bereich.',
    'Open Formie SAP Integration' => 'Formie SAP Integration öffnen',

    // Permissions
    'Manage settings' => 'Einstellungen verwalten',

    // Common
    '- None -' => '- Keine -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Verbindungstest fehlgeschlagen mit Statuscode: {code}',
    'Unable to obtain access token.' => 'Zugriffstoken konnte nicht abgerufen werden.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} muss auf eine Umgebungsvariable ($VAR) oder einen Alias (@name) verweisen — direkte Werte sind nicht zulässig.',

    // Settings: General
    'General Settings' => 'Allgemeine Einstellungen',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Integrationsinformationen',
    'Integration Location' => 'Integrationsstandort',
    'SAP Integration Status' => 'SAP-Integrationsstatus',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Dieses Plugin stellt die SAP Cloud CRM-Integration für Formie-Formulare bereit. Konfigurieren Sie die Integrationseinstellungen im Tab „Integrationen" des jeweiligen Formulars.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'API-Tests und Fehlerbehebung',
    'Documentation' => 'Dokumentation',
    'Environment variable examples' => 'Beispiele für Umgebungsvariablen',
    'For setup instructions and API testing, see:' => 'Einrichtungsanweisungen und API-Tests finden Sie unter:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Wählen Sie zwischen Staging und Produktion',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Klicken Sie auf die Schaltfläche {refresh} in der rechten Seitenleiste.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Wenden Sie sich an Ihren SAP-Administrator, um OAuth-Zugangsdaten zu erhalten.',
    'Save this integration.' => 'Speichern Sie diese Integration.',
    'Step 1. Configure SAP Integration' => 'Schritt 1. SAP-Integration konfigurieren',
    'Step 2. Test Connection' => 'Schritt 2. Verbindung testen',
    'The specific endpoint for form submissions (e.g., {path})' => 'Der spezifische Endpunkt für Formularübermittlungen (z. B. {path})',
    'You\'ll need:' => 'Sie benötigen:',
    'Your OAuth application client ID' => 'Die OAuth-Anwendungs-Client-ID',
    'Your OAuth application client secret' => 'Das OAuth-Anwendungs-Client-Secret',

    // Integration: Plugin settings
    'API Endpoint' => 'API-Endpunkt',
    'Client ID' => 'Client-ID',
    'Client Secret' => 'Client Secret',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Geben Sie bei Bedarf eine benutzerdefinierte OAuth-Redirect-URI ein. Lassen Sie das Feld leer, um Crafts Standard zu verwenden.',
    'Enter the OAuth scopes required, comma-separated.' => 'Geben Sie die erforderlichen OAuth-Geltungsbereiche kommagetrennt ein.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Geben Sie den SAP API-Endpunkt-Pfad ein (z. B. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Geben Sie die SAP OAuth-Autorisierungs-URL ein (z. B. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Geben Sie die SAP OAuth Client-ID ein.',
    'Enter the SAP OAuth Client Secret.' => 'Geben Sie das SAP OAuth Client Secret ein.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Geben Sie die SAP OAuth-Token-URL ein (z. B. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Geben Sie die SAP-Umgebung ein, mit der verbunden werden soll (Staging oder Produktion).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Geben Sie die Basis-URL für die Produktions-API ein (z. B. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Geben Sie die Basis-URL für die Staging-API ein (z. B. https://staging-api.sap.com/v1).',
    'Environment' => 'Umgebung',
    'OAuth Authorization URL' => 'OAuth-Autorisierungs-URL',
    'OAuth Redirect URI' => 'OAuth-Redirect-URI',
    'OAuth Scope' => 'OAuth-Geltungsbereich',
    'OAuth Token URL' => 'OAuth-Token-URL',
    'Production API URL' => 'Produktions-API-URL',
    'Staging API URL' => 'Staging-API-URL',

    // Integration: Form settings
    'Additional Information' => 'Zusätzliche Informationen',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Alle Formularfelder werden automatisch in das Fields-Array des Payloads aufgenommen. Die obigen Zuordnungen bestimmen nur, welche Felder im Header erscheinen.',
    'Header Field Mapping' => 'Header-Feldzuordnung',
    'Invoice ID Field' => 'Rechnungs-ID-Feld',
    'Member Email Field' => 'Mitglieds-E-Mail-Feld',
    'Member ID Field' => 'Mitglieds-ID-Feld',
    'Member Mobile Field' => 'Mitglieds-Mobilfeld',
    'Select the field that contains the email address.' => 'Wählen Sie das Feld aus, das die E-Mail-Adresse enthält.',
    'Select the field that contains the invoice ID.' => 'Wählen Sie das Feld aus, das die Rechnungs-ID enthält.',
    'Select the field that contains the member ID.' => 'Wählen Sie das Feld aus, das die Mitglieds-ID enthält.',
    'Select the field that contains the mobile number.' => 'Wählen Sie das Feld aus, das die Mobiltelefonnummer enthält.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Wählen Sie aus, welche Formularfelder den Header-Feldern (memberID, memberMobile, memberEmail, invoiceID) im SAP-Payload zugeordnet werden sollen.',
];
