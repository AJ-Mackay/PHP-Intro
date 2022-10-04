<?php 

class Dog {

    var $eyeColour = "yellow";
    var $nose = "wet";
    var $furColour = "black";

    function ShowAll(){
        echo "The dog has " . $this->eyeColour . " eyes" . "<br>";
        echo "The dog has a " . $this->nose . " nose" . "<br>";
        echo "The dog has " . $this->furColour . " fur" . "<br>";
    }

}

$pitbull = new Dog();
$pitbull->ShowAll();

?>