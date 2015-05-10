<?php

$b1 = false;
$b2 = true;

$ba = (!$b1 or $b2);
$bb = ($b1 or !$b2);
$bc = (!$b1 or !$b2);
$bd = ($b1 or $b2);

var_dump($ba,$bb,$bc,$bd);
