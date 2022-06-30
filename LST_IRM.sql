-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 18, 2021 at 04:43 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LST IRM`
--
CREATE DATABASE IF NOT EXISTS `LST IRM` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `LST IRM`;

-- --------------------------------------------------------

--
-- Table structure for table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `CNE` varchar(10) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `CIN` varchar(8) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `DATE_DE_NAISSANCE` date DEFAULT NULL,
  `NOTE_BAC` decimal(10,2) DEFAULT NULL,
  `S1` decimal(10,2) DEFAULT NULL,
  `S2` decimal(10,2) DEFAULT NULL,
  `S3` decimal(10,2) DEFAULT NULL,
  `S4` decimal(10,2) DEFAULT NULL,
  `ATTESTATION_REUSSITE` tinytext,
  `RELEVE` tinytext,
  `BAC` tinytext,
  `CIN_PHOTO` tinytext,
  `ADRESSE` text,
  `profile_image` tinytext,
  `Email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `Etudiant`
--

TRUNCATE TABLE `Etudiant`;
--
-- Dumping data for table `Etudiant`
--

INSERT INTO `Etudiant` (`CNE`, `MOT_DE_PASSE`, `CIN`, `NOM`, `PRENOM`, `DATE_DE_NAISSANCE`, `NOTE_BAC`, `S1`, `S2`, `S3`, `S4`, `ATTESTATION_REUSSITE`, `RELEVE`, `BAC`, `CIN_PHOTO`, `ADRESSE`, `profile_image`, `Email`, `phone`) VALUES
('J138321547', '$2y$10$L34yGZOnD/yAfQ9Ac.hxKuUqi3txfR2kBu4KPDk6YIkwwovMc6/4G', 'AE280814', 'birouk', 'houda', '2000-11-24', '18.00', '12.00', '12.00', '12.00', '12.00', 'J138321547_birouk/attention_vis.jpg', 'J138321547_birouk/IMG_2597.jpg', 'J138321547_birouk/image.jpg', 'J138321547_birouk/image.jpg', 'Hay salam salé\r\n', 'J138321547_birouk/IMG_7931_Original-2.jpg', 'houda.birouk1@gmail.com', '0626525644');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`CNE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
