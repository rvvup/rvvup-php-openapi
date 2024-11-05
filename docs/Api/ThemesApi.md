# Rvvup\ThemesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTheme()**](ThemesApi.md#createTheme) | **POST** /api/2024-03-01/{merchantId}/themes | Create a new theme |
| [**getTheme()**](ThemesApi.md#getTheme) | **GET** /api/2024-03-01/{merchantId}/themes/{themeId} | Get a theme |
| [**listThemes()**](ThemesApi.md#listThemes) | **GET** /api/2024-03-01/{merchantId}/themes | List themes |
| [**updateTheme()**](ThemesApi.md#updateTheme) | **PATCH** /api/2024-03-01/{merchantId}/themes/{themeId} | Update a theme |


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


$apiInstance = new Rvvup\Api\ThemesApi(
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
    echo 'Exception when calling ThemesApi->createTheme: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\ThemesApi(
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
    echo 'Exception when calling ThemesApi->getTheme: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\ThemesApi(
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
    echo 'Exception when calling ThemesApi->listThemes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Rvvup\Api\ThemesApi(
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
    echo 'Exception when calling ThemesApi->updateTheme: ', $e->getMessage(), PHP_EOL;
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
