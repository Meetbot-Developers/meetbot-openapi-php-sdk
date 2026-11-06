<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookCatalogProductUpdateCallback extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'Long'],
        'type' => ['type', 'String'],
        'msg' => ['msg', 'CatalogProductHandleResultMessage'],
    ];

    /** @return int|string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param int|string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param int|string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param string|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param string|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\CatalogProductHandleResultMessage|null */
    public function getMsg(): mixed { return $this->get('msg'); }
    /** @param \Meetbot\OpenApi\Model\CatalogProductHandleResultMessage|null $value */
    public function setMsg(mixed $value): void { $this->set('msg', $value); }
    /** @param \Meetbot\OpenApi\Model\CatalogProductHandleResultMessage|null $value */
    public function msg(mixed $value): static { return $this->set('msg', $value); }
}
