<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UpdateStaticTagRequestValuesItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'value' => ['value', 'String'],
        'description' => ['description', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

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
