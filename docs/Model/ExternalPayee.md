# # ExternalPayee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_type** | [**\Rvvup\Api\Model\BankAccountType**](BankAccountType.md) |  |
**cop_outcome** | **string** | The outcome of the Confirmation of Payee check, if available | [optional]
**cop_outcome_description** | **string** | A human-readable description of the Confirmation of Payee outcome, if available | [optional]
**cop_outcome_name** | **string** | The actual account name returned by the Confirmation of Payee check, if available. | [optional]
**created_at** | **\DateTime** | The date the payee was created |
**masked_account_number** | **string** | The account number, masked to show only the last 4 digits |
**name** | **string** | The account holder name |
**payee_id** | **string** | The external payee ID |
**sort_code** | **string** | The 6-digit sort code of the account |
**status** | **string** | The current status of the payee |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
