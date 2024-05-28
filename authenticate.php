34reds<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($storedPassword);
        $stmt->fetch();

        if ($password == $storedPassword) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: admin_dashboard.php');
            exit;
        } else {
            echo 'Invalid username or password.';
        }
    } else {
        echo 'Invalid username or password.';
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: index.php');
    exit;
}
?>
