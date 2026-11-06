<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappTemplateGroupDeleteRequest extends AbstractModel
{
    protected const FIELDS = [
        'templateGroupId' => ['templateGroupId', 'String'],
    ];

    /** @return string|null */
    public function getTemplateGroupId(): mixed { return $this->get('templateGroupId'); }
    /** @param string|null $value */
    public function setTemplateGroupId(mixed $value): void { $this->set('templateGroupId', $value); }
    /** @param string|null $value */
    public function templateGroupId(mixed $value): static { return $this->set('templateGroupId', $value); }
}
