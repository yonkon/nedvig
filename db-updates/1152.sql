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
('sphr_Clientcity_c', 'city_c', 'LBL_CITY', NULL, NULL, 'sphr_Client', 'enum', 100, 0, NULL, '2012-08-21 12:14:47', 0, 0, 0, 0, 1, 'true', 'cosib_province_country_pr_def_list', NULL, NULL, NULL),
('sphr_Clientcountry_c', 'country_c', 'LBL_COUNTRY', NULL, NULL, 'sphr_Client', 'enum', 100, 0, NULL, '2012-08-13 11:39:58', 0, 0, 0, 0, 1, 'true', 'cosib_country_list', NULL, NULL, NULL),
('sphr_Clientregion_c', 'region_c', 'LBL_REGION', NULL, NULL, 'sphr_Client', 'enum', 100, 0, NULL, '2012-08-21 12:15:27', 0, 0, 0, 0, 1, 'true', 'cosib_province_country_def_list', NULL, NULL, NULL),
('sphr_Clientvip_c', 'vip_c', 'LBL_VIP', NULL, NULL, 'sphr_Client', 'bool', 255, 0, '0', '2012-08-21 09:46:36', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);


ALTER TABLE `sphr_client_cstm` ADD `vip_c` TINYINT( 1 ) NULL DEFAULT '0';



UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%SPB%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%San Petersburgo%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Москва%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Moscu%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_33',city_c='Russia_pr_33_city_1',current_city_c='Рязань' WHERE current_address_c LIKE '%Рязань%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_32',city_c='Russia_pr_32_city_1',current_city_c='Ростов-на-дону' WHERE current_address_c LIKE '%Rostov del Don%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_5',current_city_c='Салехард' WHERE current_address_c LIKE '%Salekhard%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_1',current_city_c='Тюмень' WHERE current_address_c LIKE '%Tyumen%';