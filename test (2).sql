-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2017 at 05:55 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_content` varchar(90) DEFAULT NULL,
  `title` varchar(18) DEFAULT NULL,
  `the_date` varchar(8) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_content`, `title`, `the_date`, `user_id`) VALUES
(1, 'sdf', 'qqqqqqqqqq1qqqqqad', 'sdf', NULL),
(2, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'koko', '0', 0),
(3, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'koko', '0', 0),
(4, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'afdsf', '', 0),
(5, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'adsad', '', 0),
(6, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'sx', '', 0),
(7, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'sx', '', 0),
(8, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'sx', '', 0),
(9, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'sx', '', 0),
(23, 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery Java', 'aa', '4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `articles_users`
--

CREATE TABLE `articles_users` (
  `ID` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) UNSIGNED NOT NULL,
  `what` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson` tinyint(1) UNSIGNED DEFAULT NULL,
  `explain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `what`, `colour`, `lesson`, `explain`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, 'mouse', 'تنهه', NULL, 'تنهه'),
(3, 'mouse', 'تنهه', NULL, 'تنهه'),
(4, 'am', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `secret_answer` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `secret_answer`) VALUES
(1, 'ammar', 'cs.ammarn@gmail.com', '0000', '00000'),
(2, 'cs.ammarn@gmail.com', 'cs.ammarn@gmail.com', 'cs.ammarn@gmail.com', 'cs.ammarn@gmail.com'),
(3, NULL, 'dd', 'am', NULL),
(4, NULL, 'am', '$2y$10$BDtS9chIHWe.TLS7bRWy2O0zy6rVMmVjfZGO5hPkYDJG6vOCl.C/y', NULL),
(27, NULL, 'am', '$2y$10$Fz0.NfEvUhV1jk9PUwT/o.d3sHc683GHYncRHsQz4iOm7a3RiidHm', NULL),
(28, NULL, 'am', '$2y$10$GhUMFJ/ezE/D5CxxelnNreTq6U19jbjxoz3Ncl.//ToamBZ3dab52', NULL),
(29, NULL, 'am', '$2y$10$ZDejnl62GTi.U6Loyx5PBepVVg4papfv15lgIvzUx1FPOeKSS.E/.', NULL),
(30, NULL, 'am', '$2y$10$ia/y6l.QrA2/LuLDJTnhCO5blk8dvl.Rj4nAq4J8P/778zaEYRSxK', NULL),
(31, NULL, 'am', '$2y$10$Co8Kl1/fDRGF8QVbwpqyJOBgE4nbSMmYMpiMXk6/n8DMaIEoGmiIC', NULL),
(32, NULL, 'am', '$2y$10$v9OHfVuQ12NtZDbr8sg3z.Qh5xl5kpSaBj8X50h5Cy8MxwfjTLcDW', NULL),
(33, NULL, 'am', '$2y$10$HpF34B0DmPflvMq9ulyYouxWQt1qkMw8NGTtto7bCXNF7TxB3HjS.', NULL),
(34, NULL, 'am', '$2y$10$cXCLA5UPzUKr/PVI1zq3x.F/w5c2fbTkzfpasQ3n9XFM8udKwz5We', NULL),
(35, NULL, 'am', '$2y$10$I5N4Ce1x8A1o1nzCHGiZNOHPnHgVNTisZoXM.3FUYlDIjiRe68YqC', NULL),
(36, NULL, 'am', '$2y$10$dtyM8rmX4KoztEZQX.nt6OxEDlr5/QH/f2HDwRSXaxi54gXPVS0AS', NULL),
(37, NULL, 'am', '$2y$10$8EN.1rvmOwbDdR0oQUdflekd6MZBakftzctXQdbOIg21o2ilL0D.O', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_articles_user` (`user_id`);

--
-- Indexes for table `articles_users`
--
ALTER TABLE `articles_users`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
