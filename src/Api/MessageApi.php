<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Api;

use Meetbot\OpenApi\Http\MeetbotHttpClient;

class MessageApi
{
    public function __construct(private readonly MeetbotHttpClient $http) {}

    /** POST /open/whatsapp/message/send/block
     * @param \Meetbot\OpenApi\Model\SendBlockMessageRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\EventTaskIdResult|null
     */
    public function sendBlock(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/message/send/block', [], $request, 'EventTaskIdResult');
    }

    /** POST /open/whatsapp/message/send
     * @param \Meetbot\OpenApi\Model\SendMessageRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MessageIdResult|null
     */
    public function send(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/message/send', [], $request, 'MessageIdResult');
    }

    /** POST /open/whatsapp/file/upload/url
     * @param \Meetbot\OpenApi\Model\MediaFileUploadRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MediaIdResult|null
     */
    public function upload(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/file/upload/url', [], $request, 'MediaIdResult');
    }

    /** POST /open/whatsapp/file/download
     * @param \Meetbot\OpenApi\Model\MediaFileDownloadRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\DownloadUrlResult|null
     */
    public function download(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/file/download', [], $request, 'DownloadUrlResult');
    }

    /** POST /open/whatsapp/message/origin/batchQuery
     * @param \Meetbot\OpenApi\Model\MessageOriginBatchQueryRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MessageOriginBatchQueryResponse|null
     */
    public function batchQueryOrigin(mixed $request): mixed
    {
        return $this->http->request('POST', '/open/whatsapp/message/origin/batchQuery', [], $request, 'MessageOriginBatchQueryResponse');
    }

    /** POST /v1/whatsapp/file/delete
     * @param \Meetbot\OpenApi\Model\WhatsappMediaDeleteRequest|array<string, mixed>|null $request
     * @return \Meetbot\OpenApi\Model\MetaSuccessResult|null
     */
    public function deleteMedia(mixed $request): mixed
    {
        return $this->http->request('POST', '/v1/whatsapp/file/delete', [], $request, 'MetaSuccessResult');
    }
}
