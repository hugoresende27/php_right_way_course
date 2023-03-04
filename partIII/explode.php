<?php

require ("../helpers.php");

$item = ['a' => 1 , 'b' => 2, 'c' => 3, 'd' => 4];

printPrintArray( $item);    //print full array

/***********************************************************************/
printPrintArray( array_chunk( $item, 2 ) ); //array_chunk split in two arrays, dont preserve keys
printPrintArray( array_chunk( $item, 2 ,true) ); //pass true as 3rd arg, to include keys



/***********************************************************************/
$item2 = [1,2,3];
$item3 = ['a','b','c'];
printPrintArray(array_combine( $item2, $item3 ));   //arrays must have same size
//array_combine
//    [1] => a
//    [2] => b
//    [3] => c


/***********************************************************************/
$item4 = [ 1,2,3,4,5,6,7,8,9,10,11,12,33,21,54,77];
// array_filter(array $array, ?callable $callback = null, int $mode = 0): array
$even = array_filter($item4 , fn ($num) => $num % 2 === 0); //array filter, use a callback function to action

printPrintArray($even);


/***********************************************************************/
$keys = array_keys($item);  //make the keys the values, and keys are 0,1,2,3
printPrintArray($keys);
$keys2 = array_keys($item,2);  //ge key of value 2
printPrintArray($keys2);

/***********************************************************************/
// array_map(?callable $callback, array $array, array ...$arrays): array
$arrayMap = array_map (fn ($n) => $n * 100 , $item4);   //array_map, callback function , array
printPrintArray($arrayMap);

/***********************************************************************/
$arrayMerge = array_merge($item2,$item3, $item, $item); //can merge multiple, no matter keys size assoc
printPrintArray($arrayMerge);       //overwrite if same keys

/***********************************************************************/
//$item99 = [
//
//]
//$arrayReduce = array_reduce($item , fn ($sum) => $)