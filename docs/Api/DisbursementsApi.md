# Rvvup\DisbursementsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDisbursementBatch()**](DisbursementsApi.md#getDisbursementBatch) | **GET** /api/2024-03-01/{merchantId}/disbursements/{disbursementBatchId} | Get a disbursement batch |


## `getDisbursementBatch()`

```php
getDisbursementBatch($merchant_id, $disbursement_batch_id): \Rvvup\Api\Model\DisbursementBatch
```

Get a disbursement batch

Returns a disbursement batch with its constituent payments, refunds and fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$disbursement_batch_id = 'disbursement_batch_id_example'; // string | disbursement batch id

try {
    $result = $apiInstance->getDisbursementBatch($merchant_id, $disbursement_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->getDisbursementBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **disbursement_batch_id** | **string**| disbursement batch id | |

### Return type

[**\Rvvup\Api\Model\DisbursementBatch**](../Model/DisbursementBatch.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
