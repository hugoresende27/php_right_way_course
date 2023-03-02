<?php
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
/* NULL */

//null constant
$z = NULL;
echo $z;    //print nothing, blank
var_dump($z);   //print NULL
echo is_null($z);
echo "<br>";
echo ($z === null); //same thing as funtion is_null

var_dump(($x));

echo PHP_VERSION;

echo "<hr>";
$x = null;
var_dump((string) $x);  //string(0) ""
var_dump((int) $x);  //int(0)
var_dump((bool) $x);  //bool(false)
var_dump((array) $x);  //array(0) { }

//if you don't know the value of a var, assign null