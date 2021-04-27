<?php

namespace Kiriunin\TinkoffBusinessApi\Http;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ResponseDeserializer
{
    private const RESPONSE_FORMAT = 'json';

    public function __construct(private SerializerInterface $serializer)
    {
    }

    public function deserialize(ResponseInterface $response, string $responseClass)
    {
        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            $responseClass,
            self::RESPONSE_FORMAT
        );
    }
}
