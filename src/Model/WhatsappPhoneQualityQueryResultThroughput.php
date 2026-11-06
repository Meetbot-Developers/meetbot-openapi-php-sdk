<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappPhoneQualityQueryResultThroughput extends AbstractModel
{
    protected const FIELDS = [
        'level' => ['level', 'String'],
    ];

    /** @return string|null */
    public function getLevel(): mixed { return $this->get('level'); }
    /** @param string|null $value */
    public function setLevel(mixed $value): void { $this->set('level', $value); }
    /** @param string|null $value */
    public function level(mixed $value): static { return $this->set('level', $value); }
}
