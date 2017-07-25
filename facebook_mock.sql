-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2017 at 10:20 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_mock`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `sex` varchar(255) NOT NULL DEFAULT 'M',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reg_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `surname`, `email`, `password`, `birthday`, `sex`, `updated_at`, `reg_at`) VALUES
(3, 'Charles', 'Amos', 'Amos@gmail.com', 'noproblemo', '2017-07-20', 'F', '2017-07-18 09:55:47', '2017-07-18 09:55:47'),
(4, 'John ', 'Doe', 'doe@email.com', '23415', '2017-08-04', 'M', '2017-07-18 09:58:03', '2017-07-18 09:58:03'),
(5, 'Santi', 'Israel', 'itsrael@projaro.com', 'noproblemo', '2006-08-26', 'M', '2017-07-18 10:01:13', '2017-07-18 10:01:13'),
(6, 'Santi', 'Israel', 'itsrael@projaro.com', 'noproblemo', '2006-08-26', 'M', '2017-07-18 10:01:55', '2017-07-18 10:01:55'),
(7, 'Daniella', 'Gurly', 'dannygirl@email.com', 'gogirl123', '2017-02-02', 'F', '2017-07-19 10:09:01', '2017-07-19 10:09:01'),
(8, 'Uche', 'Achinaka', 'pirate@carribbean.com', '12345', '1979-01-31', 'M', '2017-07-19 10:18:27', '2017-07-19 10:18:27'),
(9, 'Sherry', 'Nnenna', 'sherrycoco@admin.com', 'cocobutter123', '1982-11-27', 'F', '2017-07-19 10:37:29', '2017-07-19 10:37:29'),
(10, 'Benjis', 'Udoko', 'Ben10@heavenly.com', 'uprightman', '1979-06-13', 'M', '2017-07-19 10:39:59', '2017-07-19 10:39:59'),
(11, 'Balowest', 'Balogun', 'Balo@west.com', '2345big', '2017-07-15', 'M', '2017-07-19 10:42:16', '2017-07-19 10:42:16'),
(12, 'Brist', 'Emeka', 'brist@briston.com', 'babaoh123', '2017-07-15', 'M', '2017-07-19 10:43:49', '2017-07-19 10:43:49'),
(13, 'Brist', 'Emeka', 'brist@briston.com', 'babaoh123', '2017-07-15', 'M', '2017-07-19 10:45:44', '2017-07-19 10:45:44'),
(14, 'Brist', 'Emeka', 'brist@briston.com', 'babaoh123', '2017-07-15', 'M', '2017-07-19 10:48:02', '2017-07-19 10:48:02'),
(15, 'Daniella', 'Mato', 'daniella@projaro.com', 'thegurl234', '1996-08-24', 'F', '2017-07-20 10:55:21', '2017-07-20 10:55:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
