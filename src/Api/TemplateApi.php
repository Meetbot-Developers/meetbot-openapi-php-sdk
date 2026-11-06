<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class TemplateApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /open/whatsapp/template/query
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateQueryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateQueryResponse|null
     */
    public function query(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/template/query', [], $request, 'WhatsappTemplateQueryResponse');
    }

    /** POST /open/whatsapp/template/create
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateCreateResult|null
     */
    public function create(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/template/create', [], $request, 'WhatsappTemplateCreateResult');
    }

    /** POST /open/whatsapp/template/update
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateEditRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function update(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/template/update', [], $request, 'MetaSuccessResult');
    }

    /** POST /open/whatsapp/template/delete
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateDeleteRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function delete(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/template/delete', [], $request, 'MetaSuccessResult');
    }

    /** POST /open/whatsapp/template/file/upload
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateFileUplodRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateFileUploadResult|null
     */
    public function uploadFile(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/template/file/upload', [], $request, 'WhatsappTemplateFileUploadResult');
    }

    /** GET /v1/whatsapp/template/details
     * @param string|null $templateId
     * @param string|null $fields
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateDetailsResult|null
     */
    public function details(mixed $templateId, mixed $fields): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/details', ['templateId' => $templateId, 'fields' => $fields], null, 'WhatsappTemplateDetailsResult');
    }

    /** GET /v1/whatsapp/template/compare
     * @param string|null $templateId
     * @param string|null $templateIds
     * @param int|string|null $start
     * @param int|string|null $end
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateCompareResult|null
     */
    public function compare(mixed $templateId, mixed $templateIds, mixed $start, mixed $end): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/compare', ['templateId' => $templateId, 'templateIds' => $templateIds, 'start' => $start, 'end' => $end], null, 'WhatsappTemplateCompareResult');
    }

    /** POST /v1/whatsapp/template/archive
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateArchiveRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateArchiveResult|null
     */
    public function archive(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/archive', [], $request, 'WhatsappTemplateArchiveResult');
    }

    /** POST /v1/whatsapp/template/unarchive
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateUnarchiveResult|null
     */
    public function unarchive(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/unarchive', [], $request, 'WhatsappTemplateUnarchiveResult');
    }

    /** POST /v1/whatsapp/template/migrate
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateMigrateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateMigrateResult|null
     */
    public function migrate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/migrate', [], $request, 'WhatsappTemplateMigrateResult');
    }

    /** GET /v1/whatsapp/template/preview
     * @param \Meetbot\OpenApi\Model\WhatsappTemplatePreviewRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplatePreviewResult|null
     */
    public function preview(mixed $request): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/preview', ['wabaId' => (is_array($request) ? ($request['wabaId'] ?? null) : $request->getWabaId()), 'category' => (is_array($request) ? ($request['category'] ?? null) : $request->getCategory()), 'languages' => (is_array($request) ? ($request['languages'] ?? null) : $request->getLanguages()), 'addSecurityRecommendation' => (is_array($request) ? ($request['addSecurityRecommendation'] ?? null) : $request->getAddSecurityRecommendation()), 'codeExpirationMinutes' => (is_array($request) ? ($request['codeExpirationMinutes'] ?? null) : $request->getCodeExpirationMinutes()), 'buttonTypes' => (is_array($request) ? ($request['buttonTypes'] ?? null) : $request->getButtonTypes()), 'businessName' => (is_array($request) ? ($request['businessName'] ?? null) : $request->getBusinessName())], null, 'WhatsappTemplatePreviewResult');
    }

    /** POST /v1/whatsapp/template/upsert
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateUpsertRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateUpsertResult|null
     */
    public function upsert(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/upsert', [], $request, 'WhatsappTemplateUpsertResult');
    }

    /** GET /v1/whatsapp/template/groups/list
     * @param string|null $wabaId
     * @param string|null $fields
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateGroupListResult|null
     */
    public function groupList(mixed $wabaId, mixed $fields, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/groups/list', ['wabaId' => $wabaId, 'fields' => $fields, 'limit' => $limit, 'after' => $after], null, 'WhatsappTemplateGroupListResult');
    }

    /** POST /v1/whatsapp/template/groups/create
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function groupCreate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/groups/create', [], $request, 'StringIdResult');
    }

    /** GET /v1/whatsapp/template/groups/details
     * @param string|null $templateGroupId
     * @param string|null $fields
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateGroupDetailsResult|null
     */
    public function groupDetails(mixed $templateGroupId, mixed $fields): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/groups/details', ['templateGroupId' => $templateGroupId, 'fields' => $fields], null, 'WhatsappTemplateGroupDetailsResult');
    }

    /** POST /v1/whatsapp/template/groups/update
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupUpdateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function groupUpdate(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/groups/update', [], $request, 'MetaSuccessResult');
    }

    /** POST /v1/whatsapp/template/groups/delete
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateGroupDeleteRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function groupDelete(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/template/groups/delete', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/whatsapp/template/library
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateLibraryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappTemplateLibraryResult|null
     */
    public function library(mixed $request): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/template/library', ['category' => (is_array($request) ? ($request['category'] ?? null) : $request->getCategory()), 'search' => (is_array($request) ? ($request['search'] ?? null) : $request->getSearch()), 'topic' => (is_array($request) ? ($request['topic'] ?? null) : $request->getTopic()), 'usecase' => (is_array($request) ? ($request['usecase'] ?? null) : $request->getUsecase()), 'industry' => (is_array($request) ? ($request['industry'] ?? null) : $request->getIndustry()), 'language' => (is_array($request) ? ($request['language'] ?? null) : $request->getLanguage()), 'name' => (is_array($request) ? ($request['name'] ?? null) : $request->getName()), 'limit' => (is_array($request) ? ($request['limit'] ?? null) : $request->getLimit()), 'after' => (is_array($request) ? ($request['after'] ?? null) : $request->getAfter()), 'before' => (is_array($request) ? ($request['before'] ?? null) : $request->getBefore())], null, 'WhatsappTemplateLibraryResult');
    }
}
