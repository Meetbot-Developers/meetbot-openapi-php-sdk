<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowItem extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'name' => ['name', 'String'],
        'status' => ['status', 'String'],
        'categories' => ['categories', 'List<String>'],
        'validationErrors' => ['validation_errors', 'List<MetaValidationError>'],
        'updateTime' => ['update_time', 'String'],
        'jsonVersion' => ['json_version', 'String'],
        'dataApiVersion' => ['data_api_version', 'String'],
        'endpointUri' => ['endpoint_uri', 'String'],
        'preview' => ['preview', 'WhatsappFlowPreviewInfo'],
        'whatsappBusinessAccount' => ['whatsapp_business_account', 'GraphIdRef'],
        'application' => ['application', 'GraphIdRef'],
        'healthStatus' => ['health_status', 'WhatsappFlowHealthStatus'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getStatus(): mixed { return $this->get('status'); }
    /** @param string|null $value */
    public function setStatus(mixed $value): void { $this->set('status', $value); }
    /** @param string|null $value */
    public function status(mixed $value): static { return $this->set('status', $value); }

    /** @return list<string>|null */
    public function getCategories(): mixed { return $this->get('categories'); }
    /** @param list<string>|null $value */
    public function setCategories(mixed $value): void { $this->set('categories', $value); }
    /** @param list<string>|null $value */
    public function categories(mixed $value): static { return $this->set('categories', $value); }

    /** @return list<\Meetbot\OpenApi\Model\MetaValidationError>|null */
    public function getValidationErrors(): mixed { return $this->get('validationErrors'); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function setValidationErrors(mixed $value): void { $this->set('validationErrors', $value); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function validationErrors(mixed $value): static { return $this->set('validationErrors', $value); }

    /** @return string|null */
    public function getUpdateTime(): mixed { return $this->get('updateTime'); }
    /** @param string|null $value */
    public function setUpdateTime(mixed $value): void { $this->set('updateTime', $value); }
    /** @param string|null $value */
    public function updateTime(mixed $value): static { return $this->set('updateTime', $value); }

    /** @return string|null */
    public function getJsonVersion(): mixed { return $this->get('jsonVersion'); }
    /** @param string|null $value */
    public function setJsonVersion(mixed $value): void { $this->set('jsonVersion', $value); }
    /** @param string|null $value */
    public function jsonVersion(mixed $value): static { return $this->set('jsonVersion', $value); }

    /** @return string|null */
    public function getDataApiVersion(): mixed { return $this->get('dataApiVersion'); }
    /** @param string|null $value */
    public function setDataApiVersion(mixed $value): void { $this->set('dataApiVersion', $value); }
    /** @param string|null $value */
    public function dataApiVersion(mixed $value): static { return $this->set('dataApiVersion', $value); }

    /** @return string|null */
    public function getEndpointUri(): mixed { return $this->get('endpointUri'); }
    /** @param string|null $value */
    public function setEndpointUri(mixed $value): void { $this->set('endpointUri', $value); }
    /** @param string|null $value */
    public function endpointUri(mixed $value): static { return $this->set('endpointUri', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null */
    public function getPreview(): mixed { return $this->get('preview'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null $value */
    public function setPreview(mixed $value): void { $this->set('preview', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowPreviewInfo|null $value */
    public function preview(mixed $value): static { return $this->set('preview', $value); }

    /** @return \Meetbot\OpenApi\Model\GraphIdRef|null */
    public function getWhatsappBusinessAccount(): mixed { return $this->get('whatsappBusinessAccount'); }
    /** @param \Meetbot\OpenApi\Model\GraphIdRef|null $value */
    public function setWhatsappBusinessAccount(mixed $value): void { $this->set('whatsappBusinessAccount', $value); }
    /** @param \Meetbot\OpenApi\Model\GraphIdRef|null $value */
    public function whatsappBusinessAccount(mixed $value): static { return $this->set('whatsappBusinessAccount', $value); }

    /** @return \Meetbot\OpenApi\Model\GraphIdRef|null */
    public function getApplication(): mixed { return $this->get('application'); }
    /** @param \Meetbot\OpenApi\Model\GraphIdRef|null $value */
    public function setApplication(mixed $value): void { $this->set('application', $value); }
    /** @param \Meetbot\OpenApi\Model\GraphIdRef|null $value */
    public function application(mixed $value): static { return $this->set('application', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappFlowHealthStatus|null */
    public function getHealthStatus(): mixed { return $this->get('healthStatus'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowHealthStatus|null $value */
    public function setHealthStatus(mixed $value): void { $this->set('healthStatus', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappFlowHealthStatus|null $value */
    public function healthStatus(mixed $value): static { return $this->set('healthStatus', $value); }
}
