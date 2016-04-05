-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 09:42 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` int(10) UNSIGNED NOT NULL,
  `family` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `family`, `active`, `created`, `modified`) VALUES
(1, 'Global', 1, '2016-04-01 17:22:25', '2016-04-01 18:13:57'),
(2, 'Learjet', 1, '2016-04-01 17:26:46', '2016-04-01 17:26:46'),
(3, 'Challenger', 1, '2016-04-01 17:27:06', '2016-04-01 17:27:12'),
(5, 'Familly A', 1, '2016-04-01 17:32:43', '2016-04-01 17:32:43'),
(6, 'Fam B', 0, '2016-04-01 17:32:56', '2016-04-01 17:32:56'),
(7, 'Famd', 1, '2016-04-01 17:56:57', '2016-04-01 17:56:57'),
(8, 'Famee', 0, '2016-04-01 17:57:09', '2016-04-01 17:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `region` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `created`, `modified`) VALUES
(3, 'Latin America', '2016-04-01 18:41:52', '2016-04-01 18:41:52'),
(4, ' Africa & Middle East', '2016-04-01 18:42:07', '2016-04-01 18:42:07'),
(5, 'Europe', '2016-04-01 18:42:26', '2016-04-01 18:42:26'),
(6, 'North America', '2016-04-01 18:42:57', '2016-04-01 18:42:57'),
(7, 'Asia-Pacific & India', '2016-04-01 18:43:13', '2016-04-01 18:43:13'),
(8, 'Russia and CIS', '2016-04-01 18:43:30', '2016-04-01 18:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `service_facilities`
--

CREATE TABLE `service_facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `family_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `facility_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `authorization` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `aog_phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_aog_phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `asf_excellence_award_winner` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `aog_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `website_url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `full_address` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_facilities`
--

