<?php
include 'connection.php';
$id=$_GET['id'];
$query ="DELETE from `crudtable` WHERE id = $id";
 mysqli_query($connection,$query);
header('location:display.php');  //Redirects back to display.php page when this code of this page is executed
?>