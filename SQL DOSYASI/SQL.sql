-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Tem 2020, 18:01:25
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ufuk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_ad`) VALUES
(154, 'demo@demo.com', 'demo', 'Ufuk');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvuru`
--

CREATE TABLE `basvuru` (
  `basvuru_id` int(11) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `dogumt` text NOT NULL,
  `dogumy` text NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` text NOT NULL,
  `cinsiyet` varchar(5) NOT NULL,
  `ref` text NOT NULL,
  `dil` text NOT NULL,
  `egitim` varchar(11) NOT NULL,
  `gecmis` text NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `basvuru`
--

INSERT INTO `basvuru` (`basvuru_id`, `isim`, `dogumt`, `dogumy`, `tel`, `mail`, `cinsiyet`, `ref`, `dil`, `egitim`, `gecmis`, `cv`) VALUES
(3, 'Ramazan', '2019-12-04', 'Istanbul', '5538849658', 'ramazankaraca5@gmail.com', 'Erkek', 'asdsadsa', 'en,de,fr,ing,es,ru', 'Ön Lisans', 'asdasdasdsadsa', 'basvuru/26160201742762427138Yeni Microsoft Office Word Belgesi.docx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(100) NOT NULL,
  `hakkimizda_aciklama` text NOT NULL,
  `hakkimizda_tarih` text NOT NULL,
  `hakkimizda_resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_tarih`, `hakkimizda_resim`) VALUES
(0, 'HAKKIMIZDA', '<p class=\"card-text lead\">Kurulmuş olduğu 1997 yılından bu yana kaliteden taviz vermeden hizmetlerini sürdüren Manchester Dil Okulları ağırlıklı olarak İngilizce eğitim vermek için kurulan dil okuludur. Kurulmuş olduğumuz günden bu yana 1997 yılında mezun etmiş olduğumuz ilk kursiyerlerimiz de dâhil olmak üzere kurumumuz eğitim memnuniyeti her zaman yüksek olan yüzlerce kursiyer mezun etmiş olup bu sayıyı her geçen yıl biraz daha yukarıya çekmektedir. Hem ulusal hem de uluslararası yetkinliğini kanıtlayarak sektörde farklı bir konuma ulaşan Manchester Dil Okulları eğitim kalitesi ile de dikkat çekmektedir. Eğitim modeli ve geliştirdiği kendine özel eğitim sistemi ile İstanbul merkezli olarak kurulan Manchester Dil Okulları ardından Erzurum’da ilk şubesini açmış ve Kayseri, Samsun, Çorum, Çanakkale, Erzincan, Isparta ve Muğla’da şubeler açarak istikrarlı bir şekilde büyümeyi sürdürmüştür</p>\r\n\r\n            <p class=\"card-text\">Manchester Dil Okulları olarak Genel İngilizce kurslarının yanı sıra aynı zamanda özel test sınavlarına hazırlık içinde kurs programları düzenlemektedir. Özelliklede uluslararası geçerliliğe sahip olan TOEFL, TOEIC VE IELTS ile ülkemizde düzenlenen YDS sınavlarından yüksek sonuç almak isteyen öğrencilere yönelik destek kursları da verilmektedir. Yine Manchester Dil Okulları olarak Tıp İngilizcesi, Pilot İngilizcesi ve İş İngilizcesi gibi meslek gruplarının ihtiyaç duyduğu özel kurs programlarımızda bulunmaktadır. English For Specific Purposes (ESP) olarak isimlendirilen özel amaçlı İngilizce kurslarımız size mesleki anlamda başarının kapılarını açacak ve kariyerinizi destekleyecektir.</p>\r\n\r\n            <h4>Vizyonumuz</h4>\r\n\r\n            <p>Her geçen gün daha da kabul gören ve küresel bir dil olma yolunda hızla ilerleyen İngilizcenin büyük bir ihtiyaç olduğunun farkında olan herkesin hedef kitlesi olarak gören, sürekli olarak yenilenen ve hızla gelişen teknolojiyi dinamik yapısı ile sürekli takip eden ve bu değişime başarı ile ayak uyduran, eğitim sektöründe her zaman kalitesi ile öne çıkan güvenilir bir dünya markası olmayı başarmak….</p>', '19.12.2019 22:28', 'manchester.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` text NOT NULL,
  `konu` varchar(9) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `ad`, `tel`, `mail`, `konu`, `mesaj`) VALUES
(1, 'Ramazan Karaca', '5538849658', 'ramazankaraca5@gmail.com', 'İletişim', 'Merhaba');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `kayit_id` int(11) NOT NULL,
  `adi` varchar(100) NOT NULL,
  `dogum` text NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` text NOT NULL,
  `egitim` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE `makale` (
  `makale_id` int(11) NOT NULL,
  `makale_baslik` varchar(100) NOT NULL,
  `makale_aciklama` text NOT NULL,
  `makale_tarih` text NOT NULL,
  `makale_resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`makale_id`, `makale_baslik`, `makale_aciklama`, `makale_tarih`, `makale_resim`) VALUES
