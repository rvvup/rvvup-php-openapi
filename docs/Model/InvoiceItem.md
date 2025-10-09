# # InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID for the item. |
**name** | **string** | The name of the item. |
**price** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**price_with_tax** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**quantity** | **string** | The quantity of the item. |
**sku** | **string** | Stock keeping unit |
**subtotal** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**supply_date** | [**\Rvvup\Api\Model\InvoiceItemSupplyDateDto**](InvoiceItemSupplyDateDto.md) |  | [optional]
**tax** | [**\Rvvup\Api\Model\Money**](Money.md) |  | [optional]
**tax_rate** | **string** | The percent of tax applied. | [optional]
**total** | [**\Rvvup\Api\Model\Money**](Money.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
