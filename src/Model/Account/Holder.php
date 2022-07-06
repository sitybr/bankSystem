<?php

namespace Model\Account;

class Holder extends Person
{
    private Address $address;


    public function __construct(string $name, Doc $doc, Address $address)
    {
        parent::__construct($name, $doc);       
        $this->address = $address;        
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
