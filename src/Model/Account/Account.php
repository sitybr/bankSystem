<?php

namespace BankSystem\Model\Account;

class Account
{
    private Holder $holder;
    protected float $balance;
    private static $numberOfAccounts = 0;


    public function __construct($holder)
    {
        $this->holder = $holder;
        $this->balance = 0;
        self::$numberOfAccounts++;
    }

    public function withdraw(float $amountToWithdraw): void
    {   
        $withdrawFee = $amountToWithdraw * 0.05;
        $ammountWithFee = $amountToWithdraw + $withdrawFee;
        if ($ammountWithFee > $this->balance) {
            echo "Balance unavaiable";
            return;
        }

        $this->balance -= $ammountWithFee;
    }

    public function deposit(float $amountToDeposit): void
    {
        if ($amountToDeposit < 0) {
            echo "The amount must be positive";
            return;
        }

        $this->balance += $amountToDeposit;
    }

    public function transfer(float $amountToTransfer, $accountToTransfer): void
    {
        if ($amountToTransfer > $this->balance) {
            echo "Balance unavalaiable";
            return;
        }

        $this->withdraw($amountToTransfer);
        $accountToTransfer->deposit($amountToTransfer);
    }


    public function getBalance(): float
    {
        return $this->balance;
    }


    public static function getNumberOfAccounts(): int
    {
        return self::$numberOfAccounts;
    }

    public function getHolderName(): string
    {
        return $this->holder->getName();
    }

    public function getHolderDoc(): string
    {
        return $this->holder->getDoc();
    }
}
