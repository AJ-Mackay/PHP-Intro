<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>

<?php include "includes/header.php" ?>

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

<?php include "includes/footer.php" ?>