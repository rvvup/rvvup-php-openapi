# Rvvup\PublicApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCreditNote()**](PublicApi.md#applyCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/apply | Apply a credit note to an invoice |
| [**createAccountStatement()**](PublicApi.md#createAccountStatement) | **POST** /api/2024-03-01/{merchantId}/accounts/statements | Create a new account statement |
| [**createChaserPlan()**](PublicApi.md#createChaserPlan) | **POST** /api/2024-03-01/{merchantId}/chaser-plans | Create new chaser plan |
| [**createCheckout()**](PublicApi.md#createCheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts | Create new checkout |
| [**createCheckoutTemplate()**](PublicApi.md#createCheckoutTemplate) | **POST** /api/2024-03-01/{merchantId}/checkout-templates | Create new checkout template |
| [**createConnection()**](PublicApi.md#createConnection) | **PUT** /api/2024-03-01/{merchantId}/connections | Create a new connection or updates an existing connection. |
| [**createCreditNote()**](PublicApi.md#createCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes | Create new credit note |
| [**createCustomerAccount()**](PublicApi.md#createCustomerAccount) | **POST** /api/2024-03-01/{merchantId}/customer-accounts | Create a customer account |
| [**createInvoice()**](PublicApi.md#createInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices | Create new invoice |
| [**createInvoiceNotification()**](PublicApi.md#createInvoiceNotification) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | Notify a customer of an invoice |
| [**createMerchantDomains()**](PublicApi.md#createMerchantDomains) | **POST** /api/2024-03-01/{merchantId}/domains | Create new merchant domains |
| [**createNotificationSubscription()**](PublicApi.md#createNotificationSubscription) | **POST** /api/2024-03-01/{merchantId}/notification-subscriptions | Create a new notification subscription. |
| [**createPaymentLink()**](PublicApi.md#createPaymentLink) | **POST** /api/2024-03-01/{merchantId}/payment-links | Create new payment link |
| [**createPaymentSession()**](PublicApi.md#createPaymentSession) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions | Create a payment session |
| [**createRefund()**](PublicApi.md#createRefund) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/refunds | Create a refund |
| [**createShipmentTracking()**](PublicApi.md#createShipmentTracking) | **POST** /api/2024-03-01/{merchantId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session |
| [**createShipmentTrackingWithCheckout()**](PublicApi.md#createShipmentTrackingWithCheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session |
| [**createTheme()**](PublicApi.md#createTheme) | **POST** /api/2024-03-01/{merchantId}/themes | Create a new theme |
| [**createWebhook()**](PublicApi.md#createWebhook) | **POST** /api/2024-03-01/{merchantId}/webhooks | Create a new webhook |
| [**deactivatePaymentLink()**](PublicApi.md#deactivatePaymentLink) | **DELETE** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Deactivate a payment link |
| [**deleteCreditNote()**](PublicApi.md#deleteCreditNote) | **DELETE** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Delete a credit note |
| [**deleteInvoice()**](PublicApi.md#deleteInvoice) | **DELETE** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Delete a draft invoice |
| [**deleteMerchantDomain()**](PublicApi.md#deleteMerchantDomain) | **DELETE** /api/2024-03-01/{merchantId}/domains/{merchantDomainId} | Delete a merchant domain |
| [**disconnectConnection()**](PublicApi.md#disconnectConnection) | **DELETE** /api/2024-03-01/{merchantId}/connections/{connectionId} | Disconnect a connection |
| [**downloadCreditNote()**](PublicApi.md#downloadCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note |
| [**downloadCreditNoteForInvoice()**](PublicApi.md#downloadCreditNoteForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note |
| [**downloadInvoice()**](PublicApi.md#downloadInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/download | Get a link to download the invoice |
| [**exportStatement()**](PublicApi.md#exportStatement) | **POST** /api/2024-03-01/{merchantId}/statements/export | Export a statement |
| [**finalizeCreditNote()**](PublicApi.md#finalizeCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/finalize | Finalize a credit note |
| [**finalizeInvoice()**](PublicApi.md#finalizeInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/finalize | Finalize an invoice |
| [**getAccountStatement()**](PublicApi.md#getAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId} | Get an account statement |
| [**getChaserPlan()**](PublicApi.md#getChaserPlan) | **GET** /api/2024-03-01/{merchantId}/chaser-plans/{chaserPlanId} | Get a chaser plan |
| [**getCheckout()**](PublicApi.md#getCheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId} | Get a checkout |
| [**getCheckoutForAccountStatement()**](PublicApi.md#getCheckoutForAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/checkouts/{checkoutId} | Get a checkout for an account statement |
| [**getCheckoutForInvoice()**](PublicApi.md#getCheckoutForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/checkouts/{checkoutId} | Get a checkout for an invoice |
| [**getCheckoutTemplate()**](PublicApi.md#getCheckoutTemplate) | **GET** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Get a checkout template |
| [**getConnection()**](PublicApi.md#getConnection) | **GET** /api/2024-03-01/{merchantId}/connections/{connectionId} | Get a connection |
| [**getCreditNote()**](PublicApi.md#getCreditNote) | **GET** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Get a credit note |
| [**getCustomerAccount()**](PublicApi.md#getCustomerAccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId} | Get a customer account |
| [**getCustomerAccounts()**](PublicApi.md#getCustomerAccounts) | **GET** /api/2024-03-01/{merchantId}/customer-accounts | Get customer accounts |
| [**getInvoice()**](PublicApi.md#getInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Get a invoice |
| [**getNotificationSubscription()**](PublicApi.md#getNotificationSubscription) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions/{id} | Get a notification subscription |
| [**getOrderById()**](PublicApi.md#getOrderById) | **GET** /api/2024-03-01/{merchantId}/orders/{id} | Get order by ID |
| [**getOrders()**](PublicApi.md#getOrders) | **GET** /api/2024-03-01/{merchantId}/orders | Search orders |
| [**getPaymentLink()**](PublicApi.md#getPaymentLink) | **GET** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Get a payment link |
| [**getPaymentSession()**](PublicApi.md#getPaymentSession) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId} | Get a payment session |
| [**getPaymentSettings()**](PublicApi.md#getPaymentSettings) | **POST** /api/2024-03-01/{merchantId}/payment-settings | Get payment settings for a merchant |
| [**getTheme()**](PublicApi.md#getTheme) | **GET** /api/2024-03-01/{merchantId}/themes/{themeId} | Get a theme |
| [**getThemeForAccountStatement()**](PublicApi.md#getThemeForAccountStatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/theme | Get the theme for an account statement |
| [**getThemeForCheckout()**](PublicApi.md#getThemeForCheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/theme | Get the theme for a checkout |
| [**getWebhook()**](PublicApi.md#getWebhook) | **GET** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Get a webhook by id |
| [**listChaserPlans()**](PublicApi.md#listChaserPlans) | **GET** /api/2024-03-01/{merchantId}/chaser-plans | List Chaser Plans |
| [**listCheckoutPaymentMethods()**](PublicApi.md#listCheckoutPaymentMethods) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-methods | Get payment methods for a checkout |
| [**listCheckoutTemplates()**](PublicApi.md#listCheckoutTemplates) | **GET** /api/2024-03-01/{merchantId}/checkout-templates | List checkout templates |
| [**listCheckouts()**](PublicApi.md#listCheckouts) | **GET** /api/2024-03-01/{merchantId}/checkouts | List checkouts |
| [**listConnections()**](PublicApi.md#listConnections) | **GET** /api/2024-03-01/{merchantId}/connections | List connections |
| [**listCreditNotes()**](PublicApi.md#listCreditNotes) | **GET** /api/2024-03-01/{merchantId}/credit-notes | List credit notes |
| [**listCreditNotesForInvoice()**](PublicApi.md#listCreditNotesForInvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes | List credit notes for an invoice |
| [**listInvoiceNotifications()**](PublicApi.md#listInvoiceNotifications) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | List invoice notifications |
| [**listInvoices()**](PublicApi.md#listInvoices) | **GET** /api/2024-03-01/{merchantId}/invoices | List invoices |
| [**listInvoicesForCustomerAccount()**](PublicApi.md#listInvoicesForCustomerAccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId}/invoices | Get list of invoices for customer account |
| [**listMerchantDomains()**](PublicApi.md#listMerchantDomains) | **GET** /api/2024-03-01/{merchantId}/domains | List merchant domains |
| [**listNotificationSubscriptions()**](PublicApi.md#listNotificationSubscriptions) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions | List notification subscriptions. |
| [**listPaymentLinks()**](PublicApi.md#listPaymentLinks) | **GET** /api/2024-03-01/{merchantId}/payment-links | List payment links |
| [**listPaymentMethods()**](PublicApi.md#listPaymentMethods) | **GET** /api/2024-03-01/{merchantId}/payment-methods | Get payment methods |
| [**listThemes()**](PublicApi.md#listThemes) | **GET** /api/2024-03-01/{merchantId}/themes | List themes |
| [**listWebhooks()**](PublicApi.md#listWebhooks) | **GET** /api/2024-03-01/{merchantId}/webhooks | Get all webhooks |
| [**refreshInvoiceUrl()**](PublicApi.md#refreshInvoiceUrl) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/refresh-url | Refresh an invoice url |
| [**updateCheckoutTemplate()**](PublicApi.md#updateCheckoutTemplate) | **PATCH** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Update a checkout template |
| [**updateCreditNote()**](PublicApi.md#updateCreditNote) | **PUT** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Update a credit note |
| [**updateInvoice()**](PublicApi.md#updateInvoice) | **PUT** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Update an invoice |
| [**updateTheme()**](PublicApi.md#updateTheme) | **PATCH** /api/2024-03-01/{merchantId}/themes/{themeId} | Update a theme |
| [**updateWebhook()**](PublicApi.md#updateWebhook) | **PATCH** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Update a webhook |
| [**voidCreditNote()**](PublicApi.md#voidCreditNote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/void | Void a credit note |
| [**voidInvoice()**](PublicApi.md#voidInvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/void | Void an open invoice |


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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->applyCreditNote: ', $e->getMessage(), PHP_EOL;
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

## `createAccountStatement()`

```php
createAccountStatement($merchant_id, $account_statement_create_input, $idempotency_key): \Rvvup\Api\Model\AccountStatement
```

Create a new account statement

Creates a new account statement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_create_input = new \Rvvup\Api\Model\AccountStatementCreateInput(); // \Rvvup\Api\Model\AccountStatementCreateInput | The account statement to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createAccountStatement($merchant_id, $account_statement_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_create_input** | [**\Rvvup\Api\Model\AccountStatementCreateInput**](../Model/AccountStatementCreateInput.md)| The account statement to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\AccountStatement**](../Model/AccountStatement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createChaserPlan: ', $e->getMessage(), PHP_EOL;
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

## `createCheckout()`

```php
createCheckout($merchant_id, $checkout_create_input, $idempotency_key): \Rvvup\Api\Model\Checkout
```

Create new checkout

Creates a new checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_create_input = new \Rvvup\Api\Model\CheckoutCreateInput(); // \Rvvup\Api\Model\CheckoutCreateInput | The Checkout to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createCheckout($merchant_id, $checkout_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_create_input** | [**\Rvvup\Api\Model\CheckoutCreateInput**](../Model/CheckoutCreateInput.md)| The Checkout to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCheckoutTemplate()`

```php
createCheckoutTemplate($merchant_id, $checkout_template_create_input): \Rvvup\Api\Model\CheckoutTemplate
```

Create new checkout template

Creates a new checkout template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_template_create_input = new \Rvvup\Api\Model\CheckoutTemplateCreateInput(); // \Rvvup\Api\Model\CheckoutTemplateCreateInput | The checkout template to create

try {
    $result = $apiInstance->createCheckoutTemplate($merchant_id, $checkout_template_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_template_create_input** | [**\Rvvup\Api\Model\CheckoutTemplateCreateInput**](../Model/CheckoutTemplateCreateInput.md)| The checkout template to create | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createConnection: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
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

## `createCustomerAccount()`

```php
createCustomerAccount($merchant_id, $customer_account_create_input): \Rvvup\Api\Model\CustomerAccount
```

Create a customer account

Create a customer account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$customer_account_create_input = new \Rvvup\Api\Model\CustomerAccountCreateInput(); // \Rvvup\Api\Model\CustomerAccountCreateInput | The Customer Account to create

try {
    $result = $apiInstance->createCustomerAccount($merchant_id, $customer_account_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **customer_account_create_input** | [**\Rvvup\Api\Model\CustomerAccountCreateInput**](../Model/CustomerAccountCreateInput.md)| The Customer Account to create | |

### Return type

[**\Rvvup\Api\Model\CustomerAccount**](../Model/CustomerAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createInvoice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createInvoiceNotification: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->createMerchantDomains: ', $e->getMessage(), PHP_EOL;
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

## `createNotificationSubscription()`

```php
createNotificationSubscription($merchant_id, $notification_subscription_create_input): \Rvvup\Api\Model\NotificationSubscription
```

Create a new notification subscription.

Create a new notification subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$notification_subscription_create_input = new \Rvvup\Api\Model\NotificationSubscriptionCreateInput(); // \Rvvup\Api\Model\NotificationSubscriptionCreateInput | The notification subscription to create

try {
    $result = $apiInstance->createNotificationSubscription($merchant_id, $notification_subscription_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **notification_subscription_create_input** | [**\Rvvup\Api\Model\NotificationSubscriptionCreateInput**](../Model/NotificationSubscriptionCreateInput.md)| The notification subscription to create | |

### Return type

[**\Rvvup\Api\Model\NotificationSubscription**](../Model/NotificationSubscription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentLink()`

```php
createPaymentLink($merchant_id, $payment_link_create_input, $idempotency_key): \Rvvup\Api\Model\PaymentLink
```

Create new payment link

Creates a new payment link. User can choose whether to make it reusable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_link_create_input = new \Rvvup\Api\Model\PaymentLinkCreateInput(); // \Rvvup\Api\Model\PaymentLinkCreateInput | The Payment Link to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createPaymentLink($merchant_id, $payment_link_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_link_create_input** | [**\Rvvup\Api\Model\PaymentLinkCreateInput**](../Model/PaymentLinkCreateInput.md)| The Payment Link to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentSession()`

```php
createPaymentSession($merchant_id, $checkout_id, $payment_session_create_input): \Rvvup\Api\Model\PaymentSession
```

Create a payment session

Creates a payment session with a new active payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_id = 'checkout_id_example'; // string | checkout id
$payment_session_create_input = new \Rvvup\Api\Model\PaymentSessionCreateInput(); // \Rvvup\Api\Model\PaymentSessionCreateInput | The Payment Session to create

try {
    $result = $apiInstance->createPaymentSession($merchant_id, $checkout_id, $payment_session_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_id** | **string**| checkout id | |
| **payment_session_create_input** | [**\Rvvup\Api\Model\PaymentSessionCreateInput**](../Model/PaymentSessionCreateInput.md)| The Payment Session to create | |

### Return type

[**\Rvvup\Api\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($merchant_id, $checkout_id, $payment_session_id, $refund_create_input, $idempotency_key): \Rvvup\Api\Model\Refund
```

Create a refund

Creates a refund for a payment session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$checkout_id = 'checkout_id_example'; // string | The checkout id
$payment_session_id = 'payment_session_id_example'; // string | The payment session id
$refund_create_input = new \Rvvup\Api\Model\RefundCreateInput(); // \Rvvup\Api\Model\RefundCreateInput | The refund to create
$idempotency_key = 'idempotency_key_example'; // string | Idempotency Key

try {
    $result = $apiInstance->createRefund($merchant_id, $checkout_id, $payment_session_id, $refund_create_input, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **checkout_id** | **string**| The checkout id | |
| **payment_session_id** | **string**| The payment session id | |
| **refund_create_input** | [**\Rvvup\Api\Model\RefundCreateInput**](../Model/RefundCreateInput.md)| The refund to create | |
| **idempotency_key** | **string**| Idempotency Key | [optional] |

### Return type

[**\Rvvup\Api\Model\Refund**](../Model/Refund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipmentTracking()`

```php
createShipmentTracking($merchant_id, $payment_session_id, $shipment_tracking_create_input): \Rvvup\Api\Model\ShipmentTracking
```

Create a shipment tracking entry for a payment session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_session_id = 'payment_session_id_example'; // string | payment session id
$shipment_tracking_create_input = new \Rvvup\Api\Model\ShipmentTrackingCreateInput(); // \Rvvup\Api\Model\ShipmentTrackingCreateInput | Input for adding new shipment tracking

try {
    $result = $apiInstance->createShipmentTracking($merchant_id, $payment_session_id, $shipment_tracking_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createShipmentTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_session_id** | **string**| payment session id | |
| **shipment_tracking_create_input** | [**\Rvvup\Api\Model\ShipmentTrackingCreateInput**](../Model/ShipmentTrackingCreateInput.md)| Input for adding new shipment tracking | |

### Return type

[**\Rvvup\Api\Model\ShipmentTracking**](../Model/ShipmentTracking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipmentTrackingWithCheckout()`

```php
createShipmentTrackingWithCheckout($merchant_id, $payment_session_id, $checkout_id, $shipment_tracking_create_input): \Rvvup\Api\Model\ShipmentTracking
```

Create a shipment tracking entry for a payment session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_session_id = 'payment_session_id_example'; // string | payment session id
$checkout_id = 'checkout_id_example'; // string | checkout id
$shipment_tracking_create_input = new \Rvvup\Api\Model\ShipmentTrackingCreateInput(); // \Rvvup\Api\Model\ShipmentTrackingCreateInput | Input for adding new shipment tracking

try {
    $result = $apiInstance->createShipmentTrackingWithCheckout($merchant_id, $payment_session_id, $checkout_id, $shipment_tracking_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createShipmentTrackingWithCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_session_id** | **string**| payment session id | |
| **checkout_id** | **string**| checkout id | |
| **shipment_tracking_create_input** | [**\Rvvup\Api\Model\ShipmentTrackingCreateInput**](../Model/ShipmentTrackingCreateInput.md)| Input for adding new shipment tracking | |

### Return type

[**\Rvvup\Api\Model\ShipmentTracking**](../Model/ShipmentTracking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTheme()`

```php
createTheme($merchant_id, $theme_create_input): \Rvvup\Api\Model\Theme
```

Create a new theme

Creates a new theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$theme_create_input = new \Rvvup\Api\Model\ThemeCreateInput(); // \Rvvup\Api\Model\ThemeCreateInput | The theme to create

try {
    $result = $apiInstance->createTheme($merchant_id, $theme_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **theme_create_input** | [**\Rvvup\Api\Model\ThemeCreateInput**](../Model/ThemeCreateInput.md)| The theme to create | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($merchant_id, $webhook_create_input): \Rvvup\Api\Model\Webhook
```

Create a new webhook

Create a new webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_create_input = new \Rvvup\Api\Model\WebhookCreateInput(); // \Rvvup\Api\Model\WebhookCreateInput | The webhook to create

try {
    $result = $apiInstance->createWebhook($merchant_id, $webhook_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_create_input** | [**\Rvvup\Api\Model\WebhookCreateInput**](../Model/WebhookCreateInput.md)| The webhook to create | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivatePaymentLink()`

```php
deactivatePaymentLink($payment_link_id, $merchant_id): \Rvvup\Api\Model\PaymentLink
```

Deactivate a payment link

Deactivate a payment link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_link_id = 'payment_link_id_example'; // string | payment link id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->deactivatePaymentLink($payment_link_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deactivatePaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_link_id** | **string**| payment link id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->deleteCreditNote: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->deleteMerchantDomain: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->disconnectConnection: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->downloadCreditNote: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->downloadCreditNoteForInvoice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->exportStatement: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->finalizeCreditNote: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->finalizeInvoice: ', $e->getMessage(), PHP_EOL;
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

## `getAccountStatement()`

```php
getAccountStatement($merchant_id, $account_statement_id): \Rvvup\Api\Model\AccountStatement
```

Get an account statement

Get an account statement by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID

try {
    $result = $apiInstance->getAccountStatement($merchant_id, $account_statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |

### Return type

[**\Rvvup\Api\Model\AccountStatement**](../Model/AccountStatement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getChaserPlan: ', $e->getMessage(), PHP_EOL;
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

## `getCheckout()`

```php
getCheckout($checkout_id, $merchant_id, $accept): \Rvvup\Api\Model\Checkout
```

Get a checkout

Get a checkout by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_id = 'checkout_id_example'; // string | checkout id
$merchant_id = 'merchant_id_example'; // string | merchant id
$accept = 'accept_example'; // string | Accept header

try {
    $result = $apiInstance->getCheckout($checkout_id, $merchant_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_id** | **string**| checkout id | |
| **merchant_id** | **string**| merchant id | |
| **accept** | **string**| Accept header | [optional] |

### Return type

[**\Rvvup\Api\Model\Checkout**](../Model/Checkout.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/schema+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckoutForAccountStatement()`

```php
getCheckoutForAccountStatement($merchant_id, $account_statement_id, $checkout_id): \Rvvup\Api\Model\Checkout
```

Get a checkout for an account statement

Get a checkout for an account statement by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID
$checkout_id = 'checkout_id_example'; // string | Checkout ID

try {
    $result = $apiInstance->getCheckoutForAccountStatement($merchant_id, $account_statement_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCheckoutForAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getCheckoutForInvoice: ', $e->getMessage(), PHP_EOL;
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

## `getCheckoutTemplate()`

```php
getCheckoutTemplate($checkout_template_id, $merchant_id): \Rvvup\Api\Model\CheckoutTemplate
```

Get a checkout template

Get a checkout template by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_template_id = 'checkout_template_id_example'; // string | checkout template id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getCheckoutTemplate($checkout_template_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_template_id** | **string**| checkout template id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getConnection: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
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

## `getCustomerAccount()`

```php
getCustomerAccount($customer_account_id, $merchant_id): \Rvvup\Api\Model\CustomerAccount
```

Get a customer account

Get a customer account by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_account_id = 'customer_account_id_example'; // string | customer account id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getCustomerAccount($customer_account_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_account_id** | **string**| customer account id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\CustomerAccount**](../Model/CustomerAccount.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccounts()`

```php
getCustomerAccounts($merchant_id, $offset, $limit, $q): \Rvvup\Api\Model\CustomerAccountPage
```

Get customer accounts

Get customer accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$q = 'q_example'; // string | search query

try {
    $result = $apiInstance->getCustomerAccounts($merchant_id, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCustomerAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **q** | **string**| search query | [optional] |

### Return type

[**\Rvvup\Api\Model\CustomerAccountPage**](../Model/CustomerAccountPage.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getInvoice: ', $e->getMessage(), PHP_EOL;
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

## `getNotificationSubscription()`

```php
getNotificationSubscription($merchant_id, $id): \Rvvup\Api\Model\NotificationSubscription
```

Get a notification subscription

Get a notification subscription by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$id = 'id_example'; // string | Notification Subscription ID

try {
    $result = $apiInstance->getNotificationSubscription($merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **id** | **string**| Notification Subscription ID | |

### Return type

[**\Rvvup\Api\Model\NotificationSubscription**](../Model/NotificationSubscription.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getOrderById: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->getOrders: ', $e->getMessage(), PHP_EOL;
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

## `getPaymentLink()`

```php
getPaymentLink($payment_link_id, $merchant_id): \Rvvup\Api\Model\PaymentLink
```

Get a payment link

Get a payment link by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_link_id = 'payment_link_id_example'; // string | payment link id
$merchant_id = 'merchant_id_example'; // string | merchant id

try {
    $result = $apiInstance->getPaymentLink($payment_link_id, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_link_id** | **string**| payment link id | |
| **merchant_id** | **string**| merchant id | |

### Return type

[**\Rvvup\Api\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentSession()`

```php
getPaymentSession($merchant_id, $checkout_id, $payment_session_id): \Rvvup\Api\Model\PaymentSession
```

Get a payment session

Get a payment session by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_id = 'checkout_id_example'; // string | checkout id
$payment_session_id = 'payment_session_id_example'; // string | payment session id

try {
    $result = $apiInstance->getPaymentSession($merchant_id, $checkout_id, $payment_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **checkout_id** | **string**| checkout id | |
| **payment_session_id** | **string**| payment session id | |

### Return type

[**\Rvvup\Api\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentSettings()`

```php
getPaymentSettings($merchant_id, $payment_settings_context, $offset, $limit, $mpk): \Rvvup\Api\Model\PaymentSettings
```

Get payment settings for a merchant

Get available payment methods and their relevant settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$payment_settings_context = new \Rvvup\Api\Model\PaymentSettingsContext(); // \Rvvup\Api\Model\PaymentSettingsContext | Context in which to fetch the settings
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit
$mpk = 'mpk_example'; // string | merchant public key

try {
    $result = $apiInstance->getPaymentSettings($merchant_id, $payment_settings_context, $offset, $limit, $mpk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **payment_settings_context** | [**\Rvvup\Api\Model\PaymentSettingsContext**](../Model/PaymentSettingsContext.md)| Context in which to fetch the settings | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |
| **mpk** | **string**| merchant public key | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentSettings**](../Model/PaymentSettings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTheme()`

```php
getTheme($merchant_id, $theme_id): \Rvvup\Api\Model\Theme
```

Get a theme

Get a theme by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$theme_id = 'theme_id_example'; // string | Theme ID

try {
    $result = $apiInstance->getTheme($merchant_id, $theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **theme_id** | **string**| Theme ID | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeForAccountStatement()`

```php
getThemeForAccountStatement($merchant_id, $account_statement_id): \Rvvup\Api\Model\Theme
```

Get the theme for an account statement

Gets the theme for an account statement. The theme is used to style the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$account_statement_id = 'account_statement_id_example'; // string | Account Statement ID

try {
    $result = $apiInstance->getThemeForAccountStatement($merchant_id, $account_statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getThemeForAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **account_statement_id** | **string**| Account Statement ID | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeForCheckout()`

```php
getThemeForCheckout($merchant_id, $checkout_id): \Rvvup\Api\Model\Theme
```

Get the theme for a checkout

Gets the theme for a checkout. The theme is used to style the checkout page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$checkout_id = 'checkout_id_example'; // string | Checkout ID

try {
    $result = $apiInstance->getThemeForCheckout($merchant_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getThemeForCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **checkout_id** | **string**| Checkout ID | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($merchant_id, $webhook_id): \Rvvup\Api\Model\Webhook
```

Get a webhook by id

Get a webhook by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID

try {
    $result = $apiInstance->getWebhook($merchant_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_id** | **string**| Webhook ID | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listChaserPlans: ', $e->getMessage(), PHP_EOL;
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

## `listCheckoutPaymentMethods()`

```php
listCheckoutPaymentMethods($checkout_id, $merchant_id, $offset, $limit): \Rvvup\Api\Model\PaymentMethodDetailsPage
```

Get payment methods for a checkout

Lists the currently eligible payment methods for a checkout. The payment method status and checkout template settings are used to determine the eligible methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_id = 'checkout_id_example'; // string | checkout id
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckoutPaymentMethods($checkout_id, $merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listCheckoutPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_id** | **string**| checkout id | |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentMethodDetailsPage**](../Model/PaymentMethodDetailsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCheckoutTemplates()`

```php
listCheckoutTemplates($merchant_id, $offset, $limit): \Rvvup\Api\Model\CheckoutTemplatePage
```

List checkout templates

List checkout templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckoutTemplates($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listCheckoutTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplatePage**](../Model/CheckoutTemplatePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCheckouts()`

```php
listCheckouts($merchant_id, $offset, $limit): \Rvvup\Api\Model\CheckoutPage
```

List checkouts

List checkouts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listCheckouts($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listCheckouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\CheckoutPage**](../Model/CheckoutPage.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listConnections: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listCreditNotes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listCreditNotesForInvoice: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listInvoiceNotifications: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listInvoices: ', $e->getMessage(), PHP_EOL;
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

## `listInvoicesForCustomerAccount()`

```php
listInvoicesForCustomerAccount($customer_account_id, $merchant_id, $offset, $limit): \Rvvup\Api\Model\InvoicePage
```

Get list of invoices for customer account

Get list of invoices for customer account by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_account_id = 'customer_account_id_example'; // string | customer account id
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listInvoicesForCustomerAccount($customer_account_id, $merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listInvoicesForCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_account_id** | **string**| customer account id | |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->listMerchantDomains: ', $e->getMessage(), PHP_EOL;
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

## `listNotificationSubscriptions()`

```php
listNotificationSubscriptions($merchant_id, $offset, $limit): \Rvvup\Api\Model\NotificationSubscriptionPage
```

List notification subscriptions.

List notification subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listNotificationSubscriptions($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\NotificationSubscriptionPage**](../Model/NotificationSubscriptionPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentLinks()`

```php
listPaymentLinks($merchant_id, $offset, $limit): \Rvvup\Api\Model\PaymentLinkPage
```

List payment links

List payment links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant id
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listPaymentLinks($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listPaymentLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant id | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentLinkPage**](../Model/PaymentLinkPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($merchant_id, $currency, $amount, $include_inactive, $offset, $limit): \Rvvup\Api\Model\PaymentMethodDetailsPage
```

Get payment methods

Get all available payment methods for the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | The merchant id
$currency = 'currency_example'; // string | The transaction currency
$amount = 'amount_example'; // string | The transaction amount
$include_inactive = True; // bool | Include inactive payment methods
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listPaymentMethods($merchant_id, $currency, $amount, $include_inactive, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| The merchant id | |
| **currency** | **string**| The transaction currency | [optional] |
| **amount** | **string**| The transaction amount | [optional] |
| **include_inactive** | **bool**| Include inactive payment methods | [optional] |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\PaymentMethodDetailsPage**](../Model/PaymentMethodDetailsPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listThemes()`

```php
listThemes($merchant_id, $offset, $limit): \Rvvup\Api\Model\ThemePage
```

List themes

List all themes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$offset = 56; // int | Pagination offset
$limit = 56; // int | Pagination limit

try {
    $result = $apiInstance->listThemes($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **offset** | **int**| Pagination offset | [optional] |
| **limit** | **int**| Pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\ThemePage**](../Model/ThemePage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($merchant_id, $offset, $limit): \Rvvup\Api\Model\WebhookPage
```

Get all webhooks

Get all webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$offset = 56; // int | pagination offset
$limit = 56; // int | pagination limit

try {
    $result = $apiInstance->listWebhooks($merchant_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **offset** | **int**| pagination offset | [optional] |
| **limit** | **int**| pagination limit | [optional] |

### Return type

[**\Rvvup\Api\Model\WebhookPage**](../Model/WebhookPage.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->refreshInvoiceUrl: ', $e->getMessage(), PHP_EOL;
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

## `updateCheckoutTemplate()`

```php
updateCheckoutTemplate($checkout_template_id, $merchant_id, $checkout_template_update_input): \Rvvup\Api\Model\CheckoutTemplate
```

Update a checkout template

Update a checkout template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_template_id = 'checkout_template_id_example'; // string | checkout template id
$merchant_id = 'merchant_id_example'; // string | merchant id
$checkout_template_update_input = new \Rvvup\Api\Model\CheckoutTemplateUpdateInput(); // \Rvvup\Api\Model\CheckoutTemplateUpdateInput | The checkout template to update

try {
    $result = $apiInstance->updateCheckoutTemplate($checkout_template_id, $merchant_id, $checkout_template_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateCheckoutTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_template_id** | **string**| checkout template id | |
| **merchant_id** | **string**| merchant id | |
| **checkout_template_update_input** | [**\Rvvup\Api\Model\CheckoutTemplateUpdateInput**](../Model/CheckoutTemplateUpdateInput.md)| The checkout template to update | |

### Return type

[**\Rvvup\Api\Model\CheckoutTemplate**](../Model/CheckoutTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
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

## `updateTheme()`

```php
updateTheme($merchant_id, $theme_id, $theme_update_input): \Rvvup\Api\Model\Theme
```

Update a theme

Update a theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant ID
$theme_id = 'theme_id_example'; // string | theme ID
$theme_update_input = new \Rvvup\Api\Model\ThemeUpdateInput(); // \Rvvup\Api\Model\ThemeUpdateInput | The updated theme

try {
    $result = $apiInstance->updateTheme($merchant_id, $theme_id, $theme_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant ID | |
| **theme_id** | **string**| theme ID | |
| **theme_update_input** | [**\Rvvup\Api\Model\ThemeUpdateInput**](../Model/ThemeUpdateInput.md)| The updated theme | |

### Return type

[**\Rvvup\Api\Model\Theme**](../Model/Theme.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($merchant_id, $webhook_id, $webhook_update_input): \Rvvup\Api\Model\Webhook
```

Update a webhook

Update a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID
$webhook_update_input = new \Rvvup\Api\Model\WebhookUpdateInput(); // \Rvvup\Api\Model\WebhookUpdateInput | The webhook to update

try {
    $result = $apiInstance->updateWebhook($merchant_id, $webhook_id, $webhook_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **webhook_id** | **string**| Webhook ID | |
| **webhook_update_input** | [**\Rvvup\Api\Model\WebhookUpdateInput**](../Model/WebhookUpdateInput.md)| The webhook to update | |

### Return type

[**\Rvvup\Api\Model\Webhook**](../Model/Webhook.md)

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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->voidCreditNote: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\PublicApi(
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
    echo 'Exception when calling PublicApi->voidInvoice: ', $e->getMessage(), PHP_EOL;
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
