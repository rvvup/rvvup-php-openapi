# Rvvup\PayeesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPayees()**](PayeesApi.md#listPayees) | **GET** /api/2024-03-01/{merchantId}/payees | List payees |


## `listPayees()`

```php
listPayees($merchant_id, $q, $offset, $limit): \Rvvup\Api\Model\PayeePage
```

List payees

List allowed payee merchants for the given merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$q = 'q_example'; // string | search query to filter payees by name
$offset = 56; // int | pagination offset
$limit = 20; // int | maximum number of results

try {
    $result = $apiInstance->listPayees($merchant_id, $q, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeesApi->listPayees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **q** | **string**| search query to filter payees by name | [optional] |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| maximum number of results | [optional] [default to 20] |

### Return type

[**\Rvvup\Api\Model\PayeePage**](../Model/PayeePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
