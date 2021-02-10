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
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `code`, `name`, `writer`, `year`, `created_at`, `updated_at`) VALUES
(1, '0408951', 'The History of Tom Jones, a Foundling', 'Henry Fielding', '1954', '2021-02-10 00:55:47', '2021-02-10 00:55:47'),
(2, '0408952', 'Pride and Prejudice', 'Jane Austen', '1954', '2021-02-10 00:56:12', '2021-02-10 00:56:12'),
(3, '0408953', 'The Red and the Black', 'Stendhal', '1954', '2021-02-10 00:56:36', '2021-02-10 00:56:36'),
(4, '0408954', 'Le Père Goriot', 'Honoré de Balzac', '1954', '2021-02-10 00:57:05', '2021-02-10 00:57:05'),
(5, '0408955', 'David Copperfield', 'Charles Dickens', '1954', '2021-02-10 00:57:29', '2021-02-10 00:57:29'),
(6, '0408956', 'Madame Bovary', 'Gustave Flaubert', '1954', '2021-02-10 00:57:56', '2021-02-10 00:57:56'),
(7, '0408957', 'Mock-Dick', 'Herman Melville', '1954', '2021-02-10 00:58:19', '2021-02-10 00:58:19'),
(8, '0408958', 'Wuthering Heights', 'Emily Brontë', '1954', '2021-02-10 00:58:56', '2021-02-10 00:58:56'),
(9, '0408959', 'The Brothers Karamazov', 'Dostoevsky', '1954', '2021-02-10 00:59:22', '2021-02-10 00:59:22'),
(10, '040896', 'War and Peace', 'Tolstoy', '1954', '2021-02-10 00:59:50', '2021-02-10 00:59:50');

--
-- Indexes for dumped tables
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
