<?php

/* INTEGERS */

echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';
echo PHP_INT_SIZE.'<br>';

echo $x = 0x2A.'<br>'; //hexadecimal for 42
echo $y = 055; //hexadecimal for 42
echo '<hr>';

$test = PHP_INT_MAX + 1; //if int max + 1 , type change to float auto

echo gettype($test);


echo '<hr>';
echo $x = (int) 5.8;
echo $x = (int) "756asd";   //get int 756

echo '<hr>';
echo is_int($x);    //return true or false

echo '<hr>';
echo $x = 5_000_000; //also accepted as 5000000
echo '<hr>';
echo $x = (int) "5_000_000"; // returns a 5