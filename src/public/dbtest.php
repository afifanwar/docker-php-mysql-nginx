<?php
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$database = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database >> Connection failed: " . $conn->connect_error);
}

echo "Database >> Connected successfully!";

// Close connection
$conn->close();
?>
