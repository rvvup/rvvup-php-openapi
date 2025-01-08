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
*LogsApi* | [**createLog**](docs/Api/LogsApi.md#createlog) | **POST** /api/2024-03-01/{merchantId}/logs | Create a log
*NotificationsApi* | [**createNotificationSubscription**](docs/Api/NotificationsApi.md#createnotificationsubscription) | **POST** /api/2024-03-01/{merchantId}/notification-subscriptions | Create a new notification subscription.
*NotificationsApi* | [**getNotificationSubscription**](docs/Api/NotificationsApi.md#getnotificationsubscription) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions/{id} | Get a notification subscription
*NotificationsApi* | [**listNotificationSubscriptions**](docs/Api/NotificationsApi.md#listnotificationsubscriptions) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions | List notification subscriptions.
*PaymentLinksApi* | [**createPaymentLink**](docs/Api/PaymentLinksApi.md#createpaymentlink) | **POST** /api/2024-03-01/{merchantId}/payment-links | Create new payment link
*PaymentLinksApi* | [**deactivatePaymentLink**](docs/Api/PaymentLinksApi.md#deactivatepaymentlink) | **DELETE** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Deactivate a payment link
*PaymentLinksApi* | [**getPaymentLink**](docs/Api/PaymentLinksApi.md#getpaymentlink) | **GET** /api/2024-03-01/{merchantId}/payment-links/{paymentLinkId} | Get a payment link
*PaymentLinksApi* | [**listPaymentLinks**](docs/Api/PaymentLinksApi.md#listpaymentlinks) | **GET** /api/2024-03-01/{merchantId}/payment-links | List payment links
*PaymentMethodsApi* | [**listPaymentMethods**](docs/Api/PaymentMethodsApi.md#listpaymentmethods) | **GET** /api/2024-03-01/{merchantId}/payment-methods | Get payment methods
*PaymentSessionsApi* | [**createPaymentSession**](docs/Api/PaymentSessionsApi.md#createpaymentsession) | **POST** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions | Create a payment session
*PaymentSessionsApi* | [**getPaymentSession**](docs/Api/PaymentSessionsApi.md#getpaymentsession) | **GET** /api/2024-03-01/{merchantId}/checkouts/{checkoutId}/payment-sessions/{paymentSessionId} | Get a payment session
*PaymentSettingsApi* | [**getPaymentSettings**](docs/Api/PaymentSettingsApi.md#getpaymentsettings) | **POST** /api/2024-03-01/{merchantId}/payment-settings | Get payment settings for a merchant
*StatementExportsApi* | [**exportStatement**](docs/Api/StatementExportsApi.md#exportstatement) | **POST** /api/2024-03-01/{merchantId}/statements/export | Export a statement
*ThemesApi* | [**createTheme**](docs/Api/ThemesApi.md#createtheme) | **POST** /api/2024-03-01/{merchantId}/themes | Create a new theme
*ThemesApi* | [**getTheme**](docs/Api/ThemesApi.md#gettheme) | **GET** /api/2024-03-01/{merchantId}/themes/{themeId} | Get a theme
*ThemesApi* | [**listThemes**](docs/Api/ThemesApi.md#listthemes) | **GET** /api/2024-03-01/{merchantId}/themes | List themes
*ThemesApi* | [**updateTheme**](docs/Api/ThemesApi.md#updatetheme) | **PATCH** /api/2024-03-01/{merchantId}/themes/{themeId} | Update a theme
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /api/2024-03-01/{merchantId}/webhooks | Create a new webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /api/2024-03-01/{merchantId}/webhooks/{webhookId} | Get a webhook by id
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /api/2024-03-01/{merchantId}/webhooks | Get all webhook
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
- [ActionType](docs/Model/ActionType.md)
- [ActionTypeInput](docs/Model/ActionTypeInput.md)
- [ActorType](docs/Model/ActorType.md)
- [Address](docs/Model/Address.md)
- [AddressInput](docs/Model/AddressInput.md)
- [ApplicationSource](docs/Model/ApplicationSource.md)
- [Checkout](docs/Model/Checkout.md)
- [CheckoutAmountType](docs/Model/CheckoutAmountType.md)
- [CheckoutApplePaySettings](docs/Model/CheckoutApplePaySettings.md)
- [CheckoutApplePaySettingsInput](docs/Model/CheckoutApplePaySettingsInput.md)
- [CheckoutApplePaySettingsUpdateInput](docs/Model/CheckoutApplePaySettingsUpdateInput.md)
- [CheckoutCardSettings](docs/Model/CheckoutCardSettings.md)
- [CheckoutCardSettingsInput](docs/Model/CheckoutCardSettingsInput.md)
- [CheckoutCardSettingsUpdateInput](docs/Model/CheckoutCardSettingsUpdateInput.md)
- [CheckoutCreateInput](docs/Model/CheckoutCreateInput.md)
- [CheckoutCustomerFieldType](docs/Model/CheckoutCustomerFieldType.md)
- [CheckoutCustomerFields](docs/Model/CheckoutCustomerFields.md)
- [CheckoutCustomerFieldsInput](docs/Model/CheckoutCustomerFieldsInput.md)
- [CheckoutCustomerFieldsUpdateInput](docs/Model/CheckoutCustomerFieldsUpdateInput.md)
- [CheckoutGooglePaySettings](docs/Model/CheckoutGooglePaySettings.md)
- [CheckoutGooglePaySettingsInput](docs/Model/CheckoutGooglePaySettingsInput.md)
- [CheckoutGooglePaySettingsUpdateInput](docs/Model/CheckoutGooglePaySettingsUpdateInput.md)
- [CheckoutMode](docs/Model/CheckoutMode.md)
- [CheckoutPage](docs/Model/CheckoutPage.md)
- [CheckoutPayByBankSettings](docs/Model/CheckoutPayByBankSettings.md)
- [CheckoutPayByBankSettingsInput](docs/Model/CheckoutPayByBankSettingsInput.md)
- [CheckoutPayByBankSettingsUpdateInput](docs/Model/CheckoutPayByBankSettingsUpdateInput.md)
- [CheckoutPaymentMethodSettings](docs/Model/CheckoutPaymentMethodSettings.md)
- [CheckoutPaymentMethodSettingsInput](docs/Model/CheckoutPaymentMethodSettingsInput.md)
- [CheckoutPaymentMethodSettingsUpdateInput](docs/Model/CheckoutPaymentMethodSettingsUpdateInput.md)
- [CheckoutReferenceType](docs/Model/CheckoutReferenceType.md)
- [CheckoutStatus](docs/Model/CheckoutStatus.md)
- [CheckoutTemplate](docs/Model/CheckoutTemplate.md)
- [CheckoutTemplateCreateInput](docs/Model/CheckoutTemplateCreateInput.md)
- [CheckoutTemplatePage](docs/Model/CheckoutTemplatePage.md)
- [CheckoutTemplateUpdateInput](docs/Model/CheckoutTemplateUpdateInput.md)
- [Connection](docs/Model/Connection.md)
- [ConnectionCreateInput](docs/Model/ConnectionCreateInput.md)
- [ConnectionData](docs/Model/ConnectionData.md)
- [ConnectionDataInput](docs/Model/ConnectionDataInput.md)
- [ConnectionOauthSignatureMethod](docs/Model/ConnectionOauthSignatureMethod.md)
- [ConnectionPage](docs/Model/ConnectionPage.md)
- [ConnectionStatus](docs/Model/ConnectionStatus.md)
- [ConnectionType](docs/Model/ConnectionType.md)
- [Customer](docs/Model/Customer.md)
- [CustomerInput](docs/Model/CustomerInput.md)
- [ExpressCheckoutDisplayIntent](docs/Model/ExpressCheckoutDisplayIntent.md)
- [GooglePayConnectionData](docs/Model/GooglePayConnectionData.md)
- [GooglePayConnectionDataInput](docs/Model/GooglePayConnectionDataInput.md)
- [Item](docs/Model/Item.md)
- [ItemInput](docs/Model/ItemInput.md)
- [ItemRestriction](docs/Model/ItemRestriction.md)
- [KlarnaConnectionData](docs/Model/KlarnaConnectionData.md)
- [KlarnaConnectionDataInput](docs/Model/KlarnaConnectionDataInput.md)
- [LogCreateInput](docs/Model/LogCreateInput.md)
- [LogRecord](docs/Model/LogRecord.md)
- [MagentoProxyConnectionData](docs/Model/MagentoProxyConnectionData.md)
- [MagentoProxyConnectionDataInput](docs/Model/MagentoProxyConnectionDataInput.md)
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
- [PageCheckout](docs/Model/PageCheckout.md)
- [PageCheckoutTemplate](docs/Model/PageCheckoutTemplate.md)
- [PageConnection](docs/Model/PageConnection.md)
- [PageNotificationSubscription](docs/Model/PageNotificationSubscription.md)
- [PagePaymentLink](docs/Model/PagePaymentLink.md)
- [PagePaymentMethodDetail](docs/Model/PagePaymentMethodDetail.md)
- [PageTheme](docs/Model/PageTheme.md)
- [PageWebhook](docs/Model/PageWebhook.md)
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
- [ResourceType](docs/Model/ResourceType.md)
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
