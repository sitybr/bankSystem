<?php

class Holder extends Person
{
    private Address $address;


    public function __construct(string $name, Doc $doc, Address $address)
    {
        $this->name = $name;
        $this->doc = $doc;
        $this->address = $address;
        
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
