<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappPhoneQualityQueryResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'qualityRating' => ['quality_rating', 'String'],
        'throughput' => ['throughput', 'WhatsappPhoneQualityQueryResultThroughput'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getQualityRating(): mixed { return $this->get('qualityRating'); }
    /** @param string|null $value */
    public function setQualityRating(mixed $value): void { $this->set('qualityRating', $value); }
    /** @param string|null $value */
    public function qualityRating(mixed $value): static { return $this->set('qualityRating', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappPhoneQualityQueryResultThroughput|null */
    public function getThroughput(): mixed { return $this->get('throughput'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappPhoneQualityQueryResultThroughput|null $value */
    public function setThroughput(mixed $value): void { $this->set('throughput', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappPhoneQualityQueryResultThroughput|null $value */
    public function throughput(mixed $value): static { return $this->set('throughput', $value); }
}
