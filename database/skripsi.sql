-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 10:05 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAkun` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAkun`, `username`, `password`, `alamat`, `email`, `telp`) VALUES
(1, 'admin', 'admin123', 'kampung baru', 'admin@gmail.com', '0735423777');

-- --------------------------------------------------------

--
-- Table structure for table `datafaskes`
--

CREATE TABLE `datafaskes` (
  `idFaskes` int(4) NOT NULL,
  `idKelurahan` int(4) NOT NULL,
  `IdJenis` int(4) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `jamPraktek` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `namafaskes` varchar(150) NOT NULL,
  `tahunberdiri` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datajenis`
--

CREATE TABLE `datajenis` (
  `idjenis` int(4) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datajenis`
--

INSERT INTO `datajenis` (`idjenis`, `jenis`) VALUES
(1, ''),
(2, 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `idKab` int(4) NOT NULL,
  `namaKab` varchar(150) NOT NULL,
  `areaKab` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idKec` int(4) NOT NULL,
  `namaKec` varchar(150) NOT NULL,
  `areaKec` varchar(150) NOT NULL,
  `idKab` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `idKel` int(4) NOT NULL,
  `namaKel` varchar(150) NOT NULL,
  `idKec` int(4) NOT NULL,
  `areaKel` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `datafaskes`
--
ALTER TABLE `datafaskes`
  ADD PRIMARY KEY (`idFaskes`);

--
-- Indexes for table `datajenis`
--
ALTER TABLE `datajenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`idKab`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idKec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`idKel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAkun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datafaskes`
--
ALTER TABLE `datafaskes`
  MODIFY `idFaskes` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datajenis`
--
ALTER TABLE `datajenis`
  MODIFY `idjenis` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `idKab` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idKec` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `idKel` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
