<?php
session_start();
include 'connection.php';
$name    = time();
$newname = "../upload/" . $name . ".jpg";
$file    = file_put_contents($newname, file_get_contents('php://input'));

mysqli_query($con, "DELETE FROM ejemplo WHERE wait='yes'");
$sql = "Insert into ejemplo(wait,id,Imagen) values('yes','$name','$newname')";
$result = mysqli_query($con, $sql) or die("Error in query");
?>