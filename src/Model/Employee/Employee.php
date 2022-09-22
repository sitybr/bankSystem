<?php

namespace BankSystem\Model\Employee;

use BankSystem\Model\Person;
use BankSystem\Model\Doc;

abstract class Employee extends Person
{

    private float $salary;

    public function __construct(string $name, Doc $doc, float $salary)
    {
        parent::__construct($name, $doc);        
        $this->salary = $salary;
    }

    public function changeName($name): void
    {
        $this->name = $name;
        $this->nameValidate($name);
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    abstract public function BonusCalculation();
    
}
