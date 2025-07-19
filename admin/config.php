<?php

$servername = "localhost";  // MySQL server
$username = "root";           // Database username
$password = "dbpass";         // Database password
$dbname = "forum_db";         // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>