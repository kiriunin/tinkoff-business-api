<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class Error extends Entity
{
    public function __construct(
        private string $errorId,
        private string $errorMessage,
        private string $errorCode,
        private ?ErrorDetails $errorDetails = null
    )
    {
    }

    public function getErrorId(): string
    {
        return $this->errorId;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }
}
