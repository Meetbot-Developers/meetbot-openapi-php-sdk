<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowMonitoringWebhookDataMsgEntryItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'time' => ['time', 'Long'],
        'changes' => ['changes', 'List<FlowMonitoringWebhookDataMsgEntryItemChangesItem>'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getTime(): mixed { return $this->get('time'); }
    /** @param int|string|null $value */
    public function setTime(mixed $value): void { $this->set('time', $value); }
    /** @param int|string|null $value */
    public function time(mixed $value): static { return $this->set('time', $value); }

    /** @return list<\Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsgEntryItemChangesItem>|null */
    public function getChanges(): mixed { return $this->get('changes'); }
    /** @param list<\Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsgEntryItemChangesItem>|null $value */
    public function setChanges(mixed $value): void { $this->set('changes', $value); }
    /** @param list<\Meetbot\OpenApi\Model\FlowMonitoringWebhookDataMsgEntryItemChangesItem>|null $value */
    public function changes(mixed $value): static { return $this->set('changes', $value); }
}
