<?php

function printPrintArray2 (array $array) : void {
    echo "<hr>";
    foreach ($array as $a){
        var_dump( $a);
        echo "<br>";
    }
    echo "<hr>";
}

function printPrintArray(array $array) : void {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}