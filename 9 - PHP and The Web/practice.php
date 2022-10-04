<?php session_start();

$_SESSION['message'] = "Hello Students";

$timer = time() + (60*60*24*7);

setcookie("SomeName", "This is the value", $timer);

?>


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

if(isset($_GET["source"])){
    echo $_GET["source"] . "<br>";
}

?>
<a href="practice.php?source=30134">CLICK HERE</a>
<br>

<?php

if(isset($_COOKIE["SomeName"])){
    echo $_COOKIE["SomeName"] . "<br>";
}

if(isset($_SESSION)){
    echo $_SESSION['message'];
}

?>

</body>
</html>