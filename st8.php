<?php


$a = array("apr", 2, "tret");
//var_dump($a);
$a[] = ("stiri");
var_dump($a);

$zavstran = 2;
echo 'odstranimo ' . $zavstran . PHP_EOL;
var_dump($a);
if (in_array($zavstran, $a)) {
    echo 'in array ' . $zavstran . PHP_EOL;
    echo array_search($zavstran,$a).PHP_EOL;
    unset($a[array_search($zavstran,$a)]);
}
//var_dump($a);


echo 'konec.' . PHP_EOL;
