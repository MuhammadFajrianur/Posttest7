-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 04:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(64) NOT NULL,
  `merk` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `harga` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `merk`, `type`, `harga`) VALUES
(14, 'Cannon', 'D-400', '1200000'),
(15, 'Sony', 'wh-1000xm4', '3500000'),
(16, 'FujiFilm', 'x-s10', '2500000'),
(17, 'Cannon', 'D-1600', '4500000'),
(18, 'FujiFilm', 'x-s20', '1500000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
