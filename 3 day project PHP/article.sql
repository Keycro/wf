-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2019 at 03:43 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbworkexample`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `pub_date` (`pub_date`),
  KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `pub_date`, `img`, `title`, `description`) VALUES
(1, '2019-02-27 07:47:58', '../storage/at230.png', 'Basecamp', 'From 37signals. Basecamp is a unique project collaboration tool. Projects don\'t fail from a lack of charts, graphs, or reports, they fail from a lack of communication and collaboration. Basecamp makes it simple to communicate and collaborate on projects. The Basecamp API is implemented as vanilla XML ove'),
(2, '2019-02-27 07:47:59', '../storage/round-profile-pic.png', 'newasdasdsad', 'helooooooooooooooooooooooooooooooooooooooooo'),
(3, '2019-02-27 07:47:59', '../storage/e30600e77a9716210ca0d34d07c6606d.jpg', 'Intellinote', 'Its me Igor'),
(4, '2019-02-27 07:47:59', '../storage/at7450.png', 'Worasasaksnaps', 'The service provides task management and time-tracking functions to improve process management and activity reporting. It allows remote monitoring of task completion via shared screen images and logs of actions measurable against time schedules and objectives. The system generates reports of monitored activities, either undertaken within the service itself or performed by other applications integrated to log their actions in the service. API methods support listing and updating pre-defined projects, definition of tasks and assignment to specific users, and management of user accounts including activity breakdowns over time. In addition to automated tracking, methods support manual time entry as well as generation of reports against tracking data. '),
(5, '2019-02-27 07:47:59', '../storage/at230.png', 'Redbooth', 'Redbooth is a collaboration and communication platform with a publicly available API with the following key features: (1) OAuth support (2) Flat structure, both in the input and output (3) Supports pagination and partial response for enhanced performance (4) Specific error reporting (5) Developer portal with full documentation and a testing console (6) Code snippets to quick-start developers'),
(65, '2019-03-03 12:40:52', 'at230.png', 'new', 'weqwewq'),
(66, '2019-03-03 12:55:45', '/var/www/html/TagBeSill/storage//at5541.png', 'new', 'weqwewq'),
(67, '2019-03-03 12:56:45', '../storage//at5541.png', 'new', 'weqwewq'),
(68, '2019-03-05 16:37:17', '../storage//landscape-1500925839-golden-retriever-puppy.jpg', 'TOOOOOOOOOOOOOOOOOOOO', 'HELTOTOOOOOOOOOOOOOOOOOOOOOOOOOOOO'),
(69, '2019-03-05 16:41:09', '../storage//kWu1QJC.jpg', 'Filip', 'May the code be with you ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
