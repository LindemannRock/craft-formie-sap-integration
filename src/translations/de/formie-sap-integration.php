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

    // Permissions
    'Manage settings' => 'Einstellungen verwalten',

    // Common
    '- None -' => '- Keine -',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} muss auf eine Umgebungsvariable ($VAR) oder einen Alias (@name) verweisen — direkte Werte sind nicht zulässig.',
    'Unable to obtain access token.' => 'Zugriffstoken konnte nicht abgerufen werden.',
    'Connection test failed with status code: {code}' => 'Verbindungstest fehlgeschlagen mit Statuscode: {code}',

    // Settings: General
    'API testing and troubleshooting' => 'API-Tests und Fehlerbehebung',
    'Documentation' => 'Dokumentation',
    'Environment variable examples' => 'Beispiele für Umgebungsvariablen',
    'For setup instructions and API testing, see:' => 'Einrichtungsanweisungen und API-Tests finden Sie unter:',
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'General Settings' => 'Allgemeine Einstellungen',
    'Integration Information' => 'Integrationsinformationen',
    'Integration Location' => 'Integrationsstandort',
    'Plugin Name' => 'Plugin-Name',
    'SAP Integration Status' => 'SAP-Integrationsstatus',
    'The name of the plugin as it appears in the Control Panel menu' => 'Der Name des Plugins, wie er im Control-Panel-Menü erscheint',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Dies wird durch die Einstellung `pluginName` in der Datei `config/formie-sap-integration.php` überschrieben.',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Dieses Plugin stellt die SAP Cloud CRM-Integration für Formie-Formulare bereit. Konfigurieren Sie die Integrationseinstellungen im Tab „Integrationen" des jeweiligen Formulars.',

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
