<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class BizSyncApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /open/biz/sync/users
     * @param \Meetbot\OpenApi\Model\BizSyncUserBatchRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BizSyncBatchResponse|null
     */
    public function syncUsers(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/biz/sync/users', [], $request, 'BizSyncBatchResponse');
    }

    /** POST /open/biz/sync/orders
     * @param \Meetbot\OpenApi\Model\BizSyncOrderBatchRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BizSyncBatchResponse|null
     */
    public function syncOrders(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/biz/sync/orders', [], $request, 'BizSyncBatchResponse');
    }

    /** POST /open/biz/sync/products
     * @param \Meetbot\OpenApi\Model\BizSyncProductBatchRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BizSyncBatchResponse|null
     */
    public function syncProducts(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/biz/sync/products', [], $request, 'BizSyncBatchResponse');
    }

    /** POST /open/biz/sync/product/series
     * @param \Meetbot\OpenApi\Model\BizSyncProductSeriesBatchRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\BizSyncBatchResponse|null
     */
    public function syncProductSeries(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/biz/sync/product/series', [], $request, 'BizSyncBatchResponse');
    }

    /** POST /open/biz/sync/event
     * @param \Meetbot\OpenApi\Model\BizSyncEventReportRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function reportEvent(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/biz/sync/event', [], $request, 'EmptyResult');
    }

    /** POST /v1/ctwa/conversion/events
     * @param \Meetbot\OpenApi\Model\CtwaConversionPostbackRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\CtwaConversionResult|null
     */
    public function ctwaConversionPostback(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/ctwa/conversion/events', [], $request, 'CtwaConversionResult');
    }

    /** POST /v1/ctwa/conversion/dataset/create
     * @param \Meetbot\OpenApi\Model\CtwaDatasetCreateRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function createCtwaDataset(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/ctwa/conversion/dataset/create', [], $request, 'StringIdResult');
    }

    /** GET /v1/ctwa/conversion/dataset/query
     * @param string|null $wabaId
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function queryCtwaDataset(mixed $wabaId): mixed
    {
        return $this->http->request('GET', '/v1/ctwa/conversion/dataset/query', ['wabaId' => $wabaId], null, 'StringIdResult');
    }
}
