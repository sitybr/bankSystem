<?php

class Account
{
    private string $docHolder;
    private string $nameHolder;
    private float $balance = 0;


    public function __construct(string $docHolder, string $nameHolder)
    {
        $this->docHolder = $docHolder;
        $this->nameHolder = $nameHolder;
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

    public function transfer($amountToTransfer, $accountToTransfer): void
    {
        if ($amountToTransfer > $this->balance) {
            echo "Balance unavalaiable";
            return;
        }

        $this->withdraw($amountToTransfer);
        $accountToTransfer->deposit($amountToTransfer);
    }

    public function getDocHolder(): string
    {
        return $this->docHolder;
    }
    
    public function getNameHolder(): string
    {
        return $this->nameHolder;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }



}