INSERT INTO `service_facilities` (`id`, `family_id`, `type_id`, `region_id`, `facility_name`, `authorization`, `country`, `state`, `city`, `zip`, `phone`, `aog_phone`, `secondary_aog_phone`, `asf_excellence_award_winner`, `aog_email`, `website_url`, `full_address`, `active`, `created`, `modified`) VALUES
(3, 2, 1, 3, 'AASSA/Aviacion (FDO)', 'Line ASF', 'Argentina', '', 'San Fernando', 'B1646', '54-1147-148068', '54-1147-148068 / +54 11 4714 8052', '', '', '', '', 'Aeropuerto Internacional San Fernando', 1, '2016-04-02 20:56:33', '2016-04-02 20:56:33'),
(4, 2, 1, 3, 'Test A', 'jshdfkj', '', '', '', '', '', '', '', '', '', 'http://www.google.com', 'hvohvo', 1, '2016-04-02 21:57:11', '2016-04-02 21:57:11'),
(5, 2, 1, 3, 'ihoiwhgog', 'rkghwoi', '', '', '', '', '', '', '', '', '', '', 'aaaaaaaa\r\nbbbbbbbbb\r\ncccccccccccccc\r\ndddddddddddddddddddddddd', 1, '2016-04-02 21:58:28', '2016-04-02 21:58:28'),
(6, 2, 1, 3, 'faaaaa', 'fbf', '', '', '', '', '', '', '', '', '', '', 'bbebbe\r\nyjrjyt\r\nykytktyktktyktyktky', 1, '2016-04-02 21:59:47', '2016-04-02 21:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `family_id` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `family_id`, `type`, `active`, `created`, `modified`) VALUES
(1, 2, 'Learjet 40', 1, '2016-04-01 18:04:45', '2016-04-01 18:04:45'),
(2, 2, 'Learjet 60', 1, '2016-04-01 18:05:59', '2016-04-01 18:05:59'),
(3, 2, 'Learjet 70/75', 1, '2016-04-01 18:08:01', '2016-04-01 18:08:13'),
(4, 3, 'Challenger 300', 1, '2016-04-01 18:08:40', '2016-04-01 18:08:40'),
(5, 3, 'Challenger 350', 0, '2016-04-01 18:08:59', '2016-04-01 18:08:59'),
(6, 3, 'Challenger 605', 1, '2016-04-01 18:09:23', '2016-04-01 18:09:23'),
(7, 3, 'Challenger 650', 1, '2016-04-01 18:09:37', '2016-04-01 18:09:37'),
(8, 3, 'Challenger 850', 1, '2016-04-01 18:09:49', '2016-04-01 18:09:49'),
(9, 1, 'Global', 1, '2016-04-01 18:10:06', '2016-04-01 18:10:06'),
(10, 1, 'ksjbcbeee', 1, '2016-04-01 18:10:20', '2016-04-01 18:10:29'),
(11, 1, 'kjcbkwbckjbciwcb', 1, '2016-04-01 18:10:38', '2016-04-01 18:10:38'),
(12, 1, 'wkjcbkjcbk', 1, '2016-04-01 18:10:59', '2016-04-01 18:10:59'),
(13, 1, 'kjwcnjecb', 1, '2016-04-01 18:11:11', '2016-04-01 18:11:11'),
(14, 1, 'wkjcbekjbc', 1, '2016-04-01 18:11:16', '2016-04-01 18:11:16'),
(15, 1, 'wkjcbewc', 1, '2016-04-01 18:11:20', '2016-04-01 18:11:20'),
(16, 1, 'kwjcbejcb', 1, '2016-04-01 18:11:25', '2016-04-01 18:11:25'),
(17, 1, 'jwebciecb', 1, '2016-04-01 18:11:29', '2016-04-01 18:11:29'),
(18, 1, 'kjwebcowebc', 1, '2016-04-01 18:11:34', '2016-04-01 18:11:34'),
(19, 1, 'kcjjwbceowbc', 1, '2016-04-01 18:11:38', '2016-04-01 18:11:38'),
(20, 1, 'ckjbwcoew', 1, '2016-04-01 18:11:42', '2016-04-01 18:11:42'),
(21, 1, 'uebcoubcou', 1, '2016-04-01 18:11:51', '2016-04-01 18:11:51'),
(22, 1, 'kjvbwjbv', 1, '2016-04-01 18:11:56', '2016-04-01 18:11:56'),
(23, 1, 'kjvwbrv', 1, '2016-04-01 18:12:00', '2016-04-01 18:12:00'),
(24, 1, 'wrbvirbv', 1, '2016-04-01 18:12:05', '2016-04-01 18:12:05'),
(25, 1, 'wjvbi;wvb', 1, '2016-04-01 18:12:09', '2016-04-01 18:12:09'),
(26, 1, 'lkndvdnvskl', 1, '2016-04-01 18:22:04', '2016-04-01 18:22:04'),
(27, 2, 'Learjet 50', 1, '2016-04-01 18:24:47', '2016-04-01 18:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `first_name`, `last_name`, `password`, `active`, `created`, `modified`) VALUES
(1, 'admin', 'admin@learjet.com', 'nabin', 'subba', '$2y$10$u21Fm.tQYcpp.XzAzLQGIO0LyKbRtZjsZPfFoOBBbQJ2PD6KJaPMO', 1, '2016-03-20 19:57:14', '2016-04-01 13:02:15'),
(2, 'nabin', 'nabin@test.com', 'nabin', 'limbu', '$2y$10$tirNg/ZC4fc/1p3IDuDi1uW78n3Hz3HXJ0jIu4inxfNm94OX.fEb2', 0, '2016-03-20 23:02:46', '2016-03-20 23:02:46'),
(3, 'sudan', 'sudan@test.com', 'sudan', 'lim', '$2y$10$5yFUOFw9mZAvAFBi7a0zMu1EwgIxc7UN1L5m4cpc55DUqXRgRYIw6', 1, '2016-03-20 23:03:25', '2016-04-01 12:24:10'),
(4, 'dgd', 'hf@gfc.td', 'fd', 'gcyt', '$2y$10$26XVZ97gHv6V/Sq3l2P66uOl8SSr2RzWsiGgKc2U3I57hxCYiRf.a', 0, '2016-03-20 23:04:11', '2016-03-20 23:04:11'),
(5, 'jguygdyud', 'jdbvh@rjgh.jg', 'dhvbhj', 'vbdh', '$2y$10$qmgoK/NDc.55M2rJqvIJv.JJ7CoFFAP0LAl6eOg.wxuo/jH9U3cG2', 0, '2016-03-20 23:04:30', '2016-03-20 23:04:30'),
(6, 'hvbvh', 'bvh@bv.jd', 'hgf', 'geyf', '$2y$10$TC6B1BkkZdqQS9LYcGmDtO4CD8iG9YYBRasTIlMHrMfn9bi7DMk8y', 0, '2016-03-20 23:04:45', '2016-03-20 23:04:45'),
(7, 'hssdhj', 'vhdv@rjhbbk.fj', 'jvhf', 'vbh', '$2y$10$0MeONG6nNaif5i45adYfR.VrlML/yAhcjxQYG95UL67VR.Mp4GNtW', 0, '2016-03-20 23:05:02', '2016-03-20 23:05:02'),
(8, 'shjvgvh', 'bvhvb@kb.jfvh', 'jdvbh', 'v', '$2y$10$TLKd7FpW7zCgdjiqXqk2cO41zr82tNFiYuJAm9B.7Mbw7C7TVpr92', 0, '2016-03-20 23:05:17', '2016-03-20 23:05:17'),
(9, 'jvvvb', 'bvv@rhu.jb', 'vbb', 'uuiv', '$2y$10$b8QupcUandw5KZR0uYu2x.0eJD/2/d61Gb3tplfQdjCHIPJsHZ5SS', 0, '2016-03-20 23:05:35', '2016-03-20 23:05:35'),
(11, 'jvhb', 'bvifv@bj.jbv', 'bfhjvb', 'bvjb', '$2y$10$Q.UbRiblL1Tmo47FhjGnPO3qBFeSHVS0b0pPX2Hq.LoDkINTgg4IG', 0, '2016-03-20 23:06:05', '2016-03-20 23:06:05'),
(13, 'sudana', 'sudana@test.com', 'sudan', 'limbu', '$2y$10$PKnjYYHhSBtc7IQNCTeexObl6vSEZgrcICqlPwdLdUsZRTZOSn55a', 1, '2016-04-01 12:18:27', '2016-04-01 12:18:27'),
(14, 'iuviugiuu', 'jkjkj@jkjk.kl', 'uigiug', 'iuiug', '$2y$10$SEwod.Bnf6lzMXHcjEKNcuBfYYGhiRb4vLOBFhojavtz0FH/RZmrG', 1, '2016-04-01 12:39:10', '2016-04-01 12:39:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_facilities`
--
ALTER TABLE `service_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service_facilities`
--
ALTER TABLE `service_facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
