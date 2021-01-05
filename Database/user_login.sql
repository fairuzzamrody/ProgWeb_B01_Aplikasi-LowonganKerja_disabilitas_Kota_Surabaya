-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 03:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_loginuser`
--

CREATE TABLE `tb_loginuser` (
  `id_user` int(5) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_loginuser`
--

INSERT INTO `tb_loginuser` (`id_user`, `nama_depan`, `nama_belakang`, `e_mail`, `password`) VALUES
(11101, 'gusti', 'agung', 'gusti@gmail.com', 'gusti123'),
(11102, 'zalfaura', 'thursina', 'zalfa@gmail.com', 'zalfa123'),
(11103, 'rany', 'amelia', 'rany@gmail.com', 'rany123'),
(11104, 'made', 'ditya', 'made@gmail.com', 'made123'),
(11105, 'maulidya', 'yuni', 'lidya@gmail.com', 'lidya123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_loginuser`
--
ALTER TABLE `tb_loginuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_loginuser`
--
ALTER TABLE `tb_loginuser`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
