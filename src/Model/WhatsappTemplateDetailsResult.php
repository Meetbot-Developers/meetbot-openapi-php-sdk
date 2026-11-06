<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateDetailsResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'status' => ['status', 'String'],
        'category' => ['category', 'String'],
        'language' => ['language', 'String'],
        'components' => ['components', 'List<JsonNode>'],
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

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return string|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param string|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param string|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return list<mixed>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<mixed>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<mixed>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }
}
