# SAP API Test Guide

> **Note**: The API test endpoints have been moved to the dedicated `formie-rest-api` plugin. This guide is kept for reference only.
> 
> **Please see the `formie-rest-api` plugin documentation for the current API documentation.**

This guide demonstrates how to test the SAP integration and what data format the SAP team receives when the integration sends Formie form submissions.

## Authentication

All API endpoints require authentication using an API key in the request headers.

### Test API Keys

For testing purposes, use one of these API keys:

1. **Full Access Key**: `test_key_sap_integration_2025`
   - Permissions: Read forms, Read submissions
   - Rate limit: 1000 requests/hour

2. **Limited Access Key**: `test_key_limited_access_2025`
   - Permissions: Read forms only
   - Rate limit: 100 requests/hour

### How to Use API Keys

Include the API key in your request headers:
```
X-API-Key: test_key_sap_integration_2025
```

## Test Endpoints

All endpoints require authentication via API key.

### 1. List All Forms or Get Specific Form
**URL:** `https://ahf.ddev.site/api/test/formie/forms` (NEW LOCATION)  
**Method:** GET  
**Headers:** 
- `Accept: application/json` (optional)
- `X-API-Key: test_key_sap_integration_2025`

**Query Parameters (all optional):**
- `handle`: Get specific form by handle (e.g., `customerFeedback`)
- `id`: Get specific form by ID (e.g., `123`)

**Examples:**
- Get all forms: `/api/test/formie/forms`
- Get specific form by handle: `/api/test/formie/forms?handle=customerFeedback`
- Get specific form by ID: `/api/test/formie/forms?id=123`

**Sample Response:**
```json
{
  "success": true,
  "data": {
    "forms": [
      {
        "id": 123,
        "uid": "abc-123-def",
        "handle": "customerFeedback",
        "title": "Customer Feedback",
        "dateCreated": "2025-01-16T10:00:00+00:00",
        "dateUpdated": "2025-01-16T10:00:00+00:00",
        "submissionCount": 245,
        "fields": [
          {
            "handle": "memberID",
            "label": "Member ID",
            "type": "SingleLineText",
            "required": false,
            "instructions": ""
          },
          {
            "handle": "memberEmail",
            "label": "Member Email",
            "type": "Email",
            "required": true,
            "instructions": "Please enter your email"
          }
        ]
      }
    ],
    "totalForms": 1
  },
  "meta": {
    "timestamp": "2025-01-16T10:00:00+00:00",
    "version": "1.0",
    "endpoint": "forms"
  }
}
```

### 2. Get Form Submissions
**URL:** `https://ahf.ddev.site/api/test/formie/submissions` (NEW LOCATION)  
**Method:** GET  
**Headers:** 
- `Accept: application/json` (optional)
- `X-API-Key: test_key_sap_integration_2025`

**Query Parameters:**
- `formHandle` OR `formId` (one required): Form handle or ID
- `limit` (optional): Number of results per page (default: 10)
- `page` (optional): Page number (default: 1)
- `dateFrom` (optional): Filter submissions from this date (YYYY-MM-DD)
- `dateTo` (optional): Filter submissions until this date (YYYY-MM-DD)
- `status` (optional): Filter by status (enabled, disabled)

**Examples:**
- Get by handle: `/api/test/formie/submissions?formHandle=customerFeedback`
- Get by ID with pagination: `/api/test/formie/submissions?formId=123&limit=20&page=2`
- Get submissions from date range: `/api/test/formie/submissions?formHandle=customerFeedback&dateFrom=2025-01-01&dateTo=2025-01-31`

