<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class GraphIdRef extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }
}
