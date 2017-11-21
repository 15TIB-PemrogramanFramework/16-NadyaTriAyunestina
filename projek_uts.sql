-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 09 Nov 2017 pada 02.17
-- Versi Server: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `group`
--

CREATE TABLE `group` (
  `kode_group` int(100) NOT NULL,
  `nama_group` varchar(100) NOT NULL,
  `alamat_group` varchar(100) NOT NULL,
  `nohp_group` varchar(100) NOT NULL,
  `email_group` varchar(100) NOT NULL,
  `paket_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prawedding`
--

CREATE TABLE `prawedding` (
  `kode_prawedding` int(100) NOT NULL,
  `nama_prawedding` varchar(100) NOT NULL,
  `alamat_prawedding` varchar(100) NOT NULL,
  `nohp_prawedding` varchar(100) NOT NULL,
  `email_prawedding` varchar(100) NOT NULL,
  `jadwal_prawedding` varchar(100) NOT NULL,
  `lokasi_prawedding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding`
--

CREATE TABLE `wedding` (
  `kode_wedding` int(100) NOT NULL,
  `nama_wedding` varchar(100) NOT NULL,
  `alamat_wedding` varchar(100) NOT NULL,
  `nohp_wedding` varchar(100) NOT NULL,
  `email_wedding` varchar(100) NOT NULL,
  `jadwal_wedding` varchar(100) NOT NULL,
  `lokasi_wedding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`kode_group`);

--
-- Indexes for table `prawedding`
--
ALTER TABLE `prawedding`
  ADD PRIMARY KEY (`kode_prawedding`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`kode_wedding`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `kode_group` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prawedding`
--
ALTER TABLE `prawedding`
  MODIFY `kode_prawedding` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `kode_wedding` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
