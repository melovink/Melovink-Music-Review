<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MMR - Welcome!</title>
</head>
<body>
    <section>
        <div class="signup-form">
            <div class="signup-form-root">
                <div class="signup-form-logo-box">
                    <h1>Melovink Music Review</h1><br>
                    <div>
                        <button onclick="login()">
                            Login
                        </button><br>
                        <button onclick="signup()">
                            Create New Account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js">

    </script>
    <?php
        session_start();
            if (isset($_SESSION["user_id"])){
                header("Location: dashboard.php");
                exit();
            }
    ?>
</body>
</html>