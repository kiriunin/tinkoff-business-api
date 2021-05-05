<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Requests;

use DateTime;
use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatementRequest extends Entity
{
    public const DATE_FORMAT = 'Y-m-d';

    private ?string $from;
    private ?string $till;

    public function __construct(
        private string $accountNumber,
        ?DateTime $from = null,
        ?DateTime $till = null
    )
    {
        $this->from = $from->format(self::DATE_FORMAT);
        $this->till = $till->format(self::DATE_FORMAT);
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

    public function setFrom(?DateTime $from): void
    {
        $this->from = $from->format(self::DATE_FORMAT);
    }

    public function getTill(): ?string
    {
        return $this->till;
    }

    public function setTill(?DateTime $till): void
    {
        $this->till = $till->format(self::DATE_FORMAT);
    }
}
