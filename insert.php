<?php 
include 'connection.php';

if(isset($_POST['submitted'])){
    
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $query = "INSERT INTO `crudtable`(`username`,`password`) VALUES ('$username','$password')";
    $queryRun = mysqli_query($connection,$query);
    // header("location:display.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertPage</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">
        <form method="post">
           <br><br> <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation</h1>
                </div><br>
                <label for="uname" >Username:</label>
                <input type="text" name="uname" placeholder="enter your name" required><br>
                <label for="pass">Password:</label>
                <input type="password" name="pass" placeholder="enter your password" required><br>
                <button class="btn btn-success" type="submit" name="submitted">Submit</button><br>
            </div>
        </form>
    </div>
    <button class="btn-primary mx-auto btn text-center" style="position:relative;top:10px; left:50%; transform:translateX(-50%);"><a class="text-white" href="display.php">View Table</a></button>


</body>

</html>