<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class WelcomeMessageApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /v1/whatsapp/welcomeMessage/create
     * @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function create(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/welcomeMessage/create', [], $request, 'StringIdResult');
    }

    /** GET /v1/whatsapp/welcomeMessage/list
     * @param string|null $wabaId
     * @param string|null $sequenceId
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappWelcomeMessageListResult|null
     */
    public function list(mixed $wabaId, mixed $sequenceId, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/welcomeMessage/list', ['wabaId' => $wabaId, 'sequenceId' => $sequenceId, 'limit' => $limit, 'after' => $after], null, 'WhatsappWelcomeMessageListResult');
    }

    /** POST /v1/whatsapp/welcomeMessage/update
     * @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageUpdateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function update(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/welcomeMessage/update', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/whatsapp/welcomeMessage/delete
     * @param \Meetbot\OpenApi\Model\WhatsappWelcomeMessageDeleteRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function delete(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/welcomeMessage/delete', [], $request, 'MetaSuccessResult');
    }
}
