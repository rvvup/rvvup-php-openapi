# # InvoiceItemCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the item. |
**price** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |
**price_with_tax** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**quantity** | **string** | The quantity of the item being purchased. |
**sku** | **string** | Stock keeping unit |
**supply_date** | [**\Rvvup\Api\Model\InvoiceItemSupplyDateInputDto**](InvoiceItemSupplyDateInputDto.md) |  | [optional]
**tax** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  | [optional]
**tax_rate** | **string** | The percent of tax applied. | [optional]
**total** | [**\Rvvup\Api\Model\MoneyInput**](MoneyInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
