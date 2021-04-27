<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class InvoiceItemInfo extends Entity
{
    public const VAT_NONE = 'None';
    public const VAT_0 = '0';
    public const VAT_10 = '10';
    public const VAT_18 = '18';
    public const VAT_20 = '20';

    public function __construct(
        private string $name,
        private float $price,
        private string $unit,
        private int $amount,
        private string $vat = self::VAT_NONE
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getVat(): string
    {
        return $this->vat;
    }
}
