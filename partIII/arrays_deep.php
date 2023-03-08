<?php

require("../helpers.php");

$item = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

printPrintArray($item);    //print full array

/***********************************************************************/
printPrintArray(array_chunk($item, 2)); //array_chunk split in two arrays, dont preserve keys
printPrintArray(array_chunk($item, 2, true)); //pass true as 3rd arg, to include keys


/***********************************************************************/
$item2 = [1, 2, 3];
$item3 = ['a', 'b', 'c'];
printPrintArray(array_combine($item2, $item3));   //arrays must have same size
//array_combine
//    [1] => a
//    [2] => b
//    [3] => c


/***********************************************************************/
$item4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 33, 21, 54, 77];
// array_filter(array $array, ?callable $callback = null, int $mode = 0): array
$even = array_filter($item4, fn($num) => $num % 2 === 0); //array filter, use a callback function to action

printPrintArray($even);


/***********************************************************************/
$keys = array_keys($item);  //make the keys the values, and keys are 0,1,2,3
printPrintArray($keys);
$keys2 = array_keys($item, 2);  //ge key of value 2
printPrintArray($keys2);

/***********************************************************************/
// array_map(?callable $callback, array $array, array ...$arrays): array
$arrayMap = array_map(fn($n) => $n * 100, $item4);   //array_map, callback function , array
printPrintArray($arrayMap);

/***********************************************************************/
$arrayMerge = array_merge($item2, $item3, $item, $item); //can merge multiple, no matter keys size assoc
printPrintArray($arrayMerge);       //overwrite if same keys

/***********************************************************************/
//array_reduce — Iteratively reduce the array to a single value using a callback function
$item99 = [
    ['price' => 9.99, 'qtd' => 3, 'desc' => "itemA",],
    ['price' => 8.99, 'qtd' => 4, 'desc' => "itemAA",],
    ['price' => 6.99, 'qtd' => 11, 'desc' => "itemAAA",]
];
$arrayReduce = array_reduce($item99, fn($sum, $item99) => $sum + $item99['qtd'] * $item99['price']);

echo $arrayReduce;//142.82

/***********************************************************************/
$arraySearch = array_search(9, $item4);//return index of value 9 in $item4
var_dump($arraySearch);
$inArray = in_array('5', $item4);    //return true or false if in array
var_dump($inArray);

echo "<hr>";
/***********************************************************************/
$arrayA = [1, 2, 3, 4];
printPrintArray($arrayA);
$arrayB = [1, 2, 3, 4, 5];
printPrintArray($arrayB);
$arrayDiff = array_diff($arrayA, $arrayB); //empty A and B , no difference, B as all the same as A
echo "array_diff(arrayA , arrayB) --- ";
printPrintArray($arrayDiff);
$arrayDiff = array_diff($arrayB, $arrayA); //5 B and A, different, B as 5 and not A
echo "array_diff(arrayB  , arrayA) --- ";
printPrintArray($arrayDiff);

/***********************************************************************/
$arrayAA = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
printPrintArray($arrayAA);
$arrayBB = ['a' => 1, 'b' => 21, 'c' => 13, 'd' => 4, 'e' => 5];
printPrintArray($arrayBB);
$arrayDiffAssoc = array_diff_assoc($arrayAA, $arrayBB);
echo "array_diff_assoc(arrayAA , arrayBB) --- ";
printPrintArray($arrayDiff);//[4] => 5
echo "array_diff_assoc(arrayBB , arrayAA) --- ";
$arrayDiff = array_diff_assoc($arrayBB, $arrayAA);
printPrintArray($arrayDiff);//  [d] => 5

/***********************************************************************/
$arrayCC = ['a' => 3, 'b' => 1, 'c' => 4, 'd' => 2];
//array sorts return bool , just use to sort
asort($arrayCC);//sort by value
printPrintArray($arrayCC);
ksort($arrayCC);//sort by key
printPrintArray($arrayCC);
usort($arrayCC, fn($a, $b) => $a <=> $b);//sort with callback function
printPrintArray($arrayCC);

