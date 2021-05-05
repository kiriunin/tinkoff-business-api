<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Requests;

use DateTime;
use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatementRequest extends Entity
{
    public const DATE_FORMAT = 'Y-m-d';

    private ?string $from = null;
    private ?string $till = null;

    public function __construct(
        private string $accountNumber,
        ?DateTime $from = null,
        ?DateTime $till = null
    )
    {
        if ($from) {
            $this->setFrom($from);
        }

        if ($till) {
            $this->setTill($till);
        }
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

    public function setFrom(DateTime $from): void
    {
        $this->from = $from->format(self::DATE_FORMAT);
    }

    public function getTill(): ?string
    {
        return $this->till;
    }

    public function setTill(DateTime $till): void
    {
        $this->till = $till->format(self::DATE_FORMAT);
    }
}
