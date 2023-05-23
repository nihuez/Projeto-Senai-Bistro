<?php

$servername = "localhost";
$database = "bistro-hs";
$username = "root";
$password = "";


$conn = new MySQLi($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>