<?php

echo "asdfasdfasdf";
$c = array("ulica" => "Cankarjeva", "st" => 1);
$p = array("ulica" => "Prešernova", "st" => 2);

$a=array($c, $p);

var_dump($a, $c, $p);

echo "a drugi element ulica=".$a[1]['ulica'].PHP_EOL;