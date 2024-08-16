<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksesuar</title>
    <!-- css link -->
    <link rel="stylesheet" href="css/styles3.css">

    <!-- Icon'lar sosyal medya , alışveriş ve hesap-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <!-- boxicon Option menü için-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>

      
.product {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
}

.product img {
  max-width: 100%;
  height: 200px;
  border-radius: 5px;
}

.product h3 {
  margin-top: 10px;
}


.product p {
  margin-bottom: 1px;
  height: 100px;
}

.btn {
  display: inline-block;
  padding: 8px 20px;
  background-color:darkolivegreen; 
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3; 
}

  </style>
</head>
<body>
    <!-- header design -->
    <header>
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


    <!-- Aksesuar içeriği -->
    <div class="content">

        <!-- Banner kısmı -->
        <div class="banner">
            
            <img src="images/banner1.png" alt="">
        </div>

        <!-- Ürünler -->
         
    <div class="content">
        <div class="products-container">
            <?php
            require 'vt_baglanti.php';
            $sql = "SELECT * FROM urunler WHERE id > 13;";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<img src="images/' . $row['id'] . '.png" width="200" height="200"  alt="' . $row['urun_ad'] . '">';
                echo '<h3>' . $row['urun_ad'] . '</h3>';
                echo '<p>' . $row['aciklama'] . '</p>';
                echo '<h4>' . $row['fiyat'] . ' ₺ </h4>';
                echo '<a href="cart.php?urun_ad=' . $row['urun_ad'] .'" class="btn">Satın Al</a>';
                echo '</div>';
            }
            ?>
            
        </div>
    </div>
    </div>


    <!-- footer section -->
    <footer class="">
        <div class="footer-container">
          <!-- left side -->
          <div class="company-info">
            <img src="img/bahce.JPG" alt="">
            <p>Hayalinizdeki bitkiyi bulun</p>
            <div class="socials">
              <div><i class="ri-facebook-fill"></i></div>
              <div><i class="ri-instagram-fill"></i></div>
              <div><i class="ri-twitter-fill"></i></div>
            </div>
          </div>
  
          <!-- right side -->
          <div class="web-pages">
            <div>
              <h3>Bahçe Market</h3>
              <a href="#"><p>About</p></a>
              <a href="#"><p>Product</p></a>
              <a href="#"><p>Blog</p></a>
            </div>
            <div>
              <h3>Company</h3>
              <a href="#"><p>Community</p></a>
              <a href="#"><p>Career</p></a>
              <a href="#"><p>Our story</p></a>
            </div>
            <div>
              <h3>Contact</h3>
              <a href="#"><p>Getting Started</p></a>
              <a href="#"><p>Pricing</p></a>
              <a href="#"><p>Resources</p></a>
            </div>
          </div>
        </div>
  
        <p class="copyright">@ 2023 Tüm hakları saklıdır</p>
      </footer>

    <!-- script tags -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/app.js"></script>
</body>
</html>