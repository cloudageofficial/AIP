-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 07:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiengine`
--

-- --------------------------------------------------------

--
-- Table structure for table `ai_feeds_cat`
--

CREATE TABLE `ai_feeds_cat` (
  `ai_cat_id` int(30) NOT NULL,
  `ai_cat_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ai_feeds_que`
--

CREATE TABLE `ai_feeds_que` (
  `ai_question_id` int(30) NOT NULL,
  `ai_cat_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ai_question` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ai_answer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ai_user_deatils`
--

CREATE TABLE `ai_user_deatils` (
  `ai_user_id` int(30) NOT NULL,
  `ai_user_type` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `ai_user_firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ai_user_lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ai_user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ai_user_pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_user_deatils`
--

INSERT INTO `ai_user_deatils` (`ai_user_id`, `ai_user_type`, `ai_user_firstname`, `ai_user_lastname`, `ai_user_email`, `ai_user_pass`) VALUES
(6, '1', 'Admin', 'Kale', 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_feeds_cat`
--
ALTER TABLE `ai_feeds_cat`
  ADD PRIMARY KEY (`ai_cat_id`);

--
-- Indexes for table `ai_feeds_que`
--
ALTER TABLE `ai_feeds_que`
  ADD PRIMARY KEY (`ai_question_id`);

--
-- Indexes for table `ai_user_deatils`
--
ALTER TABLE `ai_user_deatils`
  ADD PRIMARY KEY (`ai_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_feeds_cat`
--
ALTER TABLE `ai_feeds_cat`
  MODIFY `ai_cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ai_feeds_que`
--
ALTER TABLE `ai_feeds_que`
  MODIFY `ai_question_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ai_user_deatils`
--
ALTER TABLE `ai_user_deatils`
  MODIFY `ai_user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
