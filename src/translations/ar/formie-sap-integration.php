<?php
/**
 * Formie SAP Integration translation file (Arabic)
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

return [
    // Plugin meta
    'Formie SAP Integration' => 'Formie SAP Integration',
    'Manage your SAP Cloud CRM integration.' => 'إدارة تكامل SAP Cloud CRM الخاص بك.',
    'Review SAP CRM integration guidance and manage plugin-level settings from one control panel workspace.' => 'راجع إرشادات تكامل SAP CRM وأدر إعدادات الإضافة من مساحة عمل واحدة في لوحة التحكم.',
    'Open Formie SAP Integration' => 'فتح Formie SAP Integration',

    // Permissions
    'Manage settings' => 'إدارة الإعدادات',

    // Common
    '- None -' => '- لا شيء -',

    // Controller messages
    'Connection test failed with status code: {code}' => 'فشل اختبار الاتصال برمز الحالة: {code}',
    'Unable to obtain access token.' => 'تعذّر الحصول على رمز الوصول.',

    // Validation messages
    '{attribute} must reference an environment variable ($VAR) or alias (@name) — literal values are not permitted.' => 'يجب أن يشير {attribute} إلى متغير بيئة ($VAR) أو اسم مستعار (@name) — القيم الحرفية غير مسموح بها.',

    // Settings: General
    'General Settings' => 'الإعدادات العامة',

    // Settings: Integration Information
    'Forms → [Form Name] → Integrations → CRM → SAP Cloud' => 'Forms → [Form Name] → Integrations → CRM → SAP Cloud',
    'Integration Information' => 'معلومات التكامل',
    'Integration Location' => 'موقع التكامل',
    'SAP Integration Status' => 'حالة تكامل SAP',
    'This plugin provides the SAP Cloud CRM integration for Formie forms. Configure the integration settings within each form\'s Integrations tab.' => 'توفر هذه الإضافة تكامل SAP Cloud CRM لنماذج Formie. قم بتكوين إعدادات التكامل ضمن تبويب Integrations في كل نموذج.',

    // Settings: Documentation
    'API testing and troubleshooting' => 'اختبار API واستكشاف الأخطاء وإصلاحها',
    'Documentation' => 'التوثيق',
    'Environment variable examples' => 'أمثلة على متغيرات البيئة',
    'For setup instructions and API testing, see:' => 'للاطلاع على تعليمات الإعداد واختبار API، راجع:',

    // Integration: Setup guide
    'Choose between staging or production' => 'اختر بين البيئة التجريبية أو الإنتاج',
    'Click on the {refresh} button in the right-hand sidebar.' => 'انقر على زر {refresh} في الشريط الجانبي الأيمن.',
    'Contact your SAP administrator to obtain OAuth credentials.' => 'تواصل مع مسؤول SAP للحصول على بيانات اعتماد OAuth.',
    'Save this integration.' => 'احفظ هذا التكامل.',
    'Step 1. Configure SAP Integration' => 'الخطوة 1. تكوين تكامل SAP',
    'Step 2. Test Connection' => 'الخطوة 2. اختبار الاتصال',
    'The specific endpoint for form submissions (e.g., {path})' => 'نقطة النهاية المحددة لإرسال النماذج (مثلاً: {path})',
    'You\'ll need:' => 'ستحتاج إلى:',
    'Your OAuth application client ID' => 'معرّف عميل تطبيق OAuth الخاص بك',
    'Your OAuth application client secret' => 'سر عميل تطبيق OAuth الخاص بك',

    // Integration: Plugin settings
    'API Endpoint' => 'نقطة نهاية API',
    'Client ID' => 'معرّف العميل',
    'Client Secret' => 'سر العميل',
    'Enter a custom OAuth redirect URI if needed. Leave empty to use Craft\'s default.' => 'أدخل URI إعادة توجيه OAuth مخصصاً إذا لزم الأمر. اتركه فارغاً لاستخدام الإعداد الافتراضي لـ Craft.',
    'Enter the OAuth scopes required, comma-separated.' => 'أدخل نطاقات OAuth المطلوبة مفصولة بفواصل.',
    'Enter the SAP API endpoint path (e.g., /customer-feedback).' => 'أدخل مسار نقطة نهاية SAP API (مثلاً: /customer-feedback).',
    'Enter the SAP OAuth authorization URL (e.g., https://api.sap.com/oauth/authorize).' => 'أدخل URL تفويض SAP OAuth (مثلاً: https://api.sap.com/oauth/authorize).',
    'Enter the SAP OAuth Client ID.' => 'أدخل معرّف عميل SAP OAuth.',
    'Enter the SAP OAuth Client Secret.' => 'أدخل سر عميل SAP OAuth.',
    'Enter the SAP OAuth token URL (e.g., https://api.sap.com/oauth/token).' => 'أدخل URL رمز SAP OAuth (مثلاً: https://api.sap.com/oauth/token).',
    'Enter the SAP environment to connect to (staging or production).' => 'أدخل بيئة SAP المراد الاتصال بها (staging أو production).',
    'Enter the base URL for the production API (e.g., https://production-api.sap.com/v1).' => 'أدخل URL الأساسي لـ API الإنتاج (مثلاً: https://production-api.sap.com/v1).',
    'Enter the base URL for the staging API (e.g., https://staging-api.sap.com/v1).' => 'أدخل URL الأساسي لـ API البيئة التجريبية (مثلاً: https://staging-api.sap.com/v1).',
    'Environment' => 'البيئة',
    'OAuth Authorization URL' => 'URL تفويض OAuth',
    'OAuth Redirect URI' => 'URI إعادة توجيه OAuth',
    'OAuth Scope' => 'نطاق OAuth',
    'OAuth Token URL' => 'URL رمز OAuth',
    'Production API URL' => 'URL API الإنتاج',
    'Staging API URL' => 'URL API البيئة التجريبية',

    // Integration: Form settings
    'Additional Information' => 'معلومات إضافية',
    'All form fields will be automatically included in the payload\'s fields array. The above mappings only affect which fields appear in the header.' => 'سيتم تضمين جميع حقول النموذج تلقائياً في مصفوفة الحقول الخاصة بالحمولة. تؤثر التعيينات أعلاه فقط على الحقول التي تظهر في الرأس.',
    'Header Field Mapping' => 'تعيين حقول الرأس',
    'Invoice ID Field' => 'حقل معرّف الفاتورة',
    'Member Email Field' => 'حقل البريد الإلكتروني للعضو',
    'Member ID Field' => 'حقل معرّف العضو',
    'Member Mobile Field' => 'حقل رقم هاتف العضو المحمول',
    'Select the field that contains the email address.' => 'حدد الحقل الذي يحتوي على عنوان البريد الإلكتروني.',
    'Select the field that contains the invoice ID.' => 'حدد الحقل الذي يحتوي على معرّف الفاتورة.',
    'Select the field that contains the member ID.' => 'حدد الحقل الذي يحتوي على معرّف العضو.',
    'Select the field that contains the mobile number.' => 'حدد الحقل الذي يحتوي على رقم الهاتف المحمول.',
    'Select which form fields should be mapped to the header fields (memberID, memberMobile, memberEmail, invoiceID) in the SAP payload.' => 'حدد حقول النموذج التي يجب تعيينها إلى حقول الرأس (memberID, memberMobile, memberEmail, invoiceID) في حمولة SAP.',
];
