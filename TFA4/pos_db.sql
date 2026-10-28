-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2026 at 06:51 PM
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
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Harry Kane', 'HKane@gmail.com', '09164813317', '2026-10-01 00:14:16'),
(2, 'Mark Snowpher', 'wynter@gmail.com', '09264968843', '2026-10-01 00:14:16'),
(3, 'Declan Rice', 'declan@gmail.com', '09148534476', '2026-10-01 00:14:16'),
(4, 'Daniel Gipal', 'daniel@example.com', '09234865591', '2026-10-01 00:14:16'),
(5, 'Jai Opetaia', 'jaiOp@gmail.com', '09153427741', '2026-10-01 00:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `password`, `avatar`, `created_at`) VALUES
(1, 'admin', 'Admin User', '$2y$10$cSTU39f.3/mvhm5uIYZgIOCJbNfususBSb385IEMiQAhMoCDfir1W', NULL, '2026-10-01 00:14:16'),
(2, 'employee1', 'Frank Castle', '$2y$10$vxeLUAOau/FGsVCC4/XVhuoTHIOJSxjyHBHJCmkzwqeUhDBP0yZqu', NULL, '2026-10-01 00:14:16'),
(3, 'employee2', 'Michael Olise', '$2y$10$LrOc8edf/BwIWncfdNbzDeJz3ykQNJL/tKPuNHaUT.UevdlhX25PG', NULL, '2026-10-01 00:14:16'),
(4, 'manager1', 'Matt Murdock', '$2y$10$WkYQpriAPzhnmsUFr3O/k.W2PgAZ5LZ0Fd3gg2mXtA4tls/U2cNEq', NULL, '2026-10-01 00:14:16'),
(5, 'staff1', 'John Cena', '$2y$10$PFlN.feIN69tELA82yJSIu3Fk2nrZPr1dVi7YW72GSdxvcJLezARW', NULL, '2026-10-01 00:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
