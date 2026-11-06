<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatAppAccountBusinessManagerInfoRequest extends AbstractModel
{
    protected const FIELDS = [
        'businessId' => ['businessId', 'String'],
        'fields' => ['fields', 'List<String>'],
    ];

    /** @return string|null */
    public function getBusinessId(): mixed { return $this->get('businessId'); }
    /** @param string|null $value */
    public function setBusinessId(mixed $value): void { $this->set('businessId', $value); }
    /** @param string|null $value */
    public function businessId(mixed $value): static { return $this->set('businessId', $value); }

    /** @return list<string>|null */
    public function getFields(): mixed { return $this->get('fields'); }
    /** @param list<string>|null $value */
    public function setFields(mixed $value): void { $this->set('fields', $value); }
    /** @param list<string>|null $value */
    public function fields(mixed $value): static { return $this->set('fields', $value); }
}
