# # AccountStatementInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_paid** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**amount_pending** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**amount_remaining** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**checkout_ids** | **string[]** | A list of successful checkouts that have been made for the invoice. |
**due_date** | **\DateTime** | The due date of the invoice. |
**id** | **string** | The unique ID of the invoice. |
**invoice_date** | **\DateTime** | The created date of the invoice. |
**merchant_id** | **string** | The ID of the merchant that owns the invoice. |
**metadata** | **array<string,string>** | Key value pairs to store additional information about the invoice. |
**paid_date** | **\DateTime** | The date the invoice was fully paid. | [optional]
**pending_checkout_ids** | **string[]** | A list of checkouts that have in progress pending payments for the invoice. |
**reference** | **string** | The reference of the invoice. |
**status** | [**\Rvvup\Api\Model\AccountStatementInvoiceStatus**](AccountStatementInvoiceStatus.md) |  |
**tax_amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**total** | [**\Rvvup\Api\Model\Money**](Money.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
