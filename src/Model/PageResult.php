<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class PageResult extends AbstractModel
{
    protected const FIELDS = [
        'total' => ['total', 'Long'],
        'list' => ['list', 'List<T>'],
    ];

    /** @return int|string|null */
    public function getTotal(): mixed { return $this->get('total'); }
    /** @param int|string|null $value */
    public function setTotal(mixed $value): void { $this->set('total', $value); }
    /** @param int|string|null $value */
    public function total(mixed $value): static { return $this->set('total', $value); }

    /** @return list<mixed>|null */
    public function getList(): mixed { return $this->get('list'); }
    /** @param list<mixed>|null $value */
    public function setList(mixed $value): void { $this->set('list', $value); }
    /** @param list<mixed>|null $value */
    public function list(mixed $value): static { return $this->set('list', $value); }
}
