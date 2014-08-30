-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2012 at 12:40 PM
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
-- Table structure for table `fields_meta_data`
--

CREATE TABLE IF NOT EXISTS `fields_meta_data` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vname` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `help` varchar(255) DEFAULT NULL,
  `custom_module` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `len` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `default_value` varchar(255) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `audited` tinyint(1) DEFAULT '0',
  `massupdate` tinyint(1) DEFAULT '0',
  `duplicate_merge` smallint(6) DEFAULT '0',
  `reportable` tinyint(1) DEFAULT '1',
  `importable` varchar(255) DEFAULT NULL,
  `ext1` varchar(255) DEFAULT NULL,
  `ext2` varchar(255) DEFAULT NULL,
  `ext3` varchar(255) DEFAULT NULL,
  `ext4` text,
  PRIMARY KEY (`id`),
  KEY `idx_meta_id_del` (`id`,`deleted`),
  KEY `idx_meta_cm_del` (`custom_module`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields_meta_data`
--

REPLACE INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('Cosib_postsalekeys_storing_c', 'keys_storing_c', 'LBL_KEYS_STORING', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-19 13:06:09', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaletaxes_c', 'taxes_c', 'LBL_TAXES', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-27 13:23:18', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaleperiodic_visit_c', 'periodic_visit_c', 'LBL_PERIODIC_VISIT', NULL, 'При выборе данной опции Вы можете ввести датупоследнего планового посещения.Историю дат посещений можно посмотреть в журнале изменений.', 'Cosib_postsale', 'bool', 255, 0, '0', '2012-07-05 07:37:22', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsalenoplan_visit_c', 'noplan_visit_c', 'LBL_NOPLAN_VISIT', NULL, 'При выборе данной опции Вы можете вести дату последнего внепланового посещения. Историю дат посещений можно посмотреть в журнале изменений.', 'Cosib_postsale', 'bool', 255, 0, '0', '2012-07-05 07:38:19', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaledate_noplan_visit_c', 'date_noplan_visit_c', 'LBL_DATE_NOPLAN_VISIT_C', NULL, 'История посещений сохраняется. Её можно посмотреть в журнале измнений.', 'Cosib_postsale', 'datetimecombo', NULL, 0, NULL, '2012-07-05 07:38:48', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsalemail_service_c', 'mail_service_c', 'LBL_MAIL_SERVICE', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-27 13:28:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsalepreparation_realty_c', 'preparation_realty_c', 'LBL_PREPARATION_REALTY', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-27 13:30:30', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaleloss_c', 'loss_c', 'LBL_LOSS', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-27 13:31:46', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsalehelp_client_c', 'help_client_c', 'LBL_HELP_CLIENT', NULL, NULL, 'Cosib_postsale', 'bool', 255, 0, '0', '2012-06-27 13:32:27', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaletransfer_c', 'transfer_c', 'LBL_TRANSFER', NULL, 'При выборе данной опиции Вы можете ввести дату последнего трасфера из аэропорта. Историю изменения поля "Дата трансфера" можно увидеть в журнале изменений.', 'Cosib_postsale', 'bool', 255, 0, '0', '2012-07-05 07:38:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsaletransfer_date_c', 'transfer_date_c', 'LBL_TRANSFER_DATE', NULL, 'История изменений поля сохраняется в журнале изменений', 'Cosib_postsale', 'datetimecombo', NULL, 0, NULL, '2012-07-05 07:37:53', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Cosib_postsalemessage_client_c', 'message_client_c', 'LBL_MESSAGE_CLIENT_C ', NULL, NULL, 'Cosib_postsale', 'text', NULL, 0, NULL, '2012-06-27 13:57:19', 0, 0, 0, 0, 1, 'true', NULL, '4', '50', NULL),
('Cosib_postsaleanother_c', 'another_c', 'LBL_ANOTHER', NULL, NULL, 'Cosib_postsale', 'text', NULL, 0, NULL, '2012-06-27 13:49:55', 0, 0, 0, 0, 1, 'true', NULL, '4', '50', NULL),
('Cosib_postsaledate_periodic_visit_c', 'date_periodic_visit_c', 'LBL_DATE_PERIODIC_VISIT_C', NULL, 'История посещений сохраняется. Её можно посмотреть в журнале измнений.', 'Cosib_postsale', 'datetimecombo', NULL, 0, NULL, '2012-07-05 05:39:48', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

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
('3b955410-da4e-c78f-fa2d-4ff5512f8899', 'cosib_postsale_sphr_client', 'Cosib_postsale', 'cosib_postsale', 'id', 'sphr_Client', 'sphr_client', 'id', 'cosib_posts_sphr_client_c', 'cosib_post666dostsale_ida', 'cosib_post53f6_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('3ce847c7-3add-216d-cec2-4ff551cf288a', 'cosib_postsale_sphr_object', 'Cosib_postsale', 'cosib_postsale', 'id', 'sphr_Object', 'sphr_object', 'id', 'cosib_posts_sphr_object_c', 'cosib_post535aostsale_ida', 'cosib_postf3af_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('5726da4f-1c98-3377-1d9f-4ff55161bcb4', 'cosib_postsale_modified_user', 'Users', 'users', 'id', 'Cosib_postsale', 'cosib_postsale', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('576581dc-2d0d-f93a-615a-4ff5516762f7', 'cosib_postsale_created_by', 'Users', 'users', 'id', 'Cosib_postsale', 'cosib_postsale', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('57b1660c-8711-a96a-5b2e-4ff5510a34c6', 'cosib_postsale_assigned_user', 'Users', 'users', 'id', 'Cosib_postsale', 'cosib_postsale', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_postsale`
--

DROP TABLE IF EXISTS `cosib_postsale`;
CREATE TABLE IF NOT EXISTS `cosib_postsale` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `_id_c` char(36) DEFAULT NULL,
  `_id1_c` char(36) DEFAULT NULL,
  `_id2_c` char(36) DEFAULT NULL,
  `_id3_c` char(36) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_postsale`
--

INSERT INTO `cosib_postsale` (`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `_id_c`, `_id1_c`, `_id2_c`, `_id3_c`, `assigned_user_id`) VALUES
('3a9716e4-8c1d-4f9e-5982-4ff51ece3573', NULL, '2012-07-05 04:57:33', '2012-07-05 08:13:50', '1', '1', 'инфо дескрипшн', 0, NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_postsale_audit`
--

DROP TABLE IF EXISTS `cosib_postsale_audit`;
CREATE TABLE IF NOT EXISTS `cosib_postsale_audit` (
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
  KEY `idx_cosib_postsale_primary` (`id`),
  KEY `idx_cosib_postsale_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_postsale_audit`
--

INSERT INTO `cosib_postsale_audit` (`id`, `parent_id`, `date_created`, `created_by`, `field_name`, `data_type`, `before_value_string`, `after_value_string`, `before_value_text`, `after_value_text`) VALUES
('b5e91fb7-081a-d76c-4b1d-4ff522bfd1f8', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:12:09', '1', 'assigned_user_id', 'relate', '', '1', NULL, NULL),
('cb7ce555-aa7f-51f6-5839-4ff5223bc670', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:12:09', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('ce601c7b-570c-6c39-a4c5-4ff5228ed832', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:12:09', '1', 'date_periodic_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('685fc780-917b-1802-2b40-4ff5298c540e', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:41:45', '1', 'periodic_visit_c', 'bool', '0', '1', NULL, NULL),
('7d013a07-8b37-e7b1-1cb3-4ff52933bda3', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:41:45', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('7dd9acb8-639a-9332-62a0-4ff529dbbde4', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:41:45', '1', 'date_periodic_visit_c', 'datetimecombo', '', '2012-07-02 22:45:00', NULL, NULL),
('9e33523e-d7e0-a9ee-9afb-4ff52936cd68', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:44:28', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('2e10b281-33b6-c8ee-aa65-4ff529d70a9a', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:45:12', '1', 'periodic_visit_c', 'bool', '1', '0', NULL, NULL),
('2eea11c4-d23d-078c-6385-4ff529414d7a', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:45:12', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('cb1742e1-c6ca-d1de-2d7f-4ff52bfa9667', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:50:15', '1', 'periodic_visit_c', 'bool', '0', '1', NULL, NULL),
('cbe7c0a7-b4c6-52e7-0266-4ff52b3b3f07', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:50:15', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('ccd682e8-0c02-45ea-e07d-4ff52b80d2cf', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:50:15', '1', 'transfer_c', 'bool', '1', '0', NULL, NULL),
('8c8e49b6-0442-c91f-3b6b-4ff52b507bb2', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:51:44', '1', 'periodic_visit_c', 'bool', '1', '0', NULL, NULL),
('8d5b1279-44a1-31ce-9bdf-4ff52b8514b6', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:51:44', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('8e410fd8-64e2-ad2b-b56b-4ff52be5ca2f', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 05:51:44', '1', 'transfer_c', 'bool', '0', '1', NULL, NULL),
('77c33472-cb2f-7406-e8a6-4ff540d8e1a5', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 07:23:10', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('7b1d0c18-c491-d58b-a48b-4ff5431912f0', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 07:32:52', '1', 'periodic_visit_c', 'bool', '0', '1', NULL, NULL),
('81550c25-7f01-e9a5-4865-4ff543825ddb', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 07:32:52', '1', 'date_noplan_visit_c', 'datetimecombo', '', 'NULL', NULL, NULL),
('ecde456c-567d-0e12-09c6-4ff54b70fc6d', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 08:07:45', '1', 'date_noplan_visit_c', 'datetimecombo', '', '2012-07-17 23:15:00', NULL, NULL),
('b5d25d10-a4c3-e7c6-e9da-4ff54c4aee64', '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', '2012-07-05 08:13:50', '1', 'transfer_date_c', 'datetimecombo', '2012-07-09 22:30:00', '2012-07-11 22:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_postsale_cstm`
--

DROP TABLE IF EXISTS `cosib_postsale_cstm`;
CREATE TABLE IF NOT EXISTS `cosib_postsale_cstm` (
  `id_c` char(36) NOT NULL,
  `keys_storing_c` tinyint(1) DEFAULT '0',
  `taxes_c` tinyint(1) DEFAULT '0',
  `periodic_visit_c` tinyint(1) DEFAULT '0',
  `noplan_visit_c` tinyint(1) DEFAULT '0',
  `mail_service_c` tinyint(1) DEFAULT '0',
  `preparation_realty_c` tinyint(1) DEFAULT '0',
  `loss_c` tinyint(1) DEFAULT '0',
  `help_client_c` tinyint(1) DEFAULT '0',
  `transfer_c` tinyint(1) DEFAULT '0',
  `transfer_date_c` datetime DEFAULT NULL,
  `another_c` text,
  `message_client_c` text,
  `date_periodic_visit_c` datetime DEFAULT NULL,
  `date_noplan_visit_c` datetime DEFAULT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_postsale_cstm`
--

INSERT INTO `cosib_postsale_cstm` (`id_c`, `keys_storing_c`, `taxes_c`, `periodic_visit_c`, `noplan_visit_c`, `mail_service_c`, `preparation_realty_c`, `loss_c`, `help_client_c`, `transfer_c`, `transfer_date_c`, `another_c`, `message_client_c`, `date_periodic_visit_c`, `date_noplan_visit_c`) VALUES
('3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 1, 0, 1, 1, 1, 0, 1, 1, 1, '2012-07-11 22:30:00', 'другое', '', '2012-07-02 22:45:00', '2012-07-17 23:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_posts_sphr_client_c`
--

DROP TABLE IF EXISTS `cosib_posts_sphr_client_c`;
CREATE TABLE IF NOT EXISTS `cosib_posts_sphr_client_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_post666dostsale_ida` varchar(36) DEFAULT NULL,
  `cosib_post53f6_client_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_postsle_sphr_client_ida1` (`cosib_post666dostsale_ida`),
  KEY `cosib_postsle_sphr_client_idb2` (`cosib_post53f6_client_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_posts_sphr_client_c`
--

INSERT INTO `cosib_posts_sphr_client_c` (`id`, `date_modified`, `deleted`, `cosib_post666dostsale_ida`, `cosib_post53f6_client_idb`) VALUES
('15dd1d53-cda7-5d0d-6695-4ff54cfe727e', '2012-07-05 08:13:51', 0, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('26607a87-19c4-14a6-a07e-4ff54b4c0bfe', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('295acd90-0be3-23f1-a5d2-4ff543718b96', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('5163265a-c247-d942-ed13-4ff52908fc55', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('6f6d3bf6-f382-b56b-db08-4ff51ef99804', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('9d45434e-30d8-88a2-e5f9-4ff5292f6421', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('a9856d01-0fec-6576-29fc-4ff54c3493d3', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('b14ca548-6cd4-8191-5790-4ff52b43409b', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('b208dd1d-8ed5-b8b9-85de-4ff540581c9a', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('d0023558-1e2a-aa37-5ca3-4ff529442b68', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('dc5569a3-c1f3-a3db-d694-4ff52243c353', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d'),
('ffe004b4-ea5a-edcf-5c63-4ff52b069c94', '2012-07-05 08:13:51', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'eb00f556-61fe-571e-f94b-4fe2e670ea6d');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_posts_sphr_object_c`
--

DROP TABLE IF EXISTS `cosib_posts_sphr_object_c`;
CREATE TABLE IF NOT EXISTS `cosib_posts_sphr_object_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_post535aostsale_ida` varchar(36) DEFAULT NULL,
  `cosib_postf3af_object_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_postsle_sphr_object_ida1` (`cosib_post535aostsale_ida`),
  KEY `cosib_postsle_sphr_object_idb2` (`cosib_postf3af_object_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_posts_sphr_object_c`
--

INSERT INTO `cosib_posts_sphr_object_c` (`id`, `date_modified`, `deleted`, `cosib_post535aostsale_ida`, `cosib_postf3af_object_idb`) VALUES
('10e7c3c8-94da-789d-7bc5-4ff54c327385', '2012-07-05 08:13:51', 0, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('1521149e-c0ce-d343-4787-4ff54b516cfa', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('24f344f4-30d2-ffbd-9445-4ff543a5cac7', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('3c5e0ea4-6753-3cd9-f9a1-4ff52928f152', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('4d4d56f7-ae7e-4b5e-205e-4ff51ed0d26a', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('89288ec5-0adf-eb43-664a-4ff5290a614e', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('8d5c6999-4ffb-0229-e994-4ff54ceb4906', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('a94d36bd-e8ad-d421-cb98-4ff5405b52cc', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('ac6a4890-ad26-4b93-4f0a-4ff52bccd0a4', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('c5a9ef89-8bca-769b-af45-4ff529de5ee8', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('d7fe561a-d2a2-eda5-d3d6-4ff522b1780d', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542'),
('e7611e3a-85d9-d2b7-a891-4ff52b7429e2', '2012-07-05 08:13:50', 1, '3a9716e4-8c1d-4f9e-5982-4ff51ece3573', 'd79e1fe1-084e-10c6-7d13-4fe1d02ab542');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
