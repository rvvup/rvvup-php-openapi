# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_credited** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**amount_paid** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**amount_pending** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**amount_remaining** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**chaser_plan_id** | **string** | Chaser plan id this invoice is assigned with. | [optional]
**customer_account** | [**\Rvvup\Api\Model\InvoiceCustomerAccount**](InvoiceCustomerAccount.md) |  |
**customer_notes** | **string** | Notes that is shown on the invoice to the customer. | [optional]
**due_date** | **\DateTime** | The date and time when the invoice is due for. | [optional]
**id** | **string** | The unique ID of the invoice. |
**invoice_date** | **\DateTime** | The date and time for the invoice. |
**invoice_number** | **string** | The number of the invoice. |
**invoice_url** | **string** | Hosted invoice url to view and pay the invoice |
**invoice_url_expires_at** | **\DateTime** | The datetime when the hosted invoice url expires. |
**items** | [**\Rvvup\Api\Model\InvoiceItem[]**](InvoiceItem.md) |  |
**merchant** | [**\Rvvup\Api\Model\InvoiceMerchant**](InvoiceMerchant.md) |  |
**merchant_id** | **string** | The ID of the merchant that owns this invoice. |
**metadata** | **array<string,string>** | Key value pairs to store additional information about the invoice. |
**paid_date** | **\DateTime** | The date and time when the invoice was paid on. | [optional]
**status** | [**\Rvvup\Api\Model\InvoiceStatus**](InvoiceStatus.md) |  |
**subtotal** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**tax_amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**total** | [**\Rvvup\Api\Model\Money**](Money.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
