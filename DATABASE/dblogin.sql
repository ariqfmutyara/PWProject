-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 10:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pw_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`image`, `id`, `caption`, `genre`) VALUES
('nature2.jpg', 7, 'Hello', 'P'),
('nature2.jpg', 8, 'fuck', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pw_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pp` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `register_date_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username_user`, `email_user`, `pw_user`, `name_user`, `pp`, `bio`, `register_date_user`) VALUES
(1, 'ariqfmutyara', 'ariqmutyara@gmail.com', '5d5b321b8059be9389488598f51a03b4', 'Muhammad Ariq Farhansyah Mutyara', 'fotografi2j', 'Hello', '2018-12-08 10:45:42'),
(3, 'ariqmutyara', 'ariqff@gmail.com', '5d5b321b8059be9389488598f51a03b4', 'Ariq', '', '', '2018-12-10 12:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id_voters` int(50) NOT NULL,
  `username_voter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_voter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pw_voter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_voter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `register_date_voter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id_voters`, `username_voter`, `email_voter`, `pw_voter`, `name_voter`, `register_date_voter`) VALUES
(2, 'ariqfmutyara', 'ariqmutyara@gmail.com', '5d5b321b8059be9389488598f51a03b4', 'Muhammad Ariq Farhansyah Mutyara', '2018-12-08 06:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id_voters`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id_voters` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
