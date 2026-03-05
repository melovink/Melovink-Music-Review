<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Sign Up - MMR</title>
</head>
<body>
    <section>
        <div class="signup-form">
            <div class="signup-form-root">
                <div class="signup-form-logo-box">
                    <h1>Sign Up</h1>
                    <div>
                        <form action="process_signup.php" method="POST">
                            <input type="text" name="username" required placeholder="  username"><br><br>
                            <input type="password" name="password" required placeholder="  password"><br><br>
                            <button type="submit">Sign Up</button><br><br>
                            <a href="login.php">Already have an account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($message == 'success'): ?>
        <script>
            alert("Account Successfully Created");
        </script>
    <?php endif; ?>
</body>
</html>