<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Bank extends Entity
{
    public function __construct(
        private string $bankName,
        private string $bankAddress,
        private string $corrAccount,
        private string $bankInn,
        private string $bankBic
    )
    {
    }

    public function getBankName(): string
    {
        return $this->bankName;
    }

    public function getBankAddress(): string
    {
        return $this->bankAddress;
    }

    public function getCorrAccount(): string
    {
        return $this->corrAccount;
    }

    public function getBankInn(): string
    {
        return $this->bankInn;
    }

    public function getBankBic(): string
    {
        return $this->bankBic;
    }
}
