/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DELETE FROM `fields_meta_data` WHERE `custom_module` = 'sphr_Object';

INSERT INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('sphr_Objectname_rus_c', 'name_rus_c', 'LBL_NAME_RUS', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 06:40:34', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectname_eng_c', 'name_eng_c', 'LBL_NAME_ENG', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 06:59:29', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectname_sp_c', 'name_sp_c', 'LBL_NAME_SP', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-04-23 07:05:25', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
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
('sphr_Objectparent_name', 'parent_name', 'LBL_FLEX_RELATE', NULL, NULL, 'sphr_Object', 'parent', 100, 0, NULL, '2012-07-30 15:28:31', 0, 0, 0, 0, 1, 'true', 'parent_type_display', NULL, NULL, NULL),
('sphr_Objectparent_type', 'parent_type', 'LBL_PARENT_TYPE', NULL, NULL, 'sphr_Object', 'parent_type', 255, 0, NULL, '2012-07-30 15:28:31', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectparent_id', 'parent_id', 'LBL_PARENT_ID', NULL, NULL, 'sphr_Object', 'id', 36, 0, NULL, '2012-07-30 15:28:32', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprovince_c', 'province_c', 'LBL_PROVINCE', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 16:58:59', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcoast_c', 'coast_c', 'LBL_COAST', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 16:59:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcommunity_c', 'community_c', 'LBL_COMMUNITY', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-01 17:00:02', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprovince_text_c', 'province_text_c', 'LBL_PROVINCE_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:43:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcoast_text_c', 'coast_text_c', 'LBL_COAST_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:43:50', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectcommunity_text_c', 'community_text_c', 'LBL_COMMUNITY_TEXT', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2012-08-06 08:44:19', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprovince_select_c', 'province_select_c', 'LBL_PROVINCE_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:02:13', 0, 0, 0, 0, 1, 'true', 'empty_list', NULL, NULL, NULL),
('sphr_Objectcoast_select_c', 'coast_select_c', 'LBL_COAST_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:02:38', 0, 0, 0, 0, 1, 'true', 'empty_list', NULL, NULL, NULL),
('sphr_Objectcommunity_select_c', 'community_select_c', 'LBL_COMMUNITY_SELECT', NULL, NULL, 'sphr_Object', 'enum', 100, 0, NULL, '2012-08-06 10:03:20', 0, 0, 0, 0, 1, 'true', 'empty_list', NULL, NULL, NULL),
('sphr_Objectprice_sale_int_c', 'price_sale_int_c', 'LBL_PRICE_SALE_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 11:47:13', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_sale_int_c', 'seller_price_sale_int_c', 'LBL_SELLER_PRICE_SALE_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 11:48:06', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectprice_rent_int_c', 'price_rent_int_c', 'LBL_PRICE_RENT_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 11:48:40', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('sphr_Objectseller_price_rent_int_c', 'seller_price_rent_int_c', 'LBL_SELLER_PRICE_RENT_INT', NULL, NULL, 'sphr_Object', 'int', 255, 0, NULL, '2012-08-06 11:49:22', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

DROP TABLE `sphr_object_cstm`;

CREATE TABLE IF NOT EXISTS `sphr_object_cstm` (
  `id_c` char(36) NOT NULL,
  `name_rus_c` varchar(255) DEFAULT NULL,
  `name_eng_c` varchar(255) DEFAULT NULL,
  `name_sp_c` varchar(255) DEFAULT NULL,
  `amount_commission_c` varchar(255) DEFAULT NULL,
  `number_bedroom_c` varchar(100) DEFAULT '1',
  `number_bathroom_c` varchar(100) DEFAULT '1',
  `total_area_c` int(255) DEFAULT NULL,
  `apartment_area_c` int(255) DEFAULT NULL,
  `sea_distance_c` int(255) DEFAULT NULL,
  `comm_center_distance_c` int(255) DEFAULT NULL,
  `complex_c` tinyint(1) DEFAULT '0',
  `view_sea_c` tinyint(1) DEFAULT '0',
  `view_mount_c` tinyint(1) DEFAULT '0',
  `view_forest_c` tinyint(1) DEFAULT '0',
  `view_park_c` tinyint(1) DEFAULT '0',
  `view_salt_lake_c` tinyint(1) DEFAULT '0',
  `view_golf_pole_c` tinyint(1) DEFAULT '0',
  `city_area_c` tinyint(1) DEFAULT '0',
  `green_area_c` tinyint(1) DEFAULT '0',
  `garage_c` tinyint(1) DEFAULT '0',
  `parking_area_c` tinyint(1) DEFAULT '0',
  `private_swimpool_c` tinyint(1) DEFAULT '0',
  `general_swimpool_c` tinyint(1) DEFAULT '0',
  `children_area_c` tinyint(1) DEFAULT '0',
  `sport_area_c` tinyint(1) DEFAULT '0',
  `terrace_c` tinyint(1) DEFAULT '0',
  `balcony_c` tinyint(1) DEFAULT '0',
  `solarium_c` tinyint(1) DEFAULT '0',
  `basement_c` tinyint(1) DEFAULT '0',
  `storeroom_c` tinyint(1) DEFAULT '0',
  `mebel_c` tinyint(1) DEFAULT '0',
  `kitchen_mebel_c` tinyint(1) DEFAULT '0',
  `life_equipment_c` tinyint(1) DEFAULT '0',
  `safe_c` tinyint(1) DEFAULT '0',
  `jacuzzi_c` tinyint(1) DEFAULT '0',
  `conditioner_c` tinyint(1) DEFAULT '0',
  `intelligent_house_c` tinyint(1) DEFAULT '0',
  `alarm_c` tinyint(1) DEFAULT '0',
  `heating_floor_c` tinyint(1) DEFAULT '0',
  `heating_c` tinyint(1) DEFAULT '0',
  `additional_description_c` text,
  `category_c` varchar(100) DEFAULT NULL,
  `nearest_airport_c` text,
  `object_status_c` text,
  `price_sale_c` varchar(255) DEFAULT NULL,
  `price_rent_c` varchar(255) DEFAULT NULL,
  `seller_price_sale_c` varchar(255) DEFAULT NULL,
  `seller_price_rent_c` varchar(255) DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `province_c` varchar(255) DEFAULT NULL,
  `coast_c` varchar(255) DEFAULT NULL,
  `community_c` varchar(255) DEFAULT NULL,
  `province_text_c` varchar(255) DEFAULT NULL,
  `coast_text_c` varchar(255) DEFAULT NULL,
  `community_text_c` varchar(255) DEFAULT NULL,
  `province_select_c` varchar(100) DEFAULT NULL,
  `coast_select_c` varchar(100) DEFAULT NULL,
  `community_select_c` varchar(100) DEFAULT NULL,
  `price_sale_int_c` int(255) DEFAULT NULL,
  `seller_price_sale_int_c` int(255) DEFAULT NULL,
  `price_rent_int_c` int(255) DEFAULT NULL,
  `seller_price_rent_int_c` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `sphr_object_provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `sphr_object_provinces` (`id`, `name`) VALUES
(1, 'Barcelona ,Girona / Барселона ,Жирона'),
(2, 'Tarragona / Таррагона'),
(3, 'Valencia / Валенсия'),
(4, 'Alicante / Аликанте'),
(5, 'Murcia / Мурсия'),
(6, 'Almeria / Альмерия'),
(7, 'Granada / Гранада'),
(8, 'Malaga / Малага'),
(9, 'Cádiz / Кадис'),
(10, 'Islas Baleares  / Балеарские острова'),
(11, 'Las Islas Canarias / Канарские острова');

CREATE TABLE IF NOT EXISTS `sphr_object_coasts` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

INSERT INTO `sphr_object_coasts` (`id`, `province_id`, `name`) VALUES
(1, 1, 'Costa Brava / Коста Брава'),
(2, 2, 'Costa Dorada / Коста Дорада'),
(3, 3, 'Costa Balencia / Коста Валенсия'),
(4, 4, 'Costa Blanca / Коста Бланка'),
(5, 5, 'Costa Calida / Коста Калида'),
(6, 6, 'Costa de Almería / Коста де Альмерия'),
(7, 7, 'Costa Tropical / Коста Тропикал'),
(8, 8, 'Costa del Sol / Коста дель Соль'),
(9, 9, 'Costa de la Luz / Коста де ла Лус'),
(10, 10, 'Mallorca / Майорка'),
(11, 11, 'Tenerife / Тенерифе');


CREATE TABLE IF NOT EXISTS `sphr_object_communities` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `coast_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sphr_object_communities` (`id`, `province_id`, `coast_id`, `name`) VALUES
(1, 1, 1, 'Pau / Пау'),
(2, 1, 1, 'Roses / Росес'),
(3, 1, 1, 'Empuriabrava / Эмпуриабрава'),
(4, 1, 1, 'Parc Recidensial Empúries / Парк Резиденциал Ембуриес'),
(5, 1, 1, 'L’Escala / Ла Эскала'),
(6, 1, 1, 'Pals / Пальс'),
(7, 1, 1, 'Palafrugell / Палафругель'),
(8, 1, 1, 'Sant Feliu de Guíxols / Сант Фелью де Гишольс'),
(9, 1, 1, 'Tossa de Mar / Тосса де Мар'),
(10, 1, 1, 'Lloret de Mar / Лорет де Мар'),
(11, 1, 1, 'Blanes / Бланес'),
(12, 1, 1, 'Arenys de Mar / Аренис дель Мар'),
(13, 1, 1, 'Pont de Vilomara / Понт де Виломара'),
(14, 1, 1, 'Barcelona / Барселона'),
(15, 1, 1, 'Olivella / Оливелла'),
(16, 2, 2, 'Calafell / Калафель'),
(17, 2, 2, 'Tarragona / Таррагона'),
(18, 2, 2, 'La Pineda / Ла Пинеда'),
(19, 2, 2, 'Salou / Салоу'),
(20, 2, 2, 'Cambrils / Камбрильс'),
(21, 2, 2, 'Miami Platja / Миами Плая'),
(22, 3, 3, 'Alboraya / Альборайя'),
(23, 3, 3, 'Sagunto / Сагунто'),
(24, 3, 3, 'Valencia / Валенсия'),
(25, 3, 3, 'Buñol / Буньоль'),
(26, 3, 3, 'Gandia / Гандия'),
(27, 3, 3, 'Олива / Oliva'),
(28, 3, 3, 'Játiva / Хатива'),
(29, 4, 4, 'Dénia / Дения'),
(30, 4, 4, 'Jávea / Хавея'),
(31, 4, 4, 'Benitachell / Бенитачель'),
(32, 4, 4, 'Teulada / Теулада'),
(33, 4, 4, 'Moraira / Морайра'),
(34, 4, 4, 'Benissa / Бенисса'),
(35, 4, 4, 'Calp / Кальпе'),
(36, 4, 4, 'Polop / Полоп'),
(37, 4, 4, 'Altea / Алтея'),
(38, 4, 4, 'La Nucia / Ла Нусия'),
(39, 4, 4, 'Alfaz del Pi / Альфаз дель Пи'),
(40, 4, 4, 'Albir / Альбир'),
(41, 4, 4, 'Castalla / Касталья'),
(42, 4, 4, 'Relleu / Релью'),
(43, 4, 4, 'Benidorm / Бенидорм'),
(44, 4, 4, 'Villajoyosa / Виллахойоса'),
(45, 4, 4, 'Aspe / Аспе'),
(46, 4, 4, 'El Campello / Эль Кампейо'),
(47, 4, 4, 'Muchamiel / Мучамьель'),
(48, 4, 4, 'Аликанте / Alicante'),
(49, 4, 4, 'Santa Pola / Санта Пола'),
(50, 4, 4, 'La Marina / Ла Марина'),
(51, 4, 4, 'San Fulgencio / Сан Фульгенсио'),
(52, 4, 4, 'Guardamar del Segura / Гуардамар дель Сегура'),
(53, 4, 4, 'Ciudad Quesada / Сиудад Кесада'),
(54, 4, 4, 'Rojales / Рохалес'),
(55, 4, 4, 'Daya Nueva / Дайя Нуэва'),
(56, 4, 4, 'Algorfa  / Альгорфа'),
(57, 4, 4, 'Torrevieja / Торревьеха'),
(58, 4, 4, 'Orihuela / Ориуэла'),
(59, 4, 4, 'Orihuela Costa / Ориуэла Коста'),
(60, 4, 4, 'Los Montesinos / Лос Монтесинос'),
(61, 4, 4, 'Pilar de la Horadada / Пилар де ла Орадада'),
(62, 5, 5, 'La Manga del Mar Menor / Ла Манга дель Мар Менор Мурсия'),
(63, 6, 6, 'Almería / Альмерия'),
(64, 7, 7, 'Granada / Гранада'),
(65, 8, 8, 'Malaga / Малага'),
(66, 9, 9, 'Cádiz / Кадис'),
(67, 10, 10, 'Mallorca / Майорка'),
(68, 11, 11, 'Tenerife / Тенерифе');

TRUNCATE TABLE `sphr_object_photo_c`;

ALTER TABLE `sphr_object_photo_c` DROP `photo`;

ALTER TABLE `sphr_object_photo_c` CHANGE `id` `id` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

UPDATE `fields_meta_data` SET `id` = 'sphr_Objectobject_status_c',`name` = 'object_status_c',`vname` = 'LBL_OBJECT_STATUS',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'multienum',`len` = 100,`required` = 1,`default_value` = NULL,`date_modified` = '2012-08-06 14:54:23',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'object_status_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectobject_status_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectparent_name',`name` = 'parent_name',`vname` = 'LBL_FLEX_RELATE',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'parent',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 14:55:48',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'parent_type_display',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectparent_name';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectprice_sale_int_c',`name` = 'price_sale_int_c',`vname` = 'LBL_PRICE_SALE_INT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'int',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 14:55:16',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectprice_sale_int_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectseller_price_sale_int_c',`name` = 'seller_price_sale_int_c',`vname` = 'LBL_SELLER_PRICE_SALE_INT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'int',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 14:55:04',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectseller_price_sale_int_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectprice_rent_int_c',`name` = 'price_rent_int_c',`vname` = 'LBL_PRICE_RENT_INT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'int',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 14:54:54',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectprice_rent_int_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectseller_price_rent_int_c',`name` = 'seller_price_rent_int_c',`vname` = 'LBL_SELLER_PRICE_RENT_INT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'int',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 14:54:44',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectseller_price_rent_int_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectprovince_select_c',`name` = 'province_select_c',`vname` = 'LBL_PROVINCE_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 10:15:25',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'province_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectprovince_select_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectcoast_select_c',`name` = 'coast_select_c',`vname` = 'LBL_COAST_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 10:15:55',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'coast_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectcoast_select_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectcommunity_select_c',`name` = 'community_select_c',`vname` = 'LBL_COMMUNITY_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-08-06 10:16:17',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'community_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectcommunity_select_c';

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;