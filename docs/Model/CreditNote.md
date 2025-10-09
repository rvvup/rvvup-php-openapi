# # CreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applied_to_invoice_ids** | **string[]** | The invoices this credit note was applied to. |
**credit_note_date** | **\DateTime** | The date and time for the credit note. |
**credit_note_number** | **string** | The number of the credit note. |
**id** | **string** | The unique ID of the credit note. |
**invoice_id** | **string** | The ID of the invoice this credit note is for. |
**items** | [**\Rvvup\Api\Model\CreditNoteItem[]**](CreditNoteItem.md) | The items in the credit note. |
**merchant_id** | **string** | The ID of the merchant that owns this credit note. |
**pending_refund_ids** | **string[]** | The pending refunds still processing for this credit note. |
**reason** | **string** | The reason for creating a credit note |
**refund_ids** | **string[]** | The refunds created for this credit note. |
**status** | [**\Rvvup\Api\Model\CreditNoteStatus**](CreditNoteStatus.md) |  |
**subtotal** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**tax_amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\Money**](Money.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
