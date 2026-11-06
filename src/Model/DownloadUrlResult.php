<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class DownloadUrlResult extends AbstractModel
{
    protected const FIELDS = [
        'downloadUrl' => ['downloadUrl', 'String'],
    ];

    /** @return string|null */
    public function getDownloadUrl(): mixed { return $this->get('downloadUrl'); }
    /** @param string|null $value */
    public function setDownloadUrl(mixed $value): void { $this->set('downloadUrl', $value); }
    /** @param string|null $value */
    public function downloadUrl(mixed $value): static { return $this->set('downloadUrl', $value); }
}
