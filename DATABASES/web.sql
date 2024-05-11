-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `email`, `password`) VALUES
(1, 'andikapsw30@gmail.com', 'adm123456'),
(2, '11111111@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangbus`
--

CREATE TABLE `datapenumpangbus` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `kursi` varchar(10) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketbus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenumpangbus`
--

INSERT INTO `datapenumpangbus` (`id_datapenumpang`, `jenis_kelamin`, `nama_lengkap`, `no_hp`, `email`, `usia`, `kursi`, `id_pengguna`, `id_jadwaltiketbus`) VALUES
(1, 'LAKI', 'ANDIKA FIKRI AZHARI', '08765654', 'andikapsw3@gmail.com', 22, '12', 24, 3),
(2, 'lklk', 'dika', '083633535', 'bismillah@gmail.com', 22, '12', 4, 4),
(9, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 22, 'K2', 8, 3),
(10, 'Nyonya', 'Nida aqila azzhara', '08756654654', 'minato828g@gmail.com', 22, 'A5', 8, 3),
(11, 'Tuan', 'muh yususf', '08765465434', 'admin@dkamondshop.com', 22, 'A5', 23, 3),
(12, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', 22, 'A5', 51, 6),
(13, 'Tuan', 'vfghb', '08765654', 'mark.wahlberg@example.com', 22, 'A6', 23, 5),
(14, 'Tuan', 'vfghb', '08765654', 'mark.wahlberg@example.com', 22, 'A6', 23, 5),
(15, 'Nyonya', 'vfghb3rtt', '08765654', 'mark.wahlberg@example.com', 22, '', 23, 5),
(16, 'Nyonya', 'vfghb3rttgfdsa', '08765654', 'mark.wahlberg@example.com', 22, '', 23, 5),
(17, 'Nyonya', 'vfghb3rttgfdsa22', '08765654222', 'mark.wahlberg@example.com', 22, '', 23, 5),
(18, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(19, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(20, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(21, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(22, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(23, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(24, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(25, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(26, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(27, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(28, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(29, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(32, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(33, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(34, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(35, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(36, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(37, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(38, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(39, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(40, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(41, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(42, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(43, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(44, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(45, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(46, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(47, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(48, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(49, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(50, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(51, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(52, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(53, 'Nyonya', 'vfghb3rttgfdsa22222222', '08765654222', 'mark.wahlberg@example.com', 22, 'A3', 23, 5),
(54, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(55, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(56, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(57, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(58, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(59, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(60, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(61, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(62, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(63, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(64, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(65, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(66, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(67, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(68, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 11, '', 23, 5),
(69, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(70, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(71, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(72, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(73, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(74, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(75, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(76, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(77, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(78, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(79, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(80, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(81, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(82, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(83, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(84, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(85, 'Tuan', 'm hafid', '085467y7445', 'mark.wahlberg@example.com', 18, 'A6', 15, 5),
(86, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(87, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(88, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(89, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(90, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(91, 'Tuan', 'vfbfdfgfd', '086687654', 'admin@menorigaming.com', 22, 'K5', 15, 5),
(92, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(93, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(94, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(95, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(96, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(97, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(98, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(99, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(100, 'Tuan', 'vfbfdfgfd2dss', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(104, 'Tuan', 'aman', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(105, 'Tuan', 'aman', '086687654', 'admin@menorigaming.com', 22, 'A3', 15, 5),
(106, 'Tuan', 'aman', '086687654', 'admin@menorigaming.com', 22, '', 15, 5),
(107, 'Tuan', 'aman', '086687654', 'admin@menorigaming.com', 22, '', 15, 5),
(108, 'Tuan', 'aman', '086687654', 'admin@menorigaming.com', 22, '', 15, 5),
(109, 'Tuan', 'Amin', '078765432345', 'mark.wahlberg@example.com', 22, 'A4', 15, 5),
(110, 'Tuan', 'cuku', '07876543', 'mark.wahlberg@example.com', 33, 'A4', 15, 5),
(111, 'Tuan', 'cuku', '07876543', 'mark.wahlberg@example.com', 33, 'A4', 15, 5),
(112, 'Tuan', 'cuku', '07876543', 'mark.wahlberg@example.com', 33, 'A4', 15, 5),
(113, 'Tuan', 'cuku', '07876543', 'mark.wahlberg@example.com', 33, 'A4', 15, 5),
(114, 'Tuan', 'cuku', '07876543', 'mark.wahlberg@example.com', 33, 'A4', 15, 5),
(115, 'Tuan', 'cukuP', '07876543', 'mark.wahlberg@example.com', 33, 'A5', 15, 5),
(116, 'Tuan', 'BUKU', '087656776', 'jennifer.lawrence@example.com', 22, 'A4', 15, 5),
(117, 'Tuan', 'BUKUf', '087656776', 'jennifer.lawrence@example.com', 22, 'A7', 15, 5),
(118, 'Nyonya', 'BUKUf1', '087656776', 'jennifer.lawrence@example.com', 22, 'A9', 15, 5),
(119, 'Tuan', 'Ahmad Husaini', '0842343234', 'andikapsw30@gmail.com', 22, 'A7', 9, 5),
(120, 'Tuan', 'Ahmad Husaini mALIK', '0842343234', 'andikapsw30@gmail.com', 22, 'A5', 9, 5),
(121, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 22, 'A5', 9, 5),
(122, 'Tuan', 'Nida aqila azzhara', '085434543', 'jennifer.lawrence@example.com', 22, 'A1', 9, 5),
(123, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 33, 'A4', 9, 5),
(124, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 22, 'K10', 9, 7),
(125, 'Tuan', 'bukum', '0876545654', 'jennifer.lawrence@example.com', 22, 'A7', 9, 7),
(126, 'Tuan', 'bukuj', '089507832333', 'mark.wahlberg@example.com', 22, 'K2', 9, 7),
(127, 'Tuan', 'aMIN ', '0846446464', 'mark.wahlberg@example.com', 22, 'A2', 51, 8),
(128, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', 22, 'A3', 8, 9),
(129, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 22, '', 17, 10),
(130, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'minato828g@gmail.com', 22, 'K5', 8, 11),
(131, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 22, 'K2', 8, 11),
(132, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 22, 'K2', 51, 13),
(133, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'admin@menorigaming.com', 22, 'K5', 52, 13),
(134, 'Tuan', 'Andika Fikri Azhari', '089507832333', 'mark.wahlberg@example.com', 22, 'K2', 52, 13);

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangkapal`
--

CREATE TABLE `datapenumpangkapal` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketkapal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangkereta`
--

CREATE TABLE `datapenumpangkereta` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapenumpangpesawat`
--

CREATE TABLE `datapenumpangpesawat` (
  `id_datapenumpang` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_bus`
--

CREATE TABLE `jadwal_tiket_bus` (
  `id_jadwaltiketbus` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `terminal_keberangkatan` varchar(100) DEFAULT NULL,
  `terminal_kedatangan` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendorbus` int(11) DEFAULT NULL,
  `status_jadwal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_bus`
--

INSERT INTO `jadwal_tiket_bus` (`id_jadwaltiketbus`, `waktu_keberangkatan`, `waktu_kedatangan`, `terminal_keberangkatan`, `terminal_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendorbus`, `status_jadwal`) VALUES
(3, '2024-04-25 06:48:14', '2024-04-13 08:48:14', 'Terminal Pulogadung', 'Terminal Kp Rambutan', '20', 'Ekonomi', 40, 'fdsssddddccccccccc', 2, 'Arrived'),
(4, '2024-04-13 07:07:03', '2024-04-14 07:07:03', 'Terminal Cibubur', 'Terminal Cibubur', '10000', 'Ekonomi', 222, 'breefgdbbfdbg', 3, 'Arrived'),
(5, '2024-04-14 10:15:00', '2024-04-16 11:18:00', 'Terminal Kampung Rambutan', 'Terminal Bintaro', '25000', 'Bisnis', 33, 'DFGHCGFF', 2, 'Arrived'),
(6, '2024-04-14 17:20:00', '2024-04-14 23:19:00', 'Terminal Kampung Rambutan', 'Terminal Bintaro', '245', 'Ekonomi', 40, 'BGUHGFDS', 2, 'Arrived'),
(7, '2024-04-15 11:20:00', '2024-04-16 12:20:00', 'Terminal Cibubur', 'Terminal Cikokol', '50000', 'Ekonomi', 40, 'nnbdfbnb', 2, 'Arrived'),
(8, '2024-04-17 10:25:00', '2024-04-17 23:28:00', 'Terminal Bintaro', 'Terminal Kp Rambutan', '25000', 'Ekonomi', 30, 'GHJWIDFDJDFJDIF', 2, 'Arrived'),
(9, '2024-05-02 18:42:00', '2024-05-02 18:42:00', 'Terminal Kalideres', 'Terminal Manggarai', '32000', 'Ekonomi', 40, 'JJHGHJHHGKJHGFG', 2, 'Arrived'),
(10, '2024-05-04 08:58:00', '2024-05-04 11:01:00', 'Terminal Pondok Cabe', 'Terminal Pasar Minggu', '20000', 'Ekonomi', 35, 'mnhnfghgdf', 2, 'Arrived'),
(11, '2024-05-06 12:56:00', '2024-05-06 12:56:00', 'Terminal Manggarai', 'Terminal Lebak Bulus', '10000', 'Ekonomi', 30, 'ggg', 2, 'Arrived'),
(12, '2024-05-07 16:21:00', '2024-05-07 18:23:00', 'Terminal Pulo Gadung', 'Terminal Tanah Abang', '18000', 'Ekonomi', 67, 'MJNHBBH', 2, 'Arrived'),
(13, '2024-05-08 11:51:00', '2024-05-08 11:51:00', 'Terminal Kalideres', 'Terminal Pulo Gebang', '20000', 'Bisnis', 20, 'fff', 2, 'Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_kapal`
--

CREATE TABLE `jadwal_tiket_kapal` (
  `id_jadwaltiketkapal` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `pelabuhan_keberangkatan` varchar(100) DEFAULT NULL,
  `pelabuhan_kedatangan` varchar(100) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `status_jadwal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_kapal`
--

INSERT INTO `jadwal_tiket_kapal` (`id_jadwaltiketkapal`, `waktu_keberangkatan`, `waktu_kedatangan`, `pelabuhan_keberangkatan`, `pelabuhan_kedatangan`, `harga`, `kategori`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendor`, `status_jadwal`) VALUES
(3, '2024-04-11 20:08:00', '2024-04-11 20:09:00', 'Semarang (Pelabuhan Tanjung Emas)', 'Banjarmasin (Pelabuhan Trisakti)', '54.00', 'Mobil', 23, 'erghnhgfre', 8, 'Arrived'),
(4, '2024-04-12 15:58:00', '2024-04-12 17:00:00', 'Pekanbaru (Pelabuhan Sungai Duku)', 'Tarakan (Pelabuhan Tarakan)', '80.00', 'Mobil', 4000, 'cxc      ', 8, 'Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_kereta`
--

CREATE TABLE `jadwal_tiket_kereta` (
  `id_jadwaltiketkereta` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `stasiun_keberangkatan` varchar(255) DEFAULT NULL,
  `stasiun_kedatangan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendorkrta` int(11) DEFAULT NULL,
  `status_jadwal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_kereta`
--

INSERT INTO `jadwal_tiket_kereta` (`id_jadwaltiketkereta`, `waktu_keberangkatan`, `waktu_kedatangan`, `stasiun_keberangkatan`, `stasiun_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendorkrta`, `status_jadwal`) VALUES
(4, '2024-04-11 20:00:00', '2024-04-19 16:56:00', 'Stasiun Bandung (BD) - Bandung', 'Stasiun Purwokerto (PWT) - Purwokerto', 45, 'Ekonomi', 64, 'tyjy88888888888hhhhhhhhhhu', 1, 'Arrived'),
(5, '2024-04-12 12:36:00', '2024-04-12 14:38:00', 'Stasiun Gambir (GMR) - Jakarta', 'Stasiun Tasikmalaya (TSM) - Tasikmalaya', 20, 'Ekonomi', 78, 'UUUUUUUUUU', 1, 'Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket_pesawat`
--

CREATE TABLE `jadwal_tiket_pesawat` (
  `id_jadwaltiketpesawat` int(11) NOT NULL,
  `waktu_keberangkatan` datetime DEFAULT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `bandara_keberangkatan` varchar(255) DEFAULT NULL,
  `bandara_kedatangan` varchar(255) DEFAULT NULL,
  `harga` decimal(10,3) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kapasitas_stok_tiket` int(11) DEFAULT NULL,
  `deskripsi_jadwal` text DEFAULT NULL,
  `id_vendorpesawat` int(11) DEFAULT NULL,
  `status_jadwal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket_pesawat`
--

INSERT INTO `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`, `waktu_keberangkatan`, `waktu_kedatangan`, `bandara_keberangkatan`, `bandara_kedatangan`, `harga`, `kelas`, `kapasitas_stok_tiket`, `deskripsi_jadwal`, `id_vendorpesawat`, `status_jadwal`) VALUES
(16, '2024-04-09 11:50:00', '2024-04-09 14:48:00', 'Bandara Internasional Silangit (DTB) - Silangit', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', '2000.000', 'Ekonomi', 300, 'bmfbhuuuuuudddddd', 3, 'Arrived'),
(17, '2024-04-09 12:02:00', '2024-04-09 12:08:00', 'Bandara Internasional Sam Ratulangi (MDC) - Manado', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', '300.000', 'Ekonomi', 100, 'thtrerthredfvfdwdfdsdfeewwwwwwweee', 3, 'Arrived'),
(18, '2024-04-09 12:03:00', '2024-04-09 12:05:00', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', 'Bandara Internasional Frankfurt (FRA) - Frankfurt, Jerman', '300.000', 'Ekonomi', 130, 'kllkjhgjh', 3, 'Arrived'),
(20, '2024-05-07 13:34:00', '2024-05-07 13:33:00', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', 'Bandara Internasional Soekarno-Hatta (CGK) - Jakarta', '34000.000', 'Ekonomi', 33, '655555555555', 3, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id_metode` int(11) NOT NULL,
  `nama_metode` varchar(255) NOT NULL,
  `Nomor_metode` varchar(255) DEFAULT NULL,
  `kategori_metode` varchar(20) DEFAULT NULL,
  `Deksripsi_metode` longtext DEFAULT NULL,
  `logo_metode` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metodepembayaran`
--

INSERT INTO `metodepembayaran` (`id_metode`, `nama_metode`, `Nomor_metode`, `kategori_metode`, `Deksripsi_metode`, `logo_metode`) VALUES
(5, 'Gopay', '085279549708 An.Andika Fikri Azhari', 'E-Wallet', 'fffffffffff', 0x75706c6f6164732f676f7061792e706e67),
(7, 'Bank BCA', '23233234323 An.Andika Fikri Azhari', 'Bank', 'f', 0x75706c6f6164732f6263612e706e67),
(8, 'DANA', '0895077832333', 'E-Wallet', 'DANA', 0x75706c6f6164732f44616e612e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `email`, `password`) VALUES
(1, 'john_doe', 'john.doe21@gmail.com', ''),
(2, 'jane_smith', 'jane.smith@gmail.com', ''),
(3, 'michael_jackson', 'michael.jackson@gmail.com', ''),
(4, 'emma_watson', 'emma.watson@gmail.com', ''),
(5, 'chris_evans', 'chris.evans@gmail.com', ''),
(6, 'natalie_portman', 'natalie.portman@gmail.com', ''),
(7, 'leonardo_dicaprio', 'leonardo.dicaprio@gmail.com', ''),
(8, 'jennifer_lawrence', 'jennifer.lawrence@example.com', 'password8'),
(9, 'tom_hanks', 'tom.hanks@example.com', 'password9'),
(10, 'scarlett_johansson', 'scarlett.johansson@example.com', 'password10'),
(11, 'brad_pitt', 'brad.pitt@example.com', 'password11'),
(12, 'angelina_jolie', 'angelina.jolie@example.com', 'password12'),
(13, 'george_clooney', 'george.clooney@example.com', 'password13'),
(14, 'meryl_streep', 'meryl.streep@example.com', 'password14'),
(15, 'will_smith', 'will.smith@example.com', 'password15'),
(16, 'julia_roberts', 'julia.roberts@example.com', 'password16'),
(17, 'dwayne_johnson', 'dwayne.johnson@example.com', 'password17'),
(18, 'gal_gadot', 'gal.gadot@example.com', 'password18'),
(19, 'ryan_reynolds', 'ryan.reynolds@example.com', 'password19'),
(20, 'anne_hathaway', 'anne.hathaway@example.com', 'password20'),
(21, 'hugh_jackman', 'hugh.jackman@example.com', 'password21'),
(22, 'margot_robbie', 'margot.robbie@gmail.com', 'amip123'),
(23, 'mark_wahlberg', 'mark.wahlberg@example.com', 'password23'),
(24, 'jennifer_aniston', 'jennifer.aniston@example.com', 'password24'),
(25, 'matthew_mcconaughey', 'matthew.mcconaughey@example.com', 'password25'),
(26, 'nicole_kidman', 'nicole.kidman@example.com', 'password26'),
(27, 'tom_cruise', 'tom.cruise@example.com', 'password27'),
(28, 'emma_stone', 'emma.stone@example.com', 'password28'),
(29, 'denzel_washington', 'denzel.washington@example.com', 'password29'),
(30, 'natalie_dormer', 'natalie.dormer@example.com', 'password30'),
(31, 'jared_leto', 'jared.leto@example.com', 'password31'),
(32, 'amy_adams', 'amy.adams@example.com', 'password32'),
(33, 'ryan_gosling', 'ryan.gosling@example.com', 'password33'),
(34, 'sandra_bullock', 'sandra.bullock@example.com', 'password34'),
(35, 'chadwick_boseman', 'chadwick.boseman@example.com', 'password35'),
(36, 'cate_blanchett', 'cate.blanchett@example.com', 'password36'),
(37, 'johnny_depp', 'johnny.depp@example.com', 'password37'),
(38, 'emily_blunt', 'emily.blunt@example.com', 'password38'),
(39, 'christian_bale', 'christian.bale@example.com', 'password39'),
(51, '2257051005', 'andikapsw30@gmail.com', 'AFGUVBHNNHT'),
(52, 'amin', 'jennifer.lawrence@sexample.com', '$2y$10$YFF4EMoRfw0kCmIUkOXp2ukisjcpQeqndFTZwRoLJi/phi.MUa36y'),
(55, 'ramzi', 'ramzi123@gmail.com', '$2y$10$kNHliDuKMoOKlzyByaHxYuqId4GRCVYQSJF7Cxgeto99AAq561WYe');

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketbus`
--

CREATE TABLE `pesanantiketbus` (
  `id_pesanantiketbus` int(50) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `invoice_id` varchar(30) DEFAULT NULL,
  `TIMEORDER` datetime DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_jadwaltiketbus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanantiketbus`
--

INSERT INTO `pesanantiketbus` (`id_pesanantiketbus`, `bukti_bayar`, `status_pembayaran`, `id_datapenumpang`, `id_metode`, `invoice_id`, `TIMEORDER`, `id_pengguna`, `id_jadwaltiketbus`) VALUES
(17, NULL, 'Belum Bayar', 118, 7, 'PACKNGO000011', '2024-04-14 06:03:51', 15, 5),
(18, NULL, 'Belum Bayar', 118, 7, 'PACKNGO000012', '2024-04-14 06:04:13', 15, 5),
(19, NULL, 'Belum Bayar', 118, 7, 'PACKNGO000013', '2024-04-14 06:04:15', 15, 5),
(20, NULL, 'Belum Bayar', 118, 7, 'PACKNGO000014', '2024-04-14 06:04:31', 15, 5),
(21, NULL, 'Belum Bayar', 118, 7, 'PACKNGO000015', '2024-04-14 06:06:58', 15, 5),
(22, 0x75706c6f6164732f5041434b204e20474f2d434c415353204449414752414d2e64726177696f2e706e67, 'Lunas', 118, 7, 'PACKNGO000016', '2024-04-14 06:13:57', 15, 5),
(23, 0x75706c6f6164732f556e6976657273697461732d4c616d70756e672d4c6f676f2d373638783736382e706e67, 'Belum Bayar', 119, 5, 'PACKNGO000017', '2024-04-14 06:36:37', 9, 5),
(24, 0x75706c6f6164732f756e6e616d656420283329202831292e6a7067, 'Belum Bayar', 120, 8, 'PACKNGO000018', '2024-04-14 11:57:13', 9, 5),
(25, 0x75706c6f6164732f6275735f7472616e73706f72746174696e5f7363686f6f6c5f6275735f74726176656c5f69636f6e5f3139343030322e706e67, 'Belum Bayar', 121, 8, 'PACKNGO000019', '2024-04-14 12:12:04', 9, 5),
(26, 0x75706c6f6164732f436172612d446f776e6c6f61642d544f50494e444f4b552e6a7067, 'Belum Bayar', 121, 8, 'PACKNGO000020', '2024-04-14 13:45:46', 9, 5),
(27, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000021', '2024-04-14 14:05:58', 9, 5),
(28, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000022', '2024-04-14 14:06:04', 9, 5),
(29, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000023', '2024-04-14 14:06:22', 9, 5),
(30, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000024', '2024-04-14 14:07:40', 9, 5),
(31, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000025', '2024-04-14 14:08:05', 9, 5),
(32, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000026', '2024-04-14 14:08:13', 9, 5),
(33, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000027', '2024-04-14 14:09:01', 9, 5),
(34, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000028', '2024-04-14 14:09:08', 9, 5),
(35, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000029', '2024-04-14 14:09:24', 9, 5),
(36, 0x75706c6f6164732f595455494f2e706e67, 'Lunas', 121, 8, 'PACKNGO000030', '2024-04-14 09:09:50', 9, 5),
(37, NULL, 'Belum Bayar', 121, 8, 'PACKNGO000031', '2024-04-14 09:36:10', 9, 5),
(38, 0x75706c6f6164732f73757065727375735f74696c652e706e67, 'Lunas', 122, 8, 'PACKNGO000032', '2024-04-14 14:56:15', 9, 5),
(39, 0x75706c6f6164732f315746452e6a706567, 'Lunas', 123, 7, 'PACKNGO000033', '2024-04-14 15:03:54', 9, 5),
(40, 0x75706c6f6164732f54414e472d4352494d50494e472d524731312d6762722d322e6a7067, 'Lunas', 124, 8, 'PACKNGO000034', '2024-04-15 09:19:12', 9, 7),
(41, 0x75706c6f6164732f756e6e616d656420283429202831292e6a7067, 'Lunas', 125, 8, 'PACKNGO000035', '2024-04-15 10:04:04', 9, 7),
(42, 0x75706c6f6164732f576861747341707020496d61676520323032342d30322d32392061742031312e33332e30335f30613566643064312e6a7067, 'Belum Lunas', 126, 8, 'PACKNGO000036', '2024-04-15 13:09:18', 9, 7),
(43, 0x75706c6f6164732f7468202834292e6a706567, 'Lunas', 127, 8, 'PACKNGO000037', '2024-04-17 10:27:26', 51, 8),
(44, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30342061742030382e34362e34375f34653438646439372e6a7067, 'Belum Bayar', 129, 7, 'PACKNGO000038', '2024-05-04 08:02:34', 17, 10),
(45, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30332061742030362e34312e35365f66303530623137322e6a7067, 'Lunas', 130, 5, 'PACKNGO000039', '2024-05-06 12:57:52', 8, 11),
(46, 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30342061742032302e31352e34385f33613739366531652e6a7067, 'Belum Bayar', 131, 8, 'PACKNGO000040', '2024-05-06 16:35:09', 8, 11),
(47, 0x75706c6f6164732f52656374616e676c6520332e6a7067, 'Lunas', 132, 5, 'PACKNGO000041', '2024-05-08 11:54:44', 51, 13),
(48, 0x75706c6f6164732f4672616d6520332e6a7067, 'Lunas', 133, 5, 'PACKNGO000042', '2024-05-08 12:10:57', 52, 13),
(49, 0x75706c6f6164732f566563746f722e706e67, 'Lunas', 134, 5, 'PACKNGO000043', '2024-05-08 12:39:58', 52, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkapal`
--

CREATE TABLE `pesanantiketkapal` (
  `id_pesanantiketkapal` varchar(50) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkapal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketkereta`
--

CREATE TABLE `pesanantiketkereta` (
  `id_pesanantiket` varchar(20) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketkereta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanantiketpesawat`
--

CREATE TABLE `pesanantiketpesawat` (
  `id_pesanantiket` varchar(20) NOT NULL,
  `bukti_bayar` longblob DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_datapenumpang` int(11) DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_jadwaltiketpesawat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_bus`
--

CREATE TABLE `vendor_bus` (
  `id_vendorbus` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_bus`
--

INSERT INTO `vendor_bus` (`id_vendorbus`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(2, 'Damri Indonesia', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f756e6e616d65642e706e67),
(3, 'bfrfgre', 'ghgrerfgr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_kapal`
--

CREATE TABLE `vendor_kapal` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_kapal`
--

INSERT INTO `vendor_kapal` (`id_vendor`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(8, 'Vugu', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f534c4156452e706e67),
(10, 'Vugu', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f576861747341707020496d61676520323032342d30352d30352061742032302e31322e33355f37393762366364382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_kereta`
--
-- Error reading structure for table web.vendor_kereta: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table web.vendor_kereta: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `web`.`vendor_kereta`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `vendor_pesawat`
--

CREATE TABLE `vendor_pesawat` (
  `id_vendorpesawat` int(11) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `logo_vendor` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_pesawat`
--

INSERT INTO `vendor_pesawat` (`id_vendorpesawat`, `nama_vendor`, `alamat_vendor`, `logo_vendor`) VALUES
(3, 'Garuda Indonesia', 'Gedung Merdeka Jln.Ahmad Yani ,Jakarta 2210', 0x75706c6f6164732f756e6e616d6564202836292e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketbus` (`id_jadwaltiketbus`);

--
-- Indexes for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketkapal` (`id_jadwaltiketkapal`);

--
-- Indexes for table `datapenumpangkereta`
--
ALTER TABLE `datapenumpangkereta`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketkereta` (`id_jadwaltiketkereta`);

--
-- Indexes for table `datapenumpangpesawat`
--
ALTER TABLE `datapenumpangpesawat`
  ADD PRIMARY KEY (`id_datapenumpang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_jadwaltiketpesawat` (`id_jadwaltiketpesawat`);

--
-- Indexes for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  ADD PRIMARY KEY (`id_jadwaltiketbus`),
  ADD KEY `id_vendorbus` (`id_vendorbus`);

--
-- Indexes for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  ADD PRIMARY KEY (`id_jadwaltiketkapal`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  ADD PRIMARY KEY (`id_jadwaltiketkereta`),
  ADD KEY `id_vendorkrta` (`id_vendorkrta`);

--
-- Indexes for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  ADD PRIMARY KEY (`id_jadwaltiketpesawat`),
  ADD KEY `id_vendorpesawat` (`id_vendorpesawat`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  ADD PRIMARY KEY (`id_pesanantiketbus`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `fk_datapenumpang` (`id_datapenumpang`),
  ADD KEY `fk_pengguna` (`id_pengguna`),
  ADD KEY `fk_jadwaltiketbus` (`id_jadwaltiketbus`);

--
-- Indexes for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD PRIMARY KEY (`id_pesanantiketkapal`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketkapal` (`id_jadwaltiketkapal`);

--
-- Indexes for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketkereta` (`id_jadwaltiketkereta`);

--
-- Indexes for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD PRIMARY KEY (`id_pesanantiket`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_datapenumpang` (`id_datapenumpang`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_jadwaltiketpesawat` (`id_jadwaltiketpesawat`);

--
-- Indexes for table `vendor_bus`
--
ALTER TABLE `vendor_bus`
  ADD PRIMARY KEY (`id_vendorbus`);

--
-- Indexes for table `vendor_kapal`
--
ALTER TABLE `vendor_kapal`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `vendor_pesawat`
--
ALTER TABLE `vendor_pesawat`
  ADD PRIMARY KEY (`id_vendorpesawat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  MODIFY `id_datapenumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  MODIFY `id_jadwaltiketbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  MODIFY `id_jadwaltiketkapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  MODIFY `id_jadwaltiketkereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  MODIFY `id_jadwaltiketpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  MODIFY `id_pesanantiketbus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `vendor_bus`
--
ALTER TABLE `vendor_bus`
  MODIFY `id_vendorbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_kapal`
--
ALTER TABLE `vendor_kapal`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendor_pesawat`
--
ALTER TABLE `vendor_pesawat`
  MODIFY `id_vendorpesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapenumpangbus`
--
ALTER TABLE `datapenumpangbus`
  ADD CONSTRAINT `datapenumpangbus_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangbus_ibfk_2` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`);

--
-- Constraints for table `datapenumpangkapal`
--
ALTER TABLE `datapenumpangkapal`
  ADD CONSTRAINT `datapenumpangkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangkapal_ibfk_2` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`);

--
-- Constraints for table `datapenumpangkereta`
--
ALTER TABLE `datapenumpangkereta`
  ADD CONSTRAINT `datapenumpangkereta_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangkereta_ibfk_2` FOREIGN KEY (`id_jadwaltiketkereta`) REFERENCES `jadwal_tiket_kereta` (`id_jadwaltiketkereta`);

--
-- Constraints for table `datapenumpangpesawat`
--
ALTER TABLE `datapenumpangpesawat`
  ADD CONSTRAINT `datapenumpangpesawat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `datapenumpangpesawat_ibfk_2` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`);

--
-- Constraints for table `jadwal_tiket_bus`
--
ALTER TABLE `jadwal_tiket_bus`
  ADD CONSTRAINT `jadwal_tiket_bus_ibfk_1` FOREIGN KEY (`id_vendorbus`) REFERENCES `vendor_bus` (`id_vendorbus`);

--
-- Constraints for table `jadwal_tiket_kapal`
--
ALTER TABLE `jadwal_tiket_kapal`
  ADD CONSTRAINT `jadwal_tiket_kapal_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor_kapal` (`id_vendor`);

--
-- Constraints for table `jadwal_tiket_kereta`
--
ALTER TABLE `jadwal_tiket_kereta`
  ADD CONSTRAINT `jadwal_tiket_kereta_ibfk_1` FOREIGN KEY (`id_vendorkrta`) REFERENCES `vendor_kereta` (`id_vendorkrta`);

--
-- Constraints for table `jadwal_tiket_pesawat`
--
ALTER TABLE `jadwal_tiket_pesawat`
  ADD CONSTRAINT `jadwal_tiket_pesawat_ibfk_1` FOREIGN KEY (`id_vendorpesawat`) REFERENCES `vendor_pesawat` (`id_vendorpesawat`);

--
-- Constraints for table `pesanantiketbus`
--
ALTER TABLE `pesanantiketbus`
  ADD CONSTRAINT `fk_datapenumpang` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangbus` (`id_datapenumpang`),
  ADD CONSTRAINT `fk_jadwaltiketbus` FOREIGN KEY (`id_jadwaltiketbus`) REFERENCES `jadwal_tiket_bus` (`id_jadwaltiketbus`),
  ADD CONSTRAINT `fk_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketbus_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`);

--
-- Constraints for table `pesanantiketkapal`
--
ALTER TABLE `pesanantiketkapal`
  ADD CONSTRAINT `pesanantiketkapal_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangkapal` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketkapal_ibfk_4` FOREIGN KEY (`id_jadwaltiketkapal`) REFERENCES `jadwal_tiket_kapal` (`id_jadwaltiketkapal`);

--
-- Constraints for table `pesanantiketkereta`
--
ALTER TABLE `pesanantiketkereta`
  ADD CONSTRAINT `pesanantiketkereta_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangkereta` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketkereta_ibfk_4` FOREIGN KEY (`id_jadwaltiketkereta`) REFERENCES `jadwal_tiket_kereta` (`id_jadwaltiketkereta`);

--
-- Constraints for table `pesanantiketpesawat`
--
ALTER TABLE `pesanantiketpesawat`
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_2` FOREIGN KEY (`id_datapenumpang`) REFERENCES `datapenumpangpesawat` (`id_datapenumpang`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_3` FOREIGN KEY (`id_metode`) REFERENCES `metodepembayaran` (`id_metode`),
  ADD CONSTRAINT `pesanantiketpesawat_ibfk_4` FOREIGN KEY (`id_jadwaltiketpesawat`) REFERENCES `jadwal_tiket_pesawat` (`id_jadwaltiketpesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
