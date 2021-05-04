<?php

namespace Kiriunin\TinkoffBusinessApi\Http;

use GuzzleHttp\Client as HttpClient;
use Psr\Log\LoggerInterface;

class ClientFactory
{
    private const URL = 'https://business.tinkoff.ru/openapi/api/';

    private const URL_SANDBOX = 'https://business.tinkoff.ru/openapi/sandbox/api/';

    public static function create(string $token, array $guzzleOptions = [], ?LoggerInterface $logger = null,): Client
    {
        return self::createClient($token, self::URL, $guzzleOptions, $logger);
    }

    public static function createSandbox(string $token, array $guzzleOptions = [], ?LoggerInterface $logger = null): Client
    {
        return self::createClient($token, self::URL_SANDBOX, $guzzleOptions, $logger);
    }

    private static function createClient(string $token, string $baseUri, array $guzzleOptions = [], ?LoggerInterface $logger = null): Client
    {
        $options = array_merge($guzzleOptions, ['base_uri' => $baseUri]);

        $httpClient = new HttpClient($options);

        $deserializer = ResponseDeserializerFactory::create();

        return new Client($token, $httpClient, $deserializer, $logger);
    }
}
