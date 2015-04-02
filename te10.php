<?php

class Ca {

    protected $p1;

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
echo 'p ena je '.$a->getP1().PHP_EOL;

echo 'konec.' . PHP_EOL;
?>