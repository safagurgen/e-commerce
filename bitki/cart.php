<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    <!-- css link -->
    <link rel="stylesheet" href="css/cart.css">
    <!-- Icon'lar sosyal medya, alışveriş ve hesap-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!-- boxicon Option menü için-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- header design -->
    <header>
        <!-- logo -->
        <a href="index.html" class="logo"><img src="img/bahce.JPG" alt=""></a>
        <nav>
            <!-- nav items -->
            <ul class="navbar">
            <li><a href="index.html" class="active">Anasayfa</a></li>
                <li><a href="bitki.php">Bitki</a></li>
                <li><a href="aksesuar.php">Aksesuar</a></li>
                <li><a href="iletişim.html">İletişim</a></li>
            </ul>
            <div class="icons">
            <a href="cart.php" id="cart-icon"><i class="ri-shopping-cart-2-line"></i></a>
                <a href="register.php"><i class="ri-user-3-line"></i></a>
                <a href="login.php"><i class="ri-login-box-line"></i></a>
                <div>|</div>
                <a href="admin.php"><div class="bx bx-menu-alt-right" id="menu-icon"></div></a>
            </div>
        </nav>
    </header>

    <!-- Cart Content -->
    <div class="cart-container">
        <h2>Sepetim</h2>
        <div id="cart-items" class="cart-items">
            <!-- Sepet içeriği buraya gelecek -->
        </div>
        <div class="cart-total">
        <?php 
                  require 'vt_baglanti.php';
                  $urun_ad = $_GET['urun_ad'];
                  $sql_musteri = "SELECT fiyat FROM urunler WHERE urun_ad='$urun_ad'";
                  $result_musteri = $conn->query($sql_musteri);
                  $row= $result_musteri->fetch_assoc();
                  $urun_fiyat = $row["fiyat"];
                  
                  ?>
<form method="POST" action="vt_islem.php">
                  <input type="text" class="form-control" name="urun_ad" value="<?php echo $urun_ad; ?>" readonly>
                  <input type="text" class="form-control text-end" name="fiyat" value="<?php echo $urun_fiyat; ?>" readonly>

            
        </div>
        <button id="checkout-btn" name="odeme" class="checkout-btn">Ödeme Yap</button>
    </div>
    </form>
    <!-- script tags -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/app.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>
