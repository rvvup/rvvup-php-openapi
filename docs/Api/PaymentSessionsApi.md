# Rvvup\PaymentSessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentSession()**](PaymentSessionsApi.md#createPaymentSession) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions | Create a payment session |
| [**getPaymentSession()**](PaymentSessionsApi.md#getPaymentSession) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId} | Get a payment session |


## `createPaymentSession()`

```php
createPaymentSession($merchant_id, $checkout_id, $payment_session_create_input): \Rvvup\Api\Model\PaymentSession
```

Create a payment session

Creates a payment session with a new active payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_id = 'checkout_id_example'; // string | checkout id
$payment_session_create_input = new \Rvvup\Api\Model\PaymentSessionCreateInput(); // \Rvvup\Api\Model\PaymentSessionCreateInput | The Payment Session to create

try {
    $result = $apiInstance->createPaymentSession($merchant_id, $checkout_id, $payment_session_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionsApi->createPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_id** | **string**| checkout id | |
| **payment_session_create_input** | [**\Rvvup\Api\Model\PaymentSessionCreateInput**](../Model/PaymentSessionCreateInput.md)| The Payment Session to create | |

### Return type

[**\Rvvup\Api\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentSession()`

```php
getPaymentSession($merchant_id, $checkout_id, $payment_session_id): \Rvvup\Api\Model\PaymentSession
```

Get a payment session

Get a payment session by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_id = 'checkout_id_example'; // string | checkout id
$payment_session_id = 'payment_session_id_example'; // string | payment session id

try {
    $result = $apiInstance->getPaymentSession($merchant_id, $checkout_id, $payment_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionsApi->getPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_id** | **string**| checkout id | |
| **payment_session_id** | **string**| payment session id | |

### Return type

[**\Rvvup\Api\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
