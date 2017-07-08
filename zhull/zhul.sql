-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2016 at 03:03 PM
-- Server version: 5.6.28
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhul`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(30) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `email` int(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `foto_profil` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `aktif` varchar(10) NOT NULL,
  `profil_singkat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
