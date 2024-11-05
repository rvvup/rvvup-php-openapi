# Rvvup\StatementExportsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportStatement()**](StatementExportsApi.md#exportStatement) | **POST** /api/2024-03-01/{merchantId}/statements/export | Export a statement |


## `exportStatement()`

```php
exportStatement($merchant_id, $statement_export_request)
```

Export a statement

Export statements in different formats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\StatementExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$statement_export_request = new \Rvvup\Api\Model\StatementExportRequest(); // \Rvvup\Api\Model\StatementExportRequest | Statement export filters

try {
    $apiInstance->exportStatement($merchant_id, $statement_export_request);
} catch (Exception $e) {
    echo 'Exception when calling StatementExportsApi->exportStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **statement_export_request** | [**\Rvvup\Api\Model\StatementExportRequest**](../Model/StatementExportRequest.md)| Statement export filters | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
