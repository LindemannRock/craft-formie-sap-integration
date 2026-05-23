<?php
/**
 * Formie SAP Integration translation file (French)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Gérez votre intégration SAP Cloud CRM.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Consultez les instructions d\'intégration SAP CRM et gérez les paramètres du plugin depuis un espace de travail unique dans le panneau de contrôle.',
    'Open Formie SAP Integration' => 'Ouvrir Formie SAP Integration',

    // Permissions
    'Manage settings' => 'Gérer les paramètres',

    // Common
    '- None -' => '- Aucun -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'Le test de connexion a échoué avec le code de statut : {code}',
    'Unable to obtain access token.' => 'Impossible d\'obtenir le jeton d\'accès.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} doit référencer une variable d\'environnement ($VAR) ou un alias (@name) — les valeurs littérales ne sont pas autorisées.',

    // Settings: General
    'General Settings' => 'Paramètres généraux',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Ce paramètre est remplacé par le paramètre `pluginName` dans le fichier `config/formie-sap-integration.php`.',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Informations sur l\'intégration',
    'Integration Location' => 'Emplacement de l\'intégration',
    'SAP Integration Status' => 'Statut de l\'intégration SAP',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Ce plugin fournit l\'intégration SAP Cloud CRM pour les formulaires Formie. Configurez les paramètres d\'intégration dans l\'onglet Intégrations de chaque formulaire.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'Tests API et résolution de problèmes',
    'Documentation' => 'Documentation',
    'Environment variable examples' => 'Exemples de variables d\'environnement',
    'For setup instructions and API testing, see:' => 'Pour les instructions de configuration et les tests API, voir :',

    // Integration: Setup guide
    'Choose between staging or production' => 'Choisissez entre staging et production',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Cliquez sur le bouton {refresh} dans la barre latérale droite.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Contactez votre administrateur SAP pour obtenir les identifiants OAuth.',
    'Save this integration.' => 'Enregistrez cette intégration.',
    'Step 1. Configure SAP Integration' => 'Étape 1. Configurer l\'intégration SAP',
    'Step 2. Test Connection' => 'Étape 2. Tester la connexion',
    'The specific endpoint for form submissions (e.g., {path})' => 'Le point de terminaison spécifique pour les soumissions de formulaire (p. ex., {path})',
    'You\'ll need:' => 'Vous aurez besoin de :',
    'Your OAuth application client ID' => 'L\'ID client de votre application OAuth',
    'Your OAuth application client secret' => 'Le secret client de votre application OAuth',

    // Integration: Plugin settings
    'API Endpoint' => 'Point de terminaison API',
    'Client ID' => 'ID client',
    'Client Secret' => 'Secret client',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Saisissez un URI de redirection OAuth personnalisé si nécessaire. Laissez vide pour utiliser la valeur par défaut de Craft.',
    'Enter the OAuth scopes required, comma-separated.' => 'Saisissez les portées OAuth requises, séparées par des virgules.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Saisissez le chemin du point de terminaison SAP API (p. ex., /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Saisissez l\'URL d\'autorisation SAP OAuth (p. ex., https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Saisissez l\'ID client SAP OAuth.',
    'Enter the SAP OAuth Client Secret.' => 'Saisissez le secret client SAP OAuth.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Saisissez l\'URL de jeton SAP OAuth (p. ex., https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Saisissez l\'environnement SAP auquel vous connecter (staging ou production).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Saisissez l\'URL de base pour l\'API de production (p. ex., https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Saisissez l\'URL de base pour l\'API de staging (p. ex., https://staging-api.sap.com/v1).',
    'Environment' => 'Environnement',
    'OAuth Authorization URL' => 'URL d\'autorisation OAuth',
    'OAuth Redirect URI' => 'URI de redirection OAuth',
    'OAuth Scope' => 'Portée OAuth',
    'OAuth Token URL' => 'URL de jeton OAuth',
    'Production API URL' => 'URL de l\'API de production',
    'Staging API URL' => 'URL de l\'API de staging',

    // Integration: Form settings
    'Additional Information' => 'Informations supplémentaires',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Tous les champs du formulaire seront automatiquement inclus dans le tableau de champs du payload. Les mappages ci-dessus n\'affectent que les champs qui apparaissent dans l\'en-tête.',
    'Header Field Mapping' => 'Mappage des champs d\'en-tête',
    'Invoice ID Field' => 'Champ ID de facture',
    'Member Email Field' => 'Champ e-mail du membre',
    'Member ID Field' => 'Champ ID du membre',
    'Member Mobile Field' => 'Champ mobile du membre',
    'Select the field that contains the email address.' => 'Sélectionnez le champ qui contient l\'adresse e-mail.',
    'Select the field that contains the invoice ID.' => 'Sélectionnez le champ qui contient l\'ID de facture.',
    'Select the field that contains the member ID.' => 'Sélectionnez le champ qui contient l\'ID du membre.',
    'Select the field that contains the mobile number.' => 'Sélectionnez le champ qui contient le numéro de mobile.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Sélectionnez les champs du formulaire à mapper sur les champs d\'en-tête (memberID, memberMobile, memberEmail, invoiceID) dans le payload SAP.',
];
