<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowMonitoringWebhookDataMsgEntryItemChangesItem extends AbstractModel
{
    protected const FIELDS = [
        'field' => ['field', 'String'],
        'value' => ['value', 'JsonNode'],
    ];

    /** @return string|null */
    public function getField(): mixed { return $this->get('field'); }
    /** @param string|null $value */
    public function setField(mixed $value): void { $this->set('field', $value); }
    /** @param string|null $value */
    public function field(mixed $value): static { return $this->set('field', $value); }

    /** @return mixed|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param mixed|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param mixed|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }
}
