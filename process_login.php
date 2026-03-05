<?php
    session_start();
    require 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful!";
            header("Location: dashboard.php");
        } else {
            echo "Wrong password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
?>
