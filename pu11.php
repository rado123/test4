<?php

class OutputTest extends PHPUnit_Framework_TestCase {

    public function t1() {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function t2() {
        $this->expectOutputString('bar');
        print 'bar';
    }

}

?>


