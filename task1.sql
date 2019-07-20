-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 02:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `uidAdmin` varchar(30) DEFAULT NULL,
  `emailAdmin` varchar(250) DEFAULT NULL,
  `pwdAdmin` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `uidAdmin`, `emailAdmin`, `pwdAdmin`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$GpG5DxTndhGRH95IxEyDpuC2YWmX.Au9Q7OIvlalpg.8FHP/ExVOe');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL,
  `e_lastname` varchar(25) DEFAULT NULL,
  `e_firstname` varchar(50) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `e_phone` varchar(11) DEFAULT NULL,
  `e_bday` date DEFAULT NULL,
  `e_address` varchar(50) DEFAULT NULL,
  `e_sss_gsis` varchar(10) DEFAULT NULL,
  `e_status` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`e_id`, `e_lastname`, `e_firstname`, `e_mail`, `e_phone`, `e_bday`, `e_address`, `e_sss_gsis`, `e_status`) VALUES
(55, 'Flor', 'Matthew', 'mjosephflor@gmail.com', '09187281961', '2019-05-22', 'P-2, Mobod, Oroquieta City', '21354576', 'Active'),
(56, 'Caburnay', 'Paul David', 'davidpaulcaburnay@gmail.com', '09451212512', '2019-05-21', 'P-2, Mobod, Oroquieta City', '0123456782', 'Active'),
(57, 'Florante', 'Virgilia', 'mjosepah@gmail.com', '09187281922', '2019-05-18', 'P-2, Mobod, Oroquieta City', '8888888', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
