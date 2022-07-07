<?php

spl_autoload_register(function($class){
    $pathFile = str_replace('BankSystem','src',$class);
    $pathFile = str_replace('\\',DIRECTORY_SEPARATOR,$pathFile);
    $pathFile .= '.php';

    if(file_exists($pathFile)){
        require_once $pathFile;
    }
});