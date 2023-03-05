<?php
declare(strict_types=1);
/* functions */

function foo(){
    echo "Hello World";
}
foo();


function foo2(){
    return "Hello World";
}
echo foo2();


//foo3();//Uncaught Error: Call to undefined function foo3()
if (true){
    function foo3(){
        echo "foo 3";
    }
}
foo3();


/* function inside function */ //not recommended

a();        //need to call a() first in order to call b()
b();
function a(){
    echo 22;
    function b(){
        echo 33;
    }
}

/* return types */

function one() : int {      //if declare(strict_types=1);
    return 22;      //need to be int
}

echo one();

function two() : void { //void no return
    return ;
}
echo two();

function three() : int | float {    //int or float return type
    return 0.5;
}
echo three();
function four() : ?float {      //? plus type to return type or null
    return null;
}
echo four();

function five() : mixed {      //mixed return multiple types //canno be marked as null (?mixed)
    $x = 99;
    $arr = [1,2];
    return [
        'arr' => $arr,
        'x' => $x,
    ];
}
var_dump( five());

echo "<hr>";
function sum (int|float $a, int|float|string $b){  //can use | to multiple params types function
    return $a + $b;
}

echo sum(0.4,0.9);
echo sum(4,5.9);
//echo sum(4,"a");


echo "<hr>";

function zed (int $a, int $b, int $c = 10){ //optional params must come in the end $c = 10
    return $a +$b +$c;
}
echo zed(1,2,3);
echo "<hr>";
echo zed(1,2);

// ... splat/unpacking operator
function lll (...$numbers) : int|float {       //pass multiple numbers seperated by comma (array)
    $sum = 0;
    foreach ($numbers as  $num){
        $sum += $num;
    }
    return $sum;
}

//$arr2 = [1,2,3,4,5,6,7,8,9,0];
echo lll(1,2);
echo "<hr>";
function lll2 (int $x, int $z, int ...$numbers) : int|float {       //pass multiple numbers seperated by comma
    return $x + $z + array_sum($numbers);
}

echo lll2(2,2,3,3,3,4);

/* naming arguments */
echo zed (a: 66, b: 99, c: 100);    //php 8 you can name arguments when calling function name:

setcookie(name:"cook", value: "999",httponly: true);
