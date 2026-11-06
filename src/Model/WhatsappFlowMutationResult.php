<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappFlowMutationResult extends AbstractModel
{
    protected const FIELDS = [
        'id' => ['id', 'String'],
        'success' => ['success', 'Boolean'],
        'validationErrors' => ['validation_errors', 'List<MetaValidationError>'],
    ];

    /** @return string|null */
    public function getId(): mixed { return $this->get('id'); }
    /** @param string|null $value */
    public function setId(mixed $value): void { $this->set('id', $value); }
    /** @param string|null $value */
    public function id(mixed $value): static { return $this->set('id', $value); }

    /** @return bool|null */
    public function getSuccess(): mixed { return $this->get('success'); }
    /** @param bool|null $value */
    public function setSuccess(mixed $value): void { $this->set('success', $value); }
    /** @param bool|null $value */
    public function success(mixed $value): static { return $this->set('success', $value); }

    /** @return list<\Meetbot\OpenApi\Model\MetaValidationError>|null */
    public function getValidationErrors(): mixed { return $this->get('validationErrors'); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function setValidationErrors(mixed $value): void { $this->set('validationErrors', $value); }
    /** @param list<\Meetbot\OpenApi\Model\MetaValidationError>|null $value */
    public function validationErrors(mixed $value): static { return $this->set('validationErrors', $value); }
}
