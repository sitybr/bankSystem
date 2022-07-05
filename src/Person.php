<?php

class Person
{
    protected string $name;
    protected Doc $doc;



    public function __construct(string $name, Doc $doc)
    {
        $this->name = $name;
        $this->nameValidate($name);        
        $this->doc = $doc;
        
    }


    public function getName(): string
    {
        return $this->name;
    }
    
    protected function nameValidate(string $name): void
    {
        if (strlen($name) < 5) {
            echo 'The name needs at least 5 letters.';
            exit();
        }
    }

    public function getDoc(): string
    {
        return $this->doc->getDoc();
    }
}
