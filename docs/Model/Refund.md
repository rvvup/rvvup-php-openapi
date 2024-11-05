# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**created_at** | **\DateTime** | The datetime when the refund was created. |
**failure_reason** | [**\Rvvup\Api\Model\RefundFailureReason**](RefundFailureReason.md) |  | [optional]
**id** | **string** | The unique ID for the refund. |
**merchant_id** | **string** | The merchant ID that the refund was created for. |
**payment_id** | **string** | The payment ID that the refund was created for. |
**payment_method** | [**\Rvvup\Api\Model\PaymentMethod**](PaymentMethod.md) |  |
**payment_session_id** | **string** | The payment session ID that the refund was created for. |
**reason** | **string** | The reason for the refund. | [optional]
**status** | [**\Rvvup\Api\Model\RefundStatus**](RefundStatus.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