(1, 'Yurt Dışı Eğitimi', 'Manchester Dil Okulları yan kuruluşu olan Edu Point Yurtdışı Eğitim Danışmanlığı yurtdışında eğitim almış ve bir çok ülkeyi gezerek eğitim kuruluşlarını yakından tanıma fırsatı bulmuş tecrübeli eğitim danışmanlarıyla, yurtdışında eğitimi hedefleyen öğrencilere okul kayıtları, vize işlemlerinin yürütülmesi, konaklama ayarlanması, seyahat organizasyonlarının planlanması gibi konularda yardımcı olmak amacıyla kurulmuştur.', '12.12.2019 23:06', 'building.jpg'),
(2, 'KONUŞMA KULÜBÜ', 'İngilizce düzeyini teorik olarak orta veya ileri düzeye getirmiş pek çok öğrencinin sorunu akıcı olarak konuşamamaktır. Bu durum kendimize olan güvenimizi sarsar ve sonuçta aslında çok basit olan cümleleri bile kuramaz oluruz..Bir yabancı ile konuşma fobisini üzerinizden atmanız durumunda orta düzeydeki bir İngilizce bilgisiyle bile ne kadar verimli iletişim kurabildiğinize kendiniz de şaşıracaksınız.', '12.12.2019 00:00', 'classroom.jpg'),
(3, 'EĞİTİM BLOGU', 'Eğitim blogumuzdan ingilizce eğitim ile ilgili bilgilere ulaşabilir, ingilizcenizi en kısa zamanda geliştirebilecek bilgilere erişebilirsiniz. Manchester Dil Okulları ile ingilizcenizi uzman yazarlarımızdan edineceğiniz bilgiler ile geliştirin.', '12.12.2019 00:56', 'online-english.jpg'),
(4, 'KURUMSAL EĞİTİM', 'Manchester Dil Okulları İşadamları için hazırladığı programlarla uzun zamanda İngilizce konuşamamaya son veriyor.Yabancı öğretmenler eşliğinde kısa sürece kendi branşınızda İngilizce Konuşacaksınız..', '12.12.2019 01:05', 'Corporate-English-Training.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sinav`
--

CREATE TABLE `sinav` (
  `sinav_id` int(11) NOT NULL,
  `sinav_soru` text NOT NULL,
  `sikA` text NOT NULL,
  `sikB` text NOT NULL,
  `sikC` text NOT NULL,
  `sikD` text NOT NULL,
  `sinav_dogru` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sinav`
--

INSERT INTO `sinav` (`sinav_id`, `sinav_soru`, `sikA`, `sikB`, `sikC`, `sikD`, `sinav_dogru`) VALUES
(15, 'İstanbulun Başkenti?', 'Evren', 'a', 'Istanbul', 'a', 1),
(16, 'Ankaranın Başkenti?', 'd', 'd', 'd', 'd', 1),
(17, 'Sivasın Başkenti?', 'f', 'f', 'f', 'f', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `cinsiyet` varchar(5) DEFAULT NULL,
  `dogum` varchar(150) DEFAULT NULL,
  `profile_pic` varchar(200) DEFAULT NULL,
  `google_auth_code` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `name`, `tel`, `cinsiyet`, `dogum`, `profile_pic`, `google_auth_code`) VALUES
(9, 'raraar', 'ramazankaraca5@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'Ramazan Karaca', '5538849658', 'Erkek', '2019-12-11', NULL, 'WEBUTQKTBEB5GB7H'),
(10, 'root', 'deneme@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'Oğuz Atay', '5538849658', 'Erkek', '2019-11-30', NULL, 'IAPS3SD5JEM6ZENO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `yorum_ad` varchar(50) NOT NULL,
  `yorum_mail` text NOT NULL,
  `yorum_yorum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `uid`, `yorum_ad`, `yorum_mail`, `yorum_yorum`) VALUES
(8, 9, 'Ramazan Karaca', 'ramazankaraca5@gmail.com', 'afsdfsdafd'),
(10, 9, 'Ramazan Karaca', 'ramazankaraca5@gmail.com', 'rararara'),
(13, 10, 'Oğuz Atay', 'deneme@gmail.com', 'Güzel site');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `basvuru`
--
ALTER TABLE `basvuru`
  ADD PRIMARY KEY (`basvuru_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`kayit_id`);

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`makale_id`);

--
-- Tablo için indeksler `sinav`
--
ALTER TABLE `sinav`
  ADD PRIMARY KEY (`sinav_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- Tablo için AUTO_INCREMENT değeri `basvuru`
--
ALTER TABLE `basvuru`
  MODIFY `basvuru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `kayit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `sinav`
--
ALTER TABLE `sinav`
  MODIFY `sinav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
