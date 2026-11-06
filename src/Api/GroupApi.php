<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class GroupApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /v1/whatsapp/group/create
     * @param \Meetbot\OpenApi\Model\WhatsappGroupCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappGroupCreateResult|null
     */
    public function create(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/create', [], $request, 'WhatsappGroupCreateResult');
    }

    /** GET /v1/whatsapp/group/list
     * @param string|null $phoneId
     * @param string|null $fields
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappGroupListResult|null
     */
    public function list(mixed $phoneId, mixed $fields, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/group/list', ['phoneId' => $phoneId, 'fields' => $fields, 'limit' => $limit, 'after' => $after], null, 'WhatsappGroupListResult');
    }

    /** GET /v1/whatsapp/group/details
     * @param string|null $groupId
     * @param string|null $fields
     * @return \Meetbot\OpenApi\Model\WhatsappGroupDetailsResult|null
     */
    public function details(mixed $groupId, mixed $fields): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/group/details', ['groupId' => $groupId, 'fields' => $fields], null, 'WhatsappGroupDetailsResult');
    }

    /** POST /v1/whatsapp/group/update
     * @param \Meetbot\OpenApi\Model\WhatsappGroupUpdateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function update(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/update', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/whatsapp/group/delete
     * @param \Meetbot\OpenApi\Model\WhatsappGroupDeleteRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function delete(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/delete', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/whatsapp/group/participants/remove
     * @param \Meetbot\OpenApi\Model\WhatsappGroupParticipantsRemoveRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function participantsRemove(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/participants/remove', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/whatsapp/group/inviteLink
     * @param string|null $groupId
     * @return \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResult|null
     */
    public function inviteLink(mixed $groupId): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/group/inviteLink', ['groupId' => $groupId], null, 'WhatsappGroupInviteLinkResult');
    }

    /** POST /v1/whatsapp/group/inviteLink/reset
     * @param \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResetRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappGroupInviteLinkResetResult|null
     */
    public function inviteLinkReset(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/inviteLink/reset', [], $request, 'WhatsappGroupInviteLinkResetResult');
    }

    /** GET /v1/whatsapp/group/joinRequests
     * @param string|null $groupId
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappGroupJoinRequestListResult|null
     */
    public function joinRequestList(mixed $groupId, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/group/joinRequests', ['groupId' => $groupId, 'limit' => $limit, 'after' => $after], null, 'WhatsappGroupJoinRequestListResult');
    }

    /** POST /v1/whatsapp/group/joinRequests/approve
     * @param \Meetbot\OpenApi\Model\WhatsappGroupJoinRequestApproveRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function joinRequestApprove(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/joinRequests/approve', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/whatsapp/group/joinRequests/reject
     * @param \Meetbot\OpenApi\Model\WhatsappGroupJoinRequestRejectRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function joinRequestReject(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/group/joinRequests/reject', [], $request, 'MetaSuccessResult');
    }
}
