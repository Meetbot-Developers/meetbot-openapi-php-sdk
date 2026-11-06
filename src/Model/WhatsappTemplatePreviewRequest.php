<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplatePreviewRequest extends AbstractModel
{
    protected const FIELDS = [
        'wabaId' => ['wabaId', 'String'],
        'category' => ['category', 'String'],
        'languages' => ['languages', 'String'],
        'addSecurityRecommendation' => ['addSecurityRecommendation', 'Boolean'],
        'codeExpirationMinutes' => ['codeExpirationMinutes', 'Long'],
        'buttonTypes' => ['buttonTypes', 'String'],
        'businessName' => ['businessName', 'String'],
    ];

    /** @return string|null */
    public function getWabaId(): mixed { return $this->get('wabaId'); }
    /** @param string|null $value */
    public function setWabaId(mixed $value): void { $this->set('wabaId', $value); }
    /** @param string|null $value */
    public function wabaId(mixed $value): static { return $this->set('wabaId', $value); }

    /** @return string|null */
    public function getCategory(): mixed { return $this->get('category'); }
    /** @param string|null $value */
    public function setCategory(mixed $value): void { $this->set('category', $value); }
    /** @param string|null $value */
    public function category(mixed $value): static { return $this->set('category', $value); }

    /** @return string|null */
    public function getLanguages(): mixed { return $this->get('languages'); }
    /** @param string|null $value */
    public function setLanguages(mixed $value): void { $this->set('languages', $value); }
    /** @param string|null $value */
    public function languages(mixed $value): static { return $this->set('languages', $value); }

    /** @return bool|null */
    public function getAddSecurityRecommendation(): mixed { return $this->get('addSecurityRecommendation'); }
    /** @param bool|null $value */
    public function setAddSecurityRecommendation(mixed $value): void { $this->set('addSecurityRecommendation', $value); }
    /** @param bool|null $value */
    public function addSecurityRecommendation(mixed $value): static { return $this->set('addSecurityRecommendation', $value); }

    /** @return int|string|null */
    public function getCodeExpirationMinutes(): mixed { return $this->get('codeExpirationMinutes'); }
    /** @param int|string|null $value */
    public function setCodeExpirationMinutes(mixed $value): void { $this->set('codeExpirationMinutes', $value); }
    /** @param int|string|null $value */
    public function codeExpirationMinutes(mixed $value): static { return $this->set('codeExpirationMinutes', $value); }

    /** @return string|null */
    public function getButtonTypes(): mixed { return $this->get('buttonTypes'); }
    /** @param string|null $value */
    public function setButtonTypes(mixed $value): void { $this->set('buttonTypes', $value); }
    /** @param string|null $value */
    public function buttonTypes(mixed $value): static { return $this->set('buttonTypes', $value); }

    /** @return string|null */
    public function getBusinessName(): mixed { return $this->get('businessName'); }
    /** @param string|null $value */
    public function setBusinessName(mixed $value): void { $this->set('businessName', $value); }
    /** @param string|null $value */
    public function businessName(mixed $value): static { return $this->set('businessName', $value); }
}
