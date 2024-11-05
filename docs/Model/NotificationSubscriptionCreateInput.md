# # NotificationSubscriptionCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_from** | **\DateTime** | Datetime from when the subscription is active. Defaults to current time | [optional]
**active_to** | **\DateTime** | Optional end datetime for the subscription. | [optional]
**configurations** | [**\Rvvup\Api\Model\NotificationSubscriptionConfigurationInput[]**](NotificationSubscriptionConfigurationInput.md) | List of notification configurations for the subscription. |
**include_main_contact** | **bool** | Whether main contact of the merchant is included in the recipients. |
**name** | **string** | The name of the subscription. |
**recipients** | [**\Rvvup\Api\Model\NotificationSubscriptionRecipientInput[]**](NotificationSubscriptionRecipientInput.md) | List of notification recipients for the subscription. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
