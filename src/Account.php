<?php

class Account
{
    private string $holderDoc;
    private string $holderName;
    private float $balance;
    private static $numberOfAccounts = 0;


    public function __construct(string $holderDoc, string $holderName)
    {
        $this->holderDoc = $holderDoc;
        $this->holderName = $holderName;
        $this->holderNameValidate($holderName);
        $this->balance = 0;

        self::$numberOfAccounts ++;
    }

    public function withdraw(float $amountToWithdraw): void
    {
        if ($amountToWithdraw > $this->balance) {
            echo "Balance unavaiable";
            return;
        }

        $this->balance -= $amountToWithdraw;
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

    public function getHolderDoc(): string
    {
        return $this->holderDoc;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    private function holderNameValidate(string $holderName)
    {

        if (strlen($holderName) < 5) {
            echo "The name needs at least 5 letters.";
            exit();
        }
    }

    public static function getNumberOfAccounts(): int
    {
        return self::$numberOfAccounts;
    }





}
