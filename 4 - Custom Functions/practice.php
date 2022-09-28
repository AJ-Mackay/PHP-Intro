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

function calculation(){
    $number1 = 20;
    $number2 = 50;
    $sum = $number1 + $number2;
    return $sum; 
}

$theSum = calculation();
echo $theSum . "<br>";

function addNumbers($number1, $number2){
    echo $number1 + $number2;
}

addNumbers(12,24);

?>

</body>
</html>