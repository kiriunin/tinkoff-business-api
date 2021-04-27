<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Email extends Entity
{
    public function __construct(
        private string $email
    )
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
