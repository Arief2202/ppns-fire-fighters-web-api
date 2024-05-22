-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppns_fire_fighters`
--

-- --------------------------------------------------------

--
-- Table structure for table `apar`
--

CREATE TABLE `apar` (
  `id` int(255) NOT NULL,
  `jenis_pemadam` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_kadaluarsa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hydrant`
--

CREATE TABLE `hydrant` (
  `id` int(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jenis_hydrant` varchar(5) NOT NULL DEFAULT 'ihb',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspeksi_apar`
--

CREATE TABLE `inspeksi_apar` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `apar_id` int(255) NOT NULL,
  `tersedia` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `kondisi_tabung` varchar(255) NOT NULL,
  `segel_pin` varchar(255) NOT NULL,
  `tuas_pegangan` varchar(255) NOT NULL,
  `label_segitiga` varchar(255) NOT NULL,
  `label_instruksi` varchar(255) NOT NULL,
  `kondisi_selang` varchar(255) NOT NULL,
  `tekanan_tabung` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspeksi_hydrant_ihb`
--

CREATE TABLE `inspeksi_hydrant_ihb` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `hydrant_id` int(255) NOT NULL,
  `kondisi_kotak` varchar(255) NOT NULL,
  `posisi_kotak` varchar(255) NOT NULL,
  `kondisi_nozzle` varchar(255) NOT NULL,
  `kondisi_selang` varchar(255) NOT NULL,
  `jenis_selang` varchar(255) NOT NULL,
  `kondisi_coupling` varchar(255) NOT NULL,
  `kondisi_landing_valve` varchar(255) NOT NULL,
  `kondisi_tray` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspeksi_hydrant_ohb`
--

CREATE TABLE `inspeksi_hydrant_ohb` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `hydrant_id` int(255) NOT NULL,
  `kondisi_kotak` varchar(255) NOT NULL,
  `posisi_kotak` varchar(255) NOT NULL,
  `kondisi_nozzle` varchar(255) NOT NULL,
  `kondisi_selang` varchar(255) NOT NULL,
  `jenis_selang` varchar(255) NOT NULL,
  `kondisi_coupling` varchar(255) NOT NULL,
  `tuas_pembuka` varchar(255) NOT NULL,
  `kondisi_outlet` varchar(255) NOT NULL,
  `penutup_cop` varchar(255) NOT NULL,
  `flushing_hydrant` varchar(255) NOT NULL,
  `tekanan_hydrant` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `displayed` tinyint(1) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `role` int(255) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apar`
--
ALTER TABLE `apar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hydrant`
--
ALTER TABLE `hydrant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspeksi_apar`
--
ALTER TABLE `inspeksi_apar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspeksi_hydrant_ihb`
--
ALTER TABLE `inspeksi_hydrant_ihb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspeksi_hydrant_ohb`
--
ALTER TABLE `inspeksi_hydrant_ohb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apar`
--
ALTER TABLE `apar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hydrant`
--
ALTER TABLE `hydrant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspeksi_apar`
--
ALTER TABLE `inspeksi_apar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspeksi_hydrant_ihb`
--
ALTER TABLE `inspeksi_hydrant_ihb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspeksi_hydrant_ohb`
--
ALTER TABLE `inspeksi_hydrant_ohb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
