# # CheckoutTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_type** | [**\Rvvup\Api\Model\CheckoutAmountType**](CheckoutAmountType.md) |  |
**created_at** | **\DateTime** | The datetime when the checkout template was created. |
**customer_fields** | [**\Rvvup\Api\Model\CheckoutCustomerFields**](CheckoutCustomerFields.md) |  | [optional]
**enabled_payment_methods** | [**\Rvvup\Api\Model\PaymentMethod[]**](PaymentMethod.md) | Ordered list of payment methods that are enabled for the checkout. | [optional]
**id** | **string** | The unique ID of the checkout template. |
**merchant_id** | **string** | The ID of the merchant that owns this checkout template. |
**mode** | [**\Rvvup\Api\Model\CheckoutMode**](CheckoutMode.md) |  |
**name** | **string** | The name of the checkout template. |
**notify_customer** | **bool** | Whether the customer should be notified on payment completion. |
**notify_merchant** | **bool** | Whether you should be notified on payment completion. |
**payment_method_settings** | [**\Rvvup\Api\Model\CheckoutPaymentMethodSettings**](CheckoutPaymentMethodSettings.md) |  | [optional]
**reference_type** | [**\Rvvup\Api\Model\CheckoutReferenceType**](CheckoutReferenceType.md) |  |
**source** | [**\Rvvup\Api\Model\ApplicationSource**](ApplicationSource.md) |  |
**updated_at** | **\DateTime** | The datetime when the checkout template was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
