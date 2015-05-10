<?php

$ident = array("ime" => "Marko",
    "email" => "a@xxx.xx");
var_dump($ident);
if ($ident['email'] == "a@xxx.xx") {                 // $$ rb začasno, dokler shortCircuit ne preskoči tega assert-a
    echo 'email pravi';    
}

