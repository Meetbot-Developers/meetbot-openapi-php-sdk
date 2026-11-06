<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogProductHandleResultMessage extends AbstractModel
{
    protected const FIELDS = [
        'success' => ['success', 'Boolean'],
        'failReason' => ['failReason', 'String'],
    ];

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }

    /** @return string|null */
    public function getFailReason(): mixed { return $this->get('failReason'); }
    /** @param string|null $value */
    public function setFailReason(mixed $value): void { $this->set('failReason', $value); }
    /** @param string|null $value */
    public function failReason(mixed $value): static { return $this->set('failReason', $value); }
}
