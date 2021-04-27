<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Requests;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatementRequest extends Entity
{
    public function __construct(
        private string $accountNumber,
        private ?string $from = null,
        private ?string $till = null
    )
    {
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): void
    {
        $this->from = $from;
    }

    public function getTill(): ?string
    {
        return $this->till;
    }

    public function setTill(?string $till): void
    {
        $this->till = $till;
    }
}
