<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappReactionObject extends AbstractModel
{
    protected const FIELDS = [
        'messageId' => ['message_id', 'String'],
        'emoji' => ['emoji', 'String'],
    ];

    /** @return string|null */
    public function getMessageId(): mixed { return $this->get('messageId'); }
    /** @param string|null $value */
    public function setMessageId(mixed $value): void { $this->set('messageId', $value); }
    /** @param string|null $value */
    public function messageId(mixed $value): static { return $this->set('messageId', $value); }

    /** @return string|null */
    public function getEmoji(): mixed { return $this->get('emoji'); }
    /** @param string|null $value */
    public function setEmoji(mixed $value): void { $this->set('emoji', $value); }
    /** @param string|null $value */
    public function emoji(mixed $value): static { return $this->set('emoji', $value); }
}
