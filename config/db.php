<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mobile_health_app";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
