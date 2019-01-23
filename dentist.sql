-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2018 at 03:14 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentist`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approve_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `person_id`, `date`, `time`, `subject`, `description`, `date_added`, `approve_status`) VALUES
(1, 27, '2018-02-28', '10:00 AM', 'Need your help on my upper tooth', 'This is the description', '2018-02-27 12:05:00', 'disapproved'),
(2, 31, '2018-02-28', '10:30 AM', 'Need your help with AutoSSL certificates', 'This is the description', '2018-02-27 12:05:43', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `date_added`, `image`) VALUES
(1, 'What is wisdom teeth', 'Wisdom teeth is usually the teeth at the topmost part of the right upper teeth. It is of then the best because of .....', '2017-11-13 19:43:51', 'terminal.png'),
(2, 'Why is my teeth extra white?', 'Some teeth could cause a large amount of detail in other words. It could lead to...', '2017-12-07 09:17:02', 'login.png'),
(3, 'analgesic', '', '2017-12-08 11:45:40', 'ofp-step1.png'),
(4, 'What is the last teeth called?', 'The last teeth is usually called the dead end ....', '2018-01-24 02:56:56', 'indexpage.png'),
(5, 'The living man', 'It is possible to submit files using "multipart/form-data" and ajax. There are many sites out there that show complicated ways of doing this when it is really easy. It simply requires a little configuration of the jquery ajax process and grabbing your form data using the FormData() function.Using the following method, you can submit multiple files and are not just limited to one.', '2018-03-10 13:56:12', 'feedback.png');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `firstname` varchar(64) DEFAULT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `role` enum('admin','patient') DEFAULT 'patient',
  `image` varchar(200) DEFAULT NULL,
  `dimension` varchar(10) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `email`, `password`, `firstname`, `lastname`, `role`, `image`, `dimension`, `date_added`) VALUES
(1, 'admin@admin.com', '8ae011f637deebfbbf2a897a18cafbdb21592a5e9037b9228254a4f4ea9f9146', 'admin', 'admin', 'admin', 'IMG-20170715-WA0000.jpg', '200x198', '2017-11-13 20:51:37'),
(27, 'fani@gmail.com', 'f9f73e8dfce43c83fec8fbd623729a71fad53636966b600d08bec74d91f4d855', 'fani', 'fani', 'patient', 'IMG-20170715-WA0000.jpg', '140x139', '2017-12-11 15:33:35'),
(31, 'gani@gmail.com', 'bce39b69419dc0d036ef2df7f9aa15dd4dd0a5cae7cb8d129a8a758c80796161', 'gani', 'gani', 'patient', NULL, NULL, '2017-12-11 15:37:03'),
(32, 'dele@gmail.com', '5ff70cdedae7831f6f4aa16308cf8e7fb1bdab5c49b3ec9a3cd8a45a85301a5d', 'dele', 'bayo', 'patient', 'otomuola.png', '1366x768', '2018-01-24 01:26:28'),
(33, '', '6bb5101f4e879e3d192698fdefdb9a6c5c97c3ecefe4839829c783d40160221d', '', '', 'patient', NULL, NULL, '2018-01-24 01:54:53'),
(41, 'his@gmail.com', '6bb5101f4e879e3d192698fdefdb9a6c5c97c3ecefe4839829c783d40160221d', '', '', 'patient', NULL, NULL, '2018-01-24 02:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `tip_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`tip_id`, `name`, `description`, `date_added`, `image`) VALUES
(1, 'Brush twice daily', 'It has been noted that brushing twice daily helps to clean rubbish off from the teeth. ', '2018-02-20 10:02:48', 'otomuola.png'),
(2, 'Avoid eating gums', 'Gums has been know to cause a lot of damage to the body. They could damage the teeth.', '2018-02-20 10:04:03', 'woocoomerce-storefront.png'),
(3, 'Brush stroke not horizontally', 'Brushing iii', '2018-02-27 11:45:24', 'customer.png'),
(4, 'Brush your life daily', 'Do you mean it', '2018-03-10 14:08:02', 'json.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`tip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
