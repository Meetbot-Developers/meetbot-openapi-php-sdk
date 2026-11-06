<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class PreviewUrlResult extends AbstractModel
{
    protected const FIELDS = [
        'previewUrl' => ['previewUrl', 'String'],
    ];

    /** @return string|null */
    public function getPreviewUrl(): mixed { return $this->get('previewUrl'); }
    /** @param string|null $value */
    public function setPreviewUrl(mixed $value): void { $this->set('previewUrl', $value); }
    /** @param string|null $value */
    public function previewUrl(mixed $value): static { return $this->set('previewUrl', $value); }
}
