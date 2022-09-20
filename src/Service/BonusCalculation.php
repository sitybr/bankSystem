<?php

namespace BankSystem\Service;

use BankSystem\Model\Employee;

class BonusCalculation
{
    private $totalBonus = 0;

    public function addBonusTo(Employee $employee): void
    {
        $this->totalBonus += $employee->BonusCalculation();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }
}
