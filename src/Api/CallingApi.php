<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class CallingApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /v1/whatsapp/calls/connect
     * @param \Meetbot\OpenApi\Model\WhatsappCallingConnectRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappCallingResult|null
     */
    public function connect(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/calls/connect', [], $request, 'WhatsappCallingResult');
    }

    /** POST /v1/whatsapp/calls/preAccept
     * @param \Meetbot\OpenApi\Model\WhatsappCallingPreAcceptRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappCallingResult|null
     */
    public function preAccept(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/calls/preAccept', [], $request, 'WhatsappCallingResult');
    }

    /** POST /v1/whatsapp/calls/accept
     * @param \Meetbot\OpenApi\Model\WhatsappCallingAcceptRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappCallingResult|null
     */
    public function accept(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/calls/accept', [], $request, 'WhatsappCallingResult');
    }

    /** POST /v1/whatsapp/calls/reject
     * @param \Meetbot\OpenApi\Model\WhatsappCallingRejectRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappCallingResult|null
     */
    public function reject(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/calls/reject', [], $request, 'WhatsappCallingResult');
    }

    /** POST /v1/whatsapp/calls/terminate
     * @param \Meetbot\OpenApi\Model\WhatsappCallingTerminateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappCallingResult|null
     */
    public function terminate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/calls/terminate', [], $request, 'WhatsappCallingResult');
    }
}
