-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 10:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_tb`
--

CREATE TABLE `details_tb` (
  `user` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ph_no` bigint(13) NOT NULL,
  `blood` varchar(6) NOT NULL,
  `atd_wt` int(3) NOT NULL,
  `atd_dbms` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_tb`
--

INSERT INTO `details_tb` (`user`, `name`, `ph_no`, `blood`, `atd_wt`, `atd_dbms`) VALUES
('18DCS084', 'Vraj R Patel', 7574844386, 'O+ve', 56, 84),
('18DCS083', 'Vedant D Patel', 7359564572, 'B+ve', 91, 76);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`user`, `pwd`) VALUES
('18DCS083', '101200'),
('18DCS084', '111200');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(4) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `description`, `url`) VALUES
(1, 't1', 'd1', 'u1'),
(2, 't2', 'd2', 'u2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
