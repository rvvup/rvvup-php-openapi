# # CheckoutCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**billing_address** | [**\Rvvup\Api\Model\AddressInput**](AddressInput.md) |  | [optional]
**cancel_url** | **string** | The URL to redirect the user to if the checkout does not complete successfully.                          This field supports the template variable &#x60;{{CHECKOUT_ID}}&#x60; which will be replaced with the                          created checkouts ID. | [optional]
**checkout_template_id** | **string** | The ID of the checkout template to use for this checkout.                          If not provided, the default template will be used.                          If provided, the template must be available to the merchant. | [optional]
**customer** | [**\Rvvup\Api\Model\CustomerInput**](CustomerInput.md) |  | [optional]
**items** | [**\Rvvup\Api\Model\ItemInput[]**](ItemInput.md) |  | [optional]
**metadata** | **array<string,string>** | Key value pairs to store additional information about the checkout. | [optional]
**mode** | [**\Rvvup\Api\Model\CheckoutMode**](CheckoutMode.md) |  | [optional]
**mode_id** | **string** | ID related to this checkout mode. Required for the ACCOUNT_STATEMENT mode and should be set to the AccountStatement&#39;s ID.Automatically set for all other modes. | [optional]
**pending_url** | **string** | The URL to redirect the user to if the checkout falls into a pending payment flow.                          This field supports the template variable &#x60;{{CHECKOUT_ID}}&#x60; which will be replaced with the                          created checkouts ID. | [optional]
**reference** | **string** | Your reference to identify the checkout and the subsequently created payment sessions. | [optional]
**source** | [**\Rvvup\Api\Model\ApplicationSource**](ApplicationSource.md) |  | [optional]
**success_url** | **string** | The URL to redirect the user to after the checkout is completed successfully.                          This field supports the template variable &#x60;{{CHECKOUT_ID}}&#x60; which will be replaced with the                          created checkouts ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
