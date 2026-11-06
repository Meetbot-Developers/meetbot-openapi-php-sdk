<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WebhookActionMsg extends AbstractModel
{
    protected const FIELDS = [
        'actionType' => ['actionType', 'WebhookActionType'],
        'receiver' => ['receiver', 'String'],
        'value' => ['value', 'String'],
    ];

    /** @return \Meetbot\OpenApi\Model\Enums\WebhookActionType|null */
    public function getActionType(): mixed { return $this->get('actionType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WebhookActionType|null $value */
    public function setActionType(mixed $value): void { $this->set('actionType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WebhookActionType|null $value */
    public function actionType(mixed $value): static { return $this->set('actionType', $value); }

    /** @return string|null */
    public function getReceiver(): mixed { return $this->get('receiver'); }
    /** @param string|null $value */
    public function setReceiver(mixed $value): void { $this->set('receiver', $value); }
    /** @param string|null $value */
    public function receiver(mixed $value): static { return $this->set('receiver', $value); }

    /** @return string|null */
    public function getValue(): mixed { return $this->get('value'); }
    /** @param string|null $value */
    public function setValue(mixed $value): void { $this->set('value', $value); }
    /** @param string|null $value */
    public function value(mixed $value): static { return $this->set('value', $value); }
}
