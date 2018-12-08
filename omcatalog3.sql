-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 08:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omcatalog3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `users_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`users_id`, `name`, `email`, `password`, `remember_token`) VALUES
(2, 'Ohno Satoshi', 'ohnosatoshi@petronashq.com', '$2y$10$F8OyUQGzLvJPeagEQ8zeZ.KhmCvj3xcFX..emKOarfe2tkwJHWDZq', 'J724aRnwRf6yOS7Y4jj3GHwBeo2pVsonISXtJQ3LdrEeC97Cxn0kX8zmZL0n'),
(3, 'Sakurai Sho', 'sakuraisho@petronashq.com', '$2y$10$HQ3PAc8nS0SF69o3SG6xQe6ZhgkxTLlAxS6IACeLaRT.MT.5Acepa', 'XgkgpQi4aKOpyXDV4ZsvdeFtsUcgvqWvEcYUxGk98xYAXhEn8DrPN3XsXP9f'),
(4, 'Aiba Masaki', 'aibamasaki@petronashq.com', '$2y$10$euVfAqnDG5yhdjwggBVNbONT/HWOWfKtohXmAZ6lBR4ep7YD3ETi.', 'j6URgxtv5WAyR8sSmxX6CRx8uL11dzfnRIySCM4kRyeqUKRsHDCNvUlrLLjm'),
(5, 'Matsumoto Jun', 'matsumotojun@petronashq.com', '$2y$10$rrvmfjOLB26WRG1AYZ0fP.NVwFEWkvIwhiWBGoNjhrXItElTbSACO', '8hUGcdGipRDztPaAUQJtktdWM4PcOOvfMiAn3gSZ6BmdWV1yfVoJJt9ll37K'),
(6, 'Ninomiya Kazunari', 'ninomiyakazunari@petronashq.com', '$2y$10$/W14TTXIKiEiyNtV1V.UxOBidCoyEIgJsx5oXQc5S7YpMAbch9pTi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `base64`
--

CREATE TABLE `base64` (
  `base64_id` int(11) NOT NULL,
  `materials_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `base64`
--

