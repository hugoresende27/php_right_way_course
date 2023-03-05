<?php

/* ARRAYS */

$programmingLanguage = array("PHP", "JAVA", "Python");  //old way

$programmingLanguage2 = ["PHP", "JAVA", "Python"];  //recent way

echo $programmingLanguage2 [-1];    //nothing, don't exist
echo $programmingLanguage2[1];  //JAVA
var_dump(isset($programmingLanguage2[33]));

echo count($programmingLanguage2);  //3

echo "<pre>";
print_r($programmingLanguage2);

$programmingLanguage2[] = "new entry";  //add to last
print_r($programmingLanguage2);

array_push($programmingLanguage2, "WHAT", "ARE", "YOU");    //add multiple entries with array_push
print_r($programmingLanguage2);

/* ASSOC ARRAYS */
$programmingLanguage3 = [
                            'php' =>  "8.1.2",
                            'java' => 19.2
                        ];

print_r($programmingLanguage3);
$newLang ="PASCAL";
$programmingLanguage3['go'] = 1.4;
$programmingLanguage3[$newLang] = ['another' => [
                                                    'more' => 007,
                                                    'time' => 999,
                                                    'time' => 666,//assume last value
                                                ],
                                    'some_test'=>[
                                        true => "a",
                                        1 => "b",
                                        "1" => "b",
                                        null => "e"
                                    ]];   //array inside array

print_r($programmingLanguage3);
echo "</pre>";
echo $programmingLanguage3[$newLang]['another']['more'];
echo $programmingLanguage3[$newLang]['another']['time'];
echo $programmingLanguage3[$newLang]['some_test'][null];    //e

$arrayNew = ['a','e','i','o','u'];
echo "<pre>";
print_r($arrayNew);
/*
    [0] => a
    [1] => e
    [2] => i
    [3] => o
    [4] => u
  */
$arrayNew = ['a','e', 99 => 'i' ,'o','u'];
print_r($arrayNew);
/*
    [0] => a
    [1] => e
    [99] => i
    [100] => o
    [101] => u
 */

echo array_pop($arrayNew); //removes last element
print_r($arrayNew);
echo array_shift($arrayNew); //removes first element, reindex only if key is int
print_r($arrayNew);

unset ($arrayNew[0], $arrayNew[1]);   //remove specific key, can be used with multiple indexes
print_r($arrayNew);

$array33 = [1,2,3];
unset($array33[0],$array33[3],$array33[2]);
$array33[] = 99;
print_r($array33);  //keeps last index, add 99 to index 3 after unset

$array55 = [ 'a' => 1, 'b' => null];
var_dump(array_key_exists('b',$array55));   //true  //even if null, array_key_exist is better, will return true
var_dump(isset($array55['b']));         //false //if key is null, isset will return false