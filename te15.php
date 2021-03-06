<?php

class MyClass {

    public $prop1 = "I'm a class property!";

    public function __construct() {
        echo "The class " . __CLASS__ . " was initiated!\n";
    }

    public function __toString() {
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    public function getProperty() {
        return $this->prop1 . "\n";
    }

}

class MyOtherClass extends MyClass {

    public function __construct() {
        parent::__construct(); // Call the parent class's constructor
        echo "A new constructor in " . __CLASS__ . ".\n";
    }

    public function newMethod() {
        echo "From a new method in " . __CLASS__ . ".\n";
    }
}

// Create a new object
$newobj = new MyOtherClass;

// Output the object as a string
echo $newobj->newMethod();

// Use a method from the parent class
echo $newobj->getProperty();
?>