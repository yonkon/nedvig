-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2012 at 12:46 PM
-- Server version: 5.5.19
-- PHP Version: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_dev_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `zucker_reportparameterlink`
--

CREATE TABLE IF NOT EXISTS `zucker_reportparameterlink` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `template_id` char(36) NOT NULL,
  `parameter_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zucker_reportparameterlink`
--

REPLACE INTO `zucker_reportparameterlink` (`id`, `deleted`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `template_id`, `parameter_id`, `name`, `default_value`) VALUES
('29c4cc06-3ca5-0888-f68d-4f3e4aa53c4d', 1, '2012-02-17 12:40:21', '2012-02-18 10:01:13', '1', '1', '640d2923-f7d1-d9cb-807c-4f3e49968289', '31ed8d39-1ba7-7888-6394-4f3e4a80c815', 'date_end_adj', NULL),
('3c471bfe-8463-b971-39c4-4f3f773995eb', 0, '2012-02-18 10:02:37', '2012-02-18 10:02:37', '1', '1', '640d2923-f7d1-d9cb-807c-4f3e49968289', 'dec6c26e-eb0b-372b-c375-4f3e4a0dc416', 'date_start', NULL),
('49825ad8-55bd-fbf5-ef98-50474d21d1a7', 0, '2012-09-05 13:05:00', '2012-09-05 13:05:00', '1', '1', 'f0100983-5ba5-2bd1-8c37-50474ddf693c', 'dec6c26e-eb0b-372b-c375-4f3e4a0dc416', 'date_start', NULL),
('671612d8-7e8e-5a33-943f-4f3e4acfd02e', 1, '2012-02-17 12:39:48', '2012-02-18 10:01:26', '1', '1', '640d2923-f7d1-d9cb-807c-4f3e49968289', 'dec6c26e-eb0b-372b-c375-4f3e4a0dc416', 'date_start_adj', NULL),
('7ddfa1fe-489c-56e2-4f7c-50474ed70d64', 0, '2012-09-05 13:05:15', '2012-09-05 13:05:15', '1', '1', 'f0100983-5ba5-2bd1-8c37-50474ddf693c', '31ed8d39-1ba7-7888-6394-4f3e4a80c815', 'date_end', NULL),
('c34682f8-62eb-9b4f-e55c-4f3f778a6ba6', 0, '2012-02-18 10:02:00', '2012-02-18 10:02:00', '1', '1', '640d2923-f7d1-d9cb-807c-4f3e49968289', '31ed8d39-1ba7-7888-6394-4f3e4a80c815', 'date_end', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zucker_reportparameters`
--

CREATE TABLE IF NOT EXISTS `zucker_reportparameters` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `friendly_name` varchar(255) DEFAULT NULL,
  `default_name` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `range_name` varchar(255) DEFAULT NULL,
  `range_options` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zucker_reportparameters`
--

REPLACE INTO `zucker_reportparameters` (`id`, `deleted`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `friendly_name`, `default_name`, `default_value`, `range_name`, `range_options`, `description`) VALUES
('20009e3d-88e5-b0bb-544d-4f3c16caa150', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'Account', 'ACCOUNT_ID', NULL, 'SQL', 'select id, name from accounts where deleted = 0 order by name', NULL),
('21584b46-de85-94e2-798d-4f3c167a7f25', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'Contact', 'CONTACT_ID', NULL, 'SQL', 'select id, concat(last_name, concat(" ", first_name)) as name from contacts where deleted = 0 order by last_name', NULL),
('2ce936ee-78f8-c174-33e6-4f3c168497dc', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'Meeting', 'MEETING_ID', NULL, 'SQL', 'select id, concat(name, " (", date_start, " ", time_start, ")") from meetings where deleted = 0 order by name, date_start, time_start', NULL),
('2e10e5c8-5274-71c9-8aa6-4f3c16041247', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'Project', 'PROJECT_ID', NULL, 'SQL', 'select id, name from project where deleted = 0 order by name', NULL),
('2f215d69-af6d-b3cb-80cf-4f3c160d6824', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'Current User', 'CURRENT_USER', NULL, 'CURRENT_USER', NULL, NULL),
('307f447c-6658-93b0-cfe8-4f3c16960bc3', 0, '2012-02-15 20:31:14', '2012-02-15 20:31:14', '1', '1', 'My Script', 'MY_SCRIPT', NULL, 'SCRIPT', 'return ''%'';', NULL),
('31ed8d39-1ba7-7888-6394-4f3e4a80c815', 0, '2012-02-17 12:38:29', '2012-02-17 16:50:10', '1', '1', 'Дата конца периода', 'date_end', NULL, 'DATE', NULL, NULL),
('dec6c26e-eb0b-372b-c375-4f3e4a0dc416', 0, '2012-02-17 12:37:41', '2012-02-17 16:50:39', '1', '1', 'Дата начала периода', 'date_start', NULL, 'DATE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zucker_reporttemplates`
--

CREATE TABLE IF NOT EXISTS `zucker_reporttemplates` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `description` text,
  `export_as` varchar(255) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zucker_reporttemplates`
--

REPLACE INTO `zucker_reporttemplates` (`id`, `deleted`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `name`, `filename`, `description`, `export_as`, `team_id`, `assigned_user_id`) VALUES
('640d2923-f7d1-d9cb-807c-4f3e49968289', 0, '2012-02-17 12:34:34', '2012-02-18 14:59:13', '1', '1', 'report_market', 'report_market.jasper', NULL, 'PDF HTML ', 'none', '1'),
('f0100983-5ba5-2bd1-8c37-50474ddf693c', 0, '2012-09-05 13:01:47', '2012-09-06 06:34:18', '1', '1', 'Активность сотрудников', 'Activities.jasper', NULL, 'PDF XLS HTML ', 'none', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
