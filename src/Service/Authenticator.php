<?php

namespace BankSystem\Service;

use BankSystem\Authenticable;

Class Authenticator
{
    public function tryLogin(Authenticable $authenticable, string $password):void
    {
        if ($authenticable->canAuthenticate($password)){
            echo "User logged";
        }else{
            echo "Wrong password";
        }
    }

}