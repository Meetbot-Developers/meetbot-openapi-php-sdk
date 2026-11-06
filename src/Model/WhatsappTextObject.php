<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTextObject extends AbstractModel
{
    protected const FIELDS = [
        'previewUrl' => ['preview_url', 'Boolean'],
        'body' => ['body', 'String'],
    ];

    /** @return bool|null */
    public function getPreviewUrl(): mixed { return $this->get('previewUrl'); }
    /** @param bool|null $value */
    public function setPreviewUrl(mixed $value): void { $this->set('previewUrl', $value); }
    /** @param bool|null $value */
    public function previewUrl(mixed $value): static { return $this->set('previewUrl', $value); }

    /** @return string|null */
    public function getBody(): mixed { return $this->get('body'); }
    /** @param string|null $value */
    public function setBody(mixed $value): void { $this->set('body', $value); }
    /** @param string|null $value */
    public function body(mixed $value): static { return $this->set('body', $value); }
}
