-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 02:57 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(5) NOT NULL,
  `author` varchar(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `author`, `title`, `genre`, `price`, `publish_date`, `description`) VALUES
(1, 'Gambardella, Matthew', 'XML Developer\'s Guide', 'Computer', 44.95, '2000-10-01', 'An in-depth look at creating applications\n      with XML.'),
(2, 'Ralls, Kim', 'Midnight Rain', 'Fantasy', 5.95, '2000-12-16', 'A former architect battles corporate zombies,\n      an evil sorceress, and her own childhood to become queen\n      of the world.'),
(4, 'Marthen Lau', 'Mobile Web Design', 'Computer', 5.6, '2012-04-24', 'mobile web design book'),
(17, 'Jaka', 'Jaka Sembung', 'Folks', 12, '2012-04-24', 'bagus'),
(18, 'Jaka', 'Jaka Sembung', 'Folks', 12, '2012-04-24', 'bagus'),
(19, 'lisa', 'data warehouse', 'fiction', 67000, '2020-04-20', 'kjkjkjkjk'),
(21, 'Ralls, Kim', 'Midnight Rain', 'Fantasy', 5.95, '2012-04-24', 'A former architect battles corporate zombies,      an evil sorceress, and her own childhood to become queen      of the world.'),
(23, 'dewiws', 'PROGRAMMING', 'education', 123000, '2020-04-20', 'python php web service java javascript nodejs react'),
(55, 'Dewi Wulan Sari', 'aku', 'ko', 23000, '2020-04-21', 'nnn'),
(66, 'Dewi Wulan Sari', 'WEB SERVICE', 'comedy', 23000, '2020-04-21', 'n'),
(76, 'coba', 'coba', 'ccoba', 12, '2020-04-20', 'coba'),
(98, 'm', 'lb l', 'b', 99, '2020-04-20', '678'),
(110, '10000006d', 'aku sebuah buku', 'informatics', 123000, '2020-04-06', 'N'),
(123, 'dewiws', 'ku', 'ko', 23000, '2020-04-18', 'aduh euy'),
(198, 'k', 'k', 'k', 67, '2020-04-20', 'k'),
(666, 'Matthew Bellamy', 'Starlight', 'Fiction', 5, '2012-07-24', 'Book of fiction'),
(897, 'baru', 'baru', 'baru', 123, '2020-04-21', 'baru'),
(899, 'm', 'm', 'm', 123000, '2020-04-20', 'm'),
(999, 'sheila', 'WEB SERVICE', 'informatics', 123000, '2020-04-20', ',mm'),
(1211, 'dewiws', 'WEB SERVICE', 'education', 123000, '2020-04-20', 'll'),
(1231, 'sheila', 'ku', 'horor', 123000, '2020-04-20', 'mm'),
(9999, 'Dewi Wulan Sari', 'aku', 'informatics', 123000, '2020-04-20', 'mm'),
(12388, 'sheila', 'WEB SERVICE', 'horor', 979, '2020-04-21', 'n'),
(77777, 'n', 'n', 'n', 7, '2020-04-20', 'n'),
(10000007, '', '', '', 0, '0000-00-00', ''),
(10000008, '', '', '', 0, '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
