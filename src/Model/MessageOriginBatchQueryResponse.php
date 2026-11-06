<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MessageOriginBatchQueryResponse extends AbstractModel
{
    protected const FIELDS = [
        'list' => ['list', 'List<MessageOriginItemResponse>'],
    ];

    /** @return list<\Meetbot\OpenApi\Model\MessageOriginItemResponse>|null */
    public function getList(): mixed { return $this->get('list'); }
    /** @param list<\Meetbot\OpenApi\Model\MessageOriginItemResponse>|null $value */
    public function setList(mixed $value): void { $this->set('list', $value); }
    /** @param list<\Meetbot\OpenApi\Model\MessageOriginItemResponse>|null $value */
    public function list(mixed $value): static { return $this->set('list', $value); }
}
