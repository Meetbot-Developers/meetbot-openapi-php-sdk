<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class CustomerChannelUserAddTagRequest extends AbstractModel
{
    protected const FIELDS = [
        'tagName' => ['tagName', 'String'],
        'tagValue' => ['tagValue', 'String'],
        'replaceIfPresent' => ['replaceIfPresent', 'Boolean'],
    ];

    /** @return string|null */
    public function getTagName(): mixed { return $this->get('tagName'); }
    /** @param string|null $value */
    public function setTagName(mixed $value): void { $this->set('tagName', $value); }
    /** @param string|null $value */
    public function tagName(mixed $value): static { return $this->set('tagName', $value); }

    /** @return string|null */
    public function getTagValue(): mixed { return $this->get('tagValue'); }
    /** @param string|null $value */
    public function setTagValue(mixed $value): void { $this->set('tagValue', $value); }
    /** @param string|null $value */
    public function tagValue(mixed $value): static { return $this->set('tagValue', $value); }

    /** @return bool|null */
    public function getReplaceIfPresent(): mixed { return $this->get('replaceIfPresent'); }
    /** @param bool|null $value */
    public function setReplaceIfPresent(mixed $value): void { $this->set('replaceIfPresent', $value); }
    /** @param bool|null $value */
    public function replaceIfPresent(mixed $value): static { return $this->set('replaceIfPresent', $value); }
}
