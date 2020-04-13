-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 06:46 PM
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
-- Database: `sim_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(15) NOT NULL,
  `id_jenis` varchar(15) DEFAULT NULL,
  `id_pejabat` int(20) DEFAULT NULL,
  `nama_arsip` varchar(50) DEFAULT NULL,
  `file_arsip` varchar(50) DEFAULT NULL,
  `jumlah` varchar(20) DEFAULT NULL,
  `id_satuan` varchar(20) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `ket_isi` text,
  `tanggal` date DEFAULT NULL,
  `permision` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `id_jenis`, `id_pejabat`, `nama_arsip`, `file_arsip`, `jumlah`, `id_satuan`, `lokasi`, `ket_isi`, `tanggal`, `permision`) VALUES
(1, '8', 1, 'Data Pembelian Perlengkapan', 'arsip_1576121601.pdf', '1', '1', '2', 'Yes', '2020-02-01', 'admin.user.staff'),
(2, '2', 1, 'Tes', 'arsip_1580576494.jpg', '12', '6', '2', 'yes', '2020-02-02', 'admin.user'),
(3, '2', 1, 'testing', 'arsip_1580583845.jpg', '12', '5', '2', 'berhasil', '2020-02-02', 'admin.user'),
(4, '2', 1, 'testing', 'arsip_1580583888.jpg', '12', '5', '2', 'berhasil', '2020-02-02', 'admin.user');

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id_histori` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `url` varchar(50) NOT NULL,
  `aktivitasi` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `browser` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `id_user`, `url`, `aktivitasi`, `tanggal`, `ip_address`, `browser`) VALUES
