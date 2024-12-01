<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kghs_cultural_carnival";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
