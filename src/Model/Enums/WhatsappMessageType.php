<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WhatsappMessageType: string
{
    case TEXT = 'text';
    case IMAGE = 'image';
    case AUDIO = 'audio';
    case DOCUMENT = 'document';
    case VIDEO = 'video';
    case STICKER = 'sticker';
    case LOCATION = 'location';
    case CONTACTS = 'contacts';
    case INTERACTIVE = 'interactive';
    case TEMPLATE = 'template';
    case REACTION = 'reaction';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
