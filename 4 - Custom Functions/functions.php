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

function init(){
    calculate();
    say_Something();
}

function calculate(){
    echo 456 + 345 . "<br>";
}

function say_Something(){
    echo "Hello World" . "<br>";
}

init();

?>

</body>
</html>