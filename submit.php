<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Change if needed
$password = "";      // Change if needed
$dbname = "foodieland";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (full_name, email, skills) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $full_name, $email, $skills);

// Set parameters and execute
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$skills = $_POST['skills'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>