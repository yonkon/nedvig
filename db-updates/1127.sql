-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2012 at 10:37 AM
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

INSERT INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('cosib_queriesanother_c', 'another_c', 'LBL_ANOTHER', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-06-27 13:49:55', 0, 0, 0, 0, 1, 'true', NULL, '4', '50', NULL),
('cosib_queriesdate_noplan_visit_c', 'date_noplan_visit_c', 'LBL_DATE_NOPLAN_VISIT_C', NULL, 'История посещений сохраняется. Её можно посмотреть в журнале измнений.', 'cosib_queries', 'datetimecombo', NULL, 0, NULL, '2012-07-05 07:38:48', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesdate_periodic_visit_c', 'date_periodic_visit_c', 'LBL_DATE_PERIODIC_VISIT_C', NULL, 'История посещений сохраняется. Её можно посмотреть в журнале измнений.', 'cosib_queries', 'datetimecombo', NULL, 0, NULL, '2012-07-05 05:39:48', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesdate_visit_c', 'date_visit_c', 'LBL_DATE_VISIT', NULL, 'История посещений сохраняется. Её можно посмотреть в журнале измнений.', 'cosib_queries', 'datetimecombo', NULL, 0, NULL, '2012-07-09 08:45:32', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_querieshelp_client_c', 'help_client_c', 'LBL_HELP_CLIENT', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-27 13:32:27', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_querieskeys_storing_c', 'keys_storing_c', 'LBL_KEYS_STORING', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-19 13:06:09', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesloss_c', 'loss_c', 'LBL_LOSS', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-27 13:31:46', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesmail_service_c', 'mail_service_c', 'LBL_MAIL_SERVICE', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-27 13:28:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesmessage_client_c', 'message_client_c', 'LBL_MESSAGE_CLIENT_C ', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-06-27 13:57:19', 0, 0, 0, 0, 1, 'true', NULL, '4', '50', NULL),
('cosib_queriesnoplan_visit_c', 'noplan_visit_c', 'LBL_NOPLAN_VISIT', NULL, 'При выборе данной опции Вы можете вести дату последнего внепланового посещения. Историю дат посещений можно посмотреть в журнале изменений.', 'cosib_queries', 'bool', 255, 0, '0', '2012-07-05 07:38:19', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesperiodic_visit_c', 'periodic_visit_c', 'LBL_PERIODIC_VISIT', NULL, 'При выборе данной опции Вы можете ввести датупоследнего планового посещения.Историю дат посещений можно посмотреть в журнале изменений.', 'cosib_queries', 'bool', 255, 0, '0', '2012-07-05 07:37:22', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriespreparation_realty_c', 'preparation_realty_c', 'LBL_PREPARATION_REALTY', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-27 13:30:30', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriestaxes_c', 'taxes_c', 'LBL_TAXES', NULL, NULL, 'cosib_queries', 'bool', 255, 0, '0', '2012-06-27 13:23:18', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriestransfer_c', 'transfer_c', 'LBL_TRANSFER', NULL, 'При выборе данной опиции Вы можете ввести дату последнего трасфера из аэропорта. Историю изменения поля "Дата трансфера" можно увидеть в журнале изменений.', 'cosib_queries', 'bool', 255, 0, '0', '2012-07-05 07:38:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriestransfer_date_c', 'transfer_date_c', 'LBL_TRANSFER_DATE', NULL, 'История изменений поля сохраняется в журнале изменений', 'cosib_queries', 'datetimecombo', NULL, 0, NULL, '2012-07-05 07:37:53', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

--
-- Add structure for table `cosib_queries_cstm`
--

ALTER TABLE `cosib_queries_cstm` ADD `keys_storing_c` TINYINT(1) NULL DEFAULT '0', ADD `taxes_c` TINYINT(1) NULL DEFAULT '0', ADD `periodic_visit_c` TINYINT(1) NULL DEFAULT '0', ADD `noplan_visit_c` TINYINT(1) NULL DEFAULT '0', ADD `mail_service_c` TINYINT(1) NULL DEFAULT '0', ADD `preparation_realty_c` TINYINT(1) NULL DEFAULT '0', ADD `loss_c` TINYINT(1) NULL DEFAULT '0', ADD `help_client_c` TINYINT(1) NULL DEFAULT '0', ADD `transfer_c` TINYINT(1) NULL DEFAULT '0', ADD `transfer_date_c` DATETIME NULL DEFAULT NULL, ADD `another_c` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, ADD `message_client_c` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, ADD `date_periodic_visit_c` DATETIME NULL DEFAULT NULL, ADD `date_noplan_visit_c` DATETIME NULL DEFAULT NULL, ADD `date_visit_c` DATETIME NULL DEFAULT NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
