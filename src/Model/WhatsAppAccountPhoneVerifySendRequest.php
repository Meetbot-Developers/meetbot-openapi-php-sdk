<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsAppAccountPhoneVerifySendRequest extends AbstractModel
{
    protected const FIELDS = [
        'language' => ['language', 'String'],
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'codeMethod' => ['codeMethod', 'String'],
    ];

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return string|null */
    public function getCodeMethod(): mixed { return $this->get('codeMethod'); }
    /** @param string|null $value */
    public function setCodeMethod(mixed $value): void { $this->set('codeMethod', $value); }
    /** @param string|null $value */
    public function codeMethod(mixed $value): static { return $this->set('codeMethod', $value); }
}
