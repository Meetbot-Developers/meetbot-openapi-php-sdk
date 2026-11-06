<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Webhook;

/** Override only the events your application handles. */
class WebhookListenerAdapter
{
    public function onSendSuccess(mixed $event): void {}
    public function onSendError(mixed $event): void {}
    public function onContent(mixed $event): void {}
    public function onContentForBClient(mixed $event): void {}
    public function onStatusChange(mixed $event): void {}
    public function onAccountChange(mixed $event): void {}
    public function onTemplateChange(mixed $event): void {}
    public function onAction(mixed $event): void {}
    public function onCallsConnect(mixed $event): void {}
    public function onCallsTerminate(mixed $event): void {}
    public function onCallsStatus(mixed $event): void {}
    public function onCallsPermissionReply(mixed $event): void {}
    public function onFlowWebhook(mixed $event): void {}
    public function onCatalogProductCreate(mixed $event): void {}
    public function onCatalogProductUpdate(mixed $event): void {}
    public function onCatalogProductDelete(mixed $event): void {}
    public function onCatalogProductBatchImport(mixed $event): void {}
    public function onUnhandled(WebhookEvent $event): void {}
}
