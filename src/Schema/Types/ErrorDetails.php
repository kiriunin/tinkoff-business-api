<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class ErrorDetails extends Entity
{
    public function __construct(
        private ?string $property = null
    )
    {
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }
}
