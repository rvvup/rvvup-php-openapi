# Rvvup\LogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLog()**](LogsApi.md#createLog) | **POST** /api/2024-03-01/{merchantId}/logs | Create a log |


## `createLog()`

```php
createLog($merchant_id, $log_create_input): \Rvvup\Api\Model\LogRecord
```

Create a log

Logs information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant ID
$log_create_input = new \Rvvup\Api\Model\LogCreateInput(); // \Rvvup\Api\Model\LogCreateInput | The log to write

try {
    $result = $apiInstance->createLog($merchant_id, $log_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->createLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant ID | |
| **log_create_input** | [**\Rvvup\Api\Model\LogCreateInput**](../Model/LogCreateInput.md)| The log to write | |

### Return type

[**\Rvvup\Api\Model\LogRecord**](../Model/LogRecord.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
