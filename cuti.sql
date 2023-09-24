-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 08:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `ID` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  `TIME` varchar(300) NOT NULL,
  `FIRSTDATE` varchar(300) NOT NULL,
  `LASTDATE` varchar(300) NOT NULL,
  `PICTURE` longblob NOT NULL,
  `STATUS` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`ID`, `IDUSER`, `TIME`, `FIRSTDATE`, `LASTDATE`, `PICTURE`, `STATUS`) VALUES
INSERT INTO `cuti` (`ID`, `IDUSER`, `TIME`, `FIRSTDATE`, `LASTDATE`, `PICTURE`, `STATUS`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `ISADMIN` int(11) NOT NULL,
  `EMAIL` varchar(300) NOT NULL,
  `PASSWORD` varchar(300) NOT NULL,
  `NAME` varchar(3000) NOT NULL,
  `PHONENUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `ISADMIN`, `EMAIL`, `PASSWORD`, `NAME`, `PHONENUMBER`) VALUES
(1, 0, 'alifhaker1@gmail.com', '123', 'MUHAMMAD ALIF DANIEL BIN MOHJD HAIRUL HEZZELIN', 1117141009),
(2, 1, 'admin@gmail.com', 'admin', 'admin', 11111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;