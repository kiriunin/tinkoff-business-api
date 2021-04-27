<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Company extends Entity
{
    public function __construct(
        private string $name,
        private string $city,
        private Requisites $requisites,
        private Bank $bank,
        private ?string $registrationDate = null,
        private ?string $opf = null
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getRequisites(): Requisites
    {
        return $this->requisites;
    }

    public function getBank(): Bank
    {
        return $this->bank;
    }

    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    public function getOpf(): ?string
    {
        return $this->opf;
    }
}
