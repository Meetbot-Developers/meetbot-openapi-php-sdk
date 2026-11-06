<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplatePreviewResultDataItem extends AbstractModel
{
    protected const FIELDS = [
        'body' => ['body', 'String'],
        'buttons' => ['buttons', 'List<WhatsappTemplatePreviewResultDataItemButtonsItem>'],
        'footer' => ['footer', 'String'],
        'language' => ['language', 'String'],
    ];

    /** @return string|null */
    public function getBody(): mixed { return $this->get('body'); }
    /** @param string|null $value */
    public function setBody(mixed $value): void { $this->set('body', $value); }
    /** @param string|null $value */
    public function body(mixed $value): static { return $this->set('body', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItemButtonsItem>|null */
    public function getButtons(): mixed { return $this->get('buttons'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItemButtonsItem>|null $value */
    public function setButtons(mixed $value): void { $this->set('buttons', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappTemplatePreviewResultDataItemButtonsItem>|null $value */
    public function buttons(mixed $value): static { return $this->set('buttons', $value); }

    /** @return string|null */
    public function getFooter(): mixed { return $this->get('footer'); }
    /** @param string|null $value */
    public function setFooter(mixed $value): void { $this->set('footer', $value); }
    /** @param string|null $value */
    public function footer(mixed $value): static { return $this->set('footer', $value); }

    /** @return string|null */
    public function getLanguage(): mixed { return $this->get('language'); }
    /** @param string|null $value */
    public function setLanguage(mixed $value): void { $this->set('language', $value); }
    /** @param string|null $value */
    public function language(mixed $value): static { return $this->set('language', $value); }
}
