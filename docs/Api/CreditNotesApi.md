# Rvvup\CreditNotesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCreditNote()**](CreditNotesApi.md#applyCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/apply | Apply a credit note to an invoice |
| [**createCreditNote()**](CreditNotesApi.md#createCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes | Create new credit note |
| [**deleteCreditNote()**](CreditNotesApi.md#deleteCreditNote) | **DELETE** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Delete a credit note |
| [**downloadCreditNote()**](CreditNotesApi.md#downloadCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note |
| [**finalizeCreditNote()**](CreditNotesApi.md#finalizeCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/finalize | Finalize a credit note |
| [**getCreditNote()**](CreditNotesApi.md#getCreditNote) | **GET** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Get a credit note |
| [**listCreditNotes()**](CreditNotesApi.md#listCreditNotes) | **GET** /api/2024-03-01/{merchantId}/credit-notes | List credit notes |
| [**updateCreditNote()**](CreditNotesApi.md#updateCreditNote) | **PUT** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Update a credit note |
| [**voidCreditNote()**](CreditNotesApi.md#voidCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/void | Void a credit note |


## `applyCreditNote()`

```php
applyCreditNote($credit_note_id, $merchant_id): \Rvvup\Api\Model\CreditNote
```

Apply a credit note to an invoice

Apply a credit note to an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->applyCreditNote($credit_note_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->applyCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreditNote()`

```php
createCreditNote($merchant_id, $credit_note_create_input, $idempotency_key): \Rvvup\Api\Model\CreditNote
```

Create new credit note

Creates a new credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$credit_note_create_input = new \Rvvup\Api\Model\CreditNoteCreateInput(); // \Rvvup\Api\Model\CreditNoteCreateInput | The credit note to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createCreditNote($merchant_id, $credit_note_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **credit_note_create_input** | [**\Rvvup\Api\Model\CreditNoteCreateInput**](../Model/CreditNoteCreateInput.md)| The credit note to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreditNote()`

```php
deleteCreditNote($credit_note_id, $merchant_id)
```

Delete a credit note

Delete a draft credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $apiInstance->deleteCreditNote($credit_note_id, $merchant_id);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->deleteCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

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

## `downloadCreditNote()`

```php
downloadCreditNote($credit_note_id, $merchant_id): \Rvvup\Api\Model\CreditNoteDownload
```

Get a link to download the credit note

Get a link to download the credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->downloadCreditNote($credit_note_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->downloadCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

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

## `finalizeCreditNote()`

```php
finalizeCreditNote($credit_note_id, $merchant_id): \Rvvup\Api\Model\CreditNote
```

Finalize a credit note

Finalize a credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->finalizeCreditNote($credit_note_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->finalizeCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNote()`

```php
getCreditNote($credit_note_id, $merchant_id): \Rvvup\Api\Model\CreditNote
```

Get a credit note

Get a credit note by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getCreditNote($credit_note_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditNotes()`

```php
listCreditNotes($merchant_id, $offset, $limit, $invoice_id): \Rvvup\Api\Model\CreditNotePage
```

List credit notes

List credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$invoice_id = 'invoice_id_example'; // string | Filter credit notes by invoice ID

try {
    $result = $apiInstance->listCreditNotes($merchant_id, $offset, $limit, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->listCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **invoice_id** | **string**| Filter credit notes by invoice ID | [optional] |

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

## `updateCreditNote()`

```php
updateCreditNote($credit_note_id, $merchant_id, $credit_note_update_input): \Rvvup\Api\Model\CreditNote
```

Update a credit note

Update a draft credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id
$credit_note_update_input = new \Rvvup\Api\Model\CreditNoteUpdateInput(); // \Rvvup\Api\Model\CreditNoteUpdateInput | The credit note update

try {
    $result = $apiInstance->updateCreditNote($credit_note_id, $merchant_id, $credit_note_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |
| **credit_note_update_input** | [**\Rvvup\Api\Model\CreditNoteUpdateInput**](../Model/CreditNoteUpdateInput.md)| The credit note update | |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidCreditNote()`

```php
voidCreditNote($credit_note_id, $merchant_id): \Rvvup\Api\Model\CreditNote
```

Void a credit note

Void an open credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 'credit_note_id_example'; // string | credit note id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->voidCreditNote($credit_note_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->voidCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **string**| credit note id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
