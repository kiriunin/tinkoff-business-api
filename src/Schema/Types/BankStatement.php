<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatement extends Entity
{
    /**
     * @param BankStatementOperation[]|null $operation
     */
    public function __construct(
        private string $accountNumber,
        private float $saldoIn,
        private float $income,
        private float $outcome,
        private float $saldoOut,
        private ?array $operation = null
    )
    {
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getSaldoIn(): float
    {
        return $this->saldoIn;
    }

    public function getIncome(): float
    {
        return $this->income;
    }

    public function getOutcome(): float
    {
        return $this->outcome;
    }

    public function getSaldoOut(): float
    {
        return $this->saldoOut;
    }

    public function getOperation(): ?array
    {
        return $this->operation;
    }
}
