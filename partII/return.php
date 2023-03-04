<?php

declare(strict_types = 1); //only works in this file, must be the first declaration
/* return */
function sum($x,$z){
    return $x + $z; //return stops execution of the funtion but not the script
}

echo sum(1,2);
//return; //stops script
echo "hello";

/* declare */

//TICKS
$x = 15;
$y = 3;

function onTick(){
    echo "Tick<hr>";
}

register_tick_function('onTick');
declare (ticks = 3);

while ($x > $y){
    echo $x."<hr>";
    $x--;
}

