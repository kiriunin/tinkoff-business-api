<?php

namespace Kiriunin\TinkoffBusinessApi\Http\Methods;

use GuzzleHttp\Exception\GuzzleException;
use Kiriunin\TinkoffBusinessApi\Schema\Types;

class Company extends Base
{
    /**
     * @throws GuzzleException
     */
    public function get(): Types\Company
    {
        $response = $this->client->request('GET', 'v1/company');

        return $this->deserializer->deserialize($response, Types\Company::class);
    }
}
