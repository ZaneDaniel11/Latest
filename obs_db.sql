-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 02:33 PM
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
-- Database: `obs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce_tb`
--

CREATE TABLE `announce_tb` (
  `id` int(50) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announce_tb`
--

INSERT INTO `announce_tb` (`id`, `about`, `info`, `date`) VALUES
(1, 'notice', 'Hala testing naay guba ang imong otok yepee', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `arrival_tb`
--

CREATE TABLE `arrival_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `departured_time` varchar(100) NOT NULL,
  `route_destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arrival_tb`
--

INSERT INTO `arrival_tb` (`id`, `bus_no`, `unit`, `departured_time`, `route_destination`) VALUES
(7, 123, 'Air Condation', '10:10 AM', 'Daan Bantayan');

-- --------------------------------------------------------

--
-- Table structure for table `book_tb`
--

CREATE TABLE `book_tb` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `route_destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_tb`
--

INSERT INTO `book_tb` (`id`, `email`, `unit`, `route_destination`) VALUES
(1, 'kramnotado22@gmail.com', 'ALC', 'male'),
(2, 'kramnotado22@gmail.com', 'ALC', 'male'),
(3, 'kramnotado22@gmail.com', 'ALC', 'male'),
(4, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(5, 'testing@gmail.com', 'DLX', 'danao'),
(6, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(7, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(8, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(9, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(10, 'kramnotado22@gmail.com', 'ALC', 'cebu'),
(11, 'fdfdw@gmail.com', 'DLX', 'danao'),
(12, 'email@gmail.com', 'DLX', 'danao');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stamby`
--

CREATE TABLE `bus_stamby` (
  `id` int(100) NOT NULL,
  `bus_no` int(100) NOT NULL,
  `route_destination` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `cor_number` int(100) NOT NULL,
  `drivers_name` varchar(100) NOT NULL,
  `conductors_name` varchar(100) NOT NULL,
  `departure_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departure_tb`
--

CREATE TABLE `departure_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `time_dept` varchar(50) NOT NULL,
  `route_destination` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `passenger` int(50) NOT NULL,
  `drivers_name` varchar(50) NOT NULL,
  `conductors_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departure_tb`
--

INSERT INTO `departure_tb` (`id`, `bus_no`, `time_dept`, `route_destination`, `unit`, `passenger`, `drivers_name`, `conductors_name`, `status`) VALUES
(9, 9847, '10:10', 'BOGO', 'DLX', 20, 'Normanton', '212', ''),
(10, 8788, '', 'cebu', 'Air Condation', 0, 'Mark', 'Meriam', ''),
(11, 8788, '', 'cebu', 'Air Condation', 666, 'Mark', 'Meriam', ''),
(12, 0, '', '3', 'Not Air Conditioning', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lost_tb`
--

CREATE TABLE `lost_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `drivers_name` varchar(100) NOT NULL,
  `conductors_name` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` varchar(50) NOT NULL,
  `ticket_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_tb`
--

INSERT INTO `lost_tb` (`id`, `bus_no`, `drivers_name`, `conductors_name`, `item`, `date`, `status`, `ticket_no`) VALUES
(7, 212, '', '', '212', '2023-12-21 15:50:46.090830', 'Pending', 212),
(8, 1212, '', '', '212', '2023-12-21 15:50:55.082998', 'Pending', 2121),
(9, 1212, '', '', '212', '2023-12-21 15:51:00.463758', 'Pending', 2121),
(10, 1212, '', '', '212', '2023-12-21 15:54:46.189192', 'Pending', 2121),
(11, 1212, '', '', '212', '2023-12-21 15:55:02.203969', 'Pending', 2121);

-- --------------------------------------------------------

--
-- Table structure for table `main_tb`
--

CREATE TABLE `main_tb` (
  `id` int(100) NOT NULL,
  `bus_no` int(100) NOT NULL,
  `time_dept` varchar(100) NOT NULL,
  `route_destination` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `cor_number` int(100) NOT NULL,
  `pass_ticket` int(100) NOT NULL,
  `bagg_ticket` int(100) NOT NULL,
  `passenger` int(100) NOT NULL,
  `drivers_name` varchar(100) NOT NULL,
  `conductors_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_tb`
--

INSERT INTO `main_tb` (`id`, `bus_no`, `time_dept`, `route_destination`, `unit`, `cor_number`, `pass_ticket`, `bagg_ticket`, `passenger`, `drivers_name`, `conductors_name`, `date`) VALUES
(70, 77777, '777', '7777', '77', 777, 777, 77, 77, '77', '777', ''),
(71, 8788, '', 'cebu', 'Air Condation', 9876, 0, 0, 0, 'Mark', 'Meriam', '2023-12-29 23:33:24'),
(72, 8788, '', 'cebu', 'Air Condation', 9876, 9980443, 344, 666, 'Mark', 'Meriam', '2024-01-09 00:30:19'),
(73, 0, '', '3', 'Not Air Conditioning', 0, 0, 0, 0, '', '', '2024-01-13 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `management_tb`
--

CREATE TABLE `management_tb` (
  `id` int(50) NOT NULL,
  `bus_no` int(50) NOT NULL,
  `time_dept` varchar(50) NOT NULL,
  `route_destination` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `cor_number` int(50) NOT NULL,
  `pass_ticket` int(50) NOT NULL,
  `bagg_ticket` int(50) NOT NULL,
  `passenger` int(50) NOT NULL,
  `drivers_name` varchar(50) NOT NULL,
  `conductors_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `management_tb`
--

INSERT INTO `management_tb` (`id`, `bus_no`, `time_dept`, `route_destination`, `unit`, `cor_number`, `pass_ticket`, `bagg_ticket`, `passenger`, `drivers_name`, `conductors_name`) VALUES
(33, 89061, '14:50', 'CEBU', 'Not Air Conditioning', 778831, 1234, 1231, 231, 'Pagatpat', 'Lepaopao'),
(34, 89061, '14:50', 'CEBU', 'Not Air Conditioning', 778831, 1234, 1231, 23, 'Pagatpat', 'Lepaopao'),
(35, 87661, '02:58', 'Daan', 'Not Air Conditioning', 2442, 212, 123, 12, 'Pino', 'Karl'),
(36, 89061, '21:51', 'CEBU', 'Not Air Conditioning', 778831, 4343, 4344, 45, 'Pagatpat', 'Lepaopao'),
(37, 89061, '21:51', 'CEBU', 'Not Air Conditioning', 778831, 4343, 4344, 45, 'Pagatpat', 'Lepaopao'),
(40, 0, '00:31', '21', 'Air Condation', 1212, 121212, 2121, 12, 'Pablo', 'job');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce_tb`
--
ALTER TABLE `announce_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrival_tb`
--
ALTER TABLE `arrival_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_stamby`
--
ALTER TABLE `bus_stamby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departure_tb`
--
ALTER TABLE `departure_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_tb`
--
ALTER TABLE `lost_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_tb`
--
ALTER TABLE `main_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_tb`
--
ALTER TABLE `management_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce_tb`
--
ALTER TABLE `announce_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arrival_tb`
--
ALTER TABLE `arrival_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_tb`
--
ALTER TABLE `book_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bus_stamby`
--
ALTER TABLE `bus_stamby`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;

--
-- AUTO_INCREMENT for table `departure_tb`
--
ALTER TABLE `departure_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lost_tb`
--
ALTER TABLE `lost_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `main_tb`
--
ALTER TABLE `main_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `management_tb`
--
ALTER TABLE `management_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
