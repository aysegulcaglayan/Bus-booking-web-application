-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2024, 13:09:06
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
-- Veritabanı: `umuttepe_turizm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `biletler`
--

CREATE TABLE `biletler` (
  `bilet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sefer_id` int(11) NOT NULL,
  `koltuk_id` int(11) NOT NULL,
  `odeme_id` int(11) NOT NULL,
  `bilet_kodu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koltuklar`
--

CREATE TABLE `koltuklar` (
  `koltuk_id` int(11) NOT NULL,
  `sefer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `koltuk_durum` varchar(45) NOT NULL,
  `koltukNumarasi` int(11) NOT NULL,
  `indirim_orani` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `koltuklar`
--

INSERT INTO `koltuklar` (`koltuk_id`, `sefer_id`, `user_id`, `koltuk_durum`, `koltukNumarasi`, `indirim_orani`) VALUES
(1, 1, 1, 'rezerve', 12, 0),
(2, 1, 2, 'rezerve', 12, 0),
(4, 5, 2, 'rezerve', 15, 0),
(5, 5, 2, 'rezerve', 20, 0),
(6, 5, 2, 'rezerve', 21, 0),
(7, 2, 2, 'rezerve', 22, 0),
(8, 2, 2, 'rezerve', 30, 0),
(9, 2, 17, 'rezerve', 4, 0),
(12, 2, 2, 'rezerve', 8, 0),
(13, 2, 2, 'rezerve', 5, 0),
(14, 2, 2, 'rezerve', 12, 0),
(15, 2, 2, 'rezerve', 87, 15),
(16, 5, 2, 'rezerve', 12, 15),
(17, 5, 2, 'rezerve', 12, 15),
(18, 5, 2, 'rezerve', 98, 15),
(19, 5, 2, 'rezerve', 100, 15),
(20, 5, 2, 'rezerve', 14, 15),
(21, 6, 2, 'rezerve', 63, 15),
(22, 6, 2, 'rezerve', 36, 15),
(23, 6, 2, 'rezerve', 57, 0),
(24, 6, 2, 'rezerve', 58, 15),
(25, 6, 2, 'rezerve', 87, 15),
(26, 6, 2, 'rezerve', 65, 100),
(27, 6, 2, 'rezerve', 55, 100),
(28, 6, 2, 'rezerve', 95, 15),
(29, 6, 2, 'rezerve', 69, 15),
(30, 6, 2, 'rezerve', 55, 15),
(31, 6, 2, 'rezerve', 69, 15),
(32, 6, 2, 'rezerve', 69, 15),
(33, 6, 2, 'rezerve', 36, 15),
(34, 6, 2, 'rezerve', 41, 15),
(35, 6, 2, 'rezerve', 41, 15),
(36, 6, 2, 'rezerve', 69, 15),
(37, 6, 2, 'rezerve', 69, 15),
(38, 6, 2, 'rezerve', 39, 15),
(39, 6, 2, 'rezerve', 39, 15),
(40, 6, 2, 'rezerve', 36, 15),
(41, 6, 2, 'rezerve', 36, 15),
(42, 6, 2, 'rezerve', 37, 15),
(43, 6, 2, 'bos', 101, 15),
(44, 6, 2, 'bos', 101, 15),
(45, 6, 2, 'bos', 102, 15),
(46, 6, 2, 'bos', 103, 15),
(47, 6, 2, 'bos', 103, 15),
(50, 6, 2, 'bos', 104, 15),
(51, 6, 2, 'bos', 104, 15),
(52, 6, 2, 'bos', 104, 15),
(53, 6, 2, 'bos', 105, 15),
(54, 6, 2, 'bos', 105, 15),
(55, 6, 2, 'bos', 106, 15),
(56, 6, 2, 'bos', 106, 15),
(57, 6, 2, 'bos', 106, 15),
(58, 6, 2, 'bos', 107, 15),
(59, 6, 2, 'bos', 108, 15),
(60, 6, 2, 'bos', 109, 15),
(61, 6, 2, 'rezerve', 109, 15),
(62, 6, 2, 'rezerve', 109, 15),
(63, 6, 2, 'rezerve', 110, 15),
(64, 6, 2, 'rezerve', 110, 15),
(65, 6, 2, 'rezerve', 111, 15),
(66, 6, 2, 'rezerve', 111, 15),
(67, 6, 2, 'rezerve', 112, 15),
(68, 6, 2, 'rezerve', 111, 15),
(69, 6, 2, 'rezerve', 112, 15),
(70, 6, 2, 'rezerve', 12, 15),
(71, 6, 2, 'rezerve', 12, 15),
(72, 6, 2, 'rezerve', 52, 15),
(73, 6, 2, 'rezerve', 52, 15),
(74, 6, 2, 'rezerve', 15, 15),
(75, 6, 2, 'rezerve', 15, 15),
(76, 6, 2, 'rezerve', 55, 15),
(77, 6, 2, 'rezerve', 55, 15),
(78, 6, 2, 'rezerve', 36, 15),
(79, 6, 2, 'rezerve', 69, 15),
(80, 6, 2, 'rezerve', 69, 15),
(81, 6, 2, 'rezerve', 87, 15),
(82, 6, 2, 'rezerve', 112, 15),
(83, 6, 2, 'rezerve', 112, 15),
(84, 6, 2, 'rezerve', 112, 15),
(85, 6, 2, 'rezerve', 112, 15),
(86, 6, 2, 'rezerve', 112, 15),
(87, 6, 2, 'rezerve', 112, 15),
(88, 6, 2, 'rezerve', 112, 15),
(89, 6, 2, 'rezerve', 112, 15),
(90, 6, 2, 'rezerve', 112, 15),
(91, 6, 2, 'rezerve', 113, 15),
(92, 6, 2, 'rezerve', 114, 15),
(93, 6, 2, 'rezerve', 114, 15),
(94, 6, 2, 'rezerve', 114, 15),
(95, 6, 2, 'rezerve', 114, 15),
(96, 6, 2, 'rezerve', 114, 15),
(97, 6, 2, 'rezerve', 114, 15),
(98, 6, 2, 'rezerve', 114, 15),
(99, 6, 2, 'rezerve', 114, 15),
(100, 6, 2, 'rezerve', 114, 15),
(101, 6, 2, 'rezerve', 114, 15),
(102, 6, 2, 'rezerve', 1115, 15),
(103, 6, 2, 'rezerve', 114, 15),
(104, 6, 2, 'rezerve', 114, 15),
(105, 6, 2, 'rezerve', 114, 15),
(106, 6, 2, 'rezerve', 114, 15),
(107, 6, 2, 'rezerve', 114, 15),
(108, 6, 2, 'rezerve', 114, 15),
(109, 6, 2, 'rezerve', 114, 15),
(110, 6, 2, 'rezerve', 120, 15),
(111, 6, 2, 'rezerve', 120, 15),
(112, 6, 2, 'rezerve', 114, 15),
(113, 6, 2, 'rezerve', 114, 15),
(114, 6, 2, 'rezerve', 114, 15),
(115, 6, 2, 'rezerve', 114, 15),
(116, 6, 2, 'rezerve', 114, 15),
(117, 6, 2, 'rezerve', 114, 15),
(118, 6, 2, 'rezerve', 114, 15),
(119, 6, 2, 'rezerve', 114, 15),
(120, 6, 2, 'rezerve', 114, 15),
(121, 6, 2, 'rezerve', 114, 15),
(122, 6, 2, 'rezerve', 114, 15),
(123, 6, 2, 'rezerve', 114, 15),
(124, 6, 2, 'rezerve', 115, 15),
(125, 6, 2, 'rezerve', 120, 15),
(126, 6, 2, 'rezerve', 120, 15),
(127, 6, 2, 'rezerve', 120, 15),
(128, 6, 2, 'rezerve', 120, 15),
(129, 6, 2, 'rezerve', 120, 15),
(130, 6, 2, 'rezerve', 120, 15),
(131, 6, 2, 'rezerve', 158, 15),
(132, 6, 2, 'rezerve', 158, 15),
(133, 6, 2, 'rezerve', 158, 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcılar`
--

CREATE TABLE `kullanıcılar` (
  `kullanici_id` int(11) NOT NULL,
  `isim` varchar(45) NOT NULL,
  `soyisim` varchar(45) NOT NULL,
  `kullanıcı_Adı` varchar(45) NOT NULL,
  `tc_kimlik` varchar(11) NOT NULL,
  `e_mail` varchar(85) DEFAULT NULL,
  `telefon_numarası` varchar(11) NOT NULL,
  `cinsiyet` varchar(5) NOT NULL,
  `yaş` int(11) NOT NULL,
  `şifre` varchar(45) NOT NULL,
  `müşteri_mesleği` varchar(45) NOT NULL,
  `bakiye` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanıcılar`
--

INSERT INTO `kullanıcılar` (`kullanici_id`, `isim`, `soyisim`, `kullanıcı_Adı`, `tc_kimlik`, `e_mail`, `telefon_numarası`, `cinsiyet`, `yaş`, `şifre`, `müşteri_mesleği`, `bakiye`) VALUES
(1, 'ali', 'emir', 'aliemir', '12345678978', 'aliemir@gmail.com', '12345678947', 'Erkek', 22, '123456789A.', 'Öğrenci', 3),
(2, 'ayşegül', 'çağlayan', 'ayse', '12345678910', 'ayse@gmail.com', '12345678910', 'kadın', 21, '123456', 'öğrenci', 2),
(3, 'ayşegül', 'çağlayan', 'ayse', '9874563', 'ayse57@gmail.com', '9874566321', 'kadın', 21, '123456', 'öğrenci', 2),
(4, 'sude', 'Çağlayan', 'ayse', '987456320', 'ayse570@gmail.com', '9874566320', 'kadın', 21, '123456', 'öğrenci', 2),
(5, 'deneme', 'deneme', 'ayse', '456789410', 'deneme@gmail.com', '545-272-251', 'kadın', 21, '123', 'öğrenci', 2),
(6, 'deneme2', 'deneme2', 'ayse', '963258741', 'deneme2@gmail.com', '545-272-251', 'kadın', 21, '123', 'öğrenci', 2),
(15, 'zz', 'zz', 'zz', '30835833610', 'denemeq@gmail.com', '545-272-251', 'Kadın', 12, '111', 'öğrenci', 0),
(16, 'ee', 'eeee', 'ee', '36936936901', 'caglayana57@gmail.com', '545-272-251', 'Kadın', 58, '123', 'öğrenci', 0),
(17, 'ww', 'wwww', 'ww', '12345678998', 'caglayana57@gmail.comww', '545-272-251', 'Kadın', 12, '574', 'öğrenci', 0),
(18, 'sude', 'ss', 'ss', '78974174474', 'aacaglayana57@gmail.com', '545-272-251', 'Kadın', 98, '741', 'öğrenci', 0),
(20, 'qqqqqq', 'qq', 'qq', '1478578485', 'caglayana570@gmail.com', '545-272-251', 'Erkek', 87, '789', 'öğrenci', 0),
(21, 'er', 'er', 'er', '78974174417', 'caglayana573@gmail.com', '545-272-251', 'Kadın', 12, '111', 'öğrenci', 0),
(22, 'aa', 'aa', 'aa', '12312312369', 'deneme57@gmail.com', '545-272-251', 'Erkek', 25, '987', 'öğrenci', 0),
(23, 'cc', 'cc', 'cc', '33693693695', 'cccaglayana57@gmail.com', '545-272-251', 'Kadın', 25, '147', 'öğrenci', 0),
(24, 'rr', 'rr', 'rr', '3697897488', 'caglayana57@gmail.comrr', '545-272-251', 'Kadın', 25, '123', 'öğrenci', 0),
(25, 'Ayşegül', 'deneme', 'aysegul_caglyn', '36936936985', 'caglayanaas57@gmail.com', '545-272-251', 'Kadın', 15, '123', 'öğrenci', 0),
(26, 'admin', 'admin', 'admin', '14785296310', 'admin123@gmail.com', '545-272-251', 'Kadın', 21, '123456789', 'Diğer', 0),
(27, 'sude', 'sude', '123', '30835833698', 'deneme587@gmail.com', '545-272-251', 'Kadın', 15, '123456987', 'Diğer', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otobüsler`
--

CREATE TABLE `otobüsler` (
  `otobüs_id` int(11) NOT NULL,
  `marka` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `plaka` varchar(10) NOT NULL,
  `koltuk_sayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `otobüsler`
--

INSERT INTO `otobüsler` (`otobüs_id`, `marka`, `model`, `plaka`, `koltuk_sayisi`) VALUES
(1, '', '', '', 0),
(2, '', '', '', 0),
(3, 'deneme', 'deneme', 'deneme', 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyonlar`
--

CREATE TABLE `rezervasyonlar` (
  `rezervasyon_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sefer_id` int(11) NOT NULL,
  `koltuk_no` int(11) NOT NULL,
  `rezervasyon_tarihi` datetime NOT NULL,
  `rezervasyon_durumu` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `rezervasyonlar`
--

INSERT INTO `rezervasyonlar` (`rezervasyon_id`, `user_id`, `sefer_id`, `koltuk_no`, `rezervasyon_tarihi`, `rezervasyon_durumu`) VALUES
(1, 2, 6, 15, '0000-00-00 00:00:00', 'evet'),
(2, 2, 6, 36, '2024-03-23 14:36:57', 'rezerve'),
(3, 2, 6, 37, '2024-03-23 14:37:50', 'rezerve'),
(5, 2, 6, 12, '2024-03-23 14:42:19', 'rezerve'),
(8, 2, 6, 12, '2024-03-23 15:00:04', 'rezerve'),
(9, 2, 6, 12, '2024-03-23 15:01:27', 'rezerve'),
(10, 2, 6, 12, '2024-03-23 15:01:30', 'rezerve'),
(11, 2, 6, 12, '2024-03-23 15:02:06', 'rezerve'),
(15, 2, 6, 12, '2024-03-23 15:03:56', 'rezerve'),
(16, 2, 6, 57, '2024-03-23 15:04:22', 'rezerve'),
(17, 2, 6, 57, '2024-03-23 15:05:34', 'rezerve'),
(18, 2, 6, 57, '2024-03-23 15:11:04', 'rezerve'),
(20, 2, 6, 109, '2024-03-23 15:13:51', 'rezerve'),
(21, 2, 6, 110, '2024-03-23 15:14:08', 'rezerve'),
(22, 2, 6, 110, '2024-03-23 15:14:48', 'rezerve'),
(23, 2, 6, 111, '2024-03-23 15:15:02', 'rezerve'),
(24, 2, 6, 111, '2024-03-23 15:16:49', 'rezerve'),
(25, 2, 6, 112, '2024-03-23 15:17:02', 'rezerve'),
(26, 2, 6, 111, '2024-03-23 15:19:44', 'rezerve'),
(27, 2, 6, 112, '2024-03-23 15:19:46', 'rezerve'),
(28, 2, 6, 12, '2024-03-23 15:20:02', 'rezerve'),
(29, 2, 6, 12, '2024-03-23 15:24:06', 'rezerve'),
(30, 2, 6, 52, '2024-03-23 15:24:20', 'rezerve'),
(31, 2, 6, 52, '2024-03-23 15:31:27', 'rezerve'),
(32, 2, 6, 15, '2024-03-23 15:31:40', 'rezerve'),
(33, 2, 6, 15, '2024-03-23 15:32:12', 'rezerve'),
(34, 2, 6, 55, '2024-03-23 15:32:25', 'rezerve'),
(35, 2, 6, 55, '2024-03-23 15:33:25', 'rezerve'),
(36, 2, 6, 36, '2024-03-23 15:33:39', 'rezerve'),
(37, 2, 6, 69, '2024-03-23 15:40:25', 'rezerve'),
(38, 2, 6, 69, '2024-03-23 15:40:41', 'rezerve'),
(39, 2, 6, 87, '2024-03-23 15:58:00', 'rezerve');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seferler`
--

CREATE TABLE `seferler` (
  `sefer_id` int(11) NOT NULL,
  `kalkis_sehir_id` int(11) NOT NULL,
  `varis_sehir_id` int(11) NOT NULL,
  `kalkis_tarihi` varchar(11) NOT NULL,
  `kalkis_saati` int(11) NOT NULL,
  `varis_saati` int(11) NOT NULL,
  `yolculuk_suresi` decimal(10,0) NOT NULL,
  `otobüs_id` int(11) NOT NULL,
  `ücret` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `seferler`
--

INSERT INTO `seferler` (`sefer_id`, `kalkis_sehir_id`, `varis_sehir_id`, `kalkis_tarihi`, `kalkis_saati`, `varis_saati`, `yolculuk_suresi`, `otobüs_id`, `ücret`) VALUES
(1, 1, 3, '', 0, 0, 11, 3, 1000),
(2, 1, 3, '', 7, 18, 11, 3, 1000),
(5, 3, 1, '12/03/2024', 7, 19, 12, 3, 1000),
(6, 3, 4, '20/04/2024', 15, 19, 11, 3, 1000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ödemeler`
--

CREATE TABLE `ödemeler` (
  `ödeme_id` int(11) NOT NULL,
  `sefer_id` int(11) NOT NULL,
  `koltuk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kart_adi` varchar(50) NOT NULL,
  `odeme_miktari` decimal(10,0) NOT NULL,
  `kredi_karti_numarasi` int(20) NOT NULL,
  `son_tarih` int(10) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ödemeler`
--

INSERT INTO `ödemeler` (`ödeme_id`, `sefer_id`, `koltuk_id`, `user_id`, `kart_adi`, `odeme_miktari`, `kredi_karti_numarasi`, `son_tarih`, `cvv`) VALUES
(1, 6, 25, 2, 'mm', 850, 0, 22025, 123),
(2, 6, 25, 2, 'mm', 850, 0, 22025, 123),
(3, 6, 25, 2, 'mm', 850, 0, 22025, 123),
(4, 6, 25, 2, 'banka ', 850, 0, 1225, 836),
(5, 6, 25, 2, 'banka ', 850, 0, 22025, 963),
(6, 6, 25, 2, 'banka ', 850, 2147483647, 22026, 123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `şehiler`
--

CREATE TABLE `şehiler` (
  `sehir_id` int(11) NOT NULL,
  `şehir_adi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `şehiler`
--

INSERT INTO `şehiler` (`sehir_id`, `şehir_adi`) VALUES
(1, 'Kocaeli'),
(2, 'Bursa'),
(3, 'Artvin'),
(4, 'Sinop');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `biletler`
--
ALTER TABLE `biletler`
  ADD PRIMARY KEY (`bilet_id`),
  ADD KEY `foreignTİCKET1` (`user_id`),
  ADD KEY `foreignTİCKET2` (`sefer_id`),
  ADD KEY `foreignTİCKET3` (`koltuk_id`),
  ADD KEY `foreignTİCKET4` (`odeme_id`);

--
-- Tablo için indeksler `koltuklar`
--
ALTER TABLE `koltuklar`
  ADD PRIMARY KEY (`koltuk_id`),
  ADD KEY `sefer_koltu_fk1_idx` (`sefer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  ADD PRIMARY KEY (`kullanici_id`),
  ADD UNIQUE KEY `tc_kimlik_UNIQUE` (`tc_kimlik`),
  ADD UNIQUE KEY `e-mail_UNIQUE` (`e_mail`);

--
-- Tablo için indeksler `otobüsler`
--
ALTER TABLE `otobüsler`
  ADD PRIMARY KEY (`otobüs_id`);

--
-- Tablo için indeksler `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD PRIMARY KEY (`rezervasyon_id`) USING BTREE,
  ADD KEY `FOREİGNREZ1` (`user_id`),
  ADD KEY `FOREİGNREZ2` (`sefer_id`);

--
-- Tablo için indeksler `seferler`
--
ALTER TABLE `seferler`
  ADD PRIMARY KEY (`sefer_id`),
  ADD KEY `FOREİGN1` (`kalkis_sehir_id`),
  ADD KEY `FOREİGN2` (`varis_sehir_id`),
  ADD KEY `FOREİGN3` (`otobüs_id`);

--
-- Tablo için indeksler `ödemeler`
--
ALTER TABLE `ödemeler`
  ADD PRIMARY KEY (`ödeme_id`),
  ADD KEY `foreignÖDEME1` (`sefer_id`),
  ADD KEY `foreignÖDEME2` (`koltuk_id`),
  ADD KEY `foreignÖDEME3` (`user_id`);

--
-- Tablo için indeksler `şehiler`
--
ALTER TABLE `şehiler`
  ADD PRIMARY KEY (`sehir_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `biletler`
--
ALTER TABLE `biletler`
  MODIFY `bilet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `koltuklar`
--
ALTER TABLE `koltuklar`
  MODIFY `koltuk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Tablo için AUTO_INCREMENT değeri `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `otobüsler`
--
ALTER TABLE `otobüsler`
  MODIFY `otobüs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  MODIFY `rezervasyon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `seferler`
--
ALTER TABLE `seferler`
  MODIFY `sefer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `ödemeler`
--
ALTER TABLE `ödemeler`
  MODIFY `ödeme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `şehiler`
--
ALTER TABLE `şehiler`
  MODIFY `sehir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `biletler`
--
ALTER TABLE `biletler`
  ADD CONSTRAINT `koltuk_bilet_fk1` FOREIGN KEY (`koltuk_id`) REFERENCES `koltuklar` (`koltuk_id`),
  ADD CONSTRAINT `odeme_bilet_fk1` FOREIGN KEY (`odeme_id`) REFERENCES `ödemeler` (`ödeme_id`),
  ADD CONSTRAINT `sefer_bilet_fk1` FOREIGN KEY (`sefer_id`) REFERENCES `seferler` (`sefer_id`),
  ADD CONSTRAINT `user_bilet_fk1` FOREIGN KEY (`user_id`) REFERENCES `kullanıcılar` (`kullanici_id`);

--
-- Tablo kısıtlamaları `koltuklar`
--
ALTER TABLE `koltuklar`
  ADD CONSTRAINT `sefer_koltu_fk1` FOREIGN KEY (`sefer_id`) REFERENCES `seferler` (`sefer_id`);

--
-- Tablo kısıtlamaları `rezervasyonlar`
--
ALTER TABLE `rezervasyonlar`
  ADD CONSTRAINT `fk_Rezervasyonlar_Koltuklar1` FOREIGN KEY (`koltuk_id`) REFERENCES `koltuklar` (`koltuk_id`),
  ADD CONSTRAINT `sefer_rezervasyon_fk1` FOREIGN KEY (`sefer_id`) REFERENCES `seferler` (`sefer_id`),
  ADD CONSTRAINT `user_rezervasyon_fk1` FOREIGN KEY (`user_id`) REFERENCES `kullanıcılar` (`kullanici_id`);

--
-- Tablo kısıtlamaları `seferler`
--
ALTER TABLE `seferler`
  ADD CONSTRAINT `otobusler_sefer_pk1` FOREIGN KEY (`otobüs_id`) REFERENCES `otobüsler` (`otobüs_id`),
  ADD CONSTRAINT `sehir_sefer_pk1` FOREIGN KEY (`kalkis_sehir_id`) REFERENCES `şehiler` (`sehir_id`),
  ADD CONSTRAINT `sehir_sefer_pk2` FOREIGN KEY (`varis_sehir_id`) REFERENCES `şehiler` (`sehir_id`);

--
-- Tablo kısıtlamaları `ödemeler`
--
ALTER TABLE `ödemeler`
  ADD CONSTRAINT `ödeme_koltuk_fk1` FOREIGN KEY (`koltuk_id`) REFERENCES `koltuklar` (`koltuk_id`),
  ADD CONSTRAINT `ödeme_sefer_fk1` FOREIGN KEY (`sefer_id`) REFERENCES `seferler` (`sefer_id`),
  ADD CONSTRAINT `ödeme_user_fk1` FOREIGN KEY (`user_id`) REFERENCES `kullanıcılar` (`kullanici_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
