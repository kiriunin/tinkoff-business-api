<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Balance extends Entity
{
    public function __construct(
        private float $otb,
        private float $authorized,
        private float $pendingPayments,
        private float $pendingRequisitions
    )
    {
    }

    public function getOtb(): float
    {
        return $this->otb;
    }

    public function getAuthorized(): float
    {
        return $this->authorized;
    }

    public function getPendingPayments(): float
    {
        return $this->pendingPayments;
    }

    public function getPendingRequisitions(): float
    {
        return $this->pendingRequisitions;
    }
}
