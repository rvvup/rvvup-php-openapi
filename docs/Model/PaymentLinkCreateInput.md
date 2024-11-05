# # PaymentLinkCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**checkout_template_id** | **string** | The ID of the checkout template to use for this payment link.                          If not provided, the default template will be used.                          If provided, the template must be available to the merchant. | [optional]
**reference** | **string** | Your reference to identify the payment link and subsequently created checkouts                          and payment sessions. | [optional]
**reusable** | **bool** | Whether the payment link can be reused for multiple payments. | [optional] [default to false]
**source** | [**\Rvvup\Api\Model\ApplicationSource**](ApplicationSource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
