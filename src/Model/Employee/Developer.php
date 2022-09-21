<?php

namespace BankSystem\Model\Employee;

class Developer extends Employee
{
    public function BonusCalculation():float
    {        
        return $this->getSalary() * 0.5;
        
    }
    
}
