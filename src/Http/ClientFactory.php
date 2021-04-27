<?php

namespace Kiriunin\TinkoffBusinessApi\Http;

use GuzzleHttp\Client as HttpClient;
use Psr\Log\LoggerInterface;

class ClientFactory
{
    private const URL = 'https://business.tinkoff.ru/openapi/api/';

    private const URL_SANDBOX = 'https://business.tinkoff.ru/openapi/sandbox/api/';

    public static function create(string $token, ?LoggerInterface $logger = null): Client
    {
        return self::createClient($token, self::URL, $logger);
    }

    public static function createSandbox(string $token, ?LoggerInterface $logger = null): Client
    {
        return self::createClient($token, self::URL_SANDBOX, $logger);
    }

    private static function createClient(string $token, string $baseUri, ?LoggerInterface $logger = null): Client
    {
        $httpClient = new HttpClient([
            'base_uri' => $baseUri
        ]);

        $deserializer = ResponseDeserializerFactory::create();

        return new Client($token, $httpClient, $deserializer, $logger);
    }
}
