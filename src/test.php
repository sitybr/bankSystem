<?php

require 'Person.php';
require 'Account.php';
require 'Address.php';
require 'Holder.php';
require 'Doc.php';
require 'Employee.php';

$func = new Employee('Lucas',new Doc('000.000.000-00'),'Dev');

$func->changeName('Luc');
echo $func->getName();

