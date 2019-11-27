<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TCustomerRepository")
 */
class TCustomer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $event_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $merchant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $terminal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     */
    private $card_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $card_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $amount;

    /**
     * @ORM\Column(type="float", length=10)
     */
    private $currency;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $country;

    /**
     * @ORM\Column(type="date")
     */
    private $created;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): self
    {
        $this->event_name = $event_name;

        return $this;
    }

    public function getMerchant(): ?string
    {
        return $this->merchant;
    }

    public function setMerchant(string $merchant): self
    {
        $this->merchant = $merchant;

        return $this;
    }

    public function getTerminal(): ?string
    {
        return $this->terminal;
    }

    public function setTerminal(string $terminal): self
    {
        $this->terminal = $terminal;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCardId(): ?int
    {
        return $this->card_id;
    }

    public function setCardId(int $card_id): self
    {
        $this->card_id = $card_id;

        return $this;
    }

    public function getCardType(): ?string
    {
        return $this->card_type;
    }

    public function setCardType(string $card_type): self
    {
        $this->card_type = $card_type;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }
}
