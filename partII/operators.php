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
//$xx += 99;//still prints 99 if error not active
//echo $xx;

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


/* error Handling Operators ( @ ) */
$xxx = @file('foo.txt');    //supress the error, not recommended


/* incremment/decrement Operators ( ++ -- ) */
$x = null;
echo $x++;
echo $x--;

/* logical Operators ( && || ! and or xor ) */
$x = true;
$y = false;
echo "<hr>";

var_dump($x || $y);//true
var_dump($x && $y);//false
$z = $x and $y; //true, because of precedence, first is evaluated ($z = $x) and $y
var_dump($z);

/* bitwise Operators ( & | ^ ~ << >>) */    //operator to turn a switch, on, off, bits, 0 , 1
$x = 6;
$y = 3;
echo "<hr>";
var_dump($x & $y);// int (2)
//110
//&
//011
//---
//010 = 2
var_dump($x | $y);// int (7)
//110
//&
//011
//---
//111 = 7 //decimal sum
var_dump($x ^ $y);// int (5)
//110
//^
//011
//---
//010 = 5 //decimal sum

echo "<hr>";
/* array Operators ( + == === != <> !==) */
$x = ['a', 'b', 'c'];
$y = ['aa', 'bb', 'cc','ee','ii'];
$i = ['a' => 1, 'b' => 2, 'c' => 3];

$z = $x + $y;
var_dump($z);//only adds ee and ii
echo "<hr>";
$z = $x + $i;
var_dump($z);//only adds ee and ii