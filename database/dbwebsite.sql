-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 09:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usersID` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usersID`, `usersUid`, `usersEmail`, `usersPassword`) VALUES
(1, 'fesu101010', 'acecarbon006@gmail.com', '$2y$10$hk/naKQgKgk2Vd6yHwoUq.qG5wC6i6kFDnu3qSO6lnWlburlsY.da');

-- --------------------------------------------------------

--
-- Table structure for table `stat1`
--

CREATE TABLE `stat1` (
  `id` int(11) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `act` int(11) NOT NULL,
  `Recovered` int(11) NOT NULL,
  `Deaths` int(11) NOT NULL,
  `Conf` int(11) NOT NULL,
  `PUI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surveylist`
--

CREATE TABLE `surveylist` (
  `id_no` int(11) NOT NULL,
  `last` varchar(25) NOT NULL,
  `first` varchar(25) NOT NULL,
  `mid` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `age` varchar(5) NOT NULL,
  `bdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `house_no` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `brgy` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `q1` varchar(30) NOT NULL,
  `q2` varchar(30) NOT NULL,
  `q3` varchar(30) NOT NULL,
  `q4` varchar(30) NOT NULL,
  `q5` varchar(30) NOT NULL,
  `tandc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usersID`);

--
-- Indexes for table `stat1`
--
ALTER TABLE `stat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveylist`
--
ALTER TABLE `surveylist`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stat1`
--
ALTER TABLE `stat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveylist`
--
ALTER TABLE `surveylist`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
