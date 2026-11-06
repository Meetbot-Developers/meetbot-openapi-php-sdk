<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ProductBatchImportTaskDetailOpenResponse extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'Long'],
        'finishTime' => ['finishTime', 'Long'],
        'importFileName' => ['importFileName', 'String'],
        'total' => ['total', 'Long'],
        'success' => ['success', 'Long'],
        'fail' => ['fail', 'Long'],
        'errorDetailStoryKey' => ['errorDetailStoryKey', 'String'],
        'errorDetailUrl' => ['errorDetailUrl', 'String'],
        'status' => ['status', 'Long'],
        'statusDesc' => ['statusDesc', 'String'],
    ];

    /** @return int|string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param int|string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param int|string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return int|string|null */
    public function getFinishTime(): mixed { return $this->get('finishTime'); }
    /** @param int|string|null $value */
    public function setFinishTime(mixed $value): void { $this->set('finishTime', $value); }
    /** @param int|string|null $value */
    public function finishTime(mixed $value): static { return $this->set('finishTime', $value); }

    /** @return string|null */
    public function getImportFileName(): mixed { return $this->get('importFileName'); }
    /** @param string|null $value */
    public function setImportFileName(mixed $value): void { $this->set('importFileName', $value); }
    /** @param string|null $value */
    public function importFileName(mixed $value): static { return $this->set('importFileName', $value); }

    /** @return int|string|null */
    public function getTotal(): mixed { return $this->get('total'); }
    /** @param int|string|null $value */
    public function setTotal(mixed $value): void { $this->set('total', $value); }
    /** @param int|string|null $value */
    public function total(mixed $value): static { return $this->set('total', $value); }

    /** @return int|string|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param int|string|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param int|string|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }

    /** @return int|string|null */
    public function getFail(): mixed { return $this->get('fail'); }
    /** @param int|string|null $value */
    public function setFail(mixed $value): void { $this->set('fail', $value); }
    /** @param int|string|null $value */
    public function fail(mixed $value): static { return $this->set('fail', $value); }

    /** @return string|null */
    public function getErrorDetailStoryKey(): mixed { return $this->get('errorDetailStoryKey'); }
    /** @param string|null $value */
    public function setErrorDetailStoryKey(mixed $value): void { $this->set('errorDetailStoryKey', $value); }
    /** @param string|null $value */
    public function errorDetailStoryKey(mixed $value): static { return $this->set('errorDetailStoryKey', $value); }

    /** @return string|null */
    public function getErrorDetailUrl(): mixed { return $this->get('errorDetailUrl'); }
    /** @param string|null $value */
    public function setErrorDetailUrl(mixed $value): void { $this->set('errorDetailUrl', $value); }
    /** @param string|null $value */
    public function errorDetailUrl(mixed $value): static { return $this->set('errorDetailUrl', $value); }

    /** @return int|string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param int|string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param int|string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return string|null */
    public function getStatusDesc(): mixed { return $this->get('statusDesc'); }
    /** @param string|null $value */
    public function setStatusDesc(mixed $value): void { $this->set('statusDesc', $value); }
    /** @param string|null $value */
    public function statusDesc(mixed $value): static { return $this->set('statusDesc', $value); }
}
