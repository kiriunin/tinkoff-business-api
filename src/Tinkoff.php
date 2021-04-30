<?php

namespace Kiriunin\TinkoffBusinessApi;

use Kiriunin\TinkoffBusinessApi\Http\Client;
use Kiriunin\TinkoffBusinessApi\Http\ClientFactory;
use Psr\Log\LoggerInterface;

class Tinkoff
{
    public static function create(string $token, LoggerInterface $logger = null, bool $isSandbox = false): Client
    {
        return $isSandbox
            ? ClientFactory::createSandbox($token, $logger)
            : ClientFactory::create($token, $logger);
    }
}
