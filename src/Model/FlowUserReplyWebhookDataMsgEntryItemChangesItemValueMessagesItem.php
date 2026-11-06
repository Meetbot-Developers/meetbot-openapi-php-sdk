<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItem extends AbstractModel
{
    protected const FIELDS = [
        'context' => ['context', 'FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemContext'],
        'interactive' => ['interactive', 'FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractive'],
        'from' => ['from', 'String'],
        'id' => ['id', 'String'],
        'type' => ['type', 'String'],
        'fromUserId' => ['from_user_id', 'String'],
        'timestamp' => ['timestamp', 'String'],
    ];

    /** @return \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemContext|null */
    public function getContext(): mixed { return $this->get('context'); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemContext|null $value */
    public function setContext(mixed $value): void { $this->set('context', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemContext|null $value */
    public function context(mixed $value): static { return $this->set('context', $value); }

    /** @return \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractive|null */
    public function getInteractive(): mixed { return $this->get('interactive'); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractive|null $value */
    public function setInteractive(mixed $value): void { $this->set('interactive', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractive|null $value */
    public function interactive(mixed $value): static { return $this->set('interactive', $value); }

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

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getFromUserId(): mixed { return $this->get('fromUserId'); }
    /** @param string|null $value */
    public function setFromUserId(mixed $value): void { $this->set('fromUserId', $value); }
    /** @param string|null $value */
    public function fromUserId(mixed $value): static { return $this->set('fromUserId', $value); }

    /** @return string|null */
    public function getTimestamp(): mixed { return $this->get('timestamp'); }
    /** @param string|null $value */
    public function setTimestamp(mixed $value): void { $this->set('timestamp', $value); }
    /** @param string|null $value */
    public function timestamp(mixed $value): static { return $this->set('timestamp', $value); }
}
