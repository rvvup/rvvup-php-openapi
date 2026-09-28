# Rvvup\ZopaRetailFinanceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createQuote()**](ZopaRetailFinanceApi.md#createQuote) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/zopa-retail-finance/quote | Submit a Zopa Retail Finance Quote |
| [**getLoanTerms()**](ZopaRetailFinanceApi.md#getLoanTerms) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-methods/zopa-retail-finance/loan-terms | Get Zopa Retail Finance Loan Terms |
| [**getRepresentativeExample()**](ZopaRetailFinanceApi.md#getRepresentativeExample) | **GET** /api/2024-03-01/{merchantId}/payment-methods/zopa-retail-finance/representative-example | Get Zopa Retail Finance Representative Example |
| [**zopaRetailFinanceFulfil()**](ZopaRetailFinanceApi.md#zopaRetailFinanceFulfil) | **POST** /api/2024-03-01/{merchantId}/payment-sessions/{paymentSessionId}/fulfil | Fulfil Zopa Retail Finance Order |


## `createQuote()`

```php
createQuote($merchant_id, $checkout_id, $payment_session_id, $zopa_retail_finance_quote_request): \Rvvup\Api\Model\ZopaRetailFinanceQuoteResponse
```

Submit a Zopa Retail Finance Quote

Submit customer affordability data to Zopa Retail Finance and receive the credit decision

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ZopaRetailFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$checkout_id = 'checkout_id_example'; // string | The checkout id
$payment_session_id = 'payment_session_id_example'; // string | The payment session id
$zopa_retail_finance_quote_request = new \Rvvup\Api\Model\ZopaRetailFinanceQuoteRequest(); // \Rvvup\Api\Model\ZopaRetailFinanceQuoteRequest

try {
    $result = $apiInstance->createQuote($merchant_id, $checkout_id, $payment_session_id, $zopa_retail_finance_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZopaRetailFinanceApi->createQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **checkout_id** | **string**| The checkout id | |
| **payment_session_id** | **string**| The payment session id | |
| **zopa_retail_finance_quote_request** | [**\Rvvup\Api\Model\ZopaRetailFinanceQuoteRequest**](../Model/ZopaRetailFinanceQuoteRequest.md)|  | [optional] |

### Return type

[**\Rvvup\Api\Model\ZopaRetailFinanceQuoteResponse**](../Model/ZopaRetailFinanceQuoteResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoanTerms()`

```php
getLoanTerms($merchant_id, $checkout_id, $amount): \Rvvup\Api\Model\ZopaRetailFinanceLoanTerms
```

Get Zopa Retail Finance Loan Terms

Get calculated instalment breakdowns for the checkout amount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ZopaRetailFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$checkout_id = 'checkout_id_example'; // string | The checkout id
$amount = 3.4; // float | Override amount in pounds

try {
    $result = $apiInstance->getLoanTerms($merchant_id, $checkout_id, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZopaRetailFinanceApi->getLoanTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **checkout_id** | **string**| The checkout id | |
| **amount** | **float**| Override amount in pounds | [optional] |

### Return type

[**\Rvvup\Api\Model\ZopaRetailFinanceLoanTerms**](../Model/ZopaRetailFinanceLoanTerms.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepresentativeExample()`

```php
getRepresentativeExample($merchant_id): \Rvvup\Api\Model\ZopaRetailFinanceRepresentativeExample
```

Get Zopa Retail Finance Representative Example

Get the representative example disclosure for the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ZopaRetailFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id

try {
    $result = $apiInstance->getRepresentativeExample($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZopaRetailFinanceApi->getRepresentativeExample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |

### Return type

[**\Rvvup\Api\Model\ZopaRetailFinanceRepresentativeExample**](../Model/ZopaRetailFinanceRepresentativeExample.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zopaRetailFinanceFulfil()`

```php
zopaRetailFinanceFulfil($merchant_id, $payment_session_id, $zopa_retail_finance_fulfil_request): \Rvvup\Api\Model\ZopaRetailFinanceFulfilResponse
```

Fulfil Zopa Retail Finance Order

Fulfils an order, transitioning it to Fulfilled in Zopa Retail Finance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ZopaRetailFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$payment_session_id = 'payment_session_id_example'; // string | The payment session id
$zopa_retail_finance_fulfil_request = new \Rvvup\Api\Model\ZopaRetailFinanceFulfilRequest(); // \Rvvup\Api\Model\ZopaRetailFinanceFulfilRequest

try {
    $result = $apiInstance->zopaRetailFinanceFulfil($merchant_id, $payment_session_id, $zopa_retail_finance_fulfil_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZopaRetailFinanceApi->zopaRetailFinanceFulfil: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **payment_session_id** | **string**| The payment session id | |
| **zopa_retail_finance_fulfil_request** | [**\Rvvup\Api\Model\ZopaRetailFinanceFulfilRequest**](../Model/ZopaRetailFinanceFulfilRequest.md)|  | [optional] |

### Return type

[**\Rvvup\Api\Model\ZopaRetailFinanceFulfilResponse**](../Model/ZopaRetailFinanceFulfilResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
