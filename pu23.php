<?php

class ljubezen{
    
    private $ime="nekaj";
    
    function getIme() {
        return $this->ime;
    }

    function setIme($ime) {
        $this->ime = $ime;
    }


    
    
}


class ObjectHasAttributeTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertObjectHasAttribute('ime', new ljubezen);
    }
}
?>