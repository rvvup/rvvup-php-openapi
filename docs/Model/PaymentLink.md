# # PaymentLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**checkout_ids** | **string[]** | The IDs of the checkouts that were created for this payment link. |
**checkout_template_id** | **string** | The ID of the checkout template to use for this payment link.                          If not provided, the default template will be used. | [optional]
**created_at** | **\DateTime** | The datetime when the payment link was created. |
**id** | **string** | The unique ID of the payment link. |
**items** | [**\Rvvup\Api\Model\Item[]**](Item.md) |  |
**merchant_id** | **string** | The ID of the merchant that owns this checkout. |
**reference** | **string** | Your reference to identify the payment link and subsequently created checkouts                          and payment sessions. | [optional]
**reusable** | **bool** | Whether the payment link can be reused for multiple payments. |
**source** | [**\Rvvup\Api\Model\ApplicationSource**](ApplicationSource.md) |  |
**status** | [**\Rvvup\Api\Model\PaymentLinkStatus**](PaymentLinkStatus.md) |  |
**updated_at** | **\DateTime** | The datetime when the payment link was last updated. |
**url** | **string** | The URL to the hosted payment link page. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
