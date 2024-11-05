# Rvvup\WebhooksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /api/2024-03-01/{merchantId}/webhooks | Create a new webhook |
| [**getWebhook()**](WebhooksApi.md#getWebhook) | **GET** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Get a webhook by id |
| [**listWebhooks()**](WebhooksApi.md#listWebhooks) | **GET** /api/2024-03-01/{merchantId}/webhooks | Get all webhook |
| [**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PATCH** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Update a webhook |


## `createWebhook()`

```php
createWebhook($merchant_id, $webhook_create_input): \Rvvup\Api\Model\Webhook
```

Create a new webhook

Create a new webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_create_input = new \Rvvup\Api\Model\WebhookCreateInput(); // \Rvvup\Api\Model\WebhookCreateInput | The webhook to create

try {
    $result = $apiInstance->createWebhook($merchant_id, $webhook_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_create_input** | [**\Rvvup\Api\Model\WebhookCreateInput**](../Model/WebhookCreateInput.md)| The webhook to create | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($merchant_id, $webhook_id): \Rvvup\Api\Model\Webhook
```

Get a webhook by id

Get a webhook by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID

try {
    $result = $apiInstance->getWebhook($merchant_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_id** | **string**| Webhook ID | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($merchant_id, $offset, $limit): \Rvvup\Api\Model\WebhookPage
```

Get all webhook

Get all webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listWebhooks($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\WebhookPage**](../Model/WebhookPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($merchant_id, $webhook_id, $webhook_update_input): \Rvvup\Api\Model\Webhook
```

Update a webhook

Update a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID
$webhook_update_input = new \Rvvup\Api\Model\WebhookUpdateInput(); // \Rvvup\Api\Model\WebhookUpdateInput | The webhook to update

try {
    $result = $apiInstance->updateWebhook($merchant_id, $webhook_id, $webhook_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_id** | **string**| Webhook ID | |
| **webhook_update_input** | [**\Rvvup\Api\Model\WebhookUpdateInput**](../Model/WebhookUpdateInput.md)| The webhook to update | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
