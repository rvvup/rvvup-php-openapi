# # NotificationSubscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_from** | **\DateTime** | Datetime from when the subscription is active. |
**active_to** | **\DateTime** | Optional end datetime for the subscription. | [optional]
**configurations** | [**\Rvvup\Api\Model\NotificationSubscriptionConfiguration[]**](NotificationSubscriptionConfiguration.md) | List of notification configurations for the subscription. |
**created_at** | **\DateTime** | The datetime when the entity was created. |
**id** | **string** | The id of the subscription. |
**include_main_contact** | **bool** | Whether main contact of the merchant is included in the recipients. |
**is_active** | **bool** | Whether the subscription is currently active. |
**name** | **string** | The name of the subscription. |
**recipients** | [**\Rvvup\Api\Model\NotificationSubscriptionRecipient[]**](NotificationSubscriptionRecipient.md) | List of notification recipients for the subscription. |
**updated_at** | **\DateTime** | The datetime when the entity was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
