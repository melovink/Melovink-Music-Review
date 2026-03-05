<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        $message = "success";
        header("Location: login.php");
    } else {
        $message = 'failed';
        header("Location: signup.php");
    }

    $stmt->close();
    $conn->close();
?>