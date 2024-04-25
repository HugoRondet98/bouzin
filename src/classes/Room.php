<?php
namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Room {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column(type : 'integer')]
    private int $number;

    #[ORM\ManyToOne(targetEntity : Categories::class, inversedBy: 'room')]
    private Categories $category;

    #[ORM\ManyToOne(targetEntity : Hotel::class, inversedBy: 'roomList')]
    private Hotel $hotel;


    //Constructor
    public function __construct(string $name, int $number,Categories $category, Hotel $hotel) {
        $this->name = $name;
        $this->number = $number;
        $this->category = $category;
        $this->hotel = $hotel;
    }
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