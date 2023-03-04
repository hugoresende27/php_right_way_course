<?php

/* php.ini & configuration */

//phpinfo();    //Loaded Configuration File 	/etc/php/8.1/fpm/php.ini

var_dump (ini_get('error_reporting'));
var_dump(E_ALL);
$array = [1];

echo $array[3];

ini_set('error_reporting' ,E_ALL & ~E_WARNING); //this turns off the error warning and keeps rest
//errorFunction();
echo $array[3];



var_dump (ini_get('display_errors'));//1
ini_set('display_errors', 0);
var_dump (ini_get('display_errors'));//0
$array = [1];

echo $array[3];
ini_set('display_errors', 1);
var_dump (ini_get('max_execution_time'));//1
ini_set('max_execution_time', 3);
//var_dump (ini_get('max_execution_time'));//0

//sleep(10);
echo "<hr>";

var_dump(ini_get('memory_limit'));
//ini_set('memory_limit', 5000000000000);
var_dump(ini_get('memory_limit'));
$string = 'x';
for ($i = 0 ; $i < 100 ; $i++){
//    $string .=$string;
}

//Allowed memory size of 134217728 bytes exhausted (tried to allocate 134217760 bytes)
echo $string;

echo "<hr>";
var_dump(ini_get('file_uploads'));
echo "<hr>";
var_dump(ini_get('upload_tmp_dir'));
echo "<hr>";
var_dump(ini_get('upload_max_filesize'));
echo "<hr>";
var_dump(ini_get('include_path'));