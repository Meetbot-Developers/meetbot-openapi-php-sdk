<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class SendBlockMessageRequest extends AbstractModel
{
    protected const FIELDS = [
        'blockId' => ['blockId', 'Long'],
        'to' => ['to', 'String'],
        'sentAccount' => ['sentAccount', 'String'],
        'blockParamList' => ['blockParamList', 'List<BlockDynamicParamResponse>'],
    ];

    /** @return int|string|null */
    public function getBlockId(): mixed { return $this->get('blockId'); }
    /** @param int|string|null $value */
    public function setBlockId(mixed $value): void { $this->set('blockId', $value); }
    /** @param int|string|null $value */
    public function blockId(mixed $value): static { return $this->set('blockId', $value); }

    /** @return string|null */
    public function getTo(): mixed { return $this->get('to'); }
    /** @param string|null $value */
    public function setTo(mixed $value): void { $this->set('to', $value); }
    /** @param string|null $value */
    public function to(mixed $value): static { return $this->set('to', $value); }

    /** @return string|null */
    public function getSentAccount(): mixed { return $this->get('sentAccount'); }
    /** @param string|null $value */
    public function setSentAccount(mixed $value): void { $this->set('sentAccount', $value); }
    /** @param string|null $value */
    public function sentAccount(mixed $value): static { return $this->set('sentAccount', $value); }

    /** @return list<\Meetbot\OpenApi\Model\BlockDynamicParamResponse>|null */
    public function getBlockParamList(): mixed { return $this->get('blockParamList'); }
    /** @param list<\Meetbot\OpenApi\Model\BlockDynamicParamResponse>|null $value */
    public function setBlockParamList(mixed $value): void { $this->set('blockParamList', $value); }
    /** @param list<\Meetbot\OpenApi\Model\BlockDynamicParamResponse>|null $value */
    public function blockParamList(mixed $value): static { return $this->set('blockParamList', $value); }
}
