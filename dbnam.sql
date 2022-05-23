-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 04:37 PM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbnam`
--

CREATE TABLE `dbnam` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbnam`
--

INSERT INTO `dbnam` (`id`, `username`, `password`, `email`) VALUES
(1, 'noyal', '$2y$10$Y2MvTbXJfUcqbIeAinTpIuBt8', 'n.noyal@yahoo.com'),
(3, 'noyal080', '$2y$10$5J.999bnliSeUSXLZ1qcPeSec', 'noyal12.nakarmi@gmail.com'),
(4, 'deadcat18', '123456789', 'anjilamhrz@gmail.com'),
(5, 'user101', '$2y$10$AhKW56g85N0MBeJtbayN7OjnB', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbnam`
--
ALTER TABLE `dbnam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbnam`
--
ALTER TABLE `dbnam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
