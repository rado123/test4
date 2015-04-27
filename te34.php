<?php 
echo "asdfasdfasdf";
$a = array("n1" => ["n2"=>["n3"=>"n4"]]);
//echo  $a["n1"][0];
$b=  $a["n1"];
$c=$b["n2"];
$d=$a["n1"]["n2"];
$e=$b["n2"]["n3"];
var_dump($a,$b,$c,$d,$e);