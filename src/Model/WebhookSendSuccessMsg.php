<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookSendSuccessMsg extends AbstractModel
{
    protected const FIELDS = [
        'receiver' => ['receiver', 'String'],
        'mid' => ['mid', 'String'],
    ];

    /** @return string|null */
    public function getReceiver(): mixed { return $this->get('receiver'); }
    /** @param string|null $value */
    public function setReceiver(mixed $value): void { $this->set('receiver', $value); }
    /** @param string|null $value */
    public function receiver(mixed $value): static { return $this->set('receiver', $value); }

    /** @return string|null */
    public function getMid(): mixed { return $this->get('mid'); }
    /** @param string|null $value */
    public function setMid(mixed $value): void { $this->set('mid', $value); }
    /** @param string|null $value */
    public function mid(mixed $value): static { return $this->set('mid', $value); }
}
