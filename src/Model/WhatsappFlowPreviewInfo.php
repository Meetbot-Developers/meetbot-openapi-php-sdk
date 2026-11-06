<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowPreviewInfo extends AbstractModel
{
    protected const FIELDS = [
        'previewUrl' => ['preview_url', 'String'],
        'expiresAt' => ['expires_at', 'String'],
    ];

    /** @return string|null */
    public function getPreviewUrl(): mixed { return $this->get('previewUrl'); }
    /** @param string|null $value */
    public function setPreviewUrl(mixed $value): void { $this->set('previewUrl', $value); }
    /** @param string|null $value */
    public function previewUrl(mixed $value): static { return $this->set('previewUrl', $value); }

    /** @return string|null */
    public function getExpiresAt(): mixed { return $this->get('expiresAt'); }
    /** @param string|null $value */
    public function setExpiresAt(mixed $value): void { $this->set('expiresAt', $value); }
    /** @param string|null $value */
    public function expiresAt(mixed $value): static { return $this->set('expiresAt', $value); }
}
