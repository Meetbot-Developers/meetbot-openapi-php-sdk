<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class FlowApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /v1/flow/create
     * @param \Meetbot\OpenApi\Model\WhatsappFlowCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappFlowMutationResult|null
     */
    public function create(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/create', [], $request, 'WhatsappFlowMutationResult');
    }

    /** POST /v1/flow/update
     * @param \Meetbot\OpenApi\Model\WhatsappFlowUpdateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function update(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/update', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/flow/update/json
     * @param string|resource $file Local path or readable stream.
     * @return \Meetbot\OpenApi\Model\WhatsappFlowMutationResult|null
     */
    public function updateJson(string $flowId, mixed $file, string $fileName = "flow.json"): mixed
    {
        return $this->http->upload('/v1/flow/update/json', $flowId, $file, $fileName, 'WhatsappFlowMutationResult');
    }

    /** GET /v1/flow/preview
     * @param string|null $flowId
     * @return \Meetbot\OpenApi\Model\WhatsappFlowPreviewResult|null
     */
    public function preview(mixed $flowId): mixed
    {
        return $this->http->request('GET', '/v1/flow/preview', ['flowId' => $flowId], null, 'WhatsappFlowPreviewResult');
    }

    /** POST /v1/flow/publish
     * @param \Meetbot\OpenApi\Model\WhatsappFlowIdRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function publish(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/publish', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/flow/deprecate
     * @param \Meetbot\OpenApi\Model\WhatsappFlowIdRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function deprecate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/deprecate', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/flow/delete
     * @param \Meetbot\OpenApi\Model\WhatsappFlowIdRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function delete(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/delete', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/flow/migrate
     * @param \Meetbot\OpenApi\Model\WhatsappFlowMigrateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function migrate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/migrate', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/flow/list
     * @param string|null $wabaId
     * @param string|null $fields
     * @param int|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappFlowListResult|null
     */
    public function list(mixed $wabaId, mixed $fields, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/flow/list', ['wabaId' => $wabaId, 'fields' => $fields, 'limit' => $limit, 'after' => $after], null, 'WhatsappFlowListResult');
    }

    /** GET /v1/flow/details
     * @param string|null $flowId
     * @param string|null $fields
     * @return \Meetbot\OpenApi\Model\WhatsappFlowItem|null
     */
    public function details(mixed $flowId, mixed $fields): mixed
    {
        return $this->http->request('GET', '/v1/flow/details', ['flowId' => $flowId, 'fields' => $fields], null, 'WhatsappFlowItem');
    }

    /** GET /v1/flow/assets
     * @param string|null $flowId
     * @param string|null $fields
     * @return \Meetbot\OpenApi\Model\WhatsappFlowAssetsResult|null
     */
    public function assets(mixed $flowId, mixed $fields): mixed
    {
        return $this->http->request('GET', '/v1/flow/assets', ['flowId' => $flowId, 'fields' => $fields], null, 'WhatsappFlowAssetsResult');
    }

    /** POST /v1/flow/encryption/set
     * @param \Meetbot\OpenApi\Model\WhatsappFlowEncryptionSetRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function setEncryption(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/flow/encryption/set', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/flow/encryption/get
     * @param string|null $phoneNumberId
     * @return \Meetbot\OpenApi\Model\WhatsappFlowEncryptionResult|null
     */
    public function getEncryption(mixed $phoneNumberId): mixed
    {
        return $this->http->request('GET', '/v1/flow/encryption/get', ['phoneNumberId' => $phoneNumberId], null, 'WhatsappFlowEncryptionResult');
    }
}
