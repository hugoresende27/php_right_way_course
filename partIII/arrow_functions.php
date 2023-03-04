<?php
echo "<pre>";
/* variable, anonymous 6 arrow functions */

function sum (int|float ...$numbers): int|float {
    return array_sum($numbers);
}
//this works, search for function "sum",
// use a var and attribute the value of the name of the function
$findFunction = "sum";
echo $findFunction (3,5,7,8);

$z = "sub";
if (is_callable($z)){   //is_callable to make sure function exist
    echo $z;
}

/* Anonymous *///to call anonymous, use var to assign function
$sum = function (int|float $f, int|float $e) use ($z){     //also can use use (var) to get varrs outside scope
    echo "<hr>";
    echo $z;
    return $f + $e;
};

echo $sum(1,2);

/* arrow function */
echo "<hr>";
$arr = [2,3,4,6];

$arr2 = array_map(function($number) {       //array_map (action , array)
    return $number * $number;
}, $arr);

print_r($arr2);

$arr3 = array_map(fn($num) => $num * $num, $arr );  //arrow function fn(name) => return
print_r($arr3);