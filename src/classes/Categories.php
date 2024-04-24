<?php

namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
class Categories {
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column(type: "integer")]
    private int $id;
// Property
#[ORM\Column(type: "string")]
    private string $name;
#[ORM\Column(type: "string")]
    private string $descriptionCategorie;

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
     * Get the value of descriptionCategorie
     */
    public function getDescriptionCategorie(): string
    {
        return $this->descriptionCategorie;
    }

    /**
     * Set the value of descriptionCategorie
     */
    public function setDescriptionCategorie(string $descriptionCategorie): self
    {
        $this->descriptionCategorie = $descriptionCategorie;

        return $this;
    }
}