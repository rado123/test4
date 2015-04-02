<?php
 
$a="123456abc";
var_dump($a);
echo " \n";

$as=  serialize($a);
var_dump($as);
echo " \n";

$u=  unserialize($as);
var_dump($u);
echo " \n";

echo "konec.\n";
 
?>