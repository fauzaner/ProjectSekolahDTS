-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 07:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(25) NOT NULL,
  `almt_peserta` text NOT NULL,
  `status_siswa` varchar(25) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmpt_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`, `status_siswa`) VALUES
('P202100008', '2021-10-04', '2021/2022', 'IPA', 'Sugik Dono', 'Ngawi', '2001-06-20', 'Laki-laki', 'Islam', 'Jl.Teuku Umar no 57', 'Lolos'),
('P202100009', '2021-10-04', '2021/2022', 'IPS', 'Fauzan Masliba', 'Ponorogo', '2001-06-13', 'Laki-laki', 'Hindu', 'Jl. Nangka no 58', 'Tidak Lolos'),
('P202100010', '2021-10-06', '2021/2022', 'IPS', 'Yakup Tohin', 'Blitar', '2009-06-17', 'Laki-laki', 'Budha', 'Jl. Waru no 98', 'Lolos'),
('P202100011', '2021-10-06', '2021/2022', 'IPA', 'Tomo Mulyono', 'Jetis', '2017-07-26', 'Laki-laki', 'Katolik', 'Jl Sawo no 10', 'Cadangan'),
('P202100012', '2021-10-06', '2021/2022', 'IPS', 'Ali Matata', 'Surabaya', '2013-08-16', 'Laki-laki', 'Kristen', 'dedqqd', 'Lolos'),
('P202100013', '2021-10-06', '2021/2022', 'Bahasa', 'Peno Tris', 'Sidoarjo', '2015-07-17', 'Laki-laki', 'Katolik', 'Solo', 'Lolos'),
('P202100014', '2021-10-06', '2021/2022', 'IPA', 'Dino Gurindam', 'Banyuwangi', '2012-07-26', 'Laki-laki', 'Kristen', 'Jl Sawojajar', 'Cadangan'),
('P202100015', '2021-10-06', '2021/2022', 'IPS', 'Dimas Nuryono', 'Sidoarjo', '2012-02-29', 'Laki-laki', 'Hindu', 'Jl. Trenggalek no 19', 'unverified'),
('P202100016', '2021-10-06', '2021/2022', 'Bahasa', 'Gayus Tambunan', 'Telogomas', '2017-06-07', 'Laki-laki', 'Hindu', 'Jl. Anggrek no 98', 'unverified'),
('P202100017', '2021-10-07', '2021/2022', 'IPA', 'Dina Tamara', 'Lamongan', '2013-04-10', 'Perempuan', 'Islam', 'Jl. Rambutan no 98', 'Lolos');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nm_user`, `username`, `password`, `level`) VALUES
(1, 'Yasin', 'yasin@gmail.com', '12345', 'user'),
(2, 'Budi', 'Admin', '1234', 'admin'),
(3, 'Fauzan', 'fauzan@gmail.com', '123', 'user'),
(4, 'Debian', 'debian@gmail.com', '1234', 'user'),
(9, 'Tomo', 'tomo@gmail.com', '12', 'user'),
(10, 'Yuhan', 'yuhan@gmail.com', '135', 'user'),
(11, 'ali', 'ali@gmail.com', '1234', 'user'),
(12, 'Trisna', 'trisna@gmail.com', '11234', 'user'),
(13, 'Peno', 'peno@gmail.com', '123', 'user'),
(15, 'Dimas', 'dimas@gmail.com', '123', 'user'),
(17, 'Dina', 'dina@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
