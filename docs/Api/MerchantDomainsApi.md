# Rvvup\MerchantDomainsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMerchantDomains()**](MerchantDomainsApi.md#createMerchantDomains) | **POST** /api/2024-03-01/{merchantId}/domains | Create new merchant domains |
| [**deleteMerchantDomain()**](MerchantDomainsApi.md#deleteMerchantDomain) | **DELETE** /api/2024-03-01/{merchantId}/domains/{merchantDomainId} | Delete a merchant domain |
| [**listMerchantDomains()**](MerchantDomainsApi.md#listMerchantDomains) | **GET** /api/2024-03-01/{merchantId}/domains | List merchant domains |


## `createMerchantDomains()`

```php
createMerchantDomains($merchant_id, $merchant_domains_create_input, $idempotency_key): \Rvvup\Api\Model\MerchantDomainsPage
```

Create new merchant domains

Add domains to a merchant, this will be used for various purposes such as restrict domains for CORS etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\MerchantDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$merchant_domains_create_input = new \Rvvup\Api\Model\MerchantDomainsCreateInput(); // \Rvvup\Api\Model\MerchantDomainsCreateInput | Input for adding new domains to the merchant
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createMerchantDomains($merchant_id, $merchant_domains_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDomainsApi->createMerchantDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **merchant_domains_create_input** | [**\Rvvup\Api\Model\MerchantDomainsCreateInput**](../Model/MerchantDomainsCreateInput.md)| Input for adding new domains to the merchant | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\MerchantDomainsPage**](../Model/MerchantDomainsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMerchantDomain()`

```php
deleteMerchantDomain($merchant_id, $merchant_domain_id)
```

Delete a merchant domain

Delete a merchant domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\MerchantDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$merchant_domain_id = 'merchant_domain_id_example'; // string | Merchant Domain ID

try {
    $apiInstance->deleteMerchantDomain($merchant_id, $merchant_domain_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDomainsApi->deleteMerchantDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **merchant_domain_id** | **string**| Merchant Domain ID | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantDomains()`

```php
listMerchantDomains($merchant_id, $offset, $limit): \Rvvup\Api\Model\MerchantDomainsPage
```

List merchant domains

List merchant domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\MerchantDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listMerchantDomains($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantDomainsApi->listMerchantDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\MerchantDomainsPage**](../Model/MerchantDomainsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
