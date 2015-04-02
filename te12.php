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

class CaE {

    public function mE() {
        echo "to je mE". PHP_EOL;
    }

}

$a = new Ca();
$ae = new CaE();
$ae->mE();
$a ->mE();

echo 'konec.' . PHP_EOL;
?>m