<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class MessageOriginBatchQueryRequest extends AbstractModel
{
    protected const FIELDS = [
        'channel' => ['channel', 'Channel'],
        'channelMids' => ['channelMids', 'List<String>'],
    ];

    /** @return \Meetbot\OpenApi\Model\Enums\Channel|null */
    public function getChannel(): mixed { return $this->get('channel'); }
    /** @param \Meetbot\OpenApi\Model\Enums\Channel|null $value */
    public function setChannel(mixed $value): void { $this->set('channel', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\Channel|null $value */
    public function channel(mixed $value): static { return $this->set('channel', $value); }

    /** @return list<string>|null */
    public function getChannelMids(): mixed { return $this->get('channelMids'); }
    /** @param list<string>|null $value */
    public function setChannelMids(mixed $value): void { $this->set('channelMids', $value); }
    /** @param list<string>|null $value */
    public function channelMids(mixed $value): static { return $this->set('channelMids', $value); }
}
