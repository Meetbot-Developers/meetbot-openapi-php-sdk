<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CatalogProductUploadResultMessage extends AbstractModel
{
    protected const FIELDS = [
        'taskId' => ['taskId', 'Long'],
        'storeId' => ['storeId', 'Long'],
        'catalogId' => ['catalogId', 'String'],
        'total' => ['total', 'Long'],
        'success' => ['success', 'Long'],
        'fail' => ['fail', 'Long'],
        'failFileUrl' => ['failFileUrl', 'String'],
        'errorMsg' => ['errorMsg', 'String'],
    ];

    /** @return int|string|null */
    public function getTaskId(): mixed { return $this->get('taskId'); }
    /** @param int|string|null $value */
    public function setTaskId(mixed $value): void { $this->set('taskId', $value); }
    /** @param int|string|null $value */
    public function taskId(mixed $value): static { return $this->set('taskId', $value); }

    /** @return int|string|null */
    public function getStoreId(): mixed { return $this->get('storeId'); }
    /** @param int|string|null $value */
    public function setStoreId(mixed $value): void { $this->set('storeId', $value); }
    /** @param int|string|null $value */
    public function storeId(mixed $value): static { return $this->set('storeId', $value); }

    /** @return string|null */
    public function getCatalogId(): mixed { return $this->get('catalogId'); }
    /** @param string|null $value */
    public function setCatalogId(mixed $value): void { $this->set('catalogId', $value); }
    /** @param string|null $value */
    public function catalogId(mixed $value): static { return $this->set('catalogId', $value); }

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
    public function getFailFileUrl(): mixed { return $this->get('failFileUrl'); }
    /** @param string|null $value */
    public function setFailFileUrl(mixed $value): void { $this->set('failFileUrl', $value); }
    /** @param string|null $value */
    public function failFileUrl(mixed $value): static { return $this->set('failFileUrl', $value); }

    /** @return string|null */
    public function getErrorMsg(): mixed { return $this->get('errorMsg'); }
    /** @param string|null $value */
    public function setErrorMsg(mixed $value): void { $this->set('errorMsg', $value); }
    /** @param string|null $value */
    public function errorMsg(mixed $value): static { return $this->set('errorMsg', $value); }
}
