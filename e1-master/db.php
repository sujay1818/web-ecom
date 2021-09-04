<?php

require "config/constants.php";

$servername = "localhost";
$username = "sumedh";
$password = "1234";
$db = "ecom";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>