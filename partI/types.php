<?php


//DATA TYPES AND TYPE CASTING

//4 SCALAR TYPES
// - int   (-1, 2, 3, no decimal)
echo $score = 75;
echo gettype($score).'<br>';
// - bool  (true/false)
echo $completed = false;
echo gettype($completed).'<br>';
// - float (-1.5, 0.1, 0.005)
echo $price = 0.99;
echo gettype($price).'<br>';
// - string ("hugo")
echo $product = "rice";
echo gettype($product).'<br>';

echo '<hr>';
// 4 COMPOUND TYPES
// - array
$companies = [1,2,9.5,"gin",true];
foreach ($companies as $company) {
    echo $company;
}
print_r($companies);
// - object
// - callable
// - iterable

// 2 SPECIAL TYPES
// - resource
// - null
echo '<hr>';

//declare (strict_types=1); //to only allow the same types when called the function
function sum(int $x, int $y){
    $y = 5.5;
    var_dump($x,$y);

    return $x+$y;
}
function sum2( $x,  $y){
    var_dump($x,$y);
    return $x+$y;
}

echo sum(2,3);
echo '<hr>';
echo sum(2.5,"3");
echo '<hr>';
echo sum2(2,3);
echo '<hr>';
echo sum2(2.5,"3");

echo '<hr>';
$xx = (int)"5";
echo gettype($xx);
