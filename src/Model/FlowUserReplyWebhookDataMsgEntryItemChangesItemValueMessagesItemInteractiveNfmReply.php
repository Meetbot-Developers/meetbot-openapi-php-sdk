<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class FlowUserReplyWebhookDataMsgEntryItemChangesItemValueMessagesItemInteractiveNfmReply extends AbstractModel
{
    protected const FIELDS = [
        'name' => ['name', 'String'],
        'responseJson' => ['response_json', 'String'],
        'body' => ['body', 'String'],
    ];

    /** @return string|null */
    public function getName(): mixed { return $this->get('name'); }
    /** @param string|null $value */
    public function setName(mixed $value): void { $this->set('name', $value); }
    /** @param string|null $value */
    public function name(mixed $value): static { return $this->set('name', $value); }

    /** @return string|null */
    public function getResponseJson(): mixed { return $this->get('responseJson'); }
    /** @param string|null $value */
    public function setResponseJson(mixed $value): void { $this->set('responseJson', $value); }
    /** @param string|null $value */
    public function responseJson(mixed $value): static { return $this->set('responseJson', $value); }

    /** @return string|null */
    public function getBody(): mixed { return $this->get('body'); }
    /** @param string|null $value */
    public function setBody(mixed $value): void { $this->set('body', $value); }
    /** @param string|null $value */
    public function body(mixed $value): static { return $this->set('body', $value); }
}
