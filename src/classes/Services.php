<?php
namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Services {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column()]
    private string $descriptionService;

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