<?php

$a = array("ena","dve","tri");
print_r($a);

$b=  array_pop($a);
echo PHP_EOL;
echo 'sedaj array_pop'.PHP_EOL;
print_r($a);
print_r($b);



echo PHP_EOL;
echo 'sedaj array_push'.PHP_EOL;
$c=  array_push($a,"cetrti");
print_r($a);
var_dump($c);