(1, 0, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(2, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(3, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(4, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(5, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(6, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(7, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(8, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(9, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(10, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(11, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(12, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(13, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(14, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(15, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(16, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(17, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(18, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(19, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(20, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(21, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(22, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(23, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(24, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(25, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(26, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(27, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(28, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(29, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(30, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(31, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(32, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(33, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(34, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(35, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(36, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(37, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(38, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(39, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(40, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(41, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(42, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(43, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(44, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(45, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(46, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(47, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(48, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(49, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(50, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(51, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(52, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(53, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(54, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(55, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(56, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(57, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(58, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(59, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(60, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(61, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(62, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(63, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(64, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(65, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(66, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(67, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(68, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(69, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 18:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(70, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(71, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(72, 1, '/arsip/Jenis_surat', 'Menambahkan jenis surat.', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(73, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(74, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(75, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(76, 1, '/arsip/Jenis_surat', 'Menambahkan jenis surat.', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(77, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(78, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(79, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(80, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(81, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(82, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(83, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(84, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(85, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(86, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(87, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(88, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(89, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(90, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(91, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(92, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(93, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(94, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(95, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(96, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(97, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(98, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(99, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(100, 1, '/arsip/jenis_arsip/hapus', 'Hapus arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(101, 1, '/arsip/jenis_arsip/hapus', 'Hapus arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(102, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(103, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(104, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(105, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(106, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(107, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(108, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(109, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(110, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 19:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(111, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(112, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(113, 1, '/arsip/jenis_arsip/edit_data', 'Edit data arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(114, 1, '/arsip/jenis_arsip/edit_data', 'Edit data arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(115, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(116, 1, '/arsip/jenis_arsip/edit_data', 'Edit data arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(117, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(118, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(119, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(120, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(121, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(122, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(123, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(124, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(125, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(126, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(127, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(128, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(129, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(130, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(131, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(132, 1, '/arsip/lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(133, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(134, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(135, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 20:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(136, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(137, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(138, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(139, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(140, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(141, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(142, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(143, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(144, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(145, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(146, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(147, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(148, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(149, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(150, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(151, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(152, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(153, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(154, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(155, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(156, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(157, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(158, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(159, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(160, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(161, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(162, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(163, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(164, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(165, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(166, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(167, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(168, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(169, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(170, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(171, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(172, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(173, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(174, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(175, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(176, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(177, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(178, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(179, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(180, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(181, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(182, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(183, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(184, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(185, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(186, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(187, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(188, 1, '/arsip/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(189, 1, '/arsip/arsip/download_file_arip/1', 'Mendownload file arsip', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(190, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(191, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(192, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(193, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(194, 1, '/arsip/login', 'Akses modul login .', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(195, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(196, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(197, 1, '/arsip/Tsuratmasuk/tambah', 'tambah data surat masuk.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(198, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(199, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-01 21:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(200, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(201, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(202, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(203, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(204, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(205, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(206, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(207, 1, '/arsip/jenis_arsip/hapus', 'Hapus arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(208, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(209, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(210, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(211, 1, '/arsip/arsip', 'Akses Arsip', '20-02-01 22:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(212, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(213, 1, '/arsip/arsip/edit/2', 'Edit arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(214, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(215, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(216, 1, '/arsip/Jenis_surat', 'Menambahkan jenis surat.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(217, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(218, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(219, 1, '/arsip/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(220, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(221, 1, '/arsip/arsip/edit/2', 'Edit arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(222, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(223, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(224, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(225, 1, '/arsip/Jenis_surat', 'Menambahkan jenis surat.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(226, 1, '/arsip/jenis_surat', 'Menambahkan jenis surat.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(227, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(228, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(229, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(230, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(231, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(232, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(233, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(234, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(235, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(236, 1, '/arsip/Tsuratmasuk/tambah', 'tambah data surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(237, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(238, 1, '/arsip/Jenis_surat', 'Menambahkan jenis surat.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(239, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(240, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(241, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(242, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(243, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(244, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(245, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 00:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(246, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(247, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(248, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(249, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36');
INSERT INTO `histori` (`id_histori`, `id_user`, `url`, `aktivitasi`, `tanggal`, `ip_address`, `browser`) VALUES
(250, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(251, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(252, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(253, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(254, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(255, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(256, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(257, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(258, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(259, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(260, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(261, 1, '/arsip/Tsuratmasuk/tambah', 'tambah data surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(262, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(263, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(264, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(265, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(266, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(267, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(268, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(269, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(270, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(271, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(272, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 01:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(273, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(274, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(275, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(276, 1, '/arsip/arsip/tambah_data', 'Menambahkan arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(277, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(278, 1, '/arsip/tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(279, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(280, 1, '/arsip/tsuratmasuk/hapus', 'Menghapus surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(281, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(282, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(283, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(284, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(285, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(286, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(287, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(288, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(289, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(290, 1, '/arsip/M_satuan/tambah', 'menambahkan satuan arsip.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(291, 1, '/arsip/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(292, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(293, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(294, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(295, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(296, 1, '/arsip/arsip/edit/4', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(297, 1, '/arsip/arsip/edit/4', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(298, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(299, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(300, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(301, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(302, 1, '/arsip/arsip/edit/4', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(303, 1, '/arsip/arsip/edit/1', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(304, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(305, 1, '/arsip/arsip/edit/4', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(306, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(307, 1, '/arsip/arsip/edit/2', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(308, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(309, 1, '/arsip/arsip/edit/4', 'Edit arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(310, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(311, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(312, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(313, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(314, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(315, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(316, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(317, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(318, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(319, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(320, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(321, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(322, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(323, 1, '/arsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(324, 1, '/arsip/Tsuratmasuk', 'Akses surat masuk.', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(325, 1, '/arsip/arsip', 'Akses Arsip', '20-02-02 02:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(326, 1, '/arsip/M_satuan', 'Akses data satuan.', '20-02-02 03:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(327, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 03:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(328, 1, '/arsip/Lokasi', 'Akses data lokasi.', '20-02-02 03:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(329, 1, '/arsip/dasboard?login=true', 'Akses dasboard web', '20-02-02 03:0:nd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(330, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-02 11:0:nd', '180.249.207.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(331, 1, '/arsip', 'Akses Arsip', '20-03-02 11:0:nd', '180.249.207.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(332, 1, '/login', 'Akses modul login .', '20-03-02 11:0:nd', '180.249.207.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(333, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-02 11:0:nd', '180.249.207.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(334, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 10:0:rd', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(335, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(336, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(337, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(338, 1, '/Lokasi', 'Akses data lokasi.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(339, 1, '/M_satuan', 'Akses data satuan.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(340, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(341, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(342, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(343, 1, '/login', 'Akses modul login .', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(344, 1, '/login/tambah', 'Menambahkan akses login', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(345, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(346, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(347, 1, '/arsip/download_file_arip/1', 'Mendownload file arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(348, 1, '/M_satuan', 'Akses data satuan.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(349, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(350, 1, '/jenis_surat', 'Menambahkan jenis surat.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(351, 1, '/jenis_surat/edit/5', 'Edit jenis surat.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(352, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(353, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(354, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(355, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(356, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(357, 1, '/Lokasi', 'Akses data lokasi.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(358, 1, '/lokasi', 'Akses data lokasi.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(359, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(360, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(361, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(362, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(363, 1, '/M_satuan', 'Akses data satuan.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(364, 1, '/Lokasi', 'Akses data lokasi.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(365, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(366, 1, '/M_satuan', 'Akses data satuan.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(367, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(368, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(369, 1, '/login', 'Akses modul login .', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(370, 1, '/login/tambah', 'Menambahkan akses login', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(371, 1, '/login/tambah_data', 'Menambahkan akses login', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(372, 1, '/login', 'Akses modul login .', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(373, 1, '/login/tambah', 'Menambahkan akses login', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(374, 1, '/login/tambah_data', 'Menambahkan akses login', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(375, 1, '/login', 'Akses modul login .', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(376, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(377, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(378, 1, '/arsip', 'Akses Arsip', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(379, 1, '/Lokasi', 'Akses data lokasi.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(380, 1, '/M_satuan', 'Akses data satuan.', '20-03-03 13:0:rd', '180.245.78.82', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0'),
(381, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(382, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(383, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(384, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(385, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(386, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(387, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(388, 1, '/Lokasi', 'Akses data lokasi.', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(389, 1, '/login', 'Akses modul login .', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(390, 1, '/M_satuan', 'Akses data satuan.', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(391, 1, '/M_satuan/tambah', 'menambahkan satuan arsip.', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(392, 1, '/M_satuan/tambah', 'menambahkan satuan arsip.', '20-03-08 15:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(393, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(394, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(395, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(396, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(397, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(398, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(399, 1, '/Lokasi', 'Akses data lokasi.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(400, 1, '/M_satuan', 'Akses data satuan.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(401, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(402, 1, '/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(403, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(404, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(405, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(406, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(407, 1, '/login', 'Akses modul login .', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(408, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (Linux; Android 9; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(409, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(410, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(411, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(412, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(413, 1, '/login', 'Akses modul login .', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(414, 1, '/login/tambah', 'Menambahkan akses login', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(415, 1, '/login', 'Akses modul login .', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(416, 1, '/arsip', 'Akses Arsip', '20-03-11 05:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(417, 1, '/arsip', 'Akses Arsip', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(418, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(419, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(420, 1, '/jenis_surat', 'Menambahkan jenis surat.', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(421, 1, '/jenis_surat', 'Menambahkan jenis surat.', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(422, 1, '/arsip', 'Akses Arsip', '20-03-11 06:0:th', '114.122.72.187', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(423, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-11 08:0:th', '103.113.3.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(424, 1, '/Lokasi', 'Akses data lokasi.', '20-03-11 08:0:th', '103.113.3.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(425, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(426, 1, '/arsip', 'Akses Arsip', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(427, 1, '/arsip', 'Akses Arsip', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(428, 1, '/Lokasi', 'Akses data lokasi.', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(429, 1, '/arsip', 'Akses Arsip', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(430, 1, '/arsip/edit/1', 'Edit arsip', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(431, 1, '/Lokasi', 'Akses data lokasi.', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(432, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(433, 1, '/login', 'Akses modul login .', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(434, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(435, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(436, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 09:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(437, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36'),
(438, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36'),
(439, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-16 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36'),
(440, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-16 10:0:th', '110.137.177.176', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'),
(441, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(442, 1, '/arsip', 'Akses Arsip', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(443, 1, '/arsip/edit/1', 'Edit arsip', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(444, 1, '/arsip?jenis=8', 'Akses Arsip', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(445, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(446, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(447, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(448, 1, '/M_satuan', 'Akses data satuan.', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(449, 1, '/arsip', 'Akses Arsip', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(450, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(451, 1, '/arsip', 'Akses Arsip', '20-03-18 18:0:th', '114.142.168.24', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(452, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(453, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(454, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(455, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(456, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(457, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(458, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-18 18:0:th', '114.142.169.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(459, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Mobile Safari/537.36'),
(460, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(461, 1, '/arsip', 'Akses Arsip', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(462, 1, '/arsip/edit/4', 'Edit arsip', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(463, 1, '/arsip/edit/4', 'Edit arsip', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(464, 1, '/arsip/edit/1', 'Edit arsip', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(465, 1, '/Lokasi', 'Akses data lokasi.', '20-03-22 19:0:nd', '180.251.231.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(466, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(467, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(468, 1, '/login', 'Akses modul login .', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(469, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(470, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(471, 1, '/arsip/download_file_arip/1', 'Mendownload file arsip', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Mobile Safari/537.36'),
(472, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(473, 1, '/arsip/download_file_arip/1', 'Mendownload file arsip', '20-03-22 19:0:nd', '114.124.137.70', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Mobile Safari/537.36'),
(474, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-26 12:0:th', '114.142.169.6', 'Mozilla/5.0 (Linux; Android 8.1.0; vivo 1724) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(475, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(476, 1, '/arsip', 'Akses Arsip', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(477, 1, '/Lokasi', 'Akses data lokasi.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(478, 1, '/M_satuan', 'Akses data satuan.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(479, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(480, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(481, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(482, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(483, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-26 19:0:th', '180.246.210.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(484, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 11:0:th', '114.122.75.165', 'Mozilla/5.0 (Linux; Android 10; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(485, 1, '/arsip', 'Akses Arsip', '20-03-28 11:0:th', '114.122.75.165', 'Mozilla/5.0 (Linux; Android 10; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(486, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 11:0:th', '114.122.75.165', 'Mozilla/5.0 (Linux; Android 10; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(487, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 11:0:th', '114.122.75.165', 'Mozilla/5.0 (Linux; Android 10; RMX1903) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36'),
(488, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(489, 1, '/arsip', 'Akses Arsip', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(490, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(491, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(492, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(493, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(494, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(495, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(496, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-28 17:0:th', '114.5.254.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(497, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-28 21:0:th', '114.142.169.21', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(498, 1, '/jenis_arsip/tambah', 'Menambahkan jenis arsip', '20-03-28 21:0:th', '114.142.169.21', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/537.36'),
(499, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(500, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(501, 1, '/login', 'Akses modul login .', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(502, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(503, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36');
INSERT INTO `histori` (`id_histori`, `id_user`, `url`, `aktivitasi`, `tanggal`, `ip_address`, `browser`) VALUES
(504, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(505, 1, '/login', 'Akses modul login .', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(506, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(507, 1, '/login', 'Akses modul login .', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(508, 1, '/login', 'Akses modul login .', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(509, 1, '/login/tambah', 'Menambahkan akses login', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(510, 1, '/login/tambah_data', 'Menambahkan akses login', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(511, 1, '/login/tambah_data', 'Menambahkan akses login', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(512, 1, '/login/tambah_data', 'Menambahkan akses login', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(513, 1, '/login', 'Akses modul login .', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(514, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-29 21:0:th', '114.122.100.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(515, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-30 16:0:th', '114.122.107.7', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36'),
(516, 1, '/arsip', 'Akses Arsip', '20-03-30 16:0:th', '114.122.107.7', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36'),
(517, 1, '/dasboard?login=true', 'Akses dasboard web', '20-03-30 16:0:th', '114.122.107.7', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36'),
(518, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-30 16:0:th', '114.122.107.7', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36'),
(519, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-03-30 16:0:th', '114.122.107.7', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36'),
(520, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(521, 1, '/Lokasi', 'Akses data lokasi.', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(522, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(523, 1, '/arsip/download_file_arip/1', 'Mendownload file arsip', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(524, 1, '/arsip/download_file_arip/1', 'Mendownload file arsip', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(525, 1, '/arsip/pengajuan_arsip/edit/1', 'Akses pengajuan arsip.', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(526, 1, '/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-06 09:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(527, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-04-06 10:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(528, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 10:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'),
(529, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(530, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(531, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(532, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(533, 1, '/login', 'Akses modul login .', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(534, 1, '/login/tambah', 'Menambahkan akses login', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(535, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(536, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(537, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-06 12:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(538, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(539, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(540, 1, '/login/tambah', 'Menambahkan akses login', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(541, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(542, 1, '/dasboard?logout', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(543, 1, '/dasboard?logout', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(544, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(545, 1, '/login/tambah', 'Menambahkan akses login', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(546, 1, '/login', 'Akses modul login .', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(547, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(548, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(549, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-06 13:0:th', '114.122.200.106', 'Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36'),
(550, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(551, 1, '/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(552, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(553, 1, '/arsip', 'Akses Arsip', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(554, 1, '/arsip/edit/4', 'Edit arsip', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(555, 1, '/M_satuan', 'Akses data satuan.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(556, 1, '/m_satuan', 'Akses data satuan.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(557, 1, '/login', 'Akses modul login .', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(558, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(559, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(560, 1, '/Lokasi', 'Akses data lokasi.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(561, 1, '/lokasi', 'Akses data lokasi.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(562, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(563, 1, '/Lokasi', 'Akses data lokasi.', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(564, 1, '/dasboard?login=true', 'Akses dasboard web', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(565, 1, '/login', 'Akses modul login .', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(566, 1, '/login/tambah', 'Menambahkan akses login', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(567, 1, '/login/tambah_data', 'Menambahkan akses login', '20-04-13 13:0:th', '103.113.3.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(568, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(569, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(570, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(571, 1, '/sim_surat/login/tambah_data', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(572, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(573, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(574, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(575, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(576, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(577, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(578, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(579, 1, '/sim_surat/login/tambah', 'Menambahkan akses login', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(580, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(581, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(582, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(583, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(584, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(585, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(586, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(587, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(588, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(589, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(590, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(591, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(592, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(593, 1, '/sim_surat/Jenis_surat', 'Menambahkan jenis surat.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(594, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(595, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(596, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(597, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(598, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 14:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(599, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 15:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(600, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 15:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(601, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 15:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(602, 1, '/sim_surat/Jenis_surat', 'Menambahkan jenis surat.', '20-04-13 15:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(603, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 15:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(604, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(605, 1, '/sim_surat/Jenis_surat', 'Menambahkan jenis surat.', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(606, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(607, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(608, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(609, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(610, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 16:0:th', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(611, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 21:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(612, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(613, 1, '/sim_surat/arsip/cetak/4', 'Cetak data arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(614, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(615, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(616, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(617, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(618, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(619, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(620, 1, '/sim_surat/arsip/edit/4', 'Edit arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(621, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(622, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(623, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(624, 1, '/sim_surat/arsip/edit/4', 'Edit arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(625, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(626, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(627, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(628, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(629, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(630, 1, '/sim_surat/arsip/edit/4', 'Edit arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(631, 1, '/sim_surat/Arsip/insert_pengajuan', 'Menambahkan pegajuan arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(632, 1, '/sim_surat/Arsip/insert_pengajuan', 'Menambahkan pegajuan arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(633, 1, '/sim_surat/Arsip/insert_pengajuan', 'Menambahkan pegajuan arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(634, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(635, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(636, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(637, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(638, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(639, 1, '/sim_surat/arsip', 'Akses Arsip', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(640, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(641, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(642, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(643, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(644, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(645, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(646, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(647, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(648, 1, '/sim_surat/Jenis_surat', 'Menambahkan jenis surat.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(649, 1, '/sim_surat/jenis_surat/edit/1', 'Edit jenis surat.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(650, 1, '/sim_surat/jenis_surat', 'Menambahkan jenis surat.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(651, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(652, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(653, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(654, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(655, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(656, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(657, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(658, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(659, 1, '/sim_surat/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(660, 1, '/sim_surat/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(661, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(662, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(663, 1, '/sim_surat/dasboard?login=true', 'Akses dasboard web', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(664, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(665, 1, '/sim_surat/M_satuan', 'Akses data satuan.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(666, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(667, 1, '/sim_surat/Jenis_surat', 'Menambahkan jenis surat.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(668, 1, '/sim_surat/login', 'Akses modul login .', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(669, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(670, 1, '/sim_surat/Lokasi', 'Akses data lokasi.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'),
(671, 1, '/sim_surat/Tsuratmasuk', 'Akses surat masuk.', '20-04-13 22:0:th', '192.168.15.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `nama_instansi` varchar(100) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `telp` varchar(30) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan_situs` text NOT NULL,
  `fax` varchar(30) NOT NULL,
  `npwp` varchar(40) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama_pejabat` varchar(100) NOT NULL,
  `favicon` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`nama_instansi`, `alamat_lengkap`, `telp`, `informasi`, `keterangan_situs`, `fax`, `npwp`, `logo`, `jabatan`, `nama_pejabat`, `favicon`) VALUES
('Kantor Kementerian Agama Kota Madiun', 'Jalan Mayjend Panjaitan Nomor 3 Kota Madiun 63133, Telepon (0351) 462606 Email: kotamadiun@kemenag.go.id', '0351 462606', 'Selamat datang di sistem informasi arsip sistem ini bertujuan untuk mempermudah dalam pengarsipan data yang ada pada instansi .', 'siarsip.min1kotamadiun.sch.id', '0351 462606', '462606', '1586758632logo.png', 'Programmer', 'Nayed Ehsan Zayed', '1586758632logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_arsip`
--

CREATE TABLE `jenis_arsip` (
  `id_jenis` int(15) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL,
  `create_id` varchar(50) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_arsip`
--

INSERT INTO `jenis_arsip` (`id_jenis`, `jenis_arsip`, `create_id`, `create_date`) VALUES
(2, 'Arsip Kepegawaian', '1', '2019-11-08'),
(7, 'Arsip Barang dan Jasa.', '1', '2020-02-01'),
(8, 'Arsip Bendahara', '1', '2019-11-08'),
(9, 'Arsip BMN', '1', '2019-11-08'),
(12, 'Perbaikan data.', '1', '2020-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jenis` int(20) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `kode_surat` varchar(40) NOT NULL,
  `tanggal_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis`, `nama_jenis`, `id_user`, `kode_surat`, `tanggal_create`) VALUES
(1, 'Surat Korespondensi', '1', 'B-', '2020-01-02'),
(3, 'Surat Tugas dan SPD', '1', '', '2020-01-02'),
(4, 'Surat Dinas Khusus', '1', '', '2020-01-03'),
(5, 'korespondesi', '10', 'Kp.07.2', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','user','staff','') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `log` varchar(40) DEFAULT NULL,
  `active` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`, `level`, `foto`, `email`, `log`, `active`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Zayed', 'admin', 'foto1586791338.jpg', 'ismarianto@gmail.com', '2020-04-13 22:22:18', 'y'),
(2, 'kepala', 'ac5ae9e8fb93598276c9b3dc4cd28d40', 'Drs H.Munir, M.Hum', 'admin', 'foto1577693796.jpg', 'hmunir2166@gmail.com', '2019-12-30 15:16:36', 'y'),
(9, 'rahma', '202cb962ac59075b964b07152d234b70202cb962ac59075b964b07152d23', 'Front Office2', 'admin', 'foto1574649110.png', 'frontoffice@gmail.com', '2019-12-30 15:05:40', 'y'),
(10, 'arsiparis', '202cb962ac59075b964b07152d234b70', 'Yayun Indrawati, S.Sos.', 'admin', 'foto1577242685.jpg', 'kotamadiun@kemenag.go.id', '2019-12-30 15:04:30', 'y'),
(11, 'elok', '202cb962ac59075b964b07152d234b70', 'Front Office1', 'admin', '', 'frontoffice@kemenag.go.id', '2019-12-30 15:06:21', 'y'),
(12, 'kasubbag', '202cb962ac59075b964b07152d234b70', 'Ahmad Khotib', 'admin', '', 'ahmadkhotib@kemenag.go.id', '2019-12-30 15:04:08', 'y'),
(13, 'pontren', '202cb962ac59075b964b07152d234b70', 'Ahmad Khotib', 'admin', '', 'ahmadkhotib@kemenag.go.id', '2019-12-30 15:05:16', 'y'),
(14, 'phu', '202cb962ac59075b964b07152d234b70', 'M. Arif Fauzi', 'admin', '', 'mariffauzi@kemenag.go.id', '2020-04-13 14:14:27', 'y'),
(15, 'pais', '202cb962ac59075b964b07152d234b70', 'Koirul Kamami', 'admin', '', 'koirulkamami@kemenag.go.id', '2019-12-30 15:06:36', 'y'),
(16, 'syariah', '202cb962ac59075b964b07152d234b70', 'Amil Wahib', 'admin', '', 'amilwahib@kemenag.go.id', '2020-01-10 09:53:04', 'y'),
(17, 'bimasislam', '202cb962ac59075b964b07152d234b70', 'Agus Burhani', 'admin', '', 'agusburhani@kemenag.go.id', '2019-12-30 15:07:06', 'y'),
(18, 'pendma', '202cb962ac59075b964b07152d234b70', 'Sigit Harianto', 'admin', '', 'sigitharianto@kemenag.go.id', '2020-01-06 15:12:40', 'y'),
(19, 'wawa', '202cb962ac59075b964b07152d234b70', 'Awawina Nur Hami', 'admin', 'foto1579751730.jpg', 'wawa@kemenag.go.id', '2020-01-23 10:55:30', 'y'),
(20, 'humas', '202cb962ac59075b964b07152d234b70', 'Dany Primasari Narendrani', 'admin', '', 'dany@kemenag.go.id', NULL, 'y'),
(21, 'support', '82d21e53f74b7a30c620f25404837be9', 'support', 'admin', 'foto1578298467.png', 'support@gmail.com', '2020-01-06 15:14:27', 'y'),
(22, 'admin12', '21232f297a57a5a743894a0e4a801fc3', 'admin12', 'admin', 'foto1586761944.jpg', 'kotokareh@gmail.com', NULL, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(15) NOT NULL,
  `nama_lokasi` varchar(80) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `tanggal`) VALUES
(2, 'Ruang Kakankemenag', '2020-02-01'),
(3, 'Ruang Arsip Kemenag Kota Madiun.', '2020-02-01'),
(4, 'Ruang Arsip Pendidikan Madrasah', '2019-11-08'),
(5, 'Ruang Arsip Bendahara,', '2020-03-08'),
(6, 'Ruang Arsip HAJI', '2019-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT '0',
  `nama_menu` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `urutan` int(3) NOT NULL,
  `position` enum('Bottom','Top','','') NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `icon`, `link`, `aktif`, `urutan`, `position`, `level`) VALUES
(23, 50, 'Data Jenis  Arsip', 'icon-screen-smartphone  fa-fw', 'jenis_arsip', 'Ya', 2, 'Bottom', 'admin'),
(24, 50, 'Arsip  ', 'icon-notebook  fa-fw', 'arsip', 'Ya', 3, 'Bottom', 'admin.user'),
(25, 26, 'User', 'icon-layers  fa-fw', 'login', 'Ya', 12, 'Bottom', 'admin'),
(26, 0, 'Setting Aplikasi', 'icon-notebook  fa-fw', '#', 'Ya', 11, 'Bottom', 'admin.user'),
(27, 26, 'Menu Web', 'icon-book-open  fa-fw', 'setting/menu', 'Ya', 13, 'Bottom', 'admin'),
(28, 26, 'Identitas Instansi', 'icon-doc  fa-fw', 'instansi', 'Ya', 14, 'Bottom', 'admin'),
(43, 50, 'Satuan', 'icon-notebook  fa-fw', 'M_satuan', 'Ya', 5, 'Bottom', 'admin.user'),
(42, 50, 'Lokasi', 'icon-puzzle  fa-fw', 'Lokasi', 'Ya', 4, 'Bottom', 'admin.user'),
(50, 0, 'Dokumentasi Arsip', 'icon-layers  fa-fw', '#', 'Ya', 1, 'Bottom', 'admin.user'),
(49, 50, 'Pengajuan arsip', 'icon-list  fa-fw', 'arsip/pengajuan_arsip', 'Ya', 6, 'Bottom', 'admin.user'),
(58, 53, 'Jenis surat', 'icon-envelope-open  fa-fw', 'Jenis_surat', 'Ya', 8, 'Bottom', 'admin.user'),
(53, 0, 'Arsip Penyuratan', 'icon-notebook  fa-fw', '#', 'Ya', 7, 'Bottom', 'admin.user'),
(54, 53, 'Surat Keluar', 'icon-folder-alt  fa-fw', 'tbl_surat_keluar', 'Ya', 10, 'Bottom', 'admin.user'),
(55, 53, 'Surat Masuk', 'icon-folder-alt  fa-fw', 'Tsuratmasuk', 'Ya', 9, 'Bottom', 'admin.user'),
(56, 0, 'Laporan surat', 'icon-paper-plane  fa-fw', 'Laporan_surat', 'Ya', 15, 'Bottom', 'admin.user'),
(60, 56, 'Surat Masuk', 'icon-folder  fa-fw', 'laporan_surat/surat_masuk', 'Ya', 16, 'Bottom', 'admin.user'),
(61, 56, 'Surat Keluar', 'icon-docs  fa-fw', 'laporan_surat/surat_keluar', 'Ya', 17, 'Bottom', 'admin.user');

-- --------------------------------------------------------

--
-- Table structure for table `m_satuan`
--

CREATE TABLE `m_satuan` (
  `id_satuan` int(20) NOT NULL,
  `nama_satuan` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_satuan`
--

INSERT INTO `m_satuan` (`id_satuan`, `nama_satuan`, `keterangan`) VALUES
(1, 'Bendel', 'Bendel'),
(2, 'Lembar', 'Lembar'),
(3, 'Map', 'Map'),
(4, 'Dus', 'Dus'),
(5, 'Pack', 'Pack'),
(6, 'Outner', 'Outner');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_arsip`
--

CREATE TABLE `pengajuan_arsip` (
  `id_pengajuan` int(15) NOT NULL,
  `id_pejabat` varchar(60) NOT NULL,
  `id_satuan` varchar(50) NOT NULL,
  `nama_arsip` varchar(60) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan` text NOT NULL,
  `file_arsip` varchar(50) DEFAULT NULL,
  `id_jenis` varchar(50) NOT NULL,
  `nonaktif` enum('n','y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_arsip`
--

INSERT INTO `pengajuan_arsip` (`id_pengajuan`, `id_pejabat`, `id_satuan`, `nama_arsip`, `jumlah`, `satuan`, `tanggal`, `tujuan`, `file_arsip`, `id_jenis`, `nonaktif`) VALUES
(1, '1', '', 'data siswa', '1', 'kosong', '2019-12-10', ' data ', 'peng_1575978902.pdf', '2', 'y'),
(2, '1', '6', 'nnn', '200000', 'kosong', '2020-04-13', ' nnn', 'peng_1586763296.pdf', '12', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat_masuk`
--

CREATE TABLE `pengajuan_surat_masuk` (
  `id_pengajuan_s` int(15) NOT NULL,
  `no_agenda` varchar(15) NOT NULL,
  `jenis_surat` varchar(15) NOT NULL,
  `tanggal_kirim` datetime NOT NULL,
  `tanggal_terima` datetime NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `nama_file` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `isi_disposisi` mediumtext NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `tujuan`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`, `id_surat`, `id_user`) VALUES
(20, 'Bagian Perlengkapan Universitas Ekaskti', 'dispotition well ', 'Biasa', '0000-00-00', 'now this for dispotition', 4, 0),
(21, 'kasi', 'asdaasd', 'Segera', '2019-12-03', 'asdasdasda', 5, 0),
(22, 'Madiun', 'Tfgghhhh', 'Segera', '2019-12-19', 'Yggg', 6, 0),
(23, 'Tujuan ', 'Yes', 'Penting', '2019-12-27', 'asd', 7, 1),
(24, 'kasi kurais', 'sasasa', 'Penting', '2019-12-13', 'asasas', 9, 1),
(25, 'retertert', 'erterte', 'Rahasia', '2019-12-20', 'ertertert', 10, 1),
(26, 'kosong', 'isi disposisi', 'Biasa', '2020-01-01', 'perbaikan ', 12, 1),
(27, 'bapak oyes', 'yes', 'Biasa', '2020-01-09', 'perbaikan yes', 11, 1),
(28, 'Kasi pendama', 'Swgera di tl', 'Segera', '2020-01-03', 'Peserta 100 guru dan karyawan', 13, 1),
(29, 'UP', 'TL', '', '0000-00-00', '', 14, 0),
(30, 'Penyelenggara Syariah', 'Tolong konfirmasi rohaniwan agama apa yg diminta', 'Segera', '2020-01-10', 'Tindak lanjuti', 15, 0),
(31, 'Kasubag TU/Keuangan', 'Tindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 16, 0),
(32, 'Kepala Kantor\nHumas', 'Agendakan', 'Biasa', '2020-01-07', 'Saya Hadir', 17, 0),
(33, 'Humas', '', 'Biasa', '0000-00-00', '', 18, 11),
(34, 'Bimas Islam', 'Untuk diketahui dan ditindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 19, 0),
(35, 'Kepala Kantor\nHumas', 'Agendakan, mohon di ingatkan!', 'Biasa', '2020-01-07', 'Agendakan', 20, 0),
(36, 'Bimas Islam', 'Penuhi permintaan ini sesuai prosedur', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 21, 0),
(37, 'Bimas Islam', 'Dipedomani dan ditindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 22, 0),
(38, 'Kasubag TU / UP', 'Tindaklanjuti sesuai aturan', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 23, 0),
(39, 'Kasubag TU', 'Pedomani dan tindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 24, 0),
(40, 'Kasi_PD_Pontren', 'Tindaklanjuti', 'Biasa', '2020-01-08', 'Tindak Lanjuti', 25, 0),
(41, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-10', 'Tindak lanjuti', 26, 0),
(42, 'Plt Kasubag TU', 'Proses sesuai prosedur', 'Penting', '2020-01-10', 'Tindak lanjuti', 27, 0),
(43, 'Plt. Kasubag Tu', 'tindaklanjuti', 'Biasa', '2020-01-14', 'cukupi', 32, 0),
(44, 'Kasubag TU', '', '', '0000-00-00', '', 31, 11),
(45, 'UP', '', '', '0000-00-00', '', 30, 11),
(46, 'Humas', '', '', '0000-00-00', '', 29, 11),
(47, 'Kasubag TU', '', '', '0000-00-00', '', 28, 11),
(48, 'Kasi PHU', 'Supaya di tindak lanjuti', 'Biasa', '2020-01-10', 'Tindak lanjuti', 34, 0),
(49, 'Kasi Pendma', 'Supaya di tindak lanjuti', 'Penting', '2020-01-10', 'Tindak lanjuti', 33, 0),
(50, '.', '', 'Biasa', '0000-00-00', '', 35, 9),
(51, 'Humas', 'Agendakan', 'Penting', '2020-01-14', 'Saya Hadir', 36, 0),
(52, 'Plt Kasubag TU', 'di Inventarisir', 'Biasa', '2020-01-14', 'di Inventarisir', 37, 0),
(53, 'Kasi Pendma', 'di Inventarisir', 'Biasa', '2020-01-15', 'di Inventarisir', 39, 0),
(54, 'Kasi Pendma', 'untuk diketahui', 'Biasa', '2020-01-15', 'di Inventarisir', 38, 0),
(55, 'Humas', 'Agendakan', 'Biasa', '2020-01-16', 'Saya Hadir', 42, 0),
(56, 'Gara syariah', 'pertimbangkan', 'Biasa', '2020-01-14', 'pertimbangkan', 41, 0),
(57, 'Kasi Bimas ', 'tindaklanjuti', 'Biasa', '2020-01-15', 'cukupi datanya', 40, 2),
(58, 'Pengawas \nkristen', 'Tindak lanjuti', 'Biasa', '2020-01-14', 'Hadiri', 43, 9),
(59, 'Kasi Bimas Islam', 'Tindak lanjuti', 'Biasa', '2020-01-14', 'Atur dengan penyuluh', 45, 9),
(60, 'Penyelenggara Syariah', 'Tindak lanjuti', 'Biasa', '2020-01-15', 'Cukupi', 44, 9),
(61, 'PHU', 'Tindaklanjuti', 'Biasa', '2020-01-15', 'Cukupi', 48, 11),
(62, 'Pendma', 'Koordinasikan dengan madrasah yg terkait', 'Biasa', '2020-01-15', 'Tindak Lanjuti', 46, 11),
(63, 'PD Pontren', 'Untuk dijadikan pedoman', 'Penting', '2020-01-15', 'di Inventarisir', 49, 9),
(64, 'Bimas', 'Tindak Lanjuti', 'Biasa', '2020-01-15', 'Tindak Lanjuti', 47, 11),
(65, 'Plt Kasubag', 'Tindak Lanjuti', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 50, 11),
(66, 'Plt Kasubag', 'Koordinasikan dengan UP, Buatkan surat tugas dan SPD', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 51, 11),
(67, 'Bimas Islam', 'Cukupi datanya', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 53, 11),
(68, 'Plt Kasubag', 'Tindak Lanjuti, koordinasikan dgn keuangan', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 52, 11),
(69, 'Kasi Pendma', 'Tindak lanjuti', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 54, 9),
(70, 'Plt. Kasubag', 'Cukupi', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 57, 11),
(71, 'Keuangan', 'Tindak Lanjuti', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 55, 11),
(72, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 56, 11),
(73, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-17', 'Cukupi', 58, 9),
(74, 'UP', 'Tindak lanjuti ', 'Penting', '2020-01-17', 'untuk dijadikan pedoman ', 59, 9),
(75, 'UP', 'Tindak lanjuti', 'Segera', '2020-01-17', 'Tindak lanjuti', 60, 9),
(76, 'Plt Kasubag', 'Teruskan ke Ybs', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 61, 11),
(77, 'Plt Kasubag / Humas', '', 'Biasa', '0000-00-00', '', 62, 11),
(78, '.', '', 'Biasa', '0000-00-00', '', 63, 11),
(79, 'Kasi Bimas Islam', 'Tindak lanjuti', 'Biasa', '2020-01-21', 'Hadiri', 74, 9),
(80, 'Gara Syariah', 'Pertimbangkan', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 64, 11),
(81, 'Plt Kasubag', 'Koordinasikan dengan ybs', 'Segera', '2020-01-21', 'Cukupi', 65, 11),
(82, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Cukupi', 67, 11),
(83, 'Kasi Bimas Islam', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 66, 11),
(84, 'Bimas Islam', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Cukupi', 68, 11),
(85, 'Kasi PAIS', 'Pedomani', 'Biasa', '2020-01-21', 'Untuk dijadikan pedoman', 69, 11),
(86, 'Humas', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Sosialisasikan', 70, 11),
(87, 'Kasi PAIS', 'Koordinasikan dengan UP untuk dibuatkan surat tugas dan SPD', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 71, 11),
(88, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 72, 11),
(89, 'Plt Kasubag', 'Koordinasikan dengan para Kasi dan Gara Syariah untuk ikut serta pada acara tersebut', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 73, 11),
(90, 'Kasi PHU', 'Tindak lanjuti', 'Penting', '2020-01-22', 'Tindak lanjuti', 81, 0),
(91, 'Keuangan ', 'untuk dijadikan pedoman', 'Penting', '2020-01-22', 'Tindak lanjuti', 82, 0),
(92, 'Humas', 'Agendakan', 'Penting', '2020-01-22', 'Saya Hadir', 80, 0),
(93, 'Kasi Bimas', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Cukupi', 79, 2),
(94, 'Kasi Pendma', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Tindaklanjuti', 78, 2),
(95, 'Kasi Bimas ', 'Tindaklanjuti', 'Biasa', '2020-01-22', '', 77, 2),
(96, 'Penyelenggara syariah', 'Pertimbangkan', 'Biasa', '2020-01-22', '', 76, 2),
(97, 'Hunasy', 'Agendakan', 'Biasa', '2020-01-22', '', 75, 2),
(98, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Tindak lanjuti', 83, 9),
(99, 'PHU', 'Tindak Lanjuti', 'Biasa', '2020-01-22', 'Cukupi', 84, 11),
(100, 'Humas', 'di Inventarisir', 'Biasa', '2020-01-23', 'di Inventarisir', 86, 9),
(101, 'Kasi Pendma', 'Tindak lanjuti', 'Segera', '2020-01-23', 'Koordinasi dengan UP agar dibuatkan surat tugas', 85, 9),
(102, 'Kasi Pais', 'Tindak lanjuti', 'Segera', '2020-01-23', 'Tindak lanjuti', 87, 9),
(103, 'Humas', 'Distribusikan ke masing2 satker', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 92, 11),
(104, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 88, 11),
(105, 'UP', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 89, 11),
(106, 'Kasi Pendma', 'Tindak Lanjuti Sampaikan ke Satker', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 90, 11),
(107, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 91, 11),
(108, 'Bimas Islam', 'Distribusikan', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 93, 11),
(109, 'Gara Syariah', 'Cukupi', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 94, 11),
(110, 'Gara Syariah', 'Untuk dipedomani', 'Biasa', '2020-01-24', 'Di invetarisir', 95, 11),
(111, 'UP', 'Pertimbangkan', 'Biasa', '2020-01-27', 'di Inventarisir', 96, 9),
(112, 'Kasi Penyelenggara Syariah', 'Pertimbangkan dan sesuaikan dengan anggaran yang ada', 'Biasa', '2020-01-27', 'Tindak lanjuti', 97, 9),
(113, 'Humas', 'Agendakan', 'Biasa', '2020-01-28', 'Saya Hadir', 98, 9),
(114, 'Kasi Penyelenggara Syariah', 'Tindak lanjuti', 'Penting', '2020-01-28', 'Tindak lanjuti', 99, 9),
(115, 'Humas', 'Agendakan', 'Biasa', '2020-01-29', 'Saya Hadir', 104, 9),
(116, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 103, 9),
(117, 'Kasi Pendma', 'untuk diketahui', 'Biasa', '2020-01-29', 'Untuk diketahui', 102, 9),
(118, 'Arsiparis', 'Cukupi dan tindak lanjuti', 'Segera', '2020-01-30', 'Tindak lanjuti', 105, 0),
(119, 'Kasi Pais', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 101, 9),
(120, 'Kasi Pais', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 100, 9),
(121, 'Pak Suparlis ..cukupi', 'Cukupi dan tl', 'Biasa', '2020-01-30', 'Tl', 109, 2),
(122, 'UP', 'Tindak lanjuti ', 'Biasa', '2020-01-30', 'Cukupi', 108, 0),
(123, 'Humas', 'Agendakan', 'Biasa', '2020-01-30', 'Saya Hadir', 107, 9),
(124, 'Perencana', 'Tindak lanjuti', 'Segera', '2020-01-30', 'Tindak lanjuti', 106, 0),
(125, 'Pendma', 'untuk diketahui', 'Biasa', '2020-01-31', 'Untuk diketahui', 110, 9),
(126, 'Keuangan', 'Tindak lanjuti', 'Biasa', '2020-01-31', 'Tindak lanjuti', 111, 9),
(127, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-02-03', 'Cukupi Datanya', 112, 9),
(128, 'PHU', 'Tindak lanjuti', 'Segera', '2020-02-03', 'Tindak lanjuti', 113, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_surat` int(10) NOT NULL,
  `id_jenis_surat` varchar(50) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `no_agenda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat`, `id_jenis_surat`, `tujuan`, `no_surat`, `isi`, `kode`, `tgl_surat`, `tgl_catat`, `file`, `keterangan`, `id_user`, `no_agenda`) VALUES
(2, '3', 'YBS', '1', 'SURAT TUGAS A.n. M. Afif Nasrulloh, S.T.', 'KP.02.3', '2020-01-06', '2020-01-06', 'surat_keluar2020-01-061.pdf', 'Mengikuti Kegiatan Tindak Lanjut PMA Nomor 19 Tahun 2019', 10, ''),
(3, '3', 'YBS', '2', 'Mengikuti Kegiatan Worshop Implentasi Pendekatan STEM & Aplikasi Kimia Tingkat Lanjut', 'KP.02.3', '2020-06-09', '2020-01-09', 'surat_keluar2020-01-09.pdf', 'SURAT TUGAS A.n. 1.Dra.  Yani Setyoati, M.Pd     2.Puguh Dwi Cahyono, S.Pd', 10, ''),
(7, '5', 'Kepala KPPN Madiun', 'Kp.07.2-6', 'Kenaikan Gaji Berkala a.n. Sigit Harianto, S.Pd.', 'Kp.07.2', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-133.pdf', 'Kenaikan Gaji Berkala a.n. Sigit Harianto, S.Pd. NIP 196411121990021002', 19, ''),
(8, '5', 'kepala KPPN Madiun', 'Kp.07.2-7', 'Kenaikan Gaji Berkala a.n. Mustanginah, S.Pd.I', 'Kp.07.2', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-134.pdf', 'Kenaikan Gaji Berkala a.n. Mustanginah, S.Pd.I NIP 196807051994022001', 19, ''),
(10, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-8', 'Rekomendasi Umroh', 'Hj.08', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-136.pdf', 'Rekomendasi Umroh a.n Athallah Bintang Rahagi', 19, ''),
(11, '5', 'Kepala KUA Kecamatan Se Kota Madiun', 'Kp.07.2-10', 'Surat Pengantar Pengiriman Kalender Th. 2020', 'HM.00', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-137.pdf', 'Surat Pengantar Pengiriman Kalender Tahun 2020 dari KUA ke Masjid/Musholla', 19, ''),
(12, '5', 'Kepala Kantor Imigrasi kelas II Madiun', 'Kp.07.2-11', 'Rekomendasi Umroh', 'Hj.08', '2020-01-03', '2020-01-13', 'surat_keluar2020-01-138.pdf', 'Rekomendasi Umroh a.n Herry Budiharto', 19, ''),
(13, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-12', 'Rekomendasi Umroh', 'Hj.08', '2020-01-03', '2020-01-13', 'surat_keluar2020-01-139.pdf', 'Rekomendasi Umroh a.n. Patimasang', 19, ''),
(14, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-13', 'Pengantar Pengiriman Berkas Perkim', 'Hj.02', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1310.pdf', 'Pengantar pengiriman berkas perkim terkait penerbitan paspor untuk jamaah haji Kota Madiun Tahun 1441 H/ 2020', 19, ''),
(15, '5', 'Calon Jamaah Haji Kota Madiun Tahun 1441 H/ 2020 M', 'Kp.07.2-14', 'Undangan Pembuatan Paspor Haji Bagi CJH Tahun 2020', 'Hj.02', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1311.pdf', 'Surat Undangan Pembuatan Paspor CJH tahun 2020', 19, ''),
(16, '5', 'YBS', 'Kp.07.2-15', 'Surat Rekomendasi', 'PP.007', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1312.pdf', 'Surat Rekomendasi Kepala Madrasah Diniyah Takmiliyah Ulul Albab Tingkat Ula', 19, ''),
(17, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-16', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1313.pdf', 'Rekomendasi Umroh a.n. Ilham Satria Sulistyo', 19, ''),
(18, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-17', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1314.pdf', 'Rekomendasi Umroh a.n. Titik Puji Lestari', 19, ''),
(19, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-18', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1315.pdf', 'Rekomendasi Umroh a.n. Khalifah', 19, ''),
(20, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-19', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1316.pdf', 'Rekomendasi Umroh a.n. Anton Sugiarto', 19, ''),
(21, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-20', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1317.pdf', 'Rekomendasi Umroh a.n. Elfiana Nur Citra Dewi', 19, ''),
(22, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-21', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1318.pdf', 'Rekomendasi Umroh a.n. Dahlianawati', 19, ''),
(23, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-22', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1319.pdf', 'Rekomendasi Umroh a.n. Sri Sunarti', 19, ''),
(24, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-23', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1320.pdf', 'Rekomendasi Umroh a.n. Bambang Hariyadi', 19, ''),
(25, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-24', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1321.pdf', 'Rekomendasi Umroh a.n. Heru Susantyo', 19, ''),
(26, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-25', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1322.pdf', 'Rekomendasi Umroh a.n Ilham Miftahul Fathin', 19, ''),
(27, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-26', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1323.pdf', 'Rekomendasi Umroh a.n. Delvin Riezky Romadhoni', 19, ''),
(28, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-27', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-14.pdf', 'Rekomendasi Umroh a.n. Delvin Riezky Romadhoni', 19, ''),
(29, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-28', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-141.pdf', 'Rekomendasi Umroh a.n. Zaki Putra Prabowo', 19, ''),
(30, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-29', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-142.pdf', 'Rekomendasi Umroh a.n. Inge Sari Novita', 19, ''),
(31, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-30', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-143.pdf', 'Rekomendasi Umroh a.n. Ardelia Agita Prabowo', 19, ''),
(32, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-31', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-144.pdf', 'Rekomendasi Umroh a.n. Abdul Rasyid Farid', 19, ''),
(33, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-32', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-145.pdf', 'Rekomendasi Umroh a.n Sumilah Wage Ahmad', 19, ''),
(34, '5', 'Plt. Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-33', 'Usul SK Kenaikan Jenjang Jabatan Guru a.n. Puguh Dwi Cahyono, S.Pd.', 'kp.07.1', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-146.pdf', 'Pengiriman Berkas Usul Mutasi Jabatan Guru a.n. Puguh Dwi Cahyono, S.Pd.', 19, ''),
(35, '5', 'Plt. Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-34', 'Usul Kenaikan Pangkat Periode April 2020 (Jakarta) a.n. Puguh Dwi Cahyono, S.Pd, dkk 9 Orang', 'kp.07.1', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-147.pdf', 'Usul kenaikan pangkat PNS di lingkungan Kantor Kemenag Kota Madiun periode 2020 (Jakarta)', 19, ''),
(36, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-35', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-148.pdf', 'Rekomendasi Umroh a.n. Dessy Sulia Wijayanti', 19, ''),
(37, '5', 'Operator Pendataan Ujian Nasional (MI,MTs,MA)', 'Kp.07.2-36', 'Undangan', 'PP.00', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-149.pdf', 'Undangan Rapat Koordinasi Pendataan Capesun Tahun 2019/2020', 19, ''),
(38, '5', 'Komandan Korem 081', 'Kp.07.2-37', 'Jadwal Petugas Imam dan Khotib', 'BA.01', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1410.pdf', 'Jadwal Petugas Imam dan Khotib Sholat Jum\'at di Masjid Jendral Sudirman tahun 2020', 19, ''),
(39, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-38', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1411.pdf', 'Rekomendasi Umroh a.n. Siti Alfiah', 19, ''),
(40, '5', 'Kepala Kantor Kelas III Ponorogo', 'Kp.07.2-39', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1412.pdf', 'Rekomendasi Umroh a.n. Yuli Jumiarti', 19, ''),
(41, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-40', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1413.pdf', 'Rekomendasi Umroh a.n. Evi Herawati', 19, ''),
(42, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-41', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1414.pdf', 'Rekomendasi Umroh a.n. Rizaldi Noor Himawan', 19, ''),
(43, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-42', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1415.pdf', 'Rekomendasi Umroh a.n. Nanik Setyonengrum', 19, ''),
(44, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-43', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1416.pdf', 'Rekomendasi Umroh a.n. Endang Suasnawati', 19, ''),
(45, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-44', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1417.pdf', 'Rekomendasi Umroh a.n. Solikah', 19, ''),
(46, '5', '1. Penyuluh Agama Fungsional 2. Penyuluh Agama Islam Non PNS', 'Kp.07.2-45', 'Undangan', 'HM.01', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1418.pdf', 'Undangan Pembinaan', 19, ''),
(47, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-46', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1419.pdf', 'Rekomendasi Umroh a.n. Ranny Mahayu Ferasti', 19, ''),
(48, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-47', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1420.pdf', 'Rekomendasi Umroh a.n. Heru Sutantiyo', 19, ''),
(49, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-48', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1421.pdf', 'Rekomendasi Umroh a.n rochmad Samsudin', 19, ''),
(50, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-49', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1422.pdf', 'Rekomendasi Umroh a.n. Mohammad Nasih Masruri', 19, ''),
(51, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-50', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1423.pdf', 'Rekomendasi Umroh a.n Teguh', 19, ''),
(52, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-51', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1424.pdf', 'Rekomendasi Umroh a.n Arifin Ibo Kuswanto', 19, ''),
(53, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-52', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1425.pdf', 'Rekomendasi Umroh a.n Latiful Habibi', 19, ''),
(54, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-53', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1426.pdf', 'Rekomendasi Umroh a.n. Sumarsitah', 19, ''),
(55, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-54', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1427.pdf', 'Rekomendasi Umroh a.n. Titik Asmiatin', 19, ''),
(56, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-55', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1428.pdf', 'Rekomendasi Umroh a.n Siti Nurrohmah', 19, ''),
(57, '5', 'Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-56', 'Permohonan Tanda Tangan SiEka', 'KP.07.6', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1429.pdf', 'Permohonan Tanda Tangan Jurnal Kegiatan SiEka Kepala Kantor Kemenag Kota Madiun selama 2019', 19, ''),
(58, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-57', 'Rekomendasi Umroh', 'Hj.08', '2020-01-09', '2020-01-14', 'surat_keluar2020-01-1430.pdf', 'Rekomendasi Umroh a.n Krisdiana', 19, ''),
(59, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-58', 'Rekomendasi Umroh', 'Hj.08', '2020-01-09', '2020-01-15', 'surat_keluar2020-01-15.pdf', 'Rekomendasi Umroh a.n Sulisetiani', 19, ''),
(60, '5', 'Kepala KPPN Madiun', 'Kp.07.2-59', 'Kenaikan Gaji Berkala a.n. Mukarromah, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-151.pdf', 'KGB a.n Mukarromah, S.Pd. NIP. 196810181994032003', 19, ''),
(61, '5', 'Kepala KPPN Madiun', 'Kp.07.2-60', 'Kenaikan Gaji Berkala a.n. Nur Waingah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-152.pdf', 'KGB a.n. Nur Wakingah, S.Ag NIP. 197211152007012016', 19, ''),
(62, '5', 'Kepala KPPN Madiun', 'Kp.07.2-61', 'Kenaikan Gaji Berkala a.n. Nurul Faizah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-153.pdf', 'KGB a.n Nurul Faizah, S.Ag. NIP 196003081983032003', 19, ''),
(63, '5', 'Kepala KPPN Madiun', 'Kp.07.2-62', 'Kenaikan Gaji Berkala a.n. Drs. Edy Purwanto', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-154.pdf', 'KGB Drs. Edy Purwanto NIP 196803261998031003', 19, ''),
(64, '5', 'Kepala KPPN Madiun', 'Kp.07.2-63', 'Kenaikan Gaji Berkala a.n. Mohammad Said Aziz, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-155.pdf', 'KGB a.n Mohammad Said Aziz, S.Ag NIP 196704131993031005', 19, ''),
(65, '5', 'Kepala KPPN Madiun', 'Kp.07.2-64', 'Kenaikan Gaji Berkala a.n. Mochamad Arif Fauzi, S.Ag., M.H.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-156.pdf', 'KGB a.n Mochamad Arif Fauzi, S.Ag., M.H.I NIP. 197202071998031003', 19, ''),
(66, '5', 'Kepala KPPN Madiun', 'Kp.07.2-65', 'Kenaikan Gaji Berkala a.n. Lilik Pamujiono, S.Th', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-157.pdf', 'KGB a.n  Lilik Pamujiono, S.Th NIP 196012221994031002', 19, ''),
(67, '5', 'Kepala KPPN Madiun', 'Kp.07.2-66', 'Kenaikan Gaji Berkala a.n. Kusyanto, S.PdI', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-158.pdf', 'KGB Kusyanto, S.PdI NIP 196906261994031006', 19, ''),
(68, '5', 'Kelapa KPPN Madiun', 'Kp.07.2-67', 'Kenaikan Gaji Berkala a.n. Drs. Sudarmadi, M.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-159.pdf', 'KGB Drs. Sudarmadi, M.Ag NIP. 196702041993031006', 19, ''),
(69, '5', 'Kepala KPPN Madiun', 'Kp.07.2-68', 'Kenaikan Gaji Berkala a.n. Drs. Mu\'arifin', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1510.pdf', 'KGB  Drs. Mu\'arifin NIP. 196203141994031001', 19, ''),
(70, '5', 'Kepala KPPN Madiun', 'Kp.07.2-69', 'Kenaikan Gaji Berkala a.n. Drs. Dwi Widodo M.K.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1511.pdf', 'KGB Drs. Dwi Widodo M.K.Pd NIP. 196701311994031003', 19, ''),
(71, '5', 'Kepala KPPN Madiun', 'Kp.07.2-70', 'Kenaikan Gaji Berkala a.n. Dra. Ni\'mah El Huda, M.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1512.pdf', 'KGB Dra. Ni\'mah El Huda, M.Pd.I NIP.196409221994032001', 19, ''),
(72, '5', 'Kepala KPPN Madiun', 'Kp.07.2-71', 'Kenaikan Gaji Berkala a.n. Drs. Kambali, M.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1513.pdf', 'KGB Drs. Kambali, M.Pd.I NIP.196509121993031002', 19, ''),
(73, '5', 'Kepala KPPN Madiun', 'Kp.07.2-72', 'Kenaikan Gaji Berkala a.n. Drs. Ahmad Khotib, M.Si', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1514.pdf', 'KGB Drs. Ahmad Khotib, M.Si NIP. 196505011992031001', 19, ''),
(74, '5', 'Kepala KPPN Madiun', 'Kp.07.2-73', 'Kenaikan Gaji Berkala a.n. Dra. Mukarromah', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1515.pdf', 'KGB Dra. Mukarromah NIP.196801191993032001', 19, ''),
(75, '5', 'Kepala KPPN Madiun', 'Kp.07.2-74', 'Kenaikan Gaji Berkala a.n. Binarni Helihastuti, S.PAK', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1516.pdf', 'KGB Binarni Helihastuti, S.PAK NIP. 196506112000032001', 19, ''),
(76, '5', 'Kepala KPPN Madiun', 'Kp.07.2-75', 'Kenaikan Gaji Berkala a.n. ST. Andri Widiyanti, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1517.pdf', 'KGB ST. Andri Widiyanti, S.Pd NIP.1974412262000032001', 19, ''),
(77, '5', 'Kepala KPPN Madiun', 'Kp.07.2-76', 'Kenaikan Gaji Berkala a.n. Sukimin, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1518.pdf', 'KGB Sukimin, S.Pd NIP. 196607152000031001', 19, ''),
(78, '5', 'Kepala KPPN Madiun', 'Kp.07.2-77', 'Kenaikan Gaji Berkala a.n. Maria Magdalena Tumani, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1519.pdf', 'KGB Maria Magdalena Tumani, S.Pd NIP.196805082000032002', 19, ''),
(79, '5', 'Kepala KPPN Madiun', 'Kp.07.2-78', 'Kenaikan Gaji Berkala a.n. Murlani, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1520.pdf', 'KGB Murlani, S.Pd NIP.196903181994032001', 19, ''),
(80, '5', 'Kepala KPPN Madiun', 'Kp.07.2-79', 'Kenaikan Gaji Berkala a.n. Drs. Yulius Suparlis', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1521.pdf', 'KGB Drs. Yulius Suparlis NIP.196108082000031001', 19, ''),
(81, '5', 'Kepala KPPN Madiun', 'Kp.07.2-80', 'Kenaikan Gaji Berkala a.n. Amil Wahib, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1522.pdf', 'KGB Amil Wahib, S.Ag NIP.197301262000031001', 19, ''),
(82, '5', 'Kepala KPPN Madiun', 'Kp.07.2-81', 'Kenaikan Gaji Berkala a.n. Drs. Theresia Dwi Widiasih', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1523.pdf', 'KGB Drs. Theresia Dwi Widiasih NIP.196711032000032001', 19, ''),
(83, '5', 'Kepala KPPN Madiun', 'Kp.07.2-82', 'Kenaikan Gaji Berkala a.n. Umi Masiah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1524.pdf', 'KGB Umi Masiah, S.Ag NIP.1972072222000032003', 19, ''),
(84, '5', 'Kepala KPPN Madiun', 'Kp.07.2-83', 'Kenaikan Gaji Berkala a.n. Amar Ma\'ruf, S.Sos', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1525.pdf', 'KGB Amar Ma\'ruf, S.Sos NIP.196806251993031004', 19, ''),
(85, '5', 'Kepala KPPN Madiun', 'Kp.07.2-84', 'Kenaikan Gaji Berkala a.n. Sri Kusnuryani, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1526.pdf', 'KGB Sri Kusnuryani, S.Ag NIP.196607182000032001', 19, ''),
(86, '5', 'Kepala KPPN Madiun', 'Kp.07.2-85', 'Kenaikan Gaji Berkala a.n. Zumaroch Hikmawana, S.Sos', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-16.pdf', 'KGB Zumaroch Hikmawana, S.Sos NIP.196709061991032003', 19, ''),
(87, '5', 'Kepala KPPN Madiun', 'Kp.07.2-86', 'Kenaikan Gaji Berkala a.n. Sri Hartini, S.Pd.K', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-161.pdf', 'KGB Sri Hartini, S.Pd.K NIP.197809102009012011', 19, ''),
(88, '5', 'Kepala KPPN Madiun', 'Kp.07.2-87', 'Kenaikan Gaji Berkala a.n. Zuhrotun Umamah, S.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-162.pdf', 'KGB Zuhrotun Umamah, S.Pd.I NIP.197011222000032001', 19, ''),
(89, '5', 'Kepala KPPN Madiun', 'Kp.07.2-88', 'Kenaikan Gaji Berkala a.n. Drs. Munir, M.Hum', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-163.pdf', 'KGB Drs. Munir, M.Hum NIP.196601211992031001', 19, ''),
(96, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-95', 'Rekomendasi', 'Hj.08', '2020-01-10', '2020-01-17', 'surat_keluar2020-01-17.pdf', 'Rekomendasi Pengajuan Penambahan Nama pada Paspor a.n Eti Erni Handawati', 19, ''),
(97, '5', 'Kepala KPPN Madiun', 'Kp.07.2-96', 'Permohonan Persetujuan UP Kartu Kredit Pemerintah', 'Ku.01.2', '2020-01-13', '2020-01-17', 'surat_keluar2020-01-171.pdf', 'Pengajuan Permohonan Pengecualian Pengimplementasian KKP', 19, ''),
(98, '3', 'YBS', '97', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-20.pdf', 'Surat Tugas a.n. Fi\'l Krisna Setiawan', 19, ''),
(99, '3', 'YBS', '98', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-201.pdf', 'Surat Tugas a.n Zainal Arifin', 19, ''),
(100, '3', 'YBS', '99', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-202.pdf', 'Surat Tugas a.n Titik Sulastri', 19, ''),
(101, '3', 'YBS', '100', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-203.pdf', 'Surat Tugas a.n Siti Juwariyah', 19, ''),
(102, '3', 'YBS', '101', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-204.pdf', 'Surat Tugas a.n Tunggul Sisharmiko', 19, ''),
(103, '3', 'YBS', '102', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-205.pdf', 'Surat Tugas a.n Shodiqin', 19, ''),
(104, '3', 'YBS', '103', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-206.pdf', 'Surat Tugas a.n R. Agus Anggoro Seto', 19, ''),
(105, '3', 'YBS', '104', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-207.pdf', 'Surat Tugas a.n Mustaqim', 19, ''),
(106, '3', 'YBS', '105', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-208.pdf', 'Surat Tugas a.n Imam Musttaqin', 19, ''),
(107, '3', 'YBS', '106', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-209.pdf', 'Surat Tugas a.n Sholeh Marzuki', 19, ''),
(108, '3', 'YBS', '107', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2010.pdf', 'Surat Tugas a.n Muhammad Munawir', 19, ''),
(109, '3', 'YBS', '108', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2011.pdf', 'Surat Tugas a.n Wiranto', 19, ''),
(110, '3', 'YBS', '109', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2012.pdf', 'Surat Tugas a.n Suyoto', 19, ''),
(111, '3', 'YBS', '110', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2013.pdf', 'Surat Tugas a.n Marsum', 19, ''),
(112, '3', 'YBS', '111', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2014.pdf', 'Surat Tugas a.n Aqib Ibnu Hambal', 19, ''),
(113, '3', 'YBS', '112', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2015.pdf', 'Surat Tugas a.n Moch. Muslimin', 19, ''),
(114, '3', 'YBS', '113', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2016.pdf', 'Surat Tugas a.n Sugeng Bektiadi', 19, ''),
(115, '3', 'YBS', '114', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2017.pdf', 'Surat Tugas a.n Agies Triana Dewi', 19, ''),
(116, '3', 'YBS', '115', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2018.pdf', 'Surat Tugas a.n Andri Fahruddin Zuhri', 19, ''),
(117, '3', 'YBS', '116', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2019.pdf', 'Surat Tugas a.n Chomarudin', 19, ''),
(118, '3', 'YBS', '117', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2020.pdf', 'Surat Tugas a.n Slamet Riadi', 19, ''),
(119, '3', 'YBS', '118', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2021.pdf', 'Surat Tugas a.n Sri Indahwati', 19, ''),
(120, '3', 'YBS', '119', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2022.pdf', 'Surat Tugas a.n Ahmad Dekriyanto', 19, ''),
(121, '3', 'YBS', '120', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2023.pdf', 'Surat Tugas a.n Bayu Warsito', 19, ''),
(122, '3', 'YBS', '121', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2024.pdf', 'Surat Tugas a.n Zainal Faizin', 19, ''),
(123, '3', 'YBS', '122', 'Surat Tugas Mengikuti Kegiatan Rakor Sinergi Pemerintahan Prov. Jawa Timur Tahun 2020 Bersama Ketua KPK RI', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2025.pdf', 'Surat Tugas a.n 1. Drs. Munir, M.Hum 2. Abdul Aziz Setyo Budi', 19, ''),
(124, '3', 'YBS', '123', 'Surat Tugas Mengikuti Kegiatan Rapat Koordinasi Pengawas PAK', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2026.pdf', 'Surat Tugas a.n Suswati Siwi Utami, S.Th, M.Pd.K', 19, ''),
(125, '3', 'YBS', '124', 'Surat Tugas Koordinasi Tugas Kepengawasan Pendidik Agama Katolik Thn. 2020 dan Melengkapi Berkas TPP Guru, Pengawas Triwulan IV TA. 2019', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2027.pdf', 'Surat Tugas a.n Maria Magdalena Tumani, S.Pd', 19, ''),
(126, '3', 'YBS', '125', 'Surat Tugas Panitia Penyusunan Soal USBN Mapel Pendidikan Agama Katolik', 'Kp.02.3', '2020-01-09', '2020-01-21', 'surat_keluar2020-01-21.pdf', 'Surat Tugas a.n St. Andri Widiyanti, S.Pd di Nite & Day Hotel Surabaya', 19, ''),
(127, '3', 'YBS', '126', 'Surat Tugas Mengikuti Kegiatan Sharing PTSP', 'Kp.02.3', '2020-01-09', '2020-01-21', 'surat_keluar2020-01-211.pdf', 'Surat Tugas Drs. Munir, M.Hum dkk (12 orang) di Kemenag Kab. Tuban', 19, ''),
(128, '3', 'YBS', '127', 'Surat Tugas Menghadiri Kegiatan Peresmian Pusat Layanan Haji dan Umroh Terpadu (PLHUT) di Lingkungan Kanwil Prov. Jatim', 'Kp.02.3', '2020-01-10', '2020-01-21', 'surat_keluar2020-01-212.pdf', 'Surat Tugas Mochamad Arif F, S.Ag., M.H.I di Kan Kemenag Kab. Malang', 19, ''),
(129, '3', 'YBS', '128', 'Surat Tugas Mengikuti Kegiatan Rakor Seksi PD Pontren Se Wilker Madiun', 'Kp.02.3', '2020-01-13', '2020-01-21', 'surat_keluar2020-01-213.pdf', 'Surat Tugas a.n Drs. Ahmad Khotib, M.Si, Sumardiono, S.E, Ridwan di Kan Kemenag Kabupaten Magetan', 19, ''),
(130, '3', 'YBS', '129', 'Surat Tugas Mengikuti Kegiatan Rapat Evaluasi KSM Porseni', 'Kp.02.3', '2020-01-14', '2020-01-21', 'surat_keluar2020-01-214.pdf', 'Surat Tugas a.n Drs. Kambali, M.Pd.I dkk (3 orang) di Novotel Surabaya Hotel & Suites', 19, ''),
(131, '3', 'YBS', '130', 'Surat Tugas Rapat Koordinasi Kebijakan Kepengawasan Tahun 2020', 'Kp.02.3', '2020-01-15', '2020-01-21', 'surat_keluar2020-01-215.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum di Hotel Borobudur Jakarta', 19, ''),
(132, '3', 'YBS', '131', 'Surat Tugas Penyelesaian Dokumen Jamaah Haji Tahun 1441H/2020M', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-216.pdf', 'Surat Tugas a.n Datik Ardiyah, S.E , Kasdar', 19, ''),
(133, '3', 'YBS', '132', 'Surat Tugas Penyelesaian Dokumen Jamaah Haji Tahun 1441H/2020M', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-217.pdf', 'Surat Tugas a.n Mochamad Arif F, S.Ag., M.H.i di Kantor Imigrasi Kelas II Madiun', 19, ''),
(134, '3', 'YBS', '133', 'Surat Tugas Undangan', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-218.pdf', 'Surat Tugas a.n Dr. Nanik Nurhayati, M.Pd di Aula Kanwil Jatim', 19, ''),
(135, '3', 'YBS', '134', 'Surat Tugas Perihal Evaluasi Progres Pelaksanaan Program MA Vokasi di Jawa Timur 2019', 'Kp.02.3', '2020-01-17', '2020-01-21', 'surat_keluar2020-01-219.pdf', 'Surat Tugas a.n Drs. Imam Tafsir, M.Pd, Zainal Arifin, S.Ag., M.Pd.I', 19, ''),
(136, '3', 'YBS', '135', 'Surat Tugas Undangan Rakor Capesun', 'Kp.02.3', '2020-01-17', '2020-01-21', 'surat_keluar2020-01-2110.pdf', 'Surat Tugas a.n Agus Romadlon, S.T di Aula Kanwil Jatim', 19, ''),
(137, '3', 'YBS', '136', 'Surat Tugas Mengikuti Kegiatan Pembinaan ASN Di Lingkungan Kemenag. Kab./Kota se Jatim', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-23.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum dan Abdul Aziz Setyo Budi di Aula Kanwil Kemenag Prov. Jatim', 19, ''),
(138, '3', 'YBS', '137', 'Surat Tugas Mengikuti Rakor Berkaitan dengan Pembinaan ASN di Lingkungan Kemenag. Kab./Kota se Jatim', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-231.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum dan Abdul Aziz Setyo Budi di Kantor Kemenag Kab. Nganjuk', 19, ''),
(139, '3', 'YBS', '138', 'Surat Tugas Mengikuti Kegiatan Manejemen Data EMIS Pondok Pesantren', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-232.pdf', 'Surat Tugas a.n Sumardiono, S.E', 19, ''),
(140, '3', 'YBS', '139', 'Surat Tugas Sosialisasi SNPDB MAN IC, MAN PK dan MAKN Tahun 2020', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-233.pdf', 'Surat Tugas a.n Drs. M. Fuad Hariri, M.Pd.I di Aula Al Ikhlas II Kemenag Prov. Jatim', 19, ''),
(141, '3', 'YBS', '140', 'Surat Tugas Rapat Teknis Rekrutmen Calon Petugas Penyelenggara Ibadah Haji Tahun 1441 H/2020 M', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-234.pdf', 'Surat Tugas a.n Mochamad Arif F., S.Ag., M.HI dan Agus Nirwana Putra, S.E di Aula Bidang PHU Kanwil Kemenag Prov. Jatim', 19, ''),
(142, '3', 'YBS', '141', 'Surat Tugas Sosialisasi POS Ujian Madrasah Tahun Pelajaran 2019/2020', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-235.pdf', 'Surat Tugas a.n Sigit Harianto, S.Pd di Ruang Aula 3 Kanwil Kemenag Prov. Jatim', 19, ''),
(143, '3', 'YBS', '142', 'Surat Tugas Pengawas Sekolah Madya Pendidikan Agama Kristen Tingkat Menengah Pada SMP dan SMA se Kota Madiun', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-236.pdf', 'Surat Tugas a.n Suswati Siwi Utami, S.Th., M.Pd.K', 19, ''),
(144, '3', 'YBS', '143', 'Surat Tugas Mengikuti Kegiatan Rakor PAIS se Wilker Madiun', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-237.pdf', 'Surat Tugas a.n Drs. Khoirul Kamami, M.HI dkk (9 Orang) di Rumah Makan Bu Setu Gandu Magetan', 19, ''),
(145, '3', 'YBS', '144', 'Surat Tugas Mengikuti Kegiatan Permintaan SPTJM BOS dan BOP Tahun 2020', 'Kp.02.3', '2020-01-22', '2020-01-31', 'surat_keluar2020-01-31.pdf', 'Surat Tugas a.n Akbar Rizki Romadhon di Kantor Kemenag Prov. Jatim', 19, ''),
(146, '3', 'YBS', '145', 'Surat Tugas Mengikuti Kegiatan Mengantar Berkas KP Periode Oktober', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-311.pdf', 'Surat Tugas a.n Siti Fatonah, S.Pd.I di Kanwil Kemenag Prov. Jatim', 19, ''),
(147, '3', 'YBS', '146', 'Surat Tugas Mengurus User ID PPK Pada Satker di Lingkungan Kemenag Kota Madiun', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-312.pdf', 'Surat Tugas a.n Eko Rudianto, S.E di Kanwil Kemenag Prov. Jatim', 19, ''),
(148, '3', 'YBS', '147', 'Surat Tugas Dinas', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-313.pdf', 'Surat Tugas a.n Milub Tri Setyowati, A.Ma di Kantor Dinas Pendidikan Prov. Jawa Timur', 19, ''),
(149, '3', 'YBS', '148', 'Surat Tugas Mengikuti Kegiatan Sosialisasi Penyelenggaraan Ujian Madrasah Tahun Pelajaran 2019/2020', 'Kp.02.3', '2020-01-29', '2020-01-31', 'surat_keluar2020-01-314.pdf', 'Surat Tugas a.n 1. Drs. Muarifin 2. Drs. Kambali, M.Pd.I 3. Sunarwan, S.Pd.I 4. Drs. M. Fuad Hariri, M.Pd.I 5. Drs. Imam Tafsir, M.Pd 6. Zainal Arifin, S.Ag., M.Pd.I di Aula 2 Kanwil Kemenag Prov. Jatim', 19, ''),
(150, '3', 'YBS', '149', 'Surat Tugas Menghadiri Undangan Koordinasi Terkait Hasil Pretest Tahun 2019, Aplikasi Siaga Tahun 2020', 'Kp.02.3', '2020-01-30', '2020-01-31', 'surat_keluar2020-01-315.pdf', 'Surat Tugas a.n Siti Nurjanah, S.Pd di Kantor Kemenag Kab. Ponorogo', 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat` int(10) NOT NULL,
  `no_agenda` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `asal_surat` varchar(250) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `indeks` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `disposisi` enum('n','y','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat`, `no_agenda`, `no_surat`, `asal_surat`, `isi`, `kode`, `indeks`, `tgl_surat`, `tgl_diterima`, `file`, `keterangan`, `id_user`, `disposisi`) VALUES
(11, 12, 'B.05', 'Kanwil', 'Undangan', 'Hm.01', 'Kw', '2002-03-07', '2019-12-30', '1577691211file_surat.jpg', 'Penting', 9, 'y'),
(12, 22, '12345', 'Kanwil', 'MPA', 'Hm.01', 'Kw', '2019-12-30', '2019-12-30', '1577696081file_surat.jpg', 'Menag', 9, 'y'),
(13, 123456, '4695664', 'Min 1', 'Permohonan pembinaan guru karyawan', '6495', '69', '2020-02-03', '2020-02-04', '1578006181file_surat.jpg', 'Siap', 1, 'y'),
(14, 1, 'B-9/Kw.13.1.2/OT.00/O1/2020', 'Kanwil Kemenag Prov. Jatim', 'Tindak Lanjut PMA Nomor 19 Tahun 2019', 'OT.00', 'Kw.13.1.2', '2020-01-03', '2020-01-03', '1578023614file_surat.PDF', 'Segera', 9, 'y'),
(15, 2, 'W15.PAS.PAS.41-UM.01.01-19', 'Balai Pemasyarakatan Kelas II Madiun', 'Permohonan Bantuan Rohaniawan', 'W15', 'PAS', '2020-01-03', '2020-01-03', '1578037661file_surat.pdf', 'Biasa', 11, 'y'),
(16, 3, 'S-5003/VVPB.16/2019', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Pengesahan Revisi Pagu Minus Tahun 2019', '5003', 'VVPB', '2019-12-26', '2020-01-06', '1578272332file_surat.pdf', 'Biasa', 11, 'y'),
(17, 4, '00000', 'Polres Madiun Kota', 'Undangan Pisah Sambut Kepala Kepolisian Resort Madiun Kota', '00', 'Und', '2019-12-31', '2020-01-06', '1578273137file_surat.pdf', 'Biasa', 11, 'y'),
(18, 5, '0000', 'Pondok Pesantren Al Mujaddadiyyah Kota Madiun', 'Jadwal Khotib Sholat Jumat dan Hari Raya', '000', 'Jdw', '2020-01-01', '2020-01-06', '1578273335file_surat.pdf', 'Biasa', 11, 'y'),
(19, 6, 'B.177/Kua.13.28.03/OT.01.2/10/2019', 'KUA Kec Taman', 'Laporan Model F dan S', '177', 'Kua', '2019-10-31', '2020-01-06', '1578282914file_surat.pdf', 'Biasa', 11, 'y'),
(20, 7, '440/28/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Permohonan menugaskan saudara Puji Prasetyo sebagai petugas doa', '440', '28', '2020-01-03', '2020-01-06', '1578283677file_surat.pdf', 'Biasa', 11, 'y'),
(21, 8, 'B.11/Kw.13.6.1/PW.01/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Permintaan Update data Penyerapan PNBP NR dan Bimwin Triwulan I s.d Triwulan IV Tahun 2019', '11', 'Kw', '2020-01-03', '2020-01-06', '1578284497file_surat.pdf', 'b', 11, 'y'),
(22, 9, 'B.10/Kw.13.6.1/PW.01/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Edaran aplikasi E-Dupak Penghulu', '10', 'Kw', '2020-01-03', '2020-01-06', '1578284659file_surat.pdf', 'Biasa', 11, 'y'),
(23, 10, '000', 'MIN 1 Kota Madiun', 'Surat Perpanjangan Kontrak GTT/PTT MIN 1 Kota Madiun', '00', 'Lmr', '2020-01-03', '2020-01-06', '1578284994file_surat.pdf', 'Biasa', 11, 'y'),
(24, 11, 'S.5164/VVPB.16/2019', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Pengesahan Revisi Pagu Minus Thn 2019', '5164', 'VVPB', '2019-12-27', '2020-01-06', '1578292016file_surat.pdf', 'Biasa', 11, 'y'),
(25, 12, 'B.26/Kk.13.14/3/PP.00.8/01/2020', 'Kementerian Agama Kabupaten Magetan', 'Undangan Rakor Seksi PD Pontren se Wilker Madiun', '26', 'Kk', '2020-01-07', '2020-01-07', '1578381339file_surat.pdf', 'Biasa', 11, 'y'),
(26, 13, 'B.6568/Kw.13.1.2/Kp.09/11/2019', 'Kementerian Agama Provinsi Jawa Timur', 'Pemberitahuan Usul Pensiun', '6568', 'Kw.13.1.2', '2020-01-26', '2020-01-08', '1578446756file_surat.pdf', 'Biasa', 9, 'y'),
(27, 14, '000', 'MIN 2 Kota Madiun', 'Surat Perpanjangan Kontrak GTT/PTT MIN 1 Kota Madiun', '00', 'Prj', '2019-12-20', '2020-01-08', '1578447982file_surat.pdf', 'Biasa', 11, 'y'),
(28, 15, 'B-94/Kw.13.1.2/Kp.07.1/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Ketentuan Penyampaian Penilaian Prestasi Kerja PNS', 'Kp.07.1', 'Kw.13.1.2', '2020-01-07', '2020-01-08', '1578452643file_surat.PDF', 'Segera', 9, 'y'),
(29, 16, 'B-028/Kk.13.17.1/Hm.00/01/2020', 'Kemenag Kab Tuban', 'Permohonan Nara Sumber', 'Hm.00', 'Kk.13.17.1', '2020-01-07', '2020-01-08', '1578452973file_surat.pdf', 'Penting', 9, 'y'),
(30, 17, 'B.97/Kw.13.1.2/OT.00/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Tindak Lanjut Pasca Terbitnya PMA Nomor 19 Tahun 2019', 'OT.00', 'Kw.13.1.2', '2020-01-08', '2020-01-08', '1578453217file_surat.PDF', 'Segera', 9, 'y'),
(31, 18, 'B-100/Kw.13.1.2/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Undangan Rakor Sinergi Pemerintahan Prov. Jawa Timur Tahun 2020', 'Kp.02.3', 'Kw.13.1.2', '2020-01-08', '2020-01-08', '1578453397file_surat.PDF', 'Segera', 9, 'y'),
(32, 19, '893/25/401.205/2020', 'Badan Kesatuan Bangsa Dan Politik', 'Permohonan Personil Tim Kewaspadaan Dini Kota Madiun', '893', '25', '2020-01-08', '2020-01-08', '1578469349file_surat.pdf', 'Biasa', 11, 'y'),
(33, 20, 'B.0030/In.32.1/HM.01/01/2020', 'IAIN Ponorogo', 'Permohonan Penyelenggaraan Workshop Peningkatan Kapasitas Guru BK dan Sosialisasi SPAM-UM PTKIN 2020', '0030', 'In.32.1', '2020-01-02', '2020-01-08', '1578530721file_surat.pdf', 'Biasa', 11, 'y'),
(34, 21, '269/PRA/Sosialisasi-Haji/I/2020', 'PT.Pusat  Riyal Amanah', 'Sosialisasi Kantong Kencing', '269', 'PRA', '2020-01-02', '2020-01-09', '1578536630file_surat.pdf', 'Biasa', 9, 'y'),
(35, 22, '043/POKJAWAS-PAK/01/2019', 'POKJAWAS PAK Provinsi Jawa Timur', 'Undangan Rapat Rutin', 'PAK', 'Pokjawas', '2020-01-07', '2020-01-09', '1578554932file_surat.pdf', 'Biasa', 9, 'y'),
(36, 23, 'B-023/Mi.13.28.01/PP.00.04/01.2020', 'MIN 1 Kota Madiun', 'Undangan Peresmian PTSP MIN 1 Kota Madiun', 'PP', 'Mi.13.28.01', '2020-01-09', '2020-01-10', '1578617598file_surat.pdf', 'Biasa', 11, 'y'),
(37, 24, '000', 'Saksi-saksi Yehuwa Sidang Madiun', 'Laporan Bulanan Kegiatan Peribadatan Saksi-saksi Yehuwa', '000', 'Lap', '2020-01-01', '2020-01-09', '1578625352file_surat.pdf', 'Biasa', 11, 'y'),
(38, 25, 'Peng.YPLI/KP.1.c/122/XII/2019', 'Yayasan Pembina Lembaga Islamiyah', 'SK Yayasan Pembina Lembaga Islamiyah Kota Madiun', 'KP', 'YPLI', '2019-12-31', '2020-01-10', '1578639928file_surat.pdf', 'Biasa', 11, 'y'),
(39, 26, 'Peng.YPLI/KP.9ec/123/XII/2019', 'Yayasan Pembina Lembaga Islamiyah', 'SK Pengurus Yayasan Pembina Lembaga Islamiyah Kota Madiun', 'KP', 'YPLI', '2020-01-04', '2020-01-10', '1578640041file_surat.pdf', 'Biasa', 11, 'y'),
(40, 27, 'B-157/Kw.13.6.1/PW.01/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Permintaan Data Tunggakan Jasa Profesi dan Transport PNBP NR Tahun 2019', 'PW.01', 'Kw.13.6.1', '2020-01-10', '2020-01-13', '1578880859file_surat.pdf', 'Penting', 11, 'y'),
(41, 28, '01/TPQ/TPA/FU/XII/2020', 'TPA Al Muttaqin', 'Izin Pendirian Taman Pendidikan Al Qur an Tahun 2020', 'TPA', 'TPA', '2020-01-01', '2020-01-13', '1578881314file_surat.pdf', 'Biasa', 9, 'y'),
(42, 29, 'B-10/DJ.I.IV/HM.01.1/01/2020', 'Dirjend Pendidikan Islam', 'Hasil Seleksi Akademik Calon Peserta PPG 2019', 'HM.01.1', 'DJ.I.IV', '2020-01-03', '2020-01-13', '1578883009file_surat.pdf', 'Biasa', 9, 'y'),
(43, 30, '03/PanNatalPelajar/I/2019', 'Panitia Perayaan Natal Pelajar Kristen tingkat SMP,SMA dan SMK', 'Perayaan Natal Pelajar Kristen tingkat SMP,SMA dan SMK', 'PanNatal', '03', '2019-12-28', '2020-01-13', '1578885126file_surat.pdf', 'Biasa', 9, 'y'),
(44, 31, '906/BAZNAS/Mn./XI/2019', 'BAZNAS Kota Madiun', 'Feed Back Penerimaan dan Pentasyarufan Zakat Maal, Infaq dan Shodaqoh', 'baznas', 'baznas', '2019-11-29', '2020-01-13', '1578890312file_surat.pdf', 'Penting', 9, 'y'),
(45, 32, 'W15.PAS.PAS.3-PK.01.05.06-03', 'LAPAS Kelas 1 Madiun', 'Permohonan Tenaga Penyuluh dan Khotib Sholat Jum\'at', 'pas', 'pas.3', '2020-01-02', '2020-01-13', '1578890517file_surat.pdf', 'Penting', 9, 'y'),
(46, 33, 'B-175/Kw.13.2.5/HM.01/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Launching Kerjasama Kanwil Kemenag Prov Jatim dengan Infradigital Nusantara', 'HM.01', 'Kw.13.2.5', '2020-01-10', '2020-01-14', '1578967006file_surat.pdf', 'Segera', 9, 'y'),
(47, 34, 'B-238/Kw.13.7.1/BA.00/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Evaluasi Hasil Rekruitmen Penyuluh Agama Islam Non PNS Masa Bakti Tahun 2020-2024', 'BA.00', 'Kw.13.7.1', '2020-01-13', '2020-01-14', '1578971977file_surat.pdf', 'Segera', 9, 'y'),
(48, 35, '443.33/109/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Undangan Persiapan Pemeriksaan Kesehatan Jemaah Haji 2020', '401.103', '109', '2020-01-13', '2020-01-14', '1578988899file_surat.pdf', 'Biasa', 11, 'y'),
(49, 36, 'B-260/Kw.13.3.2/PP.00.8/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Ujian Satuan Pendidikan PK PPS Tapel 2019/2020', 'PP.00.8', 'Kw.13.3.2', '2020-01-14', '2020-01-14', '1578989140file_surat.pdf', 'Segera', 9, 'y'),
(50, 37, 'B-189/Kw.13.1.1/KU.00.2/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyusunan Perencanaan dan Anggaran Sekjend TA 2021', 'KU.00.2', 'Kw.13.1.1', '2020-01-13', '2020-01-15', '1579054684file_surat.pdf', 'Segera', 9, 'y'),
(51, 38, 'B-6/IJ/PS.00.6/01/2020', 'Inspektorat Jenderal', 'Undangan Rapat Koordinasi Kebijakan Pengawasan Tahun 2020', 'PS.00.6', 'IJ', '2020-01-06', '2020-01-15', '1579055402file_surat.pdf', 'Penting', 11, 'y'),
(52, 39, 'S-08/WPB.16/KP.07/2020', 'KPPN Madiun', 'Pembayaran Uang Persediaan pada Awal Tahun Anggaran 2020', 'KP.07', 'WPB.16', '2020-01-08', '2020-01-15', '1579072368file_surat.pdf', 'Segera', 9, 'y'),
(53, 40, 'UM.002/2/15/PPIM2020', 'Polteknik Perkeretaapian Indonesia', 'Permohonan Khatib Jum at Ustad/Penceramah Pembimbing Rohani Non Islam Taruna/i PPI Madiun', 'ppi', 'ppi', '2020-01-14', '2020-01-15', '1579072561file_surat.pdf', 'Segera', 9, 'y'),
(54, 41, 'B-292/Kw.13.2.2/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyampaian Juknis Pelaksanaan Pembayaran Tukin Guru PNS pada Madrasah', 'Kp.02.3', 'Kw.13.2.2', '2020-01-15', '2020-01-15', '1579073031file_surat.pdf', 'Segera', 9, 'y'),
(55, 42, 'Und-1/WPB.16/KP.07/2020', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Undangan Sosialisasi Langkah-langkah Strategis Pelaksanaan Anggaran Tahun 2020 dan Pengginaan Virtual Account', 'KP.07', 'WPB.16', '2020-01-13', '2020-01-16', '1579145748file_surat.pdf', 'Biasa', 11, 'y'),
(56, 43, '005/138/401.101/2020', 'Dinas Pendidikan', 'Undangan Kegiatan Pelaksanaan Uji Coba USBN', '401.101', '005', '2020-01-14', '2020-01-16', '1579146154file_surat.PDF', 'Penting', 9, 'y'),
(57, 44, '100/90/401.403/2020', 'Sekretariat Daerah Kota Madiun', 'Permohonan Data Penyusunan Buku Kecamatan Dalam Angka Tahun 2019', '401.403', '90', '2020-01-10', '2020-01-16', '1579146897file_surat.pdf', 'Biasa', 11, 'y'),
(58, 45, '030/Mts.13.28.01/PP.00.5/01/2020', 'MTsN Kota Madiun', 'Permohonan Penerbitan SK Waka Periode 2020-2021', 'PP.00.5', 'Mts.13.28.01', '2020-01-15', '2020-01-15', '1579147863file_surat.pdf', 'Biasa', 9, 'y'),
(59, 46, 'B.323/Kw.13.1.2/Kp.07.1/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyampaian Usul Kenaikan Pangkat Periode April 2020', 'Kp.07.1', 'Kw.13.1.2', '2020-01-16', '2020-01-16', '1579148890file_surat.PDF', 'Segera', 9, 'y'),
(60, 47, 'B-295/SJ/B.I.1/KP.07.6/01/2020', 'Sekretariat Jenderal', 'Usul Jabatan Fungsional Perencana Hasil Inpassing', 'KP.07.6', 'SJ', '2020-01-14', '2020-01-16', '1579149134file_surat.PDF', 'Segera', 9, 'y'),
(61, 48, 'B-    /Kw.13.4/KP.02.3/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Penyelenggaraan USBN PAI', 'KP.02.3', 'Kw.13.4', '2020-01-16', '2020-01-16', '1579162460file_surat.pdf', 'Biasa', 11, 'y'),
(62, 49, 'B.696/Ma.13.28.02/015/MILAD M2KM/I/2020', 'Panitia Pekan Milad MAN 2 Kota Madiun', 'Undangan Opening Ceremony', '015', 'Ma.13.28.02', '2020-01-14', '2020-01-17', '1579227174file_surat.pdf', 'Biasa', 11, 'y'),
(63, 50, 'B.037/Mi.13.28.01/PP.00.04/01/2020', 'MIN 1 Kota Madiun', 'Undangan Wisuda Tartil dan Tahfidz Al Qur\'an', 'PP.00.04', 'Mi.13.28.01', '2020-01-16', '2020-01-17', '1579230424file_surat.pdf', 'Biasa', 11, 'y'),
(64, 51, '00000', 'Dompet Dhuafa', 'Program Bina Santri', '000', 'DD', '2020-01-16', '2020-01-20', '1579485453file_surat.pdf', 'Biasa', 11, 'y'),
(65, 52, '02/Skr/PKK.Kot/I/2020', 'PKK Kota Madiun', 'Permohonan Draf Program Kerja Tahun 2021', 'PKK.Kot', 'Skr', '2020-01-07', '2020-01-20', '1579486327file_surat.pdf', 'Segera', 11, 'y'),
(66, 54, 'B-346/Kw.13.6.1/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penghulu KUA Kecamatan Tahun 2020', 'Kp.02.3', 'Kw.13.6.1', '2020-01-17', '2020-01-20', '1579486593file_surat.PDF', 'Penting', 9, 'y'),
(67, 53, 'Mi.13.35.53/159/I/2020', 'MI Terpadu Bakti Ibu', 'Permohonan Rekomendasi PPDB 2020/2021', '159', '13.35.53', '2020-01-17', '2020-01-20', '1579486598file_surat.pdf', 'Biasa', 11, 'y'),
(68, 55, '411/10/401.104/2020', 'Dinsos PP dan PA Kota Madiun', 'Persiapan Penilaian Kota Layak Anak (KLA)', '401.101', '411', '2020-01-17', '2020-01-20', '1579488385file_surat.PDF', 'Penting', 9, 'y'),
(69, 56, '2511/Dt.I.IV/HM.01.1/1/2020', 'Dirjend Pendidikan Islam', 'Pemberitahuan Tentang Penyelenggaraan USBN PAI pada Sekolah', 'HM.01.1', 'Dt.I.IV', '2020-01-15', '2020-01-20', '1579488582file_surat.PDF', 'Penting', 9, 'y'),
(70, 57, 'CV.00', 'CV Surya Mustika Motor', 'Pengajuan Servis Murah Motor Honda', 'cv', 'cv', '2020-01-17', '2020-01-20', '1579489007file_surat.PDF', 'Biasa', 9, 'y'),
(71, 58, 'B-388/Kw.13.4.3/HM.01.1/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Rapat Koordinasi Pendidikan Agama Islam', 'HM.01.1', 'Kw.13.4.3', '2020-01-17', '2020-01-20', '1579489264file_surat.pdf', 'Segera', 11, 'y'),
(72, 59, '040/MI/PPDB/I/20.5.00/2020', 'MI Al Irsyad Kota Madiun', 'Permohonan Rekomendasi PPDB', 'PPDB', 'PPDB', '2020-01-20', '2020-01-20', '1579492032file_surat.PDF', 'Biasa', 9, 'y'),
(73, 60, '005/110/401.023/2020', 'Sekretariat Daerah', 'Undangan Yasiinan', '401.023', '005', '2020-01-13', '2020-01-20', '1579494050file_surat.PDF', 'Segera', 9, 'y'),
(74, 61, '451/116/401.023/2020', 'Sekretariat Daerah', 'Permohonan untuk Memberikan Ceramah Agama', '401.023', '451', '2020-01-13', '2020-01-20', '1579494407file_surat.PDF', 'Segera', 9, 'y'),
(75, 62, 'B-19/Ma.13.28.2/HM.01/01/2020', 'MAN 2 Kota Madiun', 'Undangan Kegiatan Program MA Vokasi Terpadu', 'HM.01', 'Ma.13.28.2', '2020-01-18', '2020-01-21', '1579570213file_surat.pdf', 'Penting', 11, 'y'),
(76, 63, '03/Ra.Pwd/01/2020', 'RA Perwanida Demangan', 'Permohonan Dana Bantuan Honorarium Guru', 'Ra.Pwd', 'Ra.Pwd', '2020-01-06', '2020-01-21', '1579570596file_surat.PDF', 'Biasa', 9, 'y'),
(77, 64, '460.1/12/107.6.27/2020', 'Dinas sosial UPT Rehabilitasi Sosial Bina Karya Madiun', 'Permohonana Instriktur Bimbingan Agama Islam', '107.6.27', '12', '2020-01-17', '2020-01-21', '1579571323file_surat.pdf', 'Segera', 11, 'y'),
(78, 65, '420/238/101.1/2020', 'Dinas Pendidikan', 'Pelaksanaan Gladi Bersih UNBK', '101.1', '238', '2020-01-13', '2020-01-21', '1579575352file_surat.pdf', 'Penting', 11, 'y'),
(79, 66, '460.1/12/107.6.27/2020', 'UPT Rehabilitasi Sosial Bina Karya Madiun', 'Permohonan Instruktur Bimbingan Agama Islam', '107.6.27', '460.1', '2020-01-17', '2020-01-21', '1579575536file_surat.pdf', 'Segera', 9, 'y'),
(80, 66, 'b.436/Kw.13.1.2/Kp.06/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Kegiatan Pembinaan ASN', 'Kp.06', 'Kw.13.1.2', '2020-01-20', '2020-01-21', '1579575602file_surat.pdf', 'Segera', 11, 'y'),
(81, 67, '443.32/155/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Jadwal Pemeriksaan Kesehatan Kedua Jemaah Haji Th 2020', '401.103', '155', '2020-01-20', '2020-01-21', '1579577832file_surat.pdf', 'Penting', 11, 'y'),
(82, 68, 'S.2060/WPJ.24/KP.06/2020', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur KPPN Madiun', 'Himbauan Penerbitan Bukti Pemotongan PPh Pasal 21 / 1721-A2 dan Penyampaian SPT Tahunan Secara Elektronik', 'KP.06', 'WPJ.24', '2020-01-10', '2020-01-21', '1579580658file_surat.pdf', 'Segera', 11, 'y'),
(83, 69, 'S-56/WKN.10/KNL.06/2020', 'Kementerian Keuangan Republik Indonesia KPKNL', 'Laporan Pengawasan dan Pengendalian Barang Milik Negara', 'KNL.06', 'WKN.10', '2020-01-16', '2020-01-21', '1579587872file_surat.pdf', 'Segera', 11, 'y'),
(84, 70, 'B-438/Kw.13.5.2/Hj.02/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Rapat Teknis Rekrutmen Calon Petugas Penyelenggara Ibadah Haji Tahun 1441H/2020', 'Hj.02', 'w.13.5.2', '2020-01-20', '2020-01-21', '1579592373file_surat.pdf', 'Segera', 11, 'y'),
(85, 71, 'B-505/Kw.13.2.1/PP.01/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Sosialisasi POS Ujian Madrasah Tahun Pelajaran 2019/2020', 'PP.01', 'Kw.13.2.1', '2020-01-21', '2020-01-22', '1579657378file_surat.pdf', 'Segera', 11, 'y'),
(86, 72, '440/202/401.103/2020', 'Dinkes dan KB', 'Profil Kependudukan Kota Madiun Tahun 2018', '401.103', '440', '2020-01-22', '2020-01-22', '1579675084file_surat.pdf', 'Biasa', 9, 'y'),
(87, 73, 'B-121/Kk.1314.4/HM.01/01/2020', 'Kemenag Kab Magetan', 'Undangan Rapat Koordinasi PAI', 'HM.01', 'Kk.13.14.4', '2020-01-21', '2020-01-22', '1579679006file_surat.pdf', 'Segera', 9, 'y'),
(88, 74, '34/Mi.13.28.2/PP.00.01/1/2020', 'MIN 2 Kota Madiun', 'Permohonan Surat Pengantar', 'PP.00.01', 'Mi.13.28.2', '2020-01-23', '2020-01-23', '1579743894file_surat.pdf', 'Penting', 9, 'y'),
(89, 75, 'B-25/Mi.13.28.2/PP.00.01/1/2020', 'MIN 2 kota Madiun', 'Usulan Penilaian Angka Kredit (PAK) Kenaikan Pangkat', 'PP.00.01', 'Mi.13.28.2', '2020-01-21', '2020-01-22', '1579744333file_surat.pdf', 'Segera', 11, 'y'),
(90, 76, '440/41/401.103.2/2020', 'Dinas Kesehatan Dan Keluarga Berencana UPTD Puskesmas Demangan', 'Pelaksanaan Skrining', '103.2', '41', '2020-01-14', '2020-01-23', '1579744978file_surat.pdf', 'Segera', 11, 'y'),
(91, 77, 'B-25/Ma.13.28.02/PP.00.6/01', 'MAN 2 Kota Madiun', 'Permohonan Surat Pengantar Dispensasi PPDB 2020-2021', 'PP.00.6', 'Ma.13.28.02', '2020-01-22', '2020-01-23', '1579746068file_surat.pdf', 'Segera', 11, 'y'),
(92, 78, '7316/Kw.13.1.4/HM.01/12/2019', 'Kanwil Kemenag Prov. Jatim', 'Surat Pengantar Kalender', 'HM.01', 'Kw.13.1.4', '2020-01-20', '2020-01-23', '1579747599file_surat.pdf', 'Biasa', 9, 'y'),
(93, 79, 'B-571/Kw.13.6.2/PW.01/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Edaran Buku Nikah', 'PW.01', 'Kw.13.6.2', '2020-01-23', '2020-01-23', '1579748672file_surat.pdf', 'Segera', 11, 'y'),
(94, 80, '001/M/PP Al-Hikmah/I/2020', 'Pondok Pesantren Al Hikmah', 'Permohonan Bantuan Al-Qur\'an', 'PP Al-Hikmah', 'M', '2020-01-22', '2020-01-23', '1579753554file_surat.pdf', 'Biasa', 11, 'y'),
(95, 81, '005/BWI/P-BWI/2020', 'Badan Wakaf Indonesia', 'Penetapan Pengurus Perwakilan BWI Kota Madiun', 'BWI', 'BWI', '2020-01-17', '2020-01-23', '1579763204file_surat.pdf', 'Biasa', 9, 'y'),
(96, 82, '0000', 'Yolanda Selviana', 'Lamaran Pekerjaan', '00', '000', '2020-01-24', '2020-01-24', '1579838056file_surat.pdf', 'Biasa', 11, 'y'),
(97, 83, '05/PAN MILAD MIN1/02/2020', 'MIN 1 Kota Madiun', 'Permohonan Sponsorship MIN 1', 'Min1', 'Min1', '2020-01-22', '2020-01-24', '1579852357file_surat.pdf', 'Biasa', 9, 'y'),
(98, 84, '073/Ma.13.28.01/01/2020', 'MAN 1 Kota Madiun', 'Undangan Peresmian PTSP MAN 1 Kota Madiun', 'MAN1', 'Ma.13.28.01', '2020-01-27', '2020-01-27', '1580093082file_surat.pdf', 'Segera', 11, 'y'),
(99, 85, '33/100.02-35.77/I/2020', 'Kantor Pertanahan Kota Madiun', 'Permohonan Bantuan Tenaga Pengukuhan Sumpah', 'bpn', 'bpn', '2020-01-27', '2020-01-27', '1580108570file_surat.pdf', 'Segera', 9, 'y'),
(100, 86, 'B-101/Kk.13.02.4/HM.01/01/2020', 'Kemenag Kab Ponorogo', 'Ralat Undangan', 'HM.01', 'Kk.13.02.4', '2020-01-20', '2020-01-28', '1580178991file_surat.pdf', 'Segera', 9, 'y'),
(101, 87, 'B-613/Kw.13.4.3/HM.01/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Pemberitahuan', 'HM.01', 'Kw.13.4.3', '2020-01-27', '2020-01-28', '1580179648file_surat.pdf', 'Segera', 9, 'y'),
(102, 88, '041/58/401.115/2020', 'Dinas Perpustakaan dan Kearsipan Kota Madiun', 'Kesediaan Pelayanan Mobil Perpustakaan Keliling', '401.115', '041', '2020-01-22', '2020-01-28', '1580182266file_surat.pdf', 'Penting', 9, 'y'),
(103, 89, '041/68/401.115/2020', 'Dinas Perpustakaan dan Kearsipan Kota Madiun', 'Rapat Koordinasi Akreditasi Perpustakaan', '401.115', '041', '2020-01-24', '2020-01-28', '1580182634file_surat.pdf', 'Segera', 9, 'y'),
(104, 90, '41/Mi.13.28.2/PP.00.01/01/2020', 'MIN 2 Kota Madiun', 'Undangan Peresmian PTSP MIN2', 'PP.00.01', 'Mi.13.28.2', '2020-01-27', '2020-01-28', '1580194693file_surat.pdf', 'Segera', 9, 'y'),
(105, 91, 'B.679/kw.13.1.2/Kp.07.6/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'SE Setjen Nomor 03 Tahun 2020 Tentang Sertifikasi Jabatan Fungsional Arsiparis', 'Kp.07.6', 'Kw.13.1.2', '2020-01-28', '2020-01-29', '1580268525file_surat.pdf', 'Segera', 11, 'y'),
(106, 92, 'B.506/Kw.13.1/2/OT.01.2/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Laporan Kinerja (LKj) Instansi Pemerintah Tahun 2019', 'OT.01.2', 'Kw.13.1', '2020-01-21', '2020-01-29', '1580269605file_surat.pdf', 'Segera', 11, 'y'),
(107, 93, 'B.060/Mts.13.28.1/Hm.01/01/2020', 'MTsN Kota Madiun', 'Permohonan membuka Pekan Milad', 'Hm.01', 'Mts.13.28.1', '2020-01-29', '2020-01-29', '1580272486file_surat.pdf', 'Penting', 11, 'y'),
(108, 94, 'B.819/BdI.07/Kp.02.1/01/2020', 'Balai Diklat Surabaya Kemenag RI', 'Dokumentasi Hasil Seminar Aktualisasi Pelatihan Dasar CPNS Kementerian Agama Th. 2019', 'Kp.02.1', 'BdI.07', '2020-01-29', '2020-01-29', '1580280419file_surat.pdf', 'Penting', 11, 'y'),
(109, 95, '014/YPB-U/I/2020', 'Yayasan Panti Bagija', 'Permohonan Rohaniwan Agama Islam, Kristen dan Katolik untuk pengukuhan sumpah', 'YPB', 'YPB', '2020-01-29', '2020-01-29', '1580280733file_surat.pdf', 'Segera', 11, 'y'),
(110, 96, 'B.006/MENWA/LPBB/853/I/2020', 'Wira Sajjana Veda UNIPMA', 'Tembusan Permohonan Rekomendasi', 'LPBB', 'Menwa', '2020-01-16', '2020-01-29', '1580356015file_surat.pdf', 'Biasa', 9, 'y'),
(111, 97, 'S-4649/WPJ.24/KP.06/2020', 'Kantor Pelayanan Pajak Pratama Madiun', 'Tembusan Permintaan Data Duta e-Filing', 'KP.06', 'WPJ.24', '2020-01-28', '2020-01-30', '1580356254file_surat.pdf', 'Segera', 1, 'y'),
(112, 98, '050/340/401.204/2020', 'Sekretariat Daerah Kota Madiun', 'Permintaan data percepatan perencanaan pembangunan daerah dan indikator statistik sektoral utama', '401.204', '340', '2029-04-01', '2031-04-01', '1580441852file_surat.pdf', 'Segera.', 1, 'y'),
(113, 99, '5/Kw.13.5.2/Hj.02/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Pengawas Rekrutmen Calon Petugas Penyelenggara Ibadah Haji', 'Hj.02', 'Kw.13.5.2', '2030-04-01', '1931-05-30', '1580458222file_surat.pdf', 'Penting,.', 1, 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id_histori`),
  ADD UNIQUE KEY `id_user` (`id_histori`);

--
-- Indexes for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `m_satuan`
--
ALTER TABLE `m_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `pengajuan_arsip`
--
ALTER TABLE `pengajuan_arsip`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengajuan_surat_masuk`
--
ALTER TABLE `pengajuan_surat_masuk`
  ADD PRIMARY KEY (`id_pengajuan_s`);

--
-- Indexes for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id_histori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672;

--
-- AUTO_INCREMENT for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  MODIFY `id_jenis` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `m_satuan`
--
ALTER TABLE `m_satuan`
  MODIFY `id_satuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan_arsip`
--
ALTER TABLE `pengajuan_arsip`
  MODIFY `id_pengajuan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengajuan_surat_masuk`
--
ALTER TABLE `pengajuan_surat_masuk`
  MODIFY `id_pengajuan_s` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
