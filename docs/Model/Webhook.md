# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headers** | **array<string,string>** | Custom headers for the webhook. |
**id** | **string** | The unique ID of the webhook. |
**merchant_id** | **string** | The ID of the merchant that the webhook belongs to. |
**status** | [**\Rvvup\Api\Model\WebhookStatus**](WebhookStatus.md) |  |
**subscribed_events** | [**\Rvvup\Api\Model\WebhookEventType[]**](WebhookEventType.md) | The events that the webhook is subscribed to. |
**url** | **string** | The URL to send the webhook events to. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
