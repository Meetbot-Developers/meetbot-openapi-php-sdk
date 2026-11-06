<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowsClientErrorRateWebhookPayloadEntryItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'changes' => ['changes', 'List<FlowsClientErrorRateWebhookPayloadEntryItemChangesItem>'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return list<\Meetbot\OpenApi\Model\FlowsClientErrorRateWebhookPayloadEntryItemChangesItem>|null */
    public function getChanges(): mixed { return $this->get('changes'); }
    /** @param list<\Meetbot\OpenApi\Model\FlowsClientErrorRateWebhookPayloadEntryItemChangesItem>|null $value */
    public function setChanges(mixed $value): void { $this->set('changes', $value); }
    /** @param list<\Meetbot\OpenApi\Model\FlowsClientErrorRateWebhookPayloadEntryItemChangesItem>|null $value */
    public function changes(mixed $value): static { return $this->set('changes', $value); }
}
