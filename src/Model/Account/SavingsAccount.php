<?php

namespace BankSystem\Model\Account;

class SavingsAccount extends Account
{   

    public function withdraw(float $amountToWithdraw): void
    {   
        $withdrawFee = $amountToWithdraw * 0.03;
        $ammountWithFee = $amountToWithdraw + $withdrawFee;
        if ($ammountWithFee > $this->balance) {
            echo "Balance unavaiable";
            return;
        }

        $this->balance -= $ammountWithFee;
    }
    
}
