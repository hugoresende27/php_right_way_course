<?php


echo "<h1>Hello World";
echo "<li>Best PHP Syntax</li>";

//this will print 1
echo print "hello world";
//this print hello world
print "hello world";
echo "hello", "world";
echo "hello's";
echo 'hello\'s';

$x = 1;
//& reference var, $y keeps the same value as $x always
$y = &$x;

$x = 3;
// y as the value of 3, &referenced with x
echo "<h3><li>",$y,"</li>";

$name = "Hugo";
echo "Hello".$name;

echo "<li>If only php, dont close the tag, to see error easly</li>";

?>


if closed tag of php code in page can come as text

<!DOCTYPE html>
<html>
<body>
    <h1>
        <?= "HUGO" ?>
        <h1>Aula 1</h1>
    </h1>
</body>
</html>