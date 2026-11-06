<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MetaValidationError extends AbstractModel
{
    protected const FIELDS = [
        'errorCode' => ['error_code', 'String'],
        'errorDescription' => ['error_description', 'String'],
        'possibleSolution' => ['possible_solution', 'String'],
        'message' => ['message', 'String'],
        'pointers' => ['pointers', 'List<Map<String,Object>>'],
    ];

    /** @return string|null */
    public function getErrorCode(): mixed { return $this->get('errorCode'); }
    /** @param string|null $value */
    public function setErrorCode(mixed $value): void { $this->set('errorCode', $value); }
    /** @param string|null $value */
    public function errorCode(mixed $value): static { return $this->set('errorCode', $value); }

    /** @return string|null */
    public function getErrorDescription(): mixed { return $this->get('errorDescription'); }
    /** @param string|null $value */
    public function setErrorDescription(mixed $value): void { $this->set('errorDescription', $value); }
    /** @param string|null $value */
    public function errorDescription(mixed $value): static { return $this->set('errorDescription', $value); }

    /** @return string|null */
    public function getPossibleSolution(): mixed { return $this->get('possibleSolution'); }
    /** @param string|null $value */
    public function setPossibleSolution(mixed $value): void { $this->set('possibleSolution', $value); }
    /** @param string|null $value */
    public function possibleSolution(mixed $value): static { return $this->set('possibleSolution', $value); }

    /** @return string|null */
    public function getMessage(): mixed { return $this->get('message'); }
    /** @param string|null $value */
    public function setMessage(mixed $value): void { $this->set('message', $value); }
    /** @param string|null $value */
    public function message(mixed $value): static { return $this->set('message', $value); }

    /** @return list<array<string, mixed>|\stdClass>|null */
    public function getPointers(): mixed { return $this->get('pointers'); }
    /** @param list<array<string, mixed>|\stdClass>|null $value */
    public function setPointers(mixed $value): void { $this->set('pointers', $value); }
    /** @param list<array<string, mixed>|\stdClass>|null $value */
    public function pointers(mixed $value): static { return $this->set('pointers', $value); }
}
