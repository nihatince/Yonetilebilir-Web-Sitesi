-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ara 2022, 21:09:38
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekibimiz`
--

CREATE TABLE `ekibimiz` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altbaslik` varchar(200) NOT NULL,
  `resim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ekibimiz`
--

INSERT INTO `ekibimiz` (`id`, `baslik`, `altbaslik`, `resim`) VALUES
(1, 'EKİBİMİZ', '                                                                                    10 yıllık güçlü birliktelik..', ''),
(2, 'Nihat İnce', '<p>İş Adamı</p>\r\n', '3902948708.png'),
(3, 'Melisa Aslan', '<p>Y&ouml;netici</p>\r\n', '2606432143.png'),
(4, 'Can Evren', '<p>Ceo</p>\r\n', '1014618394.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `baslik` varchar(150) NOT NULL,
  `icon1` varchar(150) NOT NULL,
  `icon1_link` varchar(150) NOT NULL,
  `icon2` varchar(150) NOT NULL,
  `icon2_link` varchar(150) NOT NULL,
  `icon3` varchar(150) NOT NULL,
  `icon3_link` varchar(150) NOT NULL,
  `renk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`id`, `baslik`, `icon1`, `icon1_link`, `icon2`, `icon2_link`, `icon3`, `icon3_link`, `renk`) VALUES
(1, 'Telif Hakkı © Web Siteniz 2022', 'fab fa-twitter', 'faceook', 'fab fa-youtube', 'faceook', 'fab fa-instagram', 'faceook', 'white');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giris`
--

CREATE TABLE `giris` (
  `id` int(11) NOT NULL,
  `kulad` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `giris`
--

INSERT INTO `giris` (`id`, `kulad`, `sifre`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altbaslik` varchar(200) NOT NULL,
  `resim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `altbaslik`, `resim`) VALUES
(1, 'HAKKIMIZDA', '<p>Daha fazla bilgi i&ccedil;in ulaşınız..</p>\r\n', ''),
(2, 'Tercihiniz tecrübeden yana olsun', '<p>15 yılı aşkın s&uuml;redir İzmir&#39;de birden fazla &ouml;ğrenci yurdu işletmeciliğimizden dolayı, pr</p>\r\n', '2713041232.png'),
(3, 'NMC otel farkıyla', '<p>&Ccedil;anakkale&rsquo;nin eşsiz manzarası eşliğinde sizin i&ccedil;in yaratılmış butik bir d&uuml;nya&hellip;</p>\r\n', '1011730733.png'),
(4, 'NMC Otel Konsept', '<p>Odalarda ve genel alanlarda T&uuml;rkiye&#39;nin en &uuml;nl&uuml; 85 şairinin, 550 en g&uuml;zel şiirleri, r&ouml;lyefleri, b&uuml;stleri ve tabloları bulunmaktadır.</p>\r\n', '3155317854.png'),
(5, 'Güler yüzlü insanlar..', '<p>Resepsiyon dahil otelimizde her zaman g&uuml;ler y&uuml;zl&uuml; insanlarla &ccedil;alışırız.</p>\r\n', '4432910723.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `baslik` varchar(150) NOT NULL,
  `altbaslik` varchar(150) NOT NULL,
  `input1` varchar(150) NOT NULL,
  `input2` varchar(150) NOT NULL,
  `input3` varchar(150) NOT NULL,
  `input4` varchar(150) NOT NULL,
  `resim` varchar(150) NOT NULL,
  `buton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `baslik`, `altbaslik`, `input1`, `input2`, `input3`, `input4`, `resim`, `buton`) VALUES
(1, 'İLETİŞİM', '<p>Daha fazla bilgi i&ccedil;in l&uuml;tfen iletişime ge&ccedil;iniz..</p>\r\n', 'İsminiz *', 'Email *', 'Telefon Numaranız *', 'Mesajınız *', '4739410199.jpg', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konaklama`
--

CREATE TABLE `konaklama` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altbaslik` varchar(200) NOT NULL,
  `resim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `konaklama`
--

INSERT INTO `konaklama` (`id`, `baslik`, `altbaslik`, `resim`) VALUES
(1, 'KONAKLAMA', '                            İsteğe bağlı seçeneklerle..', ''),
(2, 'Otel', '<p>Otel Binası</p>\r\n', '3198512129.jpg'),
(3, 'Lobi', '<p>Otel Lobisi</p>\r\n', '1998446488.jpg'),
(4, 'Restoran', '<p>Sabah ve Akşam Yemeği</p>\r\n', '3663414762.jpg'),
(5, 'Havuz', '<p>Ailenizle g&uuml;zel vakitler ge&ccedil;irin</p>\r\n', '1099041831.jpg'),
(6, 'Resepsiyon', '<p>Resepsiyonumuz</p>\r\n', '3157710200.jpg'),
(7, 'Spa', '<p>Masaj Salonumuz</p>\r\n', '4030034925.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `giris_tarihi` datetime NOT NULL,
  `cikis_tarihi` datetime NOT NULL,
  `log_ip` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `log`
--

INSERT INTO `log` (`id`, `giris_tarihi`, `cikis_tarihi`, `log_ip`) VALUES
(43, '2022-05-24 19:29:10', '2022-05-25 04:44:55', '::1'),
(44, '2022-05-24 21:22:13', '2022-05-25 04:44:55', '::1'),
(45, '2022-05-25 04:34:09', '2022-05-25 04:44:55', '::1'),
(46, '2022-05-25 04:46:42', '2022-06-06 06:54:33', '::1'),
(47, '2022-05-25 04:48:15', '2022-06-06 06:54:33', '::1'),
(48, '2022-05-25 12:04:36', '2022-06-06 06:54:33', '::1'),
(49, '2022-05-25 12:13:58', '2022-06-06 06:54:33', '::1'),
(50, '2022-06-06 06:22:12', '2022-06-06 06:54:33', '::1'),
(51, '2022-06-06 06:54:36', '2022-06-06 09:47:22', '::1'),
(52, '2022-06-06 09:02:10', '2022-06-06 09:47:22', '::1'),
(53, '2022-06-06 09:47:05', '2022-06-06 09:47:22', '::1'),
(54, '2022-06-06 09:47:42', '2022-10-17 23:54:58', '::1'),
(55, '2022-06-23 22:51:33', '2022-10-17 23:54:58', '::1'),
(56, '2022-06-30 18:41:19', '2022-10-17 23:54:58', '::1'),
(57, '2022-06-30 18:43:49', '2022-10-17 23:54:58', '::1'),
(58, '2022-10-17 23:54:48', '2022-10-17 23:54:58', '::1'),
(59, '2022-10-17 23:55:09', '2022-10-27 00:20:22', '::1'),
(60, '2022-10-27 00:20:14', '2022-10-27 00:20:22', '::1'),
(61, '2022-10-27 00:20:30', '2022-12-05 23:04:42', '::1'),
(62, '2022-11-30 00:49:39', '2022-12-05 23:04:42', '::1'),
(63, '2022-11-30 03:19:47', '2022-12-05 23:04:42', '::1'),
(64, '2022-12-05 22:58:22', '2022-12-05 23:04:42', '::1'),
(65, '2022-12-05 23:04:29', '2022-12-05 23:04:42', '::1'),
(66, '2022-12-05 23:04:54', '2022-12-05 23:05:26', '::1'),
(67, '2022-12-05 23:05:44', '0000-00-00 00:00:00', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logobaslik` varchar(100) NOT NULL,
  `logoresim` varchar(200) NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `logo`
--

INSERT INTO `logo` (`id`, `logobaslik`, `logoresim`, `durum`) VALUES
(0, 'NMC OTEL', 'img/logo.fw.png', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lokasyonbaslik`
--

CREATE TABLE `lokasyonbaslik` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altbaslik` varchar(200) NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `lokasyonbaslik`
--

INSERT INTO `lokasyonbaslik` (`id`, `baslik`, `altbaslik`, `durum`) VALUES
(1, 'LOKASYONLAR', '<p>Yakında daha fazla hizmetlerle..</p>\r\n', 1),
(2, 'Çanakkale', '              NMC Otel, Boğazkent, Atatürk Cd. No:2, 17100 Kepez/Çanakkale Merkez/Çanakkale\r\n                        Telefon: 0212 654 45 87', 1),
(3, 'İzmir', '                            NMC Otel, Akdeniz, Atatürk Cd. No:36, 35210 Konak/İzmir\r\n                        <br>Telefon: 0215 655 47 81', 1),
(4, 'İstanbul', 'NMC Otel, Kuruçeşme, 34345 Beşiktaş/İstanbul\n                        Telefon: 0219 623 22 17', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `baslik1` varchar(55) NOT NULL,
  `baslik1_link` varchar(100) NOT NULL,
  `durum` int(11) NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `baslik1`, `baslik1_link`, `durum`, `sira`) VALUES
(1, 'Anasayfa', 'index.php', 1, 0),
(2, 'Konaklama', 'konaklama.php', 1, 1),
(3, 'Hakkımızda', 'hakkimizda.php', 1, 2),
(4, 'İletişim', 'iletisim.php', 1, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu_renk`
--

CREATE TABLE `menu_renk` (
  `id` int(11) NOT NULL,
  `menu_renk` varchar(50) NOT NULL,
  `menu_yazi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menu_renk`
--

INSERT INTO `menu_renk` (`id`, `menu_renk`, `menu_yazi`) VALUES
(1, 'dark', 'muted');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odalarimiz`
--

CREATE TABLE `odalarimiz` (
  `id` int(11) NOT NULL,
  `baslik` varchar(400) NOT NULL,
  `altbaslik` varchar(400) NOT NULL,
  `resim` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `odalarimiz`
--

INSERT INTO `odalarimiz` (`id`, `baslik`, `altbaslik`, `resim`) VALUES
(1, 'ODALARIMIZ', '                                                                                                                                    Yakında daha fazla hizmetlerle..', ''),
(2, 'Superior Odalar', '<p>15 yılı aşkın s&uuml;redir İzmir&#39;de birden fazla &ouml;ğrenci yurdu işletmeciliğimizden dolayı, pr</p>\r\n', '4931626658.jpg'),
(3, 'Suit Odalar', '<p>Suit odalarımızda 2 kişi konaklama yapılabilmektedir. Suit odalarımız konforlu bir dinlenme alanı ve t&uuml;m ihtiya&ccedil;larınıza kolayca erişebileceğiniz bir şekilde tasarlanmıştır. Suit odalarımızın tamamı deniz manzaralıdır.</p>\r\n', '3532820065.jpg'),
(4, 'Superior Odalar', '<p>Superior odalarımızda 2 yetişkin ve 1 &ccedil;ocuk (0-3 yaş grubu). Superior odalarımız konforlu bir dinlenme alanı ve t&uuml;m ihtiya&ccedil;larınıza kolayca erişebileceğiniz bir şekilde tasarlanmıştır. Superior odalarımızda m&uuml;saitlik durumuna g&ouml;re; deniz manzarası tercih edilebilinmektedir.</p>\r\n', '2545329323.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `file_name`, `durum`) VALUES
(98, '79320-92319-slider3.png', 1),
(99, '72917-2747116322.png', 1),
(100, '80869-3496447201.png', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ekibimiz`
--
ALTER TABLE `ekibimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `giris`
--
ALTER TABLE `giris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `konaklama`
--
ALTER TABLE `konaklama`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lokasyonbaslik`
--
ALTER TABLE `lokasyonbaslik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu_renk`
--
ALTER TABLE `menu_renk`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odalarimiz`
--
ALTER TABLE `odalarimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ekibimiz`
--
ALTER TABLE `ekibimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `giris`
--
ALTER TABLE `giris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `konaklama`
--
ALTER TABLE `konaklama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Tablo için AUTO_INCREMENT değeri `lokasyonbaslik`
--
ALTER TABLE `lokasyonbaslik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `menu_renk`
--
ALTER TABLE `menu_renk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `odalarimiz`
--
ALTER TABLE `odalarimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
