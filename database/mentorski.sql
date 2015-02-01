-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2015 at 12:02 PM
-- Server version: 5.6.19-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mentorski`
--

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE IF NOT EXISTS `predmeti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  `kod` varchar(16) NOT NULL,
  `program` text NOT NULL,
  `bodovi` int(11) NOT NULL,
  `sem_redovni` int(11) NOT NULL,
  `sem_izvanredni` int(11) NOT NULL,
  `izborni` enum('da','ne') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `kod` (`kod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `ime`, `kod`, `program`, `bodovi`, `sem_redovni`, `sem_izvanredni`, `izborni`, `created_at`, `updated_at`) VALUES
(1, 'Linearna algebra', 'SIT001', 'Program nije unesen', 5, 1, 1, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(2, 'Fizika', 'SIT002', 'Program nije unesen', 6, 1, 3, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(3, 'Osnove elektrotehnike', 'SIT003', 'Program nije unesen', 6, 1, 1, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(4, 'Digitalna i mikroprocesorska tehnika', 'SIT004', 'Program nije unesen', 7, 1, 2, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(5, 'Uporaba računala', 'SIT005', 'Program nije unesen', 4, 1, 1, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(6, 'Engleski jezik 1', 'SIT006', 'Program nije unesen', 2, 1, 1, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(7, 'Analiza 1', 'SIT007', 'Program nije unesen', 7, 2, 2, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(8, 'Osnove elektronike', 'SIT008', 'Program nije unesen', 6, 2, 2, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(9, 'Arhitektura i organizacija digitalnih računala', 'SIT009', 'Program nije unesen', 7, 2, 3, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(10, 'Uvod u programiranje', 'SIT010', 'Program nije unesen', 8, 2, 3, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(11, 'Engleski jezik 2', 'SIT011', 'Program nije unesen', 2, 2, 2, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(12, 'Primijenjena i numerička matematika', 'SIT012', 'Program nije unesen', 6, 3, 4, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(13, 'Programske metode i apstrakcije', 'SIT013', 'Program nije unesen', 8, 3, 4, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(14, 'Baze podataka', 'SIT014', 'Program nije unesen', 6, 3, 5, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(15, 'Informacijski sustavi', 'SIT015', 'Program nije unesen', 6, 3, 4, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(16, 'Tehnički Engleski jezik', 'SIT016', 'Program nije unesen', 4, 3, 5, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(17, 'Računalne mreže', 'SIT017', 'Program nije unesen', 5, 4, 5, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(18, 'Operacijski sustavi', 'SIT018', 'Program nije unesen', 5, 4, 5, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(19, 'Strukture podataka i algoritmi', 'SIT019', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(20, 'Objektno programiranje', 'SIT020', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(21, 'Baze podataka 2', 'SIT021', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(22, 'Mrežne usluge i programiranje', 'SIT022', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(23, 'Arhitektura osobnih računala', 'SIT023', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(24, 'Projektiranje i upravljanje računalnim mrežama', 'SIT024', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(25, 'Projektiranje informacijskih sustava', 'SIT025', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(26, 'Informatizacija poslovanja', 'SIT026', 'Program nije unesen', 5, 4, 6, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(27, 'Ekonomika i organizacija poduzeća', 'SIT027', 'Program nije unesen', 2, 5, 7, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(28, 'Analiza 2', 'SIT028', 'Program nije unesen', 6, 5, 7, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(29, 'Industrijska praksa', 'SIT029', 'Program nije unesen', 2, 5, 7, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(30, 'Arhitektura poslužiteljskih računala', 'SIT030', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(31, 'Sigurnost računala i podataka', 'SIT031', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(32, 'Programski alati na UNIX računalima', 'SIT032', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(33, 'Napredno Windows programiranje', 'SIT033', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(34, 'Objektno orijentirano modeliranje', 'SIT034', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(35, 'Programiranje u Javi', 'SIT035', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(36, 'Programiranje na Internetu', 'SIT036', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(37, 'Elektroničko poslovanje', 'SIT037', 'Program nije unesen', 5, 5, 7, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(38, 'Diskretna matematika', 'SIT038', 'Program nije unesen', 6, 6, 8, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(39, 'Upravljanje poslužiteljskim računalima', 'SIT039', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(40, 'Programiranje u C#', 'SIT040', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(41, 'Društveni informacijski sustavi', 'SIT041', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(42, 'Oblikovanje Web stranica', 'SIT042', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(43, 'Vođenje projekata i dokumentacija', 'SIT043', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(44, 'Informatizacija proizvodnje', 'SIT044', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(45, 'Analiza i obrada podataka', 'SIT045', 'Program nije unesen', 5, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(46, 'Njemački jezik', 'SSZP40', 'Program nije unesen', 4, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(47, 'Talijanski jezik', 'SSZP50', 'Program nije unesen', 4, 6, 8, 'da', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(48, 'Završni rad', 'SIT046', 'Program nije unesen', 8, 6, 8, 'ne', '2015-01-31 23:14:22', '0000-00-00 00:00:00'),
(56, 'Test', '214', 'asdadsa', 4, 1, 5, 'ne', '2015-02-01 09:51:50', '2015-02-01 09:51:50'),
(57, 'Pr', '123', 'asdasd', 2, 2, 2, 'ne', '2015-02-01 09:56:30', '2015-02-01 09:56:30'),
(59, 'Test12', '123232', 'dada', 6, 2, 4, 'da', '2015-02-01 09:57:08', '2015-02-01 09:57:08'),
(60, 'asdsddadada', '2323123', 'dfsf', 3, 1, 2, 'ne', '2015-02-01 09:57:48', '2015-02-01 09:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `upisi`
--

CREATE TABLE IF NOT EXISTS `upisi` (
  `student_id` int(11) NOT NULL,
  `predmet_id` int(11) NOT NULL,
  `status` varchar(64) NOT NULL,
  KEY `student_id` (`student_id`),
  KEY `predmet_id` (`predmet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upisi`
--

INSERT INTO `upisi` (`student_id`, `predmet_id`, `status`) VALUES
(2, 17, 'enrolled'),
(2, 38, 'enrolled'),
(2, 45, 'enrolled'),
(3, 13, ''),
(3, 19, ''),
(3, 48, 'enrolled'),
(3, 24, 'enrolled'),
(15, 3, 'enrolled'),
(15, 10, 'enrolled'),
(15, 11, 'enrolled'),
(2, 6, 'passed'),
(2, 5, 'passed'),
(2, 4, 'passed'),
(2, 8, 'enrolled'),
(2, 12, 'enrolled'),
(3, 10, 'enrolled'),
(3, 36, 'enrolled'),
(21, 1, 'passed'),
(21, 2, 'passed'),
(21, 12, 'enrolled'),
(21, 9, 'passed'),
(21, 18, 'enrolled'),
(21, 13, 'enrolled'),
(21, 32, 'enrolled'),
(21, 38, 'enrolled'),
(21, 42, 'passed'),
(21, 6, 'enrolled'),
(21, 10, 'enrolled'),
(23, 2, 'passed'),
(23, 2, 'passed'),
(1, 1, 'enrolled'),
(1, 2, 'enrolled'),
(1, 3, 'enrolled'),
(1, 4, 'enrolled'),
(1, 6, 'enrolled'),
(1, 6, 'enrolled'),
(1, 7, 'enrolled'),
(1, 1, 'enrolled'),
(1, 2, 'enrolled'),
(1, 2, 'enrolled'),
(1, 3, 'enrolled'),
(1, 4, 'enrolled'),
(1, 1, 'enrolled'),
(1, 1, 'enrolled'),
(1, 1, 'enrolled'),
(1, 2, 'enrolled'),
(1, 2, 'enrolled'),
(1, 1, 'enrolled'),
(1, 1, 'enrolled'),
(1, 1, 'enrolled'),
(1, 1, 'enrolled'),
(2, 11, 'enrolled'),
(2, 30, 'enrolled'),
(4, 1, 'enrolled'),
(4, 2, 'enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` enum('mentor','student') NOT NULL,
  `status` enum('none','redovni','izvanredni') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `status`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'roncevic@oss.unist.hr', '$2y$10$1SHubXN9y9sMnnLLuRPEbOyHh2xzeCpDBM8ioJgIGLuohOivnh7q6', 'mentor', 'none', '2015-02-01 10:02:04', '0000-00-00 00:00:00', 'z92ik9M87nArU8QxfUw7xQtEqBhIS5o2zhgAjDMQxEs9zZoFEJK78cWkRwGw'),
