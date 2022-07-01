<?php

class Holder
{
    private string $name;
    private Doc $doc;


public function __construct(string $name, Doc $doc)
{
    $this->name = $name;
    $this->doc = $doc;
    $this->nameValidate($name);

}

public function getName(): String
{
    return $this->name;
}

public function getDoc(): String
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






}