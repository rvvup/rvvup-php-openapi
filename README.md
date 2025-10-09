# Rvvup/Api

Rvvup Public API

For more information, please visit [https://rvvup.com](https://rvvup.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/rvvup/rvvup-php-openapi.git"
    }
  ],
  "require": {
    "rvvup/rvvup-php-openapi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Rvvup/Api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\AccountStatementsApi(
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
    echo 'Exception when calling AccountStatementsApi->createAccountStatement: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountStatementsApi* | [**createAccountStatement**](docs/Api/AccountStatementsApi.md#createaccountstatement) | **POST** /api/2024-03-01/{merchantId}/accounts/statements | Create a new account statement
*AccountStatementsApi* | [**getAccountStatement**](docs/Api/AccountStatementsApi.md#getaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId} | Get an account statement
*AccountStatementsApi* | [**getCheckoutForAccountStatement**](docs/Api/AccountStatementsApi.md#getcheckoutforaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/checkouts/{checkoutId} | Get a checkout for an account statement
*AccountStatementsApi* | [**getThemeForAccountStatement**](docs/Api/AccountStatementsApi.md#getthemeforaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/theme | Get the theme for an account statement
*ChaserPlansApi* | [**createChaserPlan**](docs/Api/ChaserPlansApi.md#createchaserplan) | **POST** /api/2024-03-01/{merchantId}/chaser-plans | Create new chaser plan
*ChaserPlansApi* | [**getChaserPlan**](docs/Api/ChaserPlansApi.md#getchaserplan) | **GET** /api/2024-03-01/{merchantId}/chaser-plans/{chaserPlanId} | Get a chaser plan
*ChaserPlansApi* | [**listChaserPlans**](docs/Api/ChaserPlansApi.md#listchaserplans) | **GET** /api/2024-03-01/{merchantId}/chaser-plans | List Chaser Plans
*CheckoutTemplatesApi* | [**createCheckoutTemplate**](docs/Api/CheckoutTemplatesApi.md#createcheckouttemplate) | **POST** /api/2024-03-01/{merchantId}/checkout-templates | Create new checkout template
*CheckoutTemplatesApi* | [**getCheckoutTemplate**](docs/Api/CheckoutTemplatesApi.md#getcheckouttemplate) | **GET** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Get a checkout template
*CheckoutTemplatesApi* | [**listCheckoutTemplates**](docs/Api/CheckoutTemplatesApi.md#listcheckouttemplates) | **GET** /api/2024-03-01/{merchantId}/checkout-templates | List checkout templates
*CheckoutTemplatesApi* | [**updateCheckoutTemplate**](docs/Api/CheckoutTemplatesApi.md#updatecheckouttemplate) | **PATCH** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Update a checkout template
*CheckoutsApi* | [**createCheckout**](docs/Api/CheckoutsApi.md#createcheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts | Create new checkout
*CheckoutsApi* | [**getCheckout**](docs/Api/CheckoutsApi.md#getcheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId} | Get a checkout
*CheckoutsApi* | [**getThemeForCheckout**](docs/Api/CheckoutsApi.md#getthemeforcheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/theme | Get the theme for a checkout
*CheckoutsApi* | [**listCheckoutPaymentMethods**](docs/Api/CheckoutsApi.md#listcheckoutpaymentmethods) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-methods | Get payment methods for a checkout
*CheckoutsApi* | [**listCheckouts**](docs/Api/CheckoutsApi.md#listcheckouts) | **GET** /api/2024-03-01/{merchantId}/checkouts | List checkouts
*ConnectionsApi* | [**createConnection**](docs/Api/ConnectionsApi.md#createconnection) | **PUT** /api/2024-03-01/{merchantId}/connections | Create a new connection or updates an existing connection.
*ConnectionsApi* | [**disconnectConnection**](docs/Api/ConnectionsApi.md#disconnectconnection) | **DELETE** /api/2024-03-01/{merchantId}/connections/{connectionId} | Disconnect a connection
*ConnectionsApi* | [**getConnection**](docs/Api/ConnectionsApi.md#getconnection) | **GET** /api/2024-03-01/{merchantId}/connections/{connectionId} | Get a connection
*ConnectionsApi* | [**listConnections**](docs/Api/ConnectionsApi.md#listconnections) | **GET** /api/2024-03-01/{merchantId}/connections | List connections
*CreditNotesApi* | [**applyCreditNote**](docs/Api/CreditNotesApi.md#applycreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/apply | Apply a credit note to an invoice
*CreditNotesApi* | [**createCreditNote**](docs/Api/CreditNotesApi.md#createcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes | Create new credit note
*CreditNotesApi* | [**deleteCreditNote**](docs/Api/CreditNotesApi.md#deletecreditnote) | **DELETE** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Delete a credit note
*CreditNotesApi* | [**downloadCreditNote**](docs/Api/CreditNotesApi.md#downloadcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note
*CreditNotesApi* | [**finalizeCreditNote**](docs/Api/CreditNotesApi.md#finalizecreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/finalize | Finalize a credit note
*CreditNotesApi* | [**getCreditNote**](docs/Api/CreditNotesApi.md#getcreditnote) | **GET** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Get a credit note
*CreditNotesApi* | [**listCreditNotes**](docs/Api/CreditNotesApi.md#listcreditnotes) | **GET** /api/2024-03-01/{merchantId}/credit-notes | List credit notes
*CreditNotesApi* | [**updateCreditNote**](docs/Api/CreditNotesApi.md#updatecreditnote) | **PUT** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Update a credit note
*CreditNotesApi* | [**voidCreditNote**](docs/Api/CreditNotesApi.md#voidcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/void | Void a credit note
*CustomerAccountsApi* | [**createCustomerAccount**](docs/Api/CustomerAccountsApi.md#createcustomeraccount) | **POST** /api/2024-03-01/{merchantId}/customer-accounts | Create a customer account
*CustomerAccountsApi* | [**getCustomerAccount**](docs/Api/CustomerAccountsApi.md#getcustomeraccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId} | Get a customer account
*CustomerAccountsApi* | [**getCustomerAccounts**](docs/Api/CustomerAccountsApi.md#getcustomeraccounts) | **GET** /api/2024-03-01/{merchantId}/customer-accounts | Get customer accounts
*CustomerAccountsApi* | [**listInvoicesForCustomerAccount**](docs/Api/CustomerAccountsApi.md#listinvoicesforcustomeraccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId}/invoices | Get list of invoices for customer account
*InvoicesApi* | [**createInvoice**](docs/Api/InvoicesApi.md#createinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices | Create new invoice
*InvoicesApi* | [**createInvoiceNotification**](docs/Api/InvoicesApi.md#createinvoicenotification) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | Notify a customer of an invoice
*InvoicesApi* | [**deleteInvoice**](docs/Api/InvoicesApi.md#deleteinvoice) | **DELETE** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Delete a draft invoice
*InvoicesApi* | [**downloadCreditNoteForInvoice**](docs/Api/InvoicesApi.md#downloadcreditnoteforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note
*InvoicesApi* | [**downloadInvoice**](docs/Api/InvoicesApi.md#downloadinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/download | Get a link to download the invoice
*InvoicesApi* | [**finalizeInvoice**](docs/Api/InvoicesApi.md#finalizeinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/finalize | Finalize an invoice
*InvoicesApi* | [**getCheckoutForInvoice**](docs/Api/InvoicesApi.md#getcheckoutforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/checkouts/{checkoutId} | Get a checkout for an invoice
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Get a invoice
*InvoicesApi* | [**listCreditNotesForInvoice**](docs/Api/InvoicesApi.md#listcreditnotesforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes | List credit notes for an invoice
*InvoicesApi* | [**listInvoiceNotifications**](docs/Api/InvoicesApi.md#listinvoicenotifications) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | List invoice notifications
*InvoicesApi* | [**listInvoices**](docs/Api/InvoicesApi.md#listinvoices) | **GET** /api/2024-03-01/{merchantId}/invoices | List invoices
*InvoicesApi* | [**refreshInvoiceUrl**](docs/Api/InvoicesApi.md#refreshinvoiceurl) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/refresh-url | Refresh an invoice url
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Update an invoice
*InvoicesApi* | [**voidInvoice**](docs/Api/InvoicesApi.md#voidinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/void | Void an open invoice
*MerchantDomainsApi* | [**createMerchantDomains**](docs/Api/MerchantDomainsApi.md#createmerchantdomains) | **POST** /api/2024-03-01/{merchantId}/domains | Create new merchant domains
*MerchantDomainsApi* | [**deleteMerchantDomain**](docs/Api/MerchantDomainsApi.md#deletemerchantdomain) | **DELETE** /api/2024-03-01/{merchantId}/domains/{merchantDomainId} | Delete a merchant domain
*MerchantDomainsApi* | [**listMerchantDomains**](docs/Api/MerchantDomainsApi.md#listmerchantdomains) | **GET** /api/2024-03-01/{merchantId}/domains | List merchant domains
*NotificationsApi* | [**createNotificationSubscription**](docs/Api/NotificationsApi.md#createnotificationsubscription) | **POST** /api/2024-03-01/{merchantId}/notification-subscriptions | Create a new notification subscription.
*NotificationsApi* | [**getNotificationSubscription**](docs/Api/NotificationsApi.md#getnotificationsubscription) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions/{id} | Get a notification subscription
*NotificationsApi* | [**listNotificationSubscriptions**](docs/Api/NotificationsApi.md#listnotificationsubscriptions) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions | List notification subscriptions.
*OrdersApi* | [**getOrderById**](docs/Api/OrdersApi.md#getorderbyid) | **GET** /api/2024-03-01/{merchantId}/orders/{id} | Get order by ID
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /api/2024-03-01/{merchantId}/orders | Search orders
*PaymentLinksApi* | [**createPaymentLink**](docs/Api/PaymentLinksApi.md#createpaymentlink) | **POST** /api/2024-03-01/{merchantId}/payment-links | Create new payment link
*PaymentLinksApi* | [**deactivatePaymentLink**](docs/Api/PaymentLinksApi.md#deactivatepaymentlink) | **DELETE** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Deactivate a payment link
*PaymentLinksApi* | [**getPaymentLink**](docs/Api/PaymentLinksApi.md#getpaymentlink) | **GET** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Get a payment link
*PaymentLinksApi* | [**listPaymentLinks**](docs/Api/PaymentLinksApi.md#listpaymentlinks) | **GET** /api/2024-03-01/{merchantId}/payment-links | List payment links
*PaymentMethodsApi* | [**listPaymentMethods**](docs/Api/PaymentMethodsApi.md#listpaymentmethods) | **GET** /api/2024-03-01/{merchantId}/payment-methods | Get payment methods
*PaymentSessionsApi* | [**createPaymentSession**](docs/Api/PaymentSessionsApi.md#createpaymentsession) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions | Create a payment session
*PaymentSessionsApi* | [**getPaymentSession**](docs/Api/PaymentSessionsApi.md#getpaymentsession) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId} | Get a payment session
*PaymentSettingsApi* | [**getPaymentSettings**](docs/Api/PaymentSettingsApi.md#getpaymentsettings) | **POST** /api/2024-03-01/{merchantId}/payment-settings | Get payment settings for a merchant
*PublicApi* | [**applyCreditNote**](docs/Api/PublicApi.md#applycreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/apply | Apply a credit note to an invoice
*PublicApi* | [**createAccountStatement**](docs/Api/PublicApi.md#createaccountstatement) | **POST** /api/2024-03-01/{merchantId}/accounts/statements | Create a new account statement
*PublicApi* | [**createChaserPlan**](docs/Api/PublicApi.md#createchaserplan) | **POST** /api/2024-03-01/{merchantId}/chaser-plans | Create new chaser plan
*PublicApi* | [**createCheckout**](docs/Api/PublicApi.md#createcheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts | Create new checkout
*PublicApi* | [**createCheckoutTemplate**](docs/Api/PublicApi.md#createcheckouttemplate) | **POST** /api/2024-03-01/{merchantId}/checkout-templates | Create new checkout template
*PublicApi* | [**createConnection**](docs/Api/PublicApi.md#createconnection) | **PUT** /api/2024-03-01/{merchantId}/connections | Create a new connection or updates an existing connection.
*PublicApi* | [**createCreditNote**](docs/Api/PublicApi.md#createcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes | Create new credit note
*PublicApi* | [**createCustomerAccount**](docs/Api/PublicApi.md#createcustomeraccount) | **POST** /api/2024-03-01/{merchantId}/customer-accounts | Create a customer account
*PublicApi* | [**createInvoice**](docs/Api/PublicApi.md#createinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices | Create new invoice
*PublicApi* | [**createInvoiceNotification**](docs/Api/PublicApi.md#createinvoicenotification) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | Notify a customer of an invoice
*PublicApi* | [**createMerchantDomains**](docs/Api/PublicApi.md#createmerchantdomains) | **POST** /api/2024-03-01/{merchantId}/domains | Create new merchant domains
*PublicApi* | [**createNotificationSubscription**](docs/Api/PublicApi.md#createnotificationsubscription) | **POST** /api/2024-03-01/{merchantId}/notification-subscriptions | Create a new notification subscription.
*PublicApi* | [**createPaymentLink**](docs/Api/PublicApi.md#createpaymentlink) | **POST** /api/2024-03-01/{merchantId}/payment-links | Create new payment link
*PublicApi* | [**createPaymentSession**](docs/Api/PublicApi.md#createpaymentsession) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions | Create a payment session
*PublicApi* | [**createRefund**](docs/Api/PublicApi.md#createrefund) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/refunds | Create a refund
*PublicApi* | [**createShipmentTracking**](docs/Api/PublicApi.md#createshipmenttracking) | **POST** /api/2024-03-01/{merchantId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session
*PublicApi* | [**createShipmentTrackingWithCheckout**](docs/Api/PublicApi.md#createshipmenttrackingwithcheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session
*PublicApi* | [**createTheme**](docs/Api/PublicApi.md#createtheme) | **POST** /api/2024-03-01/{merchantId}/themes | Create a new theme
*PublicApi* | [**createWebhook**](docs/Api/PublicApi.md#createwebhook) | **POST** /api/2024-03-01/{merchantId}/webhooks | Create a new webhook
*PublicApi* | [**deactivatePaymentLink**](docs/Api/PublicApi.md#deactivatepaymentlink) | **DELETE** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Deactivate a payment link
*PublicApi* | [**deleteCreditNote**](docs/Api/PublicApi.md#deletecreditnote) | **DELETE** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Delete a credit note
*PublicApi* | [**deleteInvoice**](docs/Api/PublicApi.md#deleteinvoice) | **DELETE** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Delete a draft invoice
*PublicApi* | [**deleteMerchantDomain**](docs/Api/PublicApi.md#deletemerchantdomain) | **DELETE** /api/2024-03-01/{merchantId}/domains/{merchantDomainId} | Delete a merchant domain
*PublicApi* | [**disconnectConnection**](docs/Api/PublicApi.md#disconnectconnection) | **DELETE** /api/2024-03-01/{merchantId}/connections/{connectionId} | Disconnect a connection
*PublicApi* | [**downloadCreditNote**](docs/Api/PublicApi.md#downloadcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note
*PublicApi* | [**downloadCreditNoteForInvoice**](docs/Api/PublicApi.md#downloadcreditnoteforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes/{creditNoteId}/download | Get a link to download the credit note
*PublicApi* | [**downloadInvoice**](docs/Api/PublicApi.md#downloadinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/download | Get a link to download the invoice
*PublicApi* | [**exportStatement**](docs/Api/PublicApi.md#exportstatement) | **POST** /api/2024-03-01/{merchantId}/statements/export | Export a statement
*PublicApi* | [**finalizeCreditNote**](docs/Api/PublicApi.md#finalizecreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/finalize | Finalize a credit note
*PublicApi* | [**finalizeInvoice**](docs/Api/PublicApi.md#finalizeinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/finalize | Finalize an invoice
*PublicApi* | [**getAccountStatement**](docs/Api/PublicApi.md#getaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId} | Get an account statement
*PublicApi* | [**getChaserPlan**](docs/Api/PublicApi.md#getchaserplan) | **GET** /api/2024-03-01/{merchantId}/chaser-plans/{chaserPlanId} | Get a chaser plan
*PublicApi* | [**getCheckout**](docs/Api/PublicApi.md#getcheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId} | Get a checkout
*PublicApi* | [**getCheckoutForAccountStatement**](docs/Api/PublicApi.md#getcheckoutforaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/checkouts/{checkoutId} | Get a checkout for an account statement
*PublicApi* | [**getCheckoutForInvoice**](docs/Api/PublicApi.md#getcheckoutforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/checkouts/{checkoutId} | Get a checkout for an invoice
*PublicApi* | [**getCheckoutTemplate**](docs/Api/PublicApi.md#getcheckouttemplate) | **GET** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Get a checkout template
*PublicApi* | [**getConnection**](docs/Api/PublicApi.md#getconnection) | **GET** /api/2024-03-01/{merchantId}/connections/{connectionId} | Get a connection
*PublicApi* | [**getCreditNote**](docs/Api/PublicApi.md#getcreditnote) | **GET** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Get a credit note
*PublicApi* | [**getCustomerAccount**](docs/Api/PublicApi.md#getcustomeraccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId} | Get a customer account
*PublicApi* | [**getCustomerAccounts**](docs/Api/PublicApi.md#getcustomeraccounts) | **GET** /api/2024-03-01/{merchantId}/customer-accounts | Get customer accounts
*PublicApi* | [**getInvoice**](docs/Api/PublicApi.md#getinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Get a invoice
*PublicApi* | [**getNotificationSubscription**](docs/Api/PublicApi.md#getnotificationsubscription) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions/{id} | Get a notification subscription
*PublicApi* | [**getOrderById**](docs/Api/PublicApi.md#getorderbyid) | **GET** /api/2024-03-01/{merchantId}/orders/{id} | Get order by ID
*PublicApi* | [**getOrders**](docs/Api/PublicApi.md#getorders) | **GET** /api/2024-03-01/{merchantId}/orders | Search orders
*PublicApi* | [**getPaymentLink**](docs/Api/PublicApi.md#getpaymentlink) | **GET** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Get a payment link
*PublicApi* | [**getPaymentSession**](docs/Api/PublicApi.md#getpaymentsession) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId} | Get a payment session
*PublicApi* | [**getPaymentSettings**](docs/Api/PublicApi.md#getpaymentsettings) | **POST** /api/2024-03-01/{merchantId}/payment-settings | Get payment settings for a merchant
*PublicApi* | [**getTheme**](docs/Api/PublicApi.md#gettheme) | **GET** /api/2024-03-01/{merchantId}/themes/{themeId} | Get a theme
*PublicApi* | [**getThemeForAccountStatement**](docs/Api/PublicApi.md#getthemeforaccountstatement) | **GET** /api/2024-03-01/{merchantId}/accounts/statements/{accountStatementId}/theme | Get the theme for an account statement
*PublicApi* | [**getThemeForCheckout**](docs/Api/PublicApi.md#getthemeforcheckout) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/theme | Get the theme for a checkout
*PublicApi* | [**getWebhook**](docs/Api/PublicApi.md#getwebhook) | **GET** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Get a webhook by id
*PublicApi* | [**listChaserPlans**](docs/Api/PublicApi.md#listchaserplans) | **GET** /api/2024-03-01/{merchantId}/chaser-plans | List Chaser Plans
*PublicApi* | [**listCheckoutPaymentMethods**](docs/Api/PublicApi.md#listcheckoutpaymentmethods) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-methods | Get payment methods for a checkout
*PublicApi* | [**listCheckoutTemplates**](docs/Api/PublicApi.md#listcheckouttemplates) | **GET** /api/2024-03-01/{merchantId}/checkout-templates | List checkout templates
*PublicApi* | [**listCheckouts**](docs/Api/PublicApi.md#listcheckouts) | **GET** /api/2024-03-01/{merchantId}/checkouts | List checkouts
*PublicApi* | [**listConnections**](docs/Api/PublicApi.md#listconnections) | **GET** /api/2024-03-01/{merchantId}/connections | List connections
*PublicApi* | [**listCreditNotes**](docs/Api/PublicApi.md#listcreditnotes) | **GET** /api/2024-03-01/{merchantId}/credit-notes | List credit notes
*PublicApi* | [**listCreditNotesForInvoice**](docs/Api/PublicApi.md#listcreditnotesforinvoice) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/credit-notes | List credit notes for an invoice
*PublicApi* | [**listInvoiceNotifications**](docs/Api/PublicApi.md#listinvoicenotifications) | **GET** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/notifications | List invoice notifications
*PublicApi* | [**listInvoices**](docs/Api/PublicApi.md#listinvoices) | **GET** /api/2024-03-01/{merchantId}/invoices | List invoices
*PublicApi* | [**listInvoicesForCustomerAccount**](docs/Api/PublicApi.md#listinvoicesforcustomeraccount) | **GET** /api/2024-03-01/{merchantId}/customer-accounts/{customerAccountId}/invoices | Get list of invoices for customer account
*PublicApi* | [**listMerchantDomains**](docs/Api/PublicApi.md#listmerchantdomains) | **GET** /api/2024-03-01/{merchantId}/domains | List merchant domains
*PublicApi* | [**listNotificationSubscriptions**](docs/Api/PublicApi.md#listnotificationsubscriptions) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions | List notification subscriptions.
*PublicApi* | [**listPaymentLinks**](docs/Api/PublicApi.md#listpaymentlinks) | **GET** /api/2024-03-01/{merchantId}/payment-links | List payment links
*PublicApi* | [**listPaymentMethods**](docs/Api/PublicApi.md#listpaymentmethods) | **GET** /api/2024-03-01/{merchantId}/payment-methods | Get payment methods
*PublicApi* | [**listThemes**](docs/Api/PublicApi.md#listthemes) | **GET** /api/2024-03-01/{merchantId}/themes | List themes
*PublicApi* | [**listWebhooks**](docs/Api/PublicApi.md#listwebhooks) | **GET** /api/2024-03-01/{merchantId}/webhooks | Get all webhooks
*PublicApi* | [**refreshInvoiceUrl**](docs/Api/PublicApi.md#refreshinvoiceurl) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/refresh-url | Refresh an invoice url
*PublicApi* | [**updateCheckoutTemplate**](docs/Api/PublicApi.md#updatecheckouttemplate) | **PATCH** /api/2024-03-01/{merchantId}/checkout-templates/{checkoutTemplateId} | Update a checkout template
*PublicApi* | [**updateCreditNote**](docs/Api/PublicApi.md#updatecreditnote) | **PUT** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId} | Update a credit note
*PublicApi* | [**updateInvoice**](docs/Api/PublicApi.md#updateinvoice) | **PUT** /api/2024-03-01/{merchantId}/invoices/{invoiceId} | Update an invoice
*PublicApi* | [**updateTheme**](docs/Api/PublicApi.md#updatetheme) | **PATCH** /api/2024-03-01/{merchantId}/themes/{themeId} | Update a theme
*PublicApi* | [**updateWebhook**](docs/Api/PublicApi.md#updatewebhook) | **PATCH** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Update a webhook
*PublicApi* | [**voidCreditNote**](docs/Api/PublicApi.md#voidcreditnote) | **POST** /api/2024-03-01/{merchantId}/credit-notes/{creditNoteId}/void | Void a credit note
*PublicApi* | [**voidInvoice**](docs/Api/PublicApi.md#voidinvoice) | **POST** /api/2024-03-01/{merchantId}/invoices/{invoiceId}/void | Void an open invoice
*RefundsApi* | [**createRefund**](docs/Api/RefundsApi.md#createrefund) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/refunds | Create a refund
*ShipmentTrackingApi* | [**createShipmentTracking**](docs/Api/ShipmentTrackingApi.md#createshipmenttracking) | **POST** /api/2024-03-01/{merchantId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session
*ShipmentTrackingApi* | [**createShipmentTrackingWithCheckout**](docs/Api/ShipmentTrackingApi.md#createshipmenttrackingwithcheckout) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId}/shipment-tracking | Create a shipment tracking entry for a payment session
*StatementExportsApi* | [**exportStatement**](docs/Api/StatementExportsApi.md#exportstatement) | **POST** /api/2024-03-01/{merchantId}/statements/export | Export a statement
*ThemesApi* | [**createTheme**](docs/Api/ThemesApi.md#createtheme) | **POST** /api/2024-03-01/{merchantId}/themes | Create a new theme
*ThemesApi* | [**getTheme**](docs/Api/ThemesApi.md#gettheme) | **GET** /api/2024-03-01/{merchantId}/themes/{themeId} | Get a theme
*ThemesApi* | [**listThemes**](docs/Api/ThemesApi.md#listthemes) | **GET** /api/2024-03-01/{merchantId}/themes | List themes
*ThemesApi* | [**updateTheme**](docs/Api/ThemesApi.md#updatetheme) | **PATCH** /api/2024-03-01/{merchantId}/themes/{themeId} | Update a theme
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /api/2024-03-01/{merchantId}/webhooks | Create a new webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Get a webhook by id
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /api/2024-03-01/{merchantId}/webhooks | Get all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PATCH** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Update a webhook

## Models

- [AccountStatement](docs/Model/AccountStatement.md)
- [AccountStatementConnection](docs/Model/AccountStatementConnection.md)
- [AccountStatementConnectionInput](docs/Model/AccountStatementConnectionInput.md)
- [AccountStatementConnectionType](docs/Model/AccountStatementConnectionType.md)
- [AccountStatementCreateInput](docs/Model/AccountStatementCreateInput.md)
- [AccountStatementCreditNote](docs/Model/AccountStatementCreditNote.md)
- [AccountStatementCreditNoteCreateInput](docs/Model/AccountStatementCreditNoteCreateInput.md)
- [AccountStatementInvoice](docs/Model/AccountStatementInvoice.md)
- [AccountStatementInvoiceCreateInput](docs/Model/AccountStatementInvoiceCreateInput.md)
- [AccountStatementInvoiceStatus](docs/Model/AccountStatementInvoiceStatus.md)
- [AccountStatementMagentoProxyConnection](docs/Model/AccountStatementMagentoProxyConnection.md)
- [AccountStatementMagentoProxyConnectionInput](docs/Model/AccountStatementMagentoProxyConnectionInput.md)
- [AccountStatementStatus](docs/Model/AccountStatementStatus.md)
- [Address](docs/Model/Address.md)
- [AddressInput](docs/Model/AddressInput.md)
- [ApplicationSource](docs/Model/ApplicationSource.md)
- [CardPaymentMethodSettings](docs/Model/CardPaymentMethodSettings.md)
- [ChaserPlan](docs/Model/ChaserPlan.md)
- [ChaserPlanCreateInput](docs/Model/ChaserPlanCreateInput.md)
- [ChaserPlanPage](docs/Model/ChaserPlanPage.md)
- [ChaserPlanSchedule](docs/Model/ChaserPlanSchedule.md)
- [ChaserPlanScheduleCreateInput](docs/Model/ChaserPlanScheduleCreateInput.md)
- [Checkout](docs/Model/Checkout.md)
- [CheckoutAmountType](docs/Model/CheckoutAmountType.md)
- [CheckoutApplePaySettings](docs/Model/CheckoutApplePaySettings.md)
- [CheckoutApplePaySettingsInput](docs/Model/CheckoutApplePaySettingsInput.md)
- [CheckoutApplePaySettingsUpdateInput](docs/Model/CheckoutApplePaySettingsUpdateInput.md)
- [CheckoutCardSettings](docs/Model/CheckoutCardSettings.md)
- [CheckoutCardSettingsInput](docs/Model/CheckoutCardSettingsInput.md)
- [CheckoutCardSettingsUpdateInput](docs/Model/CheckoutCardSettingsUpdateInput.md)
- [CheckoutClearpaySettings](docs/Model/CheckoutClearpaySettings.md)
- [CheckoutClearpaySettingsInput](docs/Model/CheckoutClearpaySettingsInput.md)
- [CheckoutClearpaySettingsUpdateInput](docs/Model/CheckoutClearpaySettingsUpdateInput.md)
- [CheckoutCreateInput](docs/Model/CheckoutCreateInput.md)
- [CheckoutCustomerFieldType](docs/Model/CheckoutCustomerFieldType.md)
- [CheckoutCustomerFields](docs/Model/CheckoutCustomerFields.md)
- [CheckoutCustomerFieldsInput](docs/Model/CheckoutCustomerFieldsInput.md)
- [CheckoutCustomerFieldsUpdateInput](docs/Model/CheckoutCustomerFieldsUpdateInput.md)
- [CheckoutGooglePaySettings](docs/Model/CheckoutGooglePaySettings.md)
- [CheckoutGooglePaySettingsInput](docs/Model/CheckoutGooglePaySettingsInput.md)
- [CheckoutGooglePaySettingsUpdateInput](docs/Model/CheckoutGooglePaySettingsUpdateInput.md)
- [CheckoutKlarnaSettings](docs/Model/CheckoutKlarnaSettings.md)
- [CheckoutKlarnaSettingsInput](docs/Model/CheckoutKlarnaSettingsInput.md)
- [CheckoutKlarnaSettingsUpdateInput](docs/Model/CheckoutKlarnaSettingsUpdateInput.md)
- [CheckoutMode](docs/Model/CheckoutMode.md)
- [CheckoutPage](docs/Model/CheckoutPage.md)
- [CheckoutPayByBankSettings](docs/Model/CheckoutPayByBankSettings.md)
- [CheckoutPayByBankSettingsInput](docs/Model/CheckoutPayByBankSettingsInput.md)
- [CheckoutPayByBankSettingsUpdateInput](docs/Model/CheckoutPayByBankSettingsUpdateInput.md)
- [CheckoutPaymentMethodLimit](docs/Model/CheckoutPaymentMethodLimit.md)
- [CheckoutPaymentMethodLimitInput](docs/Model/CheckoutPaymentMethodLimitInput.md)
- [CheckoutPaymentMethodLimitUpdateInput](docs/Model/CheckoutPaymentMethodLimitUpdateInput.md)
- [CheckoutPaymentMethodSettings](docs/Model/CheckoutPaymentMethodSettings.md)
- [CheckoutPaymentMethodSettingsInput](docs/Model/CheckoutPaymentMethodSettingsInput.md)
- [CheckoutPaymentMethodSettingsUpdateInput](docs/Model/CheckoutPaymentMethodSettingsUpdateInput.md)
- [CheckoutPaymentMethodTotalLimit](docs/Model/CheckoutPaymentMethodTotalLimit.md)
- [CheckoutReferenceType](docs/Model/CheckoutReferenceType.md)
- [CheckoutStatus](docs/Model/CheckoutStatus.md)
- [CheckoutTemplate](docs/Model/CheckoutTemplate.md)
- [CheckoutTemplateCreateInput](docs/Model/CheckoutTemplateCreateInput.md)
- [CheckoutTemplatePage](docs/Model/CheckoutTemplatePage.md)
- [CheckoutTemplateUpdateInput](docs/Model/CheckoutTemplateUpdateInput.md)
- [CheckoutZopaRetailFinanceSettings](docs/Model/CheckoutZopaRetailFinanceSettings.md)
- [CheckoutZopaRetailFinanceSettingsInput](docs/Model/CheckoutZopaRetailFinanceSettingsInput.md)
- [CheckoutZopaRetailFinanceSettingsUpdateInput](docs/Model/CheckoutZopaRetailFinanceSettingsUpdateInput.md)
- [Connection](docs/Model/Connection.md)
- [ConnectionCreateInput](docs/Model/ConnectionCreateInput.md)
- [ConnectionData](docs/Model/ConnectionData.md)
- [ConnectionDataInput](docs/Model/ConnectionDataInput.md)
- [ConnectionOauthSignatureMethod](docs/Model/ConnectionOauthSignatureMethod.md)
- [ConnectionPage](docs/Model/ConnectionPage.md)
- [ConnectionStatus](docs/Model/ConnectionStatus.md)
- [ConnectionType](docs/Model/ConnectionType.md)
- [CreditNote](docs/Model/CreditNote.md)
- [CreditNoteCreateInput](docs/Model/CreditNoteCreateInput.md)
- [CreditNoteDownload](docs/Model/CreditNoteDownload.md)
- [CreditNoteItem](docs/Model/CreditNoteItem.md)
- [CreditNoteItemCreateInput](docs/Model/CreditNoteItemCreateInput.md)
- [CreditNotePage](docs/Model/CreditNotePage.md)
- [CreditNoteStatus](docs/Model/CreditNoteStatus.md)
- [CreditNoteUpdateInput](docs/Model/CreditNoteUpdateInput.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAccount](docs/Model/CustomerAccount.md)
- [CustomerAccountAddress](docs/Model/CustomerAccountAddress.md)
- [CustomerAccountAddressCreateInput](docs/Model/CustomerAccountAddressCreateInput.md)
- [CustomerAccountCreateInput](docs/Model/CustomerAccountCreateInput.md)
- [CustomerAccountPage](docs/Model/CustomerAccountPage.md)
- [CustomerInput](docs/Model/CustomerInput.md)
- [ExpressCheckoutDisplayIntent](docs/Model/ExpressCheckoutDisplayIntent.md)
- [GooglePayConnectionData](docs/Model/GooglePayConnectionData.md)
- [GooglePayConnectionDataInput](docs/Model/GooglePayConnectionDataInput.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceCreateInput](docs/Model/InvoiceCreateInput.md)
- [InvoiceCustomerAccount](docs/Model/InvoiceCustomerAccount.md)
- [InvoiceCustomerAccountAddress](docs/Model/InvoiceCustomerAccountAddress.md)
- [InvoiceDownload](docs/Model/InvoiceDownload.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceItemCreateInput](docs/Model/InvoiceItemCreateInput.md)
- [InvoiceItemSupplyDateDto](docs/Model/InvoiceItemSupplyDateDto.md)
- [InvoiceItemSupplyDateInputDto](docs/Model/InvoiceItemSupplyDateInputDto.md)
- [InvoiceMerchant](docs/Model/InvoiceMerchant.md)
- [InvoiceMerchantAddress](docs/Model/InvoiceMerchantAddress.md)
- [InvoiceNotification](docs/Model/InvoiceNotification.md)
- [InvoiceNotificationInput](docs/Model/InvoiceNotificationInput.md)
- [InvoiceNotificationPage](docs/Model/InvoiceNotificationPage.md)
- [InvoiceNotificationSentBy](docs/Model/InvoiceNotificationSentBy.md)
- [InvoicePage](docs/Model/InvoicePage.md)
- [InvoiceStatus](docs/Model/InvoiceStatus.md)
- [InvoiceUpdateInputDto](docs/Model/InvoiceUpdateInputDto.md)
- [Item](docs/Model/Item.md)
- [ItemInput](docs/Model/ItemInput.md)
- [ItemRestriction](docs/Model/ItemRestriction.md)
- [KlarnaConnectionData](docs/Model/KlarnaConnectionData.md)
- [KlarnaConnectionDataInput](docs/Model/KlarnaConnectionDataInput.md)
- [KlarnaPaymentMethodSettings](docs/Model/KlarnaPaymentMethodSettings.md)
- [MagentoConnectionData](docs/Model/MagentoConnectionData.md)
- [MagentoConnectionDataInput](docs/Model/MagentoConnectionDataInput.md)
- [MagentoProxyConnectionData](docs/Model/MagentoProxyConnectionData.md)
- [MagentoProxyConnectionDataInput](docs/Model/MagentoProxyConnectionDataInput.md)
- [MerchantDomains](docs/Model/MerchantDomains.md)
- [MerchantDomainsCreateInput](docs/Model/MerchantDomainsCreateInput.md)
- [MerchantDomainsPage](docs/Model/MerchantDomainsPage.md)
- [MerchantLogoWithUrls](docs/Model/MerchantLogoWithUrls.md)
- [Money](docs/Model/Money.md)
- [MoneyInput](docs/Model/MoneyInput.md)
- [NotificationSubscription](docs/Model/NotificationSubscription.md)
- [NotificationSubscriptionConfiguration](docs/Model/NotificationSubscriptionConfiguration.md)
- [NotificationSubscriptionConfigurationInput](docs/Model/NotificationSubscriptionConfigurationInput.md)
- [NotificationSubscriptionCreateInput](docs/Model/NotificationSubscriptionCreateInput.md)
- [NotificationSubscriptionPage](docs/Model/NotificationSubscriptionPage.md)
- [NotificationSubscriptionRecipient](docs/Model/NotificationSubscriptionRecipient.md)
- [NotificationSubscriptionRecipientInput](docs/Model/NotificationSubscriptionRecipientInput.md)
- [NotificationType](docs/Model/NotificationType.md)
- [Order](docs/Model/Order.md)
- [OrdersPage](docs/Model/OrdersPage.md)
- [Pageable](docs/Model/Pageable.md)
- [Payment](docs/Model/Payment.md)
- [PaymentAction](docs/Model/PaymentAction.md)
- [PaymentActionMethod](docs/Model/PaymentActionMethod.md)
- [PaymentActionType](docs/Model/PaymentActionType.md)
- [PaymentCaptureType](docs/Model/PaymentCaptureType.md)
- [PaymentDeclineReason](docs/Model/PaymentDeclineReason.md)
- [PaymentLink](docs/Model/PaymentLink.md)
- [PaymentLinkCreateInput](docs/Model/PaymentLinkCreateInput.md)
- [PaymentLinkPage](docs/Model/PaymentLinkPage.md)
- [PaymentLinkStatus](docs/Model/PaymentLinkStatus.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodAsset](docs/Model/PaymentMethodAsset.md)
- [PaymentMethodAssetType](docs/Model/PaymentMethodAssetType.md)
- [PaymentMethodDetail](docs/Model/PaymentMethodDetail.md)
- [PaymentMethodDetailsPage](docs/Model/PaymentMethodDetailsPage.md)
- [PaymentMethodLimit](docs/Model/PaymentMethodLimit.md)
- [PaymentMethodSettings](docs/Model/PaymentMethodSettings.md)
- [PaymentMethodStatus](docs/Model/PaymentMethodStatus.md)
- [PaymentMethodTotalLimit](docs/Model/PaymentMethodTotalLimit.md)
- [PaymentSession](docs/Model/PaymentSession.md)
- [PaymentSessionCreateInput](docs/Model/PaymentSessionCreateInput.md)
- [PaymentSessionStatus](docs/Model/PaymentSessionStatus.md)
- [PaymentSettings](docs/Model/PaymentSettings.md)
- [PaymentSettingsContext](docs/Model/PaymentSettingsContext.md)
- [PaymentSettingsMerchant](docs/Model/PaymentSettingsMerchant.md)
- [PaymentSettlementStatus](docs/Model/PaymentSettlementStatus.md)
- [PaymentStatus](docs/Model/PaymentStatus.md)
- [PaymentSummary](docs/Model/PaymentSummary.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PaymentVoidReason](docs/Model/PaymentVoidReason.md)
- [Refund](docs/Model/Refund.md)
- [RefundCreateInput](docs/Model/RefundCreateInput.md)
- [RefundFailureReason](docs/Model/RefundFailureReason.md)
- [RefundStatus](docs/Model/RefundStatus.md)
- [ShipmentTracking](docs/Model/ShipmentTracking.md)
- [ShipmentTrackingCreateInput](docs/Model/ShipmentTrackingCreateInput.md)
- [ShipmentTrackingDetail](docs/Model/ShipmentTrackingDetail.md)
- [ShipmentTrackingDetailInput](docs/Model/ShipmentTrackingDetailInput.md)
- [ShipmentTrackingItem](docs/Model/ShipmentTrackingItem.md)
- [ShipmentTrackingItemInput](docs/Model/ShipmentTrackingItemInput.md)
- [StartEnd](docs/Model/StartEnd.md)
- [StatementExportRequest](docs/Model/StatementExportRequest.md)
- [Theme](docs/Model/Theme.md)
- [ThemeBackgroundImage](docs/Model/ThemeBackgroundImage.md)
- [ThemeBackgroundImageCreateInput](docs/Model/ThemeBackgroundImageCreateInput.md)
- [ThemeBackgroundImageUpdateInput](docs/Model/ThemeBackgroundImageUpdateInput.md)
- [ThemeColors](docs/Model/ThemeColors.md)
- [ThemeColorsCreateInput](docs/Model/ThemeColorsCreateInput.md)
- [ThemeColorsUpdateInput](docs/Model/ThemeColorsUpdateInput.md)
- [ThemeCreateInput](docs/Model/ThemeCreateInput.md)
- [ThemeDesktopBackgroundImage](docs/Model/ThemeDesktopBackgroundImage.md)
- [ThemeImageCreateInput](docs/Model/ThemeImageCreateInput.md)
- [ThemeImageUpdateInput](docs/Model/ThemeImageUpdateInput.md)
- [ThemeMobileBackgroundImage](docs/Model/ThemeMobileBackgroundImage.md)
- [ThemePage](docs/Model/ThemePage.md)
- [ThemePaymentMethodSelector](docs/Model/ThemePaymentMethodSelector.md)
- [ThemePaymentMethodSelectorColors](docs/Model/ThemePaymentMethodSelectorColors.md)
- [ThemePaymentMethodSelectorColorsCreateInput](docs/Model/ThemePaymentMethodSelectorColorsCreateInput.md)
- [ThemePaymentMethodSelectorColorsUpdateInput](docs/Model/ThemePaymentMethodSelectorColorsUpdateInput.md)
- [ThemePaymentMethodSelectorCreateInput](docs/Model/ThemePaymentMethodSelectorCreateInput.md)
- [ThemePaymentMethodSelectorUpdateInput](docs/Model/ThemePaymentMethodSelectorUpdateInput.md)
- [ThemeUpdateInput](docs/Model/ThemeUpdateInput.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookCreateInput](docs/Model/WebhookCreateInput.md)
- [WebhookEventType](docs/Model/WebhookEventType.md)
- [WebhookPage](docs/Model/WebhookPage.md)
- [WebhookStatus](docs/Model/WebhookStatus.md)
- [WebhookUpdateInput](docs/Model/WebhookUpdateInput.md)
- [WoocommerceConnectionData](docs/Model/WoocommerceConnectionData.md)
- [WoocommerceConnectionDataInput](docs/Model/WoocommerceConnectionDataInput.md)
- [ZopaRetailFinanceConnectionData](docs/Model/ZopaRetailFinanceConnectionData.md)
- [ZopaRetailFinanceConnectionDataInput](docs/Model/ZopaRetailFinanceConnectionDataInput.md)
- [ZopaRetailFinancePaymentMethodSettings](docs/Model/ZopaRetailFinancePaymentMethodSettings.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@rvvup.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2024-03-01`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
