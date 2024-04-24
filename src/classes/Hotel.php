<?php
namespace App\Classes;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    // Property
    #[ORM\Column(type: "string")]
    private string $name;
    #[ORM\Column(type: "int")]
    private int $phone_number;
    #[ORM\Column(type: "string")]
    private string $street_name;
    #[ORM\Column(type: "int")]
    private int $postal_code;
    #[ORM\Column(type: "string")]
    private string $city;
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
     * Get the value of phone_number
     */
    public function getPhoneNumber(): int
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     */
    public function setPhoneNumber(int $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Get the value of street_name
     */
    public function getStreetName(): string
    {
        return $this->street_name;
    }

    /**
     * Set the value of street_name
     */
    public function setStreetName(string $street_name): self
    {
        $this->street_name = $street_name;

        return $this;
    }

    /**
     * Get the value of postal_code
     */
    public function getPostalCode(): int
    {
        return $this->postal_code;
    }

    /**
     * Set the value of postal_code
     */
    public function setPostalCode(int $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
