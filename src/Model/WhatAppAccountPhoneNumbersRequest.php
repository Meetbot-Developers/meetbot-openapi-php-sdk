<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatAppAccountPhoneNumbersRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
        'fields' => ['fields', 'List<String>'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }

    /** @return list<string>|null */
    public function getFields(): mixed { return $this->get('fields'); }
    /** @param list<string>|null $value */
    public function setFields(mixed $value): void { $this->set('fields', $value); }
    /** @param list<string>|null $value */
    public function fields(mixed $value): static { return $this->set('fields', $value); }
}
