-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 10:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin99');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(30) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `jabatan`, `alamat`) VALUES
(2, 9881818, 'joss', 'wali kelas', 'jl pal5'),
(4, 123656, 'agan ni bos', 'kepala sekolah', 'Jl Parit Bugis'),
(8, 19987236, 'Akang gendang S.pd', 'pengajar', 'Jl. Purnama'),
(10, 982746, 'Qhanoss', 'perpustakaan', 'Jl. Adisucipto Gg Siaga dalam');

-- --------------------------------------------------------

--
-- Table structure for table `x`
--

CREATE TABLE `x` (
  `id` int(11) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `x`
--

INSERT INTO `x` (`id`, `nisn`, `nama`, `jurusan`, `alamat`) VALUES
(1, 1231209837, 'Tania', 'IPA 3', 'Jl. Panglima Aim'),
(3, 12341234, 'Relly Wiratama ', 'IPA 3', 'Jl Parit Haji Muksin');

-- --------------------------------------------------------

--
-- Table structure for table `xi`
--

CREATE TABLE `xi` (
  `id` int(11) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi`
--

INSERT INTO `xi` (`id`, `nisn`, `nama`, `jurusan`, `alamat`) VALUES
(1, 999324323, 'BoboBoy api', 'IPA 1', 'Jl. Karya Baru'),
(2, 1998872909, 'Bossman', 'IPA 3', 'jl karet'),
(3, 12345678, 'Renal', 'IPS 1', 'Jl. Daya Nasional');

-- --------------------------------------------------------

--
-- Table structure for table `xii`
--

CREATE TABLE `xii` (
  `id` int(11) NOT NULL,
  `nisn` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xii`
--

INSERT INTO `xii` (`id`, `nisn`, `nama`, `jurusan`, `alamat`) VALUES
(2, 19988729, 'Aba', 'IPA 1', 'Jl Parit Bugis'),
(3, 128736162, 'lukman kun', 'IPS 1', 'Jl Swignyo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `x`
--
ALTER TABLE `x`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xi`
--
ALTER TABLE `xi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xii`
--
ALTER TABLE `xii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `x`
--
ALTER TABLE `x`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xi`
--
ALTER TABLE `xi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xii`
--
ALTER TABLE `xii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
