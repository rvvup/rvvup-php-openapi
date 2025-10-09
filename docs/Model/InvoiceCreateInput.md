# # InvoiceCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chaser_plan_id** | **string** | The ID of the chaser plan to use. | [optional]
**customer_account_id** | **string** | The ID of the customer account to invoice. |
**customer_notes** | **string** | Customer notes to be added to the invoice. This will be shown to the customer on the invoice. | [optional]
**due_date** | **\DateTime** | The date invoice is due for. | [optional]
**invoice_date** | **\DateTime** | The created date of the invoice. |
**invoice_number** | **string** | The number of the invoice. |
**items** | [**\Rvvup\Api\Model\InvoiceItemCreateInput[]**](InvoiceItemCreateInput.md) |  |
**metadata** | **array<string,string>** | Key value pairs to store additional information about the invoice. | [optional]
**tax_amount** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
