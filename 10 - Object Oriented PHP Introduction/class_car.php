<?php 

class Car {

    function MoveWheels(){
        echo "Wheels move";
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

?>