<?php

require_once 'core.php';


/* Classes & Objects */
// class is like a blueprint and can instance multiple object
// 1 class per file
// create the object in the index

echo "<hr><pre style='font-size: 10pt'>";
$transaction = new Transaction(100, "transaction A");
var_dump($transaction);

$transaction->addTax(8);
$transaction->applyDiscount(10);

echo "</pre><hr>";
echo $transaction->getAmount();

$class = 'Transaction'; //can pass the class name in a var
$transactionB = (new $class(100, "transaction B"))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount(); //if functions return object (return $this), i can chain functions

$transactionC = (new $class(500, "transaction C"))
    ->addTax(24)
    ->applyDiscount(33)
    ->getAmount();
//exit;
echo "</pre><hr>";
echo $transactionB;
echo "<hr>";
echo $transactionC;
echo "<hr><pre>";
$tt = new $class(19, 'xxx');
var_dump($tt);

///////////////////////////////////////////////////////////////////////////
//json_decode tip // if json_decode, true, return array, if not true, return object

$str = '{"a":1 ,"b":2,"c":3,"d":4}';
$array = json_decode($str, true);
$object = json_decode($str);
echo "<hr><pre style='font-size: 10pt'>";
var_dump($array);
var_dump($array['a']);
echo "<hr><pre style='font-size: 10pt'>";
var_dump($object);
var_dump($object->a);


/////////////////////////////////////////////////////////////////////
/// make an object with stdClass()

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;
echo "<hr><pre style='font-size: 10pt'>";
var_dump($obj);

/////////////////////////////////////
///  cast array to object

$arra = [1, 2, 3];

$newObj = (object)$arra;   //cast array to object

$newObj->{4} = 2;

var_dump($newObj->{0});

/////////////////////////////////////
///  cast integer to object
$newObjB = (object)1;   //["scalar"]=>int(1)
echo $newObjB->scalar;   // 1
//make scalar key, to int, float, string, bool,
$newObjC = (object)null;
var_dump($newObjC);   //object(stdClass)#7 (0) {}
