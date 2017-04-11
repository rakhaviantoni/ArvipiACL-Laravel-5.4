-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 04:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arvpiacl`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionid` int(11) NOT NULL,
  `positionname` varchar(25) NOT NULL,
  `press` tinyint(1) NOT NULL,
  `users` tinyint(1) NOT NULL,
  `news` tinyint(1) NOT NULL,
  `payroll` tinyint(1) NOT NULL,
  `employees` tinyint(1) NOT NULL,
  `recruitment` tinyint(1) NOT NULL,
  `marketing` tinyint(1) NOT NULL,
  `sales` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionid`, `positionname`, `press`, `users`, `news`, `payroll`, `employees`, `recruitment`, `marketing`, `sales`) VALUES
(1, 'Admin', 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'CEO', 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'COO', 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'CFO', 0, 0, 0, 1, 1, 1, 0, 0),
(5, 'CTO', 1, 1, 1, 0, 0, 0, 0, 0),
(6, 'CMO', 0, 0, 0, 0, 0, 0, 1, 1),
(7, 'Finance', 0, 0, 0, 1, 0, 0, 0, 0),
(8, 'HRD', 0, 0, 0, 0, 1, 1, 0, 0),
(9, 'Software Developer', 1, 1, 0, 0, 0, 0, 0, 0),
(10, 'Editorial', 0, 0, 1, 0, 0, 0, 0, 0),
(11, 'Marketing', 0, 0, 0, 0, 0, 0, 1, 0),
(12, 'Sales', 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positionid` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `positionid`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rakha Viantoni', 'rakhaviantoni', 'rakha.rvp@gmail.com', 4, '$2y$10$NjCL1nRI8KYVyZnn2IObpOHdOZ0jMTltDPcave84hHjIWiEt9vlNO', 'A53RwBJoCxLCpe8ivgvuHs18k593g0XdRPirrLZ3oU7raXx0JE2BH4KCFbYj', '2017-04-10 01:20:45', '2017-04-10 13:58:22'),
(2, 'Admin', 'admin', 'admin@admin.com', 1, '$2y$10$uY3YuBDcQzsSemolmd/O7OY258UYpaZ2yjJDpqdHVOKcIsHfb7c8C', 'msgJLMoxMP2mqEhRlIgxYhNvpqjIDUMxTNWrEUjBoiqBBHDsyY5DQ7i4EojE', '2017-04-10 01:36:32', '2017-04-10 13:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD UNIQUE KEY `positionid` (`positionid`),
  ADD KEY `positionid_2` (`positionid`),
  ADD KEY `positionid_3` (`positionid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `positionid_3` (`positionid`),
  ADD KEY `positionid` (`positionid`),
  ADD KEY `positionid_2` (`positionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`positionid`) REFERENCES `position` (`positionid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
