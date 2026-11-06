<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Webhook;

use Meetbot\OpenApi\Model\AbstractModel;
use Meetbot\OpenApi\Model\Enums\WebhookCallbackType;

final class WebhookEvent
{
    public function __construct(private readonly \stdClass $raw) {}
    public function getRaw(): \stdClass { return $this->raw; }
    public function getType(): ?string { return $this->raw->type ?? null; }
    public function getTypeEnum(): ?WebhookCallbackType { return WebhookCallbackType::fromValue($this->getType()); }
    public function getMessageId(): int|string|null { return $this->raw->messageId ?? null; }
    public function getId(): int|string|null { return $this->raw->id ?? null; }
    public function getMsg(): mixed { return $this->raw->msg ?? null; }
    /** @param class-string<AbstractModel> $class */
    public function msgAs(string $class): ?AbstractModel { return $this->getMsg() === null ? null : new $class($this->getMsg()); }
    public function asSendSuccessMsg(): ?\Meetbot\OpenApi\Model\WebhookSendSuccessMsg { return $this->msgAs(\Meetbot\OpenApi\Model\WebhookSendSuccessMsg::class); }
    public function asSendErrorMsg(): ?\Meetbot\OpenApi\Model\WebhookSendErrorMsg { return $this->msgAs(\Meetbot\OpenApi\Model\WebhookSendErrorMsg::class); }
    public function asActionMsg(): ?\Meetbot\OpenApi\Model\WebhookActionMsg { return $this->msgAs(\Meetbot\OpenApi\Model\WebhookActionMsg::class); }
    public function asCatalogHandleResult(): ?\Meetbot\OpenApi\Model\CatalogProductHandleResultMessage { return $this->msgAs(\Meetbot\OpenApi\Model\CatalogProductHandleResultMessage::class); }
    public function asCatalogUploadResult(): ?\Meetbot\OpenApi\Model\CatalogProductUploadResultMessage { return $this->msgAs(\Meetbot\OpenApi\Model\CatalogProductUploadResultMessage::class); }
    public function asSendSuccess(): ?\Meetbot\OpenApi\Model\WebhookSendSuccessCallback { return new \Meetbot\OpenApi\Model\WebhookSendSuccessCallback($this->raw); }
    public function asSendError(): ?\Meetbot\OpenApi\Model\WebhookSendErrorCallback { return new \Meetbot\OpenApi\Model\WebhookSendErrorCallback($this->raw); }
    public function asContent(): ?\Meetbot\OpenApi\Model\WebhookContentCallback { return new \Meetbot\OpenApi\Model\WebhookContentCallback($this->raw); }
    public function asContentForBClient(): ?\Meetbot\OpenApi\Model\WebhookContentForBClientCallback { return new \Meetbot\OpenApi\Model\WebhookContentForBClientCallback($this->raw); }
    public function asStatusChange(): ?\Meetbot\OpenApi\Model\WebhookStatusChangeCallback { return new \Meetbot\OpenApi\Model\WebhookStatusChangeCallback($this->raw); }
    public function asAction(): ?\Meetbot\OpenApi\Model\WebhookActionCallback { return new \Meetbot\OpenApi\Model\WebhookActionCallback($this->raw); }
    public function asCallsConnect(): ?\Meetbot\OpenApi\Model\WebhookCallsConnectCallback { return new \Meetbot\OpenApi\Model\WebhookCallsConnectCallback($this->raw); }
    public function asCallsTerminate(): ?\Meetbot\OpenApi\Model\WebhookCallsTerminateCallback { return new \Meetbot\OpenApi\Model\WebhookCallsTerminateCallback($this->raw); }
    public function asCallsStatus(): ?\Meetbot\OpenApi\Model\WebhookCallsStatusCallback { return new \Meetbot\OpenApi\Model\WebhookCallsStatusCallback($this->raw); }
    public function asCallsPermissionReply(): ?\Meetbot\OpenApi\Model\WebhookCallsPermissionReplyCallback { return new \Meetbot\OpenApi\Model\WebhookCallsPermissionReplyCallback($this->raw); }
    public function asCatalogProductCreate(): ?\Meetbot\OpenApi\Model\WebhookCatalogProductCreateCallback { return new \Meetbot\OpenApi\Model\WebhookCatalogProductCreateCallback($this->raw); }
    public function asCatalogProductUpdate(): ?\Meetbot\OpenApi\Model\WebhookCatalogProductUpdateCallback { return new \Meetbot\OpenApi\Model\WebhookCatalogProductUpdateCallback($this->raw); }
    public function asCatalogProductDelete(): ?\Meetbot\OpenApi\Model\WebhookCatalogProductDeleteCallback { return new \Meetbot\OpenApi\Model\WebhookCatalogProductDeleteCallback($this->raw); }
    public function asCatalogProductBatchImport(): ?\Meetbot\OpenApi\Model\WebhookCatalogProductBatchImportCallback { return new \Meetbot\OpenApi\Model\WebhookCatalogProductBatchImportCallback($this->raw); }
}
