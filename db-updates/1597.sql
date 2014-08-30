-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2012 at 11:41 AM
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
-- Table structure for table `acl_actions`
--

CREATE TABLE IF NOT EXISTS `acl_actions` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `acltype` varchar(100) DEFAULT NULL,
  `aclaccess` int(3) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_aclaction_id_del` (`id`,`deleted`),
  KEY `idx_category_name` (`category`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_actions`
--

REPLACE INTO `acl_actions` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `name`, `category`, `acltype`, `aclaccess`, `deleted`) VALUES
('4a08c180-ff10-28d1-7c1e-4fed42b92cfc', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'access', 'Cosib_client_trips', 'module', 89, 0),
('6d98756e-3799-2b0f-259c-4fed427403ed', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'delete', 'Cosib_client_trips', 'module', 90, 0),
('6bcbc825-500c-cf87-5b5e-4fed42e3682a', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'edit', 'Cosib_client_trips', 'module', 90, 0),
('712b5742-94bf-57a0-8ef4-4fed42acf1ff', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'export', 'Cosib_client_trips', 'module', 90, 0),
('6f638ee8-768f-0e13-1994-4fed42331489', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'import', 'Cosib_client_trips', 'module', 90, 0),
('50451002-f68f-84be-e735-4fed422a92f2', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'list', 'Cosib_client_trips', 'module', 90, 0),
('4d0e5929-f29d-00a8-224a-4fed423a7dd0', '2012-06-29 05:51:59', '2012-06-29 05:51:59', '1', '1', 'view', 'Cosib_client_trips', 'module', 90, 0),
('48372d1c-dbc2-6ac9-07bf-4fdac7cb7681', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'access', 'cosib_messages', 'module', 89, 0),
('67a3a712-e35a-57c4-8a8e-4fdac73082bb', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'delete', 'cosib_messages', 'module', 90, 0),
('66ac5559-cb1d-3bb9-b3c5-4fdac7aa01b8', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'edit', 'cosib_messages', 'module', 90, 0),
('69c15a50-bb22-b797-fc6d-4fdac7f813d1', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'export', 'cosib_messages', 'module', 90, 0),
('68a40870-a2ae-3e99-3f79-4fdac7244aaa', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'import', 'cosib_messages', 'module', 90, 0),
('65b098ca-447f-a93d-c626-4fdac7a66e4a', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'list', 'cosib_messages', 'module', 90, 0),
('6499511d-5cc6-b51b-eaa8-4fdac7d3e179', '2012-06-15 05:25:01', '2012-06-15 05:25:01', '1', '1', 'view', 'cosib_messages', 'module', 90, 0),
('5a7bf13b-91e7-7513-82e8-4fe07389b6b7', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'access', 'Cosib_postsale', 'module', 89, 0),
('7d8df161-55d7-8930-b946-4fe073736ccf', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'delete', 'Cosib_postsale', 'module', 90, 0),
('7bba7a43-0f12-5837-3031-4fe073738a16', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'edit', 'Cosib_postsale', 'module', 90, 0),
('813a1cbe-eb37-a7bc-f740-4fe073a5d8a2', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'export', 'Cosib_postsale', 'module', 90, 0),
('7f5935d4-b2a1-1304-a9a9-4fe0735e65a7', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'import', 'Cosib_postsale', 'module', 90, 0),
('79e19688-316f-56d9-21b6-4fe0736d918a', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'list', 'Cosib_postsale', 'module', 90, 0),
('77d775c0-4b78-5a51-9972-4fe07393a0b0', '2012-06-19 12:41:40', '2012-06-19 12:41:40', '1', '1', 'view', 'Cosib_postsale', 'module', 90, 0),
('54095711-7741-2250-db1f-4fc61c9279e4', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'access', 'cosib_queries', 'module', 89, 0),
('5bcc45f4-383b-e476-d485-4fc61c119f7a', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'delete', 'cosib_queries', 'module', 90, 0),
('5ad75774-edf3-e9b3-9bbf-4fc61cd97c91', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'edit', 'cosib_queries', 'module', 90, 0),
('5dae3723-beaf-dc1e-8756-4fc61c952cbb', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'export', 'cosib_queries', 'module', 90, 0),
('5cc021ad-8c49-d3b2-e2cf-4fc61c652494', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'import', 'cosib_queries', 'module', 90, 0),
('591a524a-3283-6060-3b2a-4fc61c6fb32d', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'list', 'cosib_queries', 'module', 90, 0),
('574cc38a-a36c-2028-7aae-4fc61caaa5d3', '2012-05-30 13:10:47', '2012-05-30 13:10:47', '1', '1', 'view', 'cosib_queries', 'module', 90, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
