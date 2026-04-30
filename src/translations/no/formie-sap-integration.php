<?php
/**
 * Formie SAP Integration translation file (Norwegian)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Administrer din SAP Cloud CRM-integrasjon.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Gjennomgå veiledningen for SAP CRM-integrasjon og administrer plugin-innstillinger fra ett arbeidsområde i kontrollpanelet.',
    'Open Formie SAP Integration' => 'Åpne Formie SAP Integration',
    'Plugin Name' => 'Plugin-navn',
    'The name of the plugin as it appears in the Control Panel menu' => 'Navnet på pluginen slik det vises i kontrollpanelets meny',

    // Permissions
    'Manage settings' => 'Administrer innstillinger',

    // Common
    '- None -' => '- Ingen -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Tilkoblingstesten mislyktes med statuskode: {code}',
    'Unable to obtain access token.' => 'Kunne ikke hente tilgangstoken.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} må referere til en miljøvariabel ($VAR) eller et alias (@name) — bokstavelige verdier er ikke tillatt.',

    // Settings: General
    'General Settings' => 'Generelle innstillinger',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Dette overstyres av innstillingen `pluginName` i filen `config/formie-sap-integration.php`.',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Integrasjonsinformasjon',
    'Integration Location' => 'Integrasjonsplassering',
    'SAP Integration Status' => 'SAP-integrasjonsstatus',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Dette pluginet gir SAP Cloud CRM-integrasjonen for Formie-skjemaer. Konfigurer integrasjonsinnstillingene i fanen Integrations i hvert skjema.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'API-testing og feilsøking',
    'Documentation' => 'Dokumentasjon',
    'Environment variable examples' => 'Eksempler på miljøvariabler',
    'For setup instructions and API testing, see:' => 'For installasjonsveiledning og API-testing, se:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Velg mellom staging og produksjon',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Klikk på {refresh}-knappen i den høyre sidepanelet.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Kontakt din SAP-administrator for å få OAuth-legitimasjon.',
    'Save this integration.' => 'Lagre denne integrasjonen.',
    'Step 1. Configure SAP Integration' => 'Trinn 1. Konfigurer SAP-integrasjonen',
    'Step 2. Test Connection' => 'Trinn 2. Test tilkoblingen',
    'The specific endpoint for form submissions (e.g., {path})' => 'Det spesifikke endepunktet for skjemainnsendinger (f.eks. {path})',
    'You\'ll need:' => 'Du trenger:',
    'Your OAuth application client ID' => 'Klient-ID-en til OAuth-applikasjonen din',
    'Your OAuth application client secret' => 'Klienthemmeligheten til OAuth-applikasjonen din',

    // Integration: Plugin settings
    'API Endpoint' => 'API-endepunkt',
    'Client ID' => 'Klient-ID',
    'Client Secret' => 'Klienthemmelighet',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Angi en egendefinert OAuth-omdirigerings-URI om nødvendig. La feltet stå tomt for å bruke Crafts standard.',
    'Enter the OAuth scopes required, comma-separated.' => 'Angi de nødvendige OAuth-omfangene, atskilt med kommaer.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Angi stien til SAP API-endepunktet (f.eks. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Angi SAP OAuth-autorisasjons-URL-en (f.eks. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Angi SAP OAuth-klient-ID-en.',
    'Enter the SAP OAuth Client Secret.' => 'Angi SAP OAuth-klienthemmeligheten.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Angi SAP OAuth-token-URL-en (f.eks. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Angi SAP-miljøet det skal kobles til (staging eller produksjon).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Angi basis-URL-en for produksjons-API-et (f.eks. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Angi basis-URL-en for staging-API-et (f.eks. https://staging-api.sap.com/v1).',
    'Environment' => 'Miljø',
    'OAuth Authorization URL' => 'OAuth-autorisasjons-URL',
    'OAuth Redirect URI' => 'OAuth-omdirigerings-URI',
    'OAuth Scope' => 'OAuth-omfang',
    'OAuth Token URL' => 'OAuth-token-URL',
    'Production API URL' => 'Produksjons-API-URL',
    'Staging API URL' => 'Staging-API-URL',

    // Integration: Form settings
    'Additional Information' => 'Tilleggsinformasjon',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Alle skjemafelt vil automatisk inkluderes i payloadens feltarray. Tilordningene ovenfor påvirker bare hvilke felt som vises i headeren.',
    'Header Field Mapping' => 'Tilordning av headerfelt',
    'Invoice ID Field' => 'Felt for faktura-ID',
    'Member Email Field' => 'Felt for members e-post',
    'Member ID Field' => 'Felt for member-ID',
    'Member Mobile Field' => 'Felt for members mobilnummer',
    'Select the field that contains the email address.' => 'Velg feltet som inneholder e-postadressen.',
    'Select the field that contains the invoice ID.' => 'Velg feltet som inneholder faktura-ID-en.',
    'Select the field that contains the member ID.' => 'Velg feltet som inneholder member-ID-en.',
    'Select the field that contains the mobile number.' => 'Velg feltet som inneholder mobilnummeret.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Velg hvilke skjemafelt som skal tilordnes headerfeltene (memberID, memberMobile, memberEmail, invoiceID) i SAP-payloaden.',
];
