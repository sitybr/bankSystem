<?php

class Holder
{
    private string $name;
    private Doc $doc;
    private Address $address;


public function __construct(string $name, Doc $doc, Address $address)
{
    $this->name = $name;
    $this->doc = $doc;
    $this->address = $address;
    $this->nameValidate($name);

}

public function getName(): string
{
    return $this->name;
}

public function getDoc(): string
{
    return $this->doc->getDoc();
}

public function nameValidate(string $name): void
{
    if(strlen($name) < 5){
        'The name needs at least 5 letters.';
        exit();
    }
}

public function getAddressCity(): string
{
    return $this->address->getCity();
}

public function getAddressStreet(): string
{
    return $this->address->getStreet();
}

public function getAddressNeighborhood(): string
{
    return $this->address->getNeighborhood();
} 

public function getAddressNumber(): string
{
    return $this->address->getNumber();
}





}