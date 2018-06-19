-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 05:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `book_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `status`, `book_id`) VALUES
(1, 'java', 'free', '00001'),
(2, 'c', 'free', '00002'),
(3, 'java (complete refrence)', 'free', '00003'),
(4, 'c (c in depth)', 'free', '12121'),
(5, 'java (Black Book)', 'free', '12123'),
(6, '', 'free', ''),
(7, '', 'free', '12122'),
(8, 'node js', 'free', '1313'),
(9, 'HTML', 'free', '1599'),
(10, '', 'free', ''),
(11, '', 'free', ''),
(12, '', 'free', ''),
(13, '', 'free', ''),
(14, '', 'free', ''),
(15, '', 'free', ''),
(16, '', 'free', ''),
(17, '', 'free', ''),
(18, '', 'free', ''),
(19, '', 'free', ''),
(20, '', 'free', ''),
(21, '', 'free', ''),
(22, '1111', 'free', 'java'),
(23, '112', 'free', 'java'),
(24, 'java', 'free', '1121'),
(25, 'java', 'free', '1122'),
(26, 'java', 'free', '1123'),
(27, 'java', 'free', '1122'),
(28, 'java', 'free', '1124'),
(29, 'java', 'free', '1124'),
(30, 'html', 'free', '1124');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE `issued` (
  `id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `issue_date` date NOT NULL DEFAULT '1900-01-01',
  `return_date` date NOT NULL DEFAULT '1900-01-01'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`id`, `book_name`, `book_id`, `user_id`, `issue_date`, `return_date`) VALUES
(1, 'salik', '77678', '79879', '1900-01-01', '1900-01-01'),
(2, 'java', '1443', 'user_id', '1900-01-01', '1900-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `type_of_user` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_id`, `type_of_user`) VALUES
(49, 'salim', 'ansari', 'mohammad ', 'salim', '31546', 'User'),
(50, 'himan', 'himan', 'himanshu', 'gandu', '49929', 'User'),
(48, 'hashim', 'ansari', 'Mohammad ', 'hashim', '24829', 'pending'),
(47, 'aman123', 'salik', 'aman', 'kumar', '56576', 'pending'),
(46, 'aman12', 'kkumar', 'aman', 'kumar', '88848', 'pending'),
(40, 'altamash', 'alt', 'altamash', 'ansari', '10897', 'pending'),
(41, 'ahjk', 'hhjkhjh', 'kjhjkh', 'jkhjk', '33349', 'pending'),
(42, 'ahjkjkkj', 'kljkjlkj', 'kjjlkj', 'kjl', '97781', 'pending'),
(43, 'saliuiu', 'salik', 'jkljk', 'kjlkjjl', '94281', 'pending'),
(44, 'saliuiuui', 'kkjk', 'kjkj', 'kjkjk', '51452', 'pending'),
(45, 'saliuiuuji', 'jkjk', 'jkjkjk', 'jkjkjk', '52261', 'pending'),
(29, 'root', 'admin', 'admin', 'admin', '1212', 'Admin'),
(39, 'div', 'div', 'div', 'div', '57760', 'User'),
(38, 'aman', 'kumar', 'aman', 'kumar', '50466', 'User'),
(37, 'salik', 'salik', 'salik', 'salik', '11068', 'User'),
(36, 'msalik42', 'salik', 'saalik', 'ansari', '56726', 'Librarian'),
(51, '', '', '', '', '86026', 'pending'),
(52, 'salik1', 'salik1', 'salik', 'ansari', '65844', 'pending'),
(53, 'abcd', '1234', 'salik', 'ansari', '2810', 'User'),
(54, 'ritesh', 'ritesh', 'Ritesh', 'Srivastawa', '94085', 'Librarian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `books` ADD FULLTEXT KEY `book_name` (`book_name`);

--
-- Indexes for table `issued`
--
ALTER TABLE `issued`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `issued`
--
ALTER TABLE `issued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
