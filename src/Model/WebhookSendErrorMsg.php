<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookSendErrorMsg extends AbstractModel
{
    protected const FIELDS = [
        'receiver' => ['receiver', 'String'],
        'reason' => ['reason', 'String'],
    ];

    /** @return string|null */
    public function getReceiver(): mixed { return $this->get('receiver'); }
    /** @param string|null $value */
    public function setReceiver(mixed $value): void { $this->set('receiver', $value); }
    /** @param string|null $value */
    public function receiver(mixed $value): static { return $this->set('receiver', $value); }

    /** @return string|null */
    public function getReason(): mixed { return $this->get('reason'); }
    /** @param string|null $value */
    public function setReason(mixed $value): void { $this->set('reason', $value); }
    /** @param string|null $value */
    public function reason(mixed $value): static { return $this->set('reason', $value); }
}
