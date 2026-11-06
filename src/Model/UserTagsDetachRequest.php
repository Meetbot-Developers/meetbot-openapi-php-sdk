<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class UserTagsDetachRequest extends AbstractModel
{
    protected const FIELDS = [
        'userId' => ['userId', 'String'],
        'channel' => ['channel', 'Channel'],
        'valueId' => ['valueId', 'String'],
    ];

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\Channel|null */
    public function getChannel(): mixed { return $this->get('channel'); }
    /** @param \Meetbot\OpenApi\Model\Enums\Channel|null $value */
    public function setChannel(mixed $value): void { $this->set('channel', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\Channel|null $value */
    public function channel(mixed $value): static { return $this->set('channel', $value); }

    /** @return string|null */
    public function getValueId(): mixed { return $this->get('valueId'); }
    /** @param string|null $value */
    public function setValueId(mixed $value): void { $this->set('valueId', $value); }
    /** @param string|null $value */
    public function valueId(mixed $value): static { return $this->set('valueId', $value); }
}
