<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class CustomerApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /customer/channel/user/add
     * @param \Meetbot\OpenApi\Model\CustomerChannelUserAddRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function addChannelUser(mixed $request): mixed
    {
        return $this->http->request('POST', '/customer/channel/user/add', [], $request, 'EmptyResult');
    }

    /** POST /consultant/allocation/add/user
     * @param \Meetbot\OpenApi\Model\CustomerConsultantAllocationAddUserRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function addConsultantAllocationUser(mixed $request): mixed
    {
        return $this->http->request('POST', '/consultant/allocation/add/user', [], $request, 'EmptyResult');
    }

    /** GET /open/user/seat/list
     * @return list<\Meetbot\OpenApi\Model\UserSeatResponse>|null
     */
    public function listSeats(): mixed
    {
        return $this->http->request('GET', '/open/user/seat/list', [], null, 'List<UserSeatResponse>');
    }

    /** POST /open/user/chatStatus
     * @param \Meetbot\OpenApi\Model\CustomerChatStatusRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\CustomerChatStatusResponse|null
     */
    public function getChatStatus(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/user/chatStatus', [], $request, 'CustomerChatStatusResponse');
    }

    /** POST /open/user/seat/createSession
     * @param \Meetbot\OpenApi\Model\UserSeatSessionRequest|array<string, mixed>|null $request
     * @return bool|null
     */
    public function createSession(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/user/seat/createSession', [], $request, 'Boolean');
    }

    /** POST /open/user/seat/closeSession
     * @param \Meetbot\OpenApi\Model\UserSeatSessionRequest|array<string, mixed>|null $request
     * @return bool|null
     */
    public function closeSession(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/user/seat/closeSession', [], $request, 'Boolean');
    }
}
