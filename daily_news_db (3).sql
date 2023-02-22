-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 04:20 PM
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
(16, 'Gultacin ders qrafiki...', 'Dersde yoxdur. Amma ureyi bizimledir. Esq olsun!', '2022-12-27T15:03', 'Education', 'Active', '3c01cae200a044dad83334fe97831287.jpg', '.jpg', 2, '2023-02-11 15:04:22', '', ''),
(20, 'Nubar', 'Aytac Ezime Revan dersdedirler', '2022-12-20T19:05', 'Education', 'Active', 'eazii.jpg', '.jpg', 2, '2022-12-20 19:05:43', '', ''),
(23, 'Assume shape', 'Crazy music', '2023-02-11T17:49', 'Sport', 'Active', 'assume_shape.mp3', '.mp3', 2, '2023-02-11 15:48:05', '', '2023-02-11 15:48:28'),
(24, 'Marlin manson', 'Music', '2023-02-11T15:52', 'Sport', 'Active', 'Marilyn_Manson_-_Sweet_Dreams_(Are_Made_of_This).mp3', '.mp3', 2, '2023-02-11 15:52:52', '', ''),
(25, 'dsdasd', 'sadasdasd', '2023-02-11T15:53', 'Sport', 'Active', '222.jpg', '.jpg', 1, '2023-02-11 15:53:33', '', ''),
(26, 'Revan ucun adminlik', 'Revanin profili uzerinde is getdi. Tebrikler.', '2023-02-22T19:05', 'Education', 'Active', 'avatar_home.png', '.png', 1, '2023-02-22 19:05:29', '', ''),
(27, 'Azime yoldadir', 'Derslere mesuliyyetle yanawir ve geri qalmamaga utunluk verir. ', '2023-02-22T19:06', 'Education', 'Active', 'flower_girl.jpg', '.jpg', 1, '2023-02-22 19:06:36', '', ''),
(28, 'Senin profili', 'Sema ve qrup uzvleri super depeloper olacaqlar. Cunku mesuliyyetlidirler!', '2023-02-22T19:11', 'Technology', 'Active', 'im_designer.jpg', '.jpg', 2, '2023-02-22 19:11:21', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
