# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**billing_address** | [**\Rvvup\Api\Model\Address**](Address.md) |  | [optional]
**created_at** | **\DateTime** | The datetime when the order was created. |
**customer** | [**\Rvvup\Api\Model\Customer**](Customer.md) |  | [optional]
**customer_account_id** | **string** | The ID of the customer account that owns this order. | [optional]
**items** | [**\Rvvup\Api\Model\Item[]**](Item.md) |  |
**last_payment_id** | **string** | The ID of the last payment made on this order. | [optional]
**last_payment_method** | [**\Rvvup\Api\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**last_payment_status** | [**\Rvvup\Api\Model\PaymentStatus**](PaymentStatus.md) |  | [optional]
**merchant_id** | **string** | The ID of the merchant that owns this order. |
**payment_session_id** | **string** | The ID of the payment session that the order was created in. |
**reference** | **string** | The unique reference of the order. |
**shipping_address** | [**\Rvvup\Api\Model\Address**](Address.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
