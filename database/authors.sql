-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 09:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_migration_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--



--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`, `created_at`, `updated_at`, `book_id`) VALUES
(1, 'Henry Fielding', '2021-02-10 01:00:16', '2021-02-10 01:00:16', 1),
(2, 'Jane Austen', '2021-02-10 01:00:29', '2021-02-10 01:00:29', 2),
(3, 'Stendhal', '2021-02-10 01:00:44', '2021-02-10 01:00:44', 3),
(4, 'Honoré de Balzac', '2021-02-10 01:00:57', '2021-02-10 01:00:57', 4),
(5, 'Charles Dickens', '2021-02-10 01:01:09', '2021-02-10 01:01:09', 5),
(6, 'Gustave Flaubert', '2021-02-10 01:01:19', '2021-02-10 01:01:19', 7),
(7, 'Herman Melville', '2021-02-10 01:02:35', '2021-02-10 01:02:35', 7),
(8, 'Emily Brontë', '2021-02-10 01:02:47', '2021-02-10 01:02:47', 8),
(10, 'Dostoevsky', '2021-02-10 01:05:15', '2021-02-10 01:05:15', 9),
(11, 'Tolstoy', '2021-02-10 01:05:29', '2021-02-10 01:05:29', 10);

--
-- Indexes for dumped tables
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
