<?php
$servername = "127.0.0.1";
$username = "Patrickstar123@localhost";
$password = "0FC76B381E3493155B7B08BD4FFD7D44FCCA34BD";
$dbname = "bakery_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
