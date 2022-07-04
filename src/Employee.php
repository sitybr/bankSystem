<?php

Class Employee extends Person
{
    
    private string $role;

    public function __construct(string $name, Doc $doc, string $role )
    {
        $this->name = $name;
        $this->doc = $doc;
        $this->role = $role;
    }    

    public function getRole(): string
    {
        return $this->role;
    }

}