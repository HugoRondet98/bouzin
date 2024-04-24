<?php

namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Services {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    // Property
    #[ORM\Column(type: "string")]
    private string $name;
    #[ORM\Column(type: "string")]
    private string $descriptionService;

    #[ORM\ManyToMany(targetEntity: Hotel::class, mappedBy:'serviceList')]
    private Collection $hotelList;

    // Constructor

    // Setter & Getter

    // Method

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of descriptionService
     */
    public function getDescriptionService(): string
    {
        return $this->descriptionService;
    }

    /**
     * Set the value of descriptionService
     */
    public function setDescriptionService(string $descriptionService): self
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }
}