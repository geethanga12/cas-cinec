<?php

// main connection file for both admin & front end
$servername = "localhost"; // server
$username = "root"; // username
$password = ""; // password (keep it empty if root has no password)
$dbname = "onlinefoodphp";  // database

// Create connection with port 3307 (because XAMPP MySQL runs on 3307)
$db = mysqli_connect($servername, $username, $password, $dbname, 3307);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
