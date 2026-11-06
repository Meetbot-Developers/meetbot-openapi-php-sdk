<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model\Enums;

enum WebhookCallbackType: string
{
    case SEND_SUCCESS = 'SEND_SUCCESS';
    case SEND_ERROR = 'SEND_ERROR';
    case CONTENT = 'CONTENT';
    case CONTENT_FOR_B_CLIENT = 'CONTENT_FOR_B_CLIENT';
    case STATUS_CHANGE = 'STATUS_CHANGE';
    case ACCOUNT_CHANGE = 'ACCOUNT_CHANGE';
    case TEMPLATE_CHANGE = 'TEMPLATE_CHANGE';
    case ACTION = 'ACTION';
    case CALLS_CONNECT = 'calls_connect';
    case CALLS_TERMINATE = 'calls_terminate';
    case CALLS_STATUS = 'calls_status';
    case CALLS_CALL_PERMISSION_REPLY = 'calls_call_permission_reply';
    case FLOW_WEBHOOK = 'FLOW_WEBHOOK';
    case CREATE_CATALOG_PRODUCT_BY_API = 'CREATE_CATALOG_PRODUCT_BY_API';
    case UPDATE_CATALOG_PRODUCT_BY_API = 'UPDATE_CATALOG_PRODUCT_BY_API';
    case DELETE_CATALOG_PRODUCT_BY_API = 'DELETE_CATALOG_PRODUCT_BY_API';
    case UPLOAD_CATALOG_PRODUCT_BY_API = 'UPLOAD_CATALOG_PRODUCT_BY_API';

    public function getValue(): string { return $this->value; }
    public static function fromValue(?string $value): ?self { return $value === null ? null : self::tryFrom($value); }
}
