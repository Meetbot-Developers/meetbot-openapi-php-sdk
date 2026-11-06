<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupJoinRequestRejectParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'joinRequests' => ['join_requests', 'List<String>'],
    ];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return list<string>|null */
    public function getJoinRequests(): mixed { return $this->get('joinRequests'); }
    /** @param list<string>|null $value */
    public function setJoinRequests(mixed $value): void { $this->set('joinRequests', $value); }
    /** @param list<string>|null $value */
    public function joinRequests(mixed $value): static { return $this->set('joinRequests', $value); }
}
