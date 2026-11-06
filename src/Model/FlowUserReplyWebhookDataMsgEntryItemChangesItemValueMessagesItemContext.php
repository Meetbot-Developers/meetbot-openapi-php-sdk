<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemContext extends AbstractModel
{
    protected const FIELDS = [
        'from' => ['from', 'String'],
        'id' => ['id', 'String'],
    ];

    /** @return string|null */
    public function getFrom(): mixed { return $this->get('from'); }
    /** @param string|null $value */
    public function setFrom(mixed $value): void { $this->set('from', $value); }
    /** @param string|null $value */
    public function from(mixed $value): static { return $this->set('from', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }
}
