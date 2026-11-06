<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappMessageParameter extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'text' => ['text', 'String'],
        'payload' => ['payload', 'String'],
        'parameterName' => ['parameter_name', 'String'],
        'couponCode' => ['coupon_code', 'String'],
        'image' => ['image', 'WhatsappMediaObject'],
        'video' => ['video', 'WhatsappMediaObject'],
        'document' => ['document', 'WhatsappMediaObject'],
        'audio' => ['audio', 'WhatsappMediaObject'],
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
    public function getPayload(): mixed { return $this->get('payload'); }
    /** @param string|null $value */
    public function setPayload(mixed $value): void { $this->set('payload', $value); }
    /** @param string|null $value */
    public function payload(mixed $value): static { return $this->set('payload', $value); }

    /** @return string|null */
    public function getParameterName(): mixed { return $this->get('parameterName'); }
    /** @param string|null $value */
    public function setParameterName(mixed $value): void { $this->set('parameterName', $value); }
    /** @param string|null $value */
    public function parameterName(mixed $value): static { return $this->set('parameterName', $value); }

    /** @return string|null */
    public function getCouponCode(): mixed { return $this->get('couponCode'); }
    /** @param string|null $value */
    public function setCouponCode(mixed $value): void { $this->set('couponCode', $value); }
    /** @param string|null $value */
    public function couponCode(mixed $value): static { return $this->set('couponCode', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getImage(): mixed { return $this->get('image'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setImage(mixed $value): void { $this->set('image', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function image(mixed $value): static { return $this->set('image', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getVideo(): mixed { return $this->get('video'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setVideo(mixed $value): void { $this->set('video', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function video(mixed $value): static { return $this->set('video', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getDocument(): mixed { return $this->get('document'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setDocument(mixed $value): void { $this->set('document', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function document(mixed $value): static { return $this->set('document', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getAudio(): mixed { return $this->get('audio'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setAudio(mixed $value): void { $this->set('audio', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function audio(mixed $value): static { return $this->set('audio', $value); }
}
