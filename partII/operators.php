<?php

/* arithmetic Operators ( + - * / % ** ) */
$x = +"10"; //if add + cast to int
var_dump($x);
$y = 3;
var_dump($x / $y);  //convert to float if need or if one is float
$z = 0;
var_dump(fdiv($x, $z));  //divide by 0 with fdiv return float(INF)

$o = 2.9;
var_dump($x % $o);  //0
var_dump(fmod($x , $o));  //float(1.3000000000000003)

echo "<hr>";
/* assignment Operators ( = += -= *= %= **= ) */
$x = ($y = 5) + 5;
var_dump($x, $y);   // 10 , 5

//$xx =77;
$xx += 99;//still prints 99
echo $xx;

echo "<hr>";
/* comparison Operators ( == === != !== <> ??  ?: ) */
$hh = 12;
$ii = "10";
var_dump($hh == $ii);   //true
var_dump($hh === $ii);  //false, compare data types
var_dump($hh !== $ii);
var_dump($hh <> $ii);
var_dump($hh <=> $ii);  // -1 if $hh smaller, 1 if bigger, 0 if equal

var_dump(1 == "hey");   //false

echo "<hr>";
$x = "hello";
$y = strpos($x, "h");
if ($y === false){      //if ($y == false){ if only == here, $y = 0 and false = 0, so is always true,
                        //compare type required here ===
    echo "not found";
} else {
    echo "found at index ".$y;
}

echo $x === false ? "not fount" : "found at index ".$y;

echo $x === false ? "not fount" : ($hh === $ii ? "oh yeah ".$y : " pop");//if stack, use ()


echo "<hr>";
$x = null;
$y = $x ?? "hello";
echo $y;    //prints "hello", $x is null

echo "<hr>";
$x = false;
$y = $x ?? "hello";
var_dump( $y);    //bool(false)  $y is false

echo "<hr>";
$y = $xxx ?? "hello";
var_dump( $y);    //string(5) "hello" because $xxx not exist
