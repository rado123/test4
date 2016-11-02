<?php

class Cb {
   // 
}


class Ca {

    public $p1 = "I'm a class property!";

    function __construct() {
        $this->setP1("v konstruktu");
    }

    function getP1() {
        return $this->p1;
    }

    function setP1($p1) {
        $this->p1 = $p1;
    }

}

$a = new Ca();
var_dump($a);

if ($a instanceof Ca) {
    echo ' a je inštanca od Ca' . PHP_EOL;
}
if ($a instanceof Cb) {
    echo ' a je inštanca od Cb' . PHP_EOL;
}

echo 'konec.' . PHP_EOL;
?>
