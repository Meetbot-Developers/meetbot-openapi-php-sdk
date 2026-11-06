<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogListOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'businessId' => ['businessId', 'String'],
    ];

    /** @return string|null */
    public function getBusinessId(): mixed { return $this->get('businessId'); }
    /** @param string|null $value */
    public function setBusinessId(mixed $value): void { $this->set('businessId', $value); }
    /** @param string|null $value */
    public function businessId(mixed $value): static { return $this->set('businessId', $value); }
}
