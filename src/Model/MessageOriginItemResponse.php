<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MessageOriginItemResponse extends AbstractModel
{
    protected const FIELDS = [
        'channelMid' => ['channelMid', 'String'],
        'sendSceneCode' => ['sendSceneCode', 'MessageOriginType'],
        'sendScene' => ['sendScene', 'String'],
        'sendSceneBusinessId' => ['sendSceneBusinessId', 'String'],
    ];

    /** @return string|null */
    public function getChannelMid(): mixed { return $this->get('channelMid'); }
    /** @param string|null $value */
    public function setChannelMid(mixed $value): void { $this->set('channelMid', $value); }
    /** @param string|null $value */
    public function channelMid(mixed $value): static { return $this->set('channelMid', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\MessageOriginType|null */
    public function getSendSceneCode(): mixed { return $this->get('sendSceneCode'); }
    /** @param \Meetbot\OpenApi\Model\Enums\MessageOriginType|null $value */
    public function setSendSceneCode(mixed $value): void { $this->set('sendSceneCode', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\MessageOriginType|null $value */
    public function sendSceneCode(mixed $value): static { return $this->set('sendSceneCode', $value); }

    /** @return string|null */
    public function getSendScene(): mixed { return $this->get('sendScene'); }
    /** @param string|null $value */
    public function setSendScene(mixed $value): void { $this->set('sendScene', $value); }
    /** @param string|null $value */
    public function sendScene(mixed $value): static { return $this->set('sendScene', $value); }

    /** @return string|null */
    public function getSendSceneBusinessId(): mixed { return $this->get('sendSceneBusinessId'); }
    /** @param string|null $value */
    public function setSendSceneBusinessId(mixed $value): void { $this->set('sendSceneBusinessId', $value); }
    /** @param string|null $value */
    public function sendSceneBusinessId(mixed $value): static { return $this->set('sendSceneBusinessId', $value); }
}
