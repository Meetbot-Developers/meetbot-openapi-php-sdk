<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CreateStaticTagRequestValuesItem extends AbstractModel
{
    protected const FIELDS = [
        'value' => ['value', 'String'],
        'description' => ['description', 'String'],
    ];

    /** @return string|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param string|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param string|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }
}
