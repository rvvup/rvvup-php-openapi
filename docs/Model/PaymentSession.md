# # PaymentSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address** | [**\Rvvup\Api\Model\Address**](Address.md) |  | [optional]
**checkout_id** | **string** | The ID of the checkout that the payment session was created from. | [optional]
**checkout_mode** | [**\Rvvup\Api\Model\CheckoutMode**](CheckoutMode.md) |  |
**checkout_mode_id** | **string** |  | [optional]
**created_at** | **\DateTime** | The datetime when the payment session was created. |
**customer** | [**\Rvvup\Api\Model\Customer**](Customer.md) |  | [optional]
**dashboard_url** | **string** | The URL to the merchant dashboard for the payment session. |
**discount_total** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**external_reference** | **string** | Your reference to identify the payment session. | [optional]
**id** | **string** | The unique ID for the payment session. |
**items** | [**\Rvvup\Api\Model\Item[]**](Item.md) | List of items that the customer is purchasing. |
**merchant_id** | **string** | The ID of the merchant that the payment session was created for. |
**origin_url** | **string** | The URL that the customer was on when the payment session was created. | [optional]
**payment_link_id** | **string** | The ID of the payment link that the payment session was created from. | [optional]
**payments** | [**\Rvvup\Api\Model\Payment[]**](Payment.md) | List of payments that have been made for the payment session. |
**requires_shipping** | **bool** | Whether the customer is required to provide a shipping address. | [optional]
**shipping_address** | [**\Rvvup\Api\Model\Address**](Address.md) |  | [optional]
**shipping_total** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**status** | [**\Rvvup\Api\Model\PaymentSessionStatus**](PaymentSessionStatus.md) |  |
**tax_total** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**updated_at** | **\DateTime** | The datetime when the payment session was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
