<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappCallingSession extends AbstractModel
{
    protected const FIELDS = [
        'sdpType' => ['sdp_type', 'SdpType'],
        'sdp' => ['sdp', 'String'],
    ];

    /** @return \Meetbot\OpenApi\Model\Enums\SdpType|null */
    public function getSdpType(): mixed { return $this->get('sdpType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\SdpType|null $value */
    public function setSdpType(mixed $value): void { $this->set('sdpType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\SdpType|null $value */
    public function sdpType(mixed $value): static { return $this->set('sdpType', $value); }

    /** @return string|null */
    public function getSdp(): mixed { return $this->get('sdp'); }
    /** @param string|null $value */
    public function setSdp(mixed $value): void { $this->set('sdp', $value); }
    /** @param string|null $value */
    public function sdp(mixed $value): static { return $this->set('sdp', $value); }
}
