<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MediaFileUploadRequest extends AbstractModel
{
    protected const FIELDS = [
        'fileUrl' => ['fileUrl', 'String'],
        'type' => ['type', 'String'],
        'phoneNumberId' => ['phoneNumberId', 'String'],
    ];

    /** @return string|null */
    public function getFileUrl(): mixed { return $this->get('fileUrl'); }
    /** @param string|null $value */
    public function setFileUrl(mixed $value): void { $this->set('fileUrl', $value); }
    /** @param string|null $value */
    public function fileUrl(mixed $value): static { return $this->set('fileUrl', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }
}
