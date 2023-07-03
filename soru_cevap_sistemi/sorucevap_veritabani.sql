-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2021, 19:48:55
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sorucevap_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevap_begen`
--

CREATE TABLE `cevap_begen` (
  `id` int(11) NOT NULL,
  `soru_id` int(11) NOT NULL,
  `kulanici_id` int(11) NOT NULL,
  `cevap_id` int(11) NOT NULL,
  `turu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cevap_begen`
--

INSERT INTO `cevap_begen` (`id`, `soru_id`, `kulanici_id`, `cevap_id`, `turu`) VALUES
(2, 47, 5, 23, '0'),
(3, 47, 5, 23, '0'),
(4, 47, 5, 23, '1'),
(5, 47, 5, 23, '1'),
(6, 47, 5, 23, '1'),
(7, 47, 5, 23, '1'),
(8, 48, 5, 24, '1'),
(9, 48, 5, 24, '1'),
(10, 47, 5, 23, '1'),
(11, 48, 5, 24, '0'),
(12, 48, 5, 24, '0'),
(13, 49, 5, 26, '1'),
(14, 49, 5, 26, '1'),
(15, 49, 5, 27, '1'),
(16, 46, 5, 25, '1'),
(17, 50, 5, 28, '1'),
(18, 50, 5, 29, '0'),
(19, 50, 5, 30, '1'),
(20, 54, 5, 32, '1'),
(21, 54, 5, 33, '1'),
(22, 54, 5, 34, '1'),
(23, 55, 6, 35, '1'),
(24, 55, 6, 36, '1'),
(25, 55, 6, 37, '1'),
(26, 56, 6, 38, '1'),
(27, 56, 6, 39, '1'),
(28, 56, 6, 40, '1'),
(29, 56, 9, 38, '1'),
(30, 56, 9, 40, '1'),
(31, 56, 9, 39, '1'),
(32, 50, 9, 30, '1'),
(33, 51, 11, 49, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevap_begenme`
--

