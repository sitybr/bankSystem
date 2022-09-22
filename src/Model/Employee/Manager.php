<?php

namespace BankSystem\Model\Employee;

use BankSystem\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function BonusCalculation():float
    {        
        return $this->getSalary();
        
    }
    
    public function canAuthenticate(string $password): string
    {
        return $password === '1597';
    }
}
