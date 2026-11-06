<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class TagApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** GET /tags/categories/tree
     * @return list<\Meetbot\OpenApi\Model\CategoryNodeResponse>|null
     */
    public function getCategoryTree(): mixed
    {
        return $this->http->request('GET', '/tags/categories/tree', [], null, 'List<CategoryNodeResponse>');
    }

    /** POST /tags/categories/create
     * @param \Meetbot\OpenApi\Model\CreateCategoryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function createCategory(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/categories/create', [], $request, 'StringIdResult');
    }

    /** POST /tags/categories/update
     * @param \Meetbot\OpenApi\Model\UpdateCategoryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function updateCategory(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/categories/update', [], $request, 'BooleanResult');
    }

    /** POST /tags/categories/delete
     * @param \Meetbot\OpenApi\Model\DeleteCategoryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function deleteCategory(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/categories/delete', [], $request, 'BooleanResult');
    }

    /** POST /tags/categories/move
     * @param \Meetbot\OpenApi\Model\MoveCategoryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function moveCategory(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/categories/move', [], $request, 'BooleanResult');
    }

    /** GET /tags/static/list
     * @param string|null $categoryId
     * @param string|null $name
     * @param int|null $pageNo
     * @param int|null $pageSize
     * @return \Meetbot\OpenApi\Model\PageResult|null
     */
    public function listStaticTags(mixed $categoryId, mixed $name, mixed $pageNo, mixed $pageSize): mixed
    {
        return $this->http->request('GET', '/tags/static/list', ['categoryId' => $categoryId, 'name' => $name, 'pageNo' => $pageNo, 'pageSize' => $pageSize], null, 'PageResult<TagStaticListItemResponse>');
    }

    /** GET /tags/static/detail
     * @param string|null $tagId
     * @return \Meetbot\OpenApi\Model\TagDetailResponse|null
     */
    public function getStaticTagDetail(mixed $tagId): mixed
    {
        return $this->http->request('GET', '/tags/static/detail', ['tagId' => $tagId], null, 'TagDetailResponse');
    }

    /** POST /tags/static/create
     * @param \Meetbot\OpenApi\Model\CreateStaticTagRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function createStaticTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/static/create', [], $request, 'StringIdResult');
    }

    /** POST /tags/static/update
     * @param \Meetbot\OpenApi\Model\UpdateStaticTagRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function updateStaticTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/static/update', [], $request, 'BooleanResult');
    }

    /** POST /tags/static/delete
     * @param \Meetbot\OpenApi\Model\DeleteStaticTagRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function deleteStaticTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/static/delete', [], $request, 'BooleanResult');
    }

    /** POST /tags/static/move
     * @param \Meetbot\OpenApi\Model\MoveStaticTagRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function moveStaticTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/static/move', [], $request, 'BooleanResult');
    }

    /** GET /tags/user/tags
     * @param string|null $userId
     * @param string|null $channel
     * @return list<\Meetbot\OpenApi\Model\UserTagResponse>|null
     */
    public function getUserTags(mixed $userId, mixed $channel): mixed
    {
        return $this->http->request('GET', '/tags/user/tags', ['userId' => $userId, 'channel' => $channel], null, 'List<UserTagResponse>');
    }

    /** POST /tags/user/tags/attach
     * @param \Meetbot\OpenApi\Model\UserTagsAttachRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function attachUserTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/user/tags/attach', [], $request, 'BooleanResult');
    }

    /** POST /tags/user/tags/detach
     * @param \Meetbot\OpenApi\Model\UserTagsDetachRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BooleanResult|null
     */
    public function detachUserTag(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/user/tags/detach', [], $request, 'BooleanResult');
    }

    /** POST /tags/users/query
     * @param \Meetbot\OpenApi\Model\TagUsersQueryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\TagUsersPageResponse|null
     */
    public function queryUsersByTagValue(mixed $request): mixed
    {
        return $this->http->request('POST', '/tags/users/query', [], $request, 'TagUsersPageResponse');
    }
}
