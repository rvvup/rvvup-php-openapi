# Rvvup\AccountStatementsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountStatement()**](AccountStatementsApi.md#createAccountStatement) | **POST** /api/2024-03-01/{merchantId}/accounts/statements | Create a new account statement |
| [**getAccountStatement()**](AccountStatementsApi.md#getAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId} | Get an account statement |
| [**getCheckoutForAccountStatement()**](AccountStatementsApi.md#getCheckoutForAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/checkouts/{checkoutId} | Get a checkout for an account statement |
| [**getThemeForAccountStatement()**](AccountStatementsApi.md#getThemeForAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/theme | Get the theme for an account statement |


## `createAccountStatement()`

```php
createAccountStatement($merchant_id, $account_statement_create_input, $idempotency_key): \Rvvup\Api\Model\AccountStatement
```

Create a new account statement

Creates a new account statement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\AccountStatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_create_input = new \Rvvup\Api\Model\AccountStatementCreateInput(); // \Rvvup\Api\Model\AccountStatementCreateInput | The account statement to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createAccountStatement($merchant_id, $account_statement_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountStatementsApi->createAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_create_input** | [**\Rvvup\Api\Model\AccountStatementCreateInput**](../Model/AccountStatementCreateInput.md)| The account statement to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\AccountStatement**](../Model/AccountStatement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountStatement()`

```php
getAccountStatement($merchant_id, $account_statement_id): \Rvvup\Api\Model\AccountStatement
```

Get an account statement

Get an account statement by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\AccountStatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID

try {
    $result = $apiInstance->getAccountStatement($merchant_id, $account_statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountStatementsApi->getAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |

### Return type

[**\Rvvup\Api\Model\AccountStatement**](../Model/AccountStatement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutForAccountStatement()`

```php
getCheckoutForAccountStatement($merchant_id, $account_statement_id, $checkout_id): \Rvvup\Api\Model\Checkout
```

Get a checkout for an account statement

Get a checkout for an account statement by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\AccountStatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID
$checkout_id = 'checkout_id_example'; // string | Checkout ID

try {
    $result = $apiInstance->getCheckoutForAccountStatement($merchant_id, $account_statement_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountStatementsApi->getCheckoutForAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |
| **checkout_id** | **string**| Checkout ID | |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeForAccountStatement()`

```php
getThemeForAccountStatement($merchant_id, $account_statement_id): \Rvvup\Api\Model\Theme
```

Get the theme for an account statement

Gets the theme for an account statement. The theme is used to style the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\AccountStatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID

try {
    $result = $apiInstance->getThemeForAccountStatement($merchant_id, $account_statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountStatementsApi->getThemeForAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |

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
