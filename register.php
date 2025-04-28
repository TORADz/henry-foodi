<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $email, $password]);
        echo "<script>alert('Registration successful!'); window.location='index.php';</script>";
    } catch(PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location='index.php';</script>";
    }
}
?>