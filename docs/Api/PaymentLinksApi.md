# Rvvup\PaymentLinksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentLink()**](PaymentLinksApi.md#createPaymentLink) | **POST** /api/2024-03-01/{merchantId}/payment-links | Create new payment link |
| [**deactivatePaymentLink()**](PaymentLinksApi.md#deactivatePaymentLink) | **DELETE** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Deactivate a payment link |
| [**getPaymentLink()**](PaymentLinksApi.md#getPaymentLink) | **GET** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Get a payment link |
| [**listPaymentLinks()**](PaymentLinksApi.md#listPaymentLinks) | **GET** /api/2024-03-01/{merchantId}/payment-links | List payment links |


## `createPaymentLink()`

```php
createPaymentLink($merchant_id, $payment_link_create_input, $idempotency_key): \Rvvup\Api\Model\PaymentLink
```

Create new payment link

Creates a new payment link. User can choose whether to make it reusable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_link_create_input = new \Rvvup\Api\Model\PaymentLinkCreateInput(); // \Rvvup\Api\Model\PaymentLinkCreateInput | The Payment Link to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createPaymentLink($merchant_id, $payment_link_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->createPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_link_create_input** | [**\Rvvup\Api\Model\PaymentLinkCreateInput**](../Model/PaymentLinkCreateInput.md)| The Payment Link to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivatePaymentLink()`

```php
deactivatePaymentLink($payment_link_id, $merchant_id): \Rvvup\Api\Model\PaymentLink
```

Deactivate a payment link

Deactivate a payment link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_link_id = 'payment_link_id_example'; // string | payment link id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->deactivatePaymentLink($payment_link_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->deactivatePaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_link_id** | **string**| payment link id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentLink()`

```php
getPaymentLink($payment_link_id, $merchant_id): \Rvvup\Api\Model\PaymentLink
```

Get a payment link

Get a payment link by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_link_id = 'payment_link_id_example'; // string | payment link id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getPaymentLink($payment_link_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_link_id** | **string**| payment link id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentLinks()`

```php
listPaymentLinks($merchant_id, $offset, $limit): \Rvvup\Api\Model\PaymentLinkPage
```

List payment links

List payment links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listPaymentLinks($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->listPaymentLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentLinkPage**](../Model/PaymentLinkPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
