<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatAppAccountProfileRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'fields' => ['fields', 'List<String>'],
    ];

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return list<string>|null */
    public function getFields(): mixed { return $this->get('fields'); }
    /** @param list<string>|null $value */
    public function setFields(mixed $value): void { $this->set('fields', $value); }
    /** @param list<string>|null $value */
    public function fields(mixed $value): static { return $this->set('fields', $value); }
}
