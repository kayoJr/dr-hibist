-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 07:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_hibist`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `idD` int(100) NOT NULL,
  `nameD` varchar(30) NOT NULL,
  `cost` int(100) NOT NULL,
  `qua` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`idD`, `nameD`, `cost`, `qua`) VALUES
(1, 'parastamol', 10, 200),
(2, 'amoxaxilin', 20, 1000),
(3, 'panadol', 200, 123),
(4, 'siringe', 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idE` int(10) DEFAULT NULL,
  `fnameE` varchar(30) NOT NULL,
  `lnameE` varchar(30) NOT NULL,
  `worktype` varchar(30) NOT NULL,
  `start_Date` date NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idP` bigint(20) NOT NULL,
  `fnameP` varchar(30) NOT NULL,
  `lnameP` varchar(30) NOT NULL,
  `ageP` int(2) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `telP` int(13) NOT NULL,
  `card_no` int(100) NOT NULL,
  `date_reg` date NOT NULL,
  `card fee` int(30) NOT NULL,
  `labP` int(20) NOT NULL,
  `admission` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idP`, `fnameP`, `lnameP`, `ageP`, `sex`, `telP`, `card_no`, `date_reg`, `card fee`, `labP`, `admission`) VALUES
(1, 'barkot bereket', 'bereket', 3, 'm', 911914817, 1, '0000-00-00', 100, 500, 500),
(2, 'israel Kfyalew', 'kefyalew', 14, 'm', 915072024, 2, '2020-11-27', 100, 0, 0),
(3, 'a/wasa jama', '', 8, 'm', 915062544, 3, '2020-11-27', 100, 0, 0),
(4, 'munir abduerhman', '', 7, 'm', 929237115, 4, '2020-11-27', 0, 0, 0),
(5, 'umier sayid', '', 8, 'm', 915406710, 5, '2020-11-27', 0, 0, 0),
(6, 'asha mahmed', '', 1, 'f', 915061516, 6, '2020-11-27', 0, 0, 0),
(7, 'zemzem zeki', '', 3, 'f', 968304405, 7, '2020-11-27', 0, 0, 0),
(8, 'berket mezgbu', '', 1, 'm', 940362541, 8, '2020-11-27', 0, 0, 0),
(9, 'eleyab mulualem', '', 1, 'm', 913420984, 9, '2020-11-27', 0, 0, 0),
(10, 'kasopiya  muluken', '', 1, 'f', 912054597, 10, '2020-11-27', 0, 0, 0),
(11, 'miki', '', 11, 'm', 258520, 55, '2020-11-27', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recordd`
--

CREATE TABLE `recordd` (
  `id` int(22) NOT NULL,
  `idD` int(22) NOT NULL,
  `dater` int(22) NOT NULL,
  `sell_amount` int(22) NOT NULL,
  `eachp` int(22) NOT NULL,
  `totalp` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recordp`
--

CREATE TABLE `recordp` (
  `id` int(22) NOT NULL,
  `idP` int(22) NOT NULL,
  `cardf` int(22) NOT NULL,
  `admf` int(22) NOT NULL,
  `labf` int(22) NOT NULL,
  `phar` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idU` int(10) NOT NULL,
  `fnameU` varchar(30) NOT NULL,
  `lnameU` varchar(30) NOT NULL,
  `positionU` varchar(30) NOT NULL,
  `passwordU` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idU`, `fnameU`, `lnameU`, `positionU`, `passwordU`) VALUES
(1, 'miki', 'ikim', 'admin', 12),
(2, 'lili', 'ilil', 'reception', 123),
(3, 'baba', 'abab', 'pharmasist', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`idD`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idP`);

--
-- Indexes for table `recordd`
--
ALTER TABLE `recordd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idD` (`idD`);

--
-- Indexes for table `recordp`
--
ALTER TABLE `recordp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `idD` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idP` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `recordd`
--
ALTER TABLE `recordd`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recordp`
--
ALTER TABLE `recordp`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idU` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recordd`
--
ALTER TABLE `recordd`
  ADD CONSTRAINT `recordd_ibfk_1` FOREIGN KEY (`idD`) REFERENCES `drug` (`idD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
