# # AccountStatement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkout_ids** | **string[]** | A list of successful checkouts that have been made for the statement. |
**connection** | [**\Rvvup\Api\Model\AccountStatementConnection**](AccountStatementConnection.md) |  | [optional]
**credit_notes** | [**\Rvvup\Api\Model\AccountStatementCreditNote[]**](AccountStatementCreditNote.md) | The credit notes of the account statement. |
**id** | **string** | The unique ID of the account statement. |
**invoices** | [**\Rvvup\Api\Model\AccountStatementInvoice[]**](AccountStatementInvoice.md) | The invoices of the account statement. |
**merchant_id** | **string** | The ID of the merchant that owns this account statement. |
**pending_checkout_ids** | **string[]** | A list of checkouts that have in progress pending payments for the statement. |
**reference** | **string** | The reference of the account statement. | [optional]
**status** | [**\Rvvup\Api\Model\AccountStatementStatus**](AccountStatementStatus.md) |  |
**url** | **string** | The URL to the account statement page. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
