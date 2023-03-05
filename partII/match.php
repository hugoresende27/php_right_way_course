<?php

$paymentStatus = rand(1,5);

switch ($paymentStatus){    //comparasion ==
    case 1:
        echo "Pending";
        break;
    case 2:
        echo "Due";
        break;
    case 3:
        echo "Expired";
        break;
    case 4:
        echo "Delay";
        break;
    case 5:
        echo "Done";
        break;
}
echo "<hr>";
$x = match ($paymentStatus){    //strict comparasion ===
    1,5 => print "WHATTT",
    2,3 => print "MUM",
    default =>  hello()
};

function hello(): void
{
    echo 999;
}
echo "<hr>";
echo $x;