-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2012 at 02:14 PM
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
-- Table structure for table `accounts_cosib_queries_c`
--

CREATE TABLE IF NOT EXISTS `accounts_cosib_queries_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `accounts_c3c3bccounts_ida` varchar(36) DEFAULT NULL,
  `accounts_c5a9fqueries_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accounts_cosib_queries_ida1` (`accounts_c3c3bccounts_ida`),
  KEY `accounts_cosib_queries_alt` (`accounts_c5a9fqueries_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts_cosib_queries_c`
--

REPLACE INTO `accounts_cosib_queries_c` (`id`, `date_modified`, `deleted`, `accounts_c3c3bccounts_ida`, `accounts_c5a9fqueries_idb`) VALUES
('65d7614a-02fb-0e0c-aeeb-4fcf103e78ba', '2012-06-06 09:27:37', 1, '8f3dac73-5c10-9edd-01f2-4e22cc900a0b', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d'),
('66d592d1-1ddd-782c-2b88-4fcee6c31f1b', '2012-06-06 09:27:37', 1, '8f3dac73-5c10-9edd-01f2-4e22cc900a0b', '426d6226-f831-77fc-1547-4fcee6fcf5c2'),
('7d58e4c1-0551-c605-d681-4fcf2250a25d', '2012-06-06 09:27:37', 0, '8f3dac73-5c10-9edd-01f2-4e22cc900a0b', '426d6226-f831-77fc-1547-4fcee6fcf5c2'),
('bbc48204-97dd-20b8-397c-4fcf227a86dc', '2012-06-06 09:27:37', 0, '8f3dac73-5c10-9edd-01f2-4e22cc900a0b', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queries`
--

