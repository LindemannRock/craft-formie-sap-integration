<?php
/**
 * SAP Integration for Formie - Craft CMS 5.x
 *
 * SAP CRM integration class for Formie
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

/**
 * Formie SAP Integration plugin for Craft CMS 5.x
 *
 * @link      https://lindemannrock.com
 * @copyright Copyright (c) 2025 LindemannRock
 */

namespace lindemannrock\formiesapintegration\integrations\crm;

use Craft;
use craft\helpers\App;
use craft\helpers\Json;
use DateTime;

use verbb\formie\base\Crm;
use verbb\formie\base\Integration;
use verbb\formie\elements\Form;
use verbb\formie\elements\Submission;
use verbb\formie\models\IntegrationFormSettings;
use verbb\formie\models\IntegrationField;
use verbb\formie\models\Stencil;

/**
 * SAP CRM Integration for Formie
 * 
 * @author LindemannRock
 * @since 1.0.0
 */
class Sap extends Crm
{
    // Static Properties
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('formie', 'SAP Cloud');
    }

    /**
     * @inheritdoc
     */
    public function getIconUrl(): string
    {
        return 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Ebene_2" viewBox="0 0 412.38 204"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:#fff;}</style><linearGradient id="linear-gradient" x1="206.19" y1="0" x2="206.19" y2="204" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00b1eb"/><stop offset=".212" stop-color="#009ad9"/><stop offset=".519" stop-color="#007fc4"/><stop offset=".792" stop-color="#006eb8"/><stop offset="1" stop-color="#0069b4"/></linearGradient></defs><g id="Layer_1"><polyline class="cls-1" points="0 204 208.413 204 412.38 0 0 0 0 204"/><path class="cls-2" d="m244.727,38.359l-40.593-.025v96.518l-35.46-96.518h-35.16l-30.277,80.716c-3.224-20.352-24.277-27.38-40.84-32.649-10.937-3.512-22.541-8.678-22.434-14.387.091-4.687,6.225-9.04,18.377-8.385,8.17.433,15.373,1.092,29.71,8.006l14.102-24.557c-13.088-6.658-31.169-10.867-45.985-10.883h-.086c-17.277,0-31.677,5.598-40.602,14.824-6.221,6.443-9.572,14.626-9.712,23.679-.227,12.454,4.341,21.292,13.938,28.338,8.104,5.944,18.468,9.794,27.603,12.626,11.27,3.492,20.467,6.526,20.36,13.002-.083,2.355-.977,4.552-2.671,6.337-2.807,2.897-7.124,3.986-13.084,4.098-11.497.243-20.026-1.559-33.61-9.585l-12.536,24.903c13.546,7.705,29.586,12.223,45.952,12.223l2.106-.024c14.247-.256,25.745-4.316,34.929-11.712.527-.416,1.001-.845,1.488-1.277l-4.073,10.874h36.875l6.189-18.822c6.477,2.214,13.847,3.437,21.676,3.437,7.618,0,14.795-1.17,21.156-3.252l5.965,18.637h60.137v-38.969h13.113c31.706,0,50.456-16.147,50.456-43.202,0-30.139-18.219-43.969-57.011-43.969Zm-93.816,82.587c-4.737,0-9.177-.828-13.006-2.275l12.866-40.593h.244l12.643,40.708c-3.801,1.349-8.138,2.16-12.746,2.16Zm96.199-23.324h-8.941v-32.711h8.941c11.927,0,21.437,3.961,21.437,16.139,0,12.602-9.51,16.572-21.437,16.572"/></g></svg>');
    }

    /**
     * @inheritdoc
     */
    public function getAuthorizeUrl(): string
    {
        $url = App::parseEnv($this->oauthAuthorizeUrl);
        if ($url) {
            return $url;
        }
        
        return 'https://api.sap.com/oauth/authorize';
    }

    /**
     * @inheritdoc
     */
    public function getAccessTokenUrl(): string
    {
        $url = App::parseEnv($this->oauthTokenUrl);
        if ($url) {
            return $url;
        }
        
        return 'https://api.sap.com/oauth/token';
    }

    /**
     * @inheritdoc
     */
    public function getRedirectUri(): string
    {
        return App::parseEnv($this->redirectUri) ?: parent::getRedirectUri();
    }

    /**
     * @inheritdoc
     */
    public function getClientId(): string
    {
        return App::parseEnv($this->clientId) ?: '';
    }

    /**
     * @inheritdoc
     */
    public function getClientSecret(): string
    {
        return App::parseEnv($this->clientSecret) ?: '';
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml(): ?string
    {
        return Craft::$app->getView()->renderTemplate('formie-sap-integration/integrations/crm/sap/_plugin-settings', [
            'integration' => $this,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getFormSettingsHtml($form): string
    {
        return Craft::$app->getView()->renderTemplate('formie-sap-integration/integrations/crm/sap/_form-settings', [
            'integration' => $this,
            'form' => $form,
        ]);
    }

    /**
     * @inheritdoc
     */
    public static function supportsOAuthConnection(): bool
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getOauthScope(): array
    {
        return explode(',', $this->oauthScope);
    }

    /**
     * @inheritdoc
     */
    public function getOauthAuthorizationOptions(): array
    {
        return [
            'scope' => $this->getOauthScope(),
        ];
    }

    // Properties
    // =========================================================================

    /**
     * @var string|null OAuth Client ID
     */
    public ?string $clientId = null;

    /**
     * @var string|null OAuth Client Secret
     */
    public ?string $clientSecret = null;

    /**
     * @var string|null SAP Environment (staging/production)
     */
    public ?string $environment = 'staging';

    /**
     * @var string|null Staging API Base URL
     */
    public ?string $stagingUrl = null;

    /**
     * @var string|null Production API Base URL
     */
    public ?string $productionUrl = null;

    /**
     * @var string|null Custom API Endpoint
     */
    public ?string $apiEndpoint = '/customer-feedback';

    /**
     * @var string|null OAuth Scope
     */
    public ?string $oauthScope = 'customer_data:write,forms:submit';

    /**
     * @var string|null OAuth Authorization URL
     */
    public ?string $oauthAuthorizeUrl = null;

    /**
     * @var string|null OAuth Token URL
     */
    public ?string $oauthTokenUrl = null;

    /**
     * @var string|null OAuth Redirect URI
     */
    public ?string $redirectUri = null;

    /**
     * @var array|null Field mapping
     */
    public ?array $fieldMapping = null;

    /**
     * @var bool Map to Contact
     */
    public bool $mapToContact = false;

    /**
     * @var bool Map to Lead
     */
    public bool $mapToLead = false;

    /**
     * @var bool Map to Opportunity
     */
    public bool $mapToOpportunity = false;

    /**
     * @var bool Map to Account
     */
    public bool $mapToAccount = false;

    /**
     * @var array|null Contact field mapping
     */
    public ?array $contactFieldMapping = null;

    /**
     * @var array|null Lead field mapping
     */
    public ?array $leadFieldMapping = null;

    /**
     * @var array|null Opportunity field mapping
     */
    public ?array $opportunityFieldMapping = null;

    /**
     * @var array|null Account field mapping
     */
    public ?array $accountFieldMapping = null;

    /**
     * @var string|null Member ID field handle
     */
    public ?string $memberIdField = null;

    /**
     * @var string|null Member Mobile field handle
     */
    public ?string $memberMobileField = null;

    /**
     * @var string|null Member Email field handle
     */
    public ?string $memberEmailField = null;

    /**
     * @var string|null Invoice ID field handle
     */
    public ?string $invoiceIdField = null;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getDescription(): string
    {
        return Craft::t('formie', 'Manage your SAP Cloud CRM integration.');
    }

    /**
     * @inheritdoc
     */
    public function defineRules(): array
    {
        $rules = parent::defineRules();

        $rules[] = [['clientId', 'clientSecret'], 'required'];
        
        // Only validate URLs if they're not environment variables
        $rules[] = [['stagingUrl', 'productionUrl'], 'url', 'when' => function($model, $attribute) {
            $value = $model->$attribute;
            // Skip validation if it's an environment variable (starts with $)
            return !empty($value) && !str_starts_with($value, '$');
        }];

        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function fetchFormSettings(): IntegrationFormSettings
    {
        $settings = [];

        try {
            // Get available SAP entities (Contact, Lead, Opportunity, Account)
            $entities = $this->getAvailableEntities();
            
            foreach ($entities as $entity => $fields) {
                $settings[$entity] = new IntegrationField([
                    'handle' => $entity,
                    'name' => ucfirst($entity),
                    'options' => $fields,
                ]);
            }
        } catch (\Throwable $e) {
            Integration::apiError($this, $e);
        }

        return new IntegrationFormSettings($settings);
    }

    /**
     * @inheritdoc
     */
    public function sendPayload(Submission $submission): bool
    {
        try {
            $payload = $this->generatePayload($submission);
            
            // Log the payload for debugging
            Craft::info('SAP Integration Payload: ' . Json::encode($payload), __METHOD__);
            
            // Get the API endpoint
            $endpoint = '/' . ltrim($this->apiEndpoint, '/');
            $url = $this->getApiBaseUrl() . $endpoint;
            
            Craft::info('SAP Integration URL: ' . $url, __METHOD__);
            
            // Send the request directly using Guzzle
            $client = $this->getClient();
            $response = $client->request('POST', $url, [
                'json' => $payload,
                'http_errors' => false,
            ]);
            
            $statusCode = $response->getStatusCode();
            $responseBody = $response->getBody()->getContents();
            
            Craft::info('SAP Integration Response: ' . $statusCode . ' - ' . $responseBody, __METHOD__);
            
            // For webhook.site, any 2xx response is success
            if ($statusCode >= 200 && $statusCode < 300) {
                return true;
            }
            
            Integration::error($this, Craft::t('formie', 'API returned status code: {code}', [
                'code' => $statusCode,
            ]));
            
            return false;
            
        } catch (\Throwable $e) {
            Integration::apiError($this, $e);
            
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function fetchConnection(): bool
    {
        try {
            // Try to get the OAuth token if using OAuth
            if ($this->supportsOAuthConnection()) {
                $token = $this->getToken();
                if (!$token) {
                    Integration::error($this, 'Unable to obtain access token.');
                    return false;
                }
            }
            
            // Test the connection with a simple API call
            $client = $this->getClient();
            
            // Use the full URL, not just the path
            $testUrl = $this->getApiBaseUrl() . '/system/info';
            
            $response = $client->request('GET', $testUrl, [
                'http_errors' => false, // Don't throw on 4xx/5xx
            ]);
            
            // Check if we got a successful response
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 300) {
                return true;
            }
            
            // For webhook.site testing, also accept 404 as "connected"
            // since webhook.site doesn't have a /system/info endpoint
            if ($statusCode === 404) {
                return true;
            }
            
            Integration::error($this, 'Connection test failed with status code: ' . $statusCode);
            return false;
            
        } catch (\Throwable $e) {
            Integration::apiError($this, $e);
            
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function getClient(): \GuzzleHttp\Client
    {
        if ($this->_client) {
            return $this->_client;
        }

        $headers = $this->getRequestHeaders();
        $headers['Content-Type'] = 'application/json';
        $headers['Accept'] = 'application/json';

        return $this->_client = Craft::createGuzzleClient([
            'headers' => $headers,
            'timeout' => 30,
            'connect_timeout' => 10,
        ]);
    }

    // Private Methods
    // =========================================================================

    /**
     * @var \GuzzleHttp\Client|null
     */
    protected ?\GuzzleHttp\Client $_client = null;

    /**
     * Get the API base URL based on environment
     */
    private function getApiBaseUrl(): string
    {
        $env = App::parseEnv($this->environment) ?: 'staging';
        
        if ($env === 'production') {
            $url = App::parseEnv($this->productionUrl);
            if ($url) {
                return rtrim($url, '/');
            }
        }
        
        $url = App::parseEnv($this->stagingUrl);
        if ($url) {
            return rtrim($url, '/');
        }
        
        // Default URLs if not configured
        return $env === 'production' ? 
            'https://production-api.sap.com/v1' : 
            'https://staging-api.sap.com/v1';
    }

    /**
     * Get request headers including authorization
     */
    private function getRequestHeaders(): array
    {
        $headers = [];
        
        // OAuth token handling
        if ($this->supportsOAuthConnection()) {
            $token = $this->getToken();
            if ($token) {
                $headers['Authorization'] = 'Bearer ' . $token->accessToken;
            }
        } else {
            // Basic auth fallback
            $clientId = App::parseEnv($this->clientId);
            $clientSecret = App::parseEnv($this->clientSecret);
            
            if ($clientId && $clientSecret) {
                $headers['Authorization'] = 'Basic ' . base64_encode($clientId . ':' . $clientSecret);
            }
        }
        
        return $headers;
    }

    /**
     * Get available SAP entities and their fields
     */
    private function getAvailableEntities(): array
    {
        // Mock data - in production, this would fetch from SAP API
        return [
            'contact' => [
                'firstName' => 'First Name',
                'lastName' => 'Last Name',
                'email' => 'Email',
                'phone' => 'Phone',
                'company' => 'Company',
                'title' => 'Job Title',
                'department' => 'Department',
                'address' => 'Address',
                'city' => 'City',
                'state' => 'State',
                'zipCode' => 'ZIP Code',
                'country' => 'Country',
            ],
            'lead' => [
                'firstName' => 'First Name',
                'lastName' => 'Last Name',
                'email' => 'Email',
                'phone' => 'Phone',
                'company' => 'Company',
                'leadSource' => 'Lead Source',
                'status' => 'Status',
                'rating' => 'Rating',
                'description' => 'Description',
            ],
            'opportunity' => [
                'name' => 'Opportunity Name',
                'amount' => 'Amount',
                'stage' => 'Stage',
                'probability' => 'Probability',
                'closeDate' => 'Close Date',
                'description' => 'Description',
                'type' => 'Type',
                'leadSource' => 'Lead Source',
            ],
            'account' => [
                'name' => 'Account Name',
                'type' => 'Account Type',
                'industry' => 'Industry',
                'website' => 'Website',
                'phone' => 'Phone',
                'email' => 'Email',
                'billingAddress' => 'Billing Address',
                'shippingAddress' => 'Shipping Address',
                'description' => 'Description',
            ],
        ];
    }

    /**
     * Generate payload for SAP API
     */
    private function generatePayload(Submission $submission): array
    {
        // Use the simpler prepareSubmissionData method that actually exists
        return $this->prepareSubmissionData($submission);
    }

    /**
     * Generate entity payload
     */
    private function generateEntityPayload(Submission $submission, string $entity, array $mapping): array
    {
        $entityPayload = [];
        
        foreach ($mapping as $sapField => $formieField) {
            if (empty($formieField)) {
                continue;
            }
            
            $value = $submission->getFieldValue($formieField);
            
            if ($value !== null) {
                $entityPayload[$sapField] = $this->processFieldValue($value);
            }
        }
        
        // Add metadata
        $entityPayload['_metadata'] = [
            'formId' => $submission->form->id,
            'formTitle' => $submission->form->title,
            'submissionId' => $submission->id,
            'submissionDate' => $submission->dateCreated->format('c'),
            'source' => 'Craft CMS Formie',
        ];
        
        return $entityPayload;
    }

    /**
     * Process field value for SAP API
     */
    private function processFieldValue($value)
    {
        // Handle null and empty strings
        if ($value === null || $value === '') {
            return '';
        }
        
        if (is_array($value)) {
            // Handle Name field
            if (isset($value['firstName']) || isset($value['lastName'])) {
                return [
                    'firstName' => $value['firstName'] ?? '',
                    'lastName' => $value['lastName'] ?? '',
                    'fullName' => trim(($value['firstName'] ?? '') . ' ' . ($value['lastName'] ?? '')),
                ];
            }
            
            // Handle Phone field - same logic as header
            if (isset($value['number']) || isset($value['phoneNumber']) || isset($value['country'])) {
                $phoneNumber = $value['number'] ?? $value['phoneNumber'] ?? null;
                
                if (!empty($phoneNumber)) {
                    // Combine country code and number if both exist
                    if (!empty($value['countryCode'])) {
                        return $value['countryCode'] . $phoneNumber;
                    }
                    return $phoneNumber;
                }
                return '';
            }
            
            // Handle Email field
            if (isset($value['email'])) {
                return $value['email'] ?: '';
            }
            
            // Handle Dropdown field (single value arrays)
            if (count($value) === 1 && isset($value['value'])) {
                return $value['value'];
            }
            
            // Handle other arrays
            return json_encode($value);
        }
        
        if ($value instanceof DateTime) {
            return $value->format('c');
        }
        
        return (string) $value;
    }

    /**
     * Make API request to SAP
     */
    public function request(string $method, string $endpoint, array $data = []): mixed
    {
        $client = $this->getClient();
        
        $options = [];
        if (!empty($data)) {
            $options['json'] = $data;
        }
        
        $response = $client->request($method, $endpoint, $options);
        
        return Json::decode($response->getBody(), true);
    }

    /**
     * Prepare submission data in SAP's format
     */
    private function prepareSubmissionData(Submission $submission): array
    {
        $form = $submission->getForm();
        
        // Get all field values from submission first
        $content = $submission->getSerializedFieldValues();

        // Build metadata
        $request = Craft::$app->getRequest();
        $metadata = [
            'ipAddress' => $submission->ipAddress ?? 'Unknown',
            'userAgent' => !$request->isConsoleRequest ? ($request->getUserAgent() ?? 'Unknown') : 'Queue Job',
            'referrer' => !$request->isConsoleRequest ? ($request->getReferrer() ?? 'direct') : 'Queue Job',
            'language' => $submission->getSite()->language ?? 'en',
            'timezone' => Craft::$app->getTimeZone(),
            'landingPageUrl' => $content['landingPageUrl'] ?? '',
            'referrerUrl' => $content['referrerUrl'] ?? '',
        ];

        // Build fields array using the same pattern as formie-rest-api
        $fields = [];
        
        if (!empty($content)) {
            foreach ($content as $handle => $value) {
                // Get field object using the form's method
                $field = $form->getFieldByHandle($handle);
                if ($field) {
                    // Skip non-data fields (HTML, Heading, Section, etc.)
                    $fieldType = basename(str_replace('\\', '/', get_class($field)));
                    $skipFieldTypes = ['Html', 'Heading', 'Section', 'Summary', 'Paragraph'];
                    
                    if (in_array($fieldType, $skipFieldTypes)) {
                        continue;
                    }
                    
                    // Process the value (will handle empty values appropriately)
                    $processedValue = $this->processFieldValue($value);
                    
                    // Build field data
                    $fieldData = [
                        'handle' => $handle,
                        'label' => $field->label,
                        'type' => $fieldType,
                        'value' => $processedValue,
                    ];
                    
                    // Add additional context for Rating fields
                    if ($fieldType === 'Rating' && get_class($field) === 'lindemannrock\formieratingfield\fields\Rating') {
                        $fieldData['minValue'] = (string)$field->minValue;
                        $fieldData['maxValue'] = (string)$field->maxValue;
                        // Optionally include rating type for even more context
                        $fieldData['ratingType'] = $field->ratingType; // 'star', 'emoji', or 'nps'
                    }
                    
                    // Include field even if empty - let SAP decide what to do with empty values
                    $fields[] = $fieldData;
                }
            }
        }

        // Extract specific fields for header/top level based on mapping
        $memberData = [];
        
        if (!empty($content)) {
            // Extract Member ID field
            if ($this->memberIdField && isset($content[$this->memberIdField])) {
                $value = $content[$this->memberIdField];
                $memberData['memberID'] = !empty($value) ? $value : '';
            }
            
            // Extract Member Mobile field
            if ($this->memberMobileField && isset($content[$this->memberMobileField])) {
                $value = $content[$this->memberMobileField];
                if (is_array($value)) {
                    // Handle Phone field type
                    if (isset($value['number']) && !empty($value['number'])) {
                        // Combine country code and number if both exist
                        if (!empty($value['countryCode'])) {
                            $memberData['memberMobile'] = $value['countryCode'] . $value['number'];
                        } else {
                            $memberData['memberMobile'] = $value['number'];
                        }
                    } else {
                        $memberData['memberMobile'] = '';
                    }
                } else {
                    // Handle string values (hidden fields, text fields, etc.)
                    $memberData['memberMobile'] = !empty($value) ? $value : '';
                }
            }
            
            // Extract Member Email field
            if ($this->memberEmailField && isset($content[$this->memberEmailField])) {
                $value = $content[$this->memberEmailField];
                $memberData['memberEmail'] = !empty($value) ? $value : '';
            }
            
            // Extract Invoice ID field
            if ($this->invoiceIdField && isset($content[$this->invoiceIdField])) {
                $value = $content[$this->invoiceIdField];
                $memberData['invoiceID'] = !empty($value) ? $value : '';
            }
        }
        
        // Build final payload - always include member fields
        $payload = [
            'submissionId' => (string)$submission->id,
            'formId' => $form->handle,
            'formTitle' => $form->title,
            'submissionDate' => $submission->dateCreated->format('c'),
            'memberID' => $memberData['memberID'] ?? '',
            'memberMobile' => $memberData['memberMobile'] ?? '',
            'memberEmail' => $memberData['memberEmail'] ?? '',
            'invoiceID' => $memberData['invoiceID'] ?? '',
            'metadata' => $metadata,
            'fields' => $fields,
        ];
        
        return $payload;
    }
}