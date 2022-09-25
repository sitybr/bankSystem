<?php

namespace BankSystem\Model;

trait MethodsAccess
{

    public function __get(string $attribute)
    {
        $method = 'get'.ucfirst($attribute);
        return $this->$method();
    }
}