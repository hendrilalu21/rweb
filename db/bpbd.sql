-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 11:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor_bencana`
--

CREATE TABLE `lapor_bencana` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `laporan` text NOT NULL,
  `status` enum('belum ada','disetujui','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor_bencana`
--

INSERT INTO `lapor_bencana` (`id`, `nama`, `email`, `no_hp`, `laporan`, `status`) VALUES
(15, 'Bayu Budiman', 'bayu@gmail.com', '0822356787', 'Terjadi bencana angin di kota yogyakarta pukul 12.00', 'disetujui'),
(16, 'Eko Budianto', 'eko@gmail.com', '084849333', 'Terjadi Bencana Banjir di Yogyakarta pada pukul 22.00', 'belum ada');

-- --------------------------------------------------------

--
-- Table structure for table `lapor_pengungsi`
--

CREATE TABLE `lapor_pengungsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `laporan` text NOT NULL,
  `status` enum('belum ada','disetujui','ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor_pengungsi`
--

INSERT INTO `lapor_pengungsi` (`id`, `nama`, `email`, `no_hp`, `laporan`, `status`) VALUES
(7, 'Joko Yanto', 'joko@gmail.com', '08239393344', 'Pengungsi sebanyak 220 orang di desa werdadi yogyakarta', 'belum ada'),
(8, 'Darman Sugianti', 'darman@gmail.com', '089339393', 'Pengungsi banyak di jogja', 'belum ada'),
(9, 'Tri Wibowo', 'tri@gmail.com', '082383283', 'Pengungsi sebanyak 230 orang di daerah sleman', 'belum ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor_bencana`
--
ALTER TABLE `lapor_bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor_pengungsi`
--
ALTER TABLE `lapor_pengungsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor_bencana`
--
ALTER TABLE `lapor_bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lapor_pengungsi`
--
ALTER TABLE `lapor_pengungsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
