# Rvvup\NotificationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNotificationSubscription()**](NotificationsApi.md#createNotificationSubscription) | **POST** /api/2024-03-01/{merchantId}/notification-subscriptions | Create a new notification subscription. |
| [**getNotificationSubscription()**](NotificationsApi.md#getNotificationSubscription) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions/{id} | Get a notification subscription |
| [**listNotificationSubscriptions()**](NotificationsApi.md#listNotificationSubscriptions) | **GET** /api/2024-03-01/{merchantId}/notification-subscriptions | List notification subscriptions. |


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


$apiInstance = new Rvvup\Api\NotificationsApi(
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
    echo 'Exception when calling NotificationsApi->createNotificationSubscription: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\NotificationsApi(
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
    echo 'Exception when calling NotificationsApi->getNotificationSubscription: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\NotificationsApi(
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
    echo 'Exception when calling NotificationsApi->listNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
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
