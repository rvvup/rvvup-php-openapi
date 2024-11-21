# # Checkout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**billing_address** | [**\Rvvup\Api\Model\Address**](Address.md) |  | [optional]
**cancel_url** | **string** | The URL to redirect the customer to if the checkout does not complete successfully. | [optional]
**checkout_template_id** | **string** | The ID of the checkout template to use for this checkout. |
**created_at** | **\DateTime** | The datetime when the checkout was created. |
**customer** | [**\Rvvup\Api\Model\Customer**](Customer.md) |  | [optional]
**expires_at** | **\DateTime** | The datetime when the checkout will expire. |
**id** | **string** | The unique ID of the checkout. |
**items** | [**\Rvvup\Api\Model\Item[]**](Item.md) |  |
**merchant_id** | **string** | The ID of the merchant that owns this checkout. |
**metadata** | **array<string,string>** | Key value pairs to store additional information about the checkout. |
**mode** | [**\Rvvup\Api\Model\CheckoutMode**](CheckoutMode.md) |  |
**mode_id** | **string** | Id related to this checkout mode. The associated AccountStatement&#39;s id for the ACCOUNT_STATEMENT mode.The associated PaymentLink&#39;s id for the PAYMENT_LINK mode.The checkout&#39;s id for the CHECKOUT and VIRTUAL_TERMINAL mode. |
**payment_link_id** | **string** | The ID of the payment link that was used to create this checkout.This field is deprecated and will be removed in a future version.Use the modeId field instead. | [optional]
**payment_session_ids** | **string[]** | The IDs of the payment sessions that were created for this checkout. |
**pending_url** | **string** | The URL to redirect the customer to if the checkout falls into a pending payment flow. | [optional]
**reference** | **string** | Your reference to identify the checkout and the subsequently created payment sessions. | [optional]
**source** | [**\Rvvup\Api\Model\ApplicationSource**](ApplicationSource.md) |  |
**status** | [**\Rvvup\Api\Model\CheckoutStatus**](CheckoutStatus.md) |  |
**success_url** | **string** | The URL to redirect the customer to after the checkout is completed successfully. | [optional]
**token** | **string** | The checkout session token. |
**updated_at** | **\DateTime** | The datetime when the checkout was last updated. |
**url** | **string** | The URL to the hosted checkout page. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
