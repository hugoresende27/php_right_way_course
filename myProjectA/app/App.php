<?php

declare(strict_types = 1);

// Your Code

/**
 * @param string $dirPath
 * @return array
 * get files from transaction_files dir
 */
function getTransactionFiles(string $dirPath) : array {
    $files = [];

    foreach (scandir($dirPath) as $file)  {//scandir for files of $dirPath var
        if (is_dir($file)){ //to skip directiories, and only get files
            continue;
        }

        if (verifyCSV($file)){
            $files[] = $dirPath . $file;//add files to array
        }

    }

    return $files;
}

/**
 * @param $file
 * @return bool
 * verify if csv file
 */
function verifyCSV(string $fileName) : bool {
    $verify = explode('.', $fileName);
    if (isset($verify[1])){
        if ($verify[1] == "csv"){
            return true;
        }
    }
    return false;
}

/**
 * @param string $fileName
 * @return array
 * fgetscsv files
 */
function getTransactions (string $fileName, ?callable $transactionHandler = null): array {
    if ( ! file_exists($fileName)){
        trigger_error('File "'. $fileName . '" does not exist', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file); //get first line and descart

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false){
        if ($transactionHandler !== null){
            $transaction = $transactionHandler($transaction);
        }

//        $transactions [] = extractTransaction($transaction);
        $transactions [] = ($transaction);
    }

    return  $transactions;
}

/**
 * @param array $transactonRow
 * @return array
 * this function is used on getTransactions as callable
 */
function extractTransaction(array $transactonRow) : array {

    //deconstruct array
    [ $date , $checkNumber, $description, $amount ] = $transactonRow;

    //amounts are like this $1,360.55
    //str_replace to get number from string and float cast
    $amount = (float) str_replace(['$',','], '',$amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount,
    ];
}

function calculateTotals(array $transactions) : array {
    $totals = ['netTotal' => 0 , 'totalIncome' => 0 , 'totalExpense' => 0];

    foreach ($transactions as $transaction){
        $totals['netTotal'] += $transaction['amount'];

        if ($transaction['amount'] < 0){
            $totals['totalExpense'] += $transaction['amount'];
        } else {
            $totals['totalIncome'] += $transaction['amount'];
        }

    }
    return $totals;
}
