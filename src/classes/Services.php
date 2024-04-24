<?php
namespace App\Classes;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

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