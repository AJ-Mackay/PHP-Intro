<?php 

class Car {

    var $wheels = 4;
    var $engine = 1;
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
$bmw->MoveWheels();

// $bmw->wheels = 5;
echo $bmw->wheels . "<br>";

$truck = new Car();
echo $truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo $truck->doors . "<br>";

?>