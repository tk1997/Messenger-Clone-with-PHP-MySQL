<?php
session_start();
require("connection.php");

$username=$_SESSION["username"];
$msg=$_POST['message'];
$sql="INSERT INTO message(username,content) VALUES('$username', '$msg')";
$result=mysqli_query($conn,$sql);
if($result)
{
    $_SESSION["username"]=$username;
    header("location:home.php?send=success");
}
else{
    header("location:home.php?send=failed");
}

mysqli_close($conn);
?>