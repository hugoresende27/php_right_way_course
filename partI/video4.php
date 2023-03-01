<?php

define('STATUS_PAID','paid');
const STATUS_PAID2 = 'paid';

$name = "Hugo";
$name = "Resende";

echo $name;
echo "<hr>";
echo STATUS_PAID;
echo "<hr>";
echo STATUS_PAID2;
echo "<hr>";
//return 1 or 0 true or false
echo defined('STATUS_PAID');
echo "<hr>";
if (true){
    define('STATUS', 'work');   //this works, use define to define a const during execution
}

if (true){
//    const STATUS2 =  "work"; // this dont work
}

$paid = "PAID";

define ('MORE_'.$paid,$paid); //use define to make a dynamic const

echo MORE_PAID; //this works
echo "<hr>";
echo PHP_VERSION;
echo "<hr>";
echo __LINE__;
echo "<hr>";
echo __FILE__;
echo "<hr>";
$foo = "bar";

$$foo = "baz"; // same as $bar = "baz"; //variable variable

echo $foo;
echo "<hr>";
echo $bar;

