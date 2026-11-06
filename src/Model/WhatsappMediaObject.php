<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappMediaObject extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'link' => ['link', 'String'],
        'caption' => ['caption', 'String'],
        'filename' => ['filename', 'String'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getLink(): mixed { return $this->get('link'); }
    /** @param string|null $value */
    public function setLink(mixed $value): void { $this->set('link', $value); }
    /** @param string|null $value */
    public function link(mixed $value): static { return $this->set('link', $value); }

    /** @return string|null */
    public function getCaption(): mixed { return $this->get('caption'); }
    /** @param string|null $value */
    public function setCaption(mixed $value): void { $this->set('caption', $value); }
    /** @param string|null $value */
    public function caption(mixed $value): static { return $this->set('caption', $value); }

    /** @return string|null */
    public function getFilename(): mixed { return $this->get('filename'); }
    /** @param string|null $value */
    public function setFilename(mixed $value): void { $this->set('filename', $value); }
    /** @param string|null $value */
    public function filename(mixed $value): static { return $this->set('filename', $value); }
}
