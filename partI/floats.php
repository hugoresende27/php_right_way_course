<?php


/* FLOATS */

echo PHP_FLOAT_MAX.'<br>';
echo PHP_FLOAT_MIN.'<br>';

$x = floor((0.1 + 0.7) * 10); //rounds down
$y = ceil((0.1 + 0.7) * 10); //rounds down

echo $x.'<br>';        // 7
echo $y.'<br>';        // 8

//NEVER TRUST OR COMPARE FLOAT NUMBERS FOR EQUALITY
$a = 0.23;;
$b = 1 -0.77;
echo '<hr>';
var_dump($a,$b);    //float(0.23) , float(0.22999999999999998)

if ($a == $b){
    echo "yes";
} else echo "no";

echo NAN;       //prints NAN
echo '<hr>';
echo $xx = log (-1);  //echo NAN
echo "<br>";
var_dump(is_nan($xx));

echo '<hr>';
echo INF."<br>";   //prints INFinity
echo $c = PHP_FLOAT_MAX * 2; //echo INF
echo "<br>";
var_dump(is_infinite($c));
echo "<br>";
var_dump(is_finite($c));

echo '<hr>';
$h = 5;
var_dump( (float) $h);

echo '<hr>';
$hh = "5.958asd_23";
var_dump( (float) $hh);