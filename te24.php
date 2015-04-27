<?php

print gettype($this);            //object
print get_object_vars($this);    //Array
print is_array($this);            //false
print is_object($this);           //true
print_r($this);                  //dump of the objects inside it
print count($this);              //true
print get_class($this);          //YourProject\YourFile\YourClass
print isset($this);              //true
print get_parent_class($this);    //YourBundle\YourStuff\YourParentClass
print gettype($this->container);  //object