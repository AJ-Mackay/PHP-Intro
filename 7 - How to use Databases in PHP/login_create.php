<?php include "db.php";

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result){
    die("QUERY FAILED!");
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
<div class="col-sm-6">
    <form action="login_create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
</div>
</div>

</body>
</html>