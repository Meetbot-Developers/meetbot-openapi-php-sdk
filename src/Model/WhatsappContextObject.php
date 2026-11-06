<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContextObject extends AbstractModel
{
    protected const FIELDS = [
        'messageId' => ['message_id', 'String'],
    ];

    /** @return string|null */
    public function getMessageId(): mixed { return $this->get('messageId'); }
    /** @param string|null $value */
    public function setMessageId(mixed $value): void { $this->set('messageId', $value); }
    /** @param string|null $value */
    public function messageId(mixed $value): static { return $this->set('messageId', $value); }
}
