<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Requests;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;
use Kiriunin\TinkoffBusinessApi\Schema\Types\Email;
use Kiriunin\TinkoffBusinessApi\Schema\Types\InvoiceItemInfo;
use Kiriunin\TinkoffBusinessApi\Schema\Types\InvoicePayerInfo;

class InvoiceRequest extends Entity
{
    /**
     * @param InvoiceItemInfo[]|null $items
     * @param Email[]|null $contacts
     */
    public function __construct(
        private string $invoiceNumber,
        private ?string $dueDate = null,
        private ?string $invoiceDate = null,
        private ?string $accountNumber = null,
        private ?InvoicePayerInfo $payer = null,
        private ?array $items = [],
        private ?array $contacts = []
    )
    {
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function getPayer(): ?InvoicePayerInfo
    {
        return $this->payer;
    }

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function setInvoiceDate(?string $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function setPayer(?InvoicePayerInfo $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function addItem(InvoiceItemInfo $item): self
    {
        array_push($this->items, $item);

        return $this;
    }

    public function addContact(Email $contact): self
    {
        array_push($this->contacts, $contact);

        return $this;
    }
}
