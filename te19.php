<?php

abstract class AC {

    protected $ac = 3;

    abstract function juhu();

    function getAc() {
        return $this->ac;
    }

    function setAc($ac) {
        $this->ac = $ac;
    }

}

class ACE extends AC {

    function juhu() {
        echo 'juhuhuhu';
    }

}

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

$b = new ACE();
var_dump($b);
$b->juhu();

$a = new Ca();
var_dump($a);
echo 'p ena je ' . $a->getP1() . PHP_EOL;

echo 'konec.' . PHP_EOL;
?>