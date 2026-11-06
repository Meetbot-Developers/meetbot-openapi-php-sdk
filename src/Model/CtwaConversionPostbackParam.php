<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CtwaConversionPostbackParam extends AbstractModel
{
    protected const FIELDS = [
        'data' => ['data', 'List<ConversionEvent>'],
        'testEventCode' => ['test_event_code', 'String'],
    ];

    /** @return list<\Meetbot\OpenApi\Model\ConversionEvent>|null */
    public function getData(): mixed { return $this->get('data'); }
    /** @param list<\Meetbot\OpenApi\Model\ConversionEvent>|null $value */
    public function setData(mixed $value): void { $this->set('data', $value); }
    /** @param list<\Meetbot\OpenApi\Model\ConversionEvent>|null $value */
    public function data(mixed $value): static { return $this->set('data', $value); }

    /** @return string|null */
    public function getTestEventCode(): mixed { return $this->get('testEventCode'); }
    /** @param string|null $value */
    public function setTestEventCode(mixed $value): void { $this->set('testEventCode', $value); }
    /** @param string|null $value */
    public function testEventCode(mixed $value): static { return $this->set('testEventCode', $value); }
}
