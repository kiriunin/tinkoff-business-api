<?php

namespace Kiriunin\TinkoffBusinessApi\Http\Methods;

use Kiriunin\TinkoffBusinessApi\Http\Client;
use Kiriunin\TinkoffBusinessApi\Http\ResponseDeserializer;

abstract class Base
{
    protected Client $client;

    protected ResponseDeserializer $deserializer;

    public function __construct(Client $client, ResponseDeserializer $deserializer)
    {
        $this->client = $client;
        $this->deserializer = $deserializer;
    }
}
