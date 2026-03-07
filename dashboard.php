<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MMR</title>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION["user_id"])){
            header("Location: index.php");
            exit();
        }
    ?>

    <header>
        <h1>MMR</h1> <!-- Idea : Add a menu to navigate to user's profile so they can RUD it -->
    </header>
    <form action="logout.php" method="POST">
        <button type="submit">
            Logout
        </button>
    </form>
</body>
</html>