# Rvvup\CheckoutTemplatesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckoutTemplate()**](CheckoutTemplatesApi.md#createCheckoutTemplate) | **POST** /api/2024-03-01/{merchantId}/checkout-templates | Create new checkout template |
| [**getCheckoutTemplate()**](CheckoutTemplatesApi.md#getCheckoutTemplate) | **GET** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Get a checkout template |
| [**listCheckoutTemplates()**](CheckoutTemplatesApi.md#listCheckoutTemplates) | **GET** /api/2024-03-01/{merchantId}/checkout-templates | List checkout templates |
| [**updateCheckoutTemplate()**](CheckoutTemplatesApi.md#updateCheckoutTemplate) | **PATCH** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Update a checkout template |


## `createCheckoutTemplate()`

```php
createCheckoutTemplate($merchant_id, $checkout_template_create_input): \Rvvup\Api\Model\CheckoutTemplate
```

Create new checkout template

Creates a new checkout template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_template_create_input = new \Rvvup\Api\Model\CheckoutTemplateCreateInput(); // \Rvvup\Api\Model\CheckoutTemplateCreateInput | The checkout template to create

try {
    $result = $apiInstance->createCheckoutTemplate($merchant_id, $checkout_template_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTemplatesApi->createCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_template_create_input** | [**\Rvvup\Api\Model\CheckoutTemplateCreateInput**](../Model/CheckoutTemplateCreateInput.md)| The checkout template to create | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutTemplate()`

```php
getCheckoutTemplate($checkout_template_id, $merchant_id): \Rvvup\Api\Model\CheckoutTemplate
```

Get a checkout template

Get a checkout template by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_template_id = 'checkout_template_id_example'; // string | checkout template id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getCheckoutTemplate($checkout_template_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTemplatesApi->getCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_template_id** | **string**| checkout template id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCheckoutTemplates()`

```php
listCheckoutTemplates($merchant_id, $offset, $limit): \Rvvup\Api\Model\CheckoutTemplatePage
```

List checkout templates

List checkout templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckoutTemplates($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTemplatesApi->listCheckoutTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplatePage**](../Model/CheckoutTemplatePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckoutTemplate()`

```php
updateCheckoutTemplate($checkout_template_id, $merchant_id, $checkout_template_update_input): \Rvvup\Api\Model\CheckoutTemplate
```

Update a checkout template

Update a checkout template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_template_id = 'checkout_template_id_example'; // string | checkout template id
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_template_update_input = new \Rvvup\Api\Model\CheckoutTemplateUpdateInput(); // \Rvvup\Api\Model\CheckoutTemplateUpdateInput | The checkout template to update

try {
    $result = $apiInstance->updateCheckoutTemplate($checkout_template_id, $merchant_id, $checkout_template_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutTemplatesApi->updateCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_template_id** | **string**| checkout template id | |
| **merchant_id** | **string**| merchant id | |
| **checkout_template_update_input** | [**\Rvvup\Api\Model\CheckoutTemplateUpdateInput**](../Model/CheckoutTemplateUpdateInput.md)| The checkout template to update | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
