<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappMessageTemplateParam extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'language' => ['language', 'String'],
        'category' => ['category', 'WhatsappTemplateCategory'],
        'parameterFormat' => ['parameter_format', 'String'],
        'allowCategoryChange' => ['allow_category_change', 'Boolean'],
        'libraryTemplateName' => ['library_template_name', 'String'],
        'messageSendTtlSeconds' => ['message_send_ttl_seconds', 'Integer'],
        'components' => ['components', 'List<WhatsappTemplateComponent>'],
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

    /** @return \Meetbot\OpenApi\Model\Enums\WhatsappTemplateCategory|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappTemplateCategory|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappTemplateCategory|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return string|null */
    public function getParameterFormat(): mixed { return $this->get('parameterFormat'); }
    /** @param string|null $value */
    public function setParameterFormat(mixed $value): void { $this->set('parameterFormat', $value); }
    /** @param string|null $value */
    public function parameterFormat(mixed $value): static { return $this->set('parameterFormat', $value); }

    /** @return bool|null */
    public function getAllowCategoryChange(): mixed { return $this->get('allowCategoryChange'); }
    /** @param bool|null $value */
    public function setAllowCategoryChange(mixed $value): void { $this->set('allowCategoryChange', $value); }
    /** @param bool|null $value */
    public function allowCategoryChange(mixed $value): static { return $this->set('allowCategoryChange', $value); }

    /** @return string|null */
    public function getLibraryTemplateName(): mixed { return $this->get('libraryTemplateName'); }
    /** @param string|null $value */
    public function setLibraryTemplateName(mixed $value): void { $this->set('libraryTemplateName', $value); }
    /** @param string|null $value */
    public function libraryTemplateName(mixed $value): static { return $this->set('libraryTemplateName', $value); }

    /** @return int|null */
    public function getMessageSendTtlSeconds(): mixed { return $this->get('messageSendTtlSeconds'); }
    /** @param int|null $value */
    public function setMessageSendTtlSeconds(mixed $value): void { $this->set('messageSendTtlSeconds', $value); }
    /** @param int|null $value */
    public function messageSendTtlSeconds(mixed $value): static { return $this->set('messageSendTtlSeconds', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateComponent>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }
}
