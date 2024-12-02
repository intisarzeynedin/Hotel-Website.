<?php
$servername = "localhost";
$username = "root";   
$password = ""; 
$dbname = "hoteldb"; 


$conn = new mysqli($servername, $username, $password, $hoteldb);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

