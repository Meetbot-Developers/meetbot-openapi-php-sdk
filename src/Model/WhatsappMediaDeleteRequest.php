<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappMediaDeleteRequest extends AbstractModel
{
    protected const FIELDS = [
        'mediaId' => ['mediaId', 'String'],
    ];

    /** @return string|null */
    public function getMediaId(): mixed { return $this->get('mediaId'); }
    /** @param string|null $value */
    public function setMediaId(mixed $value): void { $this->set('mediaId', $value); }
    /** @param string|null $value */
    public function mediaId(mixed $value): static { return $this->set('mediaId', $value); }
}
