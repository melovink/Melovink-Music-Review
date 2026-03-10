<?php
    session_start();
    require 'config.php';

    /* Block access if not logged in */
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];

    /* Get only current user */
    $stmt = $conn->prepare(
        "SELECT *
         FROM user WHERE id = ?"
    );

    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="left">
            <?php if (!empty($user['profile_photo'])): ?>
            <img class="profile_picture" src="<?= $user['profile_photo'] ?>" width="150">
            <?php endif; ?>
            <p><strong>Username:</strong> <?= $user['username'] ?></p>
        </div>
        <div class="right">
            <a href="edit_profile.php">Edit Profile</a><br><br>
            <form action="logout.php" method="POST">
                <button>
                    <a href="dashboard.php">Back</a>
                </button>
                <button type="submit">
                    Logout
                </button><br>
                <form action="delete_account.php" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete your account?');">
                <button type="submit">Delete Account</button>
            </form>
            </form>
        </div>
    </section>
</body>
</html>


