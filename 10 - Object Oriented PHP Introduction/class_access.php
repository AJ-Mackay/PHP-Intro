<?php 

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 5;

    function MoveWheels(){
        echo "Wheels move" . "<br>";
        // $this->wheels = 10;
    }

    function CreateDoors(){
        $this->doors = 6;
    }

}

if(class_exists("Car")) {
    echo "Class Car exists" . "<br>";
} else {
    echo "No Class found!" . "<br>";
}

if(method_exists("Car", "MoveWheels")) {
    echo "The MoveWheels Method exists" . "<br>";
} else {
    echo "No Method found!" . "<br>";
}

$bmw = new Car();
$truck = new Truck();

class Truck extends Car {

    function ShowProperty(){
        echo $this->engine; // Does not work as engine is Private.
    }

}

echo $truck->ShowProperty();

?>