<?php

namespace BankSystem\Model\Account;

class SavingsAccount extends Account
{

    protected function withdrawTax(): float
    {
        return 0.03;
    }
}
