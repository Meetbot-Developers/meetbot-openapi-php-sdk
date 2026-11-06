<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncErrorDetail extends AbstractModel
{
    protected const FIELDS = [
        'index' => ['index', 'Long'],
        'code' => ['code', 'Long'],
        'message' => ['message', 'String'],
    ];

    /** @return int|string|null */
    public function getIndex(): mixed { return $this->get('index'); }
    /** @param int|string|null $value */
    public function setIndex(mixed $value): void { $this->set('index', $value); }
    /** @param int|string|null $value */
    public function index(mixed $value): static { return $this->set('index', $value); }

    /** @return int|string|null */
    public function getCode(): mixed { return $this->get('code'); }
    /** @param int|string|null $value */
    public function setCode(mixed $value): void { $this->set('code', $value); }
    /** @param int|string|null $value */
    public function code(mixed $value): static { return $this->set('code', $value); }

    /** @return string|null */
    public function getMessage(): mixed { return $this->get('message'); }
    /** @param string|null $value */
    public function setMessage(mixed $value): void { $this->set('message', $value); }
    /** @param string|null $value */
    public function message(mixed $value): static { return $this->set('message', $value); }
}
