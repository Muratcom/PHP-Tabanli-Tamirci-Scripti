-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Mar 2017, 11:31:08
-- Sunucu sürümü: 10.1.8-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tamirci_admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'admin', '7815696ecbf1c96e6894b779456d330e', '0'),
(2, 'murat', '7815696ecbf1c96e6894b779456d330e', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_ayarlar`
--

CREATE TABLE `admin_ayarlar` (
  `adminayar_id` int(11) NOT NULL,
  `adminayar_logo` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_title` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_description` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_keywords` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_footer` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_fax` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adminayar_yedek` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin_ayarlar`
--

INSERT INTO `admin_ayarlar` (`adminayar_id`, `adminayar_logo`, `adminayar_telefon`, `adminayar_title`, `adminayar_description`, `adminayar_keywords`, `adminayar_facebook`, `adminayar_twitter`, `adminayar_linkedin`, `adminayar_footer`, `adminayar_adres`, `adminayar_mail`, `adminayar_fax`, `adminayar_yedek`) VALUES
(1, 'images/logo.png\n', '0212 234 56 300', 'ALO TAMIRCIM', 'Evlere servis,hizmeti, hizli cozum', 'Evlere servis,hizmeti, hizli cozum', 'https://www.facebook.com/', 'https://www.twitter.com/?lang=tr', 'https://www.linkedin.com/', 'Design By © Murat Eksi   ', 'Istanbul/Turkey', 'murat@gmail.com', '0212 234 56 79', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber`
--

CREATE TABLE `haber` (
  `haber_id` int(11) NOT NULL,
  `haber_zaman` datetime NOT NULL,
  `haber_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `haber_detay` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `haber_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `haber_hit` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haber`
--

INSERT INTO `haber` (`haber_id`, `haber_zaman`, `haber_ad`, `haber_detay`, `haber_resimyol`, `haber_hit`) VALUES
(20, '2017-03-14 19:44:00', 'Havalar Soğuyor!!!', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Meteoroloji md&uuml;r&uuml;l&uuml;ğ&uuml;</p>\r\n', 'uploadshaber/232952556928726299131.jpg', '19'),
(21, '2017-03-14 19:44:00', 'Seçim Yaklaşıyor!!!! herkes çok meraklı', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'uploadshaber/270972365725109294432.jpg', '13'),
(22, '2017-03-14 19:44:00', 'Havalar Soğuyor!!!', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Meteoroloji md&uuml;r&uuml;l&uuml;ğ&uuml;</p>\r\n', 'uploadshaber/232952556928726299131.jpg', '19'),
(23, '2017-03-14 19:44:00', 'Seçim Yaklaşıyor!!!! herkes çok meraklı', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'uploadshaber/270972365725109294432.jpg', '12'),
(24, '2017-03-14 19:44:00', 'Havalar Soğuyor!!!', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Meteoroloji md&uuml;r&uuml;l&uuml;ğ&uuml;</p>\r\n', 'uploadshaber/232952556928726299131.jpg', '19'),
(25, '2017-03-14 19:44:00', 'Seçim Yaklaşıyor!!!! herkes çok meraklı', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'uploadshaber/270972365725109294432.jpg', '12'),
(26, '2017-03-14 19:44:00', 'Havalar Soğuyor!!!', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Meteoroloji md&uuml;r&uuml;l&uuml;ğ&uuml;</p>\r\n', 'uploadshaber/232952556928726299131.jpg', '19'),
(27, '2017-03-14 19:44:00', 'Seçim Yaklaşıyor!!!! herkes çok meraklı', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'uploadshaber/270972365725109294432.jpg', '12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ek` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `menu_ad`, `menu_link`, `menu_ek`) VALUES
(1, 'Haberler', 'haberler.php', ''),
(13, 'Youtube', 'http://www.youtube.com', ''),
(14, 'Web Sitem', 'http://www.murateksi38.com', ''),
(15, 'İletişim', 'iletisim.php', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_tarih` datetime NOT NULL,
  `sayfa_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_sira` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `sayfa_anasayfa` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_tarih`, `sayfa_ad`, `sayfa_icerik`, `sayfa_sira`, `sayfa_anasayfa`) VALUES
(1, '2017-03-11 19:20:00', 'modul1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt turpis. Suspendisse nisl metus, faucibus sit amet viverra at, facilisis sed tellus. Sed eget velit lectus. Integer ultrices, dui et eleifend tempus, lectus lectus consequat tellus, ut euismod nulla ante ac nisi. Praesent in odio porta, elementum nunc et, tempor leo. Sed fermentum justo at augue sodales eleifend. Phasellus ultrices felis ipsum, vel posuere orci elementum eget. Sed fermentum libero mi, eget sodales nulla ornare eu. Aenean felis leo, finibus eleifend ex et, rhoncus ornare erat. Vivamus sed gravida mauris. In at quam neque. Nam scelerisque placerat tellus, at dignissim dui efficitur eu. Nullam dapibus ultricies mattis. Vivamus sit amet congue mauris. Sed elit turpis, placerat quis nunc eu, gravida placerat mi.\n\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Ut consectetur egestas vulputate. Praesent nec posuere turpis. Nam et mi dignissim quam luctus pellentesque. Proin a imperdiet risus, a consectetur lorem. Duis ut est sed est iaculis porta vitae lacinia enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis eu est sit amet mi lacinia euismod. Sed sit amet purus porta, tempor metus eget, blandit nulla. Aenean nec congue turpis, a aliquam tellus. Maecenas in sapien luctus, imperdiet magna condimentum, tristique odio. Nullam dignissim diam vitae tristique viverra. Morbi hendrerit purus nisi, ac elementum dolor pulvinar id.\n\nPraesent ut elit mi. Aenean et ante purus. Etiam sed nunc fermentum, sodales lorem eget, scelerisque risus. In eros diam, bibendum eget posuere ut, hendrerit ac urna. Nunc mollis, ligula ut consequat accumsan, magna mi dapibus ex, eget facilisis tortor lectus vel purus. Curabitur ultrices nisi quis massa hendrerit, eget placerat diam ornare. Aliquam semper quam sed neque finibus, sit amet tristique sem posuere. Nam quis tortor non tortor finibus viverra non sodales est.\n\nVivamus lobortis velit eu hendrerit faucibus. Proin id quam vel massa aliquam pretium. Nam feugiat mattis ante sit amet gravida. Ut lorem diam, feugiat ut ipsum aliquam, varius gravida purus. Donec ut tellus pellentesque massa elementum auctor. Proin pellentesque orci eu nulla tempor laoreet. Etiam fermentum ut enim ut gravida. Nam dictum iaculis volutpat. Aliquam tempor ac sapien vitae ullamcorper. Maecenas ornare ante id mauris porttitor posuere. Curabitur mattis ut nisl eu accumsan. Nullam orci purus, ullamcorper molestie ante quis, rutrum luctus purus. Aenean scelerisque dui quis arcu feugiat ultrices. Integer non lorem cursus, feugiat ex sit amet, maximus elit.\n\nMorbi scelerisque est vel velit sollicitudin consectetur. Sed lacinia, nunc vel tristique ultricies, ex sem placerat justo, in bibendum massa mi eget tortor. Phasellus dignissim pharetra accumsan. Morbi condimentum dui id auctor porta. Sed tincidunt volutpat sem, ultrices imperdiet velit tincidunt a. Cras id bibendum metus, ut hendrerit justo. Donec id vulputate est, id facilisis urna. Aenean quis sapien mi. Phasellus tincidunt accumsan dolor a commodo. Integer tempus consequat sapien id pharetra.', '1', '1'),
(4, '2017-03-11 19:27:00', 'modul3', '<p>adadasdadadad</p>\r\n', '2', '1'),
(6, '2017-03-11 20:25:00', 'modul26', '<p>muratcan canım benim</p>\r\n', '26', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_url`, `slider_sira`) VALUES
(13, 'slider1', 'uploads/20671208532700521553city-q-c-736-397-4.jpg', '', '0'),
(14, 'slider2', 'uploads/30122226212847423450nature-q-c-736-397-8.jpg', '', '2'),
(15, 'slider3', 'uploads/27641200532532626074nature-q-c-736-397-10.jpg', '', '3');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `admin_ayarlar`
--
ALTER TABLE `admin_ayarlar`
  ADD PRIMARY KEY (`adminayar_id`);

--
-- Tablo için indeksler `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`haber_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `admin_ayarlar`
--
ALTER TABLE `admin_ayarlar`
  MODIFY `adminayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `haber`
--
ALTER TABLE `haber`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
