<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class AccountApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /open/whatsapp/account/profile
     * @param \Meetbot\OpenApi\Model\WhatAppAccountProfileRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappAccountProfileResult|null
     */
    public function getProfile(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/profile', [], $request, 'WhatsappAccountProfileResult');
    }

    /** POST /open/whatsapp/account/update/profile
     * @param \Meetbot\OpenApi\Model\WhatsAppAccountProfileUpdateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function updateProfile(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/update/profile', [], $request, 'MetaSuccessResult');
    }

    /** POST /open/whatsapp/account/phone/numbers
     * @param \Meetbot\OpenApi\Model\WhatAppAccountPhoneNumbersRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappPhoneNumbersResult|null
     */
    public function listPhoneNumbers(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/phone/numbers', [], $request, 'WhatsappPhoneNumbersResult');
    }

    /** POST /open/whatsapp/account/whatsapp/business/info
     * @param \Meetbot\OpenApi\Model\WhatAppAccountBusinessInfoRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappBusinessAccountResult|null
     */
    public function getWhatsappBusinessInfo(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/whatsapp/business/info', [], $request, 'WhatsappBusinessAccountResult');
    }

    /** POST /open/whatsapp/account/business/info
     * @param \Meetbot\OpenApi\Model\WhatAppAccountBusinessManagerInfoRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappBusinessManagerResult|null
     */
    public function getBusinessManagerInfo(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/business/info', [], $request, 'WhatsappBusinessManagerResult');
    }

    /** POST /open/whatsapp/account/phone/verify/send
     * @param \Meetbot\OpenApi\Model\WhatsAppAccountPhoneVerifySendRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function sendPhoneVerify(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/phone/verify/send', [], $request, 'MetaSuccessResult');
    }

    /** POST /open/whatsapp/account/phone/verify/check
     * @param \Meetbot\OpenApi\Model\WhatsAppAccountPhoneVerifyCheckRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function checkPhoneVerify(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/account/phone/verify/check', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/whatsapp/phone/number/quality
     * @param string|null $phoneId
     * @return \Meetbot\OpenApi\Model\WhatsappPhoneQualityQueryResult|null
     */
    public function getPhoneQuality(mixed $phoneId): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/phone/number/quality', ['phoneId' => $phoneId], null, 'WhatsappPhoneQualityQueryResult');
    }

    /** GET /v1/whatsapp/phone/preVerified
     * @param string|null $businessId
     * @param string|null $codeVerificationStatus
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappPreverifiedPhoneListResult|null
     */
    public function listPreverifiedPhones(mixed $businessId, mixed $codeVerificationStatus, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/phone/preVerified', ['businessId' => $businessId, 'codeVerificationStatus' => $codeVerificationStatus, 'limit' => $limit, 'after' => $after], null, 'WhatsappPreverifiedPhoneListResult');
    }
}
