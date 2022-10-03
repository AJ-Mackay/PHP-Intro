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

$password = "mysecretpassword";
$salt = "iusesomecrazystrings22";
$encrypted_password = crypt($password, $salt);

echo $encrypted_password;

?>
</body>
</html>