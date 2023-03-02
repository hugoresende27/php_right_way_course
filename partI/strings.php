<?php

/* STRINGS */

$firstName = "Hugo";
$name = "{$firstName} Resende";

$name .= " big boss!";
echo $name."<br>";
echo $name[-1]."<br>";
echo $name[10]."<br>";


echo "<hr>";
$name[-2] = '@';
var_dump($name);



echo "<hr>";
/**** Heredoc */
$text = <<<TEXT
Line 1 $firstName
Line 1332 $name
Line 133
Line 1321
Line 113

<h1> HELLLOOOOO </h1>
<li>        prints with spaces and all that</li>
TEXT;

echo $text;
echo nl2br( $text); //print with breaksecho "<hr>";


/**** Nowdoc */ //now doc uses quotes '' and can accept outside vars
$text2 = <<<'TEXT2'
Line 1 $firstName
Line 1332 $name
Line 133
Line 1321
Line 113
TEXT2;

echo $text2;
echo nl2br( $text2); //print with breaks
