<?php
$servername = "localhost";
$username = "root";
$password = "Bhk@2005/";
$dbname = "techdigitalstories";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
