<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappAnalyticsActivitiesResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'eventTime' => ['event_time', 'Long'],
        'eventType' => ['event_type', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getEventTime(): mixed { return $this->get('eventTime'); }
    /** @param int|string|null $value */
    public function setEventTime(mixed $value): void { $this->set('eventTime', $value); }
    /** @param int|string|null $value */
    public function eventTime(mixed $value): static { return $this->set('eventTime', $value); }

    /** @return string|null */
    public function getEventType(): mixed { return $this->get('eventType'); }
    /** @param string|null $value */
    public function setEventType(mixed $value): void { $this->set('eventType', $value); }
    /** @param string|null $value */
    public function eventType(mixed $value): static { return $this->set('eventType', $value); }
}
