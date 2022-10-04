<?php 

class Car {

    static $wheels = 4;
    var $hood = 1;
    var $doors = 5;

    public static function MoveWheels(){
        // echo "Wheels move" . "<br>";
        Car::$wheels = 10;
    }

    function CreateDoors(){
        $this->doors = 6;
    }

}

$bmw = new Car();
// $bmw->wheels;

Car::MoveWheels();
echo Car::$wheels;

?>