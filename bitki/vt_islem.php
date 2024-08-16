<?php

require 'vt_baglanti.php';






if(isset($_POST['giris'])) {
    

    $mail = $_POST['mail'];
    $sifre = $_POST['sifre'];

    // Kullanıcıyı sorgula
    $sql = "SELECT * FROM users WHERE mail = '$mail'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Kullanıcı bulundu, şifreyi kontrol et
        $row = $result->fetch_assoc();
        if($sifre == $row['sifre']) {
            // Şifre doğru, kullanıcı giriş yapabilir
            header("Location:hesabım.html ");
            
        } else {
            // Şifre yanlış
            echo "<script>alert('Hatalı şifre');</script>";
           
          
        }
    } else {
        // Kullanıcı bulunamadı
        echo "<script>alert('Kullanıcı bulunamadı');</script>";
       
    }

}



if(isset($_POST['kayit'])) {
    // Formdan gelen verileri alın
    $ad = $_POST['ad'];
    $soyad = $_POST['Soyad'];
    $kullanici_ad = $_POST['Kullanici_ad'];
    $mail = $_POST['mail'];
    $sifre = $_POST['sifre'];
    $sifre_tekrar = $_POST['sifre_tekrar'];


    $check_email_sql = "SELECT * FROM users WHERE mail = '$mail'";
    $check_email_result = $conn->query($check_email_sql);


    if ($check_email_result->num_rows > 0) {
        echo "Bu e-posta adresiyle zaten kayıtlı bir kullanıcı var!";
    } else {


            // Eğer şifreler uyuşmuyorsa hata mesajı göster
            if($sifre !== $sifre_tekrar) {
                echo "Şifreler uyuşmuyor!";
            } else {

               

                // Veritabanına yeni kullanıcıyı ekle
                $sql = "INSERT INTO users (ad, soyad, kullanici_ad, mail, sifre)
                VALUES ('$ad', '$soyad', '$kullanici_ad', '$mail', '$sifre')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Üyelik başarıyla oluşturuldu!');</script>";
                    header("location:login.php");
                }else{}
            }
    }
    
}



if(isset($_POST['odeme'])) {



    $fiyat = $_POST['fiyat'];
    $urun_ad = $_POST['urun_ad'];
 



    $sql = "INSERT INTO odeme ( fiyat,urun_ad) 
            VALUES ('$fiyat','$urun_ad')";

    if ($conn->query($sql) === TRUE) {
        echo "Ödeme bilgileri başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }


}


// Bağlantıyı kapat
$conn->close();


