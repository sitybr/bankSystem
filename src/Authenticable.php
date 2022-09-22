<?php

namespace BankSystem;

interface Authenticable
{
    public function canAuthenticate(string $password):string ;
}