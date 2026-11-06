<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MessageIdResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'Long'],
    ];

    /** @return int|string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param int|string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param int|string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }
}
