-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2026 at 11:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `token_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_name`, `mobile`, `doctor_name`, `appointment_date`, `token_no`) VALUES
(1, 'yasaswani', '7382166989', 'Dr Ravi', '2006-07-09', 1),
(2, 'krishnarao', '9701148332', 'Dr Kumar', '1970-01-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `service`, `location`) VALUES
(3, 'General Medicine', 'General Checkup', 'Ground Floor'),
(4, 'Cardiology', 'Heart Care', 'First Floor'),
(5, 'Neurology', 'Brain & Nerve Care', 'Second Floor'),
(6, 'Orthopedic', 'Bone & Joint Care', 'Third Floor');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `availability` varchar(20) DEFAULT NULL,
  `time_slot` varchar(50) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialization`, `availability`, `time_slot`, `room_no`) VALUES
(1, 'Dr Ravi', 'Cardiologist', 'Available', '9AM-12PM', 101),
(2, 'Dr Priya', 'Neurologist', 'Available', '10AM-1PM', 102),
(3, 'Dr Kumar', 'Orthopedic', 'Available', '11AM-2PM', 103);

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` int(11) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `morning` varchar(50) DEFAULT NULL,
  `evening` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `department`, `morning`, `evening`) VALUES
(2, 'General Medicine', '10AM-12PM', '4PM-6PM'),
(3, 'Cardiology', '10AM-2PM', '5PM-8PM'),
(4, 'Neurology', '11AM-3PM', '6PM-9PM'),
(5, 'Orthopedic', '9AM-12PM', '3PM-6PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'user', 'user123', 'user'),
(2, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
