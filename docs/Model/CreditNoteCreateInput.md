# # CreditNoteCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_note_date** | **\DateTime** | The created date of the credit note. |
**credit_note_number** | **string** | The number of the credit note. |
**invoice_id** | **string** | The ID of the invoice this credit note is for. |
**items** | [**\Rvvup\Api\Model\CreditNoteItemCreateInput[]**](CreditNoteItemCreateInput.md) | The items in the credit note. |
**reason** | **string** | The reason for creating a credit note |
**tax_amount** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
