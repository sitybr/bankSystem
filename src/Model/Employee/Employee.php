<?php

namespace BankSystem\Model\Employee;

use BankSystem\Model\Person;
use BankSystem\Model\Doc;

abstract class Employee extends Person
{

    private string $role;
    private float $salary;

    public function __construct(string $name, Doc $doc, string $role, float $salary)
    {
        parent::__construct($name, $doc);
        $this->role = $role;
        $this->salary = $salary;
    }

    public function getRole(): string
    {
        return $this->role;
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
