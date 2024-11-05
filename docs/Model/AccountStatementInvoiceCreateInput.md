# # AccountStatementInvoiceCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_paid** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |
**amount_remaining** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |
**due_date** | **\DateTime** | The due date of the invoice. |
**invoice_date** | **\DateTime** | The created date of the invoice. |
**metadata** | **array<string,string>** | Key value pairs to store additional information about the invoice. | [optional]
**paid_date** | **\DateTime** | The date the invoice was fully paid. | [optional]
**reference** | **string** | The reference of the invoice. |
**tax_amount** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |
**total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
