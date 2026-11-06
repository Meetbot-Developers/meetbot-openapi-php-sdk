<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookSendErrorCallback extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'messageId' => ['messageId', 'Long'],
        'msg' => ['msg', 'WebhookSendErrorMsg'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return int|string|null */
    public function getMessageId(): mixed { return $this->get('messageId'); }
    /** @param int|string|null $value */
    public function setMessageId(mixed $value): void { $this->set('messageId', $value); }
    /** @param int|string|null $value */
    public function messageId(mixed $value): static { return $this->set('messageId', $value); }

    /** @return \Meetbot\OpenApi\Model\WebhookSendErrorMsg|null */
    public function getMsg(): mixed { return $this->get('msg'); }
    /** @param \Meetbot\OpenApi\Model\WebhookSendErrorMsg|null $value */
    public function setMsg(mixed $value): void { $this->set('msg', $value); }
    /** @param \Meetbot\OpenApi\Model\WebhookSendErrorMsg|null $value */
    public function msg(mixed $value): static { return $this->set('msg', $value); }
}
