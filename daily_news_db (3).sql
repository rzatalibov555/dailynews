-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 09:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_email`, `a_status`, `a_img`) VALUES
(1, 'Revan Alızadə', 'cool_revan', '202cb962ac59075b964b07152d234b70', 'revan@gmail.com', 'Active', 'avatar.jpg'),
(2, 'Səma Babayeva', 'esma', '827ccb0eea8a706c4c34a16891f84e7b', 'esma@gmail.com', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'İdman'),
(2, 'Mədəniyyət'),
(3, 'Biznes'),
(4, 'Texnologiya');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_file`, `n_file_ext`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(31, 'AFFA Qurbanovu təkzib etdi - Təzminatdan imtina etməyib', 'Millimizin sabiq baş məşqçisi Qurban Qurbanov AFFA-nın onunla bağlanan müqaviləyə vaxtından əvvəl xitam verməsinə görə təzminat almayıb. \r\n\r\nXeberci.az xəbər verir ki, bu barədə oxu.az-a açıqlamasında millinin sabiq mətbuat katibi Elman Himayətoğlu məlumat verib. Qurban Qurbanov təzminatdan imtina etdiyi bildirilir. \r\nMəsəllə ilə bağlı AFFA-nın mövqeyini öyrəndik. \r\n\r\nAFFA-nın İnformasiya və İctimaiyyətlə Əlaqələr Departamenti Firuz Abdulla  Unikal.org-a verdiyi açıqlamada imtina ilə bağlı quruma müraciət olunmadığını deyib: \r\n\"AFFA-nın mövqeyi bununla bağlı mövqeyi belədir ki, milli komandanın sabiq baş məşqçisi Qurban Qurbanov ona ödənilməli olan təzminatdan imtinası ilə bağlı hələ ki, AFFA-ya rəsmi müraciət etməyib. ', '2023-02-25T13:51', '1', 'Active', '12.jpg', '.jpg', 1, '2023-02-25 13:51:38', '', ''),
(32, '\"Futbolçuları pulsuz qoyun, ağılları başlarına gəlsin\" - Aqil Abbas', 'Xeberci.az xəbər verir ki, millət vəkili Aqil Abbasın Oxu.Az saytına müsahibə verib.\r\n\r\nHəmin müsahibəni təqdim edirik:\r\n\r\n– Aqil müəllim, millimizin oyununa baxdınızmı?\r\n\r\n– Baxdım.\r\n\r\n– Kosovo ilə oyun millimizin qrup qalibi olmaq, eləcə də, Avropa çempionatına vəsiqə qazanması baxımından vacib görüş idi. Amma 0:4 hesabı ilə uduzduq. Bu nəticəni gözləyirdinizmi?', '2023-02-25T13:52', '1', 'Active', '2.jpg', '.jpg', 1, '2023-02-25 13:52:27', '', ''),
(33, 'Bu da “Real Madrid”in yeni baş məşqçisi', '“Real” yeni baş məşqçisi Xulen Lopeteqini ictimaiyyətə təqdim edib.\r\n\r\n51 yaşlı mütəxəssis klubla 3 illik müqavilə imzalayıb.\r\n\r\nQeyd edək ki, bundan əvvəl “Real Madrid”ə Zinəddin Zidan rəhbərlik edib. O, mayın sonunda gözlənilmədən vəzifəsindən gedib.\r\n\r\nLopeteqi öz növbəsində İspaniya yığma komandasının baş məşqçisi postunu tutub. O, komanda ilə DÇ-2018-də çıxış etməyə hazırlaşdığı bir vaxtda, İspaniya Futbol Federasiyası rəhbərliyi mütəxəssisin onları Real ilə danışıqlar aparması barədə xəbərdar etmədiyinə görə, mundial öncəsi onu tutduğu vəzifədən istefaya göndərib.', '2023-02-24T13:52', '1', 'Active', '3.jpg', '.jpg', 1, '2023-02-25 13:53:04', '', ''),
(34, '“Real” finala çıxdı', 'Birləşmiş Ərəb Əmirliklərində (BƏƏ) klublararası dünya çempionatının ikinci yarımfinal oyunu keçirilib.\r\n\r\nXeberci.az xəbər verir ki, UEFA Çempionlar Liqasının son qalibi Madridin “Real” klubu Asiya çempionu olan Yaponiyanın “Kaşima Antlers” klubunu 3:1 hesabı ilə məğlub edib.\r\n\r\n“Real”ın heyətində Qaret Beyl “het-trik”ə imza atıb. Yaponların qolunu isəŞoma Doi vurub.', '2023-02-21T13:53', '1', 'Active', '4.jpg', '.jpg', 1, '2023-02-25 13:53:43', '', ''),
(35, 'Xalq artisti - Qalmaqallar, söz-söhbətlər mənlik deyil', 'Heç vaxt həyatımda “mənəm-mənəm” deməmişəm. Belə şeyləri qəbul etmirəm. Ümumiyyətlə, “mən” sözündən xoşum gəlmir.\r\n\r\nXeberci.az xəbər verir ki, bunu “Şöhrət” ordenli Xalq artisti, professor Səkinə İsmayılova deyib.\r\n\r\nO qeyd edib ki, hər zaman sadəliyin, təvazökarlığın tərəfdarı olub.\r\n\r\n“Bildiyiniz kimi, bir neçə il öncə ölkə prezidenti tərəfindən “Şöhrət” ordeni ilə təltif olundum.', '2023-02-15T13:57', '3', 'Active', '5.jpg', '.jpg', 1, '2023-02-25 13:57:52', '', ''),
(36, 'Fədayə yenidən hakim qarşısına çıxacaq', 'Xəbər verdiyimiz kimi, Bakıda məhbusların nəzarət altından qaçmasında təqsirləndirilərək 5 il azadlıqdan məhrum edilən müğənni Fədayə Laçın apelyasiya şikayəti verib.\r\n\r\nOnun məhkəmə prosesinin vaxtı müəyyənləşib.\r\n\r\nBu barədə Axşam.az-a müğənninin vəkili Türkel Süleymanlı məlumat verib.\r\n\r\nO bildirib ki, məhkəmə prosesi bu ayın 28-i baş tutacaq.\r\n\r\nQeyd edək ki, Bakı Ağır Cinayətlər Məhkəməsinin hökmü ilə, Fədayə Laçın 5 il müddətinə azadlıqdan məhrum edilib.', '2023-02-17T13:58', '3', 'Active', '6.jpg', '.jpg', 1, '2023-02-25 13:58:29', '', ''),
(37, '\"Sevirəm\" sözünü eşidəndə ətim ürpənir\" - Nazənin', 'ARB TV-nin \"Səhər-Səhər” verilişinin növbəti qonağı müğənni Nazənin olub.\r\n\r\nMynews.az-ın məlumatına görə, aparıcı Elgiz Əkbər müğənniyə \"Həyat yoldaşınız sizə \"sevirəm\" deyibmi” sualını ünvanlayıb. İfaçının cavabı isə belə olub:\r\n\r\n\"Vallah ayıbdır, bizə uşaqlar baxır. Bəli, xanımlar ümumilikdə \"sevirəm” sözünü xoşlayırlar. Amma o söz mənə birtəhər gəlir, ətim ürpənir”.', '2023-02-17T13:58', '3', 'Active', '7.jpg', '.jpg', 1, '2023-02-25 13:59:16', '', ''),
(38, '\"Adam o qədər zəngindir ki, 15-20 müğənni saxlaya bilər\" - Damlanın məmur sevgilisinin FOTOSU', 'Azərbaycanın tanınan müğənnilərinin özəl həyatı vaxtaşırı gündəmə gəlir. Son vaxtlar bəzi qadın müğənnilərin sponsorları haqda da maraqlı və ziddiyyətli məlumatlar yayılır. Bu məsələdə müğənni Damlayla Şəbnəm Tovuzlu öndə gedir yazsaq, yəqin ki yanılmarıq.', '2023-02-19T14:01', '3', 'Active', '8.jpg', '.jpg', 1, '2023-02-25 14:01:33', '', ''),
(39, 'Azərbaycan klassiki Abdulla Şaiqin ev muzeyindən FOTOREPORTAJ', 'Azərbaycanlı şair, yazıçı, dramaturq, publisist, əməkdar incəsənət xadimi Abdulla Şaiqin ev muzeyinin əsası yaşadığı mənzildə ölümündən sonra qoyulub.', '2023-02-20T14:03', '2', 'Active', '9.jpg', '.jpg', 1, '2023-02-25 14:03:53', '', ''),
(40, 'Xalq artisti: “Qərar verildi, bundan sonra aktyorun cənazəsi teatrın səhnəsindən götürüləcək”', '“Bundan sonra vəfat edən aktyor işlədiyi teatrın səhnəsindən götürüləcək”.\r\n\r\nBunu “Qaynarinfo”ya açıqlamasında Xalq artisti Əli Nur deyib. Aktyor bununla bağlı Prezidentin qərarı olduğunu açıqlayıb:\r\n\r\n“Azərbaycan dövləti aktyorlara qayğı və diqqətini artırdı, aktyorların ev, maaşla təmin olunmasına start verildi, eyni zamanda dünyasını dəyişən aktyorların işlədiyi teatrın səhnəsindən götürülməsi qərarı verildi. Teatrlara dövlətin böyük qayğısı olacaq. Bütünlüklə bu məsuliyyəti dövlət üzərinə götürdü. Bundan sonra aktyorlar dünyalarını dəyişəndə səhnədən götürüləcəklər”. ', '2023-02-14T14:04', '2', 'Active', '10.jpg', '.jpg', 1, '2023-02-25 14:04:42', '', ''),
(41, 'Bir dövr Alen Delonla eyni kinoya çəkilən məşhurlarımıza tələb niyə azalıb?', 'Sovet dönəmində Azərbaycan aktyorları müttəfiq respublikaların çəkdiyi filmlərdə də rol alıblar. Hətta sovet məkanını aşıb, xarici filmlərdə rol alanlar da olub.\r\n\r\nLent.az kiçik bir xatırlatma edir.\r\n\r\nXalq artisti Tariyel Qasımov “Mosfilm”, “Tacikfilm”, “Türkmənfilm”, “Özbəkfilm” , habelə Almaniyanın “DAFE” kinostudiyalarının çəkdiyi filmlərdə, Xalq artisti Fuad Poladov rus və türk filmlərində, Bəşir Səfəroğlu Orta Asiya kinosunda maraqlı obrazlar yaradıblar.', '2023-02-12T14:05', '2', 'Active', '111.jpg', '.jpg', 1, '2023-02-25 14:05:19', '', ''),
(42, '“Üzüklərin hökmdarı” kainatında yeni filmlər gəlir', '“Warner Bros Discovery” şirkəti “Üzüklərin hökmdarı” (“The Lord of the Rings”) kainatında yeni filmlərin çəkilişlərini elan edib.\r\n\r\nŞirkət layihənin reallaşmasında “New Line Cinema” ilə əməkdaşlıq edəcək.\r\n\r\n“Warner Bros Discovery”nin rəhbəri Devid Zaslavın sözlərinə görə, şirkət “Embracer Group AB” ilə yeni bir müqavilə bağlayıb və bundan sonra Tolkinin bir çox əsəri ilə bağlı layihələr həyata keçirə bilər.', '2023-02-08T14:05', '2', 'Active', '121.jpg', '.jpg', 1, '2023-02-25 14:05:56', '', ''),
(43, 'Aİ Komissiyası “TikTok”u işçilərinə qadağan edib', 'Avropa İttifaqı (Aİ) Komissiyası işçilərinə təhlükəsizlik səbəbilə şəxsi və korporativ telefonlarında “TikTok” tətbiqindən istifadəni qadağan edib.\r\n\r\nBu kontekstdə Komissiyanın bütün əməkdaşlarına səhər saatlarında tətbiqi şəxsi və ya korporativ cihazlarından silmək tapşırılıb.\r\n\r\nAİ-nin digər qurumları olan Avropa İttifaqı Şurası və Avropa Parlamentinin də yaxın gələcəkdə oxşar addımlar atacağı gözlənilir.\r\n\r\nÇin texnologiya firmasına məxsus “TikTok” bəzi ölkələrdə milli təhlükəsizlik narahatlığına səbəb olur.', '2023-02-20T14:10', '4', 'Active', '13.jpg', '.jpg', 1, '2023-02-25 14:10:19', '', ''),
(44, 'Martın 1-dən “WhatsApp”sız qalacaq telefonların adları AÇIQLANDI', '“WhatsApp” dünyada ən çox istifadə olunan tətbiqlərdən biridir. O, hər kəslə ünsiyyət qurmağa, sənəd, foto, video və s. göndərməyə imkan verir.\r\n\r\nBununla belə, martın 1-dən etibarən kütləvi şəkildə işə salınacaq  yeniləmə ilə “WhatsApp” bir sıra Android smartfonlarında, xüsusən də köhnə modellərdə fəaliyyətini dayandıracaq.\r\n\r\n“Meta”ya məxsus proqram sizin həmişəki kimi mesajları qəbul etməyə davam edə biləcəyinizi bildirsə də, ola bilər ki, günlərin birində siz artıq zənglərdən istifadə edə və ya sadəcə olaraq ehtiyat nüsxənizi bərpa edə bilməyəcəksiniz.', '2023-02-22T14:11', '4', 'Active', '14.jpg', '.jpg', 1, '2023-02-25 14:11:45', '', ''),
(45, 'lqar Musayev: “Kiberhücumların əsas məqsədi bir çox hallarda qonşularımıza işarə edir”', 'Azərbaycan Respublikasının Xüsusi Rabitə və İnformasiya Təhlükəsizliyi Dövlət Xidmətinin rəisi, İnformasiya Təhlükəsizliyi üzrə Koordinasiya Komissiyasının sədri, general-leytenant İlqar Musayev “Report” İnformasiya Agentliyinə müsahibə verib.\r\n\r\nO, müsahibəsi zamanı ölkəmizdə informasiya təhlükəsizliyi və kibercinayətkarlığa qarşı mübarizə sahəsində görülən işlər, Azərbaycanın bu sahədə digər ölkələrlə əməkdaşlığı və aidiyyəti digər məsələlərlə bağlı fikirlərini bölüşüb.', '2023-02-24T14:12', '4', 'Active', '15.jpg', '.jpg', 1, '2023-02-25 14:12:32', '', ''),
(47, 'Azərbaycan ilk dəfə NASA-nın dəstəyi ilə keçirilən robot müsabiqəsində təmsil olunacaq', 'Azərbaycanın ilk robototexnika komandası bu ilin aprel ayında NASA-nın sponsoru olduğu beynəlxalq robot müsabiqəsində iştirak edəcək.\r\n\r\nAPA xəbər verir ki, 14-18 yaşlı məktəblilərdən ibarət 26 nəfərlik komanda beynəlxalq FRC (First Robotics Compotition) müsabiqəsində hazırladığı robotları təqdim edəcək.\r\n\r\nRobotun detalları, elektron hissələri, proqramlaşdırma, dizayn və digər işlər komandanın müəllim və tələbə heyəti tərəfindən görülüb.', '2023-02-21T15:11', '4', 'Active', '16.jpg', '.jpg', 1, '2023-02-25 15:11:16', '', ''),
(48, 'asd', 'sdsadasd', '2023-02-27T21:36', '1', 'Active', '101.jpg', '.jpg', 2, '2023-02-26 21:36:48', '', ''),
(49, 'alooo', 'necesen?', '2023-02-08T19:08', '1', 'Active', 'IMG_2688_новый_размер.JPG', '.JPG', 2, '2023-02-28 19:09:18', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
