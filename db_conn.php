<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "subhendu";

// Create a connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if (!$conn) {
    echo "Connection failed";
   
} 
?>