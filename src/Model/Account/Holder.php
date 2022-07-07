<?php

namespace BankSystem\Model\Account;
use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;

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
