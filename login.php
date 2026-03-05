<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Login - MMR</title>
</head>
<body>
    <section>
        <div class="signup-form">
            <div class="signup-form-root">
                <div class="signup-form-logo-box">
                    <h1>Login</h1>
                    <div>
                        <form action="process_login.php" method="POST">
                            <input type="text" name="username" required placeholder="  username"><br><br>
                            <input type="password" name="password" required placeholder="  password"><br><br>
                            <button type="submit">Login</button><br><br>
                            <a href="signup.php">Dont have an account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>