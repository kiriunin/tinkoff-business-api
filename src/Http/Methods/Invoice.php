<?php

namespace Kiriunin\TinkoffBusinessApi\Http\Methods;

use GuzzleHttp\Exception\GuzzleException;
use Kiriunin\TinkoffBusinessApi\Schema\Requests\InvoiceRequest;
use Kiriunin\TinkoffBusinessApi\Schema\Responses\InvoiceResponse;

class Invoice extends Base
{
    /**
     * @throws GuzzleException
     */
    public function send(InvoiceRequest $request): InvoiceResponse
    {
        $response = $this->client->request('POST', 'v1/invoice/send', [], $request->toArray());

        return $this->deserializer->deserialize($response, InvoiceResponse::class);
    }
}
