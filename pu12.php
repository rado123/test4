<?php

class OutputTest extends PHPUnit_Framework_TestCase {

    public function testA() {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testB() {
        $this->expectOutputString('bar');
        print 'basr';
    }

}

?>
