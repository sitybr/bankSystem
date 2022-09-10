<?php

require_once 'autoload.php';


use BankSystem\Model\Person;
use BankSystem\Model\Address;
use BankSystem\Model\Doc;
use BankSystem\Model\Account\Account;
use BankSystem\Model\Account\SavingsAccount;
use BankSystem\Model\Account\Holder;
use BankSystem\Model\Employee;


$account = new SavingsAccount(
    new Holder('Luke Skywalker',
                new Doc('000.000.000-00'),  
                new Address('London','Oxford Street','Oxford','100'))
);

$account->deposit(500);
$account->withdraw(100);
echo $account->getBalance();