<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class BizSyncBatchResponse extends AbstractModel
{
    protected const FIELDS = [
        'acceptedCount' => ['acceptedCount', 'Long'],
        'errors' => ['errors', 'List<BizSyncErrorDetail>'],
    ];

    /** @return int|string|null */
    public function getAcceptedCount(): mixed { return $this->get('acceptedCount'); }
    /** @param int|string|null $value */
    public function setAcceptedCount(mixed $value): void { $this->set('acceptedCount', $value); }
    /** @param int|string|null $value */
    public function acceptedCount(mixed $value): static { return $this->set('acceptedCount', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BizSyncErrorDetail>|null */
    public function getErrors(): mixed { return $this->get('errors'); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncErrorDetail>|null $value */
    public function setErrors(mixed $value): void { $this->set('errors', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BizSyncErrorDetail>|null $value */
    public function errors(mixed $value): static { return $this->set('errors', $value); }
}
