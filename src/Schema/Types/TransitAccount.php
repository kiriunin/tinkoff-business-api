<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class TransitAccount extends Entity
{
    public function __construct(
        private string $accountNumber,
        private float $balance
    )
    {
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
