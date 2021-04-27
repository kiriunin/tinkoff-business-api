<?php

namespace Kiriunin\TinkoffBusinessApi\Http\Methods;

use GuzzleHttp\Exception\GuzzleException;
use Kiriunin\TinkoffBusinessApi\Schema\Requests\BankStatementRequest;
use Kiriunin\TinkoffBusinessApi\Schema\Types\Account;
use Kiriunin\TinkoffBusinessApi\Schema\Types\BankStatement;

class Accounts extends Base
{
    /**
     * @throws GuzzleException
     */
    public function get(): array
    {
        $response = $this->client->request('GET', 'v3/bank-accounts');

        return $this->deserializer->deserialize($response, Account::class.'[]');
    }

    /**
     * @throws GuzzleException
     */
    public function statement(BankStatementRequest $request): BankStatement
    {
        $response = $this->client->request('GET', 'v1/bank-statement', $request->toArray());

        return $this->deserializer->deserialize($response, BankStatement::class);
    }
}
