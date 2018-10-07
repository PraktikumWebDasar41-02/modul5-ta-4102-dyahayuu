-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` varchar(12) NOT NULL,
  `Prodi` varchar(30) NOT NULL,
  `Fakultas` varchar(3) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`NIM`, `Nama`, `email`, `Tanggal_Lahir`, `JK`, `Prodi`, `Fakultas`, `komentar`) VALUES
(1234567893, 'dyah', 'p@gmail.com', '2018-10-02', 'Perempuan', 'Manajemen Pemasaran', 'FIK', 'iya'),
(1234567895, 'Fiki', 'fiki@gmail.com', '2018-10-02', 'Laki Laki', 'Teknik Telekomunikasi', 'FRI', 'apa'),
(1234567899, 'Dyah Ayu', 'd@gmail.com', '2018-10-08', 'Perempuan', 'Teknik Telekomunikasi', 'FRI', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jurnal1`
--
ALTER TABLE `t_jurnal1`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
