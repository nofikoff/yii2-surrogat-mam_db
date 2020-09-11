-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2020 at 09:33 AM
-- Server version: 10.4.13-MariaDB-log
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surrogat`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL,
  `name_education` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name_education`) VALUES
(1, 'высшее'),
(2, 'среднее специальное'),
(3, 'средняя школа');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE IF NOT EXISTS `nationality` (
  `id` int(10) NOT NULL,
  `name_nationality` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `name_nationality`) VALUES
(1, 'русская'),
(2, 'украинка'),
(3, 'молдованка'),
(4, 'белорусска'),
(5, 'узбечка'),
(6, 'татарка'),
(7, 'киргизка'),
(8, 'казашка'),
(9, 'ghnfgyht7j67');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(10) NOT NULL,
  `name_profession` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `name_profession`) VALUES
(1, 'секретарь'),
(2, ' продавец-консультант'),
(3, 'преподаватель'),
(4, 'воспитатель в детсаде');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) NOT NULL,
  `name_hiden` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment_hidden` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `experience` int(1) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `bloodtype` int(2) DEFAULT NULL,
  `status_id` int(10) NOT NULL,
  `education_id` int(10) NOT NULL,
  `nationality_id` int(10) NOT NULL,
  `profession_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name_hiden`, `comment_hidden`, `experience`, `weight`, `height`, `birthday`, `bloodtype`, `status_id`, `education_id`, `nationality_id`, `profession_id`) VALUES
(5, 'Мадонна', 'певица ртом', 1, 60, 160, '2070-05-11', 3, 2, 2, 1, 2),
(7, 'ыыы', 'вввв', 0, 12, 22, '2000-08-12', 2, 3, 2, 3, 1),
(9, 'ка4а', '3к234к', 1, 11, 111, '2000-08-03', -1, 2, 3, 1, 2),
(10, 'wefdwe', 'wefwe', 1, 123, 44, '1990-08-23', -3, 4, 1, 2, 2),
(11, '2er23e', '2e23e', 1, 111, 11, '2000-08-12', 3, 3, 2, 1, 4),
(13, 'Андреано Челентано', 'Италия', 1, 100, 180, '1975-08-05', 3, 2, 1, 1, 2),
(14, 'Василиса Примудрая', 'Одесса телефон XXXXXXXXXXXXXX\r\nМыло', 1, 60, 165, '2000-08-05', -1, 4, 3, 3, 3),
(16, 'Дядя Джо', 'США', 0, 69, 150, '2080-08-11', 2, 4, 2, 2, 1),
(18, 'ууу', 'ууууу', 1, 12, 22, '2000-08-02', 3, 3, 2, 1, 2),
(20, 'Золушка', 'на деревню дедушке', 0, 50, 150, '2001-08-31', 4, 5, 2, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `name_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name_status`) VALUES
(1, 'в программе'),
(2, 'родила'),
(3, 'планирует вернуться'),
(4, 'свободна'),
(5, 'беременна');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `nationality_id` (`nationality_id`),
  ADD KEY `profession_id` (`profession_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `profiles_ibfk_2` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `profiles_ibfk_3` FOREIGN KEY (`nationality_id`) REFERENCES `nationality` (`id`),
  ADD CONSTRAINT `profiles_ibfk_4` FOREIGN KEY (`profession_id`) REFERENCES `profession` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