**Sample Response:**
```json
{
  "success": true,
  "data": {
    "form": {
      "id": 123,
      "handle": "customerFeedback",
      "title": "Customer Feedback"
    },
    "submissions": [
      {
        "id": 456,
        "uid": "xyz-456-abc",
        "title": "Submission #456",
        "dateCreated": "2025-01-16T09:30:00+00:00",
        "dateUpdated": "2025-01-16T09:30:00+00:00",
        "status": "enabled",
        "fields": {
          "memberID": {
            "label": "Member ID",
            "handle": "memberID",
            "type": "verbb\\formie\\fields\\formfields\\SingleLineText",
            "value": "MjMxMjM0NTc0ODQ0ODQ="
          },
          "memberEmail": {
            "label": "Member Email",
            "handle": "memberEmail",
            "type": "verbb\\formie\\fields\\formfields\\Email",
            "value": "bXVoYW1tYWQuc2FtYWhhQGFsaGF0YWIuY29tLnNh"
          },
          "customerName": {
            "label": "Customer Name",
            "handle": "customerName",
            "type": "verbb\\formie\\fields\\formfields\\Name",
            "value": {
              "firstName": "Muhammad",
              "lastName": "Samaha",
              "fullName": "Muhammad Samaha"
            }
          },
          "rating": {
            "label": "Rating",
            "handle": "rating",
            "type": "verbb\\formie\\fields\\formfields\\Dropdown",
            "value": "5"
          }
        }
      }
    ],
    "pagination": {
      "total": 245,
      "perPage": 10,
      "currentPage": 1,
      "totalPages": 25,
      "hasMore": true
    }
  },
  "meta": {
    "timestamp": "2025-01-16T10:00:00+00:00",
    "version": "1.0",
    "endpoint": "submissions"
  }
}
```

### 3. GraphQL-Style Sample (REMOVED)
**Note:** This endpoint has been removed. Use the standard REST endpoints instead.  
**Method:** GET  
**Headers:** 
- `Accept: application/json`
- `X-API-Key: test_key_sap_integration_2025`

This endpoint demonstrates what a GraphQL query response would look like.

**Sample Response:**
```json
{
  "data": {
    "formieForms": [
      {
        "id": 123,
        "handle": "customerFeedback",
        "title": "Customer Feedback",
        "dateCreated": "2025-01-16T10:00:00+00:00",
        "pages": [
          {
            "name": "Page 1",
            "fields": [
              {
                "handle": "memberID",
                "name": "Member ID",
                "type": "SingleLineText",
                "required": false
              }
            ]
          }
        ],
        "submissions": [
          {
            "id": 456,
            "title": "Submission #456",
            "dateCreated": "2025-01-16T09:30:00+00:00",
            "memberID": "MjMxMjM0NTc0ODQ0ODQ=",
            "memberEmail": "bXVoYW1tYWQuc2FtYWhhQGFsaGF0YWIuY29tLnNh",
            "memberMobile": "MDU1NTEyMzQ1Ng==",
            "customerName": "Muhammad Samaha"
          }
        ]
      }
    ]
  }
}
```

## Testing with cURL

```bash
# Get all forms
curl -H "Accept: application/json" \
     -H "X-API-Key: test_key_sap_integration_2025" \
     https://ahf.ddev.site/api/test/formie/forms

# Get submissions for a specific form
curl -H "Accept: application/json" \
     -H "X-API-Key: test_key_sap_integration_2025" \
     "https://ahf.ddev.site/api/test/formie/submissions?formHandle=customerFeedback&limit=5"

# GraphQL endpoint has been removed - use REST endpoints instead

# Test without API key (will fail)
curl -H "Accept: application/json" \
     https://ahf.ddev.site/api/test/formie/forms

# Test with limited access key
curl -H "Accept: application/json" \
     -H "X-API-Key: test_key_limited_access_2025" \
     https://ahf.ddev.site/api/test/formie/forms
```

## Error Responses

When an error occurs, the API returns a standardized error response:

### Missing API Key
```json
{
  "success": false,
  "error": {
    "code": "UNAUTHORIZED",
    "message": "Invalid or missing API key. Please provide X-API-Key header."
  }
}
```

### Invalid Permissions
```json
{
  "success": false,
  "error": {
    "code": "FORBIDDEN",
    "message": "API key does not have permission to read submissions."
  }
}
```

### Form Not Found
```json
{
  "success": false,
  "error": {
    "code": "FORM_NOT_FOUND",
    "message": "Form with handle 'invalidHandle' not found",
    "detail": null
  }
}
```

## Notes for Production Implementation

1. **Authentication**: Production endpoints will require API tokens or OAuth authentication
2. **Rate Limiting**: API calls will be rate-limited to prevent abuse
3. **Field Filtering**: Sensitive fields can be excluded from responses
4. **Data Format**: The Base64 encoded values (memberID, memberEmail) are preserved as stored
5. **Pagination**: Large result sets will be paginated for performance
6. **Caching**: Responses may be cached for improved performance

## Next Steps

1. Test these endpoints to verify the data structure meets your needs
2. Provide feedback on any additional fields or filters required
3. Decide between GraphQL or REST API approach
4. Define authentication requirements
5. Set up production endpoints with proper security