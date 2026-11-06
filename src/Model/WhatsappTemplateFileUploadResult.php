<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateFileUploadResult extends AbstractModel
{
    protected const FIELDS = [
        'headerHandle' => ['headerHandle', 'String'],
    ];

    /** @return string|null */
    public function getHeaderHandle(): mixed { return $this->get('headerHandle'); }
    /** @param string|null $value */
    public function setHeaderHandle(mixed $value): void { $this->set('headerHandle', $value); }
    /** @param string|null $value */
    public function headerHandle(mixed $value): static { return $this->set('headerHandle', $value); }
}
