<?php

require 'Account.php';

$conta1 = new Account('000.000.000-00','Luke Skywalker');

$conta1->deposit(500);

echo $conta1->getBalance();
echo $conta1->getNameHolder();
echo $conta1->getDocHolder();