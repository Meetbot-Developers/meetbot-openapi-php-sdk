<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateButton extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'text' => ['text', 'String'],
        'url' => ['url', 'String'],
        'phoneNumber' => ['phone_number', 'String'],
        'example' => ['example', 'List<String>'],
        'otpType' => ['otp_type', 'String'],
        'autofillText' => ['autofill_text', 'String'],
        'packageName' => ['package_name', 'String'],
        'signatureHash' => ['signature_hash', 'String'],
        'flowId' => ['flow_id', 'String'],
        'flowAction' => ['flow_action', 'String'],
        'navigateScreen' => ['navigate_screen', 'String'],
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
    public function getUrl(): mixed { return $this->get('url'); }
    /** @param string|null $value */
    public function setUrl(mixed $value): void { $this->set('url', $value); }
    /** @param string|null $value */
    public function url(mixed $value): static { return $this->set('url', $value); }

    /** @return string|null */
    public function getPhoneNumber(): mixed { return $this->get('phoneNumber'); }
    /** @param string|null $value */
    public function setPhoneNumber(mixed $value): void { $this->set('phoneNumber', $value); }
    /** @param string|null $value */
    public function phoneNumber(mixed $value): static { return $this->set('phoneNumber', $value); }

    /** @return list<string>|null */
    public function getExample(): mixed { return $this->get('example'); }
    /** @param list<string>|null $value */
    public function setExample(mixed $value): void { $this->set('example', $value); }
    /** @param list<string>|null $value */
    public function example(mixed $value): static { return $this->set('example', $value); }

    /** @return string|null */
    public function getOtpType(): mixed { return $this->get('otpType'); }
    /** @param string|null $value */
    public function setOtpType(mixed $value): void { $this->set('otpType', $value); }
    /** @param string|null $value */
    public function otpType(mixed $value): static { return $this->set('otpType', $value); }

    /** @return string|null */
    public function getAutofillText(): mixed { return $this->get('autofillText'); }
    /** @param string|null $value */
    public function setAutofillText(mixed $value): void { $this->set('autofillText', $value); }
    /** @param string|null $value */
    public function autofillText(mixed $value): static { return $this->set('autofillText', $value); }

    /** @return string|null */
    public function getPackageName(): mixed { return $this->get('packageName'); }
    /** @param string|null $value */
    public function setPackageName(mixed $value): void { $this->set('packageName', $value); }
    /** @param string|null $value */
    public function packageName(mixed $value): static { return $this->set('packageName', $value); }

    /** @return string|null */
    public function getSignatureHash(): mixed { return $this->get('signatureHash'); }
    /** @param string|null $value */
    public function setSignatureHash(mixed $value): void { $this->set('signatureHash', $value); }
    /** @param string|null $value */
    public function signatureHash(mixed $value): static { return $this->set('signatureHash', $value); }

    /** @return string|null */
    public function getFlowId(): mixed { return $this->get('flowId'); }
    /** @param string|null $value */
    public function setFlowId(mixed $value): void { $this->set('flowId', $value); }
    /** @param string|null $value */
    public function flowId(mixed $value): static { return $this->set('flowId', $value); }

    /** @return string|null */
    public function getFlowAction(): mixed { return $this->get('flowAction'); }
    /** @param string|null $value */
    public function setFlowAction(mixed $value): void { $this->set('flowAction', $value); }
    /** @param string|null $value */
    public function flowAction(mixed $value): static { return $this->set('flowAction', $value); }

    /** @return string|null */
    public function getNavigateScreen(): mixed { return $this->get('navigateScreen'); }
    /** @param string|null $value */
    public function setNavigateScreen(mixed $value): void { $this->set('navigateScreen', $value); }
    /** @param string|null $value */
    public function navigateScreen(mixed $value): static { return $this->set('navigateScreen', $value); }
}
