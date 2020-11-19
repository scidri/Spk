-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(20) CHARACTER SET latin1 NOT NULL,
  `c11` double NOT NULL,
  `c5` double NOT NULL,
  `c3` double NOT NULL,
  `c6` double NOT NULL,
  `c8` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datalaptop`
--

CREATE TABLE `datalaptop` (
  `id` varchar(6) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tpprosesor` varchar(20) NOT NULL,
  `kprosesor` varchar(20) NOT NULL,
  `vga` varchar(10) NOT NULL,
  `ukram` int(10) NOT NULL,
  `hardisk` varchar(20) NOT NULL,
  `layar` varchar(10) NOT NULL,
  `ssd` varchar(10) NOT NULL,
  `harga` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `merk` varchar(30) CHARACTER SET latin1 NOT NULL,
  `jenis` varchar(10) CHARACTER SET latin1 NOT NULL,
  `c11` double NOT NULL,
  `c5` double NOT NULL,
  `c3` double NOT NULL,
  `c6` double NOT NULL,
  `c8` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
