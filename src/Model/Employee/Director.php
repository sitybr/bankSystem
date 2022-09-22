<?php

namespace BankSystem\Model\Employee;

use BankSystem\Authenticable;

class Director extends Employee implements Authenticable
{
    public function BonusCalculation():float
    {        
        return $this->getSalary() * 2;
        
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '1324';
    }
    
}
