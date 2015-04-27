<?php

class Ca {

     public static $p1="Konga Bonga";
}

echo Ca::$p1.PHP_EOL;
$a=new Ca();
echo $a->p1.PHP_EOL;  // to ne gre, ker je static



