<?php

require_once 'autoload.php';


use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;
use BankSystem\Model\Account\{Account,CheckingAccount,Holder,SavingsAccount};
use BankSystem\Model\Employee\{Developer,Director,Employee,Manager};
use BankSystem\Service\BonusCalculation;
use BankSystem\Authenticable;
use BankSystem\Service\Authenticator;

$developer = new Developer('Lucas', new Doc('012.345.678-10'),1000);
$director = new Director('Lucas', new Doc('012.345.678-10'), 1000);
$manager = new Manager('Lucas', new Doc('012.345.678-10'), 1000);

$authenticator = new Authenticator();
$authenticator->tryLogin($developer,'1234');


