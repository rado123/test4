<?php

echo "asdfasdfasdf";
$a='a:2:{i:0;a:2:{s:3:"key";s:1:"M";s:5:"value";s:6:"moški";}i:1;a:2:{s:3:"key";s:2:"Ž";s:5:"value";s:7:"ženska";}}     ';
$a='a:1:{i:0;a:2:{s:3:"key";s:1:"z";s:5:"value";s:6:"zelena";}}';
$b=  unserialize($a);
//var_dump($a,$b);
print_r($b);


$a='a:1:{i:0;a:2:{i:0;s:3:"key";i:1;s:1:"1";}}';
$b=  unserialize($a);
//var_dump($a,$b);
print_r($b);