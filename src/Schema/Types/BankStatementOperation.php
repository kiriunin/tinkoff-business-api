<?php

namespace Kiriunin\TinkoffBusinessApi\Schema\Types;

use Kiriunin\TinkoffBusinessApi\Schema\Entity;

class BankStatementOperation extends Entity
{
    public function __construct(
        private string $operationId,
        private string $id,
        private string $date,
        private float $amount,
        private string $drawDate,
        private string $payerName,
        private string $payerBic,
        private string $payerBank,
        private string $chargeDate,
        private string $recipient,
        private string $recipientAccount,
        private string $recipientBic,
        private string $recipientBank,
        private string $operationType,
        private string $paymentPurpose,
        private string $creatorStatus,
        private ?string $payerInn = null,
        private ?string $payerAccount = null,
        private ?string $payerCorrAccount = null,
        private ?string $recipientInn = null,
        private ?string $recipientCorrAccount = null,
        private ?string $paymentType = null,
        private ?string $payerKpp = null,
        private ?string $recipientKpp = null,
        private ?string $kbk = null,
        private ?string $oktmo = null,
        private ?string $taxEvidence = null,
        private ?string $taxPeriod = null,
        private ?string $taxDocNumber = null,
        private ?string $taxDocDate = null,
        private ?string $taxType = null,
        private ?string $executionOrder = null,
    )
    {
    }

    public function getOperationId(): string
    {
        return $this->operationId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getDrawDate(): string
    {
        return $this->drawDate;
    }

    public function getPayerName(): string
    {
        return $this->payerName;
    }

    public function getPayerBic(): string
    {
        return $this->payerBic;
    }

    public function getPayerBank(): string
    {
        return $this->payerBank;
    }

    public function getChargeDate(): string
    {
        return $this->chargeDate;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getRecipientAccount(): string
    {
        return $this->recipientAccount;
    }

    public function getRecipientBic(): string
    {
        return $this->recipientBic;
    }

    public function getRecipientBank(): string
    {
        return $this->recipientBank;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function getPaymentPurpose(): string
    {
        return $this->paymentPurpose;
    }

    public function getCreatorStatus(): string
    {
        return $this->creatorStatus;
    }

    public function getPayerInn(): ?string
    {
        return $this->payerInn;
    }

    public function getPayerAccount(): ?string
    {
        return $this->payerAccount;
    }

    public function getPayerCorrAccount(): ?string
    {
        return $this->payerCorrAccount;
    }

    public function getRecipientInn(): ?string
    {
        return $this->recipientInn;
    }

    public function getRecipientCorrAccount(): ?string
    {
        return $this->recipientCorrAccount;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function getPayerKpp(): ?string
    {
        return $this->payerKpp;
    }

    public function getRecipientKpp(): ?string
    {
        return $this->recipientKpp;
    }

    public function getKbk(): ?string
    {
        return $this->kbk;
    }

    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    public function getTaxEvidence(): ?string
    {
        return $this->taxEvidence;
    }

    public function getTaxPeriod(): ?string
    {
        return $this->taxPeriod;
    }

    public function getTaxDocNumber(): ?string
    {
        return $this->taxDocNumber;
    }

    public function getTaxDocDate(): ?string
    {
        return $this->taxDocDate;
    }

    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    public function getExecutionOrder(): ?string
    {
        return $this->executionOrder;
    }
}
