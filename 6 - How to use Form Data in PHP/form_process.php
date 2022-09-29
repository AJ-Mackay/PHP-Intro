<?php

if(isset($_POST['submit'])){

$name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane");
$minimum = 5;
$maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum){
echo "Username has to be longer than five characters";
}

if(strlen($username) > $maximum){
echo "Username cannot be longer than ten characters";
}

if(!in_array($username, $name)){
echo "Sorry, you are not allowed";
} else {
echo "Welcome " . $username;  
}

// echo "Hello " . $username . "<br>";
// echo "Your password is " . $password;
}
?>
