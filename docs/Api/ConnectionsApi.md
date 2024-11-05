# Rvvup\ConnectionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConnection()**](ConnectionsApi.md#createConnection) | **PUT** /api/2024-03-01/{merchantId}/connections | Create a new connection or updates an existing connection. |
| [**disconnectConnection()**](ConnectionsApi.md#disconnectConnection) | **DELETE** /api/2024-03-01/{merchantId}/connections/{connectionId} | Disconnect a connection |
| [**getConnection()**](ConnectionsApi.md#getConnection) | **GET** /api/2024-03-01/{merchantId}/connections/{connectionId} | Get a connection |
| [**listConnections()**](ConnectionsApi.md#listConnections) | **GET** /api/2024-03-01/{merchantId}/connections | List connections |


## `createConnection()`

```php
createConnection($merchant_id, $connection_create_input): \Rvvup\Api\Model\Connection
```

Create a new connection or updates an existing connection.

Creates a new connection or updates an existing connection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$connection_create_input = new \Rvvup\Api\Model\ConnectionCreateInput(); // \Rvvup\Api\Model\ConnectionCreateInput | The connection to create

try {
    $result = $apiInstance->createConnection($merchant_id, $connection_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->createConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **connection_create_input** | [**\Rvvup\Api\Model\ConnectionCreateInput**](../Model/ConnectionCreateInput.md)| The connection to create | |

### Return type

[**\Rvvup\Api\Model\Connection**](../Model/Connection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectConnection()`

```php
disconnectConnection($merchant_id, $connection_id): \Rvvup\Api\Model\Connection
```

Disconnect a connection

Disconnect a connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$connection_id = 'connection_id_example'; // string | Connection ID

try {
    $result = $apiInstance->disconnectConnection($merchant_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->disconnectConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **connection_id** | **string**| Connection ID | |

### Return type

[**\Rvvup\Api\Model\Connection**](../Model/Connection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnection()`

```php
getConnection($merchant_id, $connection_id): \Rvvup\Api\Model\Connection
```

Get a connection

Get a connection by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$connection_id = 'connection_id_example'; // string | Connection ID

try {
    $result = $apiInstance->getConnection($merchant_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **connection_id** | **string**| Connection ID | |

### Return type

[**\Rvvup\Api\Model\Connection**](../Model/Connection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnections()`

```php
listConnections($merchant_id, $offset, $limit): \Rvvup\Api\Model\ConnectionPage
```

List connections

List connections by Merchant ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listConnections($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->listConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\ConnectionPage**](../Model/ConnectionPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
