<?php

namespace Kiriunin\TinkoffBusinessApi\Http;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ResponseDeserializerFactory
{
    public static function create(): ResponseDeserializer
    {
        return new ResponseDeserializer(self::createSerializer());
    }

    public static function createSerializer(): SerializerInterface
    {
        $propertyInfoExtractor = new PropertyInfoExtractor([], [
            new PhpDocExtractor(),
            new ReflectionExtractor(),
        ]);

        return new Serializer(
            [
                new ArrayDenormalizer(),
                new DateTimeNormalizer(),
                new ObjectNormalizer(null, null, null, $propertyInfoExtractor),
            ],
            [
                new JsonEncoder(),
            ]
        );
    }
}