INSERT INTO `base64` (`base64_id`, `materials_id`, `name`) VALUES
(2, 21, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9ob3Nlcy91dGlsaXR5aG9zZS8yMS5qcGc='),
(3, 22, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9oc2UvYm9vdHMvMjIuanBn'),
(4, 23, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9sb29zZXRvb2xzLzIzLmpwZw=='),
(5, 24, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9sYWIvY2FyYm9ucHJldHViZS8yNC5qcGc='),
(6, 25, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9vdGhlcnMvMjUuanBn'),
(7, 26, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9sdWJyaWNhbnQvMjYuanBn'),
(8, 27, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9ob3Nlcy9xdWlja2NvdXBpbmcvMjcuanBn'),
(9, 28, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9ob3Nlcy91dGlsaXR5aG9zZS8yOC5qcGc='),
(10, 29, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9oc2UvZmFjZXNoaWVsZC8yOS5qcGc='),
(11, 30, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1L29tY2F0YWxvZzMvYWRtaW4tb21jYXRhbG9nL3B1YmxpYy9pbWFnZS9sYWIvc2FtcGxpbmdjYW4vMzAuanBn'),
(12, 31, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(13, 32, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(14, 33, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(15, 34, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(16, 35, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(17, 36, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvNWM0M2Q4YzE3NTRkZGFjNTliZTdiZjRkNGQwYzlhYmMuanBn'),
(18, 37, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(19, 38, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(20, 39, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(21, 40, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(22, 41, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(23, 42, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzUvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc=');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `name`) VALUES
(1, 'Tube'),
(2, 'Lab Consumable'),
(3, 'Lubricant'),
(4, 'Greases'),
(5, 'Batteries'),
(6, 'Static Tools'),
(7, 'Hand Tools'),
(8, 'Pneumatic Tools'),
(9, 'Powder-actuated Tools'),
(10, 'Power Tools'),
(11, 'Lab Supplies'),
(12, 'Health'),
(13, 'Safety'),
(14, 'Hoses'),
(15, 'Hoses Connectors');

-- --------------------------------------------------------

--
-- Table structure for table `confirmations`
--

CREATE TABLE `confirmations` (
  `confirmations_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmations`
--

INSERT INTO `confirmations` (`confirmations_id`, `users_id`, `orders_id`, `images`) VALUES
(6, 1, 36, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzQvaW1hZ2UvUXVvdGVmYW5jeS0yMzc4MzI0LTM4NDB4MjE2MC5qcGc='),
(7, 2, 33, 'aHR0cDovLzE5Mi4xNjguNDMuMTg1OjEzMzQvaW1hZ2UvNWM0M2Q4YzE3NTRkZGFjNTliZTdiZjRkNGQwYzlhYmMuanBn');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `materials_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`images_id`, `materials_id`, `name`) VALUES
(1, 21, '21.jpg'),
(2, 22, '22.jpg'),
(3, 23, '23.jpg'),
(4, 24, '24.jpg'),
(5, 25, '25.jpg'),
(6, 26, '26.jpg'),
(7, 27, '27.jpg'),
(8, 28, '28.jpg'),
(9, 29, '29.jpg'),
(10, 30, '30.jpg'),
(21, 37, 'Quotefancy-2378324-3840x2160.jpg'),
(24, 40, 'Quotefancy-2378324-3840x2160.jpg'),
(26, 42, 'Quotefancy-2378324-3840x2160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `materials_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categories_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`materials_id`, `name`, `description`, `categories_id`, `price`, `stock`, `status_id`) VALUES
(21, 'MULTIPURPOSE UTILITY HOSE', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 14, 160, 20, 1),
(22, 'PRO SAFETY BOOTS PAIR', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 13, 292, 12, 1),
(23, 'COMBINATION WRENCHES', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 6, 90, 0, 1),
(24, 'CARBON MONOXIDE DRAEGER', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 4, 95, 123, 1),
(25, 'DUPONT BIOSOLVE PLUS', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 332, 20, 1),
(26, 'PETRONAS GEAR MEP 320 (209L)', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 4, 120, 12, 1),
(27, 'QUICK COUPING, AIR, FEMALE', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 15, 81, 0, 1),
(28, 'LIGHT-DUTY GARDEN HOSE', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 14, 40, 12, 1),
(29, 'FULL VISOR SAFETY FACE SHIELD', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 13, 33, 3, 1),
(30, 'STAINLESS STEEL SAMPLING CAN', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 10, 100, 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordermaterials`
--

CREATE TABLE `ordermaterials` (
  `ordermaterials_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `materials_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermaterials`
--

INSERT INTO `ordermaterials` (`ordermaterials_id`, `orders_id`, `materials_id`, `qty`, `subtotal`) VALUES
(12, 32, 22, 1, '292.00'),
(13, 33, 30, 2, '200.00'),
(15, 35, 29, 1, '33.00'),
(16, 36, 30, 1, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `totalPay` decimal(10,2) NOT NULL,
  `status_invoice_id` int(11) NOT NULL DEFAULT '1',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `users_id`, `receiver_name`, `address`, `totalPay`, `status_invoice_id`, `date`) VALUES
(32, 1, 'Aina', '2', '292.00', 2, '2018-12-08'),
(33, 2, 'sabrina', 'usj', '200.00', 3, '2018-12-08'),
(34, 2, 'sabrina', 'usj', '12.00', 2, '2018-12-08'),
(35, 1, 'Aina', '12', '33.00', 2, '2018-12-08'),
(36, 1, 'Aina', 'd', '100.00', 3, '2018-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
(1, 'Show'),
(2, 'Hide');

-- --------------------------------------------------------

--
-- Table structure for table `status_invoice`
--

CREATE TABLE `status_invoice` (
  `status_invoice_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_invoice`
--

INSERT INTO `status_invoice` (`status_invoice_id`, `name`) VALUES
(1, 'To Pay'),
(2, 'Completed'),
(3, 'To Ship'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'Nur Aina Nabilah Roslan', 'ainanabilah@petronas.com', '$2y$10$6QQ230rXfFRO/TM5xOgpfOH4947Hypm0PDsI1F7h81I00/GfzElay', 'QUAZpKFjIZ31LxdgD4wCnzsxvvVfPVq934vjjr93MBhY1zPjYIM4NIy1Rwsl'),
(2, 'Nur Sabrina Binti Rozi', 'sabrinarozi@petronas.com', '$2y$10$NQof37lgSYH24QeH0/eGkOy5S3uzVFNrT9POH80OVCsetHUF4fjfq', 'p49eHmVZs8CBnH3syrRGprVQaemCRvYYmbBVlS8Kws7F7ghMSbKA5QeBNnv9'),
(4, 'Nur Syahira Binti Musa', 'syahiramusa@petronas.com', '$2y$10$n6/IcEMMBMDrM4MKLUbox.OKzHUYN3l25xxZmL0i0R/EuxXwhL4dC', '9BpI9YiWVXB8JlRon1WufALKhbjAGKyHma9cHB8WzJufOvJnYaY0g0yDtN46'),
(5, 'Siti Nur Asyiqin Binti Azham', 'asyiqinazham@petronas.com', '$2y$10$Rhjq8wxGzGTQi92GJD7SXOt0uY29OITWYrlwHeUmtnZcfUhCIMTBq', 'erIq8DZF43hUM8YtlJUBU4XqMnXmHfjLigLaznRR7aQqiLbOhtB254R4XjQj'),
(6, 'Nurul Izzanni Binti Roshlei', 'nurulizzanni@petronas.com', '$2y$10$TUMBIKb.A6o29NjXayBbV.cXrhKc2QXlcT0W3urAF/wx2ShJnUTg.', 'UrcDQDILVx6wQgfcH5WV6wznIgRCbf0HIifxI5RYnc2pHGNE5aewyIRNYTrQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `base64`
--
ALTER TABLE `base64`
  ADD PRIMARY KEY (`base64_id`),
  ADD KEY `materials_num` (`materials_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `confirmations`
--
ALTER TABLE `confirmations`
  ADD PRIMARY KEY (`confirmations_id`),
  ADD KEY `orders_id` (`orders_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`),
  ADD UNIQUE KEY `materials_id` (`materials_id`) USING BTREE;

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`materials_id`),
  ADD KEY `categories_id` (`categories_id`) USING BTREE,
  ADD KEY `status_id` (`status_id`) USING BTREE;

--
-- Indexes for table `ordermaterials`
--
ALTER TABLE `ordermaterials`
  ADD PRIMARY KEY (`ordermaterials_id`),
  ADD KEY `materials_id` (`materials_id`) USING BTREE,
  ADD KEY `orders_id` (`orders_id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `status_invoice`
--
ALTER TABLE `status_invoice`
  ADD PRIMARY KEY (`status_invoice_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `base64`
--
ALTER TABLE `base64`
  MODIFY `base64_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `confirmations`
--
ALTER TABLE `confirmations`
  MODIFY `confirmations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `materials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ordermaterials`
--
ALTER TABLE `ordermaterials`
  MODIFY `ordermaterials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_invoice`
--
ALTER TABLE `status_invoice`
  MODIFY `status_invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirmations`
--
ALTER TABLE `confirmations`
  ADD CONSTRAINT `confirmations_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`);

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
