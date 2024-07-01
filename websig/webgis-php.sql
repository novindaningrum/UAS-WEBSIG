-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 07:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `kode_kabupaten` varchar(100) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `luas_wilayah` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `kode_kabupaten`, `nama_kabupaten`, `koordinat`, `jumlah_penduduk`, `luas_wilayah`) VALUES
(1, '3302', 'Banyumas', '-7.362274826893668, 109.10943969842893', 82317924, 17083020.00);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` varchar(100) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `luas_wilayah` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kecamatan`, `id_kabupaten`, `nama_kecamatan`, `jumlah_penduduk`, `luas_wilayah`) VALUES
('3302010', 1, 'Lumbir', 50548, 10266.00),
('3302020', 1, 'Wangon', 84755, 6078.00),
('3302030', 1, 'Jatilawang', 67483, 4816.00),
('3302040', 1, 'Rawalo', 53711, 4964.00),
('3302050', 1, 'Kebasen', 68650, 5400.00),
('3302060', 1, 'Kemranjen', 73478, 6071.00),
('3302070', 1, 'Sumpiuh', 58580, 6001.00),
('3302080', 1, 'Tambak', 51223, 5203.00),
('3302090', 1, 'Somagede', 38230, 4011.00),
('3302100', 1, 'Kalibagor', 58369, 3573.00),
('3302110', 1, 'Banyumas', 53668, 3809.00),
('3302120', 1, 'Patikraja', 61998, 4323.00),
('3302130', 1, 'Purwojati', 37789, 3786.00),
('3302140', 1, 'Ajibarang', 103490, 6650.00),
('3302150', 1, 'Gumelar', 54347, 9395.00),
('3302160', 1, 'Pekuncen', 76883, 9395.00),
('3302170', 1, 'Cilongok', 126255, 10534.00),
('3302180', 1, 'Karanglewas', 68467, 3250.00);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `npps` int(100) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_pondok` varchar(100) NOT NULL,
  `alamat_pondok` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`npps`, `kode_kecamatan`, `nama_pondok`, `alamat_pondok`, `status`, `jenjang_pendidikan`, `koordinat`) VALUES
(5124538, '3302030', 'Roudlotul Huda', 'KEDUNGLEGOK, RT003, RW004', '', '', '-7.527995092477504,109.09843429611783'),
(5231425, '3302060', 'Pondok Pesantren Sirojuth Tholibin', 'Jl. stasiun kemranjen, RT2, RW5', '', '', '-7.622417922224639,109.31573852495389'),
(5234252, '3302070', 'Hidayatil Mubtadiin', 'SELANEGARA,RT.02/11', '', '', '-7.622428556257327,109.31573852495387'),
(5432634, '3302120', 'SYIFAUL QULUB', 'RONTEN, NOTOG, PATIKRAJA, RT001, RW005', '', '', '-7.487735655168228,109.20772715194299'),
(5432785, '3302080', 'Darussa`adah', 'Karangjoho Watuagung, Tambak', '', '', '-7.586942978223376,109.42099058077909'),
(5464326, '3302080', 'Miftahul Falah', 'Jl. KH. Yusuf Tsanawi Desa Buniayu, RT5, RW3, Kode Pos53196', '', '', '-7.6231039190548255, 109.4412756258024'),
(5634256, '3302040', 'Miftahul Burhani', 'DESA PESAWAHAN, RT02, RW04', '', '', '-7.520926218340639,109.16116790037405'),
(5754321, '3302090', 'Ma`had Al-faruq As-salafy Li Tahfizhil Quran', 'Jl. Raya Somagede RT 03 RW 05', '', '', '-7.523242900648774,109.32873136543873'),
(51234567, '3302050', 'At Taujieh Al Islamy Lil Huffadz ', 'Dusun Leler RT 01 RW 02 Desa Randegan, RT1, RW2', '', '', '-7.565823387591323,109.22834092084233');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`),
  ADD KEY `kecamatan_ibfk_1` (`id_kabupaten`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npps`) USING BTREE,
  ADD KEY `kode_kecamatan` (`kode_kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_2` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_2` FOREIGN KEY (`kode_kecamatan`) REFERENCES `kecamatan` (`kode_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
