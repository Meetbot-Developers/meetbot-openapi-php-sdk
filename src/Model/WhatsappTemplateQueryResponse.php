<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateQueryResponse extends AbstractModel
{
    protected const FIELDS = [
        'before' => ['before', 'String'],
        'after' => ['after', 'String'],
        'accessToken' => ['accessToken', 'String'],
        'data' => ['data', 'List<WhatsappTemplateItem>'],
    ];

    /** @return string|null */
    public function getBefore(): mixed { return $this->get('before'); }
    /** @param string|null $value */
    public function setBefore(mixed $value): void { $this->set('before', $value); }
    /** @param string|null $value */
    public function before(mixed $value): static { return $this->set('before', $value); }

    /** @return string|null */
    public function getAfter(): mixed { return $this->get('after'); }
    /** @param string|null $value */
    public function setAfter(mixed $value): void { $this->set('after', $value); }
    /** @param string|null $value */
    public function after(mixed $value): static { return $this->set('after', $value); }

    /** @return string|null */
    public function getAccessToken(): mixed { return $this->get('accessToken'); }
    /** @param string|null $value */
    public function setAccessToken(mixed $value): void { $this->set('accessToken', $value); }
    /** @param string|null $value */
    public function accessToken(mixed $value): static { return $this->set('accessToken', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplateItem>|null */
    public function getData(): mixed { return $this->get('data'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateItem>|null $value */
    public function setData(mixed $value): void { $this->set('data', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplateItem>|null $value */
    public function data(mixed $value): static { return $this->set('data', $value); }
}
