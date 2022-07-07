<?php

require_once 'autoload.php';

use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;
use BankSystem\Model\Account\Account;
use BankSystem\Model\Account\Holder;
use BankSystem\Model\Employee;

$func = new Employee('Lucas',new Doc('000.000.000-00'),'Dev');

$func->changeName('Luc');

echo $func->getName();

