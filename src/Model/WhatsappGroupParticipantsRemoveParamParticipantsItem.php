<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappGroupParticipantsRemoveParamParticipantsItem extends AbstractModel
{
    protected const FIELDS = [
        'user' => ['user', 'String'],
        'userId' => ['user_id', 'String'],
    ];

    /** @return string|null */
    public function getUser(): mixed { return $this->get('user'); }
    /** @param string|null $value */
    public function setUser(mixed $value): void { $this->set('user', $value); }
    /** @param string|null $value */
    public function user(mixed $value): static { return $this->set('user', $value); }

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }
}
