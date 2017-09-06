-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 05:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Diary` text NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biography` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `Diary`, `signup_date`, `biography`) VALUES
(1, 'sounak08', 'password', 'sd@gmail.com', '', '2017-08-15 16:16:51', 'Hi, this the new database.'),
(2, 'rick08', 'Password1', 'sounakume@gmail.com', '', '2017-08-25 17:09:26', 'This new to me.'),
(3, 'Ambero', 'adc123', 'jack@son.com', '', '2017-08-16 15:57:30', 'Hello! I.m Amber. This is my Bio.'),
(30, 'Ambero', 'adc123', 'jack@son.com', '', '2017-08-16 15:57:30', 'Hello! I.m Amber. This is my Bio.'),
(33, 'Beth O\' Neil', 'adc12', 'sounakforu@gmail.com', '', '2017-08-18 15:37:35', 'Hello! I\'m Beth. This is my Bio.'),
(34, '', '91a77502e07f2b4dc4306c7fb4f5240e', 'newemail@gmail.com', '', '2017-08-25 20:27:50', NULL),
(76, '', '4be6c355366723883924d0e922348599', 'sounak98@gmail.com', 'sasasasa', '2017-09-02 16:13:00', NULL),
(77, '', '7ed3eaf31412cca6d008ee385623a63a', 'anu89@gmail.com', 'sasasa', '2017-09-02 16:15:15', NULL),
(78, '', 'a8f5661a126d3c575585fd9ea6bfcee4', 'rick@gmail.com', 'i\'m cool ', '2017-09-02 16:16:08', NULL),
(79, '', '9cab19ee0ec459fc167d00dc23536989', 'sounak99@gmail.com', 'Hi skldhskdslkdhlskda;sl', '2017-09-02 18:07:59', NULL),
(80, '', 'e2d4fee3c674236ea95dcc886d7d34c9', 'sounak88@gmail.com', 'fssdjaldjalkda', '2017-09-06 13:07:31', NULL),
(81, '', 'c58b0e753fbbd56ea04e2f8fd6f040e9', 'sounak8@gmail.com', 'dasasa', '2017-09-02 17:20:06', NULL),
(82, '', '19bfabae235baf01946e0a03918066f8', 'rick008@gmail.com', 'Hi this sdjkdal a]\ndladka;dk\';aa\nd;akd\'\nkapd\'akda;d\nldadl\'aldak;d\'\na', '2017-09-06 13:09:50', NULL),
(83, '', 'b6a3ad508efdc9ba8822b0ba16951a3d', 'rick088@gmail.com', 'sasasasa', '2017-09-06 13:12:16', NULL),
(84, '', '5980f9b1036412d4d5258dd59e23805f', 'rick098@gmail.com', 'sdasdasasaqs', '2017-09-06 13:12:09', NULL);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
