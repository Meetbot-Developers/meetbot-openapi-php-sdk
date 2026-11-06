<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowStatusChangeWebhookDataMsgEntryItemChangesItemValue extends AbstractModel
{
    protected const FIELDS = [
        'flowId' => ['flow_id', 'String'],
        'oldStatus' => ['old_status', 'String'],
        'newStatus' => ['new_status', 'String'],
        'event' => ['event', 'String'],
        'message' => ['message', 'String'],
    ];

    /** @return string|null */
    public function getFlowId(): mixed { return $this->get('flowId'); }
    /** @param string|null $value */
    public function setFlowId(mixed $value): void { $this->set('flowId', $value); }
    /** @param string|null $value */
    public function flowId(mixed $value): static { return $this->set('flowId', $value); }

    /** @return string|null */
    public function getOldStatus(): mixed { return $this->get('oldStatus'); }
    /** @param string|null $value */
    public function setOldStatus(mixed $value): void { $this->set('oldStatus', $value); }
    /** @param string|null $value */
    public function oldStatus(mixed $value): static { return $this->set('oldStatus', $value); }

    /** @return string|null */
    public function getNewStatus(): mixed { return $this->get('newStatus'); }
    /** @param string|null $value */
    public function setNewStatus(mixed $value): void { $this->set('newStatus', $value); }
    /** @param string|null $value */
    public function newStatus(mixed $value): static { return $this->set('newStatus', $value); }

    /** @return string|null */
    public function getEvent(): mixed { return $this->get('event'); }
    /** @param string|null $value */
    public function setEvent(mixed $value): void { $this->set('event', $value); }
    /** @param string|null $value */
    public function event(mixed $value): static { return $this->set('event', $value); }

    /** @return string|null */
    public function getMessage(): mixed { return $this->get('message'); }
    /** @param string|null $value */
    public function setMessage(mixed $value): void { $this->set('message', $value); }
    /** @param string|null $value */
    public function message(mixed $value): static { return $this->set('message', $value); }
}
