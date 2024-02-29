<?php
// Database configuration
$servername = "192.168.30.23";
$username = 'root@192.168.30.20'; // Get username from environment variable
$password = ''; // Get password from environment variable
$dbname = 'test'; // Get database name from environment variable

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    mysqli_connect_error() ;
    die("Connection failed: " . $conn->connect_error);

}


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
