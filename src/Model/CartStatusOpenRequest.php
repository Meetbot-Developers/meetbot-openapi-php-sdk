<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CartStatusOpenRequest extends AbstractModel
{
    protected const FIELDS = [
        'whatsappBusinessAccountId' => ['whatsappBusinessAccountId', 'String'],
    ];

    /** @return string|null */
    public function getWhatsappBusinessAccountId(): mixed { return $this->get('whatsappBusinessAccountId'); }
    /** @param string|null $value */
    public function setWhatsappBusinessAccountId(mixed $value): void { $this->set('whatsappBusinessAccountId', $value); }
    /** @param string|null $value */
    public function whatsappBusinessAccountId(mixed $value): static { return $this->set('whatsappBusinessAccountId', $value); }
}
