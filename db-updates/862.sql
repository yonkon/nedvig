-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2012 at 02:47 PM
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
-- Table structure for table `cosib_messages`
--

CREATE TABLE IF NOT EXISTS `cosib_messages` (
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
-- Dumping data for table `cosib_messages`
--

REPLACE INTO `cosib_messages` (`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `assigned_user_id`) VALUES
('df905d6d-8fd2-6668-344e-4fe047d9b0b3', 'тест', '2012-06-19 09:32:03', '2012-06-19 10:10:49', '1', '1', 'тест теста', 1, '1'),
('ef102e72-b6ff-90ec-054c-4fdae3faa35d', 'еуые', '2012-06-15 07:27:02', '2012-06-15 07:27:02', '1', '1', 'еуые ьуыыфпу', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_messages_answers`
--

CREATE TABLE IF NOT EXISTS `cosib_messages_answers` (
  `id` char(36) NOT NULL,
  `id_m` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_m` (`id_m`),
  KEY `date_entered` (`date_entered`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_messages_answers`
--

REPLACE INTO `cosib_messages_answers` (`id`, `id_m`, `date_entered`, `description`, `deleted`, `assigned_user_id`) VALUES
('2b6f4d02-c994-57d4-0457-4fe034cd3048', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:10:57', 'sdf', 0, '1'),
('2e72887e-7083-7afc-2053-4fe0411f7d9c', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 13:08:28', 'врпвапвп', 0, '1'),
('30d97098-ab35-9051-4318-4fe03460bf65', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:11:01', 'sdfdfsd', 0, '1'),
('35a8d2b7-d5e5-eadb-b0fc-4fe034edf829', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:11:08', 'sdfdfsddfds', 0, '1'),
('5e47ab62-9572-dc0c-86b1-4fe03a4533c2', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:40:31', 'test', 0, '1'),
('92ea7a31-cccb-ee05-254e-4fe03a8998c5', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:38:04', 'Боги, боги мои! Как грустна вечерняя земля! Как таинственны туманы над болотами. Кто блуждал в этих туманах, кто много страдал перед смертью, кто летел над этой землёй, неся на себе непосильный груз, тот это знает. Это знает уставший. И он без сожаления покидает туманы земли, её болотца и реки, он отдаётся с лёгким сердцем в руки смерти, зная, что только она одна успокоит его...', 0, '1'),
('97a6dba9-c5e3-a5b9-d138-4fe03b91a9da', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 12:44:23', 'hjgjhgk', 0, '1'),
('97c120f5-c2ab-a58f-21e1-4fe047d04a28', 'df905d6d-8fd2-6668-344e-4fe047d9b0b3', '2012-06-19 13:34:32', 'test', 1, '1'),
('9b8683a7-2d95-ab06-f7bc-4fe04514a49d', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 13:27:09', 'рлордрдт рлордлр рдлл', 0, '1'),
('d1e73c1b-48ec-a36d-b651-4fe021db8538', 'ef102e72-b6ff-90ec-054c-4fdae3faa35d', '2012-06-19 10:50:01', 'mnbnbmn', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cosib_messages_audit`
--

CREATE TABLE IF NOT EXISTS `cosib_messages_audit` (
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
  KEY `idx_cosib_messages_primary` (`id`),
  KEY `idx_cosib_messages_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('Accountsidentification_c', 'identification_c', 'LBL_IDENTIFICATION', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Accounts', 'text', NULL, 1, NULL, '2012-06-14 13:26:31', 0, 0, 0, 0, 1, 'true', NULL, '10', '20', NULL),
('Accountscountry_c', 'country_c', 'LBL_COUNTRY', NULL, NULL, 'Accounts', 'enum', 100, 0, 'russia', '2012-05-31 12:27:18', 0, 0, 0, 0, 1, 'true', 'countries_list', NULL, NULL, NULL),
('Accountsregion_c', 'region_c', 'LBL_REGION', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-05-31 12:29:35', 0, 0, 0, 0, 1, 'true', 'counteragents_region_list', NULL, NULL, NULL),
('Accountscity_c', 'city_c', 'LBL_CITY', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-05-31 12:30:41', 0, 0, 0, 0, 1, 'true', 'counteragents_cities_list', NULL, NULL, NULL),
('Accountscategory_c', 'category_c', 'LBL_CATEGORY', NULL, NULL, 'Accounts', 'enum', 100, 0, 'provider', '2012-05-31 13:03:27', 0, 1, 0, 0, 1, 'true', 'counteragents_category_list', NULL, NULL, NULL),
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
('ec665c77-b256-92a1-fffc-4fe052903c4d', 'leads_modified_user', 'Users', 'users', 'id', 'Leads', 'leads', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eca5cc9a-8bc7-0c53-7520-4fe05282072b', 'leads_created_by', 'Users', 'users', 'id', 'Leads', 'leads', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ece3f59c-8920-5ab6-f27b-4fe052396a10', 'leads_assigned_user', 'Users', 'users', 'id', 'Leads', 'leads', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ed1ec94d-a151-4216-d3c9-4fe052619959', 'leads_email_addresses', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('ed58d968-2096-0a6a-b15c-4fe052c87420', 'leads_email_addresses_primary', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('ed9ada95-31f4-cbc9-c46e-4fe0529d4557', 'lead_direct_reports', 'Leads', 'leads', 'id', 'Leads', 'leads', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eddbf0c7-ad1c-0ccc-986f-4fe05277d31f', 'lead_tasks', 'Leads', 'leads', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('ee14bffa-cb5b-77f5-4fe8-4fe052b10796', 'lead_notes', 'Leads', 'leads', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('ee4ca43e-4385-dee3-725a-4fe052f04381', 'lead_meetings', 'Leads', 'leads', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('ee89873b-3002-9f85-0ce7-4fe052c650c6', 'lead_calls', 'Leads', 'leads', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('eecaaf92-0f22-bce1-a7bf-4fe052759dbe', 'lead_emails', 'Leads', 'leads', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('ef072043-78f0-1b93-9efc-4fe052c3ad90', 'lead_campaign_log', 'Leads', 'leads', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f337b565-dba4-0a03-a029-4fe052563ec9', 'cases_modified_user', 'Users', 'users', 'id', 'Cases', 'cases', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f37119bf-4e09-99d7-ff82-4fe0529d1658', 'cases_created_by', 'Users', 'users', 'id', 'Cases', 'cases', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f3a8c10b-e9e4-1688-b4f4-4fe0521673a8', 'cases_assigned_user', 'Users', 'users', 'id', 'Cases', 'cases', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f3e541cc-6252-85d3-f4b7-4fe052364241', 'case_calls', 'Cases', 'cases', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('f4235d30-1c9a-dd81-eb64-4fe052d37146', 'case_tasks', 'Cases', 'cases', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('39400761-afbe-abe7-0102-4fe052723782', 'case_notes', 'Cases', 'cases', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('72800ec9-c496-5cc6-356c-4fe05249729b', 'case_meetings', 'Cases', 'cases', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('ad0009b9-fc1f-eb3b-080d-4fe05273a2cb', 'case_emails', 'Cases', 'cases', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('52ce0c2f-43ae-fae0-d151-4fe05277cf83', 'bugs_modified_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('565a0be7-5357-6bae-c75f-4fe052c93a64', 'bugs_created_by', 'Users', 'users', 'id', 'Bugs', 'bugs', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('59de02da-cc62-1b06-3cfc-4fe0521e3dc5', 'bugs_assigned_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5d5b0944-3fe7-aa75-9fb1-4fe05216cf07', 'bug_tasks', 'Bugs', 'bugs', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('60f90c6a-7ffa-fe6e-d3cd-4fe0529139b1', 'bug_meetings', 'Bugs', 'bugs', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('649605cb-8ab5-39cb-61c7-4fe052fc4283', 'bug_calls', 'Bugs', 'bugs', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('682609ca-a5b3-6800-abab-4fe05217137a', 'bug_emails', 'Bugs', 'bugs', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('6bad0b1a-f8db-a393-46c5-4fe052398947', 'bug_notes', 'Bugs', 'bugs', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('6f5b01fc-5de7-57bd-eee7-4fe0527ca75f', 'bugs_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'found_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('730a0ca1-ac19-a805-8096-4fe052df3973', 'bugs_fixed_in_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'fixed_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('819a00de-46b6-c954-1d4c-4fe0526310e8', 'user_direct_reports', 'Users', 'users', 'id', 'Users', 'users', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('854e0226-5434-9753-e880-4fe052faca52', 'users_email_addresses', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('8946031c-6684-4601-f058-4fe052809766', 'users_email_addresses_primary', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('a84e0e4c-4e87-ad22-16f1-4fe0529b8ca1', 'campaignlog_contact', 'CampaignLog', 'campaign_log', 'related_id', 'Contacts', 'contacts', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('abf6025e-c4f3-b720-81c0-4fe0521e680d', 'campaignlog_lead', 'CampaignLog', 'campaign_log', 'related_id', 'Leads', 'leads', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e1fa0f81-471a-d992-e2df-4fe05267b9d4', 'projects_notes', 'Project', 'project', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('e5e50e0f-f217-b134-7edb-4fe052004042', 'projects_tasks', 'Project', 'project', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('e9ee0f2c-2742-519d-e068-4fe052110af1', 'projects_meetings', 'Project', 'project', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('ee0b0419-3d0e-456c-6b40-4fe0527936f7', 'projects_calls', 'Project', 'project', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('f1f60b06-2008-86e1-fbbd-4fe052a33cd4', 'projects_emails', 'Project', 'project', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('f5d90b65-ed8c-a505-d382-4fe052eaf463', 'projects_project_tasks', 'Project', 'project', 'id', 'ProjectTask', 'project_task', 'project_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f983024b-867b-db69-70e0-4fe052191039', 'projects_assigned_user', 'Users', 'users', 'id', 'Project', 'project', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('fd2c0578-861c-ce09-7794-4fe0528283ff', 'projects_modified_user', 'Users', 'users', 'id', 'Project', 'project', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('100c9750-be61-fab4-73a4-4fe052e29814', 'projects_created_by', 'Users', 'users', 'id', 'Project', 'project', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1419cf37-39a4-b701-38fe-4fe052663cb8', 'project_tasks_notes', 'ProjectTask', 'project_task', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('146c47a5-2303-7261-9866-4fe052cd2627', 'project_tasks_tasks', 'ProjectTask', 'project_task', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('14bd8174-24e6-2d06-c626-4fe05255c408', 'project_tasks_meetings', 'ProjectTask', 'project_task', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('151144cc-af0c-809e-d2b2-4fe05213e456', 'project_tasks_calls', 'ProjectTask', 'project_task', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('15628bba-d047-d54a-9e98-4fe052d0fdcd', 'project_tasks_emails', 'ProjectTask', 'project_task', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('15c89916-576b-fd2c-74a1-4fe052419d63', 'project_tasks_assigned_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('162a52b0-e4d2-195b-cf31-4fe052c532a8', 'project_tasks_modified_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1692ad41-b155-3b5b-7729-4fe052d1ff39', 'project_tasks_created_by', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1e984420-3e86-8f5e-1fc3-4fe0523f1c4f', 'campaigns_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ede2171-6752-9f99-9088-4fe05296e637', 'campaigns_created_by', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1f1fb6f9-a063-a46e-bec3-4fe052c749ea', 'campaigns_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1f588521-0c08-3ac0-dd1e-4fe05230d0d2', 'campaign_accounts', 'Campaigns', 'campaigns', 'id', 'Accounts', 'accounts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1f95eb6a-be95-1ea2-29fd-4fe052c5d1ae', 'campaign_contacts', 'Campaigns', 'campaigns', 'id', 'Contacts', 'contacts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1fcfb363-d512-698c-1c0a-4fe0526b4d75', 'campaign_leads', 'Campaigns', 'campaigns', 'id', 'Leads', 'leads', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('200ddab4-b351-198c-0780-4fe0528e7e9c', 'campaign_prospects', 'Campaigns', 'campaigns', 'id', 'Prospects', 'prospects', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2045b842-806c-fa72-b757-4fe0521486c7', 'campaign_opportunities', 'Campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('207f4914-3b25-2049-613e-4fe0522b493d', 'campaign_email_marketing', 'Campaigns', 'campaigns', 'id', 'EmailMarketing', 'email_marketing', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('20bcdb6b-df34-e01c-c3f1-4fe052c8fb42', 'campaign_emailman', 'Campaigns', 'campaigns', 'id', 'EmailMan', 'emailman', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('20f56256-fd48-6ff9-efba-4fe05266696b', 'campaign_campaignlog', 'Campaigns', 'campaigns', 'id', 'CampaignLog', 'campaign_log', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('212dc10e-3fba-b0c0-ce08-4fe052bc728d', 'campaign_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2169ab98-e947-791b-0806-4fe0523dbe60', 'campaign_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2ad57520-7c29-26c1-9718-4fe0522b1516', 'prospects_modified_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2b348219-5a01-6293-cc59-4fe0521d3e0d', 'prospects_created_by', 'Users', 'users', 'id', 'Prospects', 'prospects', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2b8721e4-f934-2053-3f3a-4fe052a855ab', 'prospects_assigned_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2bfa3de9-a560-76a4-e809-4fe0520548eb', 'prospects_email_addresses', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('2c4c9007-8129-f4dc-9fa1-4fe0526adca5', 'prospects_email_addresses_primary', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('2ca577cd-04d0-e895-8b43-4fe052eaa2c0', 'prospect_tasks', 'Prospects', 'prospects', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2ce3ab3a-7fff-514f-cbe2-4fe0528b457f', 'prospect_notes', 'Prospects', 'prospects', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2d24e8cc-c769-49c5-4536-4fe0529b2f78', 'prospect_meetings', 'Prospects', 'prospects', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2d60c952-40d6-c5c7-42ee-4fe0525ba950', 'prospect_calls', 'Prospects', 'prospects', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2d9aeb0b-5866-8bd6-894a-4fe05221afa1', 'prospect_emails', 'Prospects', 'prospects', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2dd53aec-bf42-5086-4267-4fe05282587f', 'prospect_campaign_log', 'Prospects', 'prospects', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2f9f0d9e-a0b8-cafe-84c0-4fe052188654', 'email_template_email_marketings', 'EmailTemplates', 'email_templates', 'id', 'EmailMarketing', 'email_marketing', 'template_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3164de7c-2f60-1017-cd5f-4fe0526e8e3f', 'campaign_campaigntrakers', 'Campaigns', 'campaigns', 'id', 'CampaignTrackers', 'campaign_trkrs', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('392976ef-778b-186d-6ac2-4fe05269bc6a', 'schedulers_created_by_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('3963e5f1-5ae7-015a-db42-4fe0528849df', 'schedulers_modified_user_id_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'modified_user_id', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('399cec05-51ea-4758-098e-4fe0528d505e', 'schedulers_jobs_rel', 'Schedulers', 'schedulers', 'id', 'SchedulersJobs', 'schedulers_times', 'scheduler_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('428c28ab-0b07-a303-122d-4fe05271a0db', 'contacts_modified_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('42c97aad-2840-185c-2ca0-4fe0528ab44d', 'contacts_created_by', 'Users', 'users', 'id', 'Contacts', 'contacts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('43019c05-7468-3fa9-f484-4fe05288b7d9', 'contacts_assigned_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('433988a2-41f5-66ed-a96e-4fe05290406d', 'contacts_email_addresses', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('437370fb-40b0-b7e3-4c14-4fe052ac6f66', 'contacts_email_addresses_primary', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('43ade4e8-c493-8ebc-8784-4fe052ccdb0a', 'contact_direct_reports', 'Contacts', 'contacts', 'id', 'Contacts', 'contacts', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('43e4259a-f78b-41df-06b9-4fe052817619', 'contact_leads', 'Contacts', 'contacts', 'id', 'Leads', 'leads', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('44225f5a-78e8-efa1-3fef-4fe05252ebe6', 'contact_notes', 'Contacts', 'contacts', 'id', 'Notes', 'notes', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('445c65df-f0d1-44ab-b6e2-4fe0525018c2', 'contact_tasks', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('449b9999-d652-a447-a5d3-4fe05265cd5d', 'contact_tasks_parent', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Contacts', 0, 0),
('44de95b4-57dc-084b-0c4f-4fe05289ab6f', 'contact_campaign_log', 'Contacts', 'contacts', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4cd09bb7-a866-81bc-535a-4fe052adf0c3', 'accounts_modified_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4d0cddd8-36c0-1523-8c67-4fe052ff7420', 'accounts_created_by', 'Users', 'users', 'id', 'Accounts', 'accounts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4d45217f-04bc-3e28-631e-4fe052f586f9', 'accounts_assigned_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4d7e15c7-9818-17da-f71a-4fe05249ff2e', 'accounts_email_addresses', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('4dbac2af-54ab-13f0-f36b-4fe052af3364', 'accounts_email_addresses_primary', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('4dfbdbb6-e205-78e2-cb3a-4fe0521882c8', 'member_accounts', 'Accounts', 'accounts', 'id', 'Accounts', 'accounts', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4e38a878-991e-283d-dace-4fe05286cb5d', 'account_cases', 'Accounts', 'accounts', 'id', 'Cases', 'cases', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4e882cc0-6ca1-134e-fe92-4fe05252d4fc', 'account_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('4ecf63a3-d9b1-ad15-33c0-4fe0523e3af6', 'account_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('4f09a261-5463-856d-e1c6-4fe052b64f4e', 'account_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('4f441c63-fb09-b9b3-e371-4fe052b92b24', 'account_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('4f7ca103-1137-f94f-f5a7-4fe052ee5928', 'account_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('4fb640c7-992e-dc60-1bb2-4fe052ad2d3c', 'account_leads', 'Accounts', 'accounts', 'id', 'Leads', 'leads', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('551d7125-a7d2-ed0f-7f01-4fe0527599a9', 'opportunities_modified_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('55687385-81de-4475-ceea-4fe052025e7e', 'opportunities_created_by', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('55ab6313-4421-2ad6-ff99-4fe052c9b17e', 'opportunities_assigned_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('55e1b8c7-b701-58ab-41e8-4fe0522eeec7', 'opportunity_calls', 'Opportunities', 'opportunities', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('5619f74e-4534-42a1-6dbc-4fe05244fe19', 'opportunity_meetings', 'Opportunities', 'opportunities', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('5655ba1f-a0d3-d3da-8374-4fe0524a7226', 'opportunity_tasks', 'Opportunities', 'opportunities', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('568e1278-ddc1-81eb-db37-4fe05239878b', 'opportunity_notes', 'Opportunities', 'opportunities', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('56db7c74-2d85-95ff-7388-4fe052092355', 'opportunity_emails', 'Opportunities', 'opportunities', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('574d08af-ae64-f1d7-9248-4fe052856cbf', 'opportunity_leads', 'Opportunities', 'opportunities', 'id', 'Leads', 'leads', 'opportunity_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('57cc1331-daaf-257f-b153-4fe052622026', 'opportunity_currencies', 'Opportunities', 'opportunities', 'currency_id', 'Currencies', 'currencies', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5839dcdb-bd7a-8768-5821-4fe05218e87b', 'opportunities_campaign', 'campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5c705980-d47b-cae9-80fc-4fe052cdce60', 'emailtemplates_assigned_user', 'Users', 'users', 'id', 'EmailTemplates', 'email_templates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('61ca7abc-256b-6b52-4fb5-4fe0526c9c99', 'notes_assigned_user', 'Users', 'users', 'id', 'Notes', 'notes', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('622f0c0a-c747-895c-d2b4-4fe05207f94d', 'notes_modified_user', 'Users', 'users', 'id', 'Notes', 'notes', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('62927d08-17c7-2451-be67-4fe05238b931', 'notes_created_by', 'Users', 'users', 'id', 'Notes', 'notes', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('67a06a1a-dca6-c880-6a02-4fe052721f22', 'calls_modified_user', 'Users', 'users', 'id', 'Calls', 'calls', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('68065618-2b9a-92e3-fc93-4fe052592150', 'calls_created_by', 'Users', 'users', 'id', 'Calls', 'calls', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('686ac7ff-1561-013d-e727-4fe0526dba31', 'calls_assigned_user', 'Users', 'users', 'id', 'Calls', 'calls', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('68d0e5eb-5c6d-b927-63f6-4fe0529b0621', 'calls_notes', 'Calls', 'calls', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('71894772-8d2b-b9a5-7814-4fe052d2e3bf', 'emails_assigned_user', 'Users', 'users', 'id', 'Emails', 'emails', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('71f371ab-2844-d2b0-7fe0-4fe052426ddb', 'emails_modified_user', 'Users', 'users', 'id', 'Emails', 'emails', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7259a9c6-5d4e-89b4-99dc-4fe052a39661', 'emails_created_by', 'Users', 'users', 'id', 'Emails', 'emails', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('72c0ff21-ec3a-7555-f040-4fe052649430', 'emails_notes_rel', 'Emails', 'emails', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('77fc994b-f63b-08b3-d836-4fe05209fa80', 'meetings_modified_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7860df3f-4e59-6f2a-fc00-4fe052331010', 'meetings_created_by', 'Users', 'users', 'id', 'Meetings', 'meetings', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('78c87b64-167d-9530-72e4-4fe0528c3c84', 'meetings_assigned_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('792feabb-83dd-0f82-50a8-4fe05221568b', 'meetings_notes', 'Meetings', 'meetings', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Meetings', 0, 0),
('7db9a20c-8877-6d62-32c6-4fe05295c071', 'tasks_modified_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7e35a23f-2756-8869-f806-4fe052fe15a1', 'tasks_created_by', 'Users', 'users', 'id', 'Tasks', 'tasks', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7eb36983-d3bb-bbba-50b4-4fe052a8af6b', 'tasks_assigned_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('95fcbb6c-9ec8-5d44-394e-4fe05247d985', 'documents_modified_user', 'Users', 'users', 'id', 'Documents', 'documents', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('96437ec8-84e1-a072-1ed6-4fe05262dee2', 'documents_created_by', 'Users', 'users', 'id', 'Documents', 'documents', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('96810187-c09e-a855-e5ea-4fe052d689a6', 'document_revisions', 'Documents', 'documents', 'id', 'Documents', 'document_revisions', 'document_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('98195d7c-0f25-a184-a64a-4fe052488670', 'revisions_created_by', 'Users', 'users', 'id', 'DocumentRevisions', 'document_revisions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a05f4ee6-0c97-fcbb-0692-4fe052b28b72', 'inbound_email_created_by', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('a09e1e4c-6e40-de6e-b7ec-4fe052b95bbe', 'inbound_email_modified_user_id', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'modified_user_id', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('a35ab78a-0893-2d13-3cdc-4fe052b4904b', 'saved_search_assigned_user', 'Users', 'users', 'id', 'SavedSearch', 'saved_search', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a7f5e57b-3103-c547-43f4-4fe0524165b8', 'sugarfeed_modified_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a834d4dc-4132-2b3e-14d7-4fe0529fff6b', 'sugarfeed_created_by', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a86f7a06-47c2-3d37-f29b-4fe052053882', 'sugarfeed_assigned_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ae6d8100-6743-f300-d2fc-4fe052de2584', 'cosib_queries_modified_user', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('aeb79cf8-c321-2462-ed9a-4fe052562e2a', 'cosib_queries_created_by', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('af06ce26-a34a-66bd-30e5-4fe0528a4099', 'cosib_queries_assigned_user', 'Users', 'users', 'id', 'cosib_queries', 'cosib_queries', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b2e09efc-1d8d-d8a4-407f-4fe052303952', 'cosib_messages_modified_user', 'Users', 'users', 'id', 'cosib_messages', 'cosib_messages', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b320df02-637b-1fc9-ace6-4fe052fa7aae', 'cosib_messages_created_by', 'Users', 'users', 'id', 'cosib_messages', 'cosib_messages', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b361f0c4-b7a1-5e5c-b913-4fe0522c461b', 'cosib_messages_assigned_user', 'Users', 'users', 'id', 'cosib_messages', 'cosib_messages', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b859e93a-6035-fe66-6063-4fe052ec7436', 'sphr_market_company_modified_user', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b8b640f2-12de-ec9d-6993-4fe05211a1c1', 'sphr_market_company_created_by', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b9038fd2-73de-9b8f-03f6-4fe052c55e20', 'sphr_market_company_assigned_user', 'Users', 'users', 'id', 'sphr_market_company', 'sphr_market_company', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('beafba4d-0189-ee8b-3892-4fe052b270ab', 'sphr_market_channel_modified_user', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('bef34937-3952-daab-3f12-4fe05213be3e', 'sphr_market_channel_created_by', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('bf3554da-ca2c-787b-9dd5-4fe05222966d', 'sphr_market_channel_assigned_user', 'Users', 'users', 'id', 'sphr_market_channel', 'sphr_market_channel', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c289684d-d476-4b57-c6a4-4fe0521ab365', 'bcm_business_center_modified_user', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c2c53ca1-88b3-ca56-4da5-4fe052dd1111', 'bcm_business_center_created_by', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c300ccc4-7a46-0981-99ba-4fe052bf61b3', 'bcm_business_center_assigned_user', 'Users', 'users', 'id', 'bcm_business_center', 'bcm_business_center', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c899bc5f-c8fe-7ed6-3ef7-4fe052c0b921', 'sphr_office_meeting_modified_user', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c901542f-80ae-759e-745d-4fe0529bd033', 'sphr_office_meeting_created_by', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c9520b7f-e722-2fdf-7321-4fe052dc13fb', 'sphr_office_meeting_assigned_user', 'Users', 'users', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ce2e72bd-bb50-4101-19c7-4fe052abd800', 'sphr_inspection_tour_modified_user', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ce7b0763-07a5-1c16-8c08-4fe0527f4c26', 'sphr_inspection_tour_created_by', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cec37ca1-6eec-0cef-de3c-4fe052dc07a7', 'sphr_inspection_tour_assigned_user', 'Users', 'users', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d80d705b-418c-aeee-433e-4fe052145608', 'sphr_client_modified_user', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d8466355-cd44-549e-25df-4fe05215bcb4', 'sphr_client_created_by', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d88070ff-0524-c8f0-cd85-4fe052cd5c92', 'sphr_client_assigned_user', 'Users', 'users', 'id', 'sphr_Client', 'sphr_client', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d8bbd87e-7fac-47bb-9c11-4fe052b53b30', 'sphr_client_email_addresses', 'sphr_Client', 'sphr_client', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Client', 0, 0),
('d8f91636-bada-d377-7d5e-4fe052a8b2b8', 'sphr_client_email_addresses_primary', 'sphr_Client', 'sphr_client', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('e2c86026-3c10-580e-d5fc-4fe052db1fcc', 'sphr_object_modified_user', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e3204e6b-f13c-b06b-b41c-4fe0523e644e', 'sphr_object_created_by', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e375a6ab-a22e-a35b-ff56-4fe0523d7e2b', 'sphr_object_assigned_user', 'Users', 'users', 'id', 'sphr_Object', 'sphr_object', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e7955a3c-ec80-45f3-2c8b-4fe052c9f370', 'sphr_show_object_modified_user', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e7d938be-6b0c-7640-48e4-4fe052a490a3', 'sphr_show_object_created_by', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e8206dd5-d8fe-e573-a6db-4fe0524eefd1', 'sphr_show_object_assigned_user', 'Users', 'users', 'id', 'sphr_Show_object', 'sphr_show_object', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ebceb0a2-a9a0-ca81-b9d0-4fe052c8e9cc', 'sphr_reserve_modified_user', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ec22da03-5369-5c77-3463-4fe052e59ea8', 'sphr_reserve_created_by', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ec67fadd-a56d-9886-53a8-4fe052ff14c3', 'sphr_reserve_assigned_user', 'Users', 'users', 'id', 'sphr_Reserve', 'sphr_reserve', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f0e80e3d-8cc2-b66c-4070-4fe052dd2f65', 'sphr_interest_modified_user', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f146e505-6b15-fecd-780b-4fe052cfb887', 'sphr_interest_created_by', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f197ca88-f6a5-59df-b865-4fe052e24412', 'sphr_interest_assigned_user', 'Users', 'users', 'id', 'sphr_Interest', 'sphr_interest', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('228c0b4d-c3c0-ce2d-84aa-4fe052a3ee36', 'sphr_deal_modified_user', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('26680bec-cf00-430d-a859-4fe052a105b5', 'sphr_deal_created_by', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('29f90e0e-9da7-5c0c-57a3-4fe05252feba', 'sphr_deal_assigned_user', 'Users', 'users', 'id', 'sphr_Deal', 'sphr_deal', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('84170061-9a09-23fb-f386-4fe052b6774c', 'sphr_developer_modified_user', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('87ed07e4-a05a-2d13-7547-4fe05237a3a9', 'sphr_developer_created_by', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8e460460-465d-63b7-805d-4fe0525ae206', 'sphr_developer_assigned_user', 'Users', 'users', 'id', 'sphr_Developer', 'sphr_developer', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('95f70406-38ff-8ed5-71e8-4fe052361588', 'sphr_developer_email_addresses', 'sphr_Developer', 'sphr_developer', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Developer', 0, 0),
('9d240063-19db-e359-d741-4fe052d45acd', 'sphr_developer_email_addresses_primary', 'sphr_Developer', 'sphr_developer', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('f2c3043b-2aed-cb7e-dd82-4fe0525ae693', 'sphr_owner_modified_user', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f69d0e91-4117-212c-4a9d-4fe052a7bc69', 'sphr_owner_created_by', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('fa660b3a-bf4b-045a-c525-4fe052ab68b0', 'sphr_owner_assigned_user', 'Users', 'users', 'id', 'sphr_Owner', 'sphr_owner', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('152b0b3e-8571-c753-75d8-4fe052ec989e', 'sphr_intermediary_modified_user', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('15673b9d-652f-bf55-15ac-4fe052cb82cf', 'sphr_intermediary_created_by', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('15a3437d-fbf1-86e5-a3c5-4fe052899b38', 'sphr_intermediary_assigned_user', 'Users', 'users', 'id', 'sphr_Intermediary', 'sphr_intermediary', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('15e0ad8b-7085-ddd6-5281-4fe0523adbcf', 'sphr_intermediary_email_addresses', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'sphr_Intermediary', 0, 0),
('1623565c-00a8-a09a-3cbb-4fe052da1c9c', 'sphr_intermediary_email_addresses_primary', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('19c51005-2753-3164-3db3-4fe05250b294', 'zucker_reportcontainer_containers', 'ZuckerReportContainer', 'zucker_reportcontainer', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1a033321-8ab3-1092-5db5-4fe0528cf845', 'zucker_reportcontainer_reports', 'ZuckerReportContainer', 'zucker_reportcontainer', 'id', 'ZuckerReports', 'zucker_report', 'container_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1a3f6b89-2c9b-98e9-d9a9-4fe052392c5c', 'zucker_reportcontainer_assigned_user', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1a7b5cda-1688-1feb-9463-4fe052cf5d5a', 'zucker_reportcontainer_modified_user', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ab64796-36fa-cfae-1a5f-4fe052f796ad', 'zucker_reportcontainer_created_by', 'Users', 'users', 'id', 'ZuckerReportContainer', 'zucker_reportcontainer', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('211dd98e-1a49-c56a-6b5f-4fe0520800e1', 'zucker_reporttemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('215908f3-ea0d-8ffb-c6a5-4fe0527c4dbb', 'zucker_reporttemplate_modified_user', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2197af83-29ca-18df-b301-4fe0523e86ef', 'zucker_reporttemplate_created_by', 'Users', 'users', 'id', 'ZuckerReportTemplate', 'zucker_reporttemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2515e85f-1f90-ad71-737a-4fe0521d856a', 'zucker_wordtemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('25545622-6d3c-0805-e3a4-4fe052aa41ed', 'zucker_wordtemplate_modified_user', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2595231f-fcbc-8b4d-fa6b-4fe052bc9f13', 'zucker_wordtemplate_created_by', 'Users', 'users', 'id', 'ZuckerWordtemplate', 'zucker_wordtemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('274411e5-0cc6-5f00-8eca-4fe0529369a4', 'zucker_querytemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('278326a6-6b70-541f-831e-4fe0525058ec', 'zucker_querytemplate_modified_user', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('27c1a731-19e2-5480-e21a-4fe0523fe309', 'zucker_querytemplate_created_by', 'Users', 'users', 'id', 'ZuckerQueryTemplate', 'zucker_querytemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2971bb38-a533-fd23-c2e0-4fe05231ea6d', 'zucker_listingtemplate_assigned_user', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('29b5af06-a084-c094-f1a8-4fe0524888c3', 'zucker_listingtemplate_modified_user', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('29f41f02-69f4-8f0b-3148-4fe0529d1515', 'zucker_listingtemplate_created_by', 'Users', 'users', 'id', 'ZuckerListingTemplate', 'zucker_listingtemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2e4111f7-9298-3fe7-f363-4fe052d391d1', 'zucker_runnablereport_assigned_user', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2e837acd-e584-88a2-9b81-4fe0525f714b', 'zucker_runnablereport_modified_user', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2ec0a880-e9e1-54be-383e-4fe0524c39f7', 'zucker_runnablereport_created_by', 'Users', 'users', 'id', 'ZuckerRunnableReport', 'zucker_runnablereport', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5e2b8eba-e301-a4c6-90ea-4fe052d4b0cd', 'accounts_bugs', 'Accounts', 'accounts', 'id', 'Bugs', 'bugs', 'id', 'accounts_bugs', 'account_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('5e9c688b-f088-1a6a-4c22-4fe05254e658', 'accounts_contacts', 'Accounts', 'accounts', 'id', 'Contacts', 'contacts', 'id', 'accounts_contacts', 'account_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('5f0ddd8d-c825-81f3-15e3-4fe05218a417', 'accounts_opportunities', 'Accounts', 'accounts', 'id', 'Opportunities', 'opportunities', 'id', 'accounts_opportunities', 'account_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('5f928dc3-5a4b-aa3c-70da-4fe052976ff8', 'calls_contacts', 'Calls', 'calls', 'id', 'Contacts', 'contacts', 'id', 'calls_contacts', 'call_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('60099597-dc3a-0918-7990-4fe05214d2ed', 'calls_users', 'Calls', 'calls', 'id', 'Users', 'users', 'id', 'calls_users', 'call_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('607f181a-34e4-d73b-7823-4fe052075b82', 'calls_leads', 'Calls', 'calls', 'id', 'Leads', 'leads', 'id', 'calls_leads', 'call_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('610eb0e2-7c40-417a-a59e-4fe052d8c805', 'cases_bugs', 'Cases', 'cases', 'id', 'Bugs', 'bugs', 'id', 'cases_bugs', 'case_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('61785c91-1023-451f-1ce6-4fe0525f4b7a', 'contacts_bugs', 'Contacts', 'contacts', 'id', 'Bugs', 'bugs', 'id', 'contacts_bugs', 'contact_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('61dfbac8-04c7-63ea-71c9-4fe052a12525', 'contacts_cases', 'Contacts', 'contacts', 'id', 'Cases', 'cases', 'id', 'contacts_cases', 'contact_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('624a6eff-96c6-1962-a036-4fe0524d9d1c', 'contacts_users', 'Contacts', 'contacts', 'id', 'Users', 'users', 'id', 'contacts_users', 'contact_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('62b8128d-2576-35ad-3230-4fe052464ea1', 'emails_accounts_rel', 'Emails', 'emails', 'id', 'Accounts', 'accounts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('633cbc9f-3556-7ad0-8866-4fe05299ee62', 'emails_bugs_rel', 'Emails', 'emails', 'id', 'Bugs', 'bugs', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Bugs', 0, 0),
('63bd7682-dddc-050d-b549-4fe0526dd023', 'emails_cases_rel', 'Emails', 'emails', 'id', 'Cases', 'cases', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Cases', 0, 0),
('64268516-899e-75e8-80e7-4fe0523e7549', 'emails_contacts_rel', 'Emails', 'emails', 'id', 'Contacts', 'contacts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('6489b7ef-f868-9e09-4d27-4fe052d4e4be', 'emails_leads_rel', 'Emails', 'emails', 'id', 'Leads', 'leads', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('64dd3836-ff4b-f4e5-3471-4fe0523d001f', 'emails_opportunities_rel', 'Emails', 'emails', 'id', 'Opportunities', 'opportunities', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Opportunities', 0, 0),
('651c5182-e6b9-a4c2-98ce-4fe052d23784', 'emails_tasks_rel', 'Emails', 'emails', 'id', 'Tasks', 'tasks', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Tasks', 0, 0),
('65586daa-e9a8-da9b-1286-4fe0527b0152', 'emails_users_rel', 'Emails', 'emails', 'id', 'Users', 'users', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('6595360c-9c64-daa6-92c5-4fe05296a34c', 'emails_project_task_rel', 'Emails', 'emails', 'id', 'ProjectTask', 'project_task', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'ProjectTask', 0, 0),
('65d49d8a-3878-b50c-e838-4fe052985842', 'emails_projects_rel', 'Emails', 'emails', 'id', 'Project', 'project', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Project', 0, 0),
('6611e6b9-9f96-8039-f416-4fe05219278e', 'emails_prospects_rel', 'Emails', 'emails', 'id', 'Prospects', 'prospects', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('66616047-8206-6ce6-3423-4fe052150645', 'meetings_contacts', 'Meetings', 'meetings', 'id', 'Contacts', 'contacts', 'id', 'meetings_contacts', 'meeting_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('66b11d3f-857f-6a67-2869-4fe052773232', 'meetings_users', 'Meetings', 'meetings', 'id', 'Users', 'users', 'id', 'meetings_users', 'meeting_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('66f16494-eda2-d12d-2672-4fe05269e35a', 'meetings_leads', 'Meetings', 'meetings', 'id', 'Leads', 'leads', 'id', 'meetings_leads', 'meeting_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('6731cbe9-90e3-ebd7-eede-4fe0521d1af6', 'opportunities_contacts', 'Opportunities', 'opportunities', 'id', 'Contacts', 'contacts', 'id', 'opportunities_contacts', 'opportunity_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('67754e9d-37ad-bcec-7911-4fe052279c34', 'prospect_list_campaigns', 'ProspectLists', 'prospect_lists', 'id', 'Campaigns', 'campaigns', 'id', 'prospect_list_campaigns', 'prospect_list_id', 'campaign_id', 'many-to-many', NULL, NULL, 0, 0),
('67b8043b-7b2e-0304-4b03-4fe0526dcd7f', 'prospect_list_contacts', 'ProspectLists', 'prospect_lists', 'id', 'Contacts', 'contacts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Contacts', 0, 0),
('67f55e73-0067-bc0d-e19e-4fe0524d4291', 'prospect_list_prospects', 'ProspectLists', 'prospect_lists', 'id', 'Prospects', 'prospects', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Prospects', 0, 0),
('6837f1e1-e021-7e0b-f569-4fe052056154', 'prospect_list_leads', 'ProspectLists', 'prospect_lists', 'id', 'Leads', 'leads', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Leads', 0, 0),
('689eb31d-0721-a994-d4ec-4fe05291553b', 'prospect_list_users', 'ProspectLists', 'prospect_lists', 'id', 'Users', 'users', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Users', 0, 0),
('691e1fcd-4fc7-2d84-a67a-4fe0520cd316', 'prospect_list_accounts', 'ProspectLists', 'prospect_lists', 'id', 'Accounts', 'accounts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Accounts', 0, 0),
('69a3e4a9-aade-8aac-fc7e-4fe052c7fde0', 'roles_users', 'Roles', 'roles', 'id', 'Users', 'users', 'id', 'roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0);
REPLACE INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('6a26c0bb-590c-398a-e200-4fe052c87b94', 'projects_bugs', 'Project', 'project', 'id', 'Bugs', 'bugs', 'id', 'projects_bugs', 'project_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('6a9a7bf0-79a6-f468-8255-4fe05258caaa', 'projects_cases', 'Project', 'project', 'id', 'Cases', 'cases', 'id', 'projects_cases', 'project_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('6b0c8297-c7dd-230d-d451-4fe052cad662', 'projects_accounts', 'Project', 'project', 'id', 'Accounts', 'accounts', 'id', 'projects_accounts', 'project_id', 'account_id', 'many-to-many', NULL, NULL, 0, 0),
('6b513834-b785-b2df-cb9a-4fe052023ad3', 'projects_contacts', 'Project', 'project', 'id', 'Contacts', 'contacts', 'id', 'projects_contacts', 'project_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('6b92b952-a8f7-ab05-5342-4fe052c16024', 'projects_opportunities', 'Project', 'project', 'id', 'Opportunities', 'opportunities', 'id', 'projects_opportunities', 'project_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('6bd73f83-5f7b-b6a5-f3df-4fe0528236cc', 'acl_roles_actions', 'ACLRoles', 'acl_roles', 'id', 'ACLActions', 'acl_actions', 'id', 'acl_roles_actions', 'role_id', 'action_id', 'many-to-many', NULL, NULL, 0, 0),
('6c1af7dd-8ec0-ff71-1127-4fe0522ada20', 'acl_roles_users', 'ACLRoles', 'acl_roles', 'id', 'Users', 'users', 'id', 'acl_roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('6c6a845a-9b18-9186-93fb-4fe0526e9847', 'email_marketing_prospect_lists', 'EmailMarketing', 'email_marketing', 'id', 'ProspectLists', 'prospect_lists', 'id', 'email_marketing_prospect_lists', 'email_marketing_id', 'prospect_list_id', 'many-to-many', NULL, NULL, 0, 0),
('6cc03867-56c3-d7e5-9d68-4fe052cc7b09', 'leads_documents', 'Leads', 'leads', 'id', 'Documents', 'documents', 'id', 'linked_documents', 'parent_id', 'document_id', 'many-to-many', 'parent_type', 'Leads', 0, 0),
('6d1190c3-e46a-6a40-b256-4fe0526e03b1', 'sphr_market_channel_sphr_client_1', 'sphr_market_channel', 'sphr_market_channel', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_marketphr_client_1_c', 'sphr_marke5c2achannel_ida', 'sphr_marke29a6_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('6d528ccb-5091-649b-6b0b-4fe052c80a02', 'sphr_client_cosib_queries', 'sphr_Client', 'sphr_client', 'id', 'cosib_queries', 'cosib_queries', 'id', 'sphr_clientosib_queries_c', 'sphr_clien735b_client_ida', 'sphr_clien6a3fqueries_idb', 'many-to-many', NULL, NULL, 0, 0),
('6d95ed64-6db7-2eba-1e24-4fe052862c18', 'sphr_deal_project', 'sphr_Deal', 'sphr_deal', 'id', 'Project', 'project', 'id', 'sphr_deal_project_c', 'sphr_deal_67fehr_deal_ida', 'sphr_deal_2035project_idb', 'many-to-many', NULL, NULL, 0, 0),
('6dda4f8d-84ac-e5f9-36cb-4fe052a34d7d', 'sphr_client_sphr_interest', 'sphr_Client', 'sphr_client', 'id', 'sphr_Interest', 'sphr_interest', 'id', 'sphr_clientphr_interest_c', 'sphr_clienc30d_client_ida', 'sphr_clien17ddnterest_idb', 'many-to-many', NULL, NULL, 0, 0),
('6e41be27-23d8-234c-a077-4fe052525422', 'accounts_activities_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('6ea9a89a-5436-eee6-3ff1-4fe0528b3878', 'sphr_owner_sphr_object', 'sphr_Owner', 'sphr_owner', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_owner_sphr_object_c', 'sphr_owner9f16r_owner_ida', 'sphr_owneredcf_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('6f054f19-d78b-4640-6abd-4fe0529c49ac', 'sphr_client_activities_calls', 'sphr_Client', 'sphr_client', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('6f46deff-6e9d-d9f9-b416-4fe05277d2bf', 'accounts_activities_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('6f8f69d8-53e8-05b4-4598-4fe052818cd1', 'sphr_client_sphr_inspection_tour', 'sphr_Client', 'sphr_client', 'id', 'sphr_Inspection_tour', 'sphr_inspection_tour', 'id', 'sphr_clientpection_tour_c', 'sphr_clien6152_client_ida', 'sphr_clien26ebon_tour_idb', 'many-to-many', NULL, NULL, 0, 0),
('6fd2a263-e65a-f691-3a00-4fe0521bdd44', 'sphr_client_activities_emails', 'sphr_Client', 'sphr_client', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('70170ba0-a0a9-6897-8226-4fe052bb53ab', 'accounts_cosib_queries', 'Accounts', 'accounts', 'id', 'cosib_queries', 'cosib_queries', 'id', 'accounts_cosib_queries_c', 'accounts_c3c3bccounts_ida', 'accounts_c5a9fqueries_idb', 'many-to-many', NULL, NULL, 0, 0),
('70781d0a-e5c6-ec3a-05a5-4fe052793c70', 'accounts_activities_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('70eed4de-bcd1-711c-9755-4fe052ec8713', 'sphr_deal_activities_tasks', 'sphr_Deal', 'sphr_deal', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('71340c91-0358-16a5-2768-4fe0520e8082', 'sphr_object_sphr_interest', 'sphr_Object', 'sphr_object', 'id', 'sphr_Interest', 'sphr_interest', 'id', 'sphr_objectphr_interest_c', 'sphr_objec2883_object_ida', 'sphr_objec057enterest_idb', 'many-to-many', NULL, NULL, 0, 0),
('71766cea-c4f5-7cd2-91c5-4fe052e8cf2c', 'sphr_object_sphr_reserve', 'sphr_Object', 'sphr_object', 'id', 'sphr_Reserve', 'sphr_reserve', 'id', 'sphr_objectsphr_reserve_c', 'sphr_objec6f3b_object_ida', 'sphr_objec1157reserve_idb', 'many-to-many', NULL, NULL, 0, 0),
('71b92aea-78af-f071-ffc9-4fe052cd3f72', 'sphr_object_opportunities', 'sphr_Object', 'sphr_object', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_objectpportunities_c', 'sphr_objec388d_object_ida', 'sphr_objecbc4aunities_idb', 'many-to-many', NULL, NULL, 0, 0),
('71fd403f-2b93-70e4-b048-4fe05220e5e4', 'sphr_market_company_sphr_client', 'sphr_market_company', 'sphr_market_company', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_market_sphr_client_c', 'sphr_marke85efcompany_ida', 'sphr_marke6013_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('723f5eee-a0ea-5607-fee0-4fe0523829d4', 'sphr_developer_contacts', 'sphr_Developer', 'sphr_developer', 'id', 'Contacts', 'contacts', 'id', 'sphr_developer_contacts_c', 'sphr_devel5fa8veloper_ida', 'sphr_devel832fontacts_idb', 'many-to-many', NULL, NULL, 0, 0),
('72a14019-22e0-efc8-3304-4fe05219d449', 'sphr_client_cosib_messages', 'sphr_Client', 'sphr_client', 'id', 'cosib_messages', 'cosib_messages', 'id', 'sphr_clientsib_messages_c', 'sphr_clien2679_client_ida', 'sphr_clienaceeessages_idb', 'many-to-many', NULL, NULL, 0, 0),
('730cf705-64e2-4fa5-73bb-4fe052739e32', 'sphr_client_opportunities', 'sphr_Client', 'sphr_client', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_clientpportunities_c', 'sphr_clien0590_client_ida', 'sphr_clien3cd1unities_idb', 'many-to-many', NULL, NULL, 0, 0),
('738cb9e6-f8c6-b4ba-4ade-4fe0524e08f0', 'sphr_deal_sphr_office_meeting', 'sphr_Deal', 'sphr_deal', 'id', 'sphr_Office_meeting', 'sphr_office_meeting', 'id', 'sphr_deal_sfice_meeting_c', 'sphr_deal_3e0ahr_deal_ida', 'sphr_deal_41d9meeting_idb', 'many-to-many', NULL, NULL, 0, 0),
('740b2646-0ab7-5637-fef0-4fe05207df28', 'sphr_client_activities_meetings', 'sphr_Client', 'sphr_client', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('74aa42e0-d0bd-c408-aa50-4fe0523744a8', 'sphr_client_sphr_reserve', 'sphr_Client', 'sphr_client', 'id', 'sphr_Reserve', 'sphr_reserve', 'id', 'sphr_clientsphr_reserve_c', 'sphr_clienc0d2_client_ida', 'sphr_clien03b8reserve_idb', 'many-to-many', NULL, NULL, 0, 0),
('7552580f-3671-8b0c-2edc-4fe052c3f98d', 'cosib_queries_sphr_object', 'cosib_queries', 'cosib_queries', 'id', 'sphr_Object', 'sphr_object', 'id', 'cosib_queri_sphr_object_c', 'cosib_quer91b5queries_ida', 'cosib_quer4238_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('75e4f08c-d2f4-4faa-8f35-4fe05269f909', 'sphr_object_cosib_messages', 'sphr_Object', 'sphr_object', 'id', 'cosib_messages', 'cosib_messages', 'id', 'sphr_objectsib_messages_c', 'sphr_objecb445_object_ida', 'sphr_objecbcd8essages_idb', 'many-to-many', NULL, NULL, 0, 0),
('767cf0c2-a6bc-89a3-5146-4fe052024efe', 'sphr_intermediary_sphr_client', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'sphr_Client', 'sphr_client', 'id', 'sphr_interm_sphr_client_c', 'sphr_intera5e4mediary_ida', 'sphr_inter8ec2_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('77139014-aab4-66a5-be63-4fe052f3dfcf', 'accounts_sphr_object', 'Accounts', 'accounts', 'id', 'sphr_Object', 'sphr_object', 'id', 'accounts_sphr_object_c', 'accounts_sfb36ccounts_ida', 'accounts_s40ad_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('77a9c36d-2379-04af-2266-4fe05286dc9c', 'opportunities_activities_emails', 'Opportunities', 'opportunities', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('784e1607-cafe-7595-975b-4fe0523dbe31', 'accounts_sphr_client', 'Accounts', 'accounts', 'id', 'sphr_Client', 'sphr_client', 'id', 'accounts_sphr_client_c', 'accounts_s160fccounts_ida', 'accounts_sde91_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('78ecf334-eb74-f05b-fec2-4fe0527dc3b3', 'sphr_developer_sphr_object', 'sphr_Developer', 'sphr_developer', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_develo_sphr_object_c', 'sphr_devel6664veloper_ida', 'sphr_devel402f_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('79918a6f-090f-d564-3531-4fe05285acb4', 'sphr_market_company_sphr_market_channel', 'sphr_market_company', 'sphr_market_company', 'id', 'sphr_market_channel', 'sphr_market_channel', 'id', 'sphr_marketrket_channel_c', 'sphr_markef954company_ida', 'sphr_marke4757channel_idb', 'many-to-many', NULL, NULL, 0, 0),
('7a2611d9-60be-68f9-e8ea-4fe0524944b2', 'sphr_deal_sphr_show_object', 'sphr_Deal', 'sphr_deal', 'id', 'sphr_Show_object', 'sphr_show_object', 'id', 'sphr_deal_s_show_object_c', 'sphr_deal_3c7dhr_deal_ida', 'sphr_deal_45e2_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('7ac84561-5070-c3fb-1ab4-4fe0523267c1', 'sphr_object_notes', 'sphr_Object', 'sphr_object', 'id', 'Notes', 'notes', 'id', 'sphr_object_notes_c', 'sphr_objec205c_object_ida', 'sphr_objec37a9esnotes_idb', 'many-to-many', NULL, NULL, 0, 0),
('7b632fc5-964c-81f2-62b1-4fe05286fdd7', 'sphr_intermediary_sphr_object', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_interm_sphr_object_c', 'sphr_intera323mediary_ida', 'sphr_inter665b_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('7c097be6-6e5e-727d-f57a-4fe052d817d4', 'sphr_deal_activities_emails', 'sphr_Deal', 'sphr_deal', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('7ca7202b-12cf-a21f-90a2-4fe052be87d1', 'opportunities_activities_meetings', 'Opportunities', 'opportunities', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('7def36a6-f600-92ef-0f0a-4fe05262134d', 'sphr_client_activities_notes', 'sphr_Client', 'sphr_client', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('7e8d87eb-9c33-18a0-cdbe-4fe0523f6f47', 'sphr_intermediary_opportunities', 'sphr_Intermediary', 'sphr_intermediary', 'id', 'Opportunities', 'opportunities', 'id', 'sphr_intermpportunities_c', 'sphr_interf513mediary_ida', 'sphr_inter5307unities_idb', 'many-to-many', NULL, NULL, 0, 0),
('7f2ef838-a2c0-99e6-792e-4fe052633797', 'sphr_client_activities_tasks', 'sphr_Client', 'sphr_client', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Client', 0, 0),
('7fcef20b-9afb-57a2-3a57-4fe0527e66bd', 'sphr_deal_activities_notes', 'sphr_Deal', 'sphr_deal', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('807311f9-938e-97b3-8133-4fe052ff3698', 'cosib_queries_documents', 'cosib_queries', 'cosib_queries', 'id', 'Documents', 'documents', 'id', 'cosib_queries_documents_c', 'cosib_quer891cqueries_ida', 'cosib_quer51ebcuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('811917d3-2f9e-fbc1-7b69-4fe0521e55e8', 'opportunities_activities_calls', 'Opportunities', 'opportunities', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('81c0e4c5-c555-72ab-aabb-4fe0529b4efd', 'sphr_object_documents', 'sphr_Object', 'sphr_object', 'id', 'Documents', 'documents', 'id', 'sphr_object_documents_c', 'sphr_objec1b6c_object_ida', 'sphr_objec92efcuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('825dec5e-9a3a-751d-ec73-4fe052830738', 'sphr_deal_activities_calls', 'sphr_Deal', 'sphr_deal', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('82f4235c-d6cc-f9db-9010-4fe052e51243', 'sphr_client_documents', 'sphr_Client', 'sphr_client', 'id', 'Documents', 'documents', 'id', 'sphr_client_documents_c', 'sphr_clien29a0_client_ida', 'sphr_clien34c3cuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('837f81b0-8f30-3f65-5a40-4fe0529dd114', 'sphr_object_sphr_show_object', 'sphr_Object', 'sphr_object', 'id', 'sphr_Show_object', 'sphr_show_object', 'id', 'sphr_object_show_object_c', 'sphr_objecdf1f_object_ida', 'sphr_objec4a69_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('83fac6e5-2964-43f3-2a68-4fe052b97106', 'accounts_activities_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('847e8ace-734c-9fea-e3f3-4fe052b09334', 'sphr_deal_activities_meetings', 'sphr_Deal', 'sphr_deal', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'sphr_Deal', 0, 0),
('8511dc35-f591-df6f-7ab3-4fe0525b92e0', 'accounts_documents', 'Accounts', 'accounts', 'id', 'Documents', 'documents', 'id', 'accounts_documents_c', 'accounts_d13e2ccounts_ida', 'accounts_d009acuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('85a88e31-48fd-664c-7f09-4fe0528ef602', 'sphr_client_sphr_object', 'sphr_Client', 'sphr_client', 'id', 'sphr_Object', 'sphr_object', 'id', 'sphr_client_sphr_object_c', 'sphr_clien88c3_client_ida', 'sphr_clien826b_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('863ed34f-3f75-96c7-a8d3-4fe052b1ac4f', 'opportunities_activities_notes', 'Opportunities', 'opportunities', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('86dfb148-27b3-46e6-7028-4fe052b0fdf7', 'opportunities_activities_tasks', 'Opportunities', 'opportunities', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('87813968-360e-f7fd-50c7-4fe0528395db', 'accounts_activities_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sphr_clientsib_messages_c`
--

CREATE TABLE IF NOT EXISTS `sphr_clientsib_messages_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `sphr_clien2679_client_ida` varchar(36) DEFAULT NULL,
  `sphr_clienaceeessages_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sphr_clientcosib_messages_ida1` (`sphr_clien2679_client_ida`),
  KEY `sphr_clientcosib_messages_alt` (`sphr_clienaceeessages_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_clientsib_messages_c`
--

REPLACE INTO `sphr_clientsib_messages_c` (`id`, `date_modified`, `deleted`, `sphr_clien2679_client_ida`, `sphr_clienaceeessages_idb`) VALUES
('4b342e1e-1ace-5609-e0f3-4fe047a1a4ce', '2012-06-19 10:10:49', 1, '1300f932-f7a9-3aef-b1af-4f82cebdf380', 'df905d6d-8fd2-6668-344e-4fe047d9b0b3');

-- --------------------------------------------------------

--
-- Table structure for table `sphr_objectsib_messages_c`
--

CREATE TABLE IF NOT EXISTS `sphr_objectsib_messages_c` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `sphr_objecb445_object_ida` varchar(36) DEFAULT NULL,
  `sphr_objecbcd8essages_idb` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sphr_objectcosib_messages_ida1` (`sphr_objecb445_object_ida`),
  KEY `sphr_objectcosib_messages_alt` (`sphr_objecbcd8essages_idb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_objectsib_messages_c`
--

REPLACE INTO `sphr_objectsib_messages_c` (`id`, `date_modified`, `deleted`, `sphr_objecb445_object_ida`, `sphr_objecbcd8essages_idb`) VALUES
('5d73d708-7db4-4421-7ffc-4fe047145bbf', '2012-06-19 10:10:49', 1, '17a41de5-cdd9-9bc3-99d0-4e2c7bfda237', 'df905d6d-8fd2-6668-344e-4fe047d9b0b3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
