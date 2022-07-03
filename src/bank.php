<?php

require 'Account.php';
require 'Address.php';
require 'Holder.php';
require 'Doc.php';

$address = new Address('Fake City','Street Fake','Fakeland','154-B');
$conta1 = new Account(new Holder('Luke Skywalker',new Doc('000.000.000-00'),$address));

$conta1->deposit(500);

echo $conta1->getBalance().PHP_EOL;
echo $conta1->getHolderName().PHP_EOL;
echo $conta1->getHolderDoc().PHP_EOL;
echo $address->getCity().PHP_EOL;
echo $address->getStreet().PHP_EOL;
echo $address->getNeighborhood().PHP_EOL;
echo $address->getNumber().PHP_EOL;





$conta2 = new Account(new Holder('Obi Wan Kenobi',new Doc('123'),$address));

$conta2->deposit(500);

echo $conta2->getBalance().PHP_EOL;
echo $conta2->getHolderName().PHP_EOL;;
echo $conta2->getHolderDoc().PHP_EOL;;

echo Account::getNumberOfAccounts();