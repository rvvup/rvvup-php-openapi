# Rvvup\InvoicesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoicesApi.md#createInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices | Create new invoice |
| [**createInvoiceNotification()**](InvoicesApi.md#createInvoiceNotification) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | Notify a customer of an invoice |
| [**deleteInvoice()**](InvoicesApi.md#deleteInvoice) | **DELETE** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Delete a draft invoice |
| [**downloadCreditNoteForInvoice()**](InvoicesApi.md#downloadCreditNoteForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/download | Get a link to download the invoice |
| [**finalizeInvoice()**](InvoicesApi.md#finalizeInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/finalize | Finalize an invoice |
| [**getCheckoutForInvoice()**](InvoicesApi.md#getCheckoutForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/checkouts/{checkoutId} | Get a checkout for an invoice |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Get a invoice |
| [**listCreditNotesForInvoice()**](InvoicesApi.md#listCreditNotesForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes | List credit notes for an invoice |
| [**listInvoiceNotifications()**](InvoicesApi.md#listInvoiceNotifications) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | List invoice notifications |
| [**listInvoices()**](InvoicesApi.md#listInvoices) | **GET** /api/2024-03-01/{merchantId}/invoices | List invoices |
| [**refreshInvoiceUrl()**](InvoicesApi.md#refreshInvoiceUrl) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/refresh-url | Refresh an invoice url |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Update an invoice |
| [**voidInvoice()**](InvoicesApi.md#voidInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/void | Void an open invoice |


## `createInvoice()`

```php
createInvoice($merchant_id, $invoice_create_input, $idempotency_key): \Rvvup\Api\Model\Invoice
```

Create new invoice

Creates a new invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_create_input = new \Rvvup\Api\Model\InvoiceCreateInput(); // \Rvvup\Api\Model\InvoiceCreateInput | The invoice to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createInvoice($merchant_id, $invoice_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_create_input** | [**\Rvvup\Api\Model\InvoiceCreateInput**](../Model/InvoiceCreateInput.md)| The invoice to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceNotification()`

```php
createInvoiceNotification($invoice_id, $merchant_id, $invoice_notification_input): \Rvvup\Api\Model\InvoiceNotification
```

Notify a customer of an invoice

Notify a customer of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | invoice id
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_notification_input = new \Rvvup\Api\Model\InvoiceNotificationInput(); // \Rvvup\Api\Model\InvoiceNotificationInput | The notification request

try {
    $result = $apiInstance->createInvoiceNotification($invoice_id, $merchant_id, $invoice_notification_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoiceNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| invoice id | |
| **merchant_id** | **string**| merchant id | |
| **invoice_notification_input** | [**\Rvvup\Api\Model\InvoiceNotificationInput**](../Model/InvoiceNotificationInput.md)| The notification request | |

### Return type

[**\Rvvup\Api\Model\InvoiceNotification**](../Model/InvoiceNotification.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($merchant_id, $invoice_id)
```

Delete a draft invoice

Deletes a draft invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_id = 'invoice_id_example'; // string | invoice id

try {
    $apiInstance->deleteInvoice($merchant_id, $invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_id** | **string**| invoice id | |

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

## `downloadCreditNoteForInvoice()`

```php
downloadCreditNoteForInvoice($merchant_id, $invoice_id, $credit_note_id): \Rvvup\Api\Model\CreditNoteDownload
```

Get a link to download the credit note

Get a link to download the credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_id = 'invoice_id_example'; // string | invoice id
$credit_note_id = 'credit_note_id_example'; // string | credit note id

try {
    $result = $apiInstance->downloadCreditNoteForInvoice($merchant_id, $invoice_id, $credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadCreditNoteForInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_id** | **string**| invoice id | |
| **credit_note_id** | **string**| credit note id | |

### Return type

[**\Rvvup\Api\Model\CreditNoteDownload**](../Model/CreditNoteDownload.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoice()`

```php
downloadInvoice($merchant_id, $invoice_id): \Rvvup\Api\Model\InvoiceDownload
```

Get a link to download the invoice

Get a link to download the invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$invoice_id = 'invoice_id_example'; // string | Invoice ID

try {
    $result = $apiInstance->downloadInvoice($merchant_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **invoice_id** | **string**| Invoice ID | |

### Return type

[**\Rvvup\Api\Model\InvoiceDownload**](../Model/InvoiceDownload.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeInvoice()`

```php
finalizeInvoice($invoice_id, $merchant_id): \Rvvup\Api\Model\Invoice
```

Finalize an invoice

Finalize an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | invoice id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->finalizeInvoice($invoice_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->finalizeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| invoice id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutForInvoice()`

```php
getCheckoutForInvoice($merchant_id, $invoice_id, $checkout_id): \Rvvup\Api\Model\Checkout
```

Get a checkout for an invoice

Get a checkout for an invoice by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$invoice_id = 'invoice_id_example'; // string | Invoice ID
$checkout_id = 'checkout_id_example'; // string | Checkout ID

try {
    $result = $apiInstance->getCheckoutForInvoice($merchant_id, $invoice_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getCheckoutForInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **invoice_id** | **string**| Invoice ID | |
| **checkout_id** | **string**| Checkout ID | |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($invoice_id, $merchant_id): \Rvvup\Api\Model\Invoice
```

Get a invoice

Get a invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | invoice id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getInvoice($invoice_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| invoice id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditNotesForInvoice()`

```php
listCreditNotesForInvoice($merchant_id, $invoice_id, $offset, $limit): \Rvvup\Api\Model\CreditNotePage
```

List credit notes for an invoice

List credit notes for an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_id = 'invoice_id_example'; // string | invoice id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCreditNotesForInvoice($merchant_id, $invoice_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listCreditNotesForInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_id** | **string**| invoice id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\CreditNotePage**](../Model/CreditNotePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoiceNotifications()`

```php
listInvoiceNotifications($merchant_id, $invoice_id, $offset, $limit): \Rvvup\Api\Model\InvoiceNotificationPage
```

List invoice notifications

List invoice notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_id = 'invoice_id_example'; // string | invoice id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listInvoiceNotifications($merchant_id, $invoice_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoiceNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_id** | **string**| invoice id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\InvoiceNotificationPage**](../Model/InvoiceNotificationPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($merchant_id, $offset, $limit, $q, $customer_account_id): \Rvvup\Api\Model\InvoicePage
```

List invoices

List invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$q = 'q_example'; // string | invoice search query
$customer_account_id = 'customer_account_id_example'; // string | filter to a customer account

try {
    $result = $apiInstance->listInvoices($merchant_id, $offset, $limit, $q, $customer_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **q** | **string**| invoice search query | [optional] |
| **customer_account_id** | **string**| filter to a customer account | [optional] |

### Return type

[**\Rvvup\Api\Model\InvoicePage**](../Model/InvoicePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshInvoiceUrl()`

```php
refreshInvoiceUrl($invoice_id, $merchant_id): \Rvvup\Api\Model\Invoice
```

Refresh an invoice url

Refresh an invoice url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | invoice id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->refreshInvoiceUrl($invoice_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->refreshInvoiceUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| invoice id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($merchant_id, $invoice_id, $invoice_update_input_dto): \Rvvup\Api\Model\Invoice
```

Update an invoice

Update a draft invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$invoice_id = 'invoice_id_example'; // string | invoice id
$invoice_update_input_dto = new \Rvvup\Api\Model\InvoiceUpdateInputDto(); // \Rvvup\Api\Model\InvoiceUpdateInputDto | The invoice update

try {
    $result = $apiInstance->updateInvoice($merchant_id, $invoice_id, $invoice_update_input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **invoice_id** | **string**| invoice id | |
| **invoice_update_input_dto** | [**\Rvvup\Api\Model\InvoiceUpdateInputDto**](../Model/InvoiceUpdateInputDto.md)| The invoice update | |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidInvoice()`

```php
voidInvoice($invoice_id, $merchant_id): \Rvvup\Api\Model\Invoice
```

Void an open invoice

Void an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | invoice id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->voidInvoice($invoice_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->voidInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| invoice id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
