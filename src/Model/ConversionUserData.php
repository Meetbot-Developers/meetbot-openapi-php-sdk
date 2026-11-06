<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ConversionUserData extends AbstractModel
{
    protected const FIELDS = [
        'em' => ['em', 'List<String>'],
        'ph' => ['ph', 'List<String>'],
        'fn' => ['fn', 'List<String>'],
        'ln' => ['ln', 'List<String>'],
        'ge' => ['ge', 'List<String>'],
        'db' => ['db', 'List<String>'],
        'ct' => ['ct', 'List<String>'],
        'st' => ['st', 'List<String>'],
        'zp' => ['zp', 'List<String>'],
        'country' => ['country', 'List<String>'],
        'externalId' => ['external_id', 'List<String>'],
        'clientIpAddress' => ['client_ip_address', 'String'],
        'clientUserAgent' => ['client_user_agent', 'String'],
        'fbc' => ['fbc', 'String'],
        'fbp' => ['fbp', 'String'],
        'subscriptionId' => ['subscription_id', 'String'],
        'fbLoginId' => ['fb_login_id', 'String'],
        'leadId' => ['lead_id', 'String'],
        'ctwaClid' => ['ctwa_clid', 'String'],
    ];

    /** @return list<string>|null */
    public function getEm(): mixed { return $this->get('em'); }
    /** @param list<string>|null $value */
    public function setEm(mixed $value): void { $this->set('em', $value); }
    /** @param list<string>|null $value */
    public function em(mixed $value): static { return $this->set('em', $value); }

    /** @return list<string>|null */
    public function getPh(): mixed { return $this->get('ph'); }
    /** @param list<string>|null $value */
    public function setPh(mixed $value): void { $this->set('ph', $value); }
    /** @param list<string>|null $value */
    public function ph(mixed $value): static { return $this->set('ph', $value); }

    /** @return list<string>|null */
    public function getFn(): mixed { return $this->get('fn'); }
    /** @param list<string>|null $value */
    public function setFn(mixed $value): void { $this->set('fn', $value); }
    /** @param list<string>|null $value */
    public function fn(mixed $value): static { return $this->set('fn', $value); }

    /** @return list<string>|null */
    public function getLn(): mixed { return $this->get('ln'); }
    /** @param list<string>|null $value */
    public function setLn(mixed $value): void { $this->set('ln', $value); }
    /** @param list<string>|null $value */
    public function ln(mixed $value): static { return $this->set('ln', $value); }

    /** @return list<string>|null */
    public function getGe(): mixed { return $this->get('ge'); }
    /** @param list<string>|null $value */
    public function setGe(mixed $value): void { $this->set('ge', $value); }
    /** @param list<string>|null $value */
    public function ge(mixed $value): static { return $this->set('ge', $value); }

    /** @return list<string>|null */
    public function getDb(): mixed { return $this->get('db'); }
    /** @param list<string>|null $value */
    public function setDb(mixed $value): void { $this->set('db', $value); }
    /** @param list<string>|null $value */
    public function db(mixed $value): static { return $this->set('db', $value); }

    /** @return list<string>|null */
    public function getCt(): mixed { return $this->get('ct'); }
    /** @param list<string>|null $value */
    public function setCt(mixed $value): void { $this->set('ct', $value); }
    /** @param list<string>|null $value */
    public function ct(mixed $value): static { return $this->set('ct', $value); }

    /** @return list<string>|null */
    public function getSt(): mixed { return $this->get('st'); }
    /** @param list<string>|null $value */
    public function setSt(mixed $value): void { $this->set('st', $value); }
    /** @param list<string>|null $value */
    public function st(mixed $value): static { return $this->set('st', $value); }

    /** @return list<string>|null */
    public function getZp(): mixed { return $this->get('zp'); }
    /** @param list<string>|null $value */
    public function setZp(mixed $value): void { $this->set('zp', $value); }
    /** @param list<string>|null $value */
    public function zp(mixed $value): static { return $this->set('zp', $value); }

    /** @return list<string>|null */
    public function getCountry(): mixed { return $this->get('country'); }
    /** @param list<string>|null $value */
    public function setCountry(mixed $value): void { $this->set('country', $value); }
    /** @param list<string>|null $value */
    public function country(mixed $value): static { return $this->set('country', $value); }

    /** @return list<string>|null */
    public function getExternalId(): mixed { return $this->get('externalId'); }
    /** @param list<string>|null $value */
    public function setExternalId(mixed $value): void { $this->set('externalId', $value); }
    /** @param list<string>|null $value */
    public function externalId(mixed $value): static { return $this->set('externalId', $value); }

    /** @return string|null */
    public function getClientIpAddress(): mixed { return $this->get('clientIpAddress'); }
    /** @param string|null $value */
    public function setClientIpAddress(mixed $value): void { $this->set('clientIpAddress', $value); }
    /** @param string|null $value */
    public function clientIpAddress(mixed $value): static { return $this->set('clientIpAddress', $value); }

    /** @return string|null */
    public function getClientUserAgent(): mixed { return $this->get('clientUserAgent'); }
    /** @param string|null $value */
    public function setClientUserAgent(mixed $value): void { $this->set('clientUserAgent', $value); }
    /** @param string|null $value */
    public function clientUserAgent(mixed $value): static { return $this->set('clientUserAgent', $value); }

    /** @return string|null */
    public function getFbc(): mixed { return $this->get('fbc'); }
    /** @param string|null $value */
    public function setFbc(mixed $value): void { $this->set('fbc', $value); }
    /** @param string|null $value */
    public function fbc(mixed $value): static { return $this->set('fbc', $value); }

    /** @return string|null */
    public function getFbp(): mixed { return $this->get('fbp'); }
    /** @param string|null $value */
    public function setFbp(mixed $value): void { $this->set('fbp', $value); }
    /** @param string|null $value */
    public function fbp(mixed $value): static { return $this->set('fbp', $value); }

    /** @return string|null */
    public function getSubscriptionId(): mixed { return $this->get('subscriptionId'); }
    /** @param string|null $value */
    public function setSubscriptionId(mixed $value): void { $this->set('subscriptionId', $value); }
    /** @param string|null $value */
    public function subscriptionId(mixed $value): static { return $this->set('subscriptionId', $value); }

    /** @return string|null */
    public function getFbLoginId(): mixed { return $this->get('fbLoginId'); }
    /** @param string|null $value */
    public function setFbLoginId(mixed $value): void { $this->set('fbLoginId', $value); }
    /** @param string|null $value */
    public function fbLoginId(mixed $value): static { return $this->set('fbLoginId', $value); }

    /** @return string|null */
    public function getLeadId(): mixed { return $this->get('leadId'); }
    /** @param string|null $value */
    public function setLeadId(mixed $value): void { $this->set('leadId', $value); }
    /** @param string|null $value */
    public function leadId(mixed $value): static { return $this->set('leadId', $value); }

    /** @return string|null */
    public function getCtwaClid(): mixed { return $this->get('ctwaClid'); }
    /** @param string|null $value */
    public function setCtwaClid(mixed $value): void { $this->set('ctwaClid', $value); }
    /** @param string|null $value */
    public function ctwaClid(mixed $value): static { return $this->set('ctwaClid', $value); }
}
