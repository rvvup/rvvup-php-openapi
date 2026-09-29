# # DisbursementBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disbursed_at** | **\DateTime** | The datetime when the batch was disbursed. | [optional]
**fees** | [**\Rvvup\Api\Model\DisbursementFee[]**](DisbursementFee.md) | The fees associated with the payments and refunds in this batch. |
**id** | **string** | The unique ID of the disbursement batch. |
**is_finalized** | **bool** | Whether the batch has been finalized (funds received and ledger categorised). |
**net_settlement_amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**payments** | [**\Rvvup\Api\Model\DisbursementPayment[]**](DisbursementPayment.md) | The constituent payment transactions included in this batch. |
**refunds** | [**\Rvvup\Api\Model\DisbursementRefund[]**](DisbursementRefund.md) | The constituent refund transactions included in this batch. |
**status** | [**\Rvvup\Api\Model\DisbursementBatchStatus**](DisbursementBatchStatus.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
