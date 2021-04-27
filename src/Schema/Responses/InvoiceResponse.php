<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Responses;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class InvoiceResponse extends Entity
{
    public function __construct(
        private string $pdfUrl
    )
    {
    }

    public function getPdfUrl(): string
    {
        return $this->pdfUrl;
    }
}
