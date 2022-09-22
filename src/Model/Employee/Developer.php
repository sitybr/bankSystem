<?php

namespace BankSystem\Model\Employee;

use BankSystem\Authenticable;

class Developer extends Employee implements Authenticable
{
    public function BonusCalculation():float
    {        
        return $this->getSalary() * 0.5;
        
    }
    
    public function canAuthenticate(string $password):string
    {
        return $password === '1234';
    }
}
