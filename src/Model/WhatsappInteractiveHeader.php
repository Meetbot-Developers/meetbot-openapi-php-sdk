<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappInteractiveHeader extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'text' => ['text', 'String'],
        'image' => ['image', 'WhatsappMediaObject'],
        'video' => ['video', 'WhatsappMediaObject'],
        'document' => ['document', 'WhatsappMediaObject'],
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
}
