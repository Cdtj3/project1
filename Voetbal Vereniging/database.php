<?php
$servername = "adsd.clow.nl";
$username = "S1129258";
$password = "J4m?tPMsjLXV37";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>