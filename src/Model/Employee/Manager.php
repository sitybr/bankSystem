<?php

namespace BankSystem\Model\Employee;

class Manager extends Employee
{
    public function BonusCalculation():float
    {        
        return $this->getSalary();
        
    }
    
}
