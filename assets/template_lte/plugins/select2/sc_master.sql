-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `github_sspd`
--

-- --------------------------------------------------------

--
-- Table structure for table `sc_master`
--

CREATE TABLE `sc_master` (
  `Id` bigint(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Stat` varchar(100) DEFAULT NULL,
  `OtherString` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_master`
--

INSERT INTO `sc_master` (`Id`, `Title`, `Description`, `Stat`, `OtherString`) VALUES
(1, 'Ia', 'Juru Muda', 'gol', NULL),
(2, 'Ib', 'Juru Muda Tk. I', 'gol', NULL),
(3, 'Ic', 'Juru', 'gol', NULL),
(4, 'Id', 'Juru Tk. I', 'gol', NULL),
(5, 'IIa', 'Pengatur Muda', 'gol', NULL),
(6, 'IIb', 'Pengatur Muda Tk. I', 'gol', NULL),
(7, 'IIc', 'Pengatur', 'gol', NULL),
(8, 'IId', 'Pengatur  Tk. I', 'gol', NULL),
(9, 'IIIa', 'Penata Muda', 'gol', NULL),
(10, 'IIIb', 'Penata Muda Tk. I', 'gol', NULL),
(11, 'IIIc', 'Penata', 'gol', NULL),
(12, 'IIId', 'Penata Tk. I', 'gol', NULL),
(13, 'IVa', 'Pembina', 'gol', NULL),
(14, 'IVb', 'Pembina Tk. I', 'gol', NULL),
(15, 'IVc', 'Pembina Utama Muda', 'gol', NULL),
(16, 'IVd', 'Pembina Utama Madya', 'gol', NULL),
(17, 'IVe', 'Pembina Utama', 'gol', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sc_master`
--
ALTER TABLE `sc_master`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sc_master`
--
ALTER TABLE `sc_master`
  MODIFY `Id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
