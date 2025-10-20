# Formie SAP Integration Plugin

[![Latest Version](https://img.shields.io/packagist/v/lindemannrock/craft-formie-sap-integration.svg)](https://packagist.org/packages/lindemannrock/craft-formie-sap-integration)
[![Craft CMS](https://img.shields.io/badge/Craft%20CMS-5.0+-orange.svg)](https://craftcms.com/)
[![Formie](https://img.shields.io/badge/Formie-3.0+-purple.svg)](https://verbb.io/craft-plugins/formie)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/lindemannrock/craft-formie-sap-integration.svg)](LICENSE)

A Craft CMS plugin that integrates Verbb's Formie with SAP Cloud Platform, enabling automatic submission of form data using SAP's dynamic schema format with OAuth 2.0 authentication.

## Requirements

- Craft CMS 5.0 or greater
- PHP 8.2 or greater
- Formie 3.0 or greater

## Features

- **OAuth 2.0 Authentication** - Secure authentication with SAP Cloud Platform
- **Dynamic Schema Support** - Sends form data in SAP's flexible JSON format
- **Multi-Environment** - Supports both staging and production environments
- **Metadata Tracking** - Automatically captures IP, user agent, UTM parameters, and more
- **Field Mapping** - Intelligent handling of all Formie field types
- **Environment Variables** - Secure credential management with autosuggest
- **Header Field Mapping** - Configure memberID, memberEmail, memberMobile, invoiceID

## Installation

### Via Composer

```bash
cd /path/to/project
composer require lindemannrock/craft-formie-sap-integration
./craft plugin/install formie-sap-integration
```

### Using DDEV

```bash
cd /path/to/project
ddev composer require lindemannrock/craft-formie-sap-integration
ddev craft plugin/install formie-sap-integration
```

### Via Control Panel

In the Control Panel, go to Settings → Plugins and click "Install" for Formie SAP Integration.

## Environment Configuration

Add these to your `.env` file:

```bash
# Required OAuth credentials
SAP_CLIENT_ID=your_client_id_here
SAP_CLIENT_SECRET=your_client_secret_here

# Environment selection
SAP_ENVIRONMENT=staging

# Optional API URLs (can be configured in CP)
SAP_STAGING_URL=https://staging-api.sap.com/v1
SAP_PRODUCTION_URL=https://production-api.sap.com/v1
SAP_API_ENDPOINT=/customer-feedback

# Optional OAuth URLs
SAP_OAUTH_TOKEN_URL=https://api.sap.com/oauth/token
SAP_OAUTH_AUTHORIZE_URL=https://api.sap.com/oauth/authorize
SAP_OAUTH_SCOPE=customer_data:write,forms:submit
```

## Configuration

### Step 1: Create SAP Integration

1. Go to **Formie → Settings → Integrations**
2. Click **New Integration** and select **SAP Cloud** under CRM
3. Configure the integration:
   - **Name**: Give your integration a name (e.g., "SAP Production")
   - **Client ID**: Enter `$SAP_CLIENT_ID` (environment variable tip will appear)
   - **Client Secret**: Enter `$SAP_CLIENT_SECRET`
   - **Environment**: Enter `$SAP_ENVIRONMENT` or choose staging/production
   - **API URLs**: Configure or use environment variables
   - **API Endpoint**: Set to `/customer-feedback` or as provided by SAP
   - **OAuth URLs**: Configure or use environment variables

4. Save the integration
5. Test the connection using the **Refresh** button

### Step 2: Enable for Forms

1. Edit your Formie form
2. Go to **Integrations** tab
3. Enable the SAP Cloud integration
4. Configure header field mapping:
   - **Member ID Field**: Map to your member ID field
   - **Member Email Field**: Map to your email field
   - **Member Mobile Field**: Map to your phone field
   - **Invoice ID Field**: Map to invoice/order field (if applicable)
5. Save the form

## Data Format

The integration sends data in SAP's dynamic schema format:

```json
{
  "header": {
    "memberID": "MTIzNDU2", // Base64 encoded
    "memberEmail": "dXNlckBleGFtcGxlLmNvbQ==", // Base64 encoded
    "memberMobile": "Kzk2NjEyMzQ1Njc4OQ==", // Base64 encoded
    "invoiceID": "INV-2025-001"
  },
  "submissionId": "12345",
  "formId": "contact_form",
  "formTitle": "Contact Form",
  "submissionDate": "2025-07-10T14:30:00.000Z",
  "metadata": {
    "ipAddress": "192.168.1.100",
    "userAgent": "Mozilla/5.0...",
    "referrer": "https://example.com",
    "language": "ar",
    "timezone": "Asia/Riyadh",
    "deviceType": "mobile",
    "utmSource": "google",
    "utmMedium": "cpc",
    "utmCampaign": "summer_2025"
  },
  "fields": [
    {
      "handle": "customer_name",
      "label": "Customer Name",
      "value": "أحمد محمد"
    },
    {
      "handle": "satisfaction_rating",
      "label": "How satisfied are you?",
      "value": 5
    }
  ]
}
```

### Metadata Collected

**Always included:**
- Submission ID, Form ID, Form Title, Submission Date
- IP Address, User Agent, Language, Timezone
- Device Type (mobile/tablet/desktop)
- Submission URL

**Included when available:**
- Referrer URL
- UTM parameters (source, medium, campaign, content, term)

### Field Type Handling

- **Text/Textarea** → String values
- **Number** → Numeric values  
- **Dropdown/Radio** → Selected value
- **Checkboxes** → Array of selected values
- **Date** → ISO 8601 format
- **Name** → Combined first/last name
- **Phone** → Extracted phone number
- **Email** → Email address
- **Rating** → Numeric rating value
- **File Uploads** → Not included in SAP payload

## Testing

See [SAP_API_TEST_GUIDE.md](SAP_API_TEST_GUIDE.md) for comprehensive testing instructions.

### Quick Test

1. **Test Connection**
   - Save the integration and click **Refresh**
   - Check for connection success/error messages

2. **Test Form Submission**
   - Create a simple test form
   - Enable SAP integration
   - Submit the form
   - Check Formie's integration logs

## Troubleshooting

### Common Issues

#### Integration Not Appearing
- Ensure plugin is installed: `php craft plugin/list | grep formie-sap-integration`
- Clear all caches: `php craft clear-caches/all`
- Check plugin is enabled in Settings → Plugins

#### OAuth Authentication Errors
- Verify Client ID and Secret are correct
- Check OAuth URLs are accessible
- Ensure redirect URI is whitelisted in SAP console
- Verify environment variables are set correctly

#### Submission Failures
- Check API endpoint is correct
- Verify all required header fields are mapped
- Review Craft logs for detailed error messages
- Ensure SAP API is accessible from your server

#### Environment Variable Tips Not Showing
- Verify you're using `autosuggestField` in templates
- Check both `suggestEnvVars: true` and `suggestAliases: true` are set
- Clear compiled templates: `php craft clear-caches/compiled-templates`

## Documentation Files

- **README.md** - This overview and setup guide
- **SAP_API_TEST_GUIDE.md** - Comprehensive API testing guide
- **TODO.md** - Development tasks and future improvements
- **.env.example** - Environment variable examples

## Support

- **Documentation**: [https://github.com/LindemannRock/craft-formie-sap-integration](https://github.com/LindemannRock/craft-formie-sap-integration)
- **Issues**: [https://github.com/LindemannRock/craft-formie-sap-integration/issues](https://github.com/LindemannRock/craft-formie-sap-integration/issues)
- **Email**: [support@lindemannrock.com](mailto:support@lindemannrock.com)

## License

This plugin is licensed under the MIT License. See [LICENSE](LICENSE) for details.

---

Developed by [LindemannRock](https://lindemannrock.com)

Built for use with [Formie](https://verbb.io/craft-plugins/formie) by Verbb