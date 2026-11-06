<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateFileUplodRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
        'fileUrl' => ['fileUrl', 'String'],
        'fileType' => ['fileType', 'String'],
        'fileLength' => ['fileLength', 'Long'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }

    /** @return string|null */
    public function getFileUrl(): mixed { return $this->get('fileUrl'); }
    /** @param string|null $value */
    public function setFileUrl(mixed $value): void { $this->set('fileUrl', $value); }
    /** @param string|null $value */
    public function fileUrl(mixed $value): static { return $this->set('fileUrl', $value); }

    /** @return string|null */
    public function getFileType(): mixed { return $this->get('fileType'); }
    /** @param string|null $value */
    public function setFileType(mixed $value): void { $this->set('fileType', $value); }
    /** @param string|null $value */
    public function fileType(mixed $value): static { return $this->set('fileType', $value); }

    /** @return int|string|null */
    public function getFileLength(): mixed { return $this->get('fileLength'); }
    /** @param int|string|null $value */
    public function setFileLength(mixed $value): void { $this->set('fileLength', $value); }
    /** @param int|string|null $value */
    public function fileLength(mixed $value): static { return $this->set('fileLength', $value); }
}
