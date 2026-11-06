<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'language' => ['language', 'String'],
        'category' => ['category', 'String'],
        'status' => ['status', 'String'],
        'parameterFormat' => ['parameter_format', 'String'],
        'components' => ['components', 'List<WhatsappTemplateComponent>'],
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
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return string|null */
    public function getParameterFormat(): mixed { return $this->get('parameterFormat'); }
    /** @param string|null $value */
    public function setParameterFormat(mixed $value): void { $this->set('parameterFormat', $value); }
    /** @param string|null $value */
    public function parameterFormat(mixed $value): static { return $this->set('parameterFormat', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }
}
