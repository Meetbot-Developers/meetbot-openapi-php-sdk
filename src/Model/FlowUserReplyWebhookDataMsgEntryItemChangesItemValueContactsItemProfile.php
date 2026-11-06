<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueContactsItemProfile extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }
}
