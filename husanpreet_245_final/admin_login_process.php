<?php
session_start();
include 'config.php'; // Contains database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the credentials
    $stmt = $conn->prepare('SELECT * FROM adminH WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header('Location: admin_dashboard.php');
            exit;
        }
    }
    $_SESSION['error'] = 'Invalid username or password';
    header('Location: admin_login.php');
    exit;
}
?>