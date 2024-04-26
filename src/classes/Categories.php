<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Categories {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column()]
    private string $descriptionCategorie;

    #[ORM\OneToMany(targetEntity : Room::class, mappedBy : 'category')]
    private Collection $room;


    // Constructor
    // public function __construct(string $name, string $descriptionCategorie) {
    //     $this->name = $name;
    //     $this->descriptionCategorie = $descriptionCategorie;

    // }

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