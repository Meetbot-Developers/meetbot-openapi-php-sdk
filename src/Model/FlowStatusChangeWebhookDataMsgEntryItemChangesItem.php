<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowStatusChangeWebhookDataMsgEntryItemChangesItem extends AbstractModel
{
    protected const FIELDS = [
        'field' => ['field', 'String'],
        'value' => ['value', 'FlowStatusChangeWebhookDataMsgEntryItemChangesItemValue'],
    ];

    /** @return string|null */
    public function getField(): mixed { return $this->get('field'); }
    /** @param string|null $value */
    public function setField(mixed $value): void { $this->set('field', $value); }
    /** @param string|null $value */
    public function field(mixed $value): static { return $this->set('field', $value); }

    /** @return \Meetbot\OpenApi\Model\FlowStatusChangeWebhookDataMsgEntryItemChangesItemValue|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param \Meetbot\OpenApi\Model\FlowStatusChangeWebhookDataMsgEntryItemChangesItemValue|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param \Meetbot\OpenApi\Model\FlowStatusChangeWebhookDataMsgEntryItemChangesItemValue|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }
}
