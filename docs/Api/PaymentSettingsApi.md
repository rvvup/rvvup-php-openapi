# Rvvup\PaymentSettingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaymentSettings()**](PaymentSettingsApi.md#getPaymentSettings) | **POST** /api/2024-03-01/{merchantId}/payment-settings | Get payment settings for a merchant |


## `getPaymentSettings()`

```php
getPaymentSettings($merchant_id, $payment_settings_context, $offset, $limit, $mpk): \Rvvup\Api\Model\PaymentMethodDetailsPage
```

Get payment settings for a merchant

Get available payment methods and their relevant settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_settings_context = new \Rvvup\Api\Model\PaymentSettingsContext(); // \Rvvup\Api\Model\PaymentSettingsContext | Context in which to fetch the settings
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$mpk = 'mpk_example'; // string | merchant public key

try {
    $result = $apiInstance->getPaymentSettings($merchant_id, $payment_settings_context, $offset, $limit, $mpk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSettingsApi->getPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_settings_context** | [**\Rvvup\Api\Model\PaymentSettingsContext**](../Model/PaymentSettingsContext.md)| Context in which to fetch the settings | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **mpk** | **string**| merchant public key | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentMethodDetailsPage**](../Model/PaymentMethodDetailsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
