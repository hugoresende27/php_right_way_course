<?php
require 'core.php';
echo "composer lesson<hr>";

spl_autoload_register(function ($class) {
    var_dump($class);   //myClasses\Transaction
//    var_dump(__DIR__);///var/www/html/php_right_way/poo/partI
    $path = __DIR__ . '/' . lcfirst(str_replace('\\', '/', $class)) . '.php';//to get myClasses/Transaction.php

//    $path = __DIR__ . '/'. lcfirst( str_replace('\\','/', $class) ). '.php';//to get myClasses/Transaction.php

    if (file_exists($path)) {
        require $path;
    }

});

$transaction = new \myClasses\Transaction(1, 1);

varDump($transaction);

/* psr php standart recommendations PSR !!!! */
//https://www.php-fig.org/psr/psr-4/        //psr for autoloading

/* use composer instead of spl_autoload_register() */
/* composer is a tool for dependency managers
/* https://packagist.org/   to find packages to install and use with composer
/* Example : composer require ramsey/uuid


