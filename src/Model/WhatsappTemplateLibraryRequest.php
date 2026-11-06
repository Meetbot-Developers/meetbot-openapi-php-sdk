<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateLibraryRequest extends AbstractModel
{
    protected const FIELDS = [
        'category' => ['category', 'String'],
        'search' => ['search', 'String'],
        'topic' => ['topic', 'String'],
        'usecase' => ['usecase', 'String'],
        'industry' => ['industry', 'String'],
        'language' => ['language', 'String'],
        'name' => ['name', 'String'],
        'limit' => ['limit', 'Long'],
        'after' => ['after', 'String'],
        'before' => ['before', 'String'],
    ];

    /** @return string|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param string|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param string|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return string|null */
    public function getSearch(): mixed { return $this->get('search'); }
    /** @param string|null $value */
    public function setSearch(mixed $value): void { $this->set('search', $value); }
    /** @param string|null $value */
    public function search(mixed $value): static { return $this->set('search', $value); }

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

    /** @return string|null */
    public function getIndustry(): mixed { return $this->get('industry'); }
    /** @param string|null $value */
    public function setIndustry(mixed $value): void { $this->set('industry', $value); }
    /** @param string|null $value */
    public function industry(mixed $value): static { return $this->set('industry', $value); }

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return int|string|null */
    public function getLimit(): mixed { return $this->get('limit'); }
    /** @param int|string|null $value */
    public function setLimit(mixed $value): void { $this->set('limit', $value); }
    /** @param int|string|null $value */
    public function limit(mixed $value): static { return $this->set('limit', $value); }

    /** @return string|null */
    public function getAfter(): mixed { return $this->get('after'); }
    /** @param string|null $value */
    public function setAfter(mixed $value): void { $this->set('after', $value); }
    /** @param string|null $value */
    public function after(mixed $value): static { return $this->set('after', $value); }

    /** @return string|null */
    public function getBefore(): mixed { return $this->get('before'); }
    /** @param string|null $value */
    public function setBefore(mixed $value): void { $this->set('before', $value); }
    /** @param string|null $value */
    public function before(mixed $value): static { return $this->set('before', $value); }
}
