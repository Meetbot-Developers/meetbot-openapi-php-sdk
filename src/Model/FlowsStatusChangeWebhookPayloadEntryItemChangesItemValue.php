<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowsStatusChangeWebhookPayloadEntryItemChangesItemValue extends AbstractModel
{
    protected const FIELDS = [
        'flowId' => ['flow_id', 'String'],
        'flowName' => ['flow_name', 'String'],
        'oldStatus' => ['old_status', 'String'],
        'newStatus' => ['new_status', 'String'],
        'eventTime' => ['event_time', 'Long'],
    ];

    /** @return string|null */
    public function getFlowId(): mixed { return $this->get('flowId'); }
    /** @param string|null $value */
    public function setFlowId(mixed $value): void { $this->set('flowId', $value); }
    /** @param string|null $value */
    public function flowId(mixed $value): static { return $this->set('flowId', $value); }

    /** @return string|null */
    public function getFlowName(): mixed { return $this->get('flowName'); }
    /** @param string|null $value */
    public function setFlowName(mixed $value): void { $this->set('flowName', $value); }
    /** @param string|null $value */
    public function flowName(mixed $value): static { return $this->set('flowName', $value); }

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

    /** @return int|string|null */
    public function getEventTime(): mixed { return $this->get('eventTime'); }
    /** @param int|string|null $value */
    public function setEventTime(mixed $value): void { $this->set('eventTime', $value); }
    /** @param int|string|null $value */
    public function eventTime(mixed $value): static { return $this->set('eventTime', $value); }
}