CREATE TABLE `cevap_begenme` (
  `id` int(11) NOT NULL,
  `soru_id` int(11) NOT NULL,
  `kulanici_id` int(11) NOT NULL,
  `cevap_id` int(11) NOT NULL,
  `turu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit_ol`
--

CREATE TABLE `kayit_ol` (
  `id` int(50) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `parola` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayit_ol`
--

INSERT INTO `kayit_ol` (`id`, `isim`, `soyisim`, `kullanici_ad`, `parola`) VALUES
(1, 'yusuf', 'qwer', 'qwer', 12345),
(2, 'ibrahim', 'YÄ±ldÄ±rÄ±m', 'asdf', 12345),
(3, 'ibrahim', 'sadfg', '123', 123),
(4, 'yusuf ', 'balta', 'yusuf_balt', 123456),
(5, 'ibrahim', 'YÄ±ldÄ±rÄ±m', 'yusuf', 123456),
(6, 'zeynep', 'koÃ§ibar', 'kedi', 123456),
(7, 'zeynep', 'balta', 'zeyne', 123456),
(8, 'zeynep', 'balta', 'zeyne', 123456),
(9, 'yusuf', 'balta', 'yusuf_1', 12345),
(10, 'ibrahim', 'Yıldırım', 'ibrahimy', 123456),
(11, 'yaren', 'Yıldırım', 'yaren8', 1234),
(12, 'gökçe', 'sürmelioğlu', 'gökçe_s', 1999),
(13, 'zeynep ', 'koçibar', 'zeynepk', 12345),
(14, 'Şevval', 'Bostancıoğlu', 'Şevvalbs', 0),
(15, 'Didem', 'Çınar', 'Didemcinar', 0),
(16, 'Didem', 'Çınar', 'Didemcinar', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru_begenme`
--

CREATE TABLE `soru_begenme` (
  `id` int(11) NOT NULL,
  `soru_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `turu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `soru_begenme`
--

INSERT INTO `soru_begenme` (`id`, `soru_id`, `kullanici_id`, `turu`) VALUES
(25, 37, 5, '1'),
(26, 38, 6, '1'),
(27, 37, 6, '1'),
(28, 39, 6, '1'),
(29, 40, 6, '1'),
(30, 41, 6, '1'),
(31, 42, 6, '1'),
(32, 43, 6, '1'),
(33, 44, 6, '1'),
(34, 48, 6, '1'),
(35, 47, 6, '1'),
(36, 46, 6, '1'),
(37, 48, 5, '1'),
(38, 47, 5, '1'),
(39, 52, 5, '1'),
(40, 50, 5, '0'),
(41, 51, 5, '1'),
(42, 53, 5, '1'),
(43, 54, 5, '1'),
(44, 55, 6, '1'),
(45, 56, 6, '1'),
(46, 50, 9, '1'),
(47, 56, 9, '1'),
(48, 55, 9, '1'),
(49, 57, 11, '1'),
(50, 53, 11, '1'),
(51, 52, 11, '1'),
(52, 51, 11, '1'),
(53, 60, 11, '1'),
(54, 71, 11, '1'),
(55, 76, 14, '1'),
(56, 75, 14, '1'),
(57, 71, 15, '1'),
(58, 71, 13, '1'),
(59, 75, 13, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru_bilgisi`
--

CREATE TABLE `soru_bilgisi` (
  `id` int(11) NOT NULL,
  `soru_basligi` text COLLATE utf8_turkish_ci NOT NULL,
  `soru_kategori` enum('Ekonomi','Siyaset','Magazin','Bilim','Müzik','Eğitim','Gündem','Spor') COLLATE utf8_turkish_ci NOT NULL,
  `soru_metni` text COLLATE utf8_turkish_ci NOT NULL,
  `olusturan_kullanici` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `begenilme_sayisi` int(100) NOT NULL,
  `begenilmeme_sayisi` int(100) NOT NULL,
  `cevap_metni` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `soru_bilgisi`
--

INSERT INTO `soru_bilgisi` (`id`, `soru_basligi`, `soru_kategori`, `soru_metni`, `olusturan_kullanici`, `eklenme_tarihi`, `begenilme_sayisi`, `begenilmeme_sayisi`, `cevap_metni`) VALUES
(71, 'Korona', 'Gündem', '2022 yılında korona sebebiyle kapanma olacak mı?', 'yaren8', '2021-12-26 18:35:06', 3, 0, ''),
(72, 'Dolar', 'Ekonomi', 'Doların fiyatı yükselişe geçecek mi?', 'yaren8', '2021-12-26 18:06:22', 0, 0, ''),
(73, 'Uzay ve yıldızların yaşı', 'Bilim', 'yıldızların yaşı nasıl tahmin ediliyor?', 'yaren8', '2021-12-26 18:07:53', 0, 0, ''),
(75, 'Okul Öncesi Eğitim', 'Eğitim', 'Okul öncesi eğitim hangi yaşta başlayacak?', 'zeynepk', '2021-12-26 18:35:12', 2, 0, ''),
(76, 'Futbol', 'Spor', '2012 FIFA Puskas yılın yarışmasını kazanan futbolcu kim', 'zeynepk', '2021-12-26 18:26:43', 1, 0, ''),
(77, 'Orkestra ', 'Müzik', '3 veya 4 bölüme sahip, çoğu zaman tek ama bazen de daha fazla orkestranın eşlik ettiği yapıtlara ne ad verilir?', 'Didemcinar', '2021-12-26 18:33:59', 0, 0, ''),
(78, 'Tek Veliahtım', 'Gündem', 'Sezen Aksunun Aşkın Nur Yengi için tek veliahtım diye bahsetmesi   ', 'Şevvalbs', '2021-12-26 18:41:05', 0, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru_cevap`
--

CREATE TABLE `soru_cevap` (
  `id` int(11) NOT NULL,
  `soru_id` int(11) NOT NULL,
  `cevap_metni` text COLLATE utf8_turkish_ci NOT NULL,
  `cevap_olusturan` text COLLATE utf8_turkish_ci NOT NULL,
  `cevap_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `begenilme_sayisi` int(11) NOT NULL,
  `begenilmeme_sayisi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `soru_cevap`
--

INSERT INTO `soru_cevap` (`id`, `soru_id`, `cevap_metni`, `cevap_olusturan`, `cevap_tarihi`, `begenilme_sayisi`, `begenilmeme_sayisi`) VALUES
(19, 37, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(20, 37, 'asdf', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(21, 38, 'güzel bir soru ', 'kedi', '0000-00-00 00:00:00', 0, ''),
(22, 39, 'güzel bir soru ', 'kedi', '0000-00-00 00:00:00', 0, ''),
(23, 47, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(24, 48, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(25, 46, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(26, 49, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(27, 49, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(28, 50, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(29, 50, 'merhaba yusuf bunu begendi', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(30, 50, 'saat 12.31', 'yusuf', '0000-00-00 00:00:00', 2, ''),
(31, 52, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(32, 54, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(33, 54, 'güzel bir soru ', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(34, 54, 'işlevi önemi projenin grafikler düzeltilir', 'yusuf', '0000-00-00 00:00:00', 0, ''),
(35, 55, 'zeynep bunu begendi', 'kedi', '0000-00-00 00:00:00', 0, ''),
(36, 55, 'güzel bir soru ', 'kedi', '0000-00-00 00:00:00', 0, ''),
(37, 55, '12.47', 'kedi', '0000-00-00 00:00:00', 0, ''),
(38, 56, 'güzel bir soru ', 'kedi', '0000-00-00 00:00:00', 2, ''),
(39, 56, 'merhaba yusuf bunu begendi', 'kedi', '0000-00-00 00:00:00', 2, ''),
(40, 56, 'işlevi önemi projenin grafikler düzeltilir', 'kedi', '0000-00-00 00:00:00', 2, ''),
(41, 50, 'güzel bir soru ', 'yusuf_1', '0000-00-00 00:00:00', 0, ''),
(42, 50, 'güzel bir soru ', 'yusuf_1', '0000-00-00 00:00:00', 0, ''),
(43, 50, 'güzel bir soru ', 'yusuf_1', '0000-00-00 00:00:00', 0, ''),
(44, 50, 'güzel bir soru ', 'yusuf_1', '0000-00-00 00:00:00', 0, ''),
(45, 57, '', 'yaren8', '0000-00-00 00:00:00', 0, ''),
(46, 59, 'zeynep bunu begendi', 'yaren8', '0000-00-00 00:00:00', 0, ''),
(47, 59, 'abcçdefg', 'yaren8', '0000-00-00 00:00:00', 0, ''),
(48, 56, 'güzel bir soru ', 'yaren8', '2021-12-26 17:37:32', 0, ''),
(49, 51, 'güzel bir soru ', 'yaren8', '2021-12-26 17:37:39', 1, ''),
(50, 71, 'bence olabilir', 'yaren8', '2021-12-26 18:05:27', 0, ''),
(51, 73, 'Yıldızların yaşını tahmin etmek için kullanılan çeşitli yöntemler var. ', 'yaren8', '2021-12-26 18:08:38', 0, ''),
(52, 76, 'MİROSLAV STOCH', 'Şevvalbs', '2021-12-26 18:26:35', 0, ''),
(53, 75, 'Okul öncesi eğitime başlama yaşında herhangi bir değişiklik yapılmamıştır. Yeni sistem gerçekleştirilmeden önce 37-72 ay arasındaki çocuklar okul öncesi eğitime gidebiliyorlardı. Şimdi de yine 36 ayını tamamlamış çocuklar okul öncesi eğitime başlayabileceklerdir. ', 'Şevvalbs', '2021-12-26 18:28:50', 0, ''),
(54, 77, 'Konçerto', 'zeynepk', '2021-12-26 18:34:57', 0, '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cevap_begen`
--
ALTER TABLE `cevap_begen`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cevap_begenme`
--
ALTER TABLE `cevap_begenme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kayit_ol`
--
ALTER TABLE `kayit_ol`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `soru_begenme`
--
ALTER TABLE `soru_begenme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `soru_bilgisi`
--
ALTER TABLE `soru_bilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `soru_cevap`
--
ALTER TABLE `soru_cevap`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cevap_begen`
--
ALTER TABLE `cevap_begen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `cevap_begenme`
--
ALTER TABLE `cevap_begenme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kayit_ol`
--
ALTER TABLE `kayit_ol`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `soru_begenme`
--
ALTER TABLE `soru_begenme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `soru_bilgisi`
--
ALTER TABLE `soru_bilgisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `soru_cevap`
--
ALTER TABLE `soru_cevap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
