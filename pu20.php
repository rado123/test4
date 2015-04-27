<?php
class CountTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertCount(4, array('foo','sfsdf',3));
    }
}
?>