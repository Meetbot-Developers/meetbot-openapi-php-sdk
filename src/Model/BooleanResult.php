<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BooleanResult extends AbstractModel
{
    protected const FIELDS = [
        'success' => ['success', 'Boolean'],
    ];
    protected const SCALAR = 'success';

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }
    public function isTrue(): bool { return $this->getSuccess() === true; }
}
