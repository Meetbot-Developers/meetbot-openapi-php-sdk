<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateLibraryResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'language' => ['language', 'String'],
        'category' => ['category', 'String'],
        'topic' => ['topic', 'String'],
        'usecase' => ['usecase', 'String'],
        'industry' => ['industry', 'List<String>'],
        'components' => ['components', 'List<JsonNode>'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return string|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param string|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param string|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return string|null */
    public function getTopic(): mixed { return $this->get('topic'); }
    /** @param string|null $value */
    public function setTopic(mixed $value): void { $this->set('topic', $value); }
    /** @param string|null $value */
    public function topic(mixed $value): static { return $this->set('topic', $value); }

    /** @return string|null */
    public function getUsecase(): mixed { return $this->get('usecase'); }
    /** @param string|null $value */
    public function setUsecase(mixed $value): void { $this->set('usecase', $value); }
    /** @param string|null $value */
    public function usecase(mixed $value): static { return $this->set('usecase', $value); }

    /** @return list<string>|null */
    public function getIndustry(): mixed { return $this->get('industry'); }
    /** @param list<string>|null $value */
    public function setIndustry(mixed $value): void { $this->set('industry', $value); }
    /** @param list<string>|null $value */
    public function industry(mixed $value): static { return $this->set('industry', $value); }

    /** @return list<mixed>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<mixed>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<mixed>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }
}
