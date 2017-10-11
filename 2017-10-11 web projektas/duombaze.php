<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "kcs_filmai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Prisijungti nepavyko: " . $conn->connect_error);
} 

//echo "prisijungti pavyko";