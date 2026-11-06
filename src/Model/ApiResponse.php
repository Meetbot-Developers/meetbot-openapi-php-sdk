<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ApiResponse extends AbstractModel
{
    protected const FIELDS = [
        'code' => ['code', 'Integer'],
        'message' => ['message', 'String'],
        'result' => ['result', 'T'],
        'traceId' => ['traceId', 'String'],
        'success' => ['success', 'Boolean'],
    ];

    /** @return int|null */
    public function getCode(): mixed { return $this->get('code'); }
    /** @param int|null $value */
    public function setCode(mixed $value): void { $this->set('code', $value); }
    /** @param int|null $value */
    public function code(mixed $value): static { return $this->set('code', $value); }

    /** @return string|null */
    public function getMessage(): mixed { return $this->get('message'); }
    /** @param string|null $value */
    public function setMessage(mixed $value): void { $this->set('message', $value); }
    /** @param string|null $value */
    public function message(mixed $value): static { return $this->set('message', $value); }

    /** @return mixed|null */
    public function getResult(): mixed { return $this->get('result'); }
    /** @param mixed|null $value */
    public function setResult(mixed $value): void { $this->set('result', $value); }
    /** @param mixed|null $value */
    public function result(mixed $value): static { return $this->set('result', $value); }

    /** @return string|null */
    public function getTraceId(): mixed { return $this->get('traceId'); }
    /** @param string|null $value */
    public function setTraceId(mixed $value): void { $this->set('traceId', $value); }
    /** @param string|null $value */
    public function traceId(mixed $value): static { return $this->set('traceId', $value); }

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }
    public function isSuccessful(): bool { return $this->getSuccess() ?? ($this->getCode() === 0); }
}
