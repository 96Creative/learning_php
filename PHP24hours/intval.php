<?php

/* 
doubleval() Erteket fogad es annak DOUBLE megfelelojet adja vissza.
intval() Erteket fogad es annak INT megfelelojet adja vissza.
strval() Erteket fogad es annak STRING megfelelojet adja vissza
*/

$a = 3.14;
print gettype($a);
print '<br>';
$b = intval ($a);
print gettype($b);
?>