<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatement extends Entity
{
    /**
     * @var BankStatementOperation[]|null $operation
     */
    private ?array $operation = null;

    /**
     * @param BankStatementOperation[]|null $operation
     */
    public function __construct(
        private string $accountNumber,
        private float $saldoIn,
        private float $income,
        private float $outcome,
        private float $saldoOut,
        ?array $operation = null
    )
    {
        $this->operation = $operation;
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
