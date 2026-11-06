<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateComponent extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'text' => ['text', 'String'],
        'format' => ['format', 'String'],
        'example' => ['example', 'WhatsappTemplateExample'],
        'buttons' => ['buttons', 'List<WhatsappTemplateButton>'],
        'addSecurityRecommendation' => ['add_security_recommendation', 'Boolean'],
        'codeExpirationMinutes' => ['code_expiration_minutes', 'Integer'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getText(): mixed { return $this->get('text'); }
    /** @param string|null $value */
    public function setText(mixed $value): void { $this->set('text', $value); }
    /** @param string|null $value */
    public function text(mixed $value): static { return $this->set('text', $value); }

    /** @return string|null */
    public function getFormat(): mixed { return $this->get('format'); }
    /** @param string|null $value */
    public function setFormat(mixed $value): void { $this->set('format', $value); }
    /** @param string|null $value */
    public function format(mixed $value): static { return $this->set('format', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateExample|null */
    public function getExample(): mixed { return $this->get('example'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateExample|null $value */
    public function setExample(mixed $value): void { $this->set('example', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateExample|null $value */
    public function example(mixed $value): static { return $this->set('example', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplateButton>|null */
    public function getButtons(): mixed { return $this->get('buttons'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateButton>|null $value */
    public function setButtons(mixed $value): void { $this->set('buttons', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateButton>|null $value */
    public function buttons(mixed $value): static { return $this->set('buttons', $value); }

    /** @return bool|null */
    public function getAddSecurityRecommendation(): mixed { return $this->get('addSecurityRecommendation'); }
    /** @param bool|null $value */
    public function setAddSecurityRecommendation(mixed $value): void { $this->set('addSecurityRecommendation', $value); }
    /** @param bool|null $value */
    public function addSecurityRecommendation(mixed $value): static { return $this->set('addSecurityRecommendation', $value); }

    /** @return int|null */
    public function getCodeExpirationMinutes(): mixed { return $this->get('codeExpirationMinutes'); }
    /** @param int|null $value */
    public function setCodeExpirationMinutes(mixed $value): void { $this->set('codeExpirationMinutes', $value); }
    /** @param int|null $value */
    public function codeExpirationMinutes(mixed $value): static { return $this->set('codeExpirationMinutes', $value); }
}
