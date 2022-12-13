-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 05:14 PM
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
  `a_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_file`, `n_file_ext`, `n_creator_id`, `n_create_date`) VALUES
(1, 'php dərsi', 'Hello world', 's', 'Sport', 'Active', '1.jpg', '', 1, 's'),
(3, 'php dərsi2', 'Hello world', 's', 'Sport', 'Active', '1.jpg', '', 1, 's'),
(4, 'Revan', 'Bugun dersdedir ve diqqetle qulaq asir', '', 'Education', 'Active', '', '', 0, ''),
(5, 'Azima', 'Sema derse gele bilmedi, Aytac ise internete gore qowula bilmedi. vay vay vay :D', '2022-11-30T18:00', 'Education', 'Active', '', '', 0, '2022-11-30 19:32:13'),
(6, 'insert iwlemi bawarili', 'Bu dersde biz insert iwlemini yerine yetirdik! Tebrikler!', '2022-11-30T19:37', 'Sport', 'Active', '', '', 0, '2022-11-30 19:33:57'),
(7, '', '', '', '', '', '', '', 0, '2022-11-30 19:34:23'),
(8, '', '', '', '', '', '', '', 0, '2022-11-30 19:34:46'),
(9, 'dafsdfsd', 'fsdfsdfsdf', '2022-11-30T19:38', 'Sport', 'Active', '', '', 0, '2022-11-30 19:38:08'),
(10, 'asdasda', 'sdasdsad', '2022-11-30T19:40', 'Education', 'Active', '', '', 0, '2022-11-30 19:40:50'),
(11, 'Tester', 'Terminator', '2022-12-21T23:26', 'Finance', 'Active', '', '', 0, '2022-12-13 19:22:08'),
(12, 'Eminem', 'Lose yourself mahnisi ile babat taninir. bizde o mahni ile boyumuwuk.', '2022-12-13T19:54', 'Sport', 'Active', 'Eminem_-_Lose_Yourself1.mp3', '.mp3', 0, '2022-12-13 19:54:42'),
(13, 'dfsdf', 'dsfdsfsdfdsfsdf', '2022-12-29T19:58', 'Sport', 'Active', '', '', 0, '2022-12-13 19:58:22'),
(14, 'Hello', 'Helooooooo', '2022-12-13T19:58', 'Sport', 'Active', 'Screenshot_3.jpg', '.jpg', 0, '2022-12-13 19:58:56'),
(15, 'adasd', 'asdsadsadsad', '2022-12-13T20:06', 'Sport', 'Active', 'Scr_eensh_ot__5.jpg', '.jpg', 0, '2022-12-13 20:06:27'),
(16, 'sadsd s', 'ad sadsa dasd sa', '2022-12-27T20:07', 'Sport', 'Active', '3c01cae200a044dad83334fe97831287.jpg', '.jpg', 0, '2022-12-13 20:07:32'),
(17, 'sd adas', 'd sadas das  d', '2022-12-13T20:08', 'Sport', 'Active', '00d4ba25bc7ec4644632d47e3054d293.mp3', '.mp3', 0, '2022-12-13 20:09:11');

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
