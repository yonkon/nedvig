-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2012 at 05:39 PM
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
-- Table structure for table `cosib_queries`
--

DROP TABLE IF EXISTS `cosib_queries`;
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
('d75b64e5-d50a-3eb5-9db5-4fc889ae97ce', NULL, '2012-06-01 09:21:24', '2012-06-28 13:02:52', '1', '1', NULL, 0, '1'),
('f3ca0929-a89c-6e84-7009-4fcee3b892b6', NULL, '2012-06-06 04:58:44', '2012-06-06 09:27:37', '1', '1', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosib_queries_cstm`
--

DROP TABLE IF EXISTS `cosib_queries_cstm`;
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
  `square_c` decimal(18,2) DEFAULT NULL,
  `credit_c` varchar(100) DEFAULT NULL,
  `view_on_mountains_c` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosib_queries_cstm`
--

REPLACE INTO `cosib_queries_cstm` (`id_c`, `type_of_query_c`, `status_desc_c`, `category_of_object_c`, `type_of_object_c`, `budget_c`, `additional_term_budget_c`, `province_c`, `status_c`, `coast_c`, `settlement_c`, `quantity_of_bedroom_c`, `remoteness_from_sea_c`, `view_of_sea_c`, `area_c`, `additional_desc_c`, `assigned_to_c`, `number_of_people_c`, `total_cost_c`, `currency_id`, `charge_c`, `prepayment_date_c`, `prepayment_size_c`, `charge_summ_date_c`, `payment_date_c`, `payment_size_c`, `documents_date_c`, `resolution_date_c`, `dni_begin_date_c`, `service_c`, `deposit_c`, `deposit_date_c`, `airport_road_c`, `dni_end_date_c`, `sphr_object_id_c`, `remoteness_from_commercial_c`, `square_c`, `credit_c`, `view_on_mountains_c`) VALUES
('22863544-138e-194f-8978-4fd083b2357e', 'buying', 'снять в аренду', 'commercialrealty', 'townhouse', 'price200_250', '', 'valencia', 'status1', 'alicante_costablanca', '', '3', 'm300_500', 1, 'green', 'ууцкуц', 'Петров', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, 'm300_500', NULL, '', '', NULL, NULL, 0),
('258fb9cf-f4a5-c4a3-1fa7-4fcca6c742a5', 'selling', '', 'newrealty', 'flat', 'price50_100', '', 'barcelona', 'status7', 'barcelona_costabrava', '', '1', 'm50_300', 0, 'green', '', 'fgdf', '1', 34234.000000, '', 423423.000000, '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '1', NULL, '2012-06-04', 'm50_300', NULL, 'd5e4d2d3-f63d-7b46-7509-4f952ee7187f', NULL, NULL, NULL, 0),
('426d6226-f831-77fc-1547-4fcee6fcf5c2', 'postsale', '', '', '', '', '', '', 'status27', '', '', '', '', 0, '', '', 'админ', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '', NULL, 'f166dd32-68b6-8591-3d7e-4e2c674ea963', NULL, NULL, NULL, 0),
('4fc7ccf4-fdb4-f99c-935a-4fcee2c9c020', 'postsale', '', '', 'flat', '', '', '', 'status25', '', '', '', '', 0, '', '', 'Петров', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, '', NULL, '17a41de5-cdd9-9bc3-99d0-4e2c7bfda237', NULL, NULL, NULL, 0),
('591f9887-d8f7-eef7-98da-4fcdbb56a11d', 'postsale', '', 'newrealty', 'flat', '', '', 'barcelona', 'status25', 'barcelona_costabrava', '1', '1', '', 0, '', '', 'Administrator', '1', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2012-06-21', '', NULL, '397df4bb-ca50-da51-b676-4f5db3134cbb', NULL, NULL, NULL, 0),
('9aa76cee-b2fe-5822-fb62-4fccb0538e5d', 'visa', '', '', '', '', '', '', 'status18', '', '', '', '', 0, '', '', 'sdfsd', '3', 23432.000000, '', 423.000000, '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '2012-06-04', '2012-06-04', NULL, '1', NULL, NULL, '', NULL, '', NULL, NULL, NULL, 0),
('d75b64e5-d50a-3eb5-9db5-4fc889ae97ce', 'bylease', 'рпарп попор плпл', 'secondrealty', '^flat^', '', '', 'alicante', 'status10', 'alicante_costablanca', '29', '4', 'm50_300', 1, 'green', 'testdescv\r\n', 'ttestadssigned', '1', 0.000000, '', 0.000000, '2012-06-01', NULL, '2012-06-01', '2012-06-01', NULL, '2012-06-01', '2012-06-01', '2012-06-01', '1', NULL, '2012-06-01', 'm300_500', NULL, '', 'm0_500', NULL, '', 0),
('f3ca0929-a89c-6e84-7009-4fcee3b892b6', 'selling', 'сатус он такой', 'secondrealty', '', '', '', '', 'status7', '', '', '', '', 0, '', '', 'вася', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '', NULL, 'c44531f4-4f9b-307c-978e-4e22cf1efae4', NULL, NULL, NULL, 0);

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
('cosib_queriestype_of_query_c', 'type_of_query_c', 'LBL_TYPE_OF_QUERY', NULL, NULL, 'cosib_queries', 'enum', 100, 1, ' buying', '2012-05-30 13:17:27', 0, 0, 0, 0, 1, 'true', 'ci_query_type_list', NULL, NULL, NULL),
('cosib_queriesstatus_desc_c', 'status_desc_c', 'LBL_STATUS_DESC', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-05-30 13:23:04', 0, 0, 0, 0, 1, 'true', NULL, '8', '200', NULL),
('cosib_queriescategory_of_object_c', 'category_of_object_c', 'LBL_CATEGORY_OF_OBJECT', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:47:43', 0, 0, 0, 0, 1, 'true', 'ci_category_of_object_list', NULL, NULL, NULL),
('cosib_queriestype_of_object_c', 'type_of_object_c', 'LBL_TYPE_OF_OBJECT', 'Зависит от типа запроса В случае продажи или сдачи в аренду Модуль Объекты. Ссылка на объект В случае покупки и снять в аренду Наполняется администратором системы', NULL, 'cosib_queries', 'multienum', 100, 0, NULL, '2012-06-06 04:57:07', 0, 1, 0, 0, 1, 'true', 'ci_type_of_object_list', NULL, NULL, NULL),
('cosib_queriesbudget_c', 'budget_c', 'LBL_BUDGET', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-04 13:44:29', 0, 1, 0, 0, 1, 'true', 'ci_budget_list', NULL, NULL, NULL),
('cosib_queriesadditional_term_budget_c', 'additional_term_budget_c', 'LBL_ADDITIONAL_TERM_BUDGET', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-05-31 06:50:30', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL),
('cosib_queriesprovince_c', 'province_c', 'LBL_PROVINCE', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-27 09:04:09', 0, 0, 0, 0, 1, 'true', 'query_province_list', NULL, NULL, NULL),
('cosib_queriesstatus_c', 'status_c', 'LBL_STATUS', 'Зависит от Типа запроса', NULL, 'cosib_queries', 'enum', 100, 1, 'status1', '2012-06-01 13:01:04', 0, 1, 0, 0, 1, 'true', 'queries_statuses_list', NULL, NULL, NULL),
('cosib_queriescoast_c', 'coast_c', 'LBL_COAST', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:52:42', 0, 0, 0, 0, 1, 'true', 'queries_coast_list', NULL, NULL, NULL),
('cosib_queriessettlement_c', 'settlement_c', 'LBL_SETTLEMENT', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 11:28:50', 0, 0, 0, 0, 1, 'true', 'queries_settlement_default_list', NULL, NULL, NULL),
('cosib_queriesquantity_of_bedroom_c', 'quantity_of_bedroom_c', 'LBL_QUANTITY_OF_BEDROOM', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-06 04:53:49', 0, 0, 0, 0, 1, 'true', 'ci_quantity_of_bedroom_list', NULL, NULL, NULL),
('cosib_queriesremoteness_from_sea_c', 'remoteness_from_sea_c', 'LBL_REMOTENESS_FROM_SEA', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду Наполняется администратором системы', NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-08 08:54:28', 0, 0, 0, 0, 1, 'true', 'ci_remoteness_from_sea_list', NULL, NULL, NULL),
('cosib_queriescredit_c', 'credit_c', 'LBL_CREDIT_C', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-27 12:14:30', 0, 0, 0, 0, 1, 'true', 'queries_credit_list', NULL, NULL, NULL),
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
('cosib_queriessquare_c', 'square_c', 'LBL_SQUARE', NULL, NULL, 'cosib_queries', 'decimal', 18, 0, NULL, '2012-06-27 12:13:32', 0, 0, 0, 0, 1, 'true', '2', NULL, NULL, NULL),
('cosib_queriesdni_end_date_c', 'dni_end_date_c', 'LBL_DNI_END_DATE', NULL, NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2012-06-04 13:25:31', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('cosib_queriesremoteness_from_commercial_c', 'remoteness_from_commercial_c', 'LBL_REMOTENESS_FROM_COMMERCIAL_C', NULL, NULL, 'cosib_queries', 'enum', 100, 0, NULL, '2012-06-28 09:44:48', 0, 0, 0, 0, 1, 'true', 'ci_remoteness_from_commercial_list', NULL, NULL, NULL),
('cosib_queriesview_on_mountains_c', 'view_on_mountains_c', 'LBL_VIEW_ON_MOUNTAINS', 'Зависит от типа запроса В случае продажи или сдачи в аренду графа не активна.  В случае покупки и снять в аренду', 'Выберете, если важен вид на море', 'cosib_queries', 'bool', 255, 0, '0', '2012-06-28 09:31:53', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
