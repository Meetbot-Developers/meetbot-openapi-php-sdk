<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactName extends AbstractModel
{
    protected const FIELDS = [
        'formattedName' => ['formatted_name', 'String'],
        'firstName' => ['first_name', 'String'],
        'lastName' => ['last_name', 'String'],
        'middleName' => ['middle_name', 'String'],
        'suffix' => ['suffix', 'String'],
        'prefix' => ['prefix', 'String'],
    ];

    /** @return string|null */
    public function getFormattedName(): mixed { return $this->get('formattedName'); }
    /** @param string|null $value */
    public function setFormattedName(mixed $value): void { $this->set('formattedName', $value); }
    /** @param string|null $value */
    public function formattedName(mixed $value): static { return $this->set('formattedName', $value); }

    /** @return string|null */
    public function getFirstName(): mixed { return $this->get('firstName'); }
    /** @param string|null $value */
    public function setFirstName(mixed $value): void { $this->set('firstName', $value); }
    /** @param string|null $value */
    public function firstName(mixed $value): static { return $this->set('firstName', $value); }

    /** @return string|null */
    public function getLastName(): mixed { return $this->get('lastName'); }
    /** @param string|null $value */
    public function setLastName(mixed $value): void { $this->set('lastName', $value); }
    /** @param string|null $value */
    public function lastName(mixed $value): static { return $this->set('lastName', $value); }

    /** @return string|null */
    public function getMiddleName(): mixed { return $this->get('middleName'); }
    /** @param string|null $value */
    public function setMiddleName(mixed $value): void { $this->set('middleName', $value); }
    /** @param string|null $value */
    public function middleName(mixed $value): static { return $this->set('middleName', $value); }

    /** @return string|null */
    public function getSuffix(): mixed { return $this->get('suffix'); }
    /** @param string|null $value */
    public function setSuffix(mixed $value): void { $this->set('suffix', $value); }
    /** @param string|null $value */
    public function suffix(mixed $value): static { return $this->set('suffix', $value); }

    /** @return string|null */
    public function getPrefix(): mixed { return $this->get('prefix'); }
    /** @param string|null $value */
    public function setPrefix(mixed $value): void { $this->set('prefix', $value); }
    /** @param string|null $value */
    public function prefix(mixed $value): static { return $this->set('prefix', $value); }
}
