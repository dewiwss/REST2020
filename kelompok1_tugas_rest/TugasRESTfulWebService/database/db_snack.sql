-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 04:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_snack`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_snack`
--

CREATE TABLE `tb_snack` (
  `id_snack` int(5) NOT NULL,
  `nama_snack` varchar(30) NOT NULL,
  `jenis_snack` varchar(10) NOT NULL,
  `supplier` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_snack`
--

INSERT INTO `tb_snack` (`id_snack`, `nama_snack`, `jenis_snack`, `supplier`) VALUES
(1, 'Keripik SIngkong', 'Gurih', 'Berkah Anugrah'),
(2, 'Keripik Pisang', 'Manis', 'Aneka Jajan'),
(3, 'Marning', 'Gurih', 'Berkah Anugrah'),
(4, 'Maicih', 'Pedas', 'Berkah Maulida'),
(7, 'Keripik Taleus', 'Manis', 'Aneka Jajanan'),
(8, 'QTela', 'Gurih', 'Berkah Ramadhan'),
(23, 'Kusuka', 'Gurih', 'Aneka Jajanan'),
(64, 'Keripik Bayam', 'Asin', 'Cipta Berkah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_snack`
--
ALTER TABLE `tb_snack`
  ADD PRIMARY KEY (`id_snack`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
