-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2023 at 08:51 AM
-- Server version: 5.7.43-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eurofilm_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `name` varchar(100) NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`name`, `content`) VALUES
('why_euro_film', '<p>We are a professional Manufacturer for Film including but not limited to BOPP Biaxially-Oriented (BO) Polypropylene (PP)., CPP Cast Polypropylene (PP) and other related products in an effort to bring the new packaging options for both local and international markets.<\\\\p>\r\n<p>\r\nBOPP stands for Biaxially-oriented refers to the production process that stretches the film over two directions, making it stronger and much more transparent.<\\\\p>'),
('bruckner', 'Having Two (2) Production Line of BOPP film –Bruckner Brand Name.\r\n<br/>\r\nDesigned Capacity : 2,500 tons per month per line.\r\n<br/>\r\nWidth: 8 meters wide.\r\n<br/>\r\nSplitting Machine: 8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
