<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Account extends Entity
{
    public function __construct(
        private string $accountNumber,
        private string $name,
        private string $currency,
        private string $bankBik,
        private string $accountType,
        private Balance $balance,
        private ?string $activationDate = null,
        private ?TransitAccount $transitAccount = null
    )
    {
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getBankBik(): string
    {
        return $this->bankBik;
    }

    public function getAccountType(): string
    {
        return $this->accountType;
    }

    public function getBalance(): Balance
    {
        return $this->balance;
    }

    public function getActivationDate(): ?string
    {
        return $this->activationDate;
    }

    public function getTransitAccount(): ?TransitAccount
    {
        return $this->transitAccount;
    }
}
