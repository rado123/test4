<?php

$a = array("ime" => "Marko", 
    "priimek" => "Kljun"    
    );
$as=  array_search("Kljun", $a);  
$b=array("prvi","drugi","tretji");
var_dump($as);
