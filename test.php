<?php

require_once 'autoload.php';


use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;
use BankSystem\Model\Account\Account;
use BankSystem\Model\Account\SavingsAccount;
use BankSystem\Model\Account\CheckingAccount;
use BankSystem\Model\Account\Holder;
use BankSystem\Model\Employee;
use BankSystem\Service\BonusCalculation;

$one = new Employee('Lucas', new Doc('012.345.678-10'), 'Developer', 1000);
$two = new Employee('Lucas', new Doc('012.345.678-10'), 'Developer', 3000);
$bonus = new BonusCalculation();
$bonus->addBonusTo($one);
$bonus->addBonusTo($two);
echo $one->getName();
