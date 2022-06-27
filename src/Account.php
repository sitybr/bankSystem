<?php

class Account {
    public string $docHolder;
    public string $nameHolder;
    public float $balance;


    public function withdraw(float $amountToWithdraw) :void
    {
        if ($amountToWithdraw > $this->balance){
            echo "Balance unavaiable";
            return;
        }
        
        $this->balance -= $amountToWithdraw;

        
    }

    public function deposit(float $amountToDeposit) :void
    {
        if($amountToDeposit < 0){
            echo "The amount must be positive";
            return;
        }

        $this->balance += $amountToDeposit;
    }
}