<?php

require_once 'core.php';
require_once 'namespaces_classes/Transaction.php';
require_once 'namespaces_classes/Overwrite.php';
/* to use classes with same name, use namespace */

use Hugo\{Overwrite,Transaction};   //use {} to import multiple classes from same dir :)
use Hugo;   //also can import full dir and use
use myClasses\Transaction as Trans;     //can use as for same class names
//use function Hugo\Transaction;    //use also can use function or const
//use const Hugo\Transaction;


$t = new Hugo\Transaction(); //transaction from namespace Hugo
$l = new Trans(200,"more"); //transaction from namespace myClasses , as Trans

varDump($t);
varDump($l);

$x = new Hugo\Overwrite();
varDump($x);

//include ('file_here_will_not_heredit_previous_classes');