# # PaymentSessionCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address** | [**\Rvvup\Api\Model\AddressInput**](AddressInput.md) |  | [optional]
**customer** | [**\Rvvup\Api\Model\CustomerInput**](CustomerInput.md) |  | [optional]
**discount_total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**external_reference** | **string** | Your reference to identify the payment session. | [optional]
**items** | [**\Rvvup\Api\Model\ItemInput[]**](ItemInput.md) | List of items that the customer is purchasing. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**origin_url** | **string** | The URL that the customer was on when the payment session was created. | [optional]
**payment_capture_type** | [**\Rvvup\Api\Model\PaymentCaptureType**](PaymentCaptureType.md) |  | [optional]
**payment_method** | [**\Rvvup\Api\Model\PaymentMethod**](PaymentMethod.md) |  |
**payment_type** | [**\Rvvup\Api\Model\PaymentType**](PaymentType.md) |  | [optional]
**requires_shipping** | **bool** | Whether the customer is required to provide a shipping address. | [optional] [default to false]
**session_key** | **string** | The unique identifier for the payment session. If the same session key has been used,                          the existing payment session will be updated with the new values. |
**shipping_address** | [**\Rvvup\Api\Model\AddressInput**](AddressInput.md) |  | [optional]
**shipping_total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**tax_total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
