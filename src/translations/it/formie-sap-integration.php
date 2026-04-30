<?php
/**
 * Formie SAP Integration translation file (Italian)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Gestisca la sua integrazione SAP Cloud CRM.',

    // Permissions
    'Manage settings' => 'Gestisci impostazioni',

    // Common
    '- None -' => '- Nessuno -',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} deve fare riferimento a una variabile d\'ambiente ($VAR) o a un alias (@name) — i valori letterali non sono consentiti.',
    'Unable to obtain access token.' => 'Impossibile ottenere il token di accesso.',
    'Connection test failed with status code: {code}' => 'Il test di connessione è fallito con il codice di stato: {code}',

    // Settings: General
    'API testing and troubleshooting' => 'Test API e risoluzione dei problemi',
    'Documentation' => 'Documentazione',
    'Environment variable examples' => 'Esempi di variabili d\'ambiente',
    'For setup instructions and API testing, see:' => 'Per le istruzioni di configurazione e i test API, vedere:',
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'General Settings' => 'Impostazioni generali',
    'Integration Information' => 'Informazioni sull\'integrazione',
    'Integration Location' => 'Posizione dell\'integrazione',
    'Plugin Name' => 'Nome del plugin',
    'SAP Integration Status' => 'Stato dell\'integrazione SAP',
    'The name of the plugin as it appears in the Control Panel menu' => 'Il nome del plugin come appare nel menu del pannello di controllo',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Questa impostazione viene sovrascritta dal parametro `pluginName` nel file `config/formie-sap-integration.php`.',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Questo plugin fornisce l\'integrazione SAP Cloud CRM per i moduli Formie. Configuri le impostazioni di integrazione nella scheda Integrazioni di ogni modulo.',

    // Integration: Setup guide
    'Choose between staging or production' => 'Scelga tra staging e produzione',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Faccia clic sul pulsante {refresh} nella barra laterale destra.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Contatti il suo amministratore SAP per ottenere le credenziali OAuth.',
    'Save this integration.' => 'Salvi questa integrazione.',
    'Step 1. Configure SAP Integration' => 'Passaggio 1. Configurare l\'integrazione SAP',
    'Step 2. Test Connection' => 'Passaggio 2. Testare la connessione',
    'The specific endpoint for form submissions (e.g., {path})' => 'L\'endpoint specifico per l\'invio dei moduli (es. {path})',
    'You\'ll need:' => 'Avrà bisogno di:',
    'Your OAuth application client ID' => 'L\'ID cliente della sua applicazione OAuth',
    'Your OAuth application client secret' => 'Il segreto cliente della sua applicazione OAuth',

    // Integration: Plugin settings
    'API Endpoint' => 'Endpoint API',
    'Client ID' => 'ID cliente',
    'Client Secret' => 'Segreto cliente',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Inserisca un URI di reindirizzamento OAuth personalizzato se necessario. Lasci vuoto per utilizzare il valore predefinito di Craft.',
    'Enter the OAuth scopes required, comma-separated.' => 'Inserisca gli scope OAuth richiesti, separati da virgole.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Inserisca il percorso dell\'endpoint SAP API (es. /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Inserisca l\'URL di autorizzazione SAP OAuth (es. https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Inserisca l\'ID cliente SAP OAuth.',
    'Enter the SAP OAuth Client Secret.' => 'Inserisca il segreto cliente SAP OAuth.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Inserisca l\'URL del token SAP OAuth (es. https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Inserisca l\'ambiente SAP a cui connettersi (staging o produzione).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Inserisca l\'URL base per l\'API di produzione (es. https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Inserisca l\'URL base per l\'API di staging (es. https://staging-api.sap.com/v1).',
    'Environment' => 'Ambiente',
    'OAuth Authorization URL' => 'URL di autorizzazione OAuth',
    'OAuth Redirect URI' => 'URI di reindirizzamento OAuth',
    'OAuth Scope' => 'Scope OAuth',
    'OAuth Token URL' => 'URL del token OAuth',
    'Production API URL' => 'URL API di produzione',
    'Staging API URL' => 'URL API di staging',

    // Integration: Form settings
    'Additional Information' => 'Informazioni aggiuntive',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Tutti i campi del modulo saranno inclusi automaticamente nell\'array dei campi del payload. I mapping soprastanti influiscono solo sui campi che appaiono nell\'intestazione.',
    'Header Field Mapping' => 'Mapping dei campi intestazione',
    'Invoice ID Field' => 'Campo ID fattura',
    'Member Email Field' => 'Campo e-mail del membro',
    'Member ID Field' => 'Campo ID membro',
    'Member Mobile Field' => 'Campo mobile del membro',
    'Select the field that contains the email address.' => 'Selezioni il campo che contiene l\'indirizzo e-mail.',
    'Select the field that contains the invoice ID.' => 'Selezioni il campo che contiene l\'ID fattura.',
    'Select the field that contains the member ID.' => 'Selezioni il campo che contiene l\'ID membro.',
    'Select the field that contains the mobile number.' => 'Selezioni il campo che contiene il numero di cellulare.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Selezioni quali campi del modulo devono essere mappati ai campi intestazione (memberID, memberMobile, memberEmail, invoiceID) nel payload SAP.',
];
