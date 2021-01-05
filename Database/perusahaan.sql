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
-- Database: `perusahaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_perusahaan`
--

CREATE TABLE `daftar_perusahaan` (
  `id_perusahaan` int(4) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `jenis_perusahaan` varchar(100) NOT NULL,
  `ketentuan_disabilitas` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_perusahaan`
--

INSERT INTO `daftar_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `jenis_perusahaan`, `ketentuan_disabilitas`, `lokasi`, `alamat`, `tlp_perusahaan`) VALUES
(2001, 'CoreNine', 'Perusahaan Teknologi', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Selatan', 'Jalan Ketintang Selatan', '081-79634938'),
(2002, 'DNetwork.net', 'Perusahaan Teknologi', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Utara', 'Jalan Krembangan', '031-7493275'),
(2003, 'Anita Bakery', 'Penjualan dan Perdagangan', 'Tuna Daksa', 'Surabaya Timur', 'Jalan Gunung Anyar', '031-32145389'),
(2004, 'Infika', 'Perusahaan Desain', 'Tuna Daksa', 'Surabaya Barat', 'Jalan Sukomanunggal', '031-44999123'),
(2005, 'PT. Dlingo Digital Valley', 'Perusahaan Digital', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Timur', 'Jalan Tambaksari', '031-65567887'),
(2006, 'MRB Finance', 'Perusahaan Financial', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Pusat', 'Jalan Simokerto', '031-89987444'),
(2007, 'WriterPas', 'Perusahaan Jasa', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Pusat', 'Jalan Kedungdoro', '031-88955122'),
(2008, 'PT. Asia Outsourcing Service', 'Perusahaan Jasa', 'Tuna Daksa', 'Surabaya Selatan', 'Jalan Wonokromo', '031-23777123'),
(2009, 'PT. Abadi Bina Indonesia', 'Perusahaan Digital', 'Tuna Daksa', 'Surabaya Utara', 'Jalan Bulak Banteng', '031-87456123'),
(2010, 'DigiHR', 'Penjualan dan Perdagangan', 'Tuna Daksa', 'Surabaya Timur', 'Jalan Kapas Madya', '031-87789455'),
(2011, 'PT. Pegadaian', 'Badan Usaha Milik Negara', 'Tuna Daksa', 'Surabaya Barat', 'Jalan Manukan Wetan ', '031-08955777'),
(2012, '2G Studio', 'Perusahaan Desain', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Timur', 'Jalan Mulyorejo', '031-33565231');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(4) NOT NULL,
  `lowongan_kerja` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `disabilitas` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `lowongan_kerja`, `gaji`, `disabilitas`, `lokasi`) VALUES
(1001, 'IT Progammer', '3jt-5jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Selatan'),
(1002, 'Staff', '4jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Utara'),
(1003, 'Chef', '3jt', 'Tuna Daksa', 'Surabaya Timur'),
(1004, 'Desain Grafis', '5jt-8jt', 'Tuna Daksa', 'Surabaya Timur'),
(1005, 'Digital Marketing', '4jt-5jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Timur'),
(1006, 'Accounting', '5jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Pusat'),
(1007, 'Penulis', '3.5jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Pusat'),
(1008, 'Staff Admin', '4jt', 'Tuna Daksa', 'Surabaya Selatan'),
(1009, 'Customer Service', '3.5jt', 'Tuna Daksa', 'Surabaya Utara'),
(1010, 'Business Dev', '6jt', 'Tuna Daksa', 'Surabaya Timur'),
(1011, 'Administrasi ', '5jt', 'Tuna Daksa', 'Surabaya Barat'),
(1012, 'Design Interior', '5jt-10jt', 'Tuna Daksa, Tuna Rungu Wicara', 'Surabaya Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_perusahaan`
--
ALTER TABLE `daftar_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_perusahaan`
--
ALTER TABLE `daftar_perusahaan`
  MODIFY `id_perusahaan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2013;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
