<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappCallingAcceptRequest extends AbstractModel
{
    protected const FIELDS = [
        'phoneNumberId' => ['phoneNumberId', 'String'],
        'param' => ['param', 'WhatsappCallingAcceptParam'],
    ];

    /** @return string|null */
    public function getPhoneNumberId(): mixed { return $this->get('phoneNumberId'); }
    /** @param string|null $value */
    public function setPhoneNumberId(mixed $value): void { $this->set('phoneNumberId', $value); }
    /** @param string|null $value */
    public function phoneNumberId(mixed $value): static { return $this->set('phoneNumberId', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappCallingAcceptParam|null */
    public function getParam(): mixed { return $this->get('param'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappCallingAcceptParam|null $value */
    public function setParam(mixed $value): void { $this->set('param', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappCallingAcceptParam|null $value */
    public function param(mixed $value): static { return $this->set('param', $value); }
}
