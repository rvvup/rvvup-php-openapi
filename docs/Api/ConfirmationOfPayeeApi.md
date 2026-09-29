# Rvvup\ConfirmationOfPayeeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkConfirmationOfPayee()**](ConfirmationOfPayeeApi.md#checkConfirmationOfPayee) | **POST** /api/2024-03-01/{merchantId}/confirmation-of-payee | Confirmation of Payee check |


## `checkConfirmationOfPayee()`

```php
checkConfirmationOfPayee($merchant_id, $confirmation_of_payee_check_input): \Rvvup\Api\Model\ConfirmationOfPayeeResult
```

Confirmation of Payee check

Performs a Confirmation of Payee check against the supplied bank account details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: apiKey
$config = Rvvup\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Rvvup\Api\ConfirmationOfPayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant ID
$confirmation_of_payee_check_input = new \Rvvup\Api\Model\ConfirmationOfPayeeCheckInput(); // \Rvvup\Api\Model\ConfirmationOfPayeeCheckInput | The bank account details to check

try {
    $result = $apiInstance->checkConfirmationOfPayee($merchant_id, $confirmation_of_payee_check_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfirmationOfPayeeApi->checkConfirmationOfPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant ID | |
| **confirmation_of_payee_check_input** | [**\Rvvup\Api\Model\ConfirmationOfPayeeCheckInput**](../Model/ConfirmationOfPayeeCheckInput.md)| The bank account details to check | |

### Return type

[**\Rvvup\Api\Model\ConfirmationOfPayeeResult**](../Model/ConfirmationOfPayeeResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
