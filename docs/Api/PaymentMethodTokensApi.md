# Rvvup\PaymentMethodTokensApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaymentMethodToken()**](PaymentMethodTokensApi.md#getPaymentMethodToken) | **GET** /api/2024-03-01/{merchantId}/payment-method-tokens/{id} | Get a saved payment method token |
| [**revokePaymentMethodToken()**](PaymentMethodTokensApi.md#revokePaymentMethodToken) | **DELETE** /api/2024-03-01/{merchantId}/payment-method-tokens/{id} | Revoke a saved payment method token |


## `getPaymentMethodToken()`

```php
getPaymentMethodToken($merchant_id, $id): \Rvvup\Api\Model\PaymentMethodTokenDto
```

Get a saved payment method token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentMethodTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$id = 'id_example'; // string | payment method token id

try {
    $result = $apiInstance->getPaymentMethodToken($merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodTokensApi->getPaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **id** | **string**| payment method token id | |

### Return type

[**\Rvvup\Api\Model\PaymentMethodTokenDto**](../Model/PaymentMethodTokenDto.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokePaymentMethodToken()`

```php
revokePaymentMethodToken($merchant_id, $id)
```

Revoke a saved payment method token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentMethodTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$id = 'id_example'; // string | payment method token id

try {
    $apiInstance->revokePaymentMethodToken($merchant_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodTokensApi->revokePaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **id** | **string**| payment method token id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
