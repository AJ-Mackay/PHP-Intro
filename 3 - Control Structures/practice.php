<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(4 > 5){
    echo "Nope" . "<br>";
} elseif(5 > 6){
    echo "try again" . "<br>";
} else {
    echo "I love PHP" . "<br>";
}

echo "<br>";

for($counter = 0; $counter < 10; $counter++){
    echo $counter . "<br>";
}

echo "<br>";

$number = 10;
switch($number){

    case 7:
        echo "it is 7";
        break;
    case 9:
        echo "it is 9";
        break;
    case 10:
        echo "it is 10";
        break;
    case 13:
        echo "it is 13";
        break;
    default:
        echo "not found";
        break;
}

?>

</body>
</html>