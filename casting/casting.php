<?php

// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array 
// (unset) - converts to data type NULL ---> DEPRECATED


$a=5;
$a= (string) $a;
var_dump($a);
echo "<br>";


$b="sarv";
$b=(boolean) $b;
var_dump($b);
echo "<br>";

$c=true;
$a= (string) $c;
var_dump($c);
echo "<br>";

$d=1;
$d= (float) $d;
var_dump($d);
echo "<br>";




?>