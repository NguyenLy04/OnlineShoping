<?php

$servername = "database-1.cgc4rlsrtywf.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "Lynguyen";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die('lỗi lỗi-----------------');
    die("Connection failed: " . mysqli_connect_error());
}


?>
