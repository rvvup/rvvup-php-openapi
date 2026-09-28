# Rvvup\TransfersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callList()**](TransfersApi.md#callList) | **GET** /api/2024-03-01/{merchantId}/transfers | List transfers |
| [**create()**](TransfersApi.md#create) | **POST** /api/2024-03-01/{merchantId}/transfers | Create a transfer |
| [**find()**](TransfersApi.md#find) | **GET** /api/2024-03-01/{merchantId}/transfers/{transferId} | Get a transfer |


## `callList()`

```php
callList($merchant_id, $offset, $limit): \Rvvup\Api\Model\TransferPage
```

List transfers

List transfers for the given merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 20; // int | pagination limit

try {
    $result = $apiInstance->callList($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->callList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] [default to 20] |

### Return type

[**\Rvvup\Api\Model\TransferPage**](../Model/TransferPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($merchant_id, $idempotency_key, $transfer_create_input): \Rvvup\Api\Model\Transfer
```

Create a transfer

Create a transfer from the given merchant to a destination merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key
$transfer_create_input = new \Rvvup\Api\Model\TransferCreateInput(); // \Rvvup\Api\Model\TransferCreateInput

try {
    $result = $apiInstance->create($merchant_id, $idempotency_key, $transfer_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |
| **transfer_create_input** | [**\Rvvup\Api\Model\TransferCreateInput**](../Model/TransferCreateInput.md)|  | [optional] |

### Return type

[**\Rvvup\Api\Model\Transfer**](../Model/Transfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `find()`

```php
find($merchant_id, $transfer_id): \Rvvup\Api\Model\Transfer
```

Get a transfer

Get a transfer by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$transfer_id = 'transfer_id_example'; // string | transfer id

try {
    $result = $apiInstance->find($merchant_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->find: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **transfer_id** | **string**| transfer id | |

### Return type

[**\Rvvup\Api\Model\Transfer**](../Model/Transfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
