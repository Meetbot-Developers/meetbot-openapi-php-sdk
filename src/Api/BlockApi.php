<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class BlockApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** GET /block/group/list
     * @return list<\Meetbot\OpenApi\Model\BlockGroupResponse>|null
     */
    public function listGroups(): mixed
    {
        return $this->http->request('GET', '/block/group/list', [], null, 'List<BlockGroupResponse>');
    }

    /** POST /block/page/list
     * @param \Meetbot\OpenApi\Model\PageBlockRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\PageResult|null
     */
    public function pageList(mixed $request): mixed
    {
        return $this->http->request('POST', '/block/page/list', [], $request, 'PageResult<BlockResponse>');
    }

    /** GET /block/preview/url
     * @param \Meetbot\OpenApi\Model\BlockPreviewRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\PreviewUrlResult|null
     */
    public function generatePreviewUrl(mixed $request): mixed
    {
        return $this->http->request('GET', '/block/preview/url', [], $request, 'PreviewUrlResult');
    }

    /** GET /api/v2/whatsapp/message/block/param
     * @param int|string|null $blockId
     * @return list<\Meetbot\OpenApi\Model\BlockDynamicParamResponse>|null
     */
    public function getDynamicParam(mixed $blockId): mixed
    {
        return $this->http->request('GET', '/api/v2/whatsapp/message/block/param', ['blockId' => $blockId], null, 'List<BlockDynamicParamResponse>');
    }
}
