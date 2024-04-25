<?php

namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

#[ORM\Entity]
class Hotel {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
        private int $id;

    // Property
    #[ORM\Column(type: "string")]
    private string $name;

    #[ORM\Column(type: "string")]
    private string $phoneNumber;

    #[ORM\Column(type: "string")]
    private string $streetName;

    #[ORM\Column(type: "string")]
    private string $postalCode;

    #[ORM\Column(type: "string")]
    private string $city;


    #[ORM\OneToMany(targetEntity:Room::class,mappedBy:'hotel')]
    private Collection $roomList;

    #[ORM\ManyToMany(targetEntity:Services::class,inversedBy:'hotelList')]
    #[JoinTable(name:'service_hotel')]
    private Collection $serviceList;



    // Constructor
    /*public function __construct(string $name, int $phoneNumber, string $streetName, int $postalCode, string $city) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->streetName = $streetName;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }
    */
    
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
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phone_number
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the value of street_name
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * Set the value of street_name
     */
    public function setStreetName(string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * Get the value of postal_code
     */
    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postal_code
     */
    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = $postalCode;

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