<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;


define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);


require APP_PATH.'App.php';
require APP_PATH.'helpers.php';

$files = getTransactionFiles(FILES_PATH); //this function is in App.php, uses FILE_PATH var to get files in dir



$transactions = [];

foreach ($files as $file){  //loop to get all files

    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction'));

}


echo "<a href='backend.php'>  backend side of project </a><br>";
echo "<a href='index.php'> frontend project </a>";




