<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MetaSuccessResult extends AbstractModel
{
    protected const FIELDS = [
        'success' => ['success', 'Boolean'],
        'messagingProduct' => ['messaging_product', 'String'],
    ];

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }
}
