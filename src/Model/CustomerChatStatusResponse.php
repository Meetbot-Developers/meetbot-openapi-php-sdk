<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CustomerChatStatusResponse extends AbstractModel
{
    protected const FIELDS = [
        'chatStatus' => ['chatStatus', 'CustomerChatStatus'],
    ];

    /** @return \Meetbot\OpenApi\Model\Enums\CustomerChatStatus|null */
    public function getChatStatus(): mixed { return $this->get('chatStatus'); }
    /** @param \Meetbot\OpenApi\Model\Enums\CustomerChatStatus|null $value */
    public function setChatStatus(mixed $value): void { $this->set('chatStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\CustomerChatStatus|null $value */
    public function chatStatus(mixed $value): static { return $this->set('chatStatus', $value); }
}
