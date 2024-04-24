<?php
namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Categories {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;
    private string $name;
    private string $descriptionCategorie;

    // Constructor


    // Method





    // Setter & Getter
    
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