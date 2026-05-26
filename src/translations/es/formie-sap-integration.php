<?php
/**
 * Formie SAP Integration translation file (Spanish)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'Administre su integración SAP Cloud CRM.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'Revise las instrucciones de integración SAP CRM y gestione los ajustes del plugin desde un único espacio de trabajo en el panel de control.',
    'Open Formie SAP Integration' => 'Abrir Formie SAP Integration',

    // Permissions
    'Manage settings' => 'Gestionar configuración',

    // Common
    '- None -' => '- Ninguno -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'La prueba de conexión falló con el código de estado: {code}',
    'Unable to obtain access token.' => 'No se pudo obtener el token de acceso.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => '{attribute} debe hacer referencia a una variable de entorno ($VAR) o un alias (@name) — los valores literales no están permitidos.',

    // Settings: General
    'General Settings' => 'Configuración general',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'Información de integración',
    'Integration Location' => 'Ubicación de la integración',
    'SAP Integration Status' => 'Estado de la integración SAP',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'Este plugin proporciona la integración SAP Cloud CRM para los formularios de Formie. Configure los parámetros de integración en la pestaña Integraciones de cada formulario.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'Pruebas de API y resolución de problemas',
    'Documentation' => 'Documentación',
    'Environment variable examples' => 'Ejemplos de variables de entorno',
    'For setup instructions and API testing, see:' => 'Para instrucciones de configuración y pruebas de API, consulte:',

    // Integration: Setup guide
    'Choose between staging or production' => 'Elija entre staging o producción',
    'Click on the {refresh} button in the right-hand sidebar.' => 'Haga clic en el botón {refresh} de la barra lateral derecha.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'Póngase en contacto con su administrador de SAP para obtener las credenciales OAuth.',
    'Save this integration.' => 'Guarde esta integración.',
    'Step 1. Configure SAP Integration' => 'Paso 1. Configurar la integración SAP',
    'Step 2. Test Connection' => 'Paso 2. Probar la conexión',
    'The specific endpoint for form submissions (e.g., {path})' => 'El endpoint específico para los envíos de formularios (p. ej., {path})',
    'You\'ll need:' => 'Necesitará:',
    'Your OAuth application client ID' => 'El ID de cliente de su aplicación OAuth',
    'Your OAuth application client secret' => 'El secreto de cliente de su aplicación OAuth',

    // Integration: Plugin settings
    'API Endpoint' => 'Endpoint de API',
    'Client ID' => 'ID de cliente',
    'Client Secret' => 'Secreto de cliente',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'Introduzca un URI de redirección OAuth personalizado si es necesario. Déjelo vacío para usar el valor predeterminado de Craft.',
    'Enter the OAuth scopes required, comma-separated.' => 'Introduzca los alcances OAuth requeridos, separados por comas.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'Introduzca la ruta del endpoint SAP API (p. ej., /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'Introduzca la URL de autorización SAP OAuth (p. ej., https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'Introduzca el ID de cliente SAP OAuth.',
    'Enter the SAP OAuth Client Secret.' => 'Introduzca el secreto de cliente SAP OAuth.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'Introduzca la URL de token SAP OAuth (p. ej., https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'Introduzca el entorno SAP al que conectarse (staging o producción).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'Introduzca la URL base para la API de producción (p. ej., https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'Introduzca la URL base para la API de staging (p. ej., https://staging-api.sap.com/v1).',
    'Environment' => 'Entorno',
    'OAuth Authorization URL' => 'URL de autorización OAuth',
    'OAuth Redirect URI' => 'URI de redirección OAuth',
    'OAuth Scope' => 'Alcance OAuth',
    'OAuth Token URL' => 'URL de token OAuth',
    'Production API URL' => 'URL de API de producción',
    'Staging API URL' => 'URL de API de staging',

    // Integration: Form settings
    'Additional Information' => 'Información adicional',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'Todos los campos del formulario se incluirán automáticamente en el array de campos del payload. Los mapeos anteriores solo afectan a los campos que aparecen en el encabezado.',
    'Header Field Mapping' => 'Mapeo de campos de encabezado',
    'Invoice ID Field' => 'Campo ID de factura',
    'Member Email Field' => 'Campo de correo electrónico del miembro',
    'Member ID Field' => 'Campo ID de miembro',
    'Member Mobile Field' => 'Campo de móvil del miembro',
    'Select the field that contains the email address.' => 'Seleccione el campo que contiene la dirección de correo electrónico.',
    'Select the field that contains the invoice ID.' => 'Seleccione el campo que contiene el ID de factura.',
    'Select the field that contains the member ID.' => 'Seleccione el campo que contiene el ID de miembro.',
    'Select the field that contains the mobile number.' => 'Seleccione el campo que contiene el número de móvil.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'Seleccione qué campos del formulario deben mapearse a los campos de encabezado (memberID, memberMobile, memberEmail, invoiceID) en el payload de SAP.',
];
