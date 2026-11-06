<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class CatalogApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /open/catalog/list
     * @param \Meetbot\OpenApi\Model\CatalogListOpenRequest|array<string, mixed>|null $request
     * @return list<\Meetbot\OpenApi\Model\OpenCatalogListResponse>|null
     */
    public function list(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/list', [], $request, 'List<OpenCatalogListResponse>');
    }

    /** POST /open/catalog/cart/status
     * @param \Meetbot\OpenApi\Model\CartStatusOpenRequest|array<string, mixed>|null $request
     * @return list<\Meetbot\OpenApi\Model\CartStatusResponse>|null
     */
    public function cartStatus(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/cart/status', [], $request, 'List<CartStatusResponse>');
    }

    /** POST /open/catalog/cart/toggle
     * @param \Meetbot\OpenApi\Model\CartToggleOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function toggleCart(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/cart/toggle', [], $request, 'EmptyResult');
    }

    /** POST /open/catalog/create
     * @param \Meetbot\OpenApi\Model\CatalogCreateOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function create(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/create', [], $request, 'StringIdResult');
    }

    /** POST /open/catalog/delete
     * @param \Meetbot\OpenApi\Model\CatalogDeleteOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function delete(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/delete', [], $request, 'EmptyResult');
    }

    /** POST /open/catalog/bindwaba
     * @param \Meetbot\OpenApi\Model\CatalogBindWabaOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function bindWaba(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/bindwaba', [], $request, 'EmptyResult');
    }

    /** POST /open/catalog/unbindwaba
     * @param \Meetbot\OpenApi\Model\CatalogUnbindWabaOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EmptyResult|null
     */
    public function unbindWaba(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/unbindwaba', [], $request, 'EmptyResult');
    }

    /** POST /open/catalog/product/list
     * @param \Meetbot\OpenApi\Model\ProductListOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\PageResult|null
     */
    public function listProducts(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/list', [], $request, 'PageResult<CatalogProductListItemResponse>');
    }

    /** POST /open/catalog/product/detail
     * @param \Meetbot\OpenApi\Model\ProductDetailOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\CatalogProductResponse|null
     */
    public function getProduct(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/detail', [], $request, 'CatalogProductResponse');
    }

    /** POST /open/catalog/product/create
     * @param \Meetbot\OpenApi\Model\ProductCreateOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function createProduct(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/create', [], $request, 'StringIdResult');
    }

    /** POST /open/catalog/product/edit
     * @param \Meetbot\OpenApi\Model\ProductEditOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function editProduct(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/edit', [], $request, 'StringIdResult');
    }

    /** POST /open/catalog/product/delete
     * @param \Meetbot\OpenApi\Model\ProductDeleteOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\StringIdResult|null
     */
    public function deleteProduct(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/delete', [], $request, 'StringIdResult');
    }

    /** POST /open/catalog/product/batchImport
     * @param \Meetbot\OpenApi\Model\ProductBatchImportOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\LongIdResult|null
     */
    public function batchImport(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/batchImport', [], $request, 'LongIdResult');
    }

    /** POST /open/catalog/product/batchImport/detail
     * @param \Meetbot\OpenApi\Model\ProductBatchImportTaskDetailOpenRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\ProductBatchImportTaskDetailOpenResponse|null
     */
    public function batchImportDetail(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/catalog/product/batchImport/detail', [], $request, 'ProductBatchImportTaskDetailOpenResponse');
    }
}
