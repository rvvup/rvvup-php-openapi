# # CheckoutTemplateUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_type** | [**\Rvvup\Api\Model\CheckoutAmountType**](CheckoutAmountType.md) |  | [optional]
**customer_fields** | [**\Rvvup\Api\Model\CheckoutCustomerFieldsUpdateInput**](CheckoutCustomerFieldsUpdateInput.md) |  | [optional]
**disabled_payment_methods** | [**\Rvvup\Api\Model\PaymentMethod[]**](PaymentMethod.md) | The set of payment methods that are disabled for the checkout. | [optional]
**enabled_payment_methods** | [**\Rvvup\Api\Model\PaymentMethod[]**](PaymentMethod.md) | Ordered list of payment methods that are enabled for the checkout. An empty list means all payment methods are enabled. | [optional]
**name** | **string** | The name of the checkout template. | [optional]
**notify_customer** | **bool** | Whether the customer should be notified on payment completion. | [optional] [default to false]
**notify_merchant** | **bool** | Whether you should be notified on payment completion. | [optional] [default to false]
**payment_method_settings** | [**\Rvvup\Api\Model\CheckoutPaymentMethodSettingsUpdateInput**](CheckoutPaymentMethodSettingsUpdateInput.md) |  | [optional]
**reference_type** | [**\Rvvup\Api\Model\CheckoutReferenceType**](CheckoutReferenceType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
