-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 03:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heritage_assembly`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `designation` enum('Admin','Super-Admin') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `firstName`, `lastName`, `userName`, `email`, `password`, `picture`, `designation`, `status`, `dateCreated`) VALUES
(1, 'ThankGod', 'Okoro', 'demo', 'test@gmail.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'assets/img/memoji/memoji-2.svg', 'Super-Admin', 1, '2024-02-12 21:56:54'),
(2, 'Stanley', 'Makuachukwu', 'joseph', 'test1234@happ.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'assets/img/memoji/memoji-2.svg', 'Admin', 1, '2024-02-25 11:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branches`
--

CREATE TABLE `tbl_branches` (
  `id` int(11) NOT NULL,
  `branchName` varchar(100) NOT NULL,
  `firstMeetingDay` varchar(100) NOT NULL,
  `firstMeetingActivity` varchar(100) NOT NULL,
  `firstMeetingTime` varchar(100) NOT NULL,
  `secondMeetingDay` varchar(100) NOT NULL,
  `secondMeetingActivity` varchar(100) NOT NULL,
  `secondMeetingTime` varchar(100) NOT NULL,
  `thirdMeetingDay` varchar(100) NOT NULL,
  `thirdMeetingActivity` varchar(100) NOT NULL,
  `thirdMeetingTime` varchar(100) NOT NULL,
  `address` longtext DEFAULT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branches`
--

INSERT INTO `tbl_branches` (`id`, `branchName`, `firstMeetingDay`, `firstMeetingActivity`, `firstMeetingTime`, `secondMeetingDay`, `secondMeetingActivity`, `secondMeetingTime`, `thirdMeetingDay`, `thirdMeetingActivity`, `thirdMeetingTime`, `address`, `longitude`, `latitude`, `dateCreated`) VALUES
(2, 'Lekki', 'Sundays', 'Worship services', '08:00', 'Wednesdays', 'School of the world', '17:30', 'Fridays', 'Prayer meeting', '17:30', 'Abraham Adesanya, Ogombo, Lekki Ajah', '6.61356912', '4.10723100', '2024-02-14 09:57:01'),
(3, 'Abuja', 'Sundays', 'Church service', '09:37', 'Wednesdays', 'Mid-week service', '18:37', 'Saturdays', 'Rehearsal', '15:37', 'testinmg the address', '2.54744499', '4.65489556', '2024-02-15 11:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category`, `dateCreated`) VALUES
(1, 'Healing & Deliverance', '2024-02-13 20:41:05'),
(3, 'Churchesxy', '2024-02-13 20:43:29'),
(4, 'Valentine', '2024-02-14 06:34:48'),
(6, 'Escatology', '2024-02-15 21:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_devotionals`
--

CREATE TABLE `tbl_devotionals` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `scripture` varchar(100) NOT NULL,
  `memoryVerse` varchar(255) NOT NULL,
  `firstParagraph` longtext DEFAULT NULL,
  `secondParagraph` longtext DEFAULT NULL,
  `thirdParagraph` longtext DEFAULT NULL,
  `prayer` longtext DEFAULT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_devotionals`
--

INSERT INTO `tbl_devotionals` (`id`, `topic`, `scripture`, `memoryVerse`, `firstParagraph`, `secondParagraph`, `thirdParagraph`, `prayer`, `dateCreated`) VALUES
(2, '??EscatologyNew', '??John 3:16', '!@He sent his only begotten son', '!!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget ipsum nulla. Curabitur fermentum ligula eget nunc blandit, nec viverra felis placerat. Nam porttitor fermentum condimentum. Curabitur ut erat nulla. Nullam mattis, risus quis tincidunt efficitur, magna velit tincidunt augue, ac tristique eros elit sed tortor. Donec ligula urna, luctus eget varius vestibulum, sollicitudin a dolor. Morbi condimentum massa lacus, at accumsan ipsum porta in. Vivamus suscipit diam est. Curabitur tristique dapibus augue, ac pellentesque eros placerat non. Mauris sollicitudin fringilla mollis. Vivamus a aliquet lacus.', '!!!Ut dapibus dui quis purus mollis aliquet nec ut eros. Praesent eget porttitor purus. Nunc porta imperdiet malesuada. Donec maximus quis elit a tincidunt. Aenean pretium imperdiet eros sit amet pulvinar. Pellentesque eu faucibus odio, eget varius eros. Integer pharetra nunc ac nibh commodo porta. Nunc faucibus luctus justo, eget tempor risus sollicitudin sed.', '!!!!Vivamus finibus dapibus mi, non viverra mi facilisis at. Duis quis tortor nisl. Duis auctor dictum ex. Etiam at lorem fermentum, dapibus felis vitae, tincidunt arcu. Etiam facilisis luctus elit, quis tincidunt lorem euismod non. Sed cursus eu enim sit amet blandit. Proin tristique consequat lorem eget tristique. Nulla ultrices risus vitae neque pharetra vehicula. Nullam et est cursus, interdum odio a, dignissim lacus. Quisque finibus justo vitae quam laoreet finibus. Sed eget auctor neque. Donec maximus orci non posuere consequat.', '!!??Aliquam vel gravida massa. Nullam vitae pharetra metus, vel facilisis lacus. Proin non eros faucibus, sagittis nibh ac, fringilla lorem. Sed ac tempus leo, eu laoreet justo. Cras viverra nisl in massa dignissim maximus. Integer faucibus diam massa, eu tincidunt felis semper non. Donec suscipit hendrerit nisl, eget bibendum justo cursus quis. Cras imperdiet turpis at risus blandit euismod. Praesent nec pulvinar leo. Nulla vehicula scelerisque elit.', '2024-02-17 07:47:41'),
(3, 'Testing 1', 'Psalm 23', 'Another memory verse', 'First paragraph', 'Second paragraph', 'Third paragraph', 'Praying time', '2024-02-18 21:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `eventTitle` varchar(100) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `eventTime` varchar(100) NOT NULL,
  `eventVenue` varchar(255) NOT NULL,
  `eventFlyer` varchar(255) NOT NULL,
  `eventType` enum('Event','Article') NOT NULL,
  `eventDescription` longtext DEFAULT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `eventTitle`, `eventDate`, `eventTime`, `eventVenue`, `eventFlyer`, `eventType`, `eventDescription`, `dateCreated`) VALUES
(1, 'New event!!', '2024-02-25', '00:37', 'Lagosxz', 'upload/R-1.png', 'Event', 'Testing description..!!!', '2024-02-17 19:36:29'),
(3, 'Dec Event', '2024-02-29', '00:57', 'Benin', 'upload/Stationery_Mockup_2.png', 'Event', 'Test again', '2024-02-17 20:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `id` int(11) NOT NULL,
  `messageTitle` varchar(100) NOT NULL,
  `preacher` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `audioLink` varchar(255) NOT NULL,
  `youtubeLink` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id`, `messageTitle`, `preacher`, `category`, `date`, `description`, `audioLink`, `youtubeLink`, `dateCreated`) VALUES
