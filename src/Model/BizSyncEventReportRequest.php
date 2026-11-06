<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncEventReportRequest extends AbstractModel
{
    protected const FIELDS = [
        'eventId' => ['eventId', 'String'],
        'eventType' => ['eventType', 'BizSyncEventType'],
        'eventTime' => ['eventTime', 'Long'],
        'eventData' => ['eventData', 'BizSyncEventData'],
    ];

    /** @return string|null */
    public function getEventId(): mixed { return $this->get('eventId'); }
    /** @param string|null $value */
    public function setEventId(mixed $value): void { $this->set('eventId', $value); }
    /** @param string|null $value */
    public function eventId(mixed $value): static { return $this->set('eventId', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\BizSyncEventType|null */
    public function getEventType(): mixed { return $this->get('eventType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncEventType|null $value */
    public function setEventType(mixed $value): void { $this->set('eventType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\BizSyncEventType|null $value */
    public function eventType(mixed $value): static { return $this->set('eventType', $value); }

    /** @return int|string|null */
    public function getEventTime(): mixed { return $this->get('eventTime'); }
    /** @param int|string|null $value */
    public function setEventTime(mixed $value): void { $this->set('eventTime', $value); }
    /** @param int|string|null $value */
    public function eventTime(mixed $value): static { return $this->set('eventTime', $value); }

    /** @return \Meetbot\OpenApi\Model\BizSyncEventData|null */
    public function getEventData(): mixed { return $this->get('eventData'); }
    /** @param \Meetbot\OpenApi\Model\BizSyncEventData|null $value */
    public function setEventData(mixed $value): void { $this->set('eventData', $value); }
    /** @param \Meetbot\OpenApi\Model\BizSyncEventData|null $value */
    public function eventData(mixed $value): static { return $this->set('eventData', $value); }
}
