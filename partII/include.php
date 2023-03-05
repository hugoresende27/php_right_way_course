<?php


//include 'match.php';//does NOT stop script execution

require '../index.php'; //stops script execution if file not found

echo ++$xx;

require_once '../index.php';    //request file only one time, all vars with the file values

echo ++$xx;