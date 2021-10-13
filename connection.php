<?php 
$dbname = "messenger";
    $conn=new mysqli("localhost", "root", "root", $dbname);

    if($conn->connect_error)
    {
        die("Failed Connection ".$conn->connect_error);
    }
    echo "Connected successfully";

?>










?>