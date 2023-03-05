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
function verifyCSV($file) : bool {
    $verify = explode('.', $file);
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
function getTransactions (string $fileName): array {
    if ( ! file_exists($fileName)){
        trigger_error('File "'. $fileName . '" does not exist', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file); //get first line and descart

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false){
        $transactions [] = $transaction;
    }

    return  $transactions;
}
