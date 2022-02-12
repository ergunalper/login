-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 May 2021, 04:58:12
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelik`
--

DROP TABLE IF EXISTS `uyelik`;
CREATE TABLE IF NOT EXISTS `uyelik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `sifretekrar` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyelik`
--

INSERT INTO `uyelik` (`id`, `ad`, `soyad`, `eposta`, `sifre`, `sifretekrar`) VALUES
(1, 'alper', 'ergun', 'alper@gmail.com', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
