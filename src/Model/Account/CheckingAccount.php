<?php

namespace BankSystem\Model\Account;

class CheckingAccount extends Account
{

    protected function withdrawTax(): float
    {
        return 0.05;
    }
}
