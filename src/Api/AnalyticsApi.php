<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class AnalyticsApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** GET /v1/whatsapp/analytics/query
     * @param \Meetbot\OpenApi\Model\WhatsappAnalyticsQueryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\WhatsappAnalyticsQueryResult|null
     */
    public function query(mixed $request): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/analytics/query', ['wabaId' => (is_array($request) ? ($request['wabaId'] ?? null) : $request->getWabaId()), 'field' => (is_array($request) ? ($request['field'] ?? null) : $request->getField()), 'start' => (is_array($request) ? ($request['start'] ?? null) : $request->getStart()), 'end' => (is_array($request) ? ($request['end'] ?? null) : $request->getEnd()), 'granularity' => (is_array($request) ? ($request['granularity'] ?? null) : $request->getGranularity()), 'phoneNumbers' => (is_array($request) ? ($request['phoneNumbers'] ?? null) : $request->getPhoneNumbers()), 'countryCodes' => (is_array($request) ? ($request['countryCodes'] ?? null) : $request->getCountryCodes()), 'productTypes' => (is_array($request) ? ($request['productTypes'] ?? null) : $request->getProductTypes()), 'metricTypes' => (is_array($request) ? ($request['metricTypes'] ?? null) : $request->getMetricTypes()), 'pricingTypes' => (is_array($request) ? ($request['pricingTypes'] ?? null) : $request->getPricingTypes()), 'pricingCategories' => (is_array($request) ? ($request['pricingCategories'] ?? null) : $request->getPricingCategories()), 'dimensions' => (is_array($request) ? ($request['dimensions'] ?? null) : $request->getDimensions()), 'conversationCategories' => (is_array($request) ? ($request['conversationCategories'] ?? null) : $request->getConversationCategories()), 'conversationTypes' => (is_array($request) ? ($request['conversationTypes'] ?? null) : $request->getConversationTypes()), 'conversationDirections' => (is_array($request) ? ($request['conversationDirections'] ?? null) : $request->getConversationDirections()), 'directions' => (is_array($request) ? ($request['directions'] ?? null) : $request->getDirections()), 'templateIds' => (is_array($request) ? ($request['templateIds'] ?? null) : $request->getTemplateIds()), 'templateGroupIds' => (is_array($request) ? ($request['templateGroupIds'] ?? null) : $request->getTemplateGroupIds()), 'groupIds' => (is_array($request) ? ($request['groupIds'] ?? null) : $request->getGroupIds()), 'productType' => (is_array($request) ? ($request['productType'] ?? null) : $request->getProductType()), 'useWabaTimezone' => (is_array($request) ? ($request['useWabaTimezone'] ?? null) : $request->getUseWabaTimezone())], null, 'WhatsappAnalyticsQueryResult');
    }

    /** POST /v1/whatsapp/analytics/templateInsights/enable
     * @param \Meetbot\OpenApi\Model\WhatsappTemplateInsightsEnableRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function enableTemplateInsights(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/analytics/templateInsights/enable', [], $request, 'MetaSuccessResult');
    }

    /** GET /v1/whatsapp/analytics/activities
     * @param string|null $wabaId
     * @param int|string|null $since
     * @param int|string|null $until
     * @param int|string|null $limit
     * @param string|null $after
     * @return \Meetbot\OpenApi\Model\WhatsappAnalyticsActivitiesResult|null
     */
    public function activities(mixed $wabaId, mixed $since, mixed $until, mixed $limit, mixed $after): mixed
    {
        return $this->http->request('GET', '/v1/whatsapp/analytics/activities', ['wabaId' => $wabaId, 'since' => $since, 'until' => $until, 'limit' => $limit, 'after' => $after], null, 'WhatsappAnalyticsActivitiesResult');
    }
}
