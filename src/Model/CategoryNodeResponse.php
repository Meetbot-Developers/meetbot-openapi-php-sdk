<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CategoryNodeResponse extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'system' => ['system', 'Boolean'],
        'description' => ['description', 'String'],
        'children' => ['children', 'List<CategoryNodeResponse>'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return bool|null */
    public function getSystem(): mixed { return $this->get('system'); }
    /** @param bool|null $value */
    public function setSystem(mixed $value): void { $this->set('system', $value); }
    /** @param bool|null $value */
    public function system(mixed $value): static { return $this->set('system', $value); }

    /** @return string|null */
    public function getDescription(): mixed { return $this->get('description'); }
    /** @param string|null $value */
    public function setDescription(mixed $value): void { $this->set('description', $value); }
    /** @param string|null $value */
    public function description(mixed $value): static { return $this->set('description', $value); }

    /** @return list<\Meetbot\OpenApi\Model\CategoryNodeResponse>|null */
    public function getChildren(): mixed { return $this->get('children'); }
    /** @param list<\Meetbot\OpenApi\Model\CategoryNodeResponse>|null $value */
    public function setChildren(mixed $value): void { $this->set('children', $value); }
    /** @param list<\Meetbot\OpenApi\Model\CategoryNodeResponse>|null $value */
    public function children(mixed $value): static { return $this->set('children', $value); }
}
