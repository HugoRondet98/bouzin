<?php
namespace App\Classes;


class ServicesHotel {

    private int $hotel_id;

    private int $services_id;

    public function __construct(int $hotel_id, int $services_id) {
        $this->hotel_id = $hotel_id;
        $this->services_id = $services_id;

    }


    /**
     * Get the value of hotel_id
     */
    public function getHotelId(): int
    {
        return $this->hotel_id;
    }

    /**
     * Set the value of hotel_id
     */
    public function setHotelId(int $hotel_id): self
    {
        $this->hotel_id = $hotel_id;

        return $this;
    }

    /**
     * Get the value of services_id
     */
    public function getServicesId(): int
    {
        return $this->services_id;
    }

    /**
     * Set the value of services_id
     */
    public function setServicesId(int $services_id): self
    {
        $this->services_id = $services_id;

        return $this;
    }
}