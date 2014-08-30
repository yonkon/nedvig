-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2012 at 04:50 PM
-- Server version: 5.5.19
-- PHP Version: 5.3.8

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
-- Table structure for table `cosib_client_trips`
--

CREATE TABLE IF NOT EXISTS `cosib_client_trips` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `residence` text,
  `arrival` int(255) DEFAULT NULL,
  `trip_place` varchar(150) DEFAULT NULL,
  `date_departure` datetime DEFAULT NULL,
  `date_arrive` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cosib_client_trips_audit`
--

CREATE TABLE IF NOT EXISTS `cosib_client_trips_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  KEY `idx_cosib_client_trips_primary` (`id`),
  KEY `idx_cosib_client_trips_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cosib_client_trips_cstm`
--

CREATE TABLE IF NOT EXISTS `cosib_client_trips_cstm` (
  `id_c` char(36) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cosib_clien_sphr_client_c`
--

CREATE TABLE IF NOT EXISTS `cosib_clien_sphr_client_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_cliee6e0_client_ida` varchar(36) DEFAULT NULL,
  `cosib_cliea115t_trips_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_clienps_sphr_client_ida1` (`cosib_cliee6e0_client_ida`),
  KEY `cosib_clienps_sphr_client_alt` (`cosib_cliea115t_trips_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cosib_clien_sphr_object_c`
--

CREATE TABLE IF NOT EXISTS `cosib_clien_sphr_object_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_clie09c9t_trips_ida` varchar(36) DEFAULT NULL,
  `cosib_clief5bd_object_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_clienps_sphr_object_alt` (`cosib_clie09c9t_trips_ida`,`cosib_clief5bd_object_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `relationships` (
  `id` char(36) NOT NULL,
  `relationship_name` varchar(150) DEFAULT NULL,
  `lhs_module` varchar(100) DEFAULT NULL,
  `lhs_table` varchar(64) DEFAULT NULL,
  `lhs_key` varchar(64) DEFAULT NULL,
  `rhs_module` varchar(100) DEFAULT NULL,
  `rhs_table` varchar(64) DEFAULT NULL,
  `rhs_key` varchar(64) DEFAULT NULL,
  `join_table` varchar(64) DEFAULT NULL,
  `join_key_lhs` varchar(64) DEFAULT NULL,
  `join_key_rhs` varchar(64) DEFAULT NULL,
  `relationship_type` varchar(64) DEFAULT NULL,
  `relationship_role_column` varchar(64) DEFAULT NULL,
  `relationship_role_column_value` varchar(50) DEFAULT NULL,
  `reverse` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_rel_name` (`relationship_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relationships`
--

REPLACE INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('e010e17f-a17f-ec9a-5690-4fed9a4df359', 'cosib_client_trips_modified_user', 'Users', 'users', 'id', 'Cosib_client_trips', 'cosib_client_trips', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e04d1933-8946-2482-333c-4fed9a59f8cf', 'cosib_client_trips_created_by', 'Users', 'users', 'id', 'Cosib_client_trips', 'cosib_client_trips', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e0878a8f-eea7-eeaa-9ed2-4fed9acbcc4e', 'cosib_client_trips_assigned_user', 'Users', 'users', 'id', 'Cosib_client_trips', 'cosib_client_trips', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e8dfa412-c266-d55c-7772-4fed9a3fde87', 'cosib_client_trips_sphr_client', 'sphr_Client', 'sphr_client', 'id', 'Cosib_client_trips', 'cosib_client_trips', 'id', 'cosib_clien_sphr_client_c', 'cosib_cliee6e0_client_ida', 'cosib_cliea115t_trips_idb', 'many-to-many', NULL, NULL, 0, 0),
('ed9147e1-793f-0c43-ea80-4fed9a1d0114', 'cosib_client_trips_sphr_object', 'Cosib_client_trips', 'cosib_client_trips', 'id', 'sphr_Object', 'sphr_object', 'id', 'cosib_clien_sphr_object_c', 'cosib_clie09c9t_trips_ida', 'cosib_clief5bd_object_idb', 'many-to-many', NULL, NULL, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
