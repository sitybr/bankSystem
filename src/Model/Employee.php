<?php

namespace Model;

Class Employee extends Person
{
    
    private string $role;

    public function __construct(string $name, Doc $doc, string $role )
    {
        parent::__construct($name, $doc );      
        $this->role = $role;
    }    

    public function getRole(): string
    {
        return $this->role;
    }

    public function changeName($name): void
    {
        $this->name = $name;
        $this->nameValidate($name);
    }

    

}