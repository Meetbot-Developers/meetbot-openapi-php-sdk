<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowAssetItem extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'assetType' => ['asset_type', 'String'],
        'downloadUrl' => ['download_url', 'String'],
        'id' => ['id', 'String'],
        'url' => ['url', 'String'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getAssetType(): mixed { return $this->get('assetType'); }
    /** @param string|null $value */
    public function setAssetType(mixed $value): void { $this->set('assetType', $value); }
    /** @param string|null $value */
    public function assetType(mixed $value): static { return $this->set('assetType', $value); }

    /** @return string|null */
    public function getDownloadUrl(): mixed { return $this->get('downloadUrl'); }
    /** @param string|null $value */
    public function setDownloadUrl(mixed $value): void { $this->set('downloadUrl', $value); }
    /** @param string|null $value */
    public function downloadUrl(mixed $value): static { return $this->set('downloadUrl', $value); }

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getUrl(): mixed { return $this->get('url'); }
    /** @param string|null $value */
    public function setUrl(mixed $value): void { $this->set('url', $value); }
    /** @param string|null $value */
    public function url(mixed $value): static { return $this->set('url', $value); }
}
