# Rvvup\ShipmentTrackingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShipmentTracking()**](ShipmentTrackingApi.md#createShipmentTracking) | **POST** /api/2024-03-01/{merchantId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session |
| [**createShipmentTrackingWithCheckout()**](ShipmentTrackingApi.md#createShipmentTrackingWithCheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session |


## `createShipmentTracking()`

```php
createShipmentTracking($merchant_id, $payment_session_id, $shipment_tracking_create_input): \Rvvup\Api\Model\ShipmentTracking
```

Create a shipment tracking entry for a payment session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ShipmentTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_session_id = 'payment_session_id_example'; // string | payment session id
$shipment_tracking_create_input = new \Rvvup\Api\Model\ShipmentTrackingCreateInput(); // \Rvvup\Api\Model\ShipmentTrackingCreateInput | Input for adding new shipment tracking

try {
    $result = $apiInstance->createShipmentTracking($merchant_id, $payment_session_id, $shipment_tracking_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentTrackingApi->createShipmentTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_session_id** | **string**| payment session id | |
| **shipment_tracking_create_input** | [**\Rvvup\Api\Model\ShipmentTrackingCreateInput**](../Model/ShipmentTrackingCreateInput.md)| Input for adding new shipment tracking | |

### Return type

[**\Rvvup\Api\Model\ShipmentTracking**](../Model/ShipmentTracking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipmentTrackingWithCheckout()`

```php
createShipmentTrackingWithCheckout($merchant_id, $payment_session_id, $checkout_id, $shipment_tracking_create_input): \Rvvup\Api\Model\ShipmentTracking
```

Create a shipment tracking entry for a payment session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ShipmentTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_session_id = 'payment_session_id_example'; // string | payment session id
$checkout_id = 'checkout_id_example'; // string | checkout id
$shipment_tracking_create_input = new \Rvvup\Api\Model\ShipmentTrackingCreateInput(); // \Rvvup\Api\Model\ShipmentTrackingCreateInput | Input for adding new shipment tracking

try {
    $result = $apiInstance->createShipmentTrackingWithCheckout($merchant_id, $payment_session_id, $checkout_id, $shipment_tracking_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentTrackingApi->createShipmentTrackingWithCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_session_id** | **string**| payment session id | |
| **checkout_id** | **string**| checkout id | |
| **shipment_tracking_create_input** | [**\Rvvup\Api\Model\ShipmentTrackingCreateInput**](../Model/ShipmentTrackingCreateInput.md)| Input for adding new shipment tracking | |

### Return type

[**\Rvvup\Api\Model\ShipmentTracking**](../Model/ShipmentTracking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
