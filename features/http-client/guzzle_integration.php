<?php /** @noinspection PhpUnhandledExceptionInspection */

use GuzzleHttp\Client;

require __DIR__ . './vendor/autoload.php';

$client = new Client();
$response = $client->request(
    'POST',
    '/post',
    [
        'base_uri' => 'https://httpbin.org',
        'json' => ['foo' => 'bar'],
    ],
);

echo $response->getStatusCode();
echo $response->getHeaderLine('content-type');
echo $response->getBody();
