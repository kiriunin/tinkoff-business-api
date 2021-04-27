<?php

namespace Kiriunin\TinkoffBusinessApi\Http;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Kiriunin\TinkoffBusinessApi\Http\Methods\Accounts;
use Kiriunin\TinkoffBusinessApi\Http\Methods\Company;
use Kiriunin\TinkoffBusinessApi\Http\Methods\Invoice;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Client
{
    private ?Company $company;

    private ?Accounts $accounts;

    private ?Invoice $invoice;

    public function __construct(
        private string $token,
        private ClientInterface $httpClient,
        private ResponseDeserializer $deserializer,
        private ?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $method, string $uri, array $query = [], array $body = []): ResponseInterface
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ],
        ];

        if (count($query)) {
            $options['query'] = $query;
        }

        if (count($body)) {
            $options['json'] = $body;
        }

        try {
            $response = $this->httpClient->request($method, $uri, $options);
        } catch (RequestException $e) {
            $this->logger->error($e->getMessage());

            throw $e;
        } catch (GuzzleException $e) {
            $this->logger->critical($e->getMessage());

            throw $e;
        }

        return $response;
    }

    public function company(): Company
    {
        return $this->company = $this->company ?? new Company($this, $this->deserializer);
    }

    public function accounts(): Accounts
    {
        return $this->accounts = $this->accounts ?? new Accounts($this, $this->deserializer);
    }

    public function invoice(): Invoice
    {
        return $this->invoice = $this->invoice ?? new Invoice($this, $this->deserializer);
    }
}
