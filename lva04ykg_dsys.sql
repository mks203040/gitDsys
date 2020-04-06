-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2020 at 03:18 PM
-- Server version: 5.7.21-20-beget-5.7.21-20-1-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lva04ykg_dsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminTable`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `adminTable`;
CREATE TABLE `adminTable` (
  `id` int(11) UNSIGNED NOT NULL,
  `file1date` varchar(111) DEFAULT NULL,
  `file2type` int(11) DEFAULT NULL,
  `file3company` varchar(111) DEFAULT NULL,
  `file4jpg` varchar(111) DEFAULT NULL,
  `php1date` varchar(111) DEFAULT NULL,
  `php2packname` varchar(111) DEFAULT NULL,
  `php3month` varchar(111) DEFAULT NULL,
  `php4year` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminTable`
--

INSERT INTO `adminTable` (`id`, `file1date`, `file2type`, `file3company`, `file4jpg`, `php1date`, `php2packname`, `php3month`, `php4year`) VALUES
(1, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-04(02).jpg', '2015-04-13_05-21-21', '150210(01,2,kruszwica)', '215-02', '2015'),
(72, '150209-01', 2, 'transvora', '150209(01,2,transvora)-01(01,150209).jpg', '2015-04-16_19-15-43', '150209(01,2,transvora)', '215-02', '2015'),
(73, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-01(01,150206).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(74, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-02(01,150208).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(75, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-03(01,150208).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(76, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-04(01,150208).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(77, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-04(02).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(78, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-05(01,150206).jpg', '2015-04-16_19-15-43', '150210(01,2,kruszwica)', '215-02', '2015'),
(79, '150210-01', 4, 'kruszwica', '150210(01,4,kruszwica)-01(01,150130).jpg', '2015-04-16_19-15-43', '150210(01,4,kruszwica)', '215-02', '2015'),
(80, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-01(01,150217).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(81, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-02(01,150217).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(82, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-03(01,150217).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(83, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-04(01,150217).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(84, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-04(02).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(85, '150218-01', 2, 'kruszwica', '150218(01,2,kruszwica)-05(01,150216).jpg', '2015-04-16_19-15-43', '150218(01,2,kruszwica)', '215-02', '2015'),
(86, '150218-01', 4, 'kruszwica', '150218(01,4,kruszwica)-06(01,150130).jpg', '2015-04-16_19-15-43', '150218(01,4,kruszwica)', '215-02', '2015'),
(87, '150218-02', 2, 'transvora', '150218(02,2,transvora)-01(01,150218).jpg', '2015-04-16_19-15-43', '150218(02,2,transvora)', '215-02', '2015'),
(88, '150219-01', 2, 'cukrohurt', '150219(01,2,cukrohurt)-01(01,150218).jpg', '2015-04-16_19-15-43', '150219(01,2,cukrohurt)', '215-02', '2014'),
(89, '150219-01', 2, 'cukrohurt', '150219(01,2,cukrohurt)-02(01,150218).jpg', '2015-04-16_19-15-43', '150219(01,2,cukrohurt)', '215-02', '2015'),
(90, '150219-01', 2, 'cukrohurt', '150219(01,2,cukrohurt)-03(01,150219).jpg', '2015-04-16_19-15-43', '150219(01,2,cukrohurt)', '215-02', '2015'),
(91, '150219-01', 2, 'cukrohurt', '150219(01,2,cukrohurt)-03(02).jpg', '2015-04-16_19-15-43', '150219(01,2,cukrohurt)', '215-02', '2015'),
(92, '150209-01', 2, 'transvora', '150209(01,2,transvora)-01(01,150209).jpg', '2015-04-17_03-07-38', '150209(01,2,transvora)', '215-02', '2015'),
(93, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-01(01,150206).jpg', '2015-04-17_03-07-38', '150210(01,2,kruszwica)', '215-02', '2015'),
(94, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-02(01,150208).jpg', '2015-04-17_03-07-38', '150210(01,2,kruszwica)', '215-02', '2015'),
(95, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-03(01,150208).jpg', '2015-04-17_03-07-38', '150210(01,2,kruszwica)', '215-02', '2015'),
(96, '150210-01', 2, 'kruszwica', '150210(01,2,kruszwica)-04(01,150208).jpg', '2015-04-17_03-07-38', '150210(01,2,kruszwica)', '215-02', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `doc`;
CREATE TABLE `doc` (
  `idDoc` int(11) NOT NULL,
  `date` date NOT NULL,
  `page` int(11) NOT NULL,
  `nrdoc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`idDoc`, `date`, `page`, `nrdoc`) VALUES
(1, '2015-01-25', 1, '###-###-###'),
(2, '2015-01-25', 1, '###-###-###'),
(3, '2015-01-25', 1, '###-###-###'),
(74, '2015-01-26', 5, '###-###-###'),
(75, '2015-04-09', 1, '###-###-###'),
(76, '2015-04-16', 1, '###-###-###');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `url` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`) VALUES
(1, 'ДОГОВОР', '1'),
(2, 'РАСХОДЫ', '2'),
(3, 'ДОХОДЫ', '3'),
(4, 'ПРОФОРМА', '4'),
(5, 'АВАНС', '5'),
(6, 'КАССА', '6'),
(7, 'БАНК', '7'),
(8, 'ПЕРЕПИСКА', '8'),
(9, 'УЧЕРЕДИТ', '9');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) UNSIGNED NOT NULL,
  `idlib` varchar(111) NOT NULL DEFAULT '',
  `libfile` varchar(100) NOT NULL,
  `file1date` varchar(111) DEFAULT NULL,
  `file2type` int(11) DEFAULT NULL,
  `file3company` varchar(111) DEFAULT NULL,
  `file4jpg` varchar(111) DEFAULT NULL,
  `php1date` varchar(111) DEFAULT NULL,
  `php2packname` varchar(111) DEFAULT NULL,
  `php3month` varchar(111) DEFAULT NULL,
  `php4year` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `idlib`, `libfile`, `file1date`, `file2type`, `file3company`, `file4jpg`, `php1date`, `php2packname`, `php3month`, `php4year`) VALUES
(2632, '(,,)', '', '-', 0, '', NULL, '2016-06-28_14-08-33', NULL, '2--', '20-');

-- --------------------------------------------------------

--
-- Table structure for table `zakaz`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `zakaz`;
CREATE TABLE `zakaz` (
  `zId` int(11) NOT NULL,
  `zDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zakazScan`
--
-- Creation: Dec 20, 2017 at 12:02 PM
--

DROP TABLE IF EXISTS `zakazScan`;
CREATE TABLE `zakazScan` (
  `idScan` int(16) NOT NULL,
  `scanDate` varchar(30) NOT NULL,
  `scanId` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakazScan`
--

INSERT INTO `zakazScan` (`idScan`, `scanDate`, `scanId`) VALUES
(107, '2015-04-23 03:22:41', '150219'),
(108, '2015-04-23 03:22:41', '150219'),
(109, '2015-04-23 03:22:41', '150220'),
(110, '2015-04-23 15:56:17', '150219'),
(111, '2015-04-23 15:56:17', '150219'),
(112, '2015-04-23 15:56:17', '150220'),
(113, '2015-04-24 23:50:37', '150209'),
(114, '2015-04-24 23:50:37', '150210'),
(115, '2015-04-24 23:50:37', '150210'),
(116, '2015-04-25 00:00:14', '150209'),
(117, '2015-04-25 00:00:14', '150210'),
(118, '2015-04-25 00:00:14', '150210'),
(119, '2015-04-25 00:14:40', '150209(01,2,transvora)'),
(120, '2015-04-25 00:14:40', '150210(01,2,kruszwica)'),
(121, '2015-04-25 00:14:40', '150210(01,4,kruszwica)'),
(122, '2015-04-25 00:19:30', '150210(01,2,kruszwica)'),
(123, '2015-04-25 00:19:30', '150218(01,2,kruszwica)'),
(124, '2015-04-25 00:19:30', '150218(01,4,kruszwica)'),
(125, '2015-04-25 00:19:30', '150219(01,2,cukrohurt)'),
(126, '2015-04-25 02:31:25', '150209(01,2,transvora)'),
(127, '2015-04-25 02:31:25', '150210(01,2,kruszwica)'),
(128, '2015-04-25 02:31:25', '150210(01,4,kruszwica)'),
(129, '2015-04-25 02:31:25', '150218(01,2,kruszwica)'),
(130, '2015-04-25 02:31:25', '150218(01,4,kruszwica)'),
(131, '2015-04-25 02:31:25', '150218(02,2,transvora)'),
(132, '2015-04-25 02:31:25', '150219(01,2,cukrohurt)'),
(133, '2015-04-25 02:43:21', '150209(01,2,transvora)'),
(134, '2015-04-25 02:43:21', '150210(01,2,kruszwica)'),
(135, '2015-04-25 02:43:21', '150210(01,4,kruszwica)'),
(136, '2015-04-25 02:43:21', '150218(01,2,kruszwica)'),
(137, '2015-04-25 02:43:21', '150218(01,4,kruszwica)'),
(138, '2015-04-25 02:43:21', '150218(02,2,transvora)'),
(139, '2015-04-25 02:43:21', '150219(01,2,cukrohurt)'),
(140, '2015-04-25 02:43:21', '150219(02,2,kruszwica)'),
(141, '2015-04-25 02:43:21', '150219(02,4,kruszwica)'),
(142, '2015-04-25 02:43:21', '150219(03,2,polfink)'),
(143, '2015-04-25 02:43:21', '150219(04,2,transvora)'),
(144, '2015-04-25 02:43:21', '150219(05,2,transvora)'),
(145, '2015-04-25 02:43:21', '150220(01,2,kruszwica)'),
(146, '2015-04-25 02:43:21', '150220(01,4,kruszwica)'),
(147, '2015-04-25 02:43:21', '150220(02,2,polfink)'),
(148, '2015-04-25 02:43:21', '150220(03,2,polfink)'),
(149, '2015-04-25 02:43:21', '150220(04,2,cukrohurt)'),
(150, '2015-04-25 02:43:21', '150220(05,2,consult)'),
(151, '2015-04-25 02:43:21', '150223(01,2,polfink)'),
(152, '2015-04-25 02:43:21', '150223(02,2,polfink)'),
(153, '2015-04-25 02:43:21', '150225(01,2,polfink)'),
(154, '2015-04-25 02:43:21', '150225(02,2,polfink)'),
(155, '2015-04-25 02:43:21', '150226(01,2,polfink)'),
(156, '2015-04-25 02:43:21', '150226(02,2,polfink)'),
(157, '2015-04-25 02:43:21', '150226(03,2,kruszwica)'),
(158, '2015-04-25 02:43:21', '150226(03,4,kruszwica)'),
(159, '2015-04-25 02:43:21', '150226(04,2,kruszwica)'),
(160, '2015-04-25 02:43:21', '150226(04,4,kruszwica)'),
(161, '2015-04-25 02:43:21', '150226(05,2,transvora)'),
(162, '2015-04-25 02:43:21', '150226(06,2,transvora)'),
(163, '2015-04-25 02:43:21', '150226(07,2,consult)'),
(164, '2015-04-25 02:48:09', '150209(01,2,transvora)'),
(165, '2015-04-25 02:48:09', '150210(01,2,kruszwica)'),
(166, '2015-04-25 02:48:09', '150210(01,4,kruszwica)'),
(167, '2015-04-25 02:48:09', '150218(01,2,kruszwica)'),
(168, '2015-04-25 02:48:09', '150218(01,4,kruszwica)'),
(169, '2015-04-25 02:48:09', '150218(02,2,transvora)'),
(170, '2015-04-25 02:48:09', '150219(01,2,cukrohurt)'),
(171, '2015-04-25 02:48:09', '150219(02,2,kruszwica)'),
(172, '2015-04-25 02:48:09', '150219(02,4,kruszwica)'),
(173, '2015-04-25 02:48:09', '150219(03,2,polfink)'),
(174, '2015-04-25 02:48:09', '150219(04,2,transvora)'),
(175, '2015-04-25 02:48:09', '150219(05,2,transvora)'),
(176, '2015-04-25 02:48:09', '150220(01,2,kruszwica)'),
(177, '2015-04-25 02:48:09', '150220(01,4,kruszwica)'),
(178, '2015-04-25 02:48:09', '150220(02,2,polfink)'),
(179, '2015-04-25 02:48:09', '150220(03,2,polfink)'),
(180, '2015-04-25 02:48:09', '150220(04,2,cukrohurt)'),
(181, '2015-04-25 02:48:09', '150220(05,2,consult)'),
(182, '2015-04-25 02:48:09', '150223(01,2,polfink)'),
(183, '2015-04-25 02:48:09', '150223(02,2,polfink)'),
(184, '2015-04-25 02:48:09', '150225(01,2,polfink)'),
(185, '2015-04-25 02:48:09', '150225(02,2,polfink)'),
(186, '2015-04-25 02:48:09', '150226(01,2,polfink)'),
(187, '2015-04-25 02:48:09', '150226(02,2,polfink)'),
(188, '2015-04-25 02:48:09', '150226(03,2,kruszwica)'),
(189, '2015-04-25 02:48:09', '150226(03,4,kruszwica)'),
(190, '2015-04-25 02:48:09', '150226(04,2,kruszwica)'),
(191, '2015-04-25 02:48:09', '150226(04,4,kruszwica)'),
(192, '2015-04-25 02:48:09', '150226(05,2,transvora)'),
(193, '2015-04-25 02:48:09', '150226(06,2,transvora)'),
(194, '2015-04-25 02:48:09', '150226(07,2,consult)'),
(195, '2015-04-25 02:48:59', '150209(01,2,transvora)'),
(196, '2015-04-25 02:48:59', '150210(01,2,kruszwica)'),
(197, '2015-04-25 02:48:59', '150210(01,4,kruszwica)'),
(198, '2015-04-25 02:48:59', '150218(01,2,kruszwica)'),
(199, '2015-04-25 02:48:59', '150218(01,4,kruszwica)'),
(200, '2015-04-25 02:48:59', '150218(02,2,transvora)'),
(201, '2015-04-25 02:48:59', '150219(01,2,cukrohurt)'),
(202, '2015-04-25 02:48:59', '150219(02,2,kruszwica)'),
(203, '2015-04-25 02:48:59', '150219(02,4,kruszwica)'),
(204, '2015-04-25 02:48:59', '150219(03,2,polfink)'),
(205, '2015-04-25 02:48:59', '150219(04,2,transvora)'),
(206, '2015-04-25 02:48:59', '150219(05,2,transvora)'),
(207, '2015-04-25 02:48:59', '150220(01,2,kruszwica)'),
(208, '2015-04-25 02:48:59', '150220(01,4,kruszwica)'),
(209, '2015-04-25 02:48:59', '150220(02,2,polfink)'),
(210, '2015-04-25 02:48:59', '150220(03,2,polfink)'),
(211, '2015-04-25 02:48:59', '150220(04,2,cukrohurt)'),
(212, '2015-04-25 02:48:59', '150220(05,2,consult)'),
(213, '2015-04-25 02:48:59', '150223(01,2,polfink)'),
(214, '2015-04-25 02:48:59', '150223(02,2,polfink)'),
(215, '2015-04-25 02:48:59', '150225(01,2,polfink)'),
(216, '2015-04-25 02:48:59', '150225(02,2,polfink)'),
(217, '2015-04-25 02:48:59', '150226(01,2,polfink)'),
(218, '2015-04-25 02:48:59', '150226(02,2,polfink)'),
(219, '2015-04-25 02:48:59', '150226(03,2,kruszwica)'),
(220, '2015-04-25 02:48:59', '150226(03,4,kruszwica)'),
(221, '2015-04-25 02:48:59', '150226(04,2,kruszwica)'),
(222, '2015-04-25 02:48:59', '150226(04,4,kruszwica)'),
(223, '2015-04-25 02:48:59', '150226(05,2,transvora)'),
(224, '2015-04-25 02:48:59', '150226(06,2,transvora)'),
(225, '2015-04-25 02:48:59', '150226(07,2,consult)'),
(226, '2015-04-25 02:49:17', '150210(01,4,kruszwica)'),
(227, '2015-04-25 02:49:17', '150218(01,4,kruszwica)'),
(228, '2015-04-25 02:49:17', '150219(02,4,kruszwica)'),
(229, '2015-04-25 02:49:17', '150220(01,4,kruszwica)'),
(230, '2015-04-25 02:49:17', '150226(03,4,kruszwica)'),
(231, '2015-04-25 02:49:17', '150226(04,4,kruszwica)'),
(232, '2015-04-25 02:51:37', '150209(01,2,transvora)'),
(233, '2015-04-25 02:51:37', '150210(01,2,kruszwica)'),
(234, '2015-04-25 02:51:37', '150218(01,2,kruszwica)'),
(235, '2015-04-25 02:51:37', '150218(02,2,transvora)'),
(236, '2015-04-25 02:51:37', '150219(01,2,cukrohurt)'),
(237, '2015-04-25 02:51:37', '150219(02,2,kruszwica)'),
(238, '2015-04-25 02:51:37', '150219(03,2,polfink)'),
(239, '2015-04-25 02:51:37', '150219(04,2,transvora)'),
(240, '2015-04-25 02:51:37', '150219(05,2,transvora)'),
(241, '2015-04-25 02:51:37', '150220(01,2,kruszwica)'),
(242, '2015-04-25 02:51:37', '150220(02,2,polfink)'),
(243, '2015-04-25 02:51:37', '150220(03,2,polfink)'),
(244, '2015-04-25 02:51:37', '150220(04,2,cukrohurt)'),
(245, '2015-04-25 02:51:37', '150220(05,2,consult)'),
(246, '2015-04-25 02:51:37', '150223(01,2,polfink)'),
(247, '2015-04-25 02:51:37', '150223(02,2,polfink)'),
(248, '2015-04-25 02:51:37', '150225(01,2,polfink)'),
(249, '2015-04-25 02:51:37', '150225(02,2,polfink)'),
(250, '2015-04-25 02:51:37', '150226(01,2,polfink)'),
(251, '2015-04-25 02:51:37', '150226(02,2,polfink)'),
(252, '2015-04-25 02:51:37', '150226(03,2,kruszwica)'),
(253, '2015-04-25 02:51:37', '150226(04,2,kruszwica)'),
(254, '2015-04-25 02:51:37', '150226(05,2,transvora)'),
(255, '2015-04-25 02:51:37', '150226(06,2,transvora)'),
(256, '2015-04-25 02:51:37', '150226(07,2,consult)'),
(257, '2015-04-25 11:41:09', '150210(01,4,kruszwica)'),
(258, '2015-04-25 11:41:09', '150218(01,4,kruszwica)'),
(259, '2015-04-25 11:41:09', '150219(02,4,kruszwica)'),
(260, '2015-04-25 11:41:09', '150220(01,4,kruszwica)'),
(261, '2015-04-25 11:41:09', '150226(03,4,kruszwica)'),
(262, '2015-04-25 11:41:09', '150226(04,4,kruszwica)'),
(263, '2015-04-25 11:49:31', '150209(01,2,transvora)'),
(264, '2015-04-25 11:49:31', '150210(01,2,kruszwica)'),
(265, '2015-04-25 11:49:31', '150218(01,2,kruszwica)'),
(266, '2015-04-25 11:49:31', '150218(02,2,transvora)'),
(267, '2015-04-25 11:49:31', '150219(01,2,cukrohurt)'),
(268, '2015-04-25 11:49:31', '150219(02,2,kruszwica)'),
(269, '2015-04-25 11:49:31', '150219(03,2,polfink)'),
(270, '2015-04-25 11:49:31', '150219(04,2,transvora)'),
(271, '2015-04-25 11:49:31', '150219(05,2,transvora)'),
(272, '2015-04-25 11:49:31', '150220(01,2,kruszwica)'),
(273, '2015-04-25 11:49:31', '150220(02,2,polfink)'),
(274, '2015-04-25 11:49:31', '150220(03,2,polfink)'),
(275, '2015-04-25 11:49:31', '150220(04,2,cukrohurt)'),
(276, '2015-04-25 11:49:31', '150220(05,2,consult)'),
(277, '2015-04-25 11:49:31', '150223(01,2,polfink)'),
(278, '2015-04-25 11:49:31', '150223(02,2,polfink)'),
(279, '2015-04-25 11:49:31', '150225(01,2,polfink)'),
(280, '2015-04-25 11:49:31', '150225(02,2,polfink)'),
(281, '2015-04-25 11:49:31', '150226(01,2,polfink)'),
(282, '2015-04-25 11:49:31', '150226(02,2,polfink)'),
(283, '2015-04-25 11:49:31', '150226(03,2,kruszwica)'),
(284, '2015-04-25 11:49:31', '150226(04,2,kruszwica)'),
(285, '2015-04-25 11:49:31', '150226(05,2,transvora)'),
(286, '2015-04-25 11:49:31', '150226(06,2,transvora)'),
(287, '2015-04-25 11:49:31', '150226(07,2,consult)'),
(288, '2015-05-13 19:27:18', '150209(01,2,transvora)'),
(289, '2015-05-13 19:27:18', '150210(01,2,kruszwica)'),
(290, '2016-06-15 19:14:27', '150226(04,4,kruszwica)'),
(291, '2016-06-15 19:14:27', '150226(05,2,transvora)'),
(292, '2016-06-15 19:15:28', '150226(06,2,transvora)'),
(293, '2016-06-15 19:26:01', '150226(06,2,transvora)'),
(294, '2016-06-15 20:14:12', '150226(06,2,transvora)'),
(295, '2016-06-15 20:14:12', '150226(07,2,consult)'),
(296, '2016-06-17 08:37:43', '160202(01,2,kantasa)'),
(297, '2016-06-28 14:11:52', '160202(01,2,kantasa)'),
(298, '2016-06-28 14:30:03', '160203(01,2,kantasa)'),
(299, '2016-06-28 14:30:03', '160204(01,2,kantasa)'),
(300, '2016-06-28 14:33:14', '160202(01,2,kantasa)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminTable`
--
ALTER TABLE `adminTable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `link1` (`page`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `lib-id` (`idlib`);

--
-- Indexes for table `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`zId`),
  ADD UNIQUE KEY `zId` (`zId`),
  ADD KEY `zId_2` (`zId`);

--
-- Indexes for table `zakazScan`
--
ALTER TABLE `zakazScan`
  ADD PRIMARY KEY (`idScan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminTable`
--
ALTER TABLE `adminTable`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2633;

--
-- AUTO_INCREMENT for table `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `zId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zakazScan`
--
ALTER TABLE `zakazScan`
  MODIFY `idScan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc`
--
ALTER TABLE `doc`
  ADD CONSTRAINT `link1` FOREIGN KEY (`page`) REFERENCES `pages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
