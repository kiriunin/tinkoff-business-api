<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class InvoicePayerInfo extends Entity
{
    public function __construct(
        private string $name,
        private string $inn,
        private string $kpp
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInn(): string
    {
        return $this->inn;
    }

    public function getKpp(): string
    {
        return $this->kpp;
    }
}
