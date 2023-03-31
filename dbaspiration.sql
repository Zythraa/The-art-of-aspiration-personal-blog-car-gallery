-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 05:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaspiration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladminconticaramg`
--

CREATE TABLE `tbladminconticaramg` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminconticarbmw`
--

CREATE TABLE `tbladminconticarbmw` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminconticarcayenne`
--

CREATE TABLE `tbladminconticarcayenne` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminconticarporsche`
--

CREATE TABLE `tbladminconticarporsche` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminconticarvantage`
--

CREATE TABLE `tbladminconticarvantage` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminjapancarhonda`
--

CREATE TABLE `tbladminjapancarhonda` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminjapancarmazda`
--

CREATE TABLE `tbladminjapancarmazda` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminjapancarmitsubishi`
--

CREATE TABLE `tbladminjapancarmitsubishi` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminjapancarsubaru`
--

CREATE TABLE `tbladminjapancarsubaru` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladminjapancartoyota`
--

CREATE TABLE `tbladminjapancartoyota` (
  `id` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(10) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `usertype`, `username`, `password`, `email_address`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com'),
(2, 'user', 'user', '123', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladminconticaramg`
--
ALTER TABLE `tbladminconticaramg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminconticarbmw`
--
ALTER TABLE `tbladminconticarbmw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminconticarcayenne`
--
ALTER TABLE `tbladminconticarcayenne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminconticarporsche`
--
ALTER TABLE `tbladminconticarporsche`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminconticarvantage`
--
ALTER TABLE `tbladminconticarvantage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminjapancarhonda`
--
ALTER TABLE `tbladminjapancarhonda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminjapancarmazda`
--
ALTER TABLE `tbladminjapancarmazda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminjapancarmitsubishi`
--
ALTER TABLE `tbladminjapancarmitsubishi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminjapancarsubaru`
--
ALTER TABLE `tbladminjapancarsubaru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminjapancartoyota`
--
ALTER TABLE `tbladminjapancartoyota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladminconticaramg`
--
ALTER TABLE `tbladminconticaramg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladminconticarbmw`
--
ALTER TABLE `tbladminconticarbmw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladminconticarcayenne`
--
ALTER TABLE `tbladminconticarcayenne`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladminconticarporsche`
--
ALTER TABLE `tbladminconticarporsche`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladminconticarvantage`
--
ALTER TABLE `tbladminconticarvantage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbladminjapancarhonda`
--
ALTER TABLE `tbladminjapancarhonda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladminjapancarmazda`
--
ALTER TABLE `tbladminjapancarmazda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbladminjapancarmitsubishi`
--
ALTER TABLE `tbladminjapancarmitsubishi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladminjapancarsubaru`
--
ALTER TABLE `tbladminjapancarsubaru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladminjapancartoyota`
--
ALTER TABLE `tbladminjapancartoyota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
