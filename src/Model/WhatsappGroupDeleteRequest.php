<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupDeleteRequest extends AbstractModel
{
    protected const FIELDS = [
        'groupId' => ['groupId', 'String'],
    ];

    /** @return string|null */
    public function getGroupId(): mixed { return $this->get('groupId'); }
    /** @param string|null $value */
    public function setGroupId(mixed $value): void { $this->set('groupId', $value); }
    /** @param string|null $value */
    public function groupId(mixed $value): static { return $this->set('groupId', $value); }
}
