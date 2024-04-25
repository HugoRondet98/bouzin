<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

#[ORM\Entity]
class Hotel {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column(type : 'string')]
    private string $phone_number;

    #[ORM\Column()]
    private string $street_name;

    #[ORM\Column(type : 'integer')]
    private int $postal_code;

    #[ORM\Column()]
    private string $city;

    #[ORM\OneToMany(targetEntity : Room::class, mappedBy : 'hotel')]
    private Collection $roomList;

    #[ORM\ManyToMany(targetEntity : Services ::class, inversedBy : 'hotelList')]
    #[JoinTable(name: 'service_hotel')]
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

    
    // Method





    // Setter & Getter


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

    /**
     * Get the value of phone_number
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     */
    public function setPhoneNumber(string $phone_number): self
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

    /**
     * Get the value of roomList
     */
    public function getRoomList(): Collection
    {
        return $this->roomList;
    }

    /**
     * Set the value of roomList
     */
    public function setRoomList(Collection $roomList): self
    {
        $this->roomList = $roomList;

        return $this;
    }

    /**
     * Get the value of serviceList
     */
    public function getServiceList(): Collection
    {
        return $this->serviceList;
    }

    /**
     * Set the value of serviceList
     */
    public function setServiceList(Collection $serviceList): self
    {
        $this->serviceList = $serviceList;

        return $this;
    }
}