# Rvvup\PaymentMethodsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPaymentMethods()**](PaymentMethodsApi.md#listPaymentMethods) | **GET** /api/2024-03-01/{merchantId}/payment-methods | Get payment methods |


## `listPaymentMethods()`

```php
listPaymentMethods($merchant_id, $currency, $amount, $include_inactive, $offset, $limit): \Rvvup\Api\Model\PaymentMethodDetailsPage
```

Get payment methods

Get all available payment methods for the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$currency = 'currency_example'; // string | The transaction currency
$amount = 'amount_example'; // string | The transaction amount
$include_inactive = True; // bool | Include inactive payment methods
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listPaymentMethods($merchant_id, $currency, $amount, $include_inactive, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **currency** | **string**| The transaction currency | [optional] |
| **amount** | **string**| The transaction amount | [optional] |
| **include_inactive** | **bool**| Include inactive payment methods | [optional] |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentMethodDetailsPage**](../Model/PaymentMethodDetailsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
