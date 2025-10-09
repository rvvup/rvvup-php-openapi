# Rvvup\RefundsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRefund()**](RefundsApi.md#createRefund) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/refunds | Create a refund |


## `createRefund()`

```php
createRefund($merchant_id, $checkout_id, $payment_session_id, $refund_create_input, $idempotency_key): \Rvvup\Api\Model\Refund
```

Create a refund

Creates a refund for a payment session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$checkout_id = 'checkout_id_example'; // string | The checkout id
$payment_session_id = 'payment_session_id_example'; // string | The payment session id
$refund_create_input = new \Rvvup\Api\Model\RefundCreateInput(); // \Rvvup\Api\Model\RefundCreateInput | The refund to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createRefund($merchant_id, $checkout_id, $payment_session_id, $refund_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **checkout_id** | **string**| The checkout id | |
| **payment_session_id** | **string**| The payment session id | |
| **refund_create_input** | [**\Rvvup\Api\Model\RefundCreateInput**](../Model/RefundCreateInput.md)| The refund to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\Refund**](../Model/Refund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
