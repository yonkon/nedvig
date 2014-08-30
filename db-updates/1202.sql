-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 01:22 PM
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
-- Table structure for table `sphr_object_coasts`
--

DROP TABLE IF EXISTS `sphr_object_coasts`;
CREATE TABLE IF NOT EXISTS `sphr_object_coasts` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_object_coasts`
--

INSERT INTO `sphr_object_coasts` (`id`, `province_id`, `name`) VALUES
(1, 1, 'Коста Брава'),
(2, 2, 'Коста Дорада'),
(3, 3, 'Коста Валенсия'),
(4, 4, 'Коста Бланка'),
(5, 5, 'Коста Калида'),
(6, 6, 'Коста де Альмерия'),
(7, 7, 'Коста Тропикал'),
(8, 8, 'Коста дель Соль'),
(9, 9, 'Коста де ла Лус'),
(10, 10, 'Майорка'),
(11, 11, 'Тенерифе');

-- --------------------------------------------------------

--
-- Table structure for table `sphr_object_communities`
--

DROP TABLE IF EXISTS `sphr_object_communities`;
CREATE TABLE IF NOT EXISTS `sphr_object_communities` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `coast_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_object_communities`
--

INSERT INTO `sphr_object_communities` (`id`, `province_id`, `coast_id`, `name`) VALUES
(1, 1, 1, 'Пау'),
(2, 1, 1, 'Росес'),
(3, 1, 1, 'Эмпуриабрава'),
(4, 1, 1, 'Парк Резиденциал Ембуриес'),
(5, 1, 1, 'Ла Эскала'),
(6, 1, 1, 'Пальс'),
(7, 1, 1, 'Палафругель'),
(8, 1, 1, 'Сант Фелью де Гишольс'),
(9, 1, 1, 'Тосса де Мар'),
(10, 1, 1, 'Лорет де Мар'),
(11, 1, 1, 'Бланес'),
(12, 1, 1, 'Аренис дель Мар'),
(13, 1, 1, 'Понт де Виломара'),
(14, 1, 1, 'Барселона'),
(15, 1, 1, 'Оливелла'),
(16, 2, 2, 'Калафель'),
(17, 2, 2, 'Таррагона'),
(18, 2, 2, 'Ла Пинеда'),
(19, 2, 2, 'Салоу'),
(20, 2, 2, 'Камбрильс'),
(21, 2, 2, 'Миами Плая'),
(22, 3, 3, 'Альборайя'),
(23, 3, 3, 'Сагунто'),
(24, 3, 3, 'Валенсия'),
(25, 3, 3, 'Буньоль'),
(26, 3, 3, 'Гандия'),
(27, 3, 3, 'Олива'),
(28, 3, 3, 'JХатива'),
(29, 4, 4, 'Дения'),
(30, 4, 4, 'Хавея'),
(31, 4, 4, 'Бенитачель'),
(32, 4, 4, 'Теулада'),
(33, 4, 4, 'Морайра'),
(34, 4, 4, 'Бенисса'),
(35, 4, 4, 'Кальпе'),
(36, 4, 4, 'Полоп'),
(37, 4, 4, 'Алтея'),
(38, 4, 4, 'Ла Нусия'),
(39, 4, 4, 'Альфаз дель Пи'),
(40, 4, 4, 'Альбир'),
(41, 4, 4, 'Касталья'),
(42, 4, 4, 'Релью'),
(43, 4, 4, 'Бенидорм'),
(44, 4, 4, 'Виллахойоса'),
(45, 4, 4, 'Аспе'),
(46, 4, 4, 'Эль Кампейо'),
(47, 4, 4, 'Мучамьель'),
(48, 4, 4, 'Аликанте'),
(49, 4, 4, 'Санта Пола'),
(50, 4, 4, 'Ла Марина'),
(51, 4, 4, 'Сан Фульгенсио'),
(52, 4, 4, 'Гуардамар дель Сегура'),
(53, 4, 4, 'Сиудад Кесада'),
(54, 4, 4, 'Рохалес'),
(55, 4, 4, 'Дайя Нуэва'),
(56, 4, 4, 'Альгорфа'),
(57, 4, 4, 'Торревьеха'),
(58, 4, 4, 'Ориуэла'),
(59, 4, 4, 'Ориуэла Коста'),
(60, 4, 4, 'Лос Монтесинос'),
(61, 4, 4, 'Пилар де ла Орадада'),
(62, 5, 5, 'Ла Манга дель Мар Менор Мурсия'),
(63, 6, 6, 'Альмерия'),
(64, 7, 7, 'Гранада'),
(65, 8, 8, 'Малага'),
(66, 9, 9, 'Кадис'),
(67, 10, 10, 'Майорка'),
(68, 11, 11, 'Тенерифе');

-- --------------------------------------------------------

--
-- Table structure for table `sphr_object_provinces`
--

DROP TABLE IF EXISTS `sphr_object_provinces`;
CREATE TABLE IF NOT EXISTS `sphr_object_provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_object_provinces`
--

INSERT INTO `sphr_object_provinces` (`id`, `name`) VALUES
(1, 'Барселона ,Жирона'),
(2, 'Таррагона'),
(3, 'Валенсия'),
(4, 'Аликанте'),
(5, 'Мурсия'),
(6, 'Альмерия'),
(7, 'Гранада'),
(8, 'Малага'),
(9, 'Кадис'),
(10, 'Балеарские острова'),
(11, 'Канарские острова');


--
-- Dumping data for table `fields_meta_data`
--

UPDATE `fields_meta_data` SET `id` = 'sphr_Objectcoast_select_c',`name` = 'coast_select_c',`vname` = 'LBL_COAST_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-09-04 09:45:38',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'queries_coast_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectcoast_select_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectcommunity_select_c',`name` = 'community_select_c',`vname` = 'LBL_COMMUNITY_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-09-04 09:47:11',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'queries_settlement_default_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectcommunity_select_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Objectprovince_select_c',`name` = 'province_select_c',`vname` = 'LBL_PROVINCE_SELECT',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Object',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-09-04 09:46:39',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'query_province_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Objectprovince_select_c';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
