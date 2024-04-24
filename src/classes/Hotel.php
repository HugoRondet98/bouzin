<?php

namespace App\Classes;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: 'ville')]
class City
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(name: 'identifiant')]
    private int $id;
    #[ORM\Column()]
    private string $name;

    // Constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    // Getter & Setter

    // Méthode

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

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
}
