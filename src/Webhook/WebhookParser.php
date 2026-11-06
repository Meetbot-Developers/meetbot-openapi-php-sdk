<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Webhook;

use Meetbot\OpenApi\Model\Enums\WebhookCallbackType;

final class WebhookParser
{
    public function parse(string $json): WebhookEvent
    {
        $raw = json_decode($json, false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);
        if (!$raw instanceof \stdClass || !isset($raw->type) || !is_string($raw->type)) { throw new \InvalidArgumentException('Invalid webhook envelope'); }
        return new WebhookEvent($raw);
    }

    public function dispatch(string|WebhookEvent $input, WebhookListenerAdapter $listener): void
    {
        $event = is_string($input) ? $this->parse($input) : $input;
        switch ($event->getTypeEnum()) {
            case WebhookCallbackType::SEND_SUCCESS: $listener->onSendSuccess($event->asSendSuccess()); break;
            case WebhookCallbackType::SEND_ERROR: $listener->onSendError($event->asSendError()); break;
            case WebhookCallbackType::CONTENT: $listener->onContent($event->asContent()); break;
            case WebhookCallbackType::CONTENT_FOR_B_CLIENT: $listener->onContentForBClient($event->asContentForBClient()); break;
            case WebhookCallbackType::STATUS_CHANGE: $listener->onStatusChange($event->asStatusChange()); break;
            case WebhookCallbackType::ACCOUNT_CHANGE: $listener->onAccountChange($event); break;
            case WebhookCallbackType::TEMPLATE_CHANGE: $listener->onTemplateChange($event); break;
            case WebhookCallbackType::ACTION: $listener->onAction($event->asAction()); break;
            case WebhookCallbackType::CALLS_CONNECT: $listener->onCallsConnect($event->asCallsConnect()); break;
            case WebhookCallbackType::CALLS_TERMINATE: $listener->onCallsTerminate($event->asCallsTerminate()); break;
            case WebhookCallbackType::CALLS_STATUS: $listener->onCallsStatus($event->asCallsStatus()); break;
            case WebhookCallbackType::CALLS_CALL_PERMISSION_REPLY: $listener->onCallsPermissionReply($event->asCallsPermissionReply()); break;
            case WebhookCallbackType::FLOW_WEBHOOK: $listener->onFlowWebhook($event); break;
            case WebhookCallbackType::CREATE_CATALOG_PRODUCT_BY_API: $listener->onCatalogProductCreate($event->asCatalogProductCreate()); break;
            case WebhookCallbackType::UPDATE_CATALOG_PRODUCT_BY_API: $listener->onCatalogProductUpdate($event->asCatalogProductUpdate()); break;
            case WebhookCallbackType::DELETE_CATALOG_PRODUCT_BY_API: $listener->onCatalogProductDelete($event->asCatalogProductDelete()); break;
            case WebhookCallbackType::UPLOAD_CATALOG_PRODUCT_BY_API: $listener->onCatalogProductBatchImport($event->asCatalogProductBatchImport()); break;
            default: $listener->onUnhandled($event);
        }
    }
}
