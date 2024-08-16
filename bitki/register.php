<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Register</h2>
            <form action="vt_islem.php" method="post">
                <div class="input-box">
                    <i class="ri-user-line"></i>
                    <input type="text" name="ad" placeholder="Name" required>
                    
                </div>
                <div class="input-box">
                    <i class="ri-mail-line"></i>
                    <input type="text" name="Soyad" placeholder="Lastname"  required>

                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="text" name="Kullanici_ad" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="text" name="mail" placeholder="E-mail" prequired>

                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="password" name="sifre" placeholder="Password" required>

                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="password" name="sifre_tekrar" placeholder="Password again" required>

                </div>
                <button type="submit" name="kayit" class="register-btn">Register</button>
                <p class="login-text">Hesabınız var mı? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>