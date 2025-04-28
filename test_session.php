<?php
session_start();

// Simulate login
if (isset($_GET['login'])) {
    $_SESSION['user_id'] = 1;
    $_SESSION['first_name'] = 'John';
    $_SESSION['last_name'] = 'Doe';
}

// Logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Session</title>
    <style>
        .btn { padding: 10px; border: 2px solid #333; border-radius: 25px; text-decoration: none; }
    </style>
</head>
<body>
    <header>
        <?php if (isset($_SESSION['user_id'])): ?>
            Welcome, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>
            <a href="?logout" class="btn">Logout</a>
        <?php else: ?>
            <a href="?login" class="btn">Login</a>
        <?php endif; ?>
    </header>
</body>
</html>