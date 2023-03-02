<?php

/* EXPRESSIONS */
echo "hey";
$x = 5; //is an expression
$y = $x; //is an expression, anything after = is an expression
echo "<hr>";
function sum (int $x, int $y){
    return $x + $y;
}
$z = sum(5,4); //function is also expression
echo $z;
echo "<hr>";
if ($x == $y) {
    echo "yes";
} //expression

