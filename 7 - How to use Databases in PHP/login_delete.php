<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php 

if(isset($_POST['submit'])){
    deleteRows();
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
   <h2 class="text-center">Delete</h2>
<form action="login_delete.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <select name="id">

            <?php 
               showAllData();
            ?>

            </select>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="DELETE">
    </form>

</div>
</div>

</body>
</html>