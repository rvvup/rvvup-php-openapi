# Rvvup\CheckoutsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckout()**](CheckoutsApi.md#createCheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts | Create new checkout |
| [**getCheckout()**](CheckoutsApi.md#getCheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId} | Get a checkout |
| [**getThemeForCheckout()**](CheckoutsApi.md#getThemeForCheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/theme | Get the theme for a checkout |
| [**listCheckoutPaymentMethods()**](CheckoutsApi.md#listCheckoutPaymentMethods) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-methods | Get payment methods for a checkout |
| [**listCheckouts()**](CheckoutsApi.md#listCheckouts) | **GET** /api/2024-03-01/{merchantId}/checkouts | List checkouts |


## `createCheckout()`

```php
createCheckout($merchant_id, $checkout_create_input, $idempotency_key): \Rvvup\Api\Model\Checkout
```

Create new checkout

Creates a new checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_create_input = new \Rvvup\Api\Model\CheckoutCreateInput(); // \Rvvup\Api\Model\CheckoutCreateInput | The Checkout to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createCheckout($merchant_id, $checkout_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_create_input** | [**\Rvvup\Api\Model\CheckoutCreateInput**](../Model/CheckoutCreateInput.md)| The Checkout to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckout()`

```php
getCheckout($checkout_id, $merchant_id, $accept): \Rvvup\Api\Model\Checkout
```

Get a checkout

Get a checkout by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_id = 'checkout_id_example'; // string | checkout id
$merchant_id = 'merchant_id_example'; // string | merchant id
$accept = 'accept_example'; // string | Accept header

try {
    $result = $apiInstance->getCheckout($checkout_id, $merchant_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->getCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_id** | **string**| checkout id | |
| **merchant_id** | **string**| merchant id | |
| **accept** | **string**| Accept header | [optional] |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/schema+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeForCheckout()`

```php
getThemeForCheckout($merchant_id, $checkout_id): \Rvvup\Api\Model\Theme
```

Get the theme for a checkout

Gets the theme for a checkout. The theme is used to style the checkout page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$checkout_id = 'checkout_id_example'; // string | Checkout ID

try {
    $result = $apiInstance->getThemeForCheckout($merchant_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->getThemeForCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **checkout_id** | **string**| Checkout ID | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCheckoutPaymentMethods()`

```php
listCheckoutPaymentMethods($checkout_id, $merchant_id, $offset, $limit): \Rvvup\Api\Model\PaymentMethodDetailsPage
```

Get payment methods for a checkout

Lists the currently eligible payment methods for a checkout. The payment method status and checkout template settings are used to determine the eligible methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_id = 'checkout_id_example'; // string | checkout id
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckoutPaymentMethods($checkout_id, $merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->listCheckoutPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_id** | **string**| checkout id | |
| **merchant_id** | **string**| merchant id | |
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

## `listCheckouts()`

```php
listCheckouts($merchant_id, $offset, $limit): \Rvvup\Api\Model\CheckoutPage
```

List checkouts

List checkouts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckouts($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutsApi->listCheckouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\CheckoutPage**](../Model/CheckoutPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
