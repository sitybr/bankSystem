<?php

require 'Account.php';

$conta1 = new Account('000.000.000-00','Luke Skywalker');

$conta1->deposit(500);

echo $conta1->getBalance().PHP_EOL;
echo $conta1->getHolderName().PHP_EOL;;
echo $conta1->getHolderDoc().PHP_EOL;;

$conta2 = new Account('000.000.000-00','Obi Wan Kenobi');

$conta2->deposit(500);

echo $conta2->getBalance().PHP_EOL;
echo $conta2->getHolderName().PHP_EOL;;
echo $conta2->getHolderDoc().PHP_EOL;;

echo Account::getNumberOfAccounts();