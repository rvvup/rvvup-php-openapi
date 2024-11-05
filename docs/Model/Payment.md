# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**authorization_expires_at** | **\DateTime** | The datetime when the payment&#39;s authorization expires. | [optional]
**capture_type** | [**\Rvvup\Api\Model\PaymentCaptureType**](PaymentCaptureType.md) |  |
**created_at** | **\DateTime** | The datetime when the payment was created. |
**decline_reason** | [**\Rvvup\Api\Model\PaymentDeclineReason**](PaymentDeclineReason.md) |  | [optional]
**id** | **string** | The unique ID for the payment. |
**method** | [**\Rvvup\Api\Model\PaymentMethod**](PaymentMethod.md) |  |
**payment_session_id** | **string** | The ID of the payment session that the payment was created in. |
**settlement_status** | [**\Rvvup\Api\Model\PaymentSettlementStatus**](PaymentSettlementStatus.md) |  |
**status** | [**\Rvvup\Api\Model\PaymentStatus**](PaymentStatus.md) |  |
**summary** | [**\Rvvup\Api\Model\PaymentSummary**](PaymentSummary.md) |  |
**updated_at** | **\DateTime** | The datetime when the payment was last updated. |
**void_reason** | [**\Rvvup\Api\Model\PaymentVoidReason**](PaymentVoidReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
