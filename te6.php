<?php

$a = array("apr", 2, "tret");
//var_dump($a);
$a[] = "stiri";
var_dump($a);

$zavstran = 2;
echo array_search($zavstran, $a) . PHP_EOL;
//    unset($a[array_search($zavstran,$a)]);



echo 'konec.' . PHP_EOL;
