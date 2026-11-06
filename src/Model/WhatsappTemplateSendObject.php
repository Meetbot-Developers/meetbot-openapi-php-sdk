<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateSendObject extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'language' => ['language', 'WhatsappTemplateLanguageObject'],
        'components' => ['components', 'List<WhatsappTemplateSendComponent>'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateLanguageObject|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateLanguageObject|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateLanguageObject|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplateSendComponent>|null */
    public function getComponents(): mixed { return $this->get('components'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateSendComponent>|null $value */
    public function setComponents(mixed $value): void { $this->set('components', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateSendComponent>|null $value */
    public function components(mixed $value): static { return $this->set('components', $value); }
}
