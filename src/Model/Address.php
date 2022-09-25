<?php

namespace BankSystem\Model;

use StringBackedEnum;

class Address
{
    private string $city;
    private string $street;
    private string $neighborhood;
    private string $number;

    public function __construct(string $city, string $street, string $neighborhood, string $number)
    {
        $this->city = $city;
        $this->street = $street;
        $this->neighborhood = $neighborhood;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return "{$this->street},{$this->number},{$this->neighborhood},{$this->city}";
    }
}