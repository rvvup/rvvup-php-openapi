# # WebhookUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headers** | **array<string,string>** | Custom headers for the webhook | [optional]
**status** | [**\Rvvup\Api\Model\WebhookStatus**](WebhookStatus.md) |  | [optional]
**subscribed_events** | [**\Rvvup\Api\Model\WebhookEventType[]**](WebhookEventType.md) | The events to subscribe to. | [optional]
**url** | **string** | The URL to send the webhook event to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