(1, 'The birth of Jesus', 'Joshua Selman', 'Churchesxy', '2024-02-14', 'just testing the description', 'https://open.spotify.com/album/781uZhZ4OZZFwVtuvp3zoJ?si=iBd_XpVqTFWo-WLcDh_a9w', 'https://www.youtube.com/watch?v=V9kULYLc-Jk&ab_channel=OFFICERWOOS', '2024-02-15 09:37:51'),
(2, 'About the second coming 2', 'Jeff Besoz2', 'Healing & Deliverance', '2024-02-10', 'just testing the descriptionslds rtds bgdbdfbdf', 'https://open.spotify.com/album/781uZhZ4OZZFwVtuvp3zoJ?si=iBd_XpVqTFWo-WLcDh_a9w--', 'https://www.youtube.com/watch?v=V9kULYLc-Jk&ab_channel=OFFICERWOOS--', '2024-02-15 09:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pastors`
--

CREATE TABLE `tbl_pastors` (
  `id` int(11) NOT NULL,
  `pastorName` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `photograph` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pastors`
--

INSERT INTO `tbl_pastors` (`id`, `pastorName`, `branch`, `phone`, `photograph`, `dateCreated`) VALUES
(2, 'Rev. Oje Ohiwerei', 'Abuja', '08032090933', 'upload/piotr-ciapapschosz-NhRk-907Ayc-unsplash.png', '2024-02-15 12:54:35'),
(3, 'Rev. Joe Omeokwe', 'Lekki', '09013870726', 'upload/pexels-samson-katt-5255640.jpg', '2024-02-15 13:39:56'),
(4, 'ThankGod Okoro', 'Lekki', '08162680095', 'upload/suitsArtboard 1 copy 15.jpg', '2024-02-25 09:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quote`
--

CREATE TABLE `tbl_quote` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quote`
--

INSERT INTO `tbl_quote` (`id`, `title`, `link`, `dateCreated`) VALUES
(5, 'Mariam', 'upload/WhatsApp Image 2024-02-11 at 13.13.28.jpeg', '2024-02-13 21:43:47'),
(6, 'Mariam Rennerxxz', 'upload/Chevron_Logo.svg.png', '2024-02-13 21:44:19'),
(7, 'Escatology', 'upload/Cover Page.jpg', '2024-02-15 21:51:52'),
(8, 'Estcatology2', 'upload/65ce798dde9391802440692Cover Page.jpg', '2024-02-15 21:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `dateCreated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `title`, `value`, `dateCreated`) VALUES
(1, 'Google API Key', '89e495e7941cf9e40e6980d14a16bf023ccd4c91XV', '2024-02-12 23:16:10'),
(5, 'Google Map', 'https://maps.app.goo.gl/1CgbogoLJ1nETyV28', '2024-02-13 09:51:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`userName`);

--
-- Indexes for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_devotionals`
--
ALTER TABLE `tbl_devotionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pastors`
--
ALTER TABLE `tbl_pastors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_devotionals`
--
ALTER TABLE `tbl_devotionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pastors`
--
ALTER TABLE `tbl_pastors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
