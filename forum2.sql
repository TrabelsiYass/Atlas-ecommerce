-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2023 at 10:54 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum2`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `islike` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `Commenter` VARCHAr(11) NOT NULL,
  `Desire` VARCHAR(11) NOT NULL,
  `Commentaire` VARCHAR(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `author_id`, `islike`) VALUES
(37, 6, 1),
(37, 7, 1),
(38, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `subject`, `message`, `author_id`, `author_name`, `date`, `photo`, `price`, `location`) VALUES
(38, 'Mercedes VAN', '150.000 KM<br />\r\nCommerciale<br />\r\nbon état', 5, 'Aymen', '2023-02-12 10:14:49', 'pngegg (1).png', '18500.00', 'Ben Arous'),
(36, 'Bike', 'good', 7, 'rajeh', '2023-02-11 15:51:42', 'download.jpg', '70.00', 'Ben Arous'),
(37, 'Mercedes', 'bon état <br />\r\n200.000 km<br />\r\n4 cylindres 1.6<br />\r\nétat d\'origine', 5, 'Aymen', '2023-02-12 10:10:49', 'pngegg.png', '25000.00', 'Ben Arous');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`reply_id`),
  KEY `post_id` (`post_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `message`, `post_id`, `author_id`, `author_name`, `date`) VALUES
(1, 'négociable ??', 36, 7, 'rajeh', '2023-02-11 16:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `email`, `password`, `picture`, `phone_number`) VALUES
(1, 'aymen', 'gh', 'aymen@g.com', '123456aa', '63e4e8cfbeff18.93202384.jpg', '20962443'),
(2, 'Aymen', 'gh', 'aymeeen.gh@gmail.com', '$2y$10$9NcMF1D5vnjwijrNoXdQEOFQ/D0HgiKhvOPCq1LMtJiIOBImcNABK', 'kisspng-visual-studio-code-microsoft-visual-studio-source-notice-5ab888a4b34712.2893155915220430447343.png', '20962443'),
(3, 'Aymen', 'gh', 'aymeeeh@gmail.com', '$2y$10$iMOM.u0FVs34zTm46Kw7QeVSM2HW122i9B2NyKFlr1V/8t3oxcFZG', 'kisspng-visual-studio-code-microsoft-visual-studio-source-notice-5ab888a4b34712.2893155915220430447343.png', '20962443'),
(4, 'Aymen', 'gh', 'aymeeen.gh11@gmail.com', '123456aa', 'aymen.png', '20962443'),
(5, 'Aymen', 'gh', 'aymeeen11@gmail.com', '123456aa', 'aymen.png', '20962443'),
(6, 'Aymen', 'gh', 'aym@gmail.com', '123456aa', 'aymen.png', '20962443'),
(7, 'rajeh', 'gharbi', 'rj@g.com', '123456aa', 'kisspng-wampserver-web-server-computer-servers-xampp-file-wampserver-logo-svg-wikimedia-commons-5b972ac9643d63.3693898615366335454106.png', '20962443');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
