<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsg extends AbstractModel
{
    protected const FIELDS = [
        'object' => ['object', 'String'],
        'entry' => ['entry', 'List<FlowUserReplyWebhookDataMsgEntryItem>'],
    ];

    /** @return string|null */
    public function getObject(): mixed { return $this->get('object'); }
    /** @param string|null $value */
    public function setObject(mixed $value): void { $this->set('object', $value); }
    /** @param string|null $value */
    public function object(mixed $value): static { return $this->set('object', $value); }

    /** @return list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItem>|null */
    public function getEntry(): mixed { return $this->get('entry'); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItem>|null $value */
    public function setEntry(mixed $value): void { $this->set('entry', $value); }
    /** @param list<\Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItem>|null $value */
    public function entry(mixed $value): static { return $this->set('entry', $value); }
}
