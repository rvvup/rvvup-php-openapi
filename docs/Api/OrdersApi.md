# Rvvup\OrdersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrderById()**](OrdersApi.md#getOrderById) | **GET** /api/2024-03-01/{merchantId}/orders/{id} | Get order by ID |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /api/2024-03-01/{merchantId}/orders | Search orders |


## `getOrderById()`

```php
getOrderById($merchant_id, $id): \Rvvup\Api\Model\Order
```

Get order by ID

Retrieve a specific order by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$id = 'id_example'; // string | order id

try {
    $result = $apiInstance->getOrderById($merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **id** | **string**| order id | |

### Return type

[**\Rvvup\Api\Model\Order**](../Model/Order.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($merchant_id, $offset, $limit, $amount_gte, $amount_lte, $reference, $currency, $status, $payment_methods, $q, $customer_account_id, $created_at_gte, $created_at_lte, $address_name, $address_phone_number, $address_company, $address_line1, $address_line2, $address_city, $address_state, $address_postcode, $address_country_code): \Rvvup\Api\Model\OrdersPage
```

Search orders

Search for orders with filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$amount_gte = 'amount_gte_example'; // string | amount greater than or equal to
$amount_lte = 'amount_lte_example'; // string | amount less than or equal to
$reference = 'reference_example'; // string | filter by reference
$currency = 'currency_example'; // string | filter by currency
$status = 'status_example'; // string | filter by status
$payment_methods = array('payment_methods_example'); // string[] | filter by payment methods
$q = 'q_example'; // string | search query
$customer_account_id = 'customer_account_id_example'; // string | filter by customer account id
$created_at_gte = 'created_at_gte_example'; // string | created after (inclusive)
$created_at_lte = 'created_at_lte_example'; // string | created before (inclusive)
$address_name = 'address_name_example'; // string | filter by address name
$address_phone_number = 'address_phone_number_example'; // string | filter by address phone number
$address_company = 'address_company_example'; // string | filter by address company
$address_line1 = 'address_line1_example'; // string | filter by address line 1
$address_line2 = 'address_line2_example'; // string | filter by address line 2
$address_city = 'address_city_example'; // string | filter by address city
$address_state = 'address_state_example'; // string | filter by address state
$address_postcode = 'address_postcode_example'; // string | filter by address postcode
$address_country_code = 'address_country_code_example'; // string | filter by address country code

try {
    $result = $apiInstance->getOrders($merchant_id, $offset, $limit, $amount_gte, $amount_lte, $reference, $currency, $status, $payment_methods, $q, $customer_account_id, $created_at_gte, $created_at_lte, $address_name, $address_phone_number, $address_company, $address_line1, $address_line2, $address_city, $address_state, $address_postcode, $address_country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **amount_gte** | **string**| amount greater than or equal to | [optional] |
| **amount_lte** | **string**| amount less than or equal to | [optional] |
| **reference** | **string**| filter by reference | [optional] |
| **currency** | **string**| filter by currency | [optional] |
| **status** | **string**| filter by status | [optional] |
| **payment_methods** | [**string[]**](../Model/string.md)| filter by payment methods | [optional] |
| **q** | **string**| search query | [optional] |
| **customer_account_id** | **string**| filter by customer account id | [optional] |
| **created_at_gte** | **string**| created after (inclusive) | [optional] |
| **created_at_lte** | **string**| created before (inclusive) | [optional] |
| **address_name** | **string**| filter by address name | [optional] |
| **address_phone_number** | **string**| filter by address phone number | [optional] |
| **address_company** | **string**| filter by address company | [optional] |
| **address_line1** | **string**| filter by address line 1 | [optional] |
| **address_line2** | **string**| filter by address line 2 | [optional] |
| **address_city** | **string**| filter by address city | [optional] |
| **address_state** | **string**| filter by address state | [optional] |
| **address_postcode** | **string**| filter by address postcode | [optional] |
| **address_country_code** | **string**| filter by address country code | [optional] |

### Return type

[**\Rvvup\Api\Model\OrdersPage**](../Model/OrdersPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
