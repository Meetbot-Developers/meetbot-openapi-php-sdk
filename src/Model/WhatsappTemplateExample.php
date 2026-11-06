<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateExample extends AbstractModel
{
    protected const FIELDS = [
        'headerText' => ['header_text', 'List<String>'],
        'headerHandle' => ['header_handle', 'List<String>'],
        'bodyText' => ['body_text', 'List<List<String>>'],
        'bodyTextNamedParams' => ['body_text_named_params', 'List<WhatsappNamedParamExample>'],
    ];

    /** @return list<string>|null */
    public function getHeaderText(): mixed { return $this->get('headerText'); }
    /** @param list<string>|null $value */
    public function setHeaderText(mixed $value): void { $this->set('headerText', $value); }
    /** @param list<string>|null $value */
    public function headerText(mixed $value): static { return $this->set('headerText', $value); }

    /** @return list<string>|null */
    public function getHeaderHandle(): mixed { return $this->get('headerHandle'); }
    /** @param list<string>|null $value */
    public function setHeaderHandle(mixed $value): void { $this->set('headerHandle', $value); }
    /** @param list<string>|null $value */
    public function headerHandle(mixed $value): static { return $this->set('headerHandle', $value); }

    /** @return list<list<string>>|null */
    public function getBodyText(): mixed { return $this->get('bodyText'); }
    /** @param list<list<string>>|null $value */
    public function setBodyText(mixed $value): void { $this->set('bodyText', $value); }
    /** @param list<list<string>>|null $value */
    public function bodyText(mixed $value): static { return $this->set('bodyText', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappNamedParamExample>|null */
    public function getBodyTextNamedParams(): mixed { return $this->get('bodyTextNamedParams'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappNamedParamExample>|null $value */
    public function setBodyTextNamedParams(mixed $value): void { $this->set('bodyTextNamedParams', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappNamedParamExample>|null $value */
    public function bodyTextNamedParams(mixed $value): static { return $this->set('bodyTextNamedParams', $value); }
}
