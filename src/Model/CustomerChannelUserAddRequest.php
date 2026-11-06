<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CustomerChannelUserAddRequest extends AbstractModel
{
    protected const FIELDS = [
        'userMobile' => ['userMobile', 'String'],
        'whatsappMobile' => ['whatsappMobile', 'String'],
        'userId' => ['userId', 'String'],
        'tags' => ['tags', 'List<CustomerChannelUserAddTagRequest>'],
    ];

    /** @return string|null */
    public function getUserMobile(): mixed { return $this->get('userMobile'); }
    /** @param string|null $value */
    public function setUserMobile(mixed $value): void { $this->set('userMobile', $value); }
    /** @param string|null $value */
    public function userMobile(mixed $value): static { return $this->set('userMobile', $value); }

    /** @return string|null */
    public function getWhatsappMobile(): mixed { return $this->get('whatsappMobile'); }
    /** @param string|null $value */
    public function setWhatsappMobile(mixed $value): void { $this->set('whatsappMobile', $value); }
    /** @param string|null $value */
    public function whatsappMobile(mixed $value): static { return $this->set('whatsappMobile', $value); }

    /** @return string|null */
    public function getUserId(): mixed { return $this->get('userId'); }
    /** @param string|null $value */
    public function setUserId(mixed $value): void { $this->set('userId', $value); }
    /** @param string|null $value */
    public function userId(mixed $value): static { return $this->set('userId', $value); }

    /** @return list<\Meetbot\OpenApi\Model\CustomerChannelUserAddTagRequest>|null */
    public function getTags(): mixed { return $this->get('tags'); }
    /** @param list<\Meetbot\OpenApi\Model\CustomerChannelUserAddTagRequest>|null $value */
    public function setTags(mixed $value): void { $this->set('tags', $value); }
    /** @param list<\Meetbot\OpenApi\Model\CustomerChannelUserAddTagRequest>|null $value */
    public function tags(mixed $value): static { return $this->set('tags', $value); }
}
