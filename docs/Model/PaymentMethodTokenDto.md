# # PaymentMethodTokenDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_brand** | **string** | The card brand (e.g. Visa, Mastercard) | [optional]
**card_expiry_month** | **string** | The card expiry month (MM) | [optional]
**card_expiry_year** | **string** | The card expiry year (YYYY) | [optional]
**card_last4** | **string** | The last 4 digits of the card number | [optional]
**created_at** | **\DateTime** | The date and time the token was created |
**id** | **string** | The Rvvup token identifier |
**provider** | [**\Rvvup\Api\Model\SavedTokenProvider**](SavedTokenProvider.md) |  |
**scope** | [**\Rvvup\Api\Model\SavedTokenScope**](SavedTokenScope.md) |  |
**status** | [**\Rvvup\Api\Model\SavedTokenStatus**](SavedTokenStatus.md) |  |
**token_id** | **string** | The provider-issued token identifier |
**token_type** | [**\Rvvup\Api\Model\SavedTokenType**](SavedTokenType.md) |  |
**updated_at** | **\DateTime** | The date and time the token was last updated |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
