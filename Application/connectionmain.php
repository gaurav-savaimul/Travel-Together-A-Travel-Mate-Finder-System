<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_buddy";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>


