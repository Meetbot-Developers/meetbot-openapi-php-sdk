<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupCreateResult extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'groups' => ['groups', 'List<WhatsappGroupCreateResultGroupsItem>'],
    ];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappGroupCreateResultGroupsItem>|null */
    public function getGroups(): mixed { return $this->get('groups'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappGroupCreateResultGroupsItem>|null $value */
    public function setGroups(mixed $value): void { $this->set('groups', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappGroupCreateResultGroupsItem>|null $value */
    public function groups(mixed $value): static { return $this->set('groups', $value); }
}
