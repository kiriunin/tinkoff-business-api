<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Requests;

use DateTime;
use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatementRequest extends Entity
{
    public const DATE_FORMAT = 'Y-m-d';

    public function __construct(
        private string $accountNumber,
        private ?DateTime $from = null,
        private ?DateTime $till = null
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
        return $this->from->format(self::DATE_FORMAT);
    }

    public function setFrom(?DateTime $from): void
    {
        $this->from = $from;
    }

    public function getTill(): ?string
    {
        return $this->till->format(self::DATE_FORMAT);
    }

    public function setTill(?DateTime $till): void
    {
        $this->till = $till;
    }
}
