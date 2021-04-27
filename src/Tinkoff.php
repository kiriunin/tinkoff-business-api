<?php

namespace Kiriunin\TinkoffBusinessApi;

use Kiriunin\TinkoffBusinessApi\Http\Client;
use Kiriunin\TinkoffBusinessApi\Http\ClientFactory;
use Psr\Log\LoggerInterface;

class Tinkoff
{
    public static function create(string $token, bool $isSandbox = false, LoggerInterface $logger = null): Client
    {
        return $isSandbox
            ? ClientFactory::createSandbox($token, $logger)
            : ClientFactory::create($token, $logger);
    }
}
