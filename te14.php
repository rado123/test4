<?php

class Ca {

    /**
     *
     * @var string 
     */
    public $p1;

    function getP1() {
        return $this->p1;
    }

    function setP1($p1) {
        $this->p1 = $p1;
    }
    
}

$a = new Ca();
//var_dump($a);
echo 'gettype '. gettype($a->p1).PHP_EOL;
$b="asdf";
echo 'gettype '. gettype($b).PHP_EOL;

echo 'konec.' . PHP_EOL;
?>