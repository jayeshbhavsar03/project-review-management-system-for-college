-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 10:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty`
--

CREATE TABLE `bsc_it_ty` (
  `id` int(11) NOT NULL,
  `gr_no` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `stu_name` varchar(100) NOT NULL,
  `project_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty_rev1`
--

CREATE TABLE `bsc_it_ty_rev1` (
  `id` int(11) NOT NULL,
  `roll_n` int(11) NOT NULL,
  `rev1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty_rev2`
--

CREATE TABLE `bsc_it_ty_rev2` (
  `id` int(11) NOT NULL,
  `roll_n` int(11) NOT NULL,
  `rev2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty_rev3`
--

CREATE TABLE `bsc_it_ty_rev3` (
  `id` int(11) NOT NULL,
  `roll_n` int(11) NOT NULL,
  `rev3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty_rev4`
--

CREATE TABLE `bsc_it_ty_rev4` (
  `id` int(11) NOT NULL,
  `roll_n` int(11) NOT NULL,
  `rev4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bsc_it_ty_rev5`
--

CREATE TABLE `bsc_it_ty_rev5` (
  `id` int(11) NOT NULL,
  `roll_n` int(11) NOT NULL,
  `rev5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`id`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(1, 'jayesh', 'bhavsar', 'j@gmail.com', '9370821861', '123'),
(2, 'sahil', 'datar', 'sahil@gmail.com', '9370821861', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsc_it_ty`
--
ALTER TABLE `bsc_it_ty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_it_ty_rev1`
--
ALTER TABLE `bsc_it_ty_rev1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_it_ty_rev2`
--
ALTER TABLE `bsc_it_ty_rev2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_it_ty_rev3`
--
ALTER TABLE `bsc_it_ty_rev3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_it_ty_rev4`
--
ALTER TABLE `bsc_it_ty_rev4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsc_it_ty_rev5`
--
ALTER TABLE `bsc_it_ty_rev5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsc_it_ty`
--
ALTER TABLE `bsc_it_ty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `bsc_it_ty_rev1`
--
ALTER TABLE `bsc_it_ty_rev1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bsc_it_ty_rev2`
--
ALTER TABLE `bsc_it_ty_rev2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bsc_it_ty_rev3`
--
ALTER TABLE `bsc_it_ty_rev3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bsc_it_ty_rev4`
--
ALTER TABLE `bsc_it_ty_rev4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bsc_it_ty_rev5`
--
ALTER TABLE `bsc_it_ty_rev5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration1`
--
ALTER TABLE `registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
