-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 09:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'maup', 'maup');

-- --------------------------------------------------------

--
-- Table structure for table `data_riwayat`
--

CREATE TABLE `data_riwayat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `riwayat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_riwayat`
--

INSERT INTO `data_riwayat` (`id`, `nama`, `alamat`, `jekel`, `riwayat`, `status`, `foto`) VALUES
(1, 'eling', 'sokaraja', 'laki-laki', 'jakarta', 'PDP', ''),
(2, 'Wiki', 'sokaraja ', 'laki-laki', 'Medan', 'ODP', ''),
(3, 'samprol', 'sidodadi', 'laki-laki', 'amerika', 'PDP', ''),
(4, 'ayang', '', '', 'jakarta', 'PDP', ''),
(5, 'ayang', 'cilacap', 'perempuan', 'jepang', 'POSITIF', ''),
(6, 'Sultan', 'Banjarnanyar RT 01 RW 05', 'laki-laki', 'Jakarta', 'ODP', ''),
(7, 'Arsa', 'Jakartaaa', 'laki-laki', 'jakarta', 'POSITIF', ''),
(8, 'a', 'Banjarnanyar RT 01 RW 05', 'laki-laki', 'Jakarta', 'PDP', ''),
(9, 'a', 'Banjarnanyar RT 01 RW 05', 'laki-laki', 'Jakarta', 'PDP', ''),
(10, 'Sudarti', 'Jl. Brawijaya, RT. 01 RW. 05, Desa Banjaranyar, Ke', 'laki-laki', 'Jakarta', 'PDP', ''),
(11, 'namaa', 'Jl. Brawijaya, RT. 01 RW. 05, Desa Banjaranyar, Ke', 'perempuan', 'Jakarta', 'POSITIF', 'Foto.jpeg'),
(12, 'Fadlan', 'Gunung Lurah', 'laki-laki', 'Banjaranayar', 'POSITIF', 'Foto.jpeg'),
(13, 'Sudarti', 'Jl. Brawijaya, RT. 01 RW. 05, Desa Banjaranyar, Ke', 'laki-laki', 'Banjaranayar', 'PDP', 'ttd fadlan sani mubarok.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jekel` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama_lengkap`, `tgl_lahir`, `alamat`, `jekel`, `status`) VALUES
(2, 'admin@gmail.com', 'admin', 'Karseno', '1976-10-12', 'Banyumas', '', ''),
(3, 'user@user.com', 'userrrr', 'Sudarti', '2021-07-21', 'Jl. Brawijaya, RT. 01 RW. 05, Desa Banjaranyar, Kec. Sokaraja', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_riwayat`
--
ALTER TABLE `data_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_riwayat`
--
ALTER TABLE `data_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
