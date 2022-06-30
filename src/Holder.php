<?php

class Holder
{
private string $name;
private string $doc;


public function __construct(string $name, string $doc)
{
    $this->name = $name;
    $this->doc = $doc;
    $this->nameValidate($name);

}

public function getName(): string
{
    return $this->name;
}

public function getDoc(): string
{
    return $this->doc;
}

public function nameValidate(string $name): void
{
    if(strlen($name) < 5){
        'The name needs at least 5 letters.';
        exit();
    }
}






}