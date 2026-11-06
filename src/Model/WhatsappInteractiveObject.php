<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappInteractiveObject extends AbstractModel
{
    protected const FIELDS = [
        'type' => ['type', 'String'],
        'header' => ['header', 'WhatsappInteractiveHeader'],
        'body' => ['body', 'WhatsappInteractiveBody'],
        'footer' => ['footer', 'WhatsappInteractiveFooter'],
        'action' => ['action', 'WhatsappInteractiveAction'],
    ];

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappInteractiveHeader|null */
    public function getHeader(): mixed { return $this->get('header'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveHeader|null $value */
    public function setHeader(mixed $value): void { $this->set('header', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveHeader|null $value */
    public function header(mixed $value): static { return $this->set('header', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappInteractiveBody|null */
    public function getBody(): mixed { return $this->get('body'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveBody|null $value */
    public function setBody(mixed $value): void { $this->set('body', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveBody|null $value */
    public function body(mixed $value): static { return $this->set('body', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappInteractiveFooter|null */
    public function getFooter(): mixed { return $this->get('footer'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveFooter|null $value */
    public function setFooter(mixed $value): void { $this->set('footer', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveFooter|null $value */
    public function footer(mixed $value): static { return $this->set('footer', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappInteractiveAction|null */
    public function getAction(): mixed { return $this->get('action'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveAction|null $value */
    public function setAction(mixed $value): void { $this->set('action', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveAction|null $value */
    public function action(mixed $value): static { return $this->set('action', $value); }
}
