<?php

require_once 'autoload.php';


use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;
use BankSystem\Model\Account\{Account,CheckingAccount,Holder,SavingsAccount};
use BankSystem\Model\Employee\{Developer,Director,Employee,Manager};
use BankSystem\Service\BonusCalculation;

$one = new Developer('Lucas', new Doc('012.345.678-10'), 'Developer', 1000);
$two = new Director('Lucas', new Doc('012.345.678-10'), 'Director', 1000);
$three = new Manager('Lucas', new Doc('012.345.678-10'), 'Manager', 1000);
$bonus = new BonusCalculation();
$bonus->addBonusTo($one);
$bonus->addBonusTo($two);
$bonus->addBonusTo($three);
echo $bonus->getTotalBonus();

