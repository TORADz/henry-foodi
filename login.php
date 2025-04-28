<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT id, first_name, last_name, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            // Debug: Confirm session data
            error_log("Login successful: User ID = " . $_SESSION['user_id'] . ", Name = " . $_SESSION['first_name'] . " " . $_SESSION['last_name']);
            header("Location: index.php"); // Use header redirect instead of JS
            exit();
        } else {
            error_log("Login failed: Invalid credentials for email = " . $email);
            echo "<script>alert('Invalid credentials!'); window.location='index.php';</script>";
        }
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo "<script>alert('Error: " . htmlspecialchars($e->getMessage()) . "'); window.location='index.php';</script>";
    }
} else {
    error_log("Invalid request method: " . $_SERVER['REQUEST_METHOD']);
    header("Location: index.php");
    exit();
}
?>