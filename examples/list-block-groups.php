<?php
declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Meetbot\OpenApi\MeetbotClient;
use Meetbot\OpenApi\MeetbotConfig;

// API keys are provided at runtime, never stored in this example.
$apiKey = getenv('MEETBOT_API_KEY');
if (!$apiKey && in_array('--stdin-key', $argv, true)) { $apiKey = trim(stream_get_contents(STDIN)); }
if (!$apiKey) { fwrite(STDERR, "Set MEETBOT_API_KEY first.\n"); exit(1); }
$start = microtime(true);
try {
    $client = new MeetbotClient(new MeetbotConfig($apiKey));
    $groups = $client->blocks()->listGroups();
    if (!is_array($groups)) { throw new RuntimeException('Expected a group list'); }
    echo json_encode([
        'operation' => 'getBlockGroupList',
        'method' => 'GET',
        'path' => '/block/group/list',
        'success' => true,
        'groupCount' => count($groups),
        'elapsedMs' => round((microtime(true) - $start) * 1000),
        'testedAt' => date(DATE_ATOM),
    ], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR), PHP_EOL;
} catch (Throwable $error) {
    fwrite(STDERR, get_class($error) . ': ' . $error->getMessage() . PHP_EOL);
    exit(1);
}
