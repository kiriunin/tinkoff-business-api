<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Requisites extends Entity
{
    public function __construct(
        private string $fullName,
        private string $address,
        private string $inn,
        private ?string $kpp = null,
        private ?string $ogrn = null,
        private ?string $foreignName = null,
    )
    {
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getInn(): string
    {
        return $this->inn;
    }

    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    public function getForeignName(): ?string
    {
        return $this->foreignName;
    }
}
