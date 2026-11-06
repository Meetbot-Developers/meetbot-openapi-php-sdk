<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappContactObject extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'WhatsappContactName'],
        'birthday' => ['birthday', 'String'],
        'org' => ['org', 'WhatsappContactOrg'],
        'phones' => ['phones', 'List<WhatsappContactPhone>'],
        'emails' => ['emails', 'List<WhatsappContactEmail>'],
        'urls' => ['urls', 'List<WhatsappContactUrl>'],
        'addresses' => ['addresses', 'List<WhatsappContactAddress>'],
    ];

    /** @return \Meetbot\OpenApi\Model\WhatsappContactName|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContactName|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContactName|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getBirthday(): mixed { return $this->get('birthday'); }
    /** @param string|null $value */
    public function setBirthday(mixed $value): void { $this->set('birthday', $value); }
    /** @param string|null $value */
    public function birthday(mixed $value): static { return $this->set('birthday', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappContactOrg|null */
    public function getOrg(): mixed { return $this->get('org'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContactOrg|null $value */
    public function setOrg(mixed $value): void { $this->set('org', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContactOrg|null $value */
    public function org(mixed $value): static { return $this->set('org', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappContactPhone>|null */
    public function getPhones(): mixed { return $this->get('phones'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactPhone>|null $value */
    public function setPhones(mixed $value): void { $this->set('phones', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactPhone>|null $value */
    public function phones(mixed $value): static { return $this->set('phones', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappContactEmail>|null */
    public function getEmails(): mixed { return $this->get('emails'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactEmail>|null $value */
    public function setEmails(mixed $value): void { $this->set('emails', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactEmail>|null $value */
    public function emails(mixed $value): static { return $this->set('emails', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappContactUrl>|null */
    public function getUrls(): mixed { return $this->get('urls'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactUrl>|null $value */
    public function setUrls(mixed $value): void { $this->set('urls', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactUrl>|null $value */
    public function urls(mixed $value): static { return $this->set('urls', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappContactAddress>|null */
    public function getAddresses(): mixed { return $this->get('addresses'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactAddress>|null $value */
    public function setAddresses(mixed $value): void { $this->set('addresses', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactAddress>|null $value */
    public function addresses(mixed $value): static { return $this->set('addresses', $value); }
}
