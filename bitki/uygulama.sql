-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2024, 23:44:36
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygulama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcilar`
--

CREATE TABLE `kullanıcilar` (
  `id` int(11) NOT NULL,
  `ad` int(20) NOT NULL,
  `soyad` int(20) NOT NULL,
  `kullanici_ad` int(20) NOT NULL,
  `mail` int(50) NOT NULL,
  `sifre` int(50) NOT NULL,
  `adres` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

CREATE TABLE `odeme` (
  `id` int(11) NOT NULL,
  `urun_ad` varchar(100) NOT NULL,
  `fiyat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `odeme`
--

INSERT INTO `odeme` (`id`, `urun_ad`, `fiyat`) VALUES
(1, 'Papatya', 25.00),
(2, 'Papatya', 25.00),
(3, 'Papatya', 25.00),
(4, 'Papatya', 25.00),
(5, 'Papatya', 25.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urun_ad` varchar(100) DEFAULT NULL,
  `aciklama` varchar(200) DEFAULT NULL,
  `fiyat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urun_ad`, `aciklama`, `fiyat`) VALUES
(1, 'Papatya', 'Yemyeşil yapraklara sahip güzel bir çiçek', 25),
(2, 'Gül', 'Kırmızı, pembe, beyaz gibi çeşitli renklerde çiçekler açan güzel bir bitki', 30),
(3, 'Orkide', 'Egzotik ve büyüleyici çiçekleri olan bir bitki', 20),
(4, 'Sukulent', 'Suyunu içinde depolayan dayanıklı bitki türü', 15),
(5, 'Kaktüs', 'Dikenli ve suyu az tüketen bir çöl bitkisi', 18),
(6, 'Papatya', 'Doğal bir antidepresan olan papatyanın çayı yapılır', 22),
(7, 'Begonya', 'Parlak ve çekici çiçekleri olan bir iç mekan bitkisi', 27),
(8, 'Menekşe', 'Yumuşak yapraklara ve hoş kokulu çiçeklere sahip bir bitki', 19),
(9, 'Aloe Vera', 'Cilt bakımı ve yanık tedavisi için kullanılan bir tür', 35),
(10, 'Lavanta', 'Güzel kokulu mor çiçekler açan bir bitki', 14),
(11, 'Zambak', 'Narin ve zarif çiçekleri olan bir bitki', 26),
(12, 'Karanfil', 'Güzel kokulu ve renkli çiçekleri olan bir bitki', 21),
(13, 'Nergis', 'Baharda ortaya çıkan sarı ve beyaz çiçekleri ile bilinen bir bitki', 28),
(14, 'Siyah Saksı', 'Estetik görünümlü, yemyeşil yapraklara sahip dekoratif bitki', 25),
(15, 'Cam Saksı', 'Kırmızı, pembe, beyaz gibi çeşitli renklerde çiçekler açan, göz alıcı bir bitki', 30),
(16, 'Gri Saksı', 'Egzotik ve büyüleyici çiçekleri ile dikkat çeken bir bitki', 20),
(17, 'Yeşil Saksı', 'Su depolayabilen, dayanıklı ve bakımı kolay bir bitki türü', 15),
(18, 'Pembe Saksı', 'Dikenli ve az su tüketen, çöl bitkisi', 18),
(19, 'Taş Saksı', 'Doğal bir antidepresan olarak bilinen papatya bitkisi', 22),
(20, 'Siyah Uzun Saksı', 'Parlak ve çekici çiçekleri olan bir iç mekan bitkisi', 27),
(21, 'Dekoratif Saksı', 'Yumuşak yapraklara ve hoş kokulu çiçeklere sahip bir bitki', 19);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `ad`, `soyad`, `kullanici_ad`, `mail`, `sifre`) VALUES
(1, 'malik', 'djan', 'malo34', 'malik@gmail.com', '1234'),
(2, 'safa', 'safa', 'safa34', 'safa@gmail.com', '1234'),
(6, 'safa', 'safa', 'safa3', 'safa12@gmail.com', '1234'),
(7, 'safa', 'safa', 'safa323', 'safa112@gmail.com', '1234'),
(8, 'safa', 'safa', 'safa3234', 'safa1125@gmail.com', '1234'),
(9, 'safa', 'safa', 'safa323433', 'safa11253@gmail.com', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_ad` (`kullanici_ad`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `odeme`
--
ALTER TABLE `odeme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
