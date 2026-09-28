# Rvvup\ExternalPayeesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExternalPayee()**](ExternalPayeesApi.md#createExternalPayee) | **POST** /api/2024-03-01/{merchantId}/external-payees | Create an external payee |
| [**getExternalPayee()**](ExternalPayeesApi.md#getExternalPayee) | **GET** /api/2024-03-01/{merchantId}/external-payees/{payeeId} | Get an external payee |
| [**listExternalPayees()**](ExternalPayeesApi.md#listExternalPayees) | **GET** /api/2024-03-01/{merchantId}/external-payees | List external payees |


## `createExternalPayee()`

```php
createExternalPayee($merchant_id, $external_payee_create_input): \Rvvup\Api\Model\ExternalPayee
```

Create an external payee

Register an external bank account as a payee. The payee is created in the CREATED state and cannot receive funds until it is activated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ExternalPayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$external_payee_create_input = new \Rvvup\Api\Model\ExternalPayeeCreateInput(); // \Rvvup\Api\Model\ExternalPayeeCreateInput

try {
    $result = $apiInstance->createExternalPayee($merchant_id, $external_payee_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPayeesApi->createExternalPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **external_payee_create_input** | [**\Rvvup\Api\Model\ExternalPayeeCreateInput**](../Model/ExternalPayeeCreateInput.md)|  | [optional] |

### Return type

[**\Rvvup\Api\Model\ExternalPayee**](../Model/ExternalPayee.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalPayee()`

```php
getExternalPayee($merchant_id, $payee_id): \Rvvup\Api\Model\ExternalPayee
```

Get an external payee

Fetch a single external payee by id, including its status and CoP outcome

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ExternalPayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payee_id = 'payee_id_example'; // string | external payee id

try {
    $result = $apiInstance->getExternalPayee($merchant_id, $payee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPayeesApi->getExternalPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payee_id** | **string**| external payee id | |

### Return type

[**\Rvvup\Api\Model\ExternalPayee**](../Model/ExternalPayee.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExternalPayees()`

```php
listExternalPayees($merchant_id, $offset, $limit): \Rvvup\Api\Model\ExternalPayeePage
```

List external payees

List external payees for a merchant. Account numbers are masked to show only the last 4 digits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ExternalPayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listExternalPayees($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPayeesApi->listExternalPayees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\ExternalPayeePage**](../Model/ExternalPayeePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
