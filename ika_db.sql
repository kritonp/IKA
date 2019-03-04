-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 09:57 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ika_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `asfalismenoi`
--

CREATE TABLE `asfalismenoi` (
  `amka` int(20) NOT NULL,
  `onoma` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `epwnumo` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `onoma_patros` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `birth_date` date NOT NULL,
  `dieuthunsh` text CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `password` text NOT NULL,
  `polh_katoikias` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `arithmos_thlefwnou` int(11) NOT NULL,
  `email` text NOT NULL,
  `tekno` varchar(50) CHARACTER SET greek COLLATE greek_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asfalismenoi`
--

INSERT INTO `asfalismenoi` (`amka`, `onoma`, `epwnumo`, `onoma_patros`, `birth_date`, `dieuthunsh`, `password`, `polh_katoikias`, `arithmos_thlefwnou`, `email`, `tekno`) VALUES
(33333333, 'Ιωάννα', 'Σταματέλου', 'Γιώργος', '1997-12-24', 'Ηούς 9', '12345', 'Καλαμάτα', 2102030405, 'ioanna@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ergodoths`
--

CREATE TABLE `ergodoths` (
  `amka` int(20) NOT NULL,
  `onoma` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `epwnumo` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `onoma_patros` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `birth_date` date NOT NULL,
  `dieuthunsh` text CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `password` text NOT NULL,
  `polh_katoikias` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `arithmos_thlefwnou` int(11) NOT NULL,
  `email` text NOT NULL,
  `amka_ergazomenou` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ergodoths`
--

INSERT INTO `ergodoths` (`amka`, `onoma`, `epwnumo`, `onoma_patros`, `birth_date`, `dieuthunsh`, `password`, `polh_katoikias`, `arithmos_thlefwnou`, `email`, `amka_ergazomenou`) VALUES
(22222222, 'Σωτήρης', 'Σωτηρίου', 'Θέμης', '1974-12-25', 'Κύπρου 12', '12345', 'Κιλκίς', 2102345675, 'sotiris@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retired`
--

CREATE TABLE `retired` (
  `amka` int(20) NOT NULL,
  `onoma` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `epwnumo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `onoma_patros` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birth_date` date NOT NULL,
  `dieuthunsh` text CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `password` text NOT NULL,
  `polh_katoikias` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `arithmos_thlefwnou` int(11) NOT NULL,
  `email` text NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retired`
--

INSERT INTO `retired` (`amka`, `onoma`, `epwnumo`, `onoma_patros`, `birth_date`, `dieuthunsh`, `password`, `polh_katoikias`, `arithmos_thlefwnou`, `email`, `amount`) VALUES
(11111111, 'Χαράλαμπος', 'Γιαννόπουλος', 'Βασίλης', '1957-11-25', 'Θεσσαλονίκης 33', '12345', 'Πετράλωνα', 2101234567, 'xaris@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asfalismenoi`
--
ALTER TABLE `asfalismenoi`
  ADD PRIMARY KEY (`amka`);

--
-- Indexes for table `ergodoths`
--
ALTER TABLE `ergodoths`
  ADD PRIMARY KEY (`amka`);

--
-- Indexes for table `retired`
--
ALTER TABLE `retired`
  ADD PRIMARY KEY (`amka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
