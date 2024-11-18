-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 03:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_office`
--

CREATE TABLE `post_office` (
  `name` varchar(250) NOT NULL,
  `last` varchar(250) NOT NULL,
  `home` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `district_2` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `name2` varchar(250) NOT NULL,
  `last2` varchar(250) NOT NULL,
  `home2` varchar(250) NOT NULL,
  `province2` varchar(250) NOT NULL,
  `district2` varchar(250) NOT NULL,
  `district22` varchar(250) NOT NULL,
  `zip2` varchar(250) NOT NULL,
  `number2` varchar(250) NOT NULL,
  `date2` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post_office`
--

INSERT INTO `post_office` (`name`, `last`, `home`, `province`, `district`, `district_2`, `zip`, `number`, `date`, `name2`, `last2`, `home2`, `province2`, `district2`, `district22`, `zip2`, `number2`, `date2`, `id`) VALUES
('fdfdำำ', 'dfdfกกก', '212กกก', 'นครราชสีมา', 'อำเภอเชียงดาว', 'อำเภอป่าแดด', '70130', '281', '2024-11-18', 'fdfdหกกก', 'dfdfssssssกกก', '212', 'นครศรีธรรมราช', 'อำเภอป่าแดด', 'ตำบลแม่นาแก้ว', '70130', '281กก', '2024-11-18', 11),
('thanasan', 'limpaniwkrom3', 'xcxcxcx', 'ตาก', 'อำเภอสันทราย', 'อำเภอสะเมิง', '70130', '281', '2024-11-18', 'fdfdหกกก', 'dfdfssssss', '212', 'บุรีรัมย์', 'ตำบลป่าตัน', 'ตำบลแม่นาแก้ว', '70130', '281', '2024-11-18', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_office`
--
ALTER TABLE `post_office`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_office`
--
ALTER TABLE `post_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
