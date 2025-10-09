# Rvvup\CustomerAccountsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomerAccount()**](CustomerAccountsApi.md#createCustomerAccount) | **POST** /api/2024-03-01/{merchantId}/customer-accounts | Create a customer account |
| [**getCustomerAccount()**](CustomerAccountsApi.md#getCustomerAccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId} | Get a customer account |
| [**getCustomerAccounts()**](CustomerAccountsApi.md#getCustomerAccounts) | **GET** /api/2024-03-01/{merchantId}/customer-accounts | Get customer accounts |
| [**listInvoicesForCustomerAccount()**](CustomerAccountsApi.md#listInvoicesForCustomerAccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId}/invoices | Get list of invoices for customer account |


## `createCustomerAccount()`

```php
createCustomerAccount($merchant_id, $customer_account_create_input): \Rvvup\Api\Model\CustomerAccount
```

Create a customer account

Create a customer account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CustomerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$customer_account_create_input = new \Rvvup\Api\Model\CustomerAccountCreateInput(); // \Rvvup\Api\Model\CustomerAccountCreateInput | The Customer Account to create

try {
    $result = $apiInstance->createCustomerAccount($merchant_id, $customer_account_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountsApi->createCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **customer_account_create_input** | [**\Rvvup\Api\Model\CustomerAccountCreateInput**](../Model/CustomerAccountCreateInput.md)| The Customer Account to create | |

### Return type

[**\Rvvup\Api\Model\CustomerAccount**](../Model/CustomerAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccount()`

```php
getCustomerAccount($customer_account_id, $merchant_id): \Rvvup\Api\Model\CustomerAccount
```

Get a customer account

Get a customer account by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CustomerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_account_id = 'customer_account_id_example'; // string | customer account id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getCustomerAccount($customer_account_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountsApi->getCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_account_id** | **string**| customer account id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CustomerAccount**](../Model/CustomerAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccounts()`

```php
getCustomerAccounts($merchant_id, $offset, $limit, $q): \Rvvup\Api\Model\CustomerAccountPage
```

Get customer accounts

Get customer accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CustomerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$q = 'q_example'; // string | search query

try {
    $result = $apiInstance->getCustomerAccounts($merchant_id, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountsApi->getCustomerAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **q** | **string**| search query | [optional] |

### Return type

[**\Rvvup\Api\Model\CustomerAccountPage**](../Model/CustomerAccountPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoicesForCustomerAccount()`

```php
listInvoicesForCustomerAccount($customer_account_id, $merchant_id, $offset, $limit): \Rvvup\Api\Model\InvoicePage
```

Get list of invoices for customer account

Get list of invoices for customer account by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CustomerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_account_id = 'customer_account_id_example'; // string | customer account id
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listInvoicesForCustomerAccount($customer_account_id, $merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountsApi->listInvoicesForCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_account_id** | **string**| customer account id | |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\InvoicePage**](../Model/InvoicePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
