<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class WhatsappMessageSendParam extends AbstractModel
{
    protected const FIELDS = [
        'messagingProduct' => ['messaging_product', 'String'],
        'recipientType' => ['recipient_type', 'WhatsappRecipientType'],
        'to' => ['to', 'String'],
        'recipient' => ['recipient', 'String'],
        'type' => ['type', 'WhatsappMessageType'],
        'context' => ['context', 'WhatsappContextObject'],
        'bizOpaqueCallbackData' => ['biz_opaque_callback_data', 'String'],
        'text' => ['text', 'WhatsappTextObject'],
        'image' => ['image', 'WhatsappMediaObject'],
        'audio' => ['audio', 'WhatsappMediaObject'],
        'document' => ['document', 'WhatsappMediaObject'],
        'video' => ['video', 'WhatsappMediaObject'],
        'sticker' => ['sticker', 'WhatsappMediaObject'],
        'location' => ['location', 'WhatsappLocationObject'],
        'contacts' => ['contacts', 'List<WhatsappContactObject>'],
        'interactive' => ['interactive', 'WhatsappInteractiveObject'],
        'template' => ['template', 'WhatsappTemplateSendObject'],
        'reaction' => ['reaction', 'WhatsappReactionObject'],
    ];
    protected const DEFAULTS = ['messagingProduct' => "whatsapp"];

    /** @return string|null */
    public function getMessagingProduct(): mixed { return $this->get('messagingProduct'); }
    /** @param string|null $value */
    public function setMessagingProduct(mixed $value): void { $this->set('messagingProduct', $value); }
    /** @param string|null $value */
    public function messagingProduct(mixed $value): static { return $this->set('messagingProduct', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\WhatsappRecipientType|null */
    public function getRecipientType(): mixed { return $this->get('recipientType'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappRecipientType|null $value */
    public function setRecipientType(mixed $value): void { $this->set('recipientType', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappRecipientType|null $value */
    public function recipientType(mixed $value): static { return $this->set('recipientType', $value); }

    /** @return string|null */
    public function getTo(): mixed { return $this->get('to'); }
    /** @param string|null $value */
    public function setTo(mixed $value): void { $this->set('to', $value); }
    /** @param string|null $value */
    public function to(mixed $value): static { return $this->set('to', $value); }

    /** @return string|null */
    public function getRecipient(): mixed { return $this->get('recipient'); }
    /** @param string|null $value */
    public function setRecipient(mixed $value): void { $this->set('recipient', $value); }
    /** @param string|null $value */
    public function recipient(mixed $value): static { return $this->set('recipient', $value); }

    /** @return \Meetbot\OpenApi\Model\Enums\WhatsappMessageType|null */
    public function getType(): mixed { return $this->get('type'); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappMessageType|null $value */
    public function setType(mixed $value): void { $this->set('type', $value); }
    /** @param \Meetbot\OpenApi\Model\Enums\WhatsappMessageType|null $value */
    public function type(mixed $value): static { return $this->set('type', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappContextObject|null */
    public function getContext(): mixed { return $this->get('context'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContextObject|null $value */
    public function setContext(mixed $value): void { $this->set('context', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappContextObject|null $value */
    public function context(mixed $value): static { return $this->set('context', $value); }

    /** @return string|null */
    public function getBizOpaqueCallbackData(): mixed { return $this->get('bizOpaqueCallbackData'); }
    /** @param string|null $value */
    public function setBizOpaqueCallbackData(mixed $value): void { $this->set('bizOpaqueCallbackData', $value); }
    /** @param string|null $value */
    public function bizOpaqueCallbackData(mixed $value): static { return $this->set('bizOpaqueCallbackData', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTextObject|null */
    public function getText(): mixed { return $this->get('text'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTextObject|null $value */
    public function setText(mixed $value): void { $this->set('text', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTextObject|null $value */
    public function text(mixed $value): static { return $this->set('text', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getImage(): mixed { return $this->get('image'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setImage(mixed $value): void { $this->set('image', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function image(mixed $value): static { return $this->set('image', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getAudio(): mixed { return $this->get('audio'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setAudio(mixed $value): void { $this->set('audio', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function audio(mixed $value): static { return $this->set('audio', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getDocument(): mixed { return $this->get('document'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setDocument(mixed $value): void { $this->set('document', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function document(mixed $value): static { return $this->set('document', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getVideo(): mixed { return $this->get('video'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setVideo(mixed $value): void { $this->set('video', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function video(mixed $value): static { return $this->set('video', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappMediaObject|null */
    public function getSticker(): mixed { return $this->get('sticker'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function setSticker(mixed $value): void { $this->set('sticker', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappMediaObject|null $value */
    public function sticker(mixed $value): static { return $this->set('sticker', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappLocationObject|null */
    public function getLocation(): mixed { return $this->get('location'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappLocationObject|null $value */
    public function setLocation(mixed $value): void { $this->set('location', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappLocationObject|null $value */
    public function location(mixed $value): static { return $this->set('location', $value); }

    /** @return list<\Meetbot\OpenApi\Model\WhatsappContactObject>|null */
    public function getContacts(): mixed { return $this->get('contacts'); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactObject>|null $value */
    public function setContacts(mixed $value): void { $this->set('contacts', $value); }
    /** @param list<\Meetbot\OpenApi\Model\WhatsappContactObject>|null $value */
    public function contacts(mixed $value): static { return $this->set('contacts', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappInteractiveObject|null */
    public function getInteractive(): mixed { return $this->get('interactive'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveObject|null $value */
    public function setInteractive(mixed $value): void { $this->set('interactive', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappInteractiveObject|null $value */
    public function interactive(mixed $value): static { return $this->set('interactive', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappTemplateSendObject|null */
    public function getTemplate(): mixed { return $this->get('template'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateSendObject|null $value */
    public function setTemplate(mixed $value): void { $this->set('template', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappTemplateSendObject|null $value */
    public function template(mixed $value): static { return $this->set('template', $value); }

    /** @return \Meetbot\OpenApi\Model\WhatsappReactionObject|null */
    public function getReaction(): mixed { return $this->get('reaction'); }
    /** @param \Meetbot\OpenApi\Model\WhatsappReactionObject|null $value */
    public function setReaction(mixed $value): void { $this->set('reaction', $value); }
    /** @param \Meetbot\OpenApi\Model\WhatsappReactionObject|null $value */
    public function reaction(mixed $value): static { return $this->set('reaction', $value); }
}
