# Rvvup\ChaserPlansApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChaserPlan()**](ChaserPlansApi.md#createChaserPlan) | **POST** /api/2024-03-01/{merchantId}/chaser-plans | Create new chaser plan |
| [**getChaserPlan()**](ChaserPlansApi.md#getChaserPlan) | **GET** /api/2024-03-01/{merchantId}/chaser-plans/{chaserPlanId} | Get a chaser plan |
| [**listChaserPlans()**](ChaserPlansApi.md#listChaserPlans) | **GET** /api/2024-03-01/{merchantId}/chaser-plans | List Chaser Plans |


## `createChaserPlan()`

```php
createChaserPlan($merchant_id, $chaser_plan_create_input, $idempotency_key): \Rvvup\Api\Model\ChaserPlan
```

Create new chaser plan

Creates a new chaser plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ChaserPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$chaser_plan_create_input = new \Rvvup\Api\Model\ChaserPlanCreateInput(); // \Rvvup\Api\Model\ChaserPlanCreateInput | The chaser plan to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createChaserPlan($merchant_id, $chaser_plan_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChaserPlansApi->createChaserPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **chaser_plan_create_input** | [**\Rvvup\Api\Model\ChaserPlanCreateInput**](../Model/ChaserPlanCreateInput.md)| The chaser plan to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\ChaserPlan**](../Model/ChaserPlan.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChaserPlan()`

```php
getChaserPlan($chaser_plan_id, $merchant_id): \Rvvup\Api\Model\ChaserPlan
```

Get a chaser plan

Get a chaser plan by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ChaserPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chaser_plan_id = 'chaser_plan_id_example'; // string | chaser plan id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getChaserPlan($chaser_plan_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChaserPlansApi->getChaserPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chaser_plan_id** | **string**| chaser plan id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\ChaserPlan**](../Model/ChaserPlan.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChaserPlans()`

```php
listChaserPlans($merchant_id, $offset, $limit): \Rvvup\Api\Model\ChaserPlanPage
```

List Chaser Plans

List chaser plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ChaserPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listChaserPlans($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChaserPlansApi->listChaserPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\ChaserPlanPage**](../Model/ChaserPlanPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
