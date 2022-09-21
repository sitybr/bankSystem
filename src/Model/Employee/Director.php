<?php

namespace BankSystem\Model\Employee;

class Director extends Employee
{
    public function BonusCalculation():float
    {        
        return $this->getSalary() * 2;
        
    }
    
}
