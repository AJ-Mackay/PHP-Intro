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

function greeting($message){
echo $message . "<br>";
}

greeting("Hello World");


function addNumbers($number1, $number2){
$sum = $number1 + $number2;
echo $sum;
}

addNumbers(12,24)

?>

</body>
</html>