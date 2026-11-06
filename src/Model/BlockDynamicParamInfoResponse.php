<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BlockDynamicParamInfoResponse extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'key' => ['key', 'String'],
        'value' => ['value', 'String'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getKey(): mixed { return $this->get('key'); }
    /** @param string|null $value */
    public function setKey(mixed $value): void { $this->set('key', $value); }
    /** @param string|null $value */
    public function key(mixed $value): static { return $this->set('key', $value); }

    /** @return string|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param string|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param string|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }
}
