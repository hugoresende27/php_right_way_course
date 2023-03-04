<?php

/* variables Scopes*/

$x = 5; //global scope

include ('../index.php');

echo $xx;

function foo(){
    global $x;  //make $x var global, so i can use inside function
    echo $x;
    echo $GLOBALS['x']; //also work, use $GLOBALS['var'], super global, avoid !
}

foo();

//static scope, don't destroy value after use