<?php

namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
class Room {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    // Property
    #[ORM\Column(type: "string")]
    private string $name;

    #[ORM\Column(type: "integer")]
    private int $number;

    #[ORM\ManyToOne(targetEntity:Categories:: class, inversedBy:'room')]
    private Categories $category;

    #[ORM\ManyToOne(targetEntity:Hotel::class, inversedBy:'roomList')]
    private Hotel $hotel;


  // Constructor
    public function __construct(string $name, int $number, Categories $category, Hotel $hotel) {
    $this->name = $name;
    $this->number = $number;
    $this->category = $category;
    $this->hotel = $hotel;
}
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
     * Get the value of number
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}