<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bahçe Market</title>
    <!-- css link -->
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/listele.css" />
</head>
<body>
<header>
    <h1>Admin Panel</h1>
    <nav>
        <ul>
            <li><a href="index.html" class="active">Anasayfa</a></li>
            <li><a href="bitki.php">Bitkiler</a></li>
            <li><a href="aksesuar.php">Aksesuarlar</a></li>
            
        </ul>
    </nav>
</header>

<main>

    <section>
    <?php include 'vt_veri_cekme.php'; ?>
        
        <div class="overview">
            <div class="card">
                <h3>Kullanıcılar</h3>
                <p>Toplam Kullanıcı Sayısı: <strong><?php echo $musteri_sayisi; ?></strong></p>
            </div>
            <div class="card">
                <h3>Ürünler</h3>
                <p>Toplam Ürün Sayısı: <strong><?php echo $urun_sayisi; ?></strong></p>
            </div>
            <div class="card">
                <h3>Siparişler</h3>
                <p>Toplam Sipariş Sayısı: <strong><?php echo $siparis_sayisi; ?></strong></p>
            </div>
        </div>
    </section>
</main>


        <div class="listele">

            <ul class="listele-list">
                <li class="listele">
                    <span>ID</span>
                    <span>ÜRÜN ADI</span>
                   
                    <span>FİYAT</span>
                    <span>TAMAMLANDI</span>

                </li>

            </ul>
            </div>
        
            <?php
                require 'vt_baglanti.php';
                $sql = "SELECT * FROM odeme";
                $result = $conn->query($sql);

                // Ürünleri listeleyen HTML oluşturulur
                if ($result->num_rows > 0) {
                    echo'<div class="listele">';
                    
                    while ($row = $result->fetch_assoc()) {
                        echo '<ul class="listele-list">';
                        echo '<li class="listele">';
                        echo '<span>' . $row['id'] . '</span>';
                        echo '<span>' . $row['urun_ad'] . '</span>';
                        echo '<span>' . $row['fiyat'] . ' ₺ </span>';
                        echo '<button class="delete-btn">Tamamlandı</button>';
                        echo '</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo 'Ürün bulunamadı.';
                }
                // Veritabanı bağlantısı kapatılır
                $conn->close();
            ?>
        </div>
    </div>


<footer>
    <p>Tüm hakları saklıdır &copy; 2024</p>
</footer>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="js/app.js"></script>
</body>
</html>