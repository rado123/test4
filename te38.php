<?php

$a = 'list, update, create';
$c=trim($a);
$b = explode(",", trim($a," "));
//$b="asdf";
echo "a=" . $a . PHP_EOL;
//echo "b=" . $b . PHP_EOL;
print_r($b);
print_r($c);
//var_dump($a,$b);

