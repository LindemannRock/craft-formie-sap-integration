<?php
/**
 * Formie SAP Integration translation file (Portuguese)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Gira a sua integração SAP Cloud CRM.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Reveja as orientações de integração SAP CRM e gira as definições do plugin a partir de um único espaço de trabalho no painel de controlo.',
    'Open Formie SAP Integration' => 'Abrir Formie SAP Integration',

    // Permissions
    'Manage settings' => 'Gerir definições',

    // Common
    '- None -' => '- Nenhum -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'O teste de ligação falhou com o código de estado: {code}',
    'Unable to obtain access token.' => 'Não foi possível obter o token de acesso.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} deve referenciar uma variável de ambiente ($VAR) ou um alias (@name) — valores literais não são permitidos.',

    // Settings: General
    'General Settings' => 'Definições gerais',
    'This is being overridden by the `pluginName` setting in the `config/formie-sap-integration.php` file.' => 'Esta definição está a ser substituída pelo parâmetro `pluginName` no ficheiro `config/formie-sap-integration.php`.',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Informações de integração',
    'Integration Location' => 'Localização da integração',
    'SAP Integration Status' => 'Estado da integração SAP',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Este plugin fornece a integração SAP Cloud CRM para formulários Formie. Configure as definições de integração no separador Integrações de cada formulário.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'Testes de API e resolução de problemas',
    'Documentation' => 'Documentação',
    'Environment variable examples' => 'Exemplos de variáveis de ambiente',
    'For setup instructions and API testing, see:' => 'Para instruções de configuração e testes de API, consulte:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Escolha entre staging ou produção',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Clique no botão {refresh} na barra lateral direita.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Contacte o seu administrador SAP para obter as credenciais OAuth.',
    'Save this integration.' => 'Guarde esta integração.',
    'Step 1. Configure SAP Integration' => 'Passo 1. Configurar a integração SAP',
    'Step 2. Test Connection' => 'Passo 2. Testar a ligação',
    'The specific endpoint for form submissions (e.g., {path})' => 'O endpoint específico para submissões de formulários (p. ex., {path})',
    'You\'ll need:' => 'Irá precisar de:',
    'Your OAuth application client ID' => 'O ID de cliente da sua aplicação OAuth',
    'Your OAuth application client secret' => 'O segredo do cliente da sua aplicação OAuth',

    // Integration: Plugin settings
    'API Endpoint' => 'Endpoint de API',
    'Client ID' => 'ID de cliente',
    'Client Secret' => 'Segredo do cliente',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Introduza um URI de redireccionamento OAuth personalizado, se necessário. Deixe em branco para utilizar o valor predefinido do Craft.',
    'Enter the OAuth scopes required, comma-separated.' => 'Introduza os âmbitos OAuth necessários, separados por vírgulas.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Introduza o caminho do endpoint SAP API (p. ex., /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Introduza o URL de autorização SAP OAuth (p. ex., https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Introduza o ID de cliente SAP OAuth.',
    'Enter the SAP OAuth Client Secret.' => 'Introduza o segredo do cliente SAP OAuth.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Introduza o URL do token SAP OAuth (p. ex., https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Introduza o ambiente SAP ao qual se conectar (staging ou produção).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Introduza o URL base para a API de produção (p. ex., https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Introduza o URL base para a API de staging (p. ex., https://staging-api.sap.com/v1).',
    'Environment' => 'Ambiente',
    'OAuth Authorization URL' => 'URL de autorização OAuth',
    'OAuth Redirect URI' => 'URI de redireccionamento OAuth',
    'OAuth Scope' => 'Âmbito OAuth',
    'OAuth Token URL' => 'URL do token OAuth',
    'Production API URL' => 'URL de API de produção',
    'Staging API URL' => 'URL de API de staging',

    // Integration: Form settings
    'Additional Information' => 'Informações adicionais',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Todos os campos do formulário serão incluídos automaticamente no array de campos do payload. Os mapeamentos acima afectam apenas os campos que aparecem no cabeçalho.',
    'Header Field Mapping' => 'Mapeamento de campos de cabeçalho',
    'Invoice ID Field' => 'Campo de ID de factura',
    'Member Email Field' => 'Campo de e-mail do membro',
    'Member ID Field' => 'Campo de ID de membro',
    'Member Mobile Field' => 'Campo de telemóvel do membro',
    'Select the field that contains the email address.' => 'Seleccione o campo que contém o endereço de e-mail.',
    'Select the field that contains the invoice ID.' => 'Seleccione o campo que contém o ID de factura.',
    'Select the field that contains the member ID.' => 'Seleccione o campo que contém o ID de membro.',
    'Select the field that contains the mobile number.' => 'Seleccione o campo que contém o número de telemóvel.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Seleccione quais os campos do formulário que devem ser mapeados para os campos de cabeçalho (memberID, memberMobile, memberEmail, invoiceID) no payload SAP.',
];
