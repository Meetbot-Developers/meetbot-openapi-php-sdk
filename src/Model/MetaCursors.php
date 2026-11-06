<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MetaCursors extends AbstractModel
{
    protected const FIELDS = [
        'before' => ['before', 'String'],
        'after' => ['after', 'String'],
    ];

    /** @return string|null */
    public function getBefore(): mixed { return $this->get('before'); }
    /** @param string|null $value */
    public function setBefore(mixed $value): void { $this->set('before', $value); }
    /** @param string|null $value */
    public function before(mixed $value): static { return $this->set('before', $value); }

    /** @return string|null */
    public function getAfter(): mixed { return $this->get('after'); }
    /** @param string|null $value */
    public function setAfter(mixed $value): void { $this->set('after', $value); }
    /** @param string|null $value */
    public function after(mixed $value): static { return $this->set('after', $value); }
}
