<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MediaFileDownloadRequest extends AbstractModel
{
    protected const FIELDS = [
        'mediaId' => ['mediaId', 'String'],
        'mineType' => ['mineType', 'String'],
    ];

    /** @return string|null */
    public function getMediaId(): mixed { return $this->get('mediaId'); }
    /** @param string|null $value */
    public function setMediaId(mixed $value): void { $this->set('mediaId', $value); }
    /** @param string|null $value */
    public function mediaId(mixed $value): static { return $this->set('mediaId', $value); }

    /** @return string|null */
    public function getMineType(): mixed { return $this->get('mineType'); }
    /** @param string|null $value */
    public function setMineType(mixed $value): void { $this->set('mineType', $value); }
    /** @param string|null $value */
    public function mineType(mixed $value): static { return $this->set('mineType', $value); }
}
