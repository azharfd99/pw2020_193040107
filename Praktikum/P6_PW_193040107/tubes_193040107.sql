-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040107`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `kode` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `kadaluwarsa` date NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`kode`, `foto`, `nama`, `tgl_produksi`, `kadaluwarsa`, `harga`) VALUES
(1, '1.jpeg', 'Mentos', '2019-12-12', '2020-12-12', 'Rp 12.000'),
(2, '20.jpeg', 'Pocky', '2019-11-11', '2020-11-11', 'Rp 8.000'),
(3, '3.jpeg', 'Kitkat', '2019-10-10', '2020-12-10', 'Rp 11.000'),
(4, '4.jpeg', 'Doritos', '2019-02-12', '2020-02-12', 'Rp 10.500'),
(5, '5.jpeg', 'Indomie Soto Lamongan', '2019-05-11', '2020-05-12', 'Rp 3.000'),
(6, '6.jpeg', 'Pilus Garuda', '2019-05-01', '2020-05-02', 'Rp 6.000'),
(7, '7.jpeg', 'Ice Cream Magnum Original', '2019-06-11', '2020-05-12', 'Rp 10.000'),
(8, '8.jpeg', 'Chitato', '2019-03-11', '2020-02-03', 'Rp 8.500'),
(9, '9.jpeg', 'Sari Roti', '2019-05-11', '2020-05-12', 'Rp 15.000'),
(10, '10.jpeg', 'Kusuka Kripik Singkong', '2019-08-10', '2020-08-10', 'Rp 6.000');

-- --------------------------------------------------------

--
-- Table structure for table `makanan2`
--

CREATE TABLE `makanan2` (
  `kode` int(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `kadaluwarsa` date NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan2`
--

INSERT INTO `makanan2` (`kode`, `foto`, `nama`, `tgl_produksi`, `kadaluwarsa`, `harga`) VALUES
(1, '1.jpeg', 'Mentos', '2019-12-12', '2020-12-12', 'Rp 12.000'),
(2, '20.jpeg', 'Pocky', '2019-11-11', '2020-11-11', 'Rp 8.000'),
(3, '3.jpeg', 'Kitkat', '2019-10-10', '2020-12-10', 'Rp 11.000'),
(4, '4.jpeg', 'Doritos', '2019-02-12', '2020-02-12', 'Rp 10.500'),
(5, '5.jpeg', 'Indomie Soto Lamongan', '2019-05-11', '2020-05-12', 'Rp 3.000'),
(6, '6.jpeg', 'Pilus Garuda', '2019-05-01', '2020-05-02', 'Rp 6.000'),
(7, '7.jpeg', 'Ice Cream Magnum Original', '2019-06-11', '2020-05-12', 'Rp 10.000'),
(8, '8.jpeg', 'Chitato', '2019-03-11', '2020-02-03', 'Rp 8.500'),
(9, '9.jpeg', 'Sari roti', '2019-05-11', '2020-05-12', 'Rp 15.000'),
(10, '10.jpeg', 'Kusuka Kripik Singkong', '2019-12-12', '2020-12-12', 'Rp 12.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `makanan2`
--
ALTER TABLE `makanan2`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `makanan2`
--
ALTER TABLE `makanan2`
  MODIFY `kode` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
