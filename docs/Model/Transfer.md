# # Transfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Rvvup\Api\Model\Money**](Money.md) |  |
**created_at** | **\DateTime** | The date the transfer was created |
**destination_merchant_id** | **string** | The destination merchant ID. Null when the destination is an external payee. | [optional]
**id** | **string** | The transfer ID |
**payee_id** | **string** | The destination external payee ID. Populated when type is EXTERNAL_PAYEE. | [optional]
**reference** | **string** | The payment reference |
**source_merchant_id** | **string** | The source merchant ID |
**status** | [**\Rvvup\Api\Model\TransferStatus**](TransferStatus.md) |  |
**type** | [**\Rvvup\Api\Model\TransferType**](TransferType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