CREATE TABLE IF NOT EXISTS `cosib_queries` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_queries`
--

REPLACE INTO `cosib_queries` (`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `assigned_user_id`) VALUES
('22863544-138e-194f-8978-4fd083b2357e', NULL, '2012-06-07 10:33:47', '2012-06-08 07:31:13', '1', '1', NULL, 0, '1'),
('258fb9cf-f4a5-c4a3-1fa7-4fcca6c742a5', NULL, '2012-06-04 12:14:51', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL),
('426d6226-f831-77fc-1547-4fcee6fcf5c2', NULL, '2012-06-06 05:09:56', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL),
('4fc7ccf4-fdb4-f99c-935a-4fcee2c9c020', NULL, '2012-06-06 04:55:35', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL),
('591f9887-d8f7-eef7-98da-4fcdbb56a11d', NULL, '2012-06-05 07:56:47', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL),
('9aa76cee-b2fe-5822-fb62-4fccb0538e5d', NULL, '2012-06-04 12:58:18', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL),
('d75b64e5-d50a-3eb5-9db5-4fc889ae97ce', NULL, '2012-06-01 09:21:24', '2012-06-08 12:50:10', '1', '1', NULL, 0, '1'),
('f3ca0929-a89c-6e84-7009-4fcee3b892b6', NULL, '2012-06-06 04:58:44', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queries_audit`
--

CREATE TABLE IF NOT EXISTS `cosib_queries_audit` (
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
  KEY `idx_cosib_queries_primary` (`id`),
  KEY `idx_cosib_queries_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_queries_audit`
--

REPLACE INTO `cosib_queries_audit` (`id`, `parent_id`, `date_created`, `created_by`, `field_name`, `data_type`, `before_value_string`, `after_value_string`, `before_value_text`, `after_value_text`) VALUES
('92b0b494-a406-5c4a-a60e-4fc8c351b393', 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '2012-06-01 13:26:28', '1', 'status_c', 'enum', 'Active', 'status1', NULL, NULL),
('1556e64d-7549-facc-fff5-4fccb14d9576', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d', '2012-06-04 12:58:58', '1', 'status_c', 'enum', 'status1', 'status18', NULL, NULL),
('48a2473b-ac11-d189-dd7c-4fccb165ebe1', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d', '2012-06-04 13:01:17', '1', 'status_c', 'enum', 'status18', 'status1', NULL, NULL),
('754409af-78e1-4b22-91e5-4fccb1aece4a', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d', '2012-06-04 13:02:01', '1', 'status_c', 'enum', 'status1', 'status18', NULL, NULL),
('5ac0d04e-e115-d2de-1d8c-4fcf10e207a2', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d', '2012-06-06 08:10:37', '1', 'type_of_object_c', 'enum', 'flat', '', NULL, NULL),
('5b4b453b-c2f9-57e2-af3c-4fcf103da32a', '9aa76cee-b2fe-5822-fb62-4fccb0538e5d', '2012-06-06 08:10:37', '1', 'budget_c', 'enum', 'price50100', '', NULL, NULL),
('5e1b48b5-aead-b471-31e0-4fd1aaf86b91', '22863544-138e-194f-8978-4fd083b2357e', '2012-06-08 07:31:13', '1', 'assigned_user_id', 'relate', '', '1', NULL, NULL),
('5ef2416c-70dc-d1dd-d19d-4fd1aa736e63', '22863544-138e-194f-8978-4fd083b2357e', '2012-06-08 07:31:13', '1', 'status_c', 'enum', 'status10', 'status1', NULL, NULL),
('782a5693-970f-40bf-a7b0-4fd1cc92ffee', 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '2012-06-08 09:56:15', '1', 'assigned_user_id', 'relate', '', '1', NULL, NULL),
('790afca2-8279-c0ff-ea8b-4fd1ccbbb83d', 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '2012-06-08 09:56:15', '1', 'status_c', 'enum', 'status1', 'status10', NULL, NULL),
('469ce1ea-5af8-629f-e1d1-4fd1f50b8b53', 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '2012-06-08 12:50:10', '1', 'budget_c', 'enum', 'price200_250', 'price1000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queries_cstm`
--

CREATE TABLE IF NOT EXISTS `cosib_queries_cstm` (
  `id_c` char(36) NOT NULL,
  `type_of_query_c` varchar(100) DEFAULT ' buying',
  `status_desc_c` text,
  `category_of_object_c` varchar(100) DEFAULT NULL,
  `type_of_object_c` varchar(100) DEFAULT NULL,
  `budget_c` varchar(100) DEFAULT NULL,
  `additional_term_budget_c` text,
  `province_c` varchar(100) DEFAULT NULL,
  `status_c` varchar(100) NOT NULL DEFAULT 'status1',
  `coast_c` varchar(100) DEFAULT NULL,
  `settlement_c` varchar(100) DEFAULT NULL,
  `quantity_of_bedroom_c` varchar(100) DEFAULT NULL,
  `remoteness_from_sea_c` varchar(100) DEFAULT NULL,
  `view_of_sea_c` tinyint(1) DEFAULT '0',
  `area_c` varchar(100) DEFAULT NULL,
  `additional_desc_c` text,
  `assigned_to_c` varchar(255) DEFAULT NULL,
  `number_of_people_c` varchar(100) DEFAULT NULL,
  `total_cost_c` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `charge_c` decimal(26,6) DEFAULT NULL,
  `prepayment_date_c` date DEFAULT NULL,
  `prepayment_size_c` decimal(26,6) DEFAULT NULL,
  `charge_summ_date_c` date DEFAULT NULL,
  `payment_date_c` date DEFAULT NULL,
  `payment_size_c` decimal(26,6) DEFAULT NULL,
  `documents_date_c` date DEFAULT NULL,
  `resolution_date_c` date DEFAULT NULL,
  `dni_begin_date_c` date DEFAULT NULL,
  `service_c` varchar(100) DEFAULT '1',
  `deposit_c` decimal(26,6) DEFAULT NULL,
  `deposit_date_c` date DEFAULT NULL,
  `airport_road_c` varchar(100) DEFAULT NULL,
  `dni_end_date_c` date DEFAULT NULL,
  `sphr_object_id_c` char(36) DEFAULT NULL,
  `remoteness_from_commercial_c` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_queries_cstm`
--

REPLACE INTO `cosib_queries_cstm` (`id_c`, `type_of_query_c`, `status_desc_c`, `category_of_object_c`, `type_of_object_c`, `budget_c`, `additional_term_budget_c`, `province_c`, `status_c`, `coast_c`, `settlement_c`, `quantity_of_bedroom_c`, `remoteness_from_sea_c`, `view_of_sea_c`, `area_c`, `additional_desc_c`, `assigned_to_c`, `number_of_people_c`, `total_cost_c`, `currency_id`, `charge_c`, `prepayment_date_c`, `prepayment_size_c`, `charge_summ_date_c`, `payment_date_c`, `payment_size_c`, `documents_date_c`, `resolution_date_c`, `dni_begin_date_c`, `service_c`, `deposit_c`, `deposit_date_c`, `airport_road_c`, `dni_end_date_c`, `sphr_object_id_c`, `remoteness_from_commercial_c`) VALUES
('22863544-138e-194f-8978-4fd083b2357e', 'buying', 'снять в аренду', 'commercialrealty', 'townhouse', 'price200_250', '', 'valencia', 'status1', 'alicante_costablanca', '', '3', 'm300_500', 1, 'green', 'ууцкуц', 'Петров', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, 'm300_500', NULL, '', ''),
('258fb9cf-f4a5-c4a3-1fa7-4fcca6c742a5', 'selling', '', 'newrealty', 'flat', 'price50_100', '', 'barcelona', 'status7', 'barcelona_costabrava', '', '1', 'm50_300', 0, 'green', '', 'fgdf', '1', 34234.000000, '', 423423.000000, '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '1', NULL, '2012-06-04', 'm50_300', NULL, 'd5e4d2d3-f63d-7b46-7509-4f952ee7187f', NULL),
('426d6226-f831-77fc-1547-4fcee6fcf5c2', 'postsale', '', '', '', '', '', '', 'status27', '', '', '', '', 0, '', '', 'админ', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '', NULL, 'f166dd32-68b6-8591-3d7e-4e2c674ea963', NULL),
('4fc7ccf4-fdb4-f99c-935a-4fcee2c9c020', 'postsale', '', '', 'flat', '', '', '', 'status25', '', '', '', '', 0, '', '', 'Петров', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, '', NULL, '17a41de5-cdd9-9bc3-99d0-4e2c7bfda237', NULL),
('591f9887-d8f7-eef7-98da-4fcdbb56a11d', 'postsale', '', 'newrealty', 'flat', '', '', 'barcelona', 'status25', 'barcelona_costabrava', '1', '1', '', 0, '', '', 'Administrator', '1', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2012-06-21', '', NULL, '397df4bb-ca50-da51-b676-4f5db3134cbb', NULL),
('9aa76cee-b2fe-5822-fb62-4fccb0538e5d', 'visa', '', '', '', '', '', '', 'status18', '', '', '', '', 0, '', '', 'sdfsd', '3', 23432.000000, '', 423.000000, '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '1', NULL, NULL, '', NULL, '', NULL),
('d75b64e5-d50a-3eb5-9db5-4fc889ae97ce', 'bylease', 'рпарп попор плпл', 'newrealty', 'flat', 'price1000', '', 'malaga', 'status10', 'murcia_costacalida', '', '4', 'm500_1000', 1, 'green', 'testdescv\r\n', 'ttestadssigned', '1', 0.000000, '', 0.000000, '2012-06-01', NULL, '2012-06-01', '2012-06-01', NULL, '2012-06-01', '2012-06-01', '2012-06-01', '1', NULL, '2012-06-01', 'm300_500', NULL, '', 'm50_300'),
('f3ca0929-a89c-6e84-7009-4fcee3b892b6', 'selling', 'сатус он такой', 'secondrealty', '', '', '', '', 'status7', '', '', '', '', 0, '', '', 'вася', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '', NULL, 'c44531f4-4f9b-307c-978e-4e22cf1efae4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queries_documents_c`
--

CREATE TABLE IF NOT EXISTS `cosib_queries_documents_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_quer891cqueries_ida` varchar(36) DEFAULT NULL,
  `cosib_quer51ebcuments_idb` varchar(36) DEFAULT NULL,
  `document_revision_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_queries_documents_ida1` (`cosib_quer891cqueries_ida`),
  KEY `cosib_queries_documents_alt` (`cosib_quer51ebcuments_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queri_sphr_object_c`
--

CREATE TABLE IF NOT EXISTS `cosib_queri_sphr_object_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cosib_quer91b5queries_ida` varchar(36) DEFAULT NULL,
  `cosib_quer4238_object_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cosib_queries_sphr_object_alt` (`cosib_quer91b5queries_ida`,`cosib_quer4238_object_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_queri_sphr_object_c`
--

REPLACE INTO `cosib_queri_sphr_object_c` (`id`, `date_modified`, `deleted`, `cosib_quer91b5queries_ida`, `cosib_quer4238_object_idb`) VALUES
('764f0775-86ec-2508-7991-4fd300224dcf', '2012-06-09 07:56:58', 1, 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '6b97be98-185f-14a5-0221-4fd1f753ab76'),
('771e4d94-58d2-bb63-d116-4fd303ae97fa', '2012-06-09 08:04:10', 0, 'd75b64e5-d50a-3eb5-9db5-4fc889ae97ce', '6b97be98-185f-14a5-0221-4fd1f753ab76');

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
('sphr_Clienttype_c', 'type_c', 'LBL_TYPE', NULL, NULL, 'sphr_Client', 'enum', 100, 0, 'individual', '2011-08-23 16:21:57', 0, 0, 0, 0, 1, 'true', 'client_type_list', NULL, NULL, NULL),
('sphr_Ownerphone_mobile_c', 'phone_mobile_c', 'LBL_PHONE_MOBILE_C', NULL, NULL, 'sphr_Owner', 'int', 11, 1, NULL, '2011-07-24 12:24:32', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Ownerphone_home_c', 'phone_home_c', 'LBL_PHONE_HOME', NULL, NULL, 'sphr_Owner', 'int', 11, 0, NULL, '2011-08-11 17:03:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Ownerphone_work_c', 'phone_work_c', 'LBL_PHONE_WORK', NULL, NULL, 'sphr_Owner', 'int', 11, 0, NULL, '2011-07-22 09:17:06', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientaddress_registration_type_c', 'address_registration_type_c', 'LBL_ADDRESS_REGISTRATION_TYPE', NULL, NULL, 'sphr_Client', 'enum', 100, 0, 'permanent', '2011-07-26 17:02:28', 0, 0, 0, 0, 1, 'true', 'registration_type_list', NULL, NULL, NULL),
('sphr_Owneraddress_registration_type_c', 'address_registration_type_c', 'LBL_ADDRESS_REGISTRATION_TYPE', NULL, NULL, 'sphr_Owner', 'enum', 100, 0, 'permanent', '2011-07-28 08:16:43', 0, 0, 0, 0, 1, 'true', 'registration_type_list', NULL, NULL, NULL),
('sphr_Ownerpassport_series_c', 'passport_series_c', 'LBL_PASSPORT_SERIES', NULL, NULL, 'sphr_Owner', 'int', 4, 1, NULL, '2011-07-28 09:20:37', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Ownerpassport_number_c', 'passport_number_c', 'LBL_PASSPORT_NUMBER', NULL, NULL, 'sphr_Owner', 'int', 6, 1, NULL, '2011-07-28 09:19:33', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Meetingstype_c', 'type_c', 'LBL_TYPE', NULL, NULL, 'Meetings', 'enum', 100, 1, 'default', '2011-08-02 15:09:14', 0, 0, 0, 0, 1, 'true', 'meeting_type_list', NULL, NULL, NULL),
('Campaignscost_c', 'cost_c', 'LBL_COST', NULL, NULL, 'Campaigns', 'int', 255, 0, NULL, '2011-08-09 08:15:38', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Campaignsphone_in_c', 'phone_in_c', 'LBL_PHONE_IN', NULL, NULL, 'Campaigns', 'varchar', 11, 1, NULL, '2011-08-09 08:23:05', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Opportunitiesdiscount_apply_c', 'discount_apply_c', 'LBL_DISCOUNT_APPLY ', NULL, NULL, 'Opportunities', 'varchar', 100, 1, NULL, '2011-08-11 17:21:34', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Opportunitiesstatus_c', 'status_c', 'LBL_STATUS', NULL, NULL, 'Opportunities', 'enum', 100, 0, 'reserve', '2011-08-11 17:24:36', 0, 0, 0, 0, 1, 'true', 'deal_status_list', NULL, NULL, NULL),
('sphr_Interesttype_c', 'type_c', 'LBL_TYPE', NULL, NULL, 'sphr_Interest', 'enum', 100, 1, '1', '2011-08-19 08:56:46', 0, 0, 0, 0, 1, 'true', 'object_type_list', NULL, NULL, NULL),
('sphr_Clientmiddle_name_c', 'middle_name_c', 'LBL_MIDDLE_NAME', NULL, NULL, 'sphr_Client', 'varchar', 20, 0, NULL, '2012-04-08 12:50:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientphone_aon_c', 'phone_aon_c', 'LBL_PHONE_AON', NULL, NULL, 'sphr_Client', 'phone', 255, 0, NULL, '2011-08-23 16:23:09', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestsquare_from_c', 'square_from_c', 'LBL_SQUARE_FROM', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:13:54', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestsquare_to_c', 'square_to_c', 'LBL_SQUARE_TO', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:14:51', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestpayment_meter_from_c', 'payment_meter_from_c', 'LBL_PAYMENT_METER_FROM', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:16:42', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestpayment_meter_to_c', 'payment_meter_to_c', 'LBL_PAYMENT_METER_TO', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:17:34', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestpayment_object_from_c', 'payment_object_from_c', 'LBL_PAYMENT_OBJECT_FROM', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:19:21', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Interestpayment_object_to_c', 'payment_object_to_c', 'LBL_PAYMENT_OBJECT_TO', NULL, NULL, 'sphr_Interest', 'int', 8, 0, NULL, '2011-08-31 12:19:13', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Usersasterisk_outbound_c', 'asterisk_outbound_c', 'LBL_ASTERISK_OUTBOUND', NULL, NULL, 'Users', 'bool', 45, 0, '0', '2011-10-27 06:24:11', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Usersasterisk_inbound_c', 'asterisk_inbound_c', 'LBL_ASTERISK_INBOUND', NULL, NULL, 'Users', 'bool', 45, 0, '0', '2011-10-27 06:24:12', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Usersasterisk_ext_c', 'asterisk_ext_c', 'LBL_ASTERISK_EXT', NULL, NULL, 'Users', 'varchar', 45, 0, NULL, '2011-10-27 06:24:12', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Callsasterisk_caller_id_c', 'asterisk_caller_id_c', 'LBL_ASTERISK_CALLER_ID', NULL, 'trimmed callerId', 'Calls', 'varchar', 45, 0, NULL, '2011-10-27 06:24:12', 0, 0, 0, 0, 0, 'true', NULL, NULL, NULL, NULL),
('sphr_Clienttest_nettel_c', 'test_nettel_c', 'LBL_TEST_NETTEL', NULL, NULL, 'sphr_Client', 'varchar', 255, 0, NULL, '2011-11-03 07:48:46', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_phone_companymc_start_date_c', 'mc_start_date_c', 'LBL_MC_START_DATE', NULL, NULL, 'sphr_phone_company', 'date', NULL, 1, NULL, '2011-11-27 10:48:30', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_phone_companymc_end_date_c', 'mc_end_date_c', 'LBL_MC_END_DATE', NULL, NULL, 'sphr_phone_company', 'date', NULL, 1, NULL, '2011-11-27 10:49:01', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_phone_companybudget_plan_c', 'budget_plan_c', 'LBL_BUDGET_PLAN', NULL, NULL, 'sphr_phone_company', 'currency', 26, 1, NULL, '2011-11-27 10:49:53', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_phone_companycurrency_id', 'currency_id', 'LBL_CURRENCY', NULL, NULL, 'sphr_phone_company', 'currency_id', 36, 0, NULL, '2011-11-27 10:49:53', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_phone_companybudget_fact_c', 'budget_fact_c', 'LBL_BUDGET_FACT', NULL, NULL, 'sphr_phone_company', 'currency', 26, 0, NULL, '2011-11-27 10:50:24', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientis_new_c', 'is_new_c', 'LBL_IS_NEW', NULL, NULL, 'sphr_Client', 'int', 255, 0, NULL, '2011-11-28 06:03:57', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelbudget_plan_c', 'budget_plan_c', 'LBL_BUDGET_PLAN', NULL, NULL, 'sphr_market_channel', 'currency', 26, 0, NULL, '2011-11-30 12:04:59', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelcurrency_id', 'currency_id', 'LBL_CURRENCY', NULL, NULL, 'sphr_market_channel', 'currency_id', 36, 0, NULL, '2011-11-30 09:10:30', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelbudget_fact_c', 'budget_fact_c', 'LBL_BUDGET_FACT', NULL, NULL, 'sphr_market_channel', 'currency', 26, 0, NULL, '2011-11-30 12:05:29', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelmc_start_date_c', 'mc_start_date_c', 'LBL_MC_START_DATE', NULL, NULL, 'sphr_market_channel', 'date', NULL, 1, NULL, '2011-11-30 12:06:10', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelmc_end_date_c', 'mc_end_date_c', 'LBL_MC_END_DATE', NULL, NULL, 'sphr_market_channel', 'date', NULL, 1, NULL, '2011-11-30 12:06:46', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_market_channelmc_source_c', 'mc_source_c', 'LBL_MC_SOURCE', NULL, NULL, 'sphr_market_channel', 'enum', 100, 0, 'empty', '2011-11-30 12:35:43', 0, 1, 1, 0, 1, 'true', 'client_source_list', NULL, NULL, NULL),
('sphr_Clientphone_mobile_2_c', 'phone_mobile_2_c', 'LBL_PHONE_MOBILE_2', NULL, NULL, 'sphr_Client', 'phone', 20, 0, NULL, '2012-04-18 08:48:19', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientadditional_information_c', 'additional_information_c', 'LBL_ADDITIONAL_INFORMATION', NULL, NULL, 'sphr_Client', 'text', NULL, 0, NULL, '2012-04-06 14:02:07', 0, 0, 0, 0, 1, 'true', NULL, '6', '50', NULL),
('sphr_Clientphoto_c', 'photo_c', 'LBL_PHOTO', NULL, NULL, 'sphr_Client', 'varchar', 255, 0, NULL, '2012-04-04 14:27:13', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientemail_2_c', 'email_2_c', 'LBL_EMAIL_2', NULL, NULL, 'sphr_Client', 'varchar', 20, 0, NULL, '2012-04-18 08:48:29', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectname_rus_c', 'name_rus_c', 'LBL_NAME_RUS', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 06:40:34', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectname_eng_c', 'name_eng_c', 'LBL_NAME_ENG', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 06:59:29', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectname_sp_c', 'name_sp_c', 'LBL_NAME_SP', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 07:05:25', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_name_c', 'zagran_name_c', 'LBL_ZAGRAN_NAME', NULL, NULL, 'sphr_Client', 'varchar', 20, 0, NULL, '2012-04-08 12:11:04', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_last_name_c', 'zagran_last_name_c', 'LBL_ZAGRAN_LAST_NAME', NULL, NULL, 'sphr_Client', 'varchar', 20, 0, NULL, '2012-04-08 12:11:34', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_number_c', 'zagran_number_c', 'LBL_ZAGRAN_NUMBER', NULL, NULL, 'sphr_Client', 'varchar', 50, 0, NULL, '2012-04-08 12:11:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_date_birth_c', 'zagran_date_birth_c', 'LBL_ZAGRAN_DATE_BIRTH', NULL, NULL, 'sphr_Client', 'date', NULL, 0, NULL, '2012-04-08 12:11:13', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_date_give_c', 'zagran_date_give_c', 'LBL_ZAGRAN_DATE_GIVE', NULL, NULL, 'sphr_Client', 'date', NULL, 0, NULL, '2012-04-08 12:11:42', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_date_end_c', 'zagran_date_end_c', 'LBL_ZAGRAN_DATE_END', NULL, NULL, 'sphr_Client', 'date', NULL, 0, NULL, '2012-04-08 12:12:00', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_organ_c', 'zagran_organ_c', 'LBL_ZAGRAN_ORGAN', NULL, NULL, 'sphr_Client', 'text', NULL, 0, NULL, '2012-04-08 12:11:25', 0, 0, 0, 0, 1, 'true', NULL, '3', '50', NULL),
('sphr_Clientcurrent_city_c', 'current_city_c', 'LBL_CURRENT_CITY', NULL, NULL, 'sphr_Client', 'varchar', 50, 0, NULL, '2012-04-17 15:02:21', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientcurrent_country_c', 'current_country_c', 'LBL_CURRENT_COUNTRY', NULL, NULL, 'sphr_Client', 'varchar', 50, 0, NULL, '2012-04-17 15:03:00', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientcurrent_address_c', 'current_address_c', 'LBL_CURRENT_ADDRESS', NULL, NULL, 'sphr_Client', 'text', NULL, 0, NULL, '2012-04-18 15:12:46', 0, 0, 0, 0, 1, 'true', NULL, '6', '50', NULL),
('sphr_Objectamount_commission_c', 'amount_commission_c', 'LBL_AMOUNT_COMMISSION', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 07:11:45', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectnumber_bedroom_c', 'number_bedroom_c', 'LBL_NUMBER_BEDROOM', NULL, NULL, 'sphr_Object', 'enum', 100, 1, '1', '2012-04-23 07:20:09', 0, 0, 0, 0, 1, 'true', 'numbers_list', NULL, NULL, NULL),
('sphr_Objectnumber_bathroom_c', 'number_bathroom_c', 'LBL_NUMBER_BATHROOM', NULL, NULL, 'sphr_Object', 'enum', 100, 1, '1', '2012-04-23 07:21:26', 0, 0, 0, 0, 1, 'true', 'numbers_list', NULL, NULL, NULL),
('sphr_Objecttotal_area_c', 'total_area_c', 'LBL_TOTAL_AREA', NULL, NULL, 'sphr_Object', 'int', 255, 1, NULL, '2012-04-23 07:31:29', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectapartment_area_c', 'apartment_area_c', 'LBL_APARTMENT_AREA', NULL, NULL, 'sphr_Object', 'int', 255, 1, NULL, '2012-04-23 07:36:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectsea_distance_c', 'sea_distance_c', 'LBL_SEA_DISTANCE', NULL, NULL, 'sphr_Object', 'int', 255, 1, NULL, '2012-04-23 07:39:45', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcomm_center_distance_c', 'comm_center_distance_c', 'LBL_COMM_CENTER_DISTANCE', NULL, NULL, 'sphr_Object', 'int', 255, 1, NULL, '2012-04-23 07:41:16', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcomplex_c', 'complex_c', 'LBL_COMPLEX', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 08:54:12', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_sea_c', 'view_sea_c', 'LBL_VIEW_SEA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:03:32', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_mount_c', 'view_mount_c', 'LBL_VIEW_MOUNT', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:05:01', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_forest_c', 'view_forest_c', 'LBL_VIEW_FOREST_C', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:06:45', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_park_c', 'view_park_c', 'LBL_VIEW_PARK', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:07:59', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_salt_lake_c', 'view_salt_lake_c', 'LBL_VIEW_SALT_LAKE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:11:18', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectview_golf_pole_c', 'view_golf_pole_c', 'LBL_VIEW_GOLF_POLE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:13:07', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcity_area_c', 'city_area_c', 'LBL_CITY_AREA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:15:05', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectgreen_area_c', 'green_area_c', 'LBL_GREEN_AREA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:16:30', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectgarage_c', 'garage_c', 'LBL_GARAGE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:18:03', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectparking_area_c', 'parking_area_c', 'LBL_PARKING_AREA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:20:16', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprivate_swimpool_c', 'private_swimpool_c', 'LBL_PRIVATE_SWIMPOOL', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:23:07', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectgeneral_swimpool_c', 'general_swimpool_c', 'LBL_GENERAL_SWIMPOOL', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:34:21', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectchildren_area_c', 'children_area_c', 'LBL_CHILDREN_AREA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:36:37', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectsport_area_c', 'sport_area_c', 'LBL_SPORT_AREA', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:39:39', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectterrace_c', 'terrace_c', 'LBL_TERRACE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:41:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectbalcony_c', 'balcony_c', 'LBL_BALCONY', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:44:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectsolarium_c', 'solarium_c', 'LBL_SOLARIUM', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:45:43', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectbasement_c', 'basement_c', 'LBL_BASEMENT', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:47:09', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectstoreroom_c', 'storeroom_c', 'LBL_STOREROOM', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:51:01', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectmebel_c', 'mebel_c', 'LBL_MEBEL', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:51:52', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectkitchen_mebel_c', 'kitchen_mebel_c', 'LBL_KITCHEN_MEBEL', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:53:15', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectlife_equipment_c', 'life_equipment_c', 'LBL_LIFE_EQUIPMENT', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:55:55', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectsafe_c', 'safe_c', 'LBL_SAFE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:57:26', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectjacuzzi_c', 'jacuzzi_c', 'LBL_JACUZZI', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 09:59:03', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectconditioner_c', 'conditioner_c', 'LBL_CONDITIONER', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 10:01:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectintelligent_house_c', 'intelligent_house_c', 'LBL_INTELLIGENT_HOUSE', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 10:02:49', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectalarm_c', 'alarm_c', 'LBL_ALARM', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 10:04:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectheating_floor_c', 'heating_floor_c', 'LBL_HEATING_FLOOR', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 10:05:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectheating_c', 'heating_c', 'LBL_HEATING', NULL, NULL, 'sphr_Object', 'bool', 255, 0, '0', '2012-04-23 10:06:53', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectadditional_description_c', 'additional_description_c', 'LBL_ADDITIONAL_DESCRIPTION', NULL, NULL, 'sphr_Object', 'text', NULL, 0, NULL, '2012-04-23 10:18:10', 0, 0, 0, 0, 1, 'true', NULL, '5', '60', NULL),
('sphr_Objectcategory_c', 'category_c', 'LBL_CATEGORY', NULL, NULL, 'sphr_Object', 'enum', 100, 1, NULL, '2012-04-23 12:21:48', 0, 0, 0, 0, 1, 'true', 'category_list', NULL, NULL, NULL),
('sphr_Objectnearest_airport_c', 'nearest_airport_c', 'LBL_NEAREST_AIRPORT', NULL, NULL, 'sphr_Object', 'multienum', 100, 1, NULL, '2012-05-04 13:41:45', 0, 0, 0, 0, 1, 'true', 'airport_list', NULL, NULL, NULL),
('sphr_Objectobject_status_c', 'object_status_c', 'LBL_OBJECT_STATUS', NULL, NULL, 'sphr_Object', 'multienum', 100, 1, NULL, '2012-05-04 13:59:54', 0, 0, 0, 0, 1, 'true', 'object_status_list', NULL, NULL, NULL),
('sphr_Objectprice_sale_c', 'price_sale_c', 'LBL_PRICE_SALE', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-05-19 15:01:00', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprice_rent_c', 'price_rent_c', 'LBL_PRICE_RENT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-05-19 15:01:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_sale_c', 'seller_price_sale_c', 'LBL_SELLER_PRICE_SALE', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-05-19 15:04:21', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_rent_c', 'seller_price_rent_c', 'LBL_SELLER_PRICE_RENT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-05-19 15:05:09', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriestype_of_query_c', 'type_of_query_c', 'LBL_TYPE_OF_QUERY', NULL, NULL, 'cosib_queries', 'enum', 100, 1, ' buying', '2012-05-30 13:17:27', 0, 0, 0, 0, 1, 'true', 'ci_query_type_list', NULL, NULL, NULL),
('cosib_queriesstatus_desc_c', 'status_desc_c', 'LBL_STATUS_DESC', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-05-30 13:23:04', 0, 0, 0, 0, 1, 'true', NULL, '8', '200', NULL),
('cosib_queriescategory_of_object_c', 'category_of_object_c', 'LBL_CATEGORY_OF_OBJECT', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:47:43', 0, 0, 0, 0, 1, 'true', 'ci_category_of_object_list', NULL, NULL, NULL),
('cosib_queriestype_of_object_c', 'type_of_object_c', 'LBL_TYPE_OF_OBJECT', 'Зависит от типа запроса В случае продажи или сдачи в аренду Модуль Объекты. Ссылка на объект В случае покупки и снять в аренду Наполняется администратором системы', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:57:07', 0, 1, 0, 0, 1, 'true', 'ci_type_of_object_list', NULL, NULL, NULL),
('cosib_queriesbudget_c', 'budget_c', 'LBL_BUDGET', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-04 13:44:29', 0, 1, 0, 0, 1, 'true', 'ci_budget_list', NULL, NULL, NULL),
('cosib_queriesadditional_term_budget_c', 'additional_term_budget_c', 'LBL_ADDITIONAL_TERM_BUDGET', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-05-31 06:50:30', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL),
('cosib_queriesprovince_c', 'province_c', 'LBL_PROVINCE', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:47:58', 0, 0, 0, 0, 1, 'true', 'query_province_list', NULL, NULL, NULL),
('cosib_queriesstatus_c', 'status_c', 'LBL_STATUS', 'Зависит от Типа запроса', NULL, 'cosib_queries', 'enum', 100, 1, 'status1', '2012-06-01 13:01:04', 0, 1, 0, 0, 1, 'true', 'queries_statuses_list', NULL, NULL, NULL),
('cosib_queriescoast_c', 'coast_c', 'LBL_COAST', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:52:42', 0, 0, 0, 0, 1, 'true', 'queries_coast_list', NULL, NULL, NULL),
('cosib_queriessettlement_c', 'settlement_c', 'LBL_SETTLEMENT', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 11:28:50', 0, 0, 0, 0, 1, 'true', 'queries_settlement_default_list', NULL, NULL, NULL),
('cosib_queriesquantity_of_bedroom_c', 'quantity_of_bedroom_c', 'LBL_QUANTITY_OF_BEDROOM', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:53:49', 0, 0, 0, 0, 1, 'true', 'ci_quantity_of_bedroom_list', NULL, NULL, NULL),
('cosib_queriesremoteness_from_sea_c', 'remoteness_from_sea_c', 'LBL_REMOTENESS_FROM_SEA', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду Наполняется администратором системы', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-08 08:54:28', 0, 0, 0, 0, 1, 'true', 'ci_remoteness_from_sea_list', NULL, NULL, NULL),
('cosib_queriesview_of_sea_c', 'view_of_sea_c', 'LBL_VIEW_OF_SEA', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', 'Выберете, если важен вид на море', 'cosib_queries', 'bool', 255, 0, '0', '2012-06-04 13:09:06', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesarea_c', 'area_c', 'LBL_AREA', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-04 13:44:47', 0, 0, 0, 0, 1, 'true', 'queries_areas_list', NULL, NULL, NULL),
('cosib_queriesadditional_desc_c', 'additional_desc_c', 'LBL_ADDITIONAL_DESC', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-05-31 07:59:15', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL),
('cosib_queriesassigned_to_c', 'assigned_to_c', 'LBL_ASSIGNED_TO', 'модуль Сотрудники! По умолчанию – создатель записи', NULL, 'cosib_queries', 'varchar', 255, 0, NULL, '2012-06-08 08:23:16', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesnumber_of_people_c', 'number_of_people_c', 'LBL_NUMBER_OF_PEOPLE', 'Для ВНЖ', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:47:32', 0, 0, 0, 0, 1, 'true', 'ci_number_of_people_list', NULL, NULL, NULL),
('cosib_queriestotal_cost_c', 'total_cost_c', 'LBL_TOTAL_COST', 'Для внж', NULL, 'cosib_queries', 'currency', 26, 0, NULL, '2012-06-04 12:59:55', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriescurrency_id', 'currency_id', 'LBL_CURRENCY', NULL, NULL, 'cosib_queries', 'currency_id', 36, 0, NULL, '2012-05-31 08:15:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriescharge_c', 'charge_c', 'LBL_CHARGE', 'Для внж', NULL, 'cosib_queries', 'currency', 26, 0, NULL, '2012-06-04 13:00:05', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesprepayment_date_c', 'prepayment_date_c', 'LBL_PREPAYMENT_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:27:22', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesprepayment_size_c', 'prepayment_size_c', 'LBL_PREPAYMENT_SIZE', 'для внж', NULL, 'cosib_queries', 'currency', 26, 0, NULL, '2012-05-31 08:22:52', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriescharge_summ_date_c', 'charge_summ_date_c', 'LBL_CHARGE_SUMM_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:27:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriespayment_date_c', 'payment_date_c', 'LBL_PAYMENT_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:26:43', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriespayment_size_c', 'payment_size_c', 'LBL_PAYMENT_SIZE', 'для внж', NULL, 'cosib_queries', 'currency', 26, 0, NULL, '2012-05-31 08:26:06', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesdocuments_date_c', 'documents_date_c', 'LBL_DOCUMENTS_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:26:58', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesresolution_date_c', 'resolution_date_c', 'LBL_RESOLUTION_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:26:33', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesdni_begin_date_c', 'dni_begin_date_c', 'LBL_DNI_BEGIN_DATE', 'для внж', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:26:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriessphr_object_id_c', 'sphr_object_id_c', 'LBL_LIST_RELATED_TO', NULL, NULL, 'cosib_queries', 'id', 36, 0, NULL, '2012-06-04 10:25:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriestype_of_object_relate_c', 'type_of_object_relate_c', 'LBL_TYPE_OF_OBJECT_RELATE', 'В случае продажи или сдачи в аренду, постпродажи  Модуль Объекты. Ссылка на объект', NULL, 'cosib_queries', 'relate', 255, 0, NULL, '2012-06-04 11:45:08', 0, 1, 0, 0, 1, 'true', NULL, 'sphr_Object', 'sphr_object_id_c', NULL),
('cosib_queriesservice_c', 'service_c', 'LBL_SERVICE', 'для постпродажи', NULL, 'cosib_queries', 'enum', 100, 0, '1', '2012-06-04 13:45:35', 0, 0, 0, 0, 1, 'true', 'queries_service_list', NULL, NULL, NULL),
('cosib_queriesdeposit_c', 'deposit_c', 'LBL_DEPOSIT', 'для постпродажи', NULL, 'cosib_queries', 'currency', 26, 0, NULL, '2012-05-31 08:45:59', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesdeposit_date_c', 'deposit_date_c', 'LBL_DEPOSIT_DATE', 'для постпродажи', NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 12:45:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesairport_road_c', 'airport_road_c', 'LBL_AIRPORT_ROAD', 'В макетах указан', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-04 13:45:52', 0, 0, 0, 0, 1, 'true', 'ci_remoteness_from_sea_list', NULL, NULL, NULL),
('Accountsphone1_c', 'phone1_c', 'LBL_PHONE1', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 13:04:06', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsphone2_c', 'phone2_c', 'LBL_PHONE2', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:16:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsemail2_c', 'email2_c', 'LBL_EMAIL2', NULL, NULL, 'Accounts', 'varchar', 255, 0, NULL, '2012-05-31 12:22:49', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsidentification_c', 'identification_c', 'LBL_IDENTIFICATION', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Accounts', 'text', NULL, 1, NULL, '2012-05-31 12:25:51', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL),
('Accountscountry_c', 'country_c', 'LBL_COUNTRY', NULL, NULL, 'Accounts', 'enum', 100, 0, 'russia', '2012-05-31 12:27:18', 0, 0, 0, 0, 1, 'true', 'countries_list', NULL, NULL, NULL),
('Accountsregion_c', 'region_c', 'LBL_REGION', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-05-31 12:29:35', 0, 0, 0, 0, 1, 'true', 'counteragents_region_list', NULL, NULL, NULL),
('Accountscity_c', 'city_c', 'LBL_CITY', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-05-31 12:30:41', 0, 0, 0, 0, 1, 'true', 'counteragents_cities_list', NULL, NULL, NULL),
('Accountscategory_c', 'category_c', 'LBL_CATEGORY', NULL, NULL, 'Accounts', 'enum', 100, 0, 'provider', '2012-05-31 13:03:27', 0, 1, 0, 0, 1, 'true', 'counteragents_category_list', NULL, NULL, NULL),
('Accountslead_id_c', 'lead_id_c', 'LBL_LIST_RELATED_TO', NULL, NULL, 'Accounts', 'id', 36, 0, NULL, '2012-05-31 12:52:37', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsassigned_to_c', 'assigned_to_c', 'LBL_ASSIGNED_TO', NULL, NULL, 'Accounts', 'relate', 255, 1, NULL, '2012-05-31 13:03:04', 0, 1, 0, 0, 1, 'true', NULL, 'Leads', 'lead_id_c', NULL),
('Accountspatronymic_c', 'patronymic_c', 'LBL_PATRONYMIC', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:55:07', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsfirstname_c', 'firstname_c', 'LBL_FIRSTNAME', NULL, NULL, 'Accounts', 'varchar', 20, 1, NULL, '2012-05-31 12:56:25', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountslastname_c', 'lastname_c', 'LBL_LASTNAME', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:57:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsposition_c', 'position_c', 'LBL_POSITION', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:58:40', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsbirthday_c', 'birthday_c', 'LBL_BIRTHDAY', NULL, NULL, 'Accounts', 'date', NULL, 0, NULL, '2012-05-31 13:00:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsoffice_address_c', 'office_address_c', 'LBL_OFFICE_ADDRESS', NULL, NULL, 'Accounts', 'text', NULL, 0, NULL, '2012-05-31 13:02:02', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL),
('cosib_queriesdni_end_date_c', 'dni_end_date_c', 'LBL_DNI_END_DATE', NULL, NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:25:31', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesremoteness_from_commercial_c', 'remoteness_from_commercial_c', 'LBL_REMOTENESS_FROM_COMMERCIAL_C', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-08 08:54:41', 0, 0, 0, 0, 1, 'true', 'ci_remoteness_from_sea_list', NULL, NULL, NULL);

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
('54364be1-9598-4b55-da74-4fd30704b6fb', 'leads_modified_user', 'Users', 'users', 'id', 'Leads', 'leads', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('546f95e5-c891-15e5-2dce-4fd3078b8aa4', 'leads_created_by', 'Users', 'users', 'id', 'Leads', 'leads', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('54a3daf5-0214-b54f-6958-4fd3074b0f26', 'leads_assigned_user', 'Users', 'users', 'id', 'Leads', 'leads', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('54da1125-3d93-4889-cc7c-4fd3078082c2', 'leads_email_addresses', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('55142609-1c20-a92e-70ef-4fd3079429e3', 'leads_email_addresses_primary', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('554e809f-2b15-b8e2-e666-4fd3078710e4', 'lead_direct_reports', 'Leads', 'leads', 'id', 'Leads', 'leads', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('558af04d-11d4-233c-5210-4fd307f6eee8', 'lead_tasks', 'Leads', 'leads', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('55cbd366-46ee-c8ff-cd29-4fd307414982', 'lead_notes', 'Leads', 'leads', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('5609ac5e-e387-36d5-4eb9-4fd30704dd5c', 'lead_meetings', 'Leads', 'leads', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('56411c8b-2902-38f8-1335-4fd3078e4391', 'lead_calls', 'Leads', 'leads', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('5675761d-4e19-6ab4-3615-4fd30739aeeb', 'lead_emails', 'Leads', 'leads', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('56adbcff-adad-3bce-7b81-4fd30744f920', 'lead_campaign_log', 'Leads', 'leads', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5acca90a-74f0-6942-bdf2-4fd3079f400a', 'cases_modified_user', 'Users', 'users', 'id', 'Cases', 'cases', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5b05e21c-c3a8-6570-9b23-4fd30746eb2e', 'cases_created_by', 'Users', 'users', 'id', 'Cases', 'cases', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5b3c6b6e-1a6e-c149-c42c-4fd307720a32', 'cases_assigned_user', 'Users', 'users', 'id', 'Cases', 'cases', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5b72441e-5677-03bf-a86e-4fd307dd2cb5', 'case_calls', 'Cases', 'cases', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('5bbcdda1-24cf-3112-5c43-4fd30751ed6f', 'case_tasks', 'Cases', 'cases', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('5c302afc-83c6-6c9f-92ed-4fd3079e81e8', 'case_notes', 'Cases', 'cases', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('5c9df407-8097-af1e-d25b-4fd307ac65a6', 'case_meetings', 'Cases', 'cases', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('5cf5098c-a976-f1c2-e57c-4fd3072aca64', 'case_emails', 'Cases', 'cases', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('61649ea6-6f88-6c91-d090-4fd30730b05b', 'bugs_modified_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('619d7d63-6554-93bc-575a-4fd3076b8098', 'bugs_created_by', 'Users', 'users', 'id', 'Bugs', 'bugs', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('61d61ef8-ffbb-46a1-1ad6-4fd3075d2ebe', 'bugs_assigned_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('620d4b2e-63f7-e4ae-24c4-4fd307fff41c', 'bug_tasks', 'Bugs', 'bugs', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('6248c0e4-71da-8178-c959-4fd30780bcb5', 'bug_meetings', 'Bugs', 'bugs', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('6283e222-02ee-1303-ef86-4fd3079a3aa7', 'bug_calls', 'Bugs', 'bugs', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('62be32b1-31d3-96e8-3613-4fd3078fcd4d', 'bug_emails', 'Bugs', 'bugs', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('62fd115a-aee7-f52e-3963-4fd307f72541', 'bug_notes', 'Bugs', 'bugs', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('63361708-25f9-a6b9-3fc5-4fd307485911', 'bugs_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'found_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('637474dd-904b-f9b0-11df-4fd307af013c', 'bugs_fixed_in_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'fixed_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6448e4fa-aed5-2f59-4715-4fd3077eefe8', 'user_direct_reports', 'Users', 'users', 'id', 'Users', 'users', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('64841e53-2a74-87ec-8960-4fd30777f3e9', 'users_email_addresses', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('64c19c8e-171c-2df2-e57d-4fd307edf737', 'users_email_addresses_primary', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('66adc765-d51f-4698-1f17-4fd3072fe148', 'campaignlog_contact', 'CampaignLog', 'campaign_log', 'related_id', 'Contacts', 'contacts', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('66eb03fa-360f-1b58-79fe-4fd30798b67f', 'campaignlog_lead', 'CampaignLog', 'campaign_log', 'related_id', 'Leads', 'leads', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6a5f1c25-3807-ef09-a682-4fd307f1e6ca', 'projects_notes', 'Project', 'project', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6ad1b24c-f80a-2293-e6bd-4fd307b3be09', 'projects_tasks', 'Project', 'project', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6b3800b7-8314-5ac4-e25d-4fd3074b30d1', 'projects_meetings', 'Project', 'project', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6ba94009-82b6-d767-5201-4fd307c12cb3', 'projects_calls', 'Project', 'project', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6c1d4784-1083-8b20-f760-4fd307211a3e', 'projects_emails', 'Project', 'project', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6c8ad4aa-d6fd-6375-9428-4fd3076c4e23', 'projects_project_tasks', 'Project', 'project', 'id', 'ProjectTask', 'project_task', 'project_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6ce3199d-3fda-05ec-1aca-4fd30794c8da', 'projects_assigned_user', 'Users', 'users', 'id', 'Project', 'project', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6d4f0ae4-cae4-6900-cf09-4fd30768ba58', 'projects_modified_user', 'Users', 'users', 'id', 'Project', 'project', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6dabde25-58ce-483a-d3d2-4fd3071e8736', 'projects_created_by', 'Users', 'users', 'id', 'Project', 'project', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('754674e5-dc1e-0e5f-744e-4fd307c8c872', 'project_tasks_notes', 'ProjectTask', 'project_task', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('75be52ff-2158-bb8e-1b47-4fd3078a1101', 'project_tasks_tasks', 'ProjectTask', 'project_task', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('76354323-b248-5f93-bed3-4fd307eef778', 'project_tasks_meetings', 'ProjectTask', 'project_task', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('76bb8b7d-2275-072b-f5df-4fd307d49b48', 'project_tasks_calls', 'ProjectTask', 'project_task', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('77418d95-9cd6-b386-0fc7-4fd307403595', 'project_tasks_emails', 'ProjectTask', 'project_task', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('77cf7b8c-d81a-f6a9-9632-4fd307335690', 'project_tasks_assigned_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('783618c1-c306-cb76-b78a-4fd307bbd12d', 'project_tasks_modified_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('788e8311-a2c7-634e-b650-4fd307af3f05', 'project_tasks_created_by', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8238ffee-a6e8-8635-4d1f-4fd307face3c', 'campaigns_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('82877a08-7680-1000-e38f-4fd30750795c', 'campaigns_created_by', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('82d70792-1bd4-c9fc-1c42-4fd307b55dc3', 'campaigns_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('83216f7a-0fb8-b1cc-f67f-4fd307883eac', 'campaign_accounts', 'Campaigns', 'campaigns', 'id', 'Accounts', 'accounts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('837490e0-af57-64e8-b62a-4fd307a56485', 'campaign_contacts', 'Campaigns', 'campaigns', 'id', 'Contacts', 'contacts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('83bfd789-f6f5-0984-76fa-4fd3073c0764', 'campaign_leads', 'Campaigns', 'campaigns', 'id', 'Leads', 'leads', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('840ca752-c4fb-4590-4eec-4fd3072affc8', 'campaign_prospects', 'Campaigns', 'campaigns', 'id', 'Prospects', 'prospects', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('845d0b8b-2b77-e2ea-a8a6-4fd3076e6d47', 'campaign_opportunities', 'Campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('84b71ad6-6215-85db-6c29-4fd3075141c5', 'campaign_email_marketing', 'Campaigns', 'campaigns', 'id', 'EmailMarketing', 'email_marketing', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8514ef41-354b-4bdb-aa88-4fd307eb47c8', 'campaign_emailman', 'Campaigns', 'campaigns', 'id', 'EmailMan', 'emailman', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8565b1b3-1943-6192-2e55-4fd307a9eae7', 'campaign_campaignlog', 'Campaigns', 'campaigns', 'id', 'CampaignLog', 'campaign_log', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('85b34b1b-6c52-7cd4-ea8b-4fd3073e3eef', 'campaign_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8601795b-e918-05c9-c9e7-4fd307bc3d3e', 'campaign_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9283d228-bc13-7d2b-9aa8-4fd307882b0a', 'prospects_modified_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('92c52656-b362-0732-9d79-4fd307747242', 'prospects_created_by', 'Users', 'users', 'id', 'Prospects', 'prospects', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('930539f8-1e24-dc86-5c0e-4fd307f7815b', 'prospects_assigned_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9340c6de-9cb3-7409-2271-4fd307654173', 'prospects_email_addresses', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('937d2d33-f702-7e03-d6a4-4fd30712845b', 'prospects_email_addresses_primary', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('93ba32e7-345b-3ee4-dba7-4fd3075ba0e2', 'prospect_tasks', 'Prospects', 'prospects', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('93f5b422-7009-6eeb-cfa6-4fd307b6f879', 'prospect_notes', 'Prospects', 'prospects', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('9431ee20-39e8-76e2-9fcc-4fd307f26f99', 'prospect_meetings', 'Prospects', 'prospects', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('949a568e-a5cd-5044-e9a1-4fd30774decd', 'prospect_calls', 'Prospects', 'prospects', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('950e51ba-bb12-d2e5-7845-4fd3074a44cd', 'prospect_emails', 'Prospects', 'prospects', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('9597fb90-c61f-a9b2-e87c-4fd3075737ab', 'prospect_campaign_log', 'Prospects', 'prospects', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('98a39c33-79b0-b09c-3389-4fd307bcc74f', 'email_template_email_marketings', 'EmailTemplates', 'email_templates', 'id', 'EmailMarketing', 'email_marketing', 'template_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9aeed1ae-0055-bf8a-9d30-4fd307017343', 'campaign_campaigntrakers', 'Campaigns', 'campaigns', 'id', 'CampaignTrackers', 'campaign_trkrs', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a5536350-5914-3014-1920-4fd30745ac23', 'schedulers_created_by_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('a5bdb271-0f01-9de8-28af-4fd3073225e1', 'schedulers_modified_user_id_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'modified_user_id', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('a6276a13-5b32-30ae-3cf5-4fd307a16046', 'schedulers_jobs_rel', 'Schedulers', 'schedulers', 'id', 'SchedulersJobs', 'schedulers_times', 'scheduler_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b431970f-751d-3d0c-04aa-4fd3073f9a9a', 'contacts_modified_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b4736441-191f-d4f5-a526-4fd307bf7e87', 'contacts_created_by', 'Users', 'users', 'id', 'Contacts', 'contacts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b4b0f68c-c91e-3b4a-7320-4fd307c180e9', 'contacts_assigned_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b4ec6c9c-babc-2f1b-b73e-4fd307c1d1c2', 'contacts_email_addresses', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('b5270b13-d60e-b156-c8da-4fd307cd53a1', 'contacts_email_addresses_primary', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('b5623edb-a90e-144e-45f0-4fd3075f7fd6', 'contact_direct_reports', 'Contacts', 'contacts', 'id', 'Contacts', 'contacts', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b5c376a5-3407-b95a-c1f4-4fd307336528', 'contact_leads', 'Contacts', 'contacts', 'id', 'Leads', 'leads', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b633fc5b-06c9-4fbc-f57e-4fd30780be22', 'contact_notes', 'Contacts', 'contacts', 'id', 'Notes', 'notes', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b6a08008-2622-c2c7-9a00-4fd30791e891', 'contact_tasks', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b70c0dc5-efec-a561-406d-4fd307901d5c', 'contact_tasks_parent', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Contacts', 0, 0),
('b76bbb05-1ab0-10e8-2bf2-4fd30720f17e', 'contact_campaign_log', 'Contacts', 'contacts', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('bfe4a692-51f7-a3cb-9c8f-4fd307c36741', 'accounts_modified_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c027623a-1383-bb02-0310-4fd3070b9ef9', 'accounts_created_by', 'Users', 'users', 'id', 'Accounts', 'accounts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c065d2b4-f286-dfb8-f30b-4fd307769d42', 'accounts_assigned_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c0a3c146-eb5e-ca19-12f2-4fd307ae8d90', 'accounts_email_addresses', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('c0e81a80-3143-922e-ee58-4fd307e89764', 'accounts_email_addresses_primary', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('c12794a0-c26f-2a2f-c86d-4fd307b88c1f', 'member_accounts', 'Accounts', 'accounts', 'id', 'Accounts', 'accounts', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c16210db-5eb1-c9ff-7755-4fd307376dce', 'account_cases', 'Accounts', 'accounts', 'id', 'Cases', 'cases', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c1986bb6-29ad-1264-97e1-4fd307318420', 'account_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c1d12148-9ca3-b32f-7e79-4fd30744ae9b', 'account_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c208026a-c416-9e12-c721-4fd3072f77c8', 'account_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c24150f4-18b3-0d46-83de-4fd307d14e96', 'account_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c279d6e0-d17b-97c0-9164-4fd307592c34', 'account_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c2b44d52-4382-93ec-6c66-4fd3073efbaa', 'account_leads', 'Accounts', 'accounts', 'id', 'Leads', 'leads', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c82f5472-e59d-a19b-72f1-4fd30752291a', 'opportunities_modified_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c86cb99e-01e1-4d70-1b23-4fd30777296d', 'opportunities_created_by', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c8a46e40-1eb7-c1a7-4379-4fd3075b103f', 'opportunities_assigned_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c8ddc683-d1d7-9712-ef52-4fd307d79962', 'opportunity_calls', 'Opportunities', 'opportunities', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('c91650c0-5981-853f-2d7f-4fd3074975b9', 'opportunity_meetings', 'Opportunities', 'opportunities', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('c951c7e6-b15e-16a3-f95b-4fd30792cbf3', 'opportunity_tasks', 'Opportunities', 'opportunities', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('c98b5791-580c-10b0-998b-4fd30765b056', 'opportunity_notes', 'Opportunities', 'opportunities', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('c9d8eeea-9c46-0469-eb11-4fd3074a746f', 'opportunity_emails', 'Opportunities', 'opportunities', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('ca511446-b6fa-7e19-4ca9-4fd307079b15', 'opportunity_leads', 'Opportunities', 'opportunities', 'id', 'Leads', 'leads', 'opportunity_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cac96eda-929f-510f-5a29-4fd3070e994f', 'opportunity_currencies', 'Opportunities', 'opportunities', 'currency_id', 'Currencies', 'currencies', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cb31abfe-bf08-0355-4036-4fd3076bfeea', 'opportunities_campaign', 'campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d19f6b84-e443-b644-bd5c-4fd307385e6e', 'emailtemplates_assigned_user', 'Users', 'users', 'id', 'EmailTemplates', 'email_templates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d8fa72c3-723c-f922-a528-4fd307adabeb', 'notes_assigned_user', 'Users', 'users', 'id', 'Notes', 'notes', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d940ab70-fa05-7e40-2213-4fd307e2e85b', 'notes_modified_user', 'Users', 'users', 'id', 'Notes', 'notes', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d9824734-aa58-3e57-0f62-4fd307bf432e', 'notes_created_by', 'Users', 'users', 'id', 'Notes', 'notes', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('de5af6fe-c2b9-9f36-d87b-4fd307133572', 'calls_modified_user', 'Users', 'users', 'id', 'Calls', 'calls', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('deae6e06-2a19-bbfe-8659-4fd3078cfef3', 'calls_created_by', 'Users', 'users', 'id', 'Calls', 'calls', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('def26d8a-97ec-c3cc-4230-4fd3076729b0', 'calls_assigned_user', 'Users', 'users', 'id', 'Calls', 'calls', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('df3435ca-b698-80d1-8ea3-4fd307569453', 'calls_notes', 'Calls', 'calls', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e775a527-249a-157d-2aa4-4fd30706fd46', 'emails_assigned_user', 'Users', 'users', 'id', 'Emails', 'emails', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e7bd4577-bbee-8e32-1c53-4fd307ebfa1c', 'emails_modified_user', 'Users', 'users', 'id', 'Emails', 'emails', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e7fc1109-7ec2-df1e-fcdd-4fd30740a26d', 'emails_created_by', 'Users', 'users', 'id', 'Emails', 'emails', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e83c8095-71d9-1815-7daf-4fd3079b7092', 'emails_notes_rel', 'Emails', 'emails', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ed162e2f-7e2e-2a03-f777-4fd3076d22f9', 'meetings_modified_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ed576ae1-adb7-53b4-09a6-4fd307ce6c5b', 'meetings_created_by', 'Users', 'users', 'id', 'Meetings', 'meetings', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ed955843-614f-e086-df1a-4fd307c66be4', 'meetings_assigned_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('edd54566-589b-7c4f-3956-4fd307a29cba', 'meetings_notes', 'Meetings', 'meetings', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Meetings', 0, 0),
('f212860f-8f6f-e7a2-8582-4fd30785827f', 'tasks_modified_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f24f3dff-80ef-2083-c68a-4fd3077a5c6f', 'tasks_created_by', 'Users', 'users', 'id', 'Tasks', 'tasks', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f290e49f-276b-e612-f13d-4fd30733f6a3', 'tasks_assigned_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('128aa33e-a7e8-22c5-98dc-4fd307efabb1', 'documents_modified_user', 'Users', 'users', 'id', 'Documents', 'documents', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('12e400f4-a23b-3d74-7342-4fd3071ff4cb', 'documents_created_by', 'Users', 'users', 'id', 'Documents', 'documents', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1337af08-740d-a695-d6dd-4fd30790e939', 'document_revisions', 'Documents', 'documents', 'id', 'Documents', 'document_revisions', 'document_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('15768019-3f3c-3b74-7f81-4fd307dc824a', 'revisions_created_by', 'Users', 'users', 'id', 'DocumentRevisions', 'document_revisions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('22a3b8db-bf04-3d74-be7e-4fd30743a55b', 'inbound_email_created_by', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('22f5c02e-4432-b871-a794-4fd307b44d5b', 'inbound_email_modified_user_id', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'modified_user_id', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('25ebbf60-b5f7-0dff-b1d4-4fd3073990db', 'saved_search_assigned_user', 'Users', 'users', 'id', 'SavedSearch', 'saved_search', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2ae0cb83-996b-5b22-863d-4fd307cdcef9', 'sugarfeed_modified_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2b31d2ce-4017-c3f2-7c94-4fd307e28b2c', 'sugarfeed_created_by', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2b86762a-6747-9d87-315f-4fd307c6ba46', 'sugarfeed_assigned_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('31f4efe9-63ca-d9ea-fe72-4fd307935a0a', 'cosib_queries_modified_user', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('32498b0c-61a1-661f-bd74-4fd307b5e365', 'cosib_queries_created_by', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('32a17c88-af68-cadf-04e0-4fd3079cf332', 'cosib_queries_assigned_user', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('36dbeaa2-930d-4dd4-a807-4fd307f1873f', 'sphr_market_company_modified_user', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3730db32-9999-abe4-c9d6-4fd3074dea8d', 'sphr_market_company_created_by', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('377b40b5-8522-e19c-3da6-4fd30751f7a3', 'sphr_market_company_assigned_user', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3b921e0e-ed62-01d2-8da5-4fd307ed2ac6', 'sphr_market_channel_modified_user', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3bd1d099-7aa9-b4af-852f-4fd307060315', 'sphr_market_channel_created_by', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3c10273f-714b-6277-14b3-4fd307640d75', 'sphr_market_channel_assigned_user', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3f79a136-a4fb-6a8f-ee36-4fd30748cf4a', 'bcm_business_center_modified_user', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3fbba699-d203-bd13-14e3-4fd307a20c88', 'bcm_business_center_created_by', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3ff9817b-bc61-06d4-bf48-4fd307ce21c4', 'bcm_business_center_assigned_user', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('446bb039-c866-361e-1e99-4fd3070d1889', 'sphr_office_meeting_modified_user', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('44aa9e56-d4dd-0a8b-8833-4fd307ebb7b8', 'sphr_office_meeting_created_by', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('44edaacf-f407-8e7a-b207-4fd307b9425e', 'sphr_office_meeting_assigned_user', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('49bcde3d-f08c-76f7-4dbf-4fd3070701c5', 'sphr_inspection_tour_modified_user', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('49fb07c3-256b-b40c-77ef-4fd307e62407', 'sphr_inspection_tour_created_by', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4a35197b-ffe0-ac0f-463a-4fd307a30313', 'sphr_inspection_tour_assigned_user', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('535deb16-42bb-a8c1-9a7a-4fd30721f4e8', 'sphr_client_modified_user', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('53b114ff-cab8-1eff-32d6-4fd307774aa4', 'sphr_client_created_by', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('53fda03c-a6d9-5a7a-e913-4fd30730592d', 'sphr_client_assigned_user', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('544ea4fd-b6f5-368d-d154-4fd307f46a76', 'sphr_client_email_addresses', 'sphr_Client', 'sphr_client', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Client', 0, 0),
('54a1f03e-96d9-2944-d4c6-4fd30713d244', 'sphr_client_email_addresses_primary', 'sphr_Client', 'sphr_client', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('5c6778b2-56fa-e21f-e0d0-4fd30764662f', 'sphr_object_modified_user', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5cb97a2d-e7e0-480f-c30f-4fd307f61552', 'sphr_object_created_by', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5d044e9e-593b-4026-c50a-4fd30727a193', 'sphr_object_assigned_user', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('662f529f-b8ed-75eb-4b35-4fd307c779b5', 'sphr_show_object_modified_user', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('669de969-966a-82a6-bc5c-4fd307bebb05', 'sphr_show_object_created_by', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6708016c-38c5-15b8-b8d5-4fd3070a1e64', 'sphr_show_object_assigned_user', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6ad1feeb-ad0f-9a8a-8912-4fd307222726', 'sphr_reserve_modified_user', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6b266844-1fd4-e327-651f-4fd3072854f0', 'sphr_reserve_created_by', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6b799b0c-04b1-8433-be8a-4fd307484d75', 'sphr_reserve_assigned_user', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7012ea02-3e50-c34b-7c42-4fd307242a95', 'sphr_interest_modified_user', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('705984b9-b560-883f-3c79-4fd30780e0a0', 'sphr_interest_created_by', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('70b428d5-fa70-ffa4-5fc5-4fd307a89237', 'sphr_interest_assigned_user', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('74900d05-ba84-d032-4d37-4fd30796fc4f', 'sphr_deal_modified_user', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('74ccc12e-1fd6-b883-bfa1-4fd30723c709', 'sphr_deal_created_by', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7506560d-0d0c-2d72-ba77-4fd3079faa40', 'sphr_deal_assigned_user', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7aaabf56-4736-394a-ca6a-4fd307069533', 'sphr_developer_modified_user', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7aefe018-36fc-bccc-7583-4fd3072e5c86', 'sphr_developer_created_by', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7b2d6385-7f43-8b83-1d84-4fd307eb628d', 'sphr_developer_assigned_user', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7b6fcb97-9c49-5c85-f81d-4fd307bf0918', 'sphr_developer_email_addresses', 'sphr_Developer', 'sphr_developer', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Developer', 0, 0),
('7bcd2171-b059-dbb7-6a59-4fd3073c6cc4', 'sphr_developer_email_addresses_primary', 'sphr_Developer', 'sphr_developer', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('830e9ffc-67f1-f9bd-c618-4fd307a226a6', 'sphr_owner_modified_user', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('83654c7d-38ee-d7be-c3b3-4fd307183420', 'sphr_owner_created_by', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('83be8fde-ed71-9389-4864-4fd307a89d4c', 'sphr_owner_assigned_user', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('89b7d45d-019f-a9f1-27fd-4fd307671571', 'sphr_intermediary_modified_user', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('89f3c82f-befc-7ecf-82cd-4fd307c70e24', 'sphr_intermediary_created_by', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8a2e0d4e-2be9-1667-5f72-4fd3071cf496', 'sphr_intermediary_assigned_user', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8a6845d8-48b2-0190-74d8-4fd30778a53e', 'sphr_intermediary_email_addresses', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Intermediary', 0, 0),
('8aa462dd-8506-d98b-4d62-4fd307e7c561', 'sphr_intermediary_email_addresses_primary', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('8e53d6a0-d793-1e1f-7138-4fd3077b9ea9', 'zucker_reportcontainer_containers', 'ZuckerReportContainer', 'zucker_reportcontainer', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8e92aba7-c339-ef78-027b-4fd307adcac1', 'zucker_reportcontainer_reports', 'ZuckerReportContainer', 'zucker_reportcontainer', 'id', 'ZuckerReports', 'zucker_report', 'container_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8ed651b4-c6ac-2e1f-4e4b-4fd30746b294', 'zucker_reportcontainer_assigned_user', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8f3a8a4d-8b65-d98c-113c-4fd30745d803', 'zucker_reportcontainer_modified_user', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8fac921c-ef32-fdba-e8ca-4fd3074c916a', 'zucker_reportcontainer_created_by', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9c3156bb-40d3-290d-69da-4fd307c74071', 'zucker_reporttemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9c8f009e-ffbd-3ed8-b417-4fd307bdbfcc', 'zucker_reporttemplate_modified_user', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9ce177d1-2228-7d8a-599d-4fd307597686', 'zucker_reporttemplate_created_by', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a0886ae9-e21e-3d53-22ea-4fd307f478d2', 'zucker_wordtemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a0dc364d-71c5-c147-eb98-4fd3075a663a', 'zucker_wordtemplate_modified_user', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a12f56fc-3809-2957-4f31-4fd307d3919a', 'zucker_wordtemplate_created_by', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a30932cd-a615-1f67-5ea0-4fd30722d6b5', 'zucker_querytemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a35e0966-3325-825c-8444-4fd307345022', 'zucker_querytemplate_modified_user', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a3b06b54-c370-ca2a-cc8c-4fd307860349', 'zucker_querytemplate_created_by', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a5976a9b-b813-7f78-6246-4fd307f94372', 'zucker_listingtemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a5e23604-4ff1-c365-e35e-4fd3073e907c', 'zucker_listingtemplate_modified_user', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a6294410-656b-56ee-dc26-4fd307490827', 'zucker_listingtemplate_created_by', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('aac243ee-5af3-41be-3391-4fd30749a4a3', 'zucker_runnablereport_assigned_user', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ab22881a-14c7-d143-2814-4fd307ee2e59', 'zucker_runnablereport_modified_user', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ab7a3a3a-07e6-1bc5-fe10-4fd307b69983', 'zucker_runnablereport_created_by', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eefe5111-7c63-6a62-e3f0-4fd307ac62e7', 'accounts_bugs', 'Accounts', 'accounts', 'id', 'Bugs', 'bugs', 'id', 'accounts_bugs', 'account_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('ef5983c6-cdef-37ab-9e9d-4fd30702625e', 'accounts_contacts', 'Accounts', 'accounts', 'id', 'Contacts', 'contacts', 'id', 'accounts_contacts', 'account_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('efb25461-4e53-93aa-41f6-4fd3070e04eb', 'accounts_opportunities', 'Accounts', 'accounts', 'id', 'Opportunities', 'opportunities', 'id', 'accounts_opportunities', 'account_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('f00995f4-ccb2-8cdb-4a1d-4fd3074caefd', 'calls_contacts', 'Calls', 'calls', 'id', 'Contacts', 'contacts', 'id', 'calls_contacts', 'call_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('f0592b13-8f59-419b-096c-4fd307e09fed', 'calls_users', 'Calls', 'calls', 'id', 'Users', 'users', 'id', 'calls_users', 'call_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('f0a652c9-2e5e-8ec1-3290-4fd307237e86', 'calls_leads', 'Calls', 'calls', 'id', 'Leads', 'leads', 'id', 'calls_leads', 'call_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('f0fc3e05-fc49-9a3c-bdee-4fd307799790', 'cases_bugs', 'Cases', 'cases', 'id', 'Bugs', 'bugs', 'id', 'cases_bugs', 'case_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('f17da001-90d3-4925-8434-4fd307ba52ca', 'contacts_bugs', 'Contacts', 'contacts', 'id', 'Bugs', 'bugs', 'id', 'contacts_bugs', 'contact_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('f2186ead-8532-c3b5-908c-4fd307fade8b', 'contacts_cases', 'Contacts', 'contacts', 'id', 'Cases', 'cases', 'id', 'contacts_cases', 'contact_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('f2a522e5-7b9c-4437-eb6d-4fd307bde837', 'contacts_users', 'Contacts', 'contacts', 'id', 'Users', 'users', 'id', 'contacts_users', 'contact_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('f3453c73-c668-5f3c-3d5c-4fd307c76391', 'emails_accounts_rel', 'Emails', 'emails', 'id', 'Accounts', 'accounts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('f3c15633-0418-e42a-b228-4fd307277735', 'emails_bugs_rel', 'Emails', 'emails', 'id', 'Bugs', 'bugs', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Bugs', 0, 0),
('8d000c05-9359-6814-83a4-4fd3071b2d7b', 'emails_cases_rel', 'Emails', 'emails', 'id', 'Cases', 'cases', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Cases', 0, 0),
('69d00257-b59b-3d92-b364-4fd3071865dd', 'emails_contacts_rel', 'Emails', 'emails', 'id', 'Contacts', 'contacts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('cbb0034b-3e27-c4f0-1457-4fd30788e929', 'emails_leads_rel', 'Emails', 'emails', 'id', 'Leads', 'leads', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('13120b5f-597f-f425-e868-4fd307ebbcdb', 'emails_opportunities_rel', 'Emails', 'emails', 'id', 'Opportunities', 'opportunities', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Opportunities', 0, 0),
('19a00f55-e2a8-de6f-e195-4fd30702cdd3', 'emails_tasks_rel', 'Emails', 'emails', 'id', 'Tasks', 'tasks', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Tasks', 0, 0),
('200d006f-8fb8-7b73-d9ea-4fd3071a5233', 'emails_users_rel', 'Emails', 'emails', 'id', 'Users', 'users', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('270207b1-7388-98d2-bc54-4fd307f18d0e', 'emails_project_task_rel', 'Emails', 'emails', 'id', 'ProjectTask', 'project_task', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'ProjectTask', 0, 0),
('2e3f004d-d651-c5eb-b683-4fd3079bfa92', 'emails_projects_rel', 'Emails', 'emails', 'id', 'Project', 'project', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Project', 0, 0),
('34f30efe-4aae-1316-d63c-4fd307a528d4', 'emails_prospects_rel', 'Emails', 'emails', 'id', 'Prospects', 'prospects', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('3b5d023f-81f7-aa7b-2248-4fd30745c624', 'meetings_contacts', 'Meetings', 'meetings', 'id', 'Contacts', 'contacts', 'id', 'meetings_contacts', 'meeting_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('43d80917-4f4c-6c87-9755-4fd307bb91fc', 'meetings_users', 'Meetings', 'meetings', 'id', 'Users', 'users', 'id', 'meetings_users', 'meeting_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('4c910157-b49f-6f8e-0047-4fd307c799e8', 'meetings_leads', 'Meetings', 'meetings', 'id', 'Leads', 'leads', 'id', 'meetings_leads', 'meeting_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('55a50d95-13f9-b5fb-0f1e-4fd307ccbffb', 'opportunities_contacts', 'Opportunities', 'opportunities', 'id', 'Contacts', 'contacts', 'id', 'opportunities_contacts', 'opportunity_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('5f250858-bf45-f29e-7b1a-4fd307de5d59', 'prospect_list_campaigns', 'ProspectLists', 'prospect_lists', 'id', 'Campaigns', 'campaigns', 'id', 'prospect_list_campaigns', 'prospect_list_id', 'campaign_id', 'many-to-many', NULL, NULL, 0, 0),
('682a027b-80a5-54f4-054e-4fd307f7b137', 'prospect_list_contacts', 'ProspectLists', 'prospect_lists', 'id', 'Contacts', 'contacts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Contacts', 0, 0),
('7012041e-7abd-e548-92a2-4fd3075a3c09', 'prospect_list_prospects', 'ProspectLists', 'prospect_lists', 'id', 'Prospects', 'prospects', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Prospects', 0, 0),
('78580a01-c238-0faf-9d8d-4fd307b97622', 'prospect_list_leads', 'ProspectLists', 'prospect_lists', 'id', 'Leads', 'leads', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Leads', 0, 0),
('7f190527-ec0f-c0af-10c2-4fd3074a0b59', 'prospect_list_users', 'ProspectLists', 'prospect_lists', 'id', 'Users', 'users', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Users', 0, 0),
('880209c6-ce05-655d-27b0-4fd307c4e541', 'prospect_list_accounts', 'ProspectLists', 'prospect_lists', 'id', 'Accounts', 'accounts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Accounts', 0, 0),
('93020efc-9753-532e-853d-4fd3076f6929', 'roles_users', 'Roles', 'roles', 'id', 'Users', 'users', 'id', 'roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('9d6f0da3-8e6d-faf4-7b66-4fd3071b24e5', 'projects_bugs', 'Project', 'project', 'id', 'Bugs', 'bugs', 'id', 'projects_bugs', 'project_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('a6ed0f6f-9d15-2073-1560-4fd307f3fbec', 'projects_cases', 'Project', 'project', 'id', 'Cases', 'cases', 'id', 'projects_cases', 'project_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('b1e3090d-32d1-a51b-c5c1-4fd307506785', 'projects_accounts', 'Project', 'project', 'id', 'Accounts', 'accounts', 'id', 'projects_accounts', 'project_id', 'account_id', 'many-to-many', NULL, NULL, 0, 0);
REPLACE INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('bb6b0c81-0583-3a6c-7ae1-4fd3077ce3f3', 'projects_contacts', 'Project', 'project', 'id', 'Contacts', 'contacts', 'id', 'projects_contacts', 'project_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('c5210526-2300-58e8-9bb6-4fd307eee4b6', 'projects_opportunities', 'Project', 'project', 'id', 'Opportunities', 'opportunities', 'id', 'projects_opportunities', 'project_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('cf110c0c-2663-b7a3-486c-4fd307fc298a', 'acl_roles_actions', 'ACLRoles', 'acl_roles', 'id', 'ACLActions', 'acl_actions', 'id', 'acl_roles_actions', 'role_id', 'action_id', 'many-to-many', NULL, NULL, 0, 0),
('d9160302-0f0e-cfbd-de11-4fd307aab18f', 'acl_roles_users', 'ACLRoles', 'acl_roles', 'id', 'Users', 'users', 'id', 'acl_roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('e4350e73-b3d1-9a3c-d5fd-4fd30769b496', 'email_marketing_prospect_lists', 'EmailMarketing', 'email_marketing', 'id', 'ProspectLists', 'prospect_lists', 'id', 'email_marketing_prospect_lists', 'email_marketing_id', 'prospect_list_id', 'many-to-many', NULL, NULL, 0, 0),
('edff0aea-7162-db39-bf1a-4fd307f727ad', 'leads_documents', 'Leads', 'leads', 'id', 'Documents', 'documents', 'id', 'linked_documents', 'parent_id', 'document_id', 'many-to-many', 'parent_type', 'Leads', 0, 0),
('f80801b5-1258-cc43-7b4c-4fd307e93b36', 'sphr_market_channel_sphr_client_1', 'sphr_market_channel', 'sphr_market_channel', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_marketphr_client_1_c', 'sphr_marke5c2achannel_ida', 'sphr_marke29a6_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('1021b42d-6761-0a6f-939f-4fd3079ca16a', 'sphr_client_cosib_queries', 'sphr_Client', 'sphr_client', 'id', 'cosib_queries', 'cosib_queries', 'id', 'sphr_clientosib_queries_c', 'sphr_clien735b_client_ida', 'sphr_clien6a3fqueries_idb', 'many-to-many', NULL, NULL, 0, 0),
('10c66f6a-cd4e-df40-c67f-4fd30714f1f8', 'sphr_deal_project', 'sphr_Deal', 'sphr_deal', 'id', 'Project', 'project', 'id', 'sphr_deal_project_c', 'sphr_deal_67fehr_deal_ida', 'sphr_deal_2035project_idb', 'many-to-many', NULL, NULL, 0, 0),
('115fd147-71a8-dfd9-1c24-4fd307a6870b', 'sphr_client_sphr_interest', 'sphr_Client', 'sphr_client', 'id', 'sphr_Interest', 'sphr_interest', 'id', 'sphr_clientphr_interest_c', 'sphr_clienc30d_client_ida', 'sphr_clien17ddnterest_idb', 'many-to-many', NULL, NULL, 0, 0),
('11f7cbd1-85ec-dde2-bf2e-4fd3076d0a39', 'sphr_owner_sphr_object', 'sphr_Owner', 'sphr_owner', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_owner_sphr_object_c', 'sphr_owner9f16r_owner_ida', 'sphr_owneredcf_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('12905695-78ee-c815-6c90-4fd307d210f0', 'sphr_client_activities_calls', 'sphr_Client', 'sphr_client', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('132d5c5d-ab30-ede4-809c-4fd30765b08e', 'sphr_client_sphr_inspection_tour', 'sphr_Client', 'sphr_client', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'id', 'sphr_clientpection_tour_c', 'sphr_clien6152_client_ida', 'sphr_clien26ebon_tour_idb', 'many-to-many', NULL, NULL, 0, 0),
('13c11aca-8ce9-1c70-6c96-4fd3074371b1', 'sphr_client_activities_emails', 'sphr_Client', 'sphr_client', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('145b772e-739f-f2f1-b4b0-4fd307350aaf', 'accounts_cosib_queries', 'Accounts', 'accounts', 'id', 'cosib_queries', 'cosib_queries', 'id', 'accounts_cosib_queries_c', 'accounts_c3c3bccounts_ida', 'accounts_c5a9fqueries_idb', 'many-to-many', NULL, NULL, 0, 0),
('14f439ab-650e-170b-fa2a-4fd307fd9974', 'sphr_deal_activities_tasks', 'sphr_Deal', 'sphr_deal', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('158a061b-c726-0373-3c52-4fd3074768ab', 'sphr_object_sphr_interest', 'sphr_Object', 'sphr_object', 'id', 'sphr_Interest', 'sphr_interest', 'id', 'sphr_objectphr_interest_c', 'sphr_objec2883_object_ida', 'sphr_objec057enterest_idb', 'many-to-many', NULL, NULL, 0, 0),
('161b4862-00c9-a3b4-9c1b-4fd307a52c86', 'sphr_object_sphr_reserve', 'sphr_Object', 'sphr_object', 'id', 'sphr_Reserve', 'sphr_reserve', 'id', 'sphr_objectsphr_reserve_c', 'sphr_objec6f3b_object_ida', 'sphr_objec1157reserve_idb', 'many-to-many', NULL, NULL, 0, 0),
('16d4c500-e1a0-a06c-ae34-4fd3078d4546', 'sphr_object_opportunities', 'sphr_Object', 'sphr_object', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_objectpportunities_c', 'sphr_objec388d_object_ida', 'sphr_objecbc4aunities_idb', 'many-to-many', NULL, NULL, 0, 0),
('17626b03-2a24-ff3a-2f46-4fd307a89283', 'sphr_market_company_sphr_client', 'sphr_market_company', 'sphr_market_company', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_market_sphr_client_c', 'sphr_marke85efcompany_ida', 'sphr_marke6013_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('1808559d-2f58-956a-156c-4fd307b6dd14', 'sphr_developer_contacts', 'sphr_Developer', 'sphr_developer', 'id', 'Contacts', 'contacts', 'id', 'sphr_developer_contacts_c', 'sphr_devel5fa8veloper_ida', 'sphr_devel832fontacts_idb', 'many-to-many', NULL, NULL, 0, 0),
('18a8b8ba-0c16-c87c-fb46-4fd307ef0bc0', 'sphr_client_opportunities', 'sphr_Client', 'sphr_client', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_clientpportunities_c', 'sphr_clien0590_client_ida', 'sphr_clien3cd1unities_idb', 'many-to-many', NULL, NULL, 0, 0),
('194611aa-7a1a-682f-6515-4fd307a2970c', 'sphr_deal_sphr_office_meeting', 'sphr_Deal', 'sphr_deal', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'id', 'sphr_deal_sfice_meeting_c', 'sphr_deal_3e0ahr_deal_ida', 'sphr_deal_41d9meeting_idb', 'many-to-many', NULL, NULL, 0, 0),
('19e6cf43-ccd7-c0a0-a3b8-4fd3072c2c69', 'sphr_client_activities_meetings', 'sphr_Client', 'sphr_client', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('1a862751-df09-84ad-8157-4fd3073bf2cc', 'sphr_client_sphr_reserve', 'sphr_Client', 'sphr_client', 'id', 'sphr_Reserve', 'sphr_reserve', 'id', 'sphr_clientsphr_reserve_c', 'sphr_clienc0d2_client_ida', 'sphr_clien03b8reserve_idb', 'many-to-many', NULL, NULL, 0, 0),
('1b1f60e6-7e53-4a01-a67c-4fd30722a7bd', 'cosib_queries_sphr_object', 'cosib_queries', 'cosib_queries', 'id', 'sphr_Object', 'sphr_object', 'id', 'cosib_queri_sphr_object_c', 'cosib_quer91b5queries_ida', 'cosib_quer4238_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('1bb9a3cf-29a5-e98a-513a-4fd307de27b1', 'sphr_intermediary_sphr_client', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_interm_sphr_client_c', 'sphr_intera5e4mediary_ida', 'sphr_inter8ec2_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('1c5005da-e29c-d532-b2af-4fd3076536ac', 'opportunities_activities_emails', 'Opportunities', 'opportunities', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('1cf38bab-6253-bd7b-689d-4fd307a4831c', 'sphr_developer_sphr_object', 'sphr_Developer', 'sphr_developer', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_develo_sphr_object_c', 'sphr_devel6664veloper_ida', 'sphr_devel402f_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('1d8a7cea-c99d-8c7e-8c14-4fd307fcdfa7', 'sphr_market_company_sphr_market_channel', 'sphr_market_company', 'sphr_market_company', 'id', 'sphr_market_channel', 'sphr_market_channel', 'id', 'sphr_marketrket_channel_c', 'sphr_markef954company_ida', 'sphr_marke4757channel_idb', 'many-to-many', NULL, NULL, 0, 0),
('1e2944c6-cbbe-d6c9-7611-4fd307f2d6bd', 'sphr_deal_sphr_show_object', 'sphr_Deal', 'sphr_deal', 'id', 'sphr_Show_object', 'sphr_show_object', 'id', 'sphr_deal_s_show_object_c', 'sphr_deal_3c7dhr_deal_ida', 'sphr_deal_45e2_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('1ec3a158-2014-8126-c2b4-4fd307c45074', 'sphr_object_notes', 'sphr_Object', 'sphr_object', 'id', 'Notes', 'notes', 'id', 'sphr_object_notes_c', 'sphr_objec205c_object_ida', 'sphr_objec37a9esnotes_idb', 'many-to-many', NULL, NULL, 0, 0),
('1f6192ea-56ea-6ec2-ffc0-4fd307722bea', 'sphr_intermediary_sphr_object', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_interm_sphr_object_c', 'sphr_intera323mediary_ida', 'sphr_inter665b_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('1ffdc46c-7017-5dec-a786-4fd3075bf0be', 'sphr_deal_activities_emails', 'sphr_Deal', 'sphr_deal', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('209aef87-f190-1b1e-18e3-4fd307d339f4', 'opportunities_activities_meetings', 'Opportunities', 'opportunities', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('21e88eaf-8c7f-801c-f063-4fd307069b40', 'sphr_client_activities_notes', 'sphr_Client', 'sphr_client', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('228c74e7-29ec-4c36-a6db-4fd307327949', 'sphr_intermediary_opportunities', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_intermpportunities_c', 'sphr_interf513mediary_ida', 'sphr_inter5307unities_idb', 'many-to-many', NULL, NULL, 0, 0),
('232c897b-f117-e083-494a-4fd3076e39bc', 'sphr_client_activities_tasks', 'sphr_Client', 'sphr_client', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('23cd8471-61df-04a5-9fd2-4fd307f8c947', 'sphr_deal_activities_notes', 'sphr_Deal', 'sphr_deal', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('2463f642-516b-1386-4722-4fd30734d743', 'cosib_queries_documents', 'cosib_queries', 'cosib_queries', 'id', 'Documents', 'documents', 'id', 'cosib_queries_documents_c', 'cosib_quer891cqueries_ida', 'cosib_quer51ebcuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('24f2dce7-a3e3-222b-cc89-4fd307b7188d', 'opportunities_activities_calls', 'Opportunities', 'opportunities', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('257bd9b3-4f38-5a83-c8fe-4fd307442999', 'sphr_object_documents', 'sphr_Object', 'sphr_object', 'id', 'Documents', 'documents', 'id', 'sphr_object_documents_c', 'sphr_objec1b6c_object_ida', 'sphr_objec92efcuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('2604ee52-169b-d135-e360-4fd3073ca30b', 'sphr_deal_activities_calls', 'sphr_Deal', 'sphr_deal', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('26802b2c-61e5-8c93-a64f-4fd30715e4f0', 'sphr_client_documents', 'sphr_Client', 'sphr_client', 'id', 'Documents', 'documents', 'id', 'sphr_client_documents_c', 'sphr_clien29a0_client_ida', 'sphr_clien34c3cuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('26e243cf-304b-024f-2752-4fd3078dd32f', 'sphr_object_sphr_show_object', 'sphr_Object', 'sphr_object', 'id', 'sphr_Show_object', 'sphr_show_object', 'id', 'sphr_object_show_object_c', 'sphr_objecdf1f_object_ida', 'sphr_objec4a69_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('2740ee85-a17d-87c1-8cd4-4fd3076a74f7', 'sphr_deal_activities_meetings', 'sphr_Deal', 'sphr_deal', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('27c5944a-322b-96c5-8619-4fd307cd954a', 'sphr_client_sphr_object', 'sphr_Client', 'sphr_client', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_client_sphr_object_c', 'sphr_clien88c3_client_ida', 'sphr_clien826b_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('285515a9-438f-d851-c23d-4fd3072f3273', 'opportunities_activities_notes', 'Opportunities', 'opportunities', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('28e186c5-9778-7063-8675-4fd307618f55', 'opportunities_activities_tasks', 'Opportunities', 'opportunities', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sphr_clientosib_queries_c`
--

CREATE TABLE IF NOT EXISTS `sphr_clientosib_queries_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `sphr_clien735b_client_ida` varchar(36) DEFAULT NULL,
  `sphr_clien6a3fqueries_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sphr_client_cosib_queries_ida1` (`sphr_clien735b_client_ida`),
  KEY `sphr_client_cosib_queries_alt` (`sphr_clien6a3fqueries_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
