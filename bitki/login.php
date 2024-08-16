<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="vt_islem.php" method="post">
                <div class="input-box">
                    <i class="ri-user-line"></i>
                    <input type="text" name="mail" placeholder="E-mail" required>
                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="password" name="sifre" placeholder="Password" required>
                 
                </div>
                <button type="submit" name="giris"class="login-btn">Login</button>
                <p class="register-text">Hesabınız yok mu? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
