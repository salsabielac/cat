-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 11:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
`idp` int(10) NOT NULL,
  `namap` varchar(30) NOT NULL,
  `jkp` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`idp`, `namap`, `jkp`, `agama`, `telp`, `email`, `username`, `password`) VALUES
(1, 'salsabiela', 'perempuan', 'islam', '089218903821', 'salsabiela@gmail.com', 'salsabielac', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE IF NOT EXISTS `kucing` (
`idk` int(10) NOT NULL,
  `namak` varchar(30) NOT NULL,
  `jenisk` varchar(20) NOT NULL,
  `jkk` varchar(20) NOT NULL,
  `usia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE IF NOT EXISTS `perawatan` (
`idper` int(10) NOT NULL,
  `jenisper` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idk` int(10) NOT NULL,
  `jenisper` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
`idt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
 ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
 ADD PRIMARY KEY (`idk`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
 ADD PRIMARY KEY (`idper`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
MODIFY `idp` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
MODIFY `idk` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perawatan`
--
ALTER TABLE `perawatan`
MODIFY `idper` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
