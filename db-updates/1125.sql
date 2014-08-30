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
('Callsparent_category_c', 'parent_category_c', 'LBL_PARENT_CATEGORY_C', NULL, NULL, 'Calls', 'enum', 100, 0, NULL, '2012-08-15 15:20:59', 0, 0, 0, 0, 1, 'true', 'activities_parent_category_all', NULL, NULL, NULL),
('Meetingsparent_category_c', 'parent_category_c', 'LBL_PARENT_CATEGORY_C', NULL, NULL, 'Meetings', 'enum', 100, 0, NULL, '2012-08-15 15:19:56', 0, 0, 0, 0, 1, 'true', 'activities_parent_category_all', NULL, NULL, NULL),
('Tasksparent_category_c', 'parent_category_c', 'LBL_PARENT_CATEGORY_C', NULL, NULL, 'Tasks', 'enum', 100, 0, NULL, '2012-08-15 15:18:37', 0, 0, 0, 0, 1, 'true', 'activities_parent_category_all', NULL, NULL, NULL),
('Notesparent_category_c', 'parent_category_c', 'LBL_PARENT_CATEGORY', NULL, NULL, 'Notes', 'enum', 100, 0, 'sphr_Client_owner', '2012-08-15 13:16:30', 0, 0, 0, 0, 1, 'true', 'activities_parent_category_all', NULL, NULL, NULL),
('cosib_queriestype_of_object_relate_c', 'type_of_object_relate_c', 'LBL_TYPE_OF_OBJECT_RELATE', 'В случае продажи или сдачи в аренду, постпродажи  Модуль Объекты. Ссылка на объект', NULL, 'cosib_queries', 'relate', 255, 0, NULL, '2012-08-14 09:01:28', 0, 1, 0, 0, 1, 'true', NULL, 'sphr_Object', 'sphr_object_id_c', NULL),
('cosib_queriesstatus_desc_c', 'status_desc_c', 'LBL_STATUS_DESC', NULL, NULL, 'cosib_queries', 'text', NULL, 0, NULL, '2012-08-14 06:52:02', 0, 0, 0, 0, 1, 'true', NULL, '8', '50', NULL),
('sphr_Clientbirthday_c', 'birthday_c', 'LBL_BIRTHDAY', NULL, NULL, 'sphr_Client', 'date', NULL, 0, NULL, '2012-08-14 03:56:49', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientcurrent_city_c', 'current_city_c', 'LBL_CURRENT_CITY', NULL, NULL, 'sphr_Client', 'varchar', 50, 0, NULL, '2012-08-13 15:25:06', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientcurrent_country_c', 'current_country_c', 'LBL_CURRENT_COUNTRY', NULL, NULL, 'sphr_Client', 'varchar', 50, 0, NULL, '2012-08-13 15:24:32', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientemail_2_c', 'email_2_c', 'LBL_EMAIL_2', NULL, NULL, 'sphr_Client', 'varchar', 200, 0, NULL, '2012-08-13 12:26:35', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientzagran_name_c', 'zagran_name_c', 'LBL_ZAGRAN_NAME', NULL, NULL, 'sphr_Client', 'varchar', 200, 0, NULL, '2012-08-13 12:26:17', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientmiddle_name_c', 'middle_name_c', 'LBL_MIDDLE_NAME', NULL, NULL, 'sphr_Client', 'varchar', 200, 0, NULL, '2012-08-13 12:26:05', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Clientcountry_c', 'country_c', 'LBL_COUNTRY', NULL, NULL, 'sphr_Client', 'enum', 100, 0, NULL, '2012-08-13 11:39:58', 0, 0, 0, 0, 1, 'true', 'cosib_country_list', NULL, NULL, NULL),
('sphr_Clientregion_c', 'region_c', 'LBL_REGION', NULL, NULL, 'sphr_Client', 'enum', 100, 0, 'Active', '2012-08-13 11:39:44', 0, 0, 0, 0, 1, 'true', 'cosib_province_country_def_list', NULL, NULL, NULL),
('sphr_Clientcity_c', 'city_c', 'LBL_CITY', NULL, NULL, 'sphr_Client', 'enum', 100, 0, NULL, '2012-08-13 11:39:24', 0, 0, 0, 0, 1, 'true', 'cosib_province_country__pr_def_list', NULL, NULL, NULL),
('sphr_Objectparent_name', 'parent_name', 'LBL_FLEX_RELATE', NULL, NULL, 'sphr_Object', 'parent', 100, 0, NULL, '2012-08-06 14:55:48', 0, 1, 0, 0, 1, 'true', 'parent_type_display', NULL, NULL, NULL),
('sphr_Objectparent_type', 'parent_type', 'LBL_PARENT_TYPE', NULL, NULL, 'sphr_Object', 'parent_type', 255, 0, NULL, '2012-08-06 14:55:48', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectparent_id', 'parent_id', 'LBL_PARENT_ID', NULL, NULL, 'sphr_Object', 'id', 36, 0, NULL, '2012-08-06 14:55:48', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprice_sale_int_c', 'price_sale_int_c', 'LBL_PRICE_SALE_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 14:55:16', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_sale_int_c', 'seller_price_sale_int_c', 'LBL_SELLER_PRICE_SALE_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 14:55:04', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprice_rent_int_c', 'price_rent_int_c', 'LBL_PRICE_RENT_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 14:54:54', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_rent_int_c', 'seller_price_rent_int_c', 'LBL_SELLER_PRICE_RENT_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 14:54:44', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectobject_status_c', 'object_status_c', 'LBL_OBJECT_STATUS', NULL, NULL, 'sphr_Object', 'multienum', 100, 1, NULL, '2012-08-06 14:54:23', 0, 1, 0, 0, 1, 'true', 'object_status_list', NULL, NULL, NULL),
('sphr_Objectcommunity_select_c', 'community_select_c', 'LBL_COMMUNITY_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:16:17', 0, 0, 0, 0, 1, 'true', 'community_list', NULL, NULL, NULL),
('sphr_Objectcoast_select_c', 'coast_select_c', 'LBL_COAST_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:15:55', 0, 0, 0, 0, 1, 'true', 'coast_list', NULL, NULL, NULL),
('sphr_Objectprovince_select_c', 'province_select_c', 'LBL_PROVINCE_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:15:25', 0, 0, 0, 0, 1, 'true', 'province_list', NULL, NULL, NULL),
('sphr_Objectcommunity_text_c', 'community_text_c', 'LBL_COMMUNITY_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:44:19', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcoast_text_c', 'coast_text_c', 'LBL_COAST_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:43:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprovince_text_c', 'province_text_c', 'LBL_PROVINCE_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:43:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcommunity_c', 'community_c', 'LBL_COMMUNITY', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 17:00:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcoast_c', 'coast_c', 'LBL_COAST', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 16:59:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprovince_c', 'province_c', 'LBL_PROVINCE', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 16:58:59', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprice_rent_c', 'price_rent_c', 'LBL_PRICE_RENT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-07-30 15:02:08', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

ALTER TABLE `sphr_client_cstm` ADD `country_c` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
ADD `region_c` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
ADD `city_c` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%SPB%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%San Petersburgo%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Москва%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Moscu%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_33',city_c='Russia_pr_33_city_1',current_city_c='Рязань' WHERE current_address_c LIKE '%Рязань%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_32',city_c='Russia_pr_32_city_1',current_city_c='Ростов-на-дону' WHERE current_address_c LIKE '%Rostov del Don%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_5',current_city_c='Салехард' WHERE current_address_c LIKE '%Salekhard%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_1',current_city_c='Тюмень' WHERE current_address_c LIKE '%Tyumen%';

UPDATE sphr_client AS sc JOIN sphr_client_cstm AS scc ON sc.id = scc.id_c SET sc.phone_fax = substring( scc.email_2_c, LENGTH( 'skype: ' ) +1 ) WHERE locate( 'skype: ', scc.email_2_c ) >0 AND scc.email_2_c <> 'skype: ';
UPDATE sphr_client_cstm AS scc  SET scc.email_2_c='' WHERE locate( 'skype: ', scc.email_2_c ) >0;

--
-- Table structure for table `notes_cstm`
--

CREATE TABLE IF NOT EXISTS `notes_cstm` (
  `id_c` char(36) NOT NULL,
  `parent_category_c` varchar(100) DEFAULT 'sphr_Client_owner',
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `tasks_cstm`
--

CREATE TABLE IF NOT EXISTS `tasks_cstm` (
  `id_c` char(36) NOT NULL,
  `parent_category_c` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for tables `calls_cstm and meetings_cstm`
--

ALTER TABLE `calls_cstm` ADD `parent_category_c` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;
ALTER TABLE `meetings_cstm` ADD `parent_category_c` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;