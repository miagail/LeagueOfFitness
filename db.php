<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "league_of_fitness"; // database name

// Connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