(2, 'red@oss.hr', '$2y$10$1SHubXN9y9sMnnLLuRPEbOyHh2xzeCpDBM8ioJgIGLuohOivnh7q6', 'student', 'redovni', '2015-02-01 10:02:22', '0000-00-00 00:00:00', 'p5vG3MvgkmkVOP94RZWpKEOLAoOTsqdhajUZByMNm0PwNes4xtvjOhE9duRq'),
(3, 'izv@oss.hr', '$2y$10$1SHubXN9y9sMnnLLuRPEbOyHh2xzeCpDBM8ioJgIGLuohOivnh7q6', 'student', 'izvanredni', '2015-02-01 09:08:44', '0000-00-00 00:00:00', 'JZOtnGtRjX0qIiowPtFp4PyNWhfdDM6FLGcwei2hOitqgo8YtDXgAz38Mwag'),
(4, 'vfranic@gmail.com', '$2y$10$dkzm71kpJo0h93lhJ5czeunm12OFPXjLE5b8jdFRkW/yWQ7b3vFqK', 'student', 'redovni', '2015-01-24 14:43:47', '2015-01-24 14:43:47', ''),
(15, 'vice@net.hr', '$2y$10$iRkcD7560gKKmgLipVPs.OGi2eCI.IGuNiBF605.FitLRSxHPT5rW', 'student', 'redovni', '2015-02-01 10:02:12', '2015-01-26 09:30:26', 'hvAx7TCsHct0rq0B9JOveVv4IyH5hDH4qnZwF4ViXjuHdfKPqAzU2KtJBLaB'),
(16, 'vickofranic@hotmail.com', '$2y$10$0m2CrUfs3RZT.s3o8YK45eNYi2TJL1t4YPXS94XNLtY1TsSiioupK', 'student', 'izvanredni', '2015-01-26 10:22:24', '2015-01-26 10:22:24', ''),
(17, 'test@net.hr', '$2y$10$CJ7hsENtngBEE1Nqh4tKpektzoefJ.92YxFloLEIaPMFUr8XttuCC', 'student', 'izvanredni', '2015-01-26 13:27:04', '2015-01-26 12:55:36', 'beaQyR6kPfemlB52b5UuZRkr0RkG1elHKTRxMuEb9W842y5nfCOa581dl566'),
(18, 'vice@gmail.com', '$2y$10$Bo4f1gvrf1BUX6HU4W2deOly.MtUsgQf9ad1QEVggI0R2yKlHkZeC', 'student', 'izvanredni', '2015-01-26 18:52:23', '2015-01-26 18:52:23', ''),
(19, 'test@adad.asd', '$2y$10$GogDrx7VNj/v6R6M7/.19.Pwu6gtgLConptNTqlXFIUp/OAaCYFVK', 'student', 'redovni', '2015-01-26 18:57:22', '2015-01-26 18:57:22', ''),
(21, 'anavi@mail.com', '$2y$10$UUQV51S2qZPVFGER7hgKQeIPMcL3QyA7jLtpjVh/ZFfaQTqJQkply', 'student', 'izvanredni', '2015-01-29 08:54:04', '2015-01-28 17:21:05', 'hOYBnTietwYoFT1eRh5QPOvTvcpxMj6ShvcCxwalWLeL4IXOHFfoxkaNC4QZ'),
(22, 'test@net.org', '$2y$10$illAvrDMHXUhaxzAikY.luSU5CGp7z4rzZsLie1R4J1Mo6qlH349m', 'student', 'redovni', '2015-01-29 09:03:30', '2015-01-29 09:03:30', ''),
(23, 'test@net.crf', '$2y$10$e7A02d3LfiIzPJdBEDzvheYJ8AtI7GgJRpvKUJJsA3NRNsuuNlqXu', 'student', 'izvanredni', '2015-01-29 09:16:55', '2015-01-29 09:16:24', 'i11v1cRyHAlnCDrjhTIdoQu4hjiXAOhNIFkH8TRAI7UO8Nj6QIybLtupBnAq');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `upisi`
--
ALTER TABLE `upisi`
  ADD CONSTRAINT `upisi_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `upisi_ibfk_2` FOREIGN KEY (`predmet_id`) REFERENCES `predmeti` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
