-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2012 at 09:23 AM
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
-- Table structure for table `sphr_client`
--

CREATE TABLE IF NOT EXISTS `sphr_client` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(20) DEFAULT NULL,
  `phone_mobile` varchar(20) DEFAULT NULL,
  `phone_work` varchar(20) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(20) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `address_post` varchar(255) DEFAULT NULL,
  `status_description` text,
  `passport_type` varchar(100) DEFAULT 'russian',
  `passport_series` int(4) DEFAULT NULL,
  `passport_number` int(6) DEFAULT NULL,
  `source` varchar(100) DEFAULT 'mk1',
  `status` varchar(100) DEFAULT 'lead',
  `passport_foreigner_ser_and_num` varchar(255) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_issued` varchar(255) DEFAULT NULL,
  `address_temporary` varchar(255) DEFAULT NULL,
  `address_permanent` varchar(255) DEFAULT NULL,
  `address_actual` varchar(200) DEFAULT NULL,
  `addressl_actual` varchar(255) DEFAULT NULL,
  `addressl_legal` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `inn_and_kpp` varchar(20) DEFAULT NULL,
  `account_and_bank` varchar(20) DEFAULT NULL,
  `name_general_director` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `last_and_middle_name` varchar(255) DEFAULT NULL,
  `_id_c` char(36) DEFAULT NULL,
  `_id1_c` char(36) DEFAULT NULL,
  `passport_first_name` varchar(255) DEFAULT NULL,
  `passport_last_name` varchar(255) DEFAULT NULL,
  `passport_middle_name` varchar(255) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`description`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sphr_client`
--

UPDATE `sphr_client` SET `id` = '935d02c6-5569-29ca-4753-4fe2e6289194',`phone_home` = '',`phone_mobile` = '',`email` = 'bishop505@mail.ru' WHERE `sphr_client`.`id` = '935d02c6-5569-29ca-4753-4fe2e6289194';
UPDATE `sphr_client` SET `id` = '9e05069d-7c32-b0c2-9138-4fe2e66401b3',`phone_home` = '',`phone_mobile` = '597 07 68',`email` = 'rcer@mail.ru' WHERE `sphr_client`.`id` = '9e05069d-7c32-b0c2-9138-4fe2e66401b3';
UPDATE `sphr_client` SET `id` = 'a76b0bb8-66c1-8ea2-cedb-4fe2e61c124d',`phone_home` = '',`phone_mobile` = '+ 7 921 744-32-43',`email` = 'jporcelain@yandex.ru' WHERE `sphr_client`.`id` = 'a76b0bb8-66c1-8ea2-cedb-4fe2e61c124d';
UPDATE `sphr_client` SET `id` = 'b1b10fb8-47fe-2651-4182-4fe2e6d8c271',`phone_home` = '',`phone_mobile` = '+ 358 40 043-64-12',`email` = 'maxim@maximcar.eu' WHERE `sphr_client`.`id` = 'b1b10fb8-47fe-2651-4182-4fe2e6d8c271';
UPDATE `sphr_client` SET `id` = 'bbe00958-eabf-f945-83df-4fe2e6f230a6',`phone_home` = '',`phone_mobile` = '+ 7 911 843-18-60',`email` = '9749275@mail.ru' WHERE `sphr_client`.`id` = 'bbe00958-eabf-f945-83df-4fe2e6f230a6';
UPDATE `sphr_client` SET `id` = 'c6880841-f4a8-00d0-2151-4fe2e6341dfb',`phone_home` = '',`phone_mobile` = '+ 7 911 220-90-47',`email` = 'rmakulov@yandex.ru' WHERE `sphr_client`.`id` = 'c6880841-f4a8-00d0-2151-4fe2e6341dfb';
UPDATE `sphr_client` SET `id` = 'd0ef0312-b43b-ae5a-1b9d-4fe2e62d87d8',`phone_home` = '+ 7 812 963-03-39',`phone_mobile` = '',`email` = 'viktoriamelnikova@gmail.com' WHERE `sphr_client`.`id` = 'd0ef0312-b43b-ae5a-1b9d-4fe2e62d87d8';
UPDATE `sphr_client` SET `id` = 'd8df06ba-1dd3-391a-ad30-4fe2e69195ed',`phone_home` = '+ 7 812 927-39-56',`phone_mobile` = '',`email` = 'gtsspb@mail.ru' WHERE `sphr_client`.`id` = 'd8df06ba-1dd3-391a-ad30-4fe2e69195ed';
UPDATE `sphr_client` SET `id` = 'df7308dc-63f2-8e6d-a1cb-4fe2e6bf6ad9',`phone_home` = '',`phone_mobile` = '+ 7 921 889-61-21',`email` = 'elena-stepashova@mail.ru' WHERE `sphr_client`.`id` = 'df7308dc-63f2-8e6d-a1cb-4fe2e6bf6ad9';
UPDATE `sphr_client` SET `id` = 'e57e0e9c-8521-3508-77c8-4fe2e664aeac',`phone_home` = '',`phone_mobile` = '+ 7 904 339-55-36',`email` = 'duglas_no@rambler.ru' WHERE `sphr_client`.`id` = 'e57e0e9c-8521-3508-77c8-4fe2e664aeac';
UPDATE `sphr_client` SET `id` = 'e9df04e4-94a8-7bd6-579f-4fe2e6211556',`phone_home` = '+ 7 812 940-41-30',`phone_mobile` = '',`email` = '37t@mail.ru' WHERE `sphr_client`.`id` = 'e9df04e4-94a8-7bd6-579f-4fe2e6211556';
UPDATE `sphr_client` SET `id` = 'ef2c0bda-61f6-f6aa-e326-4fe2e65331df',`phone_home` = '',`phone_mobile` = '+ 7 963 324-18-68',`email` = 'helena-ori@yandex.ru' WHERE `sphr_client`.`id` = 'ef2c0bda-61f6-f6aa-e326-4fe2e65331df';
UPDATE `sphr_client` SET `id` = 'f5ca0c3f-72b2-ba41-4be2-4fe2e64ceeec',`phone_home` = '',`phone_mobile` = '+ 7 911 295-70-80',`email` = 'chmaxim777@mail.ru' WHERE `sphr_client`.`id` = 'f5ca0c3f-72b2-ba41-4be2-4fe2e64ceeec';
UPDATE `sphr_client` SET `id` = 'fc570d07-38ed-8f5a-f266-4fe2e60a8301',`phone_home` = '',`phone_mobile` = '+ 7 981 720-98-92',`email` = 'o.sedunov@mail.ru' WHERE `sphr_client`.`id` = 'fc570d07-38ed-8f5a-f266-4fe2e60a8301';
UPDATE `sphr_client` SET `id` = '103ab0e6-f6c8-9f51-acff-4fe2e64a6d18',`phone_home` = '',`phone_mobile` = '+ 7 904 551-48-71',`email` = 'mariya_spb@inbox.ru' WHERE `sphr_client`.`id` = '103ab0e6-f6c8-9f51-acff-4fe2e64a6d18';
UPDATE `sphr_client` SET `id` = '10a41265-4bc9-46ce-ce48-4fe2e6c49aa6',`phone_home` = '',`phone_mobile` = '+ 7 950 012-65-70',`email` = 'viktorrlv@rambler.ru' WHERE `sphr_client`.`id` = '10a41265-4bc9-46ce-ce48-4fe2e6c49aa6';
UPDATE `sphr_client` SET `id` = '110e4a1a-1ff8-90f8-5770-4fe2e69c5618',`phone_home` = '',`phone_mobile` = '',`email` = 'dinamo888@rambler.ru' WHERE `sphr_client`.`id` = '110e4a1a-1ff8-90f8-5770-4fe2e69c5618';
UPDATE `sphr_client` SET `id` = '11819b9c-332b-3b57-d36d-4fe2e6937ddc',`phone_home` = '',`phone_mobile` = '+ 7 916 903-07-93',`email` = 'vzorichev@yandex.ru' WHERE `sphr_client`.`id` = '11819b9c-332b-3b57-d36d-4fe2e6937ddc';
UPDATE `sphr_client` SET `id` = '11eb1d5c-f9c7-3161-a930-4fe2e6a18511',`phone_home` = '',`phone_mobile` = '+ 7 910 453-34-73',`email` = 'annaroza@mail.ru' WHERE `sphr_client`.`id` = '11eb1d5c-f9c7-3161-a930-4fe2e6a18511';
UPDATE `sphr_client` SET `id` = '124f4dc2-0607-e360-3808-4fe2e6ccf8cb',`phone_home` = '+ 7 495 502-61-57',`phone_mobile` = '',`email` = 'venta78@yandex.ru' WHERE `sphr_client`.`id` = '124f4dc2-0607-e360-3808-4fe2e6ccf8cb';
UPDATE `sphr_client` SET `id` = '12b2b9b1-bcd2-6c97-057b-4fe2e6b97f0d',`phone_home` = '',`phone_mobile` = '+ 7 915 069-96-91',`email` = 'ykoshkin@mail.ru' WHERE `sphr_client`.`id` = '12b2b9b1-bcd2-6c97-057b-4fe2e6b97f0d';
UPDATE `sphr_client` SET `id` = '132920c0-fd13-9c9b-3c72-4fe2e61a88a9',`phone_home` = '',`phone_mobile` = '+ 7 910 904-11-44',`email` = 'agaltsovani@mail.ru' WHERE `sphr_client`.`id` = '132920c0-fd13-9c9b-3c72-4fe2e61a88a9';
UPDATE `sphr_client` SET `id` = '139708ba-24f1-60e8-93a2-4fe2e690e6f0',`phone_home` = '+ 7 495 507-10-41',`phone_mobile` = '',`email` = 'isaev@advalue.ru' WHERE `sphr_client`.`id` = '139708ba-24f1-60e8-93a2-4fe2e690e6f0';
UPDATE `sphr_client` SET `id` = '13fa5633-adad-fcfe-611f-4fe2e672d370',`phone_home` = '',`phone_mobile` = '',`email` = 'alexey.kulik@alcoa.com' WHERE `sphr_client`.`id` = '13fa5633-adad-fcfe-611f-4fe2e672d370';
UPDATE `sphr_client` SET `id` = '146c8e71-e94c-d805-a852-4fe2e61713b7',`phone_home` = '',`phone_mobile` = '+ 7 903 596-26-46',`email` = 'ivs55@list.ru' WHERE `sphr_client`.`id` = '146c8e71-e94c-d805-a852-4fe2e61713b7';
UPDATE `sphr_client` SET `id` = '14db2a8b-83fd-c28d-600d-4fe2e63e8b42',`phone_home` = '',`phone_mobile` = '+ 7 916 531-67-95',`email` = 'zahir3@gmail.com' WHERE `sphr_client`.`id` = '14db2a8b-83fd-c28d-600d-4fe2e63e8b42';
UPDATE `sphr_client` SET `id` = '157b2349-c01c-aacb-531f-4fe2e60225f7',`phone_home` = '+ 7 495 740-83-21',`phone_mobile` = '',`email` = 'elle63@mail.ru' WHERE `sphr_client`.`id` = '157b2349-c01c-aacb-531f-4fe2e60225f7';
UPDATE `sphr_client` SET `id` = '1613b23f-7967-3e0c-0b89-4fe2e6a35c78',`phone_home` = '',`phone_mobile` = '+ 7 905 572-77-17',`email` = 'le-de-pe@mail.ru' WHERE `sphr_client`.`id` = '1613b23f-7967-3e0c-0b89-4fe2e6a35c78';
UPDATE `sphr_client` SET `id` = '16a8fcf5-9ca1-de8a-c2d2-4fe2e6e4f9f8',`phone_home` = '',`phone_mobile` = '+ 7 926 314-91-84',`email` = '50gull@mail.ru' WHERE `sphr_client`.`id` = '16a8fcf5-9ca1-de8a-c2d2-4fe2e6e4f9f8';
UPDATE `sphr_client` SET `id` = '17382e4e-573f-dc77-3a3b-4fe2e6c5bac2',`phone_home` = '',`phone_mobile` = '+ 7 916 792-12-58',`email` = 'oooludmila@mail.ru' WHERE `sphr_client`.`id` = '17382e4e-573f-dc77-3a3b-4fe2e6c5bac2';
UPDATE `sphr_client` SET `id` = '17ce0647-7505-8194-ceda-4fe2e6d248c6',`phone_home` = '',`phone_mobile` = '+ 7 916 060-02-21',`email` = 'vovaerema@gmail.com' WHERE `sphr_client`.`id` = '17ce0647-7505-8194-ceda-4fe2e6d248c6';
UPDATE `sphr_client` SET `id` = '18674ce3-60fc-d082-38ac-4fe2e6f391bb',`phone_home` = '',`phone_mobile` = '+ 7 916 137-50-24',`email` = 'lsk3@yandex.ru' WHERE `sphr_client`.`id` = '18674ce3-60fc-d082-38ac-4fe2e6f391bb';
UPDATE `sphr_client` SET `id` = '190c4704-e7e5-b6bd-bb89-4fe2e618c277',`phone_home` = '',`phone_mobile` = '+ 7 926 355-05-47',`email` = 'mvjirnova@mail.ru' WHERE `sphr_client`.`id` = '190c4704-e7e5-b6bd-bb89-4fe2e618c277';
UPDATE `sphr_client` SET `id` = '19a45c0a-e3ef-cf40-44fc-4fe2e685e14d',`phone_home` = '',`phone_mobile` = '',`email` = 'rod.skorik@gmail.com' WHERE `sphr_client`.`id` = '19a45c0a-e3ef-cf40-44fc-4fe2e685e14d';
UPDATE `sphr_client` SET `id` = '1a343df0-a519-0e00-d1ff-4fe2e657b938',`phone_home` = '',`phone_mobile` = '+ 7 985 920-99-11',`email` = '9209911@mail.ru' WHERE `sphr_client`.`id` = '1a343df0-a519-0e00-d1ff-4fe2e657b938';
UPDATE `sphr_client` SET `id` = '1ac04f72-8059-ac78-ff06-4fe2e68e5497',`phone_home` = '',`phone_mobile` = '+ 7 963 324-27-64',`email` = 'aliska_samara@list.ru' WHERE `sphr_client`.`id` = '1ac04f72-8059-ac78-ff06-4fe2e68e5497';
UPDATE `sphr_client` SET `id` = '1b53af5e-8414-0adb-1c78-4fe2e60ed8b8',`phone_home` = '',`phone_mobile` = '+ 7 921 644-26-02',`email` = 'A-KKK@mail.ru' WHERE `sphr_client`.`id` = '1b53af5e-8414-0adb-1c78-4fe2e60ed8b8';
UPDATE `sphr_client` SET `id` = '1c026c54-4c30-77d1-7c8c-4fe2e6798f79',`phone_home` = '',`phone_mobile` = '+ 7 903 229-25-34',`email` = 'i.eleskina@mail.ru' WHERE `sphr_client`.`id` = '1c026c54-4c30-77d1-7c8c-4fe2e6798f79';
UPDATE `sphr_client` SET `id` = '1c9ba9ac-bcee-af5d-323a-4fe2e6eed5ff',`phone_home` = '',`phone_mobile` = '+ 7 912 815-17-75',`email` = 'panchik77@mail.ru' WHERE `sphr_client`.`id` = '1c9ba9ac-bcee-af5d-323a-4fe2e6eed5ff';
UPDATE `sphr_client` SET `id` = '1d2cee8e-218a-ac38-58f2-4fe2e6aa6420',`phone_home` = '',`phone_mobile` = '+ 7 926 181-43-13',`email` = 'melnikov1977@mail.ru' WHERE `sphr_client`.`id` = '1d2cee8e-218a-ac38-58f2-4fe2e6aa6420';
UPDATE `sphr_client` SET `id` = '1dce54ea-d77b-3077-a994-4fe2e6d83f40',`phone_home` = '+ 7 495 544-43-29',`phone_mobile` = '+ 7 916 100-51-16',`email` = 'lizunova@vltrakt.ru' WHERE `sphr_client`.`id` = '1dce54ea-d77b-3077-a994-4fe2e6d83f40';
UPDATE `sphr_client` SET `id` = '1e6bad26-037e-47f9-f2b2-4fe2e64b5094',`phone_home` = '',`phone_mobile` = '+ 7 921 780-88-78',`email` = 'shtesh@rambler.ru' WHERE `sphr_client`.`id` = '1e6bad26-037e-47f9-f2b2-4fe2e64b5094';
UPDATE `sphr_client` SET `id` = '1f10c00d-6d0c-d05a-d582-4fe2e67ae823',`phone_home` = '',`phone_mobile` = '+ 7 905 754-15-74',`email` = 'o.bankov@mail.ru' WHERE `sphr_client`.`id` = '1f10c00d-6d0c-d05a-d582-4fe2e67ae823';
UPDATE `sphr_client` SET `id` = '1fb19492-cd0d-c432-280d-4fe2e60b6c6c',`phone_home` = '',`phone_mobile` = '+ 7 916 680-71-06',`email` = 'bazhina@ssnab.ru' WHERE `sphr_client`.`id` = '1fb19492-cd0d-c432-280d-4fe2e60b6c6c';
UPDATE `sphr_client` SET `id` = '20545c2c-0c68-2ebd-9e52-4fe2e6f15c3c',`phone_home` = '',`phone_mobile` = '+ 7 985 922-34-32',`email` = 'atlant.45@mail.ru' WHERE `sphr_client`.`id` = '20545c2c-0c68-2ebd-9e52-4fe2e6f15c3c';
UPDATE `sphr_client` SET `id` = '20f32f1e-deb2-9751-c85e-4fe2e6961656',`phone_home` = '',`phone_mobile` = '+ 7 915 027-37-77',`email` = 'dmm1331@gmail.com' WHERE `sphr_client`.`id` = '20f32f1e-deb2-9751-c85e-4fe2e6961656';
UPDATE `sphr_client` SET `id` = '218cc85c-aa34-c6b4-eb1e-4fe2e60cb569',`phone_home` = '',`phone_mobile` = '+ 7 925 829-08-78',`email` = 'afoninaiv@mail.ru' WHERE `sphr_client`.`id` = '218cc85c-aa34-c6b4-eb1e-4fe2e60cb569';
UPDATE `sphr_client` SET `id` = '2227e547-86e2-c059-6c98-4fe2e6c327bd',`phone_home` = '',`phone_mobile` = '+ 7 910 706-05-90',`email` = 'a.v.sots@gmail.com' WHERE `sphr_client`.`id` = '2227e547-86e2-c059-6c98-4fe2e6c327bd';
UPDATE `sphr_client` SET `id` = '22c4b436-cc2c-6180-746b-4fe2e62d600d',`phone_home` = '',`phone_mobile` = '+ 7 926 522-14-82',`email` = 'gulgena@yandex.ru' WHERE `sphr_client`.`id` = '22c4b436-cc2c-6180-746b-4fe2e62d600d';
UPDATE `sphr_client` SET `id` = '236e90d9-4dad-6056-6050-4fe2e6f6f0e5',`phone_home` = '',`phone_mobile` = '+ 7 903 724-87-70',`email` = 'meletnov@yandex.ru' WHERE `sphr_client`.`id` = '236e90d9-4dad-6056-6050-4fe2e6f6f0e5';
UPDATE `sphr_client` SET `id` = '24126ee8-562d-d080-8254-4fe2e6848b89',`phone_home` = '',`phone_mobile` = '+ 7 499 343-51-27',`email` = 'samshit72@mail.ru' WHERE `sphr_client`.`id` = '24126ee8-562d-d080-8254-4fe2e6848b89';
UPDATE `sphr_client` SET `id` = '24a8763c-0767-a01f-1248-4fe2e666a788',`phone_home` = '',`phone_mobile` = '+ 7 911 552-66-25',`email` = 'pbu5@yandex.ru' WHERE `sphr_client`.`id` = '24a8763c-0767-a01f-1248-4fe2e666a788';
UPDATE `sphr_client` SET `id` = '254d92e9-87bb-b7a2-d064-4fe2e652b7b9',`phone_home` = '',`phone_mobile` = '+ 7 926 603-45-18',`email` = 'iz322@mail.ru' WHERE `sphr_client`.`id` = '254d92e9-87bb-b7a2-d064-4fe2e652b7b9';
UPDATE `sphr_client` SET `id` = '25e1129c-f725-abfa-f07c-4fe2e619902d',`phone_home` = '',`phone_mobile` = '+ 7 916 395-78-40',`email` = 'erik.47@mail.ru' WHERE `sphr_client`.`id` = '25e1129c-f725-abfa-f07c-4fe2e619902d';
UPDATE `sphr_client` SET `id` = '2679fbf1-504b-5d7e-70f1-4fe2e62b69e1',`phone_home` = '',`phone_mobile` = '+ 7 919 017-60-16',`email` = 'simanovichs@mail.ru' WHERE `sphr_client`.`id` = '2679fbf1-504b-5d7e-70f1-4fe2e62b69e1';
UPDATE `sphr_client` SET `id` = '2718fe56-29d0-a269-87ea-4fe2e67951f3',`phone_home` = '',`phone_mobile` = '+ 7 916 408-15-66',`email` = 'juls1988@yandex.ru' WHERE `sphr_client`.`id` = '2718fe56-29d0-a269-87ea-4fe2e67951f3';
UPDATE `sphr_client` SET `id` = '27bc8d02-2ddd-b7d3-eb2a-4fe2e6349649',`phone_home` = '',`phone_mobile` = '+ 7 963 753-97-03',`email` = 'karib-m.@rambler.ru' WHERE `sphr_client`.`id` = '27bc8d02-2ddd-b7d3-eb2a-4fe2e6349649';
UPDATE `sphr_client` SET `id` = '2852508b-ce7d-0693-0ed1-4fe2e6b87b39',`phone_home` = '',`phone_mobile` = '',`email` = 'gbolife1@gmail.com' WHERE `sphr_client`.`id` = '2852508b-ce7d-0693-0ed1-4fe2e6b87b39';
UPDATE `sphr_client` SET `id` = '28f1e362-bc47-24d1-0e88-4fe2e62b9876',`phone_home` = '',`phone_mobile` = '',`email` = 'netcot2@gm4x.de' WHERE `sphr_client`.`id` = '28f1e362-bc47-24d1-0e88-4fe2e62b9876';
UPDATE `sphr_client` SET `id` = '297e73f4-66c6-7734-480e-4fe2e6833f87',`phone_home` = '+007831432-61-97',`phone_mobile` = '',`email` = 'vagon-nn@mail.ru' WHERE `sphr_client`.`id` = '297e73f4-66c6-7734-480e-4fe2e6833f87';
UPDATE `sphr_client` SET `id` = '2a19cb67-3c07-ec27-c1c8-4fe2e66bf61d',`phone_home` = '',`phone_mobile` = '+ 7 495 502-42-14',`email` = 'qwerty@list.ru' WHERE `sphr_client`.`id` = '2a19cb67-3c07-ec27-c1c8-4fe2e66bf61d';
UPDATE `sphr_client` SET `id` = '2ab310a2-7b47-42b2-0af2-4fe2e66484e3',`phone_home` = '',`phone_mobile` = '',`email` = 'wgar31@mail.ru' WHERE `sphr_client`.`id` = '2ab310a2-7b47-42b2-0af2-4fe2e66484e3';
UPDATE `sphr_client` SET `id` = '2b3f3adc-1491-7015-6d05-4fe2e62e6705',`phone_home` = '',`phone_mobile` = '+ 7 926 907-46-64',`email` = 'padrevishtalyk@gmail.com' WHERE `sphr_client`.`id` = '2b3f3adc-1491-7015-6d05-4fe2e62e6705';
UPDATE `sphr_client` SET `id` = '2bdd41e5-bdb7-b54d-1114-4fe2e6136da0',`phone_home` = '',`phone_mobile` = '+ 7 916 612-85-84',`email` = 'a-yak@yandex.ru' WHERE `sphr_client`.`id` = '2bdd41e5-bdb7-b54d-1114-4fe2e6136da0';
UPDATE `sphr_client` SET `id` = '2c76f5ba-205d-7bfe-7771-4fe2e67e9393',`phone_home` = '',`phone_mobile` = '+ 7 916 992-03-79',`email` = 'vartemov@yandex.ru' WHERE `sphr_client`.`id` = '2c76f5ba-205d-7bfe-7771-4fe2e67e9393';
UPDATE `sphr_client` SET `id` = '2d1c4d17-53b7-76bc-6fad-4fe2e68f0b6f',`phone_home` = '',`phone_mobile` = '',`email` = 'fvalentina09@mail.ru' WHERE `sphr_client`.`id` = '2d1c4d17-53b7-76bc-6fad-4fe2e68f0b6f';
UPDATE `sphr_client` SET `id` = '2db685a2-bd18-6c11-fb27-4fe2e666ddb6',`phone_home` = '',`phone_mobile` = '+ 7 903 783-00-22',`email` = 'rvsn500@gmail.com' WHERE `sphr_client`.`id` = '2db685a2-bd18-6c11-fb27-4fe2e666ddb6';
UPDATE `sphr_client` SET `id` = '2e4ad091-f8d6-5cf9-710d-4fe2e61d91a5',`phone_home` = '',`phone_mobile` = '',`email` = '2264820@mail.ru' WHERE `sphr_client`.`id` = '2e4ad091-f8d6-5cf9-710d-4fe2e61d91a5';
UPDATE `sphr_client` SET `id` = '2ee799bf-c1b0-d8ad-0477-4fe2e65dc6bf',`phone_home` = '',`phone_mobile` = '',`email` = 'a-m-v@mail.ru' WHERE `sphr_client`.`id` = '2ee799bf-c1b0-d8ad-0477-4fe2e65dc6bf';
UPDATE `sphr_client` SET `id` = '2f87dad9-f457-5c7e-5ca7-4fe2e650f703',`phone_home` = '',`phone_mobile` = '+ 7 915 704-16-93',`email` = 'pyata4ok99@yandex.ru' WHERE `sphr_client`.`id` = '2f87dad9-f457-5c7e-5ca7-4fe2e650f703';
UPDATE `sphr_client` SET `id` = '3024cb30-f656-7bc4-8377-4fe2e67fa34d',`phone_home` = '',`phone_mobile` = '+ 7 917 575-57-19',`email` = 'tatlybaeva_lilya@mail.ru' WHERE `sphr_client`.`id` = '3024cb30-f656-7bc4-8377-4fe2e67fa34d';
UPDATE `sphr_client` SET `id` = '30c35c69-7566-4072-1848-4fe2e67c348e',`phone_home` = '',`phone_mobile` = '',`email` = 'avatar-travel@rambler.ru' WHERE `sphr_client`.`id` = '30c35c69-7566-4072-1848-4fe2e67c348e';
UPDATE `sphr_client` SET `id` = '3168e379-9b01-1b21-2474-4fe2e633c3c7',`phone_home` = '',`phone_mobile` = '+ 7 909 621-73-51',`email` = 'migelmanta@mail.ru' WHERE `sphr_client`.`id` = '3168e379-9b01-1b21-2474-4fe2e633c3c7';
UPDATE `sphr_client` SET `id` = '320cec7f-803a-b177-dd16-4fe2e663bf47',`phone_home` = '',`phone_mobile` = '+ 380 50 401-31-03',`email` = 'noble_empire@mail.ru' WHERE `sphr_client`.`id` = '320cec7f-803a-b177-dd16-4fe2e663bf47';
UPDATE `sphr_client` SET `id` = '32aa8b12-00d7-58aa-f465-4fe2e6acd08a',`phone_home` = '',`phone_mobile` = '+ 7 926 377-75-58',`email` = 'katastrofau@yandex.ru' WHERE `sphr_client`.`id` = '32aa8b12-00d7-58aa-f465-4fe2e6acd08a';
UPDATE `sphr_client` SET `id` = '334b4831-6a41-12ea-11c7-4fe2e6a1b7d0',`phone_home` = '',`phone_mobile` = '+ 7 910 434-61-27',`email` = 'alexzgun@mail.ru' WHERE `sphr_client`.`id` = '334b4831-6a41-12ea-11c7-4fe2e6a1b7d0';
UPDATE `sphr_client` SET `id` = '33ed5ddf-ca6d-b332-169e-4fe2e6015742',`phone_home` = '',`phone_mobile` = '',`email` = 'divedive@bk.ru' WHERE `sphr_client`.`id` = '33ed5ddf-ca6d-b332-169e-4fe2e6015742';
UPDATE `sphr_client` SET `id` = '34932515-2be6-05fa-d69d-4fe2e6c3cdb1',`phone_home` = '',`phone_mobile` = '+ 7 926 430-54-33',`email` = 'ashkutnik@gmail.com' WHERE `sphr_client`.`id` = '34932515-2be6-05fa-d69d-4fe2e6c3cdb1';
UPDATE `sphr_client` SET `id` = '35392db2-9e79-cc57-e7ad-4fe2e6d817d1',`phone_home` = '',`phone_mobile` = '',`email` = 'nn60@bk.ru' WHERE `sphr_client`.`id` = '35392db2-9e79-cc57-e7ad-4fe2e6d817d1';
UPDATE `sphr_client` SET `id` = '35db8adb-5abb-9101-026d-4fe2e62eec4c',`phone_home` = '',`phone_mobile` = '+ 7 903 143-69-60',`email` = 'nezabydka007@mail.ru' WHERE `sphr_client`.`id` = '35db8adb-5abb-9101-026d-4fe2e62eec4c';
UPDATE `sphr_client` SET `id` = '367b751b-f512-9e83-8996-4fe2e621795e',`phone_home` = '',`phone_mobile` = '+ 7 926 762-65-27',`email` = 'hover792@mail.ru' WHERE `sphr_client`.`id` = '367b751b-f512-9e83-8996-4fe2e621795e';
UPDATE `sphr_client` SET `id` = '371d927f-772a-8357-3f6a-4fe2e6d2bdb5',`phone_home` = '',`phone_mobile` = '+ 7 921 913-03-85',`email` = 'movshina@bk.ru' WHERE `sphr_client`.`id` = '371d927f-772a-8357-3f6a-4fe2e6d2bdb5';
UPDATE `sphr_client` SET `id` = '37c1ed62-80a9-1e1a-144b-4fe2e6e4297f',`phone_home` = '',`phone_mobile` = '+ 7 985 782-77-25',`email` = 'cskagarik@mail.ru' WHERE `sphr_client`.`id` = '37c1ed62-80a9-1e1a-144b-4fe2e6e4297f';
UPDATE `sphr_client` SET `id` = '38580c9e-7eb5-9339-0914-4fe2e65e94a3',`phone_home` = '',`phone_mobile` = '+ 7 919 102-23-32',`email` = 'gorbunire@yandex.ru' WHERE `sphr_client`.`id` = '38580c9e-7eb5-9339-0914-4fe2e65e94a3';
UPDATE `sphr_client` SET `id` = '38fe52cf-9fc4-02e7-1125-4fe2e6fe6c78',`phone_home` = '',`phone_mobile` = '+ 7 926 168-56-15',`email` = 'spestate@mail.ru' WHERE `sphr_client`.`id` = '38fe52cf-9fc4-02e7-1125-4fe2e6fe6c78';
UPDATE `sphr_client` SET `id` = '39be6821-aa56-249c-27fa-4fe2e6a69be5',`phone_home` = '',`phone_mobile` = '',`email` = 'kantsur@mail.ru' WHERE `sphr_client`.`id` = '39be6821-aa56-249c-27fa-4fe2e6a69be5';
UPDATE `sphr_client` SET `id` = '3a574a4c-cc8f-c237-b111-4fe2e673756a',`phone_home` = '',`phone_mobile` = '+ 7 985 306-16-20',`email` = 'igornat07@gmail.com' WHERE `sphr_client`.`id` = '3a574a4c-cc8f-c237-b111-4fe2e673756a';
UPDATE `sphr_client` SET `id` = '3aef71d2-81e5-4a99-1291-4fe2e6e081c5',`phone_home` = '',`phone_mobile` = '',`email` = 'romankyznetsov@prov.ru' WHERE `sphr_client`.`id` = '3aef71d2-81e5-4a99-1291-4fe2e6e081c5';
UPDATE `sphr_client` SET `id` = '3b81f75b-c6e3-de6e-92e8-4fe2e6cb7c58',`phone_home` = '',`phone_mobile` = '',`email` = 'kapliny@comtv.ru' WHERE `sphr_client`.`id` = '3b81f75b-c6e3-de6e-92e8-4fe2e6cb7c58';
UPDATE `sphr_client` SET `id` = '3c3222c2-44cf-6c02-9ebc-4fe2e6e00aab',`phone_home` = '+ 7 495 363-70-07',`phone_mobile` = '+ 7 903 726-21-25',`email` = 'a.malkov@kamsan.net' WHERE `sphr_client`.`id` = '3c3222c2-44cf-6c02-9ebc-4fe2e6e00aab';
UPDATE `sphr_client` SET `id` = '3cdb792d-1d34-79f4-600e-4fe2e6a20ec0',`phone_home` = '',`phone_mobile` = '+ 7 915 102-77-35',`email` = 'ascon2008@yandex.ru' WHERE `sphr_client`.`id` = '3cdb792d-1d34-79f4-600e-4fe2e6a20ec0';
UPDATE `sphr_client` SET `id` = '3d910799-aeda-649f-fead-4fe2e6da8075',`phone_home` = '',`phone_mobile` = '+ 7 901 511-19-41',`email` = '9015111941@mail.ru' WHERE `sphr_client`.`id` = '3d910799-aeda-649f-fead-4fe2e6da8075';
UPDATE `sphr_client` SET `id` = '3e277aa4-ab2c-07ce-65bd-4fe2e6f869ca',`phone_home` = '',`phone_mobile` = '+ 7 925 005-02-00',`email` = 'weissn@yandex.ru' WHERE `sphr_client`.`id` = '3e277aa4-ab2c-07ce-65bd-4fe2e6f869ca';
UPDATE `sphr_client` SET `id` = '3ed1569a-c8cd-d1cb-edd8-4fe2e6a67d34',`phone_home` = '',`phone_mobile` = '+ 7 903 549-75-98',`email` = 'medisant@pochta.ru' WHERE `sphr_client`.`id` = '3ed1569a-c8cd-d1cb-edd8-4fe2e6a67d34';
UPDATE `sphr_client` SET `id` = '3f6527ff-e1eb-68e9-c3bb-4fe2e6ee3359',`phone_home` = '',`phone_mobile` = '+ 7 916 418-04-42',`email` = 'dogd90969.69@mail.ru' WHERE `sphr_client`.`id` = '3f6527ff-e1eb-68e9-c3bb-4fe2e6ee3359';
UPDATE `sphr_client` SET `id` = '4001b6a2-f393-7739-dacd-4fe2e60dd852',`phone_home` = '',`phone_mobile` = '',`email` = 'e.gazukin@rambler.ru' WHERE `sphr_client`.`id` = '4001b6a2-f393-7739-dacd-4fe2e60dd852';
UPDATE `sphr_client` SET `id` = '409f9c82-a9b4-b1fa-431e-4fe2e6306520',`phone_home` = '',`phone_mobile` = '+ 7 916 637-46-97',`email` = 'luali86@yandex.ru' WHERE `sphr_client`.`id` = '409f9c82-a9b4-b1fa-431e-4fe2e6306520';
UPDATE `sphr_client` SET `id` = '413f3954-d2d8-da15-78f4-4fe2e61c5c54',`phone_home` = '',`phone_mobile` = '+ 7 915 302-65-42',`email` = 'sim209@rambler.ru' WHERE `sphr_client`.`id` = '413f3954-d2d8-da15-78f4-4fe2e61c5c54';
UPDATE `sphr_client` SET `id` = '41dbe68d-7048-6799-b452-4fe2e69023d8',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '41dbe68d-7048-6799-b452-4fe2e69023d8';
UPDATE `sphr_client` SET `id` = '42729433-21e6-7da2-4681-4fe2e69310ad',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '42729433-21e6-7da2-4681-4fe2e69310ad';
UPDATE `sphr_client` SET `id` = '43e5740e-8f09-8730-60cf-4fe2e6106c92',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '43e5740e-8f09-8730-60cf-4fe2e6106c92';
UPDATE `sphr_client` SET `id` = '4489241c-3015-c3a3-33af-4fe2e6935d34',`phone_home` = '',`phone_mobile` = '+ 7 915 474-93-80',`email` = 'amiran2257@mail.ru' WHERE `sphr_client`.`id` = '4489241c-3015-c3a3-33af-4fe2e6935d34';
UPDATE `sphr_client` SET `id` = '4534b9db-3cc2-310d-024d-4fe2e676d8f0',`phone_home` = '+ 34 97 210-45-35',`phone_mobile` = '+ 34 67 221-97-87',`email` = 'tui.costabrava@bk.ru' WHERE `sphr_client`.`id` = '4534b9db-3cc2-310d-024d-4fe2e676d8f0';
UPDATE `sphr_client` SET `id` = '45ddabd6-b9f4-c071-61cd-4fe2e64c941b',`phone_home` = '',`phone_mobile` = '+ 7 916 345-74-51',`email` = 'megav@inbox.ru' WHERE `sphr_client`.`id` = '45ddabd6-b9f4-c071-61cd-4fe2e64c941b';
UPDATE `sphr_client` SET `id` = '46826add-c4f7-9b7d-3469-4fe2e6164685',`phone_home` = '',`phone_mobile` = '',`email` = 'orko@makemytrip.com.ua' WHERE `sphr_client`.`id` = '46826add-c4f7-9b7d-3469-4fe2e6164685';
UPDATE `sphr_client` SET `id` = '47149c9c-74f9-8084-9d5b-4fe2e6ea08f9',`phone_home` = '',`phone_mobile` = '+ 7 962 923-49-18',`email` = 'chernova.nato@gmail.com' WHERE `sphr_client`.`id` = '47149c9c-74f9-8084-9d5b-4fe2e6ea08f9';
UPDATE `sphr_client` SET `id` = '47a8b427-dc08-e448-53f3-4fe2e6385069',`phone_home` = '',`phone_mobile` = '',`email` = 'av1706@mail.ru' WHERE `sphr_client`.`id` = '47a8b427-dc08-e448-53f3-4fe2e6385069';
UPDATE `sphr_client` SET `id` = '48409b05-7a10-fe32-ca32-4fe2e657bca5',`phone_home` = '',`phone_mobile` = '+ 7 911 831-22-45',`email` = '8312245@gmail.com' WHERE `sphr_client`.`id` = '48409b05-7a10-fe32-ca32-4fe2e657bca5';
UPDATE `sphr_client` SET `id` = '48dc3448-43b6-6fc3-ed2c-4fe2e631a132',`phone_home` = '',`phone_mobile` = '',`email` = 'arelhz@gmail.com' WHERE `sphr_client`.`id` = '48dc3448-43b6-6fc3-ed2c-4fe2e631a132';
UPDATE `sphr_client` SET `id` = '497cc7e7-b178-b34b-b306-4fe2e6c323bd',`phone_home` = '',`phone_mobile` = '',`email` = 'an-sz@mail.ru' WHERE `sphr_client`.`id` = '497cc7e7-b178-b34b-b306-4fe2e6c323bd';
UPDATE `sphr_client` SET `id` = '4a23f448-decf-1619-30be-4fe2e6c10e97',`phone_home` = '',`phone_mobile` = '',`email` = 'odward@yandex.ru' WHERE `sphr_client`.`id` = '4a23f448-decf-1619-30be-4fe2e6c10e97';
UPDATE `sphr_client` SET `id` = '4ac4771c-0524-69fd-f01c-4fe2e6a9b81f',`phone_home` = '',`phone_mobile` = '+ 7 905 222-65-69',`email` = 'vkmartynov@yandex.ru' WHERE `sphr_client`.`id` = '4ac4771c-0524-69fd-f01c-4fe2e6a9b81f';
UPDATE `sphr_client` SET `id` = '4b59cf2c-56ae-7cf8-27d0-4fe2e69cc24a',`phone_home` = '947 34 34',`phone_mobile` = '',`email` = 'avgolunov@inbox.ru' WHERE `sphr_client`.`id` = '4b59cf2c-56ae-7cf8-27d0-4fe2e69cc24a';
UPDATE `sphr_client` SET `id` = '4bf11451-4518-b2c9-dfdf-4fe2e6555cf9',`phone_home` = '',`phone_mobile` = '+ 7 911 785-24-68',`email` = 'klenbus@mail.ru' WHERE `sphr_client`.`id` = '4bf11451-4518-b2c9-dfdf-4fe2e6555cf9';
UPDATE `sphr_client` SET `id` = '4c97ff04-6727-0ccf-2212-4fe2e63e1009',`phone_home` = '+ 7 812 430-79-58',`phone_mobile` = '+ 7 951 682-72-23',`email` = 'alex.ststal@gmail.com' WHERE `sphr_client`.`id` = '4c97ff04-6727-0ccf-2212-4fe2e63e1009';
UPDATE `sphr_client` SET `id` = '4d3227be-68ca-a5ac-5d9b-4fe2e614d52f',`phone_home` = '',`phone_mobile` = '+ 7 911 100-58-88',`email` = 'baskara@peterlink.ru' WHERE `sphr_client`.`id` = '4d3227be-68ca-a5ac-5d9b-4fe2e614d52f';
UPDATE `sphr_client` SET `id` = '4dc949ac-2653-6ffd-9b54-4fe2e691f0ca',`phone_home` = '249-05-02',`phone_mobile` = '',`email` = 'info@4540363.ru' WHERE `sphr_client`.`id` = '4dc949ac-2653-6ffd-9b54-4fe2e691f0ca';
UPDATE `sphr_client` SET `id` = '4e5d7115-feab-5c6d-d3de-4fe2e667ceb5',`phone_home` = '',`phone_mobile` = '+ 7 911 927-85-99',`email` = 'max_dubr@mail.ru' WHERE `sphr_client`.`id` = '4e5d7115-feab-5c6d-d3de-4fe2e667ceb5';
UPDATE `sphr_client` SET `id` = '4ef9bce4-a27b-8abb-ea86-4fe2e65fe489',`phone_home` = '945 32 75',`phone_mobile` = '',`email` = 'lllil@yandex.ru' WHERE `sphr_client`.`id` = '4ef9bce4-a27b-8abb-ea86-4fe2e65fe489';
UPDATE `sphr_client` SET `id` = '4f93d301-d318-ce79-734e-4fe2e64d7939',`phone_home` = '',`phone_mobile` = '+ 7 950 022-12-53',`email` = 'nikolay_ryba@mail.ru' WHERE `sphr_client`.`id` = '4f93d301-d318-ce79-734e-4fe2e64d7939';
UPDATE `sphr_client` SET `id` = '50306d5f-d778-d4eb-b185-4fe2e6edd032',`phone_home` = '',`phone_mobile` = '+ 7 921 856-91-92',`email` = 'zont-05@mail.ru' WHERE `sphr_client`.`id` = '50306d5f-d778-d4eb-b185-4fe2e6edd032';
UPDATE `sphr_client` SET `id` = '50c5f9ce-bc2a-bb15-2b83-4fe2e671a8ef',`phone_home` = '',`phone_mobile` = '',`email` = 'juliakoli@rambler.ru' WHERE `sphr_client`.`id` = '50c5f9ce-bc2a-bb15-2b83-4fe2e671a8ef';
UPDATE `sphr_client` SET `id` = '51522e67-ecd2-96e9-5c21-4fe2e642eecc',`phone_home` = '',`phone_mobile` = '+ 7 911 718-35-15',`email` = 'peter-lion@mail.ru' WHERE `sphr_client`.`id` = '51522e67-ecd2-96e9-5c21-4fe2e642eecc';
UPDATE `sphr_client` SET `id` = '51f3ed04-0e82-9e61-599d-4fe2e6b25978',`phone_home` = '',`phone_mobile` = '+ 7 931 290-57-85',`email` = 'vedernicov@yandex.ru' WHERE `sphr_client`.`id` = '51f3ed04-0e82-9e61-599d-4fe2e6b25978';
UPDATE `sphr_client` SET `id` = '528b2515-53be-cc30-3973-4fe2e61cc4c1',`phone_home` = '',`phone_mobile` = '+ 7 921 949-63-43',`email` = 'll0508@rambler.ru' WHERE `sphr_client`.`id` = '528b2515-53be-cc30-3973-4fe2e61cc4c1';
UPDATE `sphr_client` SET `id` = '532918eb-5884-c5d2-6fa4-4fe2e6e1f6a3',`phone_home` = '',`phone_mobile` = '+ 7 911 840-74-07',`email` = 'msn76@mail.ru' WHERE `sphr_client`.`id` = '532918eb-5884-c5d2-6fa4-4fe2e6e1f6a3';
UPDATE `sphr_client` SET `id` = '53a4f5de-9cd2-051e-2f0b-4fe2e6ba091a',`phone_home` = '',`phone_mobile` = '+ 7 921 965-50-06',`email` = 'elopos@yandex.ru' WHERE `sphr_client`.`id` = '53a4f5de-9cd2-051e-2f0b-4fe2e6ba091a';
UPDATE `sphr_client` SET `id` = '540c3a6e-7df4-069d-d227-4fe2e6211773',`phone_home` = '',`phone_mobile` = '+ 7 911 779-78-27',`email` = 'kenev@mail.ru' WHERE `sphr_client`.`id` = '540c3a6e-7df4-069d-d227-4fe2e6211773';
UPDATE `sphr_client` SET `id` = '547a10a5-840d-0db5-ae7f-4fe2e6263323',`phone_home` = '',`phone_mobile` = '+ 7 951 648-74-09',`email` = 'alespb_r@mail.ru' WHERE `sphr_client`.`id` = '547a10a5-840d-0db5-ae7f-4fe2e6263323';
UPDATE `sphr_client` SET `id` = '54d9bf45-87e1-17bc-01ec-4fe2e65a69b1',`phone_home` = '',`phone_mobile` = '+ 7 921 942-21-45',`email` = 'a.vinogradov@inbox.ru' WHERE `sphr_client`.`id` = '54d9bf45-87e1-17bc-01ec-4fe2e65a69b1';
UPDATE `sphr_client` SET `id` = '55319c42-cca8-5e1b-c138-4fe2e62fda17',`phone_home` = '',`phone_mobile` = '+ 7 964 339-35-10',`email` = 'samfortan@mail.ru' WHERE `sphr_client`.`id` = '55319c42-cca8-5e1b-c138-4fe2e62fda17';
UPDATE `sphr_client` SET `id` = '558d342f-adf7-211b-c9cf-4fe2e6b47211',`phone_home` = '',`phone_mobile` = '+ 7 921 913-96-31',`email` = 'sv_clair@mail.ru' WHERE `sphr_client`.`id` = '558d342f-adf7-211b-c9cf-4fe2e6b47211';
UPDATE `sphr_client` SET `id` = '55e71b60-eb73-5c07-343b-4fe2e6f2651b',`phone_home` = '+ 7 812 918-57-55',`phone_mobile` = '',`email` = 'alecsw@mail.ru' WHERE `sphr_client`.`id` = '55e71b60-eb73-5c07-343b-4fe2e6f2651b';
UPDATE `sphr_client` SET `id` = '56411363-3fd8-e972-ce21-4fe2e6f93416',`phone_home` = '',`phone_mobile` = '+ 7 911 292-63-10',`email` = 'shevrob@yandex.ru' WHERE `sphr_client`.`id` = '56411363-3fd8-e972-ce21-4fe2e6f93416';
UPDATE `sphr_client` SET `id` = '56aa0305-2f37-c4a2-7185-4fe2e66be31d',`phone_home` = '',`phone_mobile` = '',`email` = 'ruslan.s@inbox.ru' WHERE `sphr_client`.`id` = '56aa0305-2f37-c4a2-7185-4fe2e66be31d';
UPDATE `sphr_client` SET `id` = '56f1fa8c-5281-d234-f76a-4fe2e6ba4609',`phone_home` = '',`phone_mobile` = '+ 7 905 212-21-91',`email` = 'timur.gen@gmail.com' WHERE `sphr_client`.`id` = '56f1fa8c-5281-d234-f76a-4fe2e6ba4609';
UPDATE `sphr_client` SET `id` = '573149b3-3e15-3924-133d-4fe2e695521d',`phone_home` = '344 59 87',`phone_mobile` = '',`email` = 'nikolay_1979@list.ru' WHERE `sphr_client`.`id` = '573149b3-3e15-3924-133d-4fe2e695521d';
UPDATE `sphr_client` SET `id` = '5770147f-0c06-02c4-a37a-4fe2e6858f75',`phone_home` = '',`phone_mobile` = '',`email` = 'asirvo@mail.ru' WHERE `sphr_client`.`id` = '5770147f-0c06-02c4-a37a-4fe2e6858f75';
UPDATE `sphr_client` SET `id` = '57ad66cd-bd6e-4efd-3db4-4fe2e61ed785',`phone_home` = '',`phone_mobile` = '+ 7 921 442-62-95',`email` = 'pereligin80@mail.ru' WHERE `sphr_client`.`id` = '57ad66cd-bd6e-4efd-3db4-4fe2e61ed785';
UPDATE `sphr_client` SET `id` = '58218857-2967-6617-9d7d-4fe2e6a37519',`phone_home` = '',`phone_mobile` = '+ 7 960 254-28-11',`email` = 'shergina.olga@rambler.ru' WHERE `sphr_client`.`id` = '58218857-2967-6617-9d7d-4fe2e6a37519';
UPDATE `sphr_client` SET `id` = '58a50abd-1fa0-38d7-0f20-4fe2e6ba68c7',`phone_home` = '',`phone_mobile` = '+ 7 911 723-75-78',`email` = 'ab-form@mail.ru' WHERE `sphr_client`.`id` = '58a50abd-1fa0-38d7-0f20-4fe2e6ba68c7';
UPDATE `sphr_client` SET `id` = '592685af-a674-eafe-058b-4fe2e6e9518a',`phone_home` = '',`phone_mobile` = '+ 7 921 651-77-77',`email` = 'sv.yar@mail.ru' WHERE `sphr_client`.`id` = '592685af-a674-eafe-058b-4fe2e6e9518a';
UPDATE `sphr_client` SET `id` = '59b4a8b9-fd32-65b1-6b9c-4fe2e6151a54',`phone_home` = '964 77 90',`phone_mobile` = '',`email` = 'garov65@mail.ru' WHERE `sphr_client`.`id` = '59b4a8b9-fd32-65b1-6b9c-4fe2e6151a54';
UPDATE `sphr_client` SET `id` = '5a3ed496-61fe-0ae4-2be0-4fe2e6d41794',`phone_home` = '',`phone_mobile` = '+ 7 921 887-35-81',`email` = 'sergejglyadyaev@yandex.ru' WHERE `sphr_client`.`id` = '5a3ed496-61fe-0ae4-2be0-4fe2e6d41794';
UPDATE `sphr_client` SET `id` = '5abfd457-1cd9-2fc6-2e9e-4fe2e66372c3',`phone_home` = '',`phone_mobile` = '+ 7 921 949-87-03',`email` = 'lexus3733@yandex.ru' WHERE `sphr_client`.`id` = '5abfd457-1cd9-2fc6-2e9e-4fe2e66372c3';
UPDATE `sphr_client` SET `id` = '5b3103f2-5073-f1a4-ea09-4fe2e6d0ce2e',`phone_home` = '',`phone_mobile` = '',`email` = 'tessi87@rambler.ru' WHERE `sphr_client`.`id` = '5b3103f2-5073-f1a4-ea09-4fe2e6d0ce2e';
UPDATE `sphr_client` SET `id` = '5bac54e3-6301-b88b-b8a8-4fe2e6d74d66',`phone_home` = '',`phone_mobile` = '+ 7 960 245-56-38',`email` = 'marina555ia@gmail.com' WHERE `sphr_client`.`id` = '5bac54e3-6301-b88b-b8a8-4fe2e6d74d66';
UPDATE `sphr_client` SET `id` = '5c2dec6d-3baf-5848-008d-4fe2e6b132ec',`phone_home` = '',`phone_mobile` = '+ 7 911 965-73-05',`email` = 'winta78@mail.ru' WHERE `sphr_client`.`id` = '5c2dec6d-3baf-5848-008d-4fe2e6b132ec';
UPDATE `sphr_client` SET `id` = '5cb44835-9dfd-a1d6-57cf-4fe2e69367f5',`phone_home` = '',`phone_mobile` = '+ 7 911 266-69-99',`email` = 'matveev@ircv.ru' WHERE `sphr_client`.`id` = '5cb44835-9dfd-a1d6-57cf-4fe2e69367f5';
UPDATE `sphr_client` SET `id` = '5d4784ea-05bc-96fb-0eec-4fe2e6342c32',`phone_home` = '+ 7 812 557-70-34',`phone_mobile` = '',`email` = 'happyline@bk.ru' WHERE `sphr_client`.`id` = '5d4784ea-05bc-96fb-0eec-4fe2e6342c32';
UPDATE `sphr_client` SET `id` = '5dc9472d-91df-8974-9a6a-4fe2e6c2910c',`phone_home` = '',`phone_mobile` = '+ 7 952 240-47-02',`email` = 'klorisvi@mail.ru' WHERE `sphr_client`.`id` = '5dc9472d-91df-8974-9a6a-4fe2e6c2910c';
UPDATE `sphr_client` SET `id` = '5e475ce6-ef6e-3c87-b0d0-4fe2e6ed09ac',`phone_home` = '695-81-25',`phone_mobile` = '',`email` = 'keb1234@yandex.ru' WHERE `sphr_client`.`id` = '5e475ce6-ef6e-3c87-b0d0-4fe2e6ed09ac';
UPDATE `sphr_client` SET `id` = '5ec9e874-9e01-af1b-2774-4fe2e6a87ca4',`phone_home` = '',`phone_mobile` = '+ 7 911 228-94-89',`email` = 'v.m.avto@mail.ru' WHERE `sphr_client`.`id` = '5ec9e874-9e01-af1b-2774-4fe2e6a87ca4';
UPDATE `sphr_client` SET `id` = '5f4cd20b-efbb-35ce-cfc1-4fe2e6fafcb9',`phone_home` = '',`phone_mobile` = '+ 7 921 919-97-94',`email` = 'marina.sibirtseva@gmail.com' WHERE `sphr_client`.`id` = '5f4cd20b-efbb-35ce-cfc1-4fe2e6fafcb9';
UPDATE `sphr_client` SET `id` = '5fd21449-4e1b-b4d1-d6e1-4fe2e6b67f9a',`phone_home` = '',`phone_mobile` = '+ 7 911 263-89-66',`email` = 'mona72@yandex.ru' WHERE `sphr_client`.`id` = '5fd21449-4e1b-b4d1-d6e1-4fe2e6b67f9a';
UPDATE `sphr_client` SET `id` = '606ee7c7-e5b9-2757-eba8-4fe2e6e0f26e',`phone_home` = '',`phone_mobile` = '+ 7 921 963-21-12',`email` = 'wsm-spb@mail.ru' WHERE `sphr_client`.`id` = '606ee7c7-e5b9-2757-eba8-4fe2e6e0f26e';
UPDATE `sphr_client` SET `id` = '60fd4367-1ee9-1465-a7f5-4fe2e624139b',`phone_home` = '',`phone_mobile` = '+ 7 921 370-27-58',`email` = 'kll13@bk.ru' WHERE `sphr_client`.`id` = '60fd4367-1ee9-1465-a7f5-4fe2e624139b';
UPDATE `sphr_client` SET `id` = '618e8758-b14e-29dc-d898-4fe2e69c4ba6',`phone_home` = '',`phone_mobile` = '+ 7 909 578-99-75',`email` = 'zvereva@novteh.com' WHERE `sphr_client`.`id` = '618e8758-b14e-29dc-d898-4fe2e69c4ba6';
UPDATE `sphr_client` SET `id` = '623499a5-dc83-2ed7-2fcb-4fe2e659680a',`phone_home` = '',`phone_mobile` = '+ 7 906 262-44-62',`email` = 'just-maria@yandex.ru' WHERE `sphr_client`.`id` = '623499a5-dc83-2ed7-2fcb-4fe2e659680a';
UPDATE `sphr_client` SET `id` = '62c1f241-87ff-0dff-1d07-4fe2e6bfdfda',`phone_home` = '+ 7 921 961-01-27',`phone_mobile` = '+ 7 921 936-20-90',`email` = 'oakmet@rambler.ru' WHERE `sphr_client`.`id` = '62c1f241-87ff-0dff-1d07-4fe2e6bfdfda';
UPDATE `sphr_client` SET `id` = '635bb15f-c84e-bfbb-3122-4fe2e69686b8',`phone_home` = '',`phone_mobile` = '+ 7 905 227-41-73',`email` = 'korolru@bk.ru' WHERE `sphr_client`.`id` = '635bb15f-c84e-bfbb-3122-4fe2e69686b8';
UPDATE `sphr_client` SET `id` = '63f5599b-3611-9dcf-ffbc-4fe2e6698934',`phone_home` = '',`phone_mobile` = '',`email` = 'pet-osadchij@yandex.ru' WHERE `sphr_client`.`id` = '63f5599b-3611-9dcf-ffbc-4fe2e6698934';
UPDATE `sphr_client` SET `id` = '6475f908-bc47-62d6-d3a5-4fe2e636db97',`phone_home` = '',`phone_mobile` = '',`email` = 'kaur.62@mail.ru' WHERE `sphr_client`.`id` = '6475f908-bc47-62d6-d3a5-4fe2e636db97';
UPDATE `sphr_client` SET `id` = '6500e772-7343-922b-21a7-4fe2e6cff3ab',`phone_home` = '233 28 04',`phone_mobile` = '',`email` = 'creative@piligrim.com' WHERE `sphr_client`.`id` = '6500e772-7343-922b-21a7-4fe2e6cff3ab';
UPDATE `sphr_client` SET `id` = '658a7db7-687e-620e-bc89-4fe2e67de4a1',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '658a7db7-687e-620e-bc89-4fe2e67de4a1';
UPDATE `sphr_client` SET `id` = '6617c682-608f-2141-41f9-4fe2e6906087',`phone_home` = '',`phone_mobile` = '+ 7 812 295-65-07',`email` = 'ads@skylink.spb.ru' WHERE `sphr_client`.`id` = '6617c682-608f-2141-41f9-4fe2e6906087';
UPDATE `sphr_client` SET `id` = '66aff38e-3b66-faa9-c6e1-4fe2e667a68c',`phone_home` = '',`phone_mobile` = '+ 7 921 959-70-15',`email` = 'lucky2404@mail.ru' WHERE `sphr_client`.`id` = '66aff38e-3b66-faa9-c6e1-4fe2e667a68c';
UPDATE `sphr_client` SET `id` = '672c5463-3d6a-99b7-273e-4fe2e68238ef',`phone_home` = '',`phone_mobile` = '',`email` = 'tsareva_is@mail.ru' WHERE `sphr_client`.`id` = '672c5463-3d6a-99b7-273e-4fe2e68238ef';
UPDATE `sphr_client` SET `id` = '67adb139-8e38-fd5f-9871-4fe2e66c8939',`phone_home` = '',`phone_mobile` = '+ 7 950 006-57-20',`email` = 'remake-sd@yandex.ru' WHERE `sphr_client`.`id` = '67adb139-8e38-fd5f-9871-4fe2e66c8939';
UPDATE `sphr_client` SET `id` = '6834ac1b-bf3a-4862-763c-4fe2e6310aaa',`phone_home` = '',`phone_mobile` = '+ 7 911 798-85-65',`email` = 'y.kovalenko@rambler.ru' WHERE `sphr_client`.`id` = '6834ac1b-bf3a-4862-763c-4fe2e6310aaa';
UPDATE `sphr_client` SET `id` = '68b62aa5-d3e8-cacc-5c40-4fe2e6e084a4',`phone_home` = '',`phone_mobile` = '+ 7 911 254-98-12',`email` = 'elenpetersburg@mail.ru' WHERE `sphr_client`.`id` = '68b62aa5-d3e8-cacc-5c40-4fe2e6e084a4';
UPDATE `sphr_client` SET `id` = '6953fa65-ab01-c977-ed90-4fe2e64b2d28',`phone_home` = '',`phone_mobile` = '',`email` = 'varshava51@pochta.tvoe.tv' WHERE `sphr_client`.`id` = '6953fa65-ab01-c977-ed90-4fe2e64b2d28';
UPDATE `sphr_client` SET `id` = '69df5221-5ed9-3757-616c-4fe2e6827248',`phone_home` = '',`phone_mobile` = '+ 7 903 321-20-76',`email` = 'anna2806@rambler.ru' WHERE `sphr_client`.`id` = '69df5221-5ed9-3757-616c-4fe2e6827248';
UPDATE `sphr_client` SET `id` = '6a62a35d-a4bc-3b67-f2f7-4fe2e6cb1455',`phone_home` = '+ 7 495 999-11-30',`phone_mobile` = '',`email` = 'ognev3@yandex.ru' WHERE `sphr_client`.`id` = '6a62a35d-a4bc-3b67-f2f7-4fe2e6cb1455';
UPDATE `sphr_client` SET `id` = '6aea7889-5511-7309-f457-4fe2e66bec32',`phone_home` = '',`phone_mobile` = '',`email` = 'marfa1999@mail.ru' WHERE `sphr_client`.`id` = '6aea7889-5511-7309-f457-4fe2e66bec32';
UPDATE `sphr_client` SET `id` = '6b6be8fa-88ec-c04e-cd9c-4fe2e6c79aa8',`phone_home` = '',`phone_mobile` = '+ 7 910 450-30-77',`email` = 't_bobykina@yahoo.com' WHERE `sphr_client`.`id` = '6b6be8fa-88ec-c04e-cd9c-4fe2e6c79aa8';
UPDATE `sphr_client` SET `id` = '6bea63fe-a0e7-040e-0c22-4fe2e68c4cb1',`phone_home` = '',`phone_mobile` = '7919-72-72',`email` = 'albina812@mail.ru' WHERE `sphr_client`.`id` = '6bea63fe-a0e7-040e-0c22-4fe2e68c4cb1';
UPDATE `sphr_client` SET `id` = '6c847d6d-d01b-4e5c-3bb8-4fe2e6e800ac',`phone_home` = '',`phone_mobile` = '+ 7 985 233-49-59',`email` = 'ra.sharipov@mail.ru' WHERE `sphr_client`.`id` = '6c847d6d-d01b-4e5c-3bb8-4fe2e6e800ac';
UPDATE `sphr_client` SET `id` = '6d066bb5-b2e7-4182-8d4e-4fe2e60b3a70',`phone_home` = '+ 7 931 308-44-73',`phone_mobile` = '+ 7 911 907-26-51',`email` = 'ryzhevnin@mail.ru' WHERE `sphr_client`.`id` = '6d066bb5-b2e7-4182-8d4e-4fe2e60b3a70';
UPDATE `sphr_client` SET `id` = '6d7b4736-4875-ecce-4527-4fe2e645149b',`phone_home` = '',`phone_mobile` = '+ 7 916 352-35-48',`email` = 'tvs1555@bk.ru' WHERE `sphr_client`.`id` = '6d7b4736-4875-ecce-4527-4fe2e645149b';
UPDATE `sphr_client` SET `id` = '6df1901d-a5c7-bc98-9b88-4fe2e6a57fb9',`phone_home` = '',`phone_mobile` = '+ 7 917 522-70-09',`email` = 'smirnov@re-con.ru' WHERE `sphr_client`.`id` = '6df1901d-a5c7-bc98-9b88-4fe2e6a57fb9';
UPDATE `sphr_client` SET `id` = '6e63f4f9-6ffc-e6a2-440a-4fe2e669a478',`phone_home` = '',`phone_mobile` = '+ 7 921 638-58-19',`email` = 'globalexpo82@gmail.com' WHERE `sphr_client`.`id` = '6e63f4f9-6ffc-e6a2-440a-4fe2e669a478';
UPDATE `sphr_client` SET `id` = '6edd10b0-e950-aaae-dd66-4fe2e6f3bc83',`phone_home` = '',`phone_mobile` = '+ 7 950 036-36-99',`email` = 'wellnaeenow@mail.ru' WHERE `sphr_client`.`id` = '6edd10b0-e950-aaae-dd66-4fe2e6f3bc83';
UPDATE `sphr_client` SET `id` = '6f521b3a-aafd-6dda-13d3-4fe2e69fe5d9',`phone_home` = '',`phone_mobile` = '',`email` = 'luna8881@rambler.ru' WHERE `sphr_client`.`id` = '6f521b3a-aafd-6dda-13d3-4fe2e69fe5d9';
UPDATE `sphr_client` SET `id` = '6fdcddba-9207-681c-9f39-4fe2e60284d4',`phone_home` = '+ 7 901 375-59-88',`phone_mobile` = '',`email` = 'kkostja@yandex.ru' WHERE `sphr_client`.`id` = '6fdcddba-9207-681c-9f39-4fe2e60284d4';
UPDATE `sphr_client` SET `id` = '70627b65-e8de-0e03-2084-4fe2e64bcc19',`phone_home` = '936 20 90',`phone_mobile` = '',`email` = 'katesav@rambler.ru' WHERE `sphr_client`.`id` = '70627b65-e8de-0e03-2084-4fe2e64bcc19';
UPDATE `sphr_client` SET `id` = '70f64eaf-dfa8-f034-8b4a-4fe2e69ddac5',`phone_home` = '+ 7 921 910-86-27',`phone_mobile` = '',`email` = 'busot@mail.ru' WHERE `sphr_client`.`id` = '70f64eaf-dfa8-f034-8b4a-4fe2e69ddac5';
UPDATE `sphr_client` SET `id` = '7192ea30-6c30-dd01-5793-4fe2e6b8c0e9',`phone_home` = '',`phone_mobile` = '996 52 00',`email` = '9965200@gmail.com' WHERE `sphr_client`.`id` = '7192ea30-6c30-dd01-5793-4fe2e6b8c0e9';
UPDATE `sphr_client` SET `id` = '722f0368-31f3-725c-93de-4fe2e6f420cd',`phone_home` = '',`phone_mobile` = '998 16 38',`email` = 'biggevboy@mail.ru' WHERE `sphr_client`.`id` = '722f0368-31f3-725c-93de-4fe2e6f420cd';
UPDATE `sphr_client` SET `id` = '72ccd46e-231e-b620-4556-4fe2e6fbc78f',`phone_home` = '',`phone_mobile` = '+ 7 911 997-19-42',`email` = 'apple19911@yandex.ru' WHERE `sphr_client`.`id` = '72ccd46e-231e-b620-4556-4fe2e6fbc78f';
UPDATE `sphr_client` SET `id` = '736c3acb-aa8d-93d5-f0f9-4fe2e641f669',`phone_home` = '',`phone_mobile` = '+ 7 911 193-48-37',`email` = 'koz5@yandex.ru' WHERE `sphr_client`.`id` = '736c3acb-aa8d-93d5-f0f9-4fe2e641f669';
UPDATE `sphr_client` SET `id` = '74064ae1-cc12-49de-515a-4fe2e6c7828c',`phone_home` = '',`phone_mobile` = '+ 7 911 209-93-94',`email` = 'svetikova91@rambler.ru' WHERE `sphr_client`.`id` = '74064ae1-cc12-49de-515a-4fe2e6c7828c';
UPDATE `sphr_client` SET `id` = '749dbaa9-ce51-2fc0-d1be-4fe2e69f601c',`phone_home` = '',`phone_mobile` = '+ 7 916 254-38-46',`email` = 'olga.baronina@mail.ru' WHERE `sphr_client`.`id` = '749dbaa9-ce51-2fc0-d1be-4fe2e69f601c';
UPDATE `sphr_client` SET `id` = '7537d7ef-6a5a-e725-77af-4fe2e6dcee97',`phone_home` = '',`phone_mobile` = '964 77 90',`email` = NULL WHERE `sphr_client`.`id` = '7537d7ef-6a5a-e725-77af-4fe2e6dcee97';
UPDATE `sphr_client` SET `id` = '75d10afe-9cee-c496-d164-4fe2e6e46394',`phone_home` = '',`phone_mobile` = '+ 7 963 678-74-16',`email` = 'ak_2004@inbox.ru' WHERE `sphr_client`.`id` = '75d10afe-9cee-c496-d164-4fe2e6e46394';
UPDATE `sphr_client` SET `id` = '767a092a-e6af-1b47-72a5-4fe2e6e85694',`phone_home` = '',`phone_mobile` = '+ 7 916 250-28-87',`email` = 'anugaeva@gmail.com' WHERE `sphr_client`.`id` = '767a092a-e6af-1b47-72a5-4fe2e6e85694';
UPDATE `sphr_client` SET `id` = '771fd8ba-16c0-de75-b925-4fe2e6001266',`phone_home` = '',`phone_mobile` = '+ 7 926 706-70-75',`email` = 'bobrik1985@mail.ru' WHERE `sphr_client`.`id` = '771fd8ba-16c0-de75-b925-4fe2e6001266';
UPDATE `sphr_client` SET `id` = '77c441e2-6ec9-32cc-28d4-4fe2e64b0244',`phone_home` = '',`phone_mobile` = '+ 7 916 889-96-57',`email` = 'afalina@mail.ru' WHERE `sphr_client`.`id` = '77c441e2-6ec9-32cc-28d4-4fe2e64b0244';
UPDATE `sphr_client` SET `id` = '78601f9d-1b84-9f1c-fc6b-4fe2e64ea935',`phone_home` = '',`phone_mobile` = '+ 7 916 013-98-72',`email` = 'yarina2004@mail.ru' WHERE `sphr_client`.`id` = '78601f9d-1b84-9f1c-fc6b-4fe2e64ea935';
UPDATE `sphr_client` SET `id` = '78f88742-3c39-c4a2-ae63-4fe2e690d3c6',`phone_home` = '',`phone_mobile` = '+ 7 903 774-38-20',`email` = 'vkitaeva@gmail.com' WHERE `sphr_client`.`id` = '78f88742-3c39-c4a2-ae63-4fe2e690d3c6';
UPDATE `sphr_client` SET `id` = '7abb4a00-a7eb-ad37-d798-4fe2e6be1676',`phone_home` = '',`phone_mobile` = '',`email` = 'nvn-2007-2007@ya.ru' WHERE `sphr_client`.`id` = '7abb4a00-a7eb-ad37-d798-4fe2e6be1676';
UPDATE `sphr_client` SET `id` = '7b59e0dd-c028-e068-6388-4fe2e6635104',`phone_home` = NULL,`phone_mobile` = '+ 7 968 823-63-70',`email` = 'city99@list.ru' WHERE `sphr_client`.`id` = '7b59e0dd-c028-e068-6388-4fe2e6635104';
UPDATE `sphr_client` SET `id` = '7bf38180-ffbb-ee3f-1e6d-4fe2e6475666',`phone_home` = '410 24 67',`phone_mobile` = '',`email` = '4102467@mail.ru' WHERE `sphr_client`.`id` = '7bf38180-ffbb-ee3f-1e6d-4fe2e6475666';
UPDATE `sphr_client` SET `id` = '7c8e52d4-a5ac-153f-ffa8-4fe2e62073e0',`phone_home` = '',`phone_mobile` = '+ 7 985 760-47-06',`email` = 'kss1967@mail.ru' WHERE `sphr_client`.`id` = '7c8e52d4-a5ac-153f-ffa8-4fe2e62073e0';
UPDATE `sphr_client` SET `id` = '7d2cbabe-3bc5-1dda-908a-4fe2e6077492',`phone_home` = '',`phone_mobile` = '+ 7 98549 597-06-36',`email` = 'xumtex@mail.ru' WHERE `sphr_client`.`id` = '7d2cbabe-3bc5-1dda-908a-4fe2e6077492';
UPDATE `sphr_client` SET `id` = '7dd9f15d-b6b3-2737-9acf-4fe2e6d911af',`phone_home` = '',`phone_mobile` = '+ 7 903 771-85-58',`email` = 'krutsk@rambler.ru' WHERE `sphr_client`.`id` = '7dd9f15d-b6b3-2737-9acf-4fe2e6d911af';
UPDATE `sphr_client` SET `id` = '7e771750-65e8-aab6-ddc2-4fe2e62f1168',`phone_home` = '',`phone_mobile` = '+ 7 495 991-84-02',`email` = 'kor_ev@mail.ru' WHERE `sphr_client`.`id` = '7e771750-65e8-aab6-ddc2-4fe2e62f1168';
UPDATE `sphr_client` SET `id` = '7f171185-9715-20b2-974d-4fe2e6011c82',`phone_home` = '',`phone_mobile` = '+ 7 964 588-95-64',`email` = 'fsem@list.ru' WHERE `sphr_client`.`id` = '7f171185-9715-20b2-974d-4fe2e6011c82';
UPDATE `sphr_client` SET `id` = '7ffd8dbe-6274-e7ec-54ee-4fe2e6acfd66',`phone_home` = '',`phone_mobile` = '+ 7 903 961-90-19',`email` = 'kamenev_med@mail.ru' WHERE `sphr_client`.`id` = '7ffd8dbe-6274-e7ec-54ee-4fe2e6acfd66';
UPDATE `sphr_client` SET `id` = '80b002e6-6885-666a-baf5-4fe2e6acc5e1',`phone_home` = '',`phone_mobile` = '+ 7 916 127-63-24',`email` = 'mail@nikolay-dmitriev.com' WHERE `sphr_client`.`id` = '80b002e6-6885-666a-baf5-4fe2e6acc5e1';
UPDATE `sphr_client` SET `id` = '81460c11-5621-ed1e-3d31-4fe2e6a80fa6',`phone_home` = '',`phone_mobile` = '',`email` = 'n-irene@ya.ru' WHERE `sphr_client`.`id` = '81460c11-5621-ed1e-3d31-4fe2e6a80fa6';
UPDATE `sphr_client` SET `id` = '81eb6d5e-e441-2945-ded5-4fe2e6a17987',`phone_home` = '',`phone_mobile` = '+ 7 903 719-71-00',`email` = 's.egorov@mail.ru' WHERE `sphr_client`.`id` = '81eb6d5e-e441-2945-ded5-4fe2e6a17987';
UPDATE `sphr_client` SET `id` = '8284e649-c61b-e0f8-beab-4fe2e6ce1e5e',`phone_home` = '+ 7 495 956-55-57',`phone_mobile` = '',`email` = 'mar33@yandex.ru' WHERE `sphr_client`.`id` = '8284e649-c61b-e0f8-beab-4fe2e6ce1e5e';
UPDATE `sphr_client` SET `id` = '831e9bd3-4dd9-aa2b-de50-4fe2e65d2337',`phone_home` = '',`phone_mobile` = '+ 7 985 767-72-07',`email` = 'soloclub@mail.ru' WHERE `sphr_client`.`id` = '831e9bd3-4dd9-aa2b-de50-4fe2e65d2337';
UPDATE `sphr_client` SET `id` = '83b7c953-b2bf-ec64-995b-4fe2e6f2b534',`phone_home` = '',`phone_mobile` = '+ 7 903 242-83-99',`email` = 'krim09@yandex.ru' WHERE `sphr_client`.`id` = '83b7c953-b2bf-ec64-995b-4fe2e6f2b534';
UPDATE `sphr_client` SET `id` = '845013b3-dcbb-fee0-9f01-4fe2e6756c08',`phone_home` = '',`phone_mobile` = '',`email` = 'alekus@yandex.ru' WHERE `sphr_client`.`id` = '845013b3-dcbb-fee0-9f01-4fe2e6756c08';
UPDATE `sphr_client` SET `id` = '84f05f33-d4fc-a2bf-1d8a-4fe2e61cd01e',`phone_home` = '',`phone_mobile` = '+ 7 916 650-02-50',`email` = 'vs338n@mail.ru' WHERE `sphr_client`.`id` = '84f05f33-d4fc-a2bf-1d8a-4fe2e61cd01e';
UPDATE `sphr_client` SET `id` = '858d60c6-db0a-d91f-7e49-4fe2e64edc86',`phone_home` = '',`phone_mobile` = '+ 7 916 265-06-26',`email` = 'pavel.uskov@gmail.com' WHERE `sphr_client`.`id` = '858d60c6-db0a-d91f-7e49-4fe2e64edc86';
UPDATE `sphr_client` SET `id` = '86258553-4289-2e57-e46c-4fe2e616f860',`phone_home` = '',`phone_mobile` = '+ 7 912 790-16-82',`email` = 'kristina_s@mail.ru' WHERE `sphr_client`.`id` = '86258553-4289-2e57-e46c-4fe2e616f860';
UPDATE `sphr_client` SET `id` = '86bf50cc-42df-212d-cb52-4fe2e6ab0e02',`phone_home` = '',`phone_mobile` = '+ 7 925 860-72-07',`email` = 'worldoftrade@mail.ru' WHERE `sphr_client`.`id` = '86bf50cc-42df-212d-cb52-4fe2e6ab0e02';
UPDATE `sphr_client` SET `id` = '875d64f6-c7ea-b623-dff8-4fe2e6096dc6',`phone_home` = '',`phone_mobile` = '+ 7 921 955-44-55',`email` = '9554455@mail.ru' WHERE `sphr_client`.`id` = '875d64f6-c7ea-b623-dff8-4fe2e6096dc6';
UPDATE `sphr_client` SET `id` = '87f8820e-0adf-d7c9-d1e9-4fe2e6bbde2b',`phone_home` = '',`phone_mobile` = '+ 7 921 794-39-03',`email` = 'mariya-s-1999@mail.ru' WHERE `sphr_client`.`id` = '87f8820e-0adf-d7c9-d1e9-4fe2e6bbde2b';
UPDATE `sphr_client` SET `id` = '8894a36d-81b2-c1a1-7ec4-4fe2e60583f4',`phone_home` = '',`phone_mobile` = '+ 7 921 773-83-24',`email` = NULL WHERE `sphr_client`.`id` = '8894a36d-81b2-c1a1-7ec4-4fe2e60583f4';
UPDATE `sphr_client` SET `id` = '89349a7a-986a-7ffa-710f-4fe2e62b2af8',`phone_home` = '',`phone_mobile` = '+ 7 916 750-10-56',`email` = 'marianikitina1@gmail.com' WHERE `sphr_client`.`id` = '89349a7a-986a-7ffa-710f-4fe2e62b2af8';
UPDATE `sphr_client` SET `id` = '89d4a983-91f4-33cd-5d2a-4fe2e62a7e2e',`phone_home` = '',`phone_mobile` = '+ 7 985 198-01-58',`email` = 'a.kissel@mail.ru' WHERE `sphr_client`.`id` = '89d4a983-91f4-33cd-5d2a-4fe2e62a7e2e';
UPDATE `sphr_client` SET `id` = '8a7632dd-d635-632d-29a8-4fe2e6df8c3c',`phone_home` = '+ 7 812 356-29-35',`phone_mobile` = '+ 7 812 966-93-07',`email` = 'baltmik@gmail.com' WHERE `sphr_client`.`id` = '8a7632dd-d635-632d-29a8-4fe2e6df8c3c';
UPDATE `sphr_client` SET `id` = '8b127a8c-dcee-ac6e-9165-4fe2e6f3e847',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '8b127a8c-dcee-ac6e-9165-4fe2e6f3e847';
UPDATE `sphr_client` SET `id` = '8baf53d5-cb24-33e2-4d67-4fe2e697e7fa',`phone_home` = '+ 7 813 783-56-14',`phone_mobile` = '+ 7 921 405-27-07',`email` = 'andbyk66@mail.ru' WHERE `sphr_client`.`id` = '8baf53d5-cb24-33e2-4d67-4fe2e697e7fa';
UPDATE `sphr_client` SET `id` = '8c47b6e8-589d-24a3-19da-4fe2e6cd7f93',`phone_home` = '',`phone_mobile` = '+ 7 910 303-33-33',`email` = 'bma@live.ru' WHERE `sphr_client`.`id` = '8c47b6e8-589d-24a3-19da-4fe2e6cd7f93';
UPDATE `sphr_client` SET `id` = '8cec0a6c-79e9-30a0-a1e8-4fe2e61c4e30',`phone_home` = '+ 7 495 924-27-51',`phone_mobile` = '',`email` = 'eles-gr@mail.ru' WHERE `sphr_client`.`id` = '8cec0a6c-79e9-30a0-a1e8-4fe2e61c4e30';
UPDATE `sphr_client` SET `id` = '8d816dba-69b5-7e64-5310-4fe2e66d6310',`phone_home` = '+ 7 495 258-56-66',`phone_mobile` = '+ 7 916 638-71-39',`email` = NULL WHERE `sphr_client`.`id` = '8d816dba-69b5-7e64-5310-4fe2e66d6310';
UPDATE `sphr_client` SET `id` = '8e2136c0-ab48-3805-bded-4fe2e62672b3',`phone_home` = 'm.medvedev@rzdp.ru',`phone_mobile` = '+ 7 985 762-22-67',`email` = '7622267@gmail.com' WHERE `sphr_client`.`id` = '8e2136c0-ab48-3805-bded-4fe2e62672b3';
UPDATE `sphr_client` SET `id` = '8ebffd6a-3da7-4a1d-74e2-4fe2e6523e2b',`phone_home` = '',`phone_mobile` = '+ 7 911 922-62-16',`email` = '9002929@gmail.com' WHERE `sphr_client`.`id` = '8ebffd6a-3da7-4a1d-74e2-4fe2e6523e2b';
UPDATE `sphr_client` SET `id` = '8f6c53be-6cc6-eea9-e51f-4fe2e625d3a2',`phone_home` = '7664595',`phone_mobile` = '',`email` = 'olya_change@mail.ru' WHERE `sphr_client`.`id` = '8f6c53be-6cc6-eea9-e51f-4fe2e625d3a2';
UPDATE `sphr_client` SET `id` = '900f51ad-efbc-ac66-c0b9-4fe2e6fba4a9',`phone_home` = '',`phone_mobile` = '+ 7 904 485-63-32',`email` = 'mchernovol@yandex.ru' WHERE `sphr_client`.`id` = '900f51ad-efbc-ac66-c0b9-4fe2e6fba4a9';
UPDATE `sphr_client` SET `id` = '90c71c2a-9096-d6de-8a6c-4fe2e691cacd',`phone_home` = '',`phone_mobile` = '+ 7 911 184-40-79',`email` = 'gym2703@yandex.ru' WHERE `sphr_client`.`id` = '90c71c2a-9096-d6de-8a6c-4fe2e691cacd';
UPDATE `sphr_client` SET `id` = '915dc335-0767-769e-7eb4-4fe2e687b771',`phone_home` = '',`phone_mobile` = '+ 7 903 136-23-00',`email` = 'patrick@moscom.ru' WHERE `sphr_client`.`id` = '915dc335-0767-769e-7eb4-4fe2e687b771';
UPDATE `sphr_client` SET `id` = '91e7ddb9-ceae-34c5-25cf-4fe2e693be76',`phone_home` = '',`phone_mobile` = '+ 7 965 128-17-37',`email` = 'korova70@list.ru' WHERE `sphr_client`.`id` = '91e7ddb9-ceae-34c5-25cf-4fe2e693be76';
UPDATE `sphr_client` SET `id` = '92837bbd-d8ae-08a0-3464-4fe2e6a323a8',`phone_home` = '',`phone_mobile` = '+ 7 964 638-21-59',`email` = 'vkowalenko@aeroflot.ru' WHERE `sphr_client`.`id` = '92837bbd-d8ae-08a0-3464-4fe2e6a323a8';
UPDATE `sphr_client` SET `id` = '931e6a1b-9975-af57-8c00-4fe2e64feff9',`phone_home` = '',`phone_mobile` = '',`email` = 'konstantin.abuzyarov@koettermann.com' WHERE `sphr_client`.`id` = '931e6a1b-9975-af57-8c00-4fe2e64feff9';
UPDATE `sphr_client` SET `id` = '93bf1521-d7be-17f3-9e4e-4fe2e66338a7',`phone_home` = '+ 7 863 245-66-62',`phone_mobile` = '+ 7 918 558-67-74',`email` = 'sweethouse0403@mail.ru' WHERE `sphr_client`.`id` = '93bf1521-d7be-17f3-9e4e-4fe2e66338a7';
UPDATE `sphr_client` SET `id` = '94637f04-1784-6794-45e9-4fe2e69caf77',`phone_home` = '+ 7 909 710-02-46',`phone_mobile` = '',`email` = 'semahina@mail.ru' WHERE `sphr_client`.`id` = '94637f04-1784-6794-45e9-4fe2e69caf77';
UPDATE `sphr_client` SET `id` = '9508a67f-f042-6776-1b59-4fe2e6a82aaf',`phone_home` = '',`phone_mobile` = '+ 7 926 320-45-96',`email` = 'svetlaeva@zapad.ru' WHERE `sphr_client`.`id` = '9508a67f-f042-6776-1b59-4fe2e6a82aaf';
UPDATE `sphr_client` SET `id` = '95adaf2d-3c3f-d44e-16de-4fe2e66b2640',`phone_home` = '',`phone_mobile` = '+ 34 68 503-98-55',`email` = 'irinaz1978@gmail.com' WHERE `sphr_client`.`id` = '95adaf2d-3c3f-d44e-16de-4fe2e66b2640';
UPDATE `sphr_client` SET `id` = '964db752-520e-eb73-0dd6-4fe2e66be768',`phone_home` = '',`phone_mobile` = '+ 7 921 906-52-56',`email` = '1001960@mail.ru' WHERE `sphr_client`.`id` = '964db752-520e-eb73-0dd6-4fe2e66be768';
UPDATE `sphr_client` SET `id` = '96fc1553-7003-5366-33f4-4fe2e6725645',`phone_home` = '+ 7 916 042-99-55',`phone_mobile` = '',`email` = 'fishermaik@gmail.com' WHERE `sphr_client`.`id` = '96fc1553-7003-5366-33f4-4fe2e6725645';
UPDATE `sphr_client` SET `id` = '97958f8f-2bbf-7dfc-0aae-4fe2e6256c0e',`phone_home` = '',`phone_mobile` = '+ 7 926 203-99-30',`email` = 'dgslinkov@gmail.com' WHERE `sphr_client`.`id` = '97958f8f-2bbf-7dfc-0aae-4fe2e6256c0e';
UPDATE `sphr_client` SET `id` = '981eddf7-30a8-ac9e-f43b-4fe2e6e90669',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '981eddf7-30a8-ac9e-f43b-4fe2e6e90669';
UPDATE `sphr_client` SET `id` = '98badce2-79eb-dd60-ac7f-4fe2e693b5ad',`phone_home` = '',`phone_mobile` = '+ 7 921 907-81-71',`email` = 'svetohka@live.ru' WHERE `sphr_client`.`id` = '98badce2-79eb-dd60-ac7f-4fe2e693b5ad';
UPDATE `sphr_client` SET `id` = '9961b53b-b6bb-f983-24bd-4fe2e66f3a80',`phone_home` = '',`phone_mobile` = '+ 7 926 532-08-18',`email` = 'valerabaza@mail.ru' WHERE `sphr_client`.`id` = '9961b53b-b6bb-f983-24bd-4fe2e66f3a80';
UPDATE `sphr_client` SET `id` = '9a0d9833-99a3-f56f-fd21-4fe2e62d89b7',`phone_home` = '',`phone_mobile` = '7159597',`email` = 'gala-meat@yandex.ru' WHERE `sphr_client`.`id` = '9a0d9833-99a3-f56f-fd21-4fe2e62d89b7';
UPDATE `sphr_client` SET `id` = '9aa75e92-e956-6c7a-3120-4fe2e6870553',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '9aa75e92-e956-6c7a-3120-4fe2e6870553';
UPDATE `sphr_client` SET `id` = '9b43f96d-fd6d-bb26-6ac5-4fe2e6f36af1',`phone_home` = '',`phone_mobile` = '+ 7 916 792-12-58',`email` = 'oooludmila@mail.ru' WHERE `sphr_client`.`id` = '9b43f96d-fd6d-bb26-6ac5-4fe2e6f36af1';
UPDATE `sphr_client` SET `id` = '9be2b844-7b57-ad46-d7ad-4fe2e6b54eff',`phone_home` = '',`phone_mobile` = '+ 7 812 464-10-85',`email` = 'sergey.chabanenko@yandex.ru' WHERE `sphr_client`.`id` = '9be2b844-7b57-ad46-d7ad-4fe2e6b54eff';
UPDATE `sphr_client` SET `id` = '9c7edc43-4a8e-0a95-b4db-4fe2e68c660c',`phone_home` = '',`phone_mobile` = '9705048',`email` = 'solovjeva_sveta@mail.ru' WHERE `sphr_client`.`id` = '9c7edc43-4a8e-0a95-b4db-4fe2e68c660c';
UPDATE `sphr_client` SET `id` = '9d2022ab-6cd1-e82f-9c1b-4fe2e63c5271',`phone_home` = '',`phone_mobile` = '+ 7 921 900-90-90',`email` = 't_luba@list.ru' WHERE `sphr_client`.`id` = '9d2022ab-6cd1-e82f-9c1b-4fe2e63c5271';
UPDATE `sphr_client` SET `id` = '9db30a3b-224b-0b07-6b00-4fe2e6508336',`phone_home` = '',`phone_mobile` = '+ 7 911 239-18-88',`email` = 'baltelk@list.ru' WHERE `sphr_client`.`id` = '9db30a3b-224b-0b07-6b00-4fe2e6508336';
UPDATE `sphr_client` SET `id` = '9e4a64bb-a7f0-f36c-22fb-4fe2e6370e5d',`phone_home` = '',`phone_mobile` = '+ 7 911 900-24-36',`email` = 'fonstein@yandex.ru' WHERE `sphr_client`.`id` = '9e4a64bb-a7f0-f36c-22fb-4fe2e6370e5d';
UPDATE `sphr_client` SET `id` = '9ee64814-12fd-c00e-ba53-4fe2e669801b',`phone_home` = '',`phone_mobile` = '+ 7 911 919-03-09',`email` = 'casiopeja@yandex.ru' WHERE `sphr_client`.`id` = '9ee64814-12fd-c00e-ba53-4fe2e669801b';
UPDATE `sphr_client` SET `id` = '9f881df6-eaff-76cb-256d-4fe2e6f8a328',`phone_home` = '',`phone_mobile` = '+ 7 321 634-67-14',`email` = 'l.orlova@list.ru' WHERE `sphr_client`.`id` = '9f881df6-eaff-76cb-256d-4fe2e6f8a328';
UPDATE `sphr_client` SET `id` = 'a030168d-bc3a-60a5-3bb9-4fe2e6250c19',`phone_home` = '',`phone_mobile` = '',`email` = 'pifa05@mail.ru' WHERE `sphr_client`.`id` = 'a030168d-bc3a-60a5-3bb9-4fe2e6250c19';
UPDATE `sphr_client` SET `id` = 'a0cbf04e-c99f-947e-ffb9-4fe2e6aca79c',`phone_home` = '',`phone_mobile` = '+ 7 921 309-87-52',`email` = 'jane_ko@inbox.ru' WHERE `sphr_client`.`id` = 'a0cbf04e-c99f-947e-ffb9-4fe2e6aca79c';
UPDATE `sphr_client` SET `id` = 'a16f25cf-8b14-0182-f8e4-4fe2e663961f',`phone_home` = '',`phone_mobile` = '',`email` = 'kskorodumov@hotmail.com' WHERE `sphr_client`.`id` = 'a16f25cf-8b14-0182-f8e4-4fe2e663961f';
UPDATE `sphr_client` SET `id` = 'a2118d4b-67ba-12fa-cfdc-4fe2e686058d',`phone_home` = '',`phone_mobile` = '+ 7 921 599-55-37',`email` = 'maryfek@mail.ru' WHERE `sphr_client`.`id` = 'a2118d4b-67ba-12fa-cfdc-4fe2e686058d';
UPDATE `sphr_client` SET `id` = 'a2b38dfb-08c8-d35d-04e4-4fe2e65b65c4',`phone_home` = '',`phone_mobile` = '',`email` = 'dudkin@front.ru' WHERE `sphr_client`.`id` = 'a2b38dfb-08c8-d35d-04e4-4fe2e65b65c4';
UPDATE `sphr_client` SET `id` = 'a34e8d7b-90a2-b369-fd21-4fe2e66b135d',`phone_home` = '',`phone_mobile` = '+ 7 921 951-94-67',`email` = 'orlova-velo-spb@mail.ru' WHERE `sphr_client`.`id` = 'a34e8d7b-90a2-b369-fd21-4fe2e66b135d';
UPDATE `sphr_client` SET `id` = 'a3f39692-5421-f008-2d33-4fe2e66d1a40',`phone_home` = '',`phone_mobile` = '+ 7 952 369-42-85',`email` = 'y.podolyak@gmail.com' WHERE `sphr_client`.`id` = 'a3f39692-5421-f008-2d33-4fe2e66d1a40';
UPDATE `sphr_client` SET `id` = 'a490dd1f-bb3f-565d-2afc-4fe2e63437c9',`phone_home` = '+ 7 792 199-77-88',`phone_mobile` = '',`email` = 'voskoboinikov@gmail.com' WHERE `sphr_client`.`id` = 'a490dd1f-bb3f-565d-2afc-4fe2e63437c9';
UPDATE `sphr_client` SET `id` = 'a5384f6f-5fd6-1c22-5bfe-4fe2e64d515d',`phone_home` = '',`phone_mobile` = '',`email` = 'addminoz@gmail.com' WHERE `sphr_client`.`id` = 'a5384f6f-5fd6-1c22-5bfe-4fe2e64d515d';
UPDATE `sphr_client` SET `id` = 'a5e63714-7476-256b-572b-4fe2e6fd761b',`phone_home` = '',`phone_mobile` = '+ 7 905 213-28-25',`email` = 'natalspb@inbox.ru' WHERE `sphr_client`.`id` = 'a5e63714-7476-256b-572b-4fe2e6fd761b';
UPDATE `sphr_client` SET `id` = 'a683ce67-6b94-e6e0-d16c-4fe2e605951e',`phone_home` = '',`phone_mobile` = '',`email` = 'paroshin1@mail.ru' WHERE `sphr_client`.`id` = 'a683ce67-6b94-e6e0-d16c-4fe2e605951e';
UPDATE `sphr_client` SET `id` = 'a72117d3-0d2e-0bf6-1d06-4fe2e6b79035',`phone_home` = '+ 7 963 318-12-39',`phone_mobile` = '',`email` = 'nordini@bk.ru' WHERE `sphr_client`.`id` = 'a72117d3-0d2e-0bf6-1d06-4fe2e6b79035';
UPDATE `sphr_client` SET `id` = 'a7c30ded-887c-e9ca-79b3-4fe2e61b19f1',`phone_home` = '',`phone_mobile` = '',`email` = 'vatitov@bk.ru' WHERE `sphr_client`.`id` = 'a7c30ded-887c-e9ca-79b3-4fe2e61b19f1';
UPDATE `sphr_client` SET `id` = 'a860e36e-08f9-059e-7bb9-4fe2e6c3b1de',`phone_home` = '+ 7 921 971-97-49',`phone_mobile` = '',`email` = 'mara_la@mail.ru' WHERE `sphr_client`.`id` = 'a860e36e-08f9-059e-7bb9-4fe2e6c3b1de';
UPDATE `sphr_client` SET `id` = 'a8f9b927-ac55-553a-10b0-4fe2e6678e66',`phone_home` = '',`phone_mobile` = '+ 7 964 332-90-32',`email` = 'nataly.rusalka@yandex.ru' WHERE `sphr_client`.`id` = 'a8f9b927-ac55-553a-10b0-4fe2e6678e66';
UPDATE `sphr_client` SET `id` = 'a9a074ed-ac31-2c23-ad15-4fe2e6edcdf1',`phone_home` = '',`phone_mobile` = '',`email` = 'rostspb@gmail.com' WHERE `sphr_client`.`id` = 'a9a074ed-ac31-2c23-ad15-4fe2e6edcdf1';
UPDATE `sphr_client` SET `id` = 'aa4a4077-a876-e8b0-8fc3-4fe2e67b2cb3',`phone_home` = '+ 7 921 887-67-75',`phone_mobile` = '+ 7 921 887-67-75',`email` = 'prizrak_812@mail.ru' WHERE `sphr_client`.`id` = 'aa4a4077-a876-e8b0-8fc3-4fe2e67b2cb3';
UPDATE `sphr_client` SET `id` = 'aae44add-2e34-1dfc-3831-4fe2e68f8ced',`phone_home` = '',`phone_mobile` = '+ 7 921 944-07-07',`email` = 'angelangel91@mail.ru' WHERE `sphr_client`.`id` = 'aae44add-2e34-1dfc-3831-4fe2e68f8ced';
UPDATE `sphr_client` SET `id` = 'ab81949d-e572-9e4f-3432-4fe2e6ec5215',`phone_home` = '+ 7 921 429-69-01',`phone_mobile` = '',`email` = 'bukind@bk.ru' WHERE `sphr_client`.`id` = 'ab81949d-e572-9e4f-3432-4fe2e6ec5215';
UPDATE `sphr_client` SET `id` = 'ac2610f9-952f-50ec-d411-4fe2e6b548be',`phone_home` = '+ 7 981 754-97-94',`phone_mobile` = '',`email` = 'mamedrzaevs@yandex.ru' WHERE `sphr_client`.`id` = 'ac2610f9-952f-50ec-d411-4fe2e6b548be';
UPDATE `sphr_client` SET `id` = 'acc927f5-8842-1e98-54e3-4fe2e687c5b0',`phone_home` = '+ 7 911 226-64-62',`phone_mobile` = '',`email` = 'bvd.spb@mail.ru' WHERE `sphr_client`.`id` = 'acc927f5-8842-1e98-54e3-4fe2e687c5b0';
UPDATE `sphr_client` SET `id` = 'ad6afd1e-cf3a-acca-ecad-4fe2e66983ec',`phone_home` = '+ 7 911 117-94-28',`phone_mobile` = '',`email` = 'lilyaac@ya.ru' WHERE `sphr_client`.`id` = 'ad6afd1e-cf3a-acca-ecad-4fe2e66983ec';
UPDATE `sphr_client` SET `id` = 'adfcd039-62b2-b826-1a31-4fe2e6a0c08d',`phone_home` = '',`phone_mobile` = '',`email` = 'o.ogarkov@yandex.ru' WHERE `sphr_client`.`id` = 'adfcd039-62b2-b826-1a31-4fe2e6a0c08d';
UPDATE `sphr_client` SET `id` = 'ae925ec6-f346-69bd-6bc6-4fe2e60f0769',`phone_home` = '',`phone_mobile` = '444 06 44',`email` = 'pablo_lob@mail.ru' WHERE `sphr_client`.`id` = 'ae925ec6-f346-69bd-6bc6-4fe2e60f0769';
UPDATE `sphr_client` SET `id` = 'af2e5627-7275-57b1-41c9-4fe2e6a82292',`phone_home` = '',`phone_mobile` = '+ 7 911 716-34-84',`email` = 'lexatagan@mail.ru' WHERE `sphr_client`.`id` = 'af2e5627-7275-57b1-41c9-4fe2e6a82292';
UPDATE `sphr_client` SET `id` = 'afd156b4-7dcf-3eb9-14de-4fe2e6929adf',`phone_home` = '',`phone_mobile` = '',`email` = 'borodkinaev@inbox.ru' WHERE `sphr_client`.`id` = 'afd156b4-7dcf-3eb9-14de-4fe2e6929adf';
UPDATE `sphr_client` SET `id` = 'b06b8295-867c-81a8-e120-4fe2e65d6edd',`phone_home` = '',`phone_mobile` = '+ 7 921 944-07-07',`email` = 's9440707@yandex.ru' WHERE `sphr_client`.`id` = 'b06b8295-867c-81a8-e120-4fe2e65d6edd';
UPDATE `sphr_client` SET `id` = 'b1077641-6884-e874-1e78-4fe2e6fe1299',`phone_home` = '+ 7 911 286-57-58',`phone_mobile` = '',`email` = 'director@nctravel.ru' WHERE `sphr_client`.`id` = 'b1077641-6884-e874-1e78-4fe2e6fe1299';
UPDATE `sphr_client` SET `id` = 'b1a9dedd-a7fc-647b-3e54-4fe2e6efc327',`phone_home` = '',`phone_mobile` = '+ 7 921 259-79-79',`email` = 'xeniazvetkova@rambler.ru' WHERE `sphr_client`.`id` = 'b1a9dedd-a7fc-647b-3e54-4fe2e6efc327';
UPDATE `sphr_client` SET `id` = 'b25fe454-f3e6-d593-372c-4fe2e6c057db',`phone_home` = '',`phone_mobile` = '+ 7 921 311-31-54',`email` = 'oolyab@gmail.com' WHERE `sphr_client`.`id` = 'b25fe454-f3e6-d593-372c-4fe2e6c057db';
UPDATE `sphr_client` SET `id` = 'b2f8ecbf-faf6-8269-1526-4fe2e6b2b275',`phone_home` = '+ 7 911 089-22-26',`phone_mobile` = '+ 7 911 089-22-26',`email` = 'natazolotayaf@yandex.ru' WHERE `sphr_client`.`id` = 'b2f8ecbf-faf6-8269-1526-4fe2e6b2b275';
UPDATE `sphr_client` SET `id` = 'b39d6aa8-a00b-4ae5-740b-4fe2e663dd12',`phone_home` = '',`phone_mobile` = '+ 7 921 377-77-09',`email` = 'clooney@mail.ru' WHERE `sphr_client`.`id` = 'b39d6aa8-a00b-4ae5-740b-4fe2e663dd12';
UPDATE `sphr_client` SET `id` = 'b43e66e6-05b8-9563-8cf1-4fe2e6463bee',`phone_home` = '',`phone_mobile` = '+ 7 921 641-90-07',`email` = 'aleks27.07@yandex.ru' WHERE `sphr_client`.`id` = 'b43e66e6-05b8-9563-8cf1-4fe2e6463bee';
UPDATE `sphr_client` SET `id` = 'b4dacae8-3b94-1b83-595f-4fe2e64c947d',`phone_home` = '+ 7 911 912-22-29',`phone_mobile` = '',`email` = 'jlebedenko@hotmail.com' WHERE `sphr_client`.`id` = 'b4dacae8-3b94-1b83-595f-4fe2e64c947d';
UPDATE `sphr_client` SET `id` = 'b57236d8-3ec8-efba-e7b6-4fe2e612dc30',`phone_home` = '',`phone_mobile` = '',`email` = '8126250@mail.ru' WHERE `sphr_client`.`id` = 'b57236d8-3ec8-efba-e7b6-4fe2e612dc30';
UPDATE `sphr_client` SET `id` = 'b610c03d-800a-bf6a-b58e-4fe2e669d9bd',`phone_home` = '',`phone_mobile` = '+ 7 903 823-69-30',`email` = '720660@gmail.com' WHERE `sphr_client`.`id` = 'b610c03d-800a-bf6a-b58e-4fe2e669d9bd';
UPDATE `sphr_client` SET `id` = 'b6bb83f3-c1c8-8c86-abd9-4fe2e67e8b9a',`phone_home` = '+ 7 921 626-51-67',`phone_mobile` = '',`email` = 'maksagana@gmail.com' WHERE `sphr_client`.`id` = 'b6bb83f3-c1c8-8c86-abd9-4fe2e67e8b9a';
UPDATE `sphr_client` SET `id` = 'b74c5238-d420-e25d-066b-4fe2e632ded1',`phone_home` = '',`phone_mobile` = '+ 7 921 305-01-31',`email` = 'dmitrii_merkulov@yahoo.com' WHERE `sphr_client`.`id` = 'b74c5238-d420-e25d-066b-4fe2e632ded1';
UPDATE `sphr_client` SET `id` = 'b7e9d967-410a-c6a4-0a78-4fe2e6a36050',`phone_home` = '',`phone_mobile` = '+ 7 960 274-37-12',`email` = 'e-wakulenko@mail.ru' WHERE `sphr_client`.`id` = 'b7e9d967-410a-c6a4-0a78-4fe2e6a36050';
UPDATE `sphr_client` SET `id` = 'b87b02cf-9ead-1e6d-82be-4fe2e643da63',`phone_home` = '',`phone_mobile` = '',`email` = 'oksidserebra@yandex.ru' WHERE `sphr_client`.`id` = 'b87b02cf-9ead-1e6d-82be-4fe2e643da63';
UPDATE `sphr_client` SET `id` = 'ba5fa8bd-57a0-f9f9-5e2e-4fe2e6ec5afa',`phone_home` = '+ 7 921 952-75-45',`phone_mobile` = '+ 7 921 322-09-82',`email` = 'tava1971@mail.ru' WHERE `sphr_client`.`id` = 'ba5fa8bd-57a0-f9f9-5e2e-4fe2e6ec5afa';
UPDATE `sphr_client` SET `id` = 'bb02cc60-4c0b-a1fc-8406-4fe2e69a02f9',`phone_home` = '',`phone_mobile` = '+ 7 916 628-64-85',`email` = 'zaharova_om99@mail.ru' WHERE `sphr_client`.`id` = 'bb02cc60-4c0b-a1fc-8406-4fe2e69a02f9';
UPDATE `sphr_client` SET `id` = 'bb8f5d2b-d072-7a36-988b-4fe2e674f1c2',`phone_home` = '',`phone_mobile` = '+ 7 905 598-60-25',`email` = 'vryzhikov47@mail.ru' WHERE `sphr_client`.`id` = 'bb8f5d2b-d072-7a36-988b-4fe2e674f1c2';
UPDATE `sphr_client` SET `id` = 'bc2f1ee8-d682-f7b4-aaf4-4fe2e615ecae',`phone_home` = '',`phone_mobile` = '+ 7 915 040-40-27',`email` = 'moguchaya@mail.ru' WHERE `sphr_client`.`id` = 'bc2f1ee8-d682-f7b4-aaf4-4fe2e615ecae';
UPDATE `sphr_client` SET `id` = 'bccb0bd4-6b56-fa4a-ebaf-4fe2e66940c1',`phone_home` = '',`phone_mobile` = '+ 7 926 232-15-29',`email` = 'ardaleon842@mail.ru' WHERE `sphr_client`.`id` = 'bccb0bd4-6b56-fa4a-ebaf-4fe2e66940c1';
UPDATE `sphr_client` SET `id` = 'bd601b2c-c55b-d412-cce0-4fe2e655d9e3',`phone_home` = '',`phone_mobile` = '+ 7 916 677-88-09',`email` = 'alekseeva-d@yandex.ru' WHERE `sphr_client`.`id` = 'bd601b2c-c55b-d412-cce0-4fe2e655d9e3';
UPDATE `sphr_client` SET `id` = 'bdf4cf1d-ee51-5f04-4468-4fe2e61e6314',`phone_home` = '',`phone_mobile` = '+ 7 916 555-44-87',`email` = 'terminal8@mail.ru' WHERE `sphr_client`.`id` = 'bdf4cf1d-ee51-5f04-4468-4fe2e61e6314';
UPDATE `sphr_client` SET `id` = 'be9cb5f0-c6b7-46a4-12e6-4fe2e6eef8a7',`phone_home` = '',`phone_mobile` = '+ 7 916 114-99-08',`email` = 'lion1808@mail.ru' WHERE `sphr_client`.`id` = 'be9cb5f0-c6b7-46a4-12e6-4fe2e6eef8a7';
UPDATE `sphr_client` SET `id` = 'bf445a53-6f4b-b209-693f-4fe2e67542fd',`phone_home` = '+ 7 903 152-02-81',`phone_mobile` = '',`email` = 'antupitsyn@gmail.com' WHERE `sphr_client`.`id` = 'bf445a53-6f4b-b209-693f-4fe2e67542fd';
UPDATE `sphr_client` SET `id` = 'bfe9f9d3-964a-6c12-1dd1-4fe2e6d1f70e',`phone_home` = '',`phone_mobile` = '',`email` = '226060@bk.ru' WHERE `sphr_client`.`id` = 'bfe9f9d3-964a-6c12-1dd1-4fe2e6d1f70e';
UPDATE `sphr_client` SET `id` = 'c0820582-20d2-30ae-3a14-4fe2e6745357',`phone_home` = '',`phone_mobile` = '+ 7 926 141-03-75',`email` = 'a_aximova@mail.ru' WHERE `sphr_client`.`id` = 'c0820582-20d2-30ae-3a14-4fe2e6745357';
UPDATE `sphr_client` SET `id` = 'c118efe6-90f2-ed94-6156-4fe2e6e6977e',`phone_home` = '',`phone_mobile` = '',`email` = 'pwa55@mail.ru' WHERE `sphr_client`.`id` = 'c118efe6-90f2-ed94-6156-4fe2e6e6977e';
UPDATE `sphr_client` SET `id` = 'c1ba84be-83a7-9337-b722-4fe2e68e16ce',`phone_home` = '+ 7 965 340-04-11',`phone_mobile` = '+ 7 965 340-04-11',`email` = 'ts964@yandex.ru' WHERE `sphr_client`.`id` = 'c1ba84be-83a7-9337-b722-4fe2e68e16ce';
UPDATE `sphr_client` SET `id` = 'c259c22b-2a2d-96a0-92d6-4fe2e61c3e69',`phone_home` = '',`phone_mobile` = '+ 7 967 223-50-83',`email` = 'chokadzeyum@mail.ru' WHERE `sphr_client`.`id` = 'c259c22b-2a2d-96a0-92d6-4fe2e61c3e69';
UPDATE `sphr_client` SET `id` = 'c2f5b1c8-32ea-e310-0747-4fe2e63b9474',`phone_home` = '+ 7 964 517-73-93',`phone_mobile` = '+ 7 964 517-73-93',`email` = 'ekimov@bk.ru' WHERE `sphr_client`.`id` = 'c2f5b1c8-32ea-e310-0747-4fe2e63b9474';
UPDATE `sphr_client` SET `id` = 'c392a9fa-e758-50ae-f124-4fe2e64434f6',`phone_home` = '+ 7 903 796-42-73',`phone_mobile` = '+ 7 903 796-42-73',`email` = 'chounmaeva@mail.ru' WHERE `sphr_client`.`id` = 'c392a9fa-e758-50ae-f124-4fe2e64434f6';
UPDATE `sphr_client` SET `id` = 'c43460d5-7c4a-852c-2983-4fe2e699183e',`phone_home` = '',`phone_mobile` = '+ 7 964 506-25-12',`email` = 'freddo@mail.ru' WHERE `sphr_client`.`id` = 'c43460d5-7c4a-852c-2983-4fe2e699183e';
UPDATE `sphr_client` SET `id` = 'c4d2e99f-719d-dd1e-c523-4fe2e6da23f7',`phone_home` = '+ 7 910 400-43-56',`phone_mobile` = '+ 7 910 400-43-56',`email` = 'tso_umu@mail.ru' WHERE `sphr_client`.`id` = 'c4d2e99f-719d-dd1e-c523-4fe2e6da23f7';
UPDATE `sphr_client` SET `id` = 'c5721b87-0c9b-346a-2914-4fe2e63cf3ec',`phone_home` = '+ 7 905 769-14-61',`phone_mobile` = '+ 7 905 769-14-61',`email` = 'zurihzu@yandex.ru' WHERE `sphr_client`.`id` = 'c5721b87-0c9b-346a-2914-4fe2e63cf3ec';
UPDATE `sphr_client` SET `id` = 'c6149bec-945f-d5a0-1655-4fe2e694d149',`phone_home` = '+ 7 925 800-22-30',`phone_mobile` = '+ 7 925 800-22-30',`email` = 'malaraeva@inbox.ru' WHERE `sphr_client`.`id` = 'c6149bec-945f-d5a0-1655-4fe2e694d149';
UPDATE `sphr_client` SET `id` = 'c6b05512-d0f1-4056-7b5f-4fe2e6e10eb4',`phone_home` = '',`phone_mobile` = '+ 7 910 469-62-17',`email` = 'akhodataev@mail.ru' WHERE `sphr_client`.`id` = 'c6b05512-d0f1-4056-7b5f-4fe2e6e10eb4';
UPDATE `sphr_client` SET `id` = 'c760a41f-3122-2650-8460-4fe2e65f5f23',`phone_home` = '+ 7 499 408-50-55',`phone_mobile` = '',`email` = 'jsolopova@gmail.com' WHERE `sphr_client`.`id` = 'c760a41f-3122-2650-8460-4fe2e65f5f23';
UPDATE `sphr_client` SET `id` = 'c809cfa1-4976-1511-4389-4fe2e6b9fc60',`phone_home` = '',`phone_mobile` = '+ 7 903 763-62-01',`email` = 'dj_tachat@mail.ru' WHERE `sphr_client`.`id` = 'c809cfa1-4976-1511-4389-4fe2e6b9fc60';
UPDATE `sphr_client` SET `id` = 'c8a12d53-cc2f-847f-722f-4fe2e6467237',`phone_home` = '+ 7 903 505-37-09',`phone_mobile` = '+ 7 903 505-37-09',`email` = 'ksunchik_84@mail.ru' WHERE `sphr_client`.`id` = 'c8a12d53-cc2f-847f-722f-4fe2e6467237';
UPDATE `sphr_client` SET `id` = 'c93eb594-1126-f764-2d20-4fe2e69b1788',`phone_home` = '',`phone_mobile` = '+ 7 926 245-42-92',`email` = 'ekaterina@elite-po.ru' WHERE `sphr_client`.`id` = 'c93eb594-1126-f764-2d20-4fe2e69b1788';
UPDATE `sphr_client` SET `id` = 'c9d8ca3b-1c51-8286-4e65-4fe2e6fc9f80',`phone_home` = '+ 7 919 762-99-82',`phone_mobile` = '+ 7 919 762-99-82',`email` = 'htmr@mail.ru' WHERE `sphr_client`.`id` = 'c9d8ca3b-1c51-8286-4e65-4fe2e6fc9f80';
UPDATE `sphr_client` SET `id` = 'ca7b34e5-de3d-7777-e63c-4fe2e6069eb1',`phone_home` = '',`phone_mobile` = '+ 7 903 741-37-47',`email` = 'maruhinalex@mail.ru' WHERE `sphr_client`.`id` = 'ca7b34e5-de3d-7777-e63c-4fe2e6069eb1';
UPDATE `sphr_client` SET `id` = 'cb1a0442-2fd6-5c79-7a1e-4fe2e633ed41',`phone_home` = '+ 7 909 686-99-77',`phone_mobile` = '',`email` = '777999mr@gmail.com' WHERE `sphr_client`.`id` = 'cb1a0442-2fd6-5c79-7a1e-4fe2e633ed41';
UPDATE `sphr_client` SET `id` = 'cbad261f-14ff-f60d-5531-4fe2e655432b',`phone_home` = '',`phone_mobile` = '',`email` = 'alivanov@yahoo.com' WHERE `sphr_client`.`id` = 'cbad261f-14ff-f60d-5531-4fe2e655432b';
UPDATE `sphr_client` SET `id` = 'cc43e913-1d86-2545-fdfa-4fe2e6f3b637',`phone_home` = '+ 7 903 248-32-38',`phone_mobile` = '+ 7 903 248-32-38',`email` = 'alorlik@yandex.ru' WHERE `sphr_client`.`id` = 'cc43e913-1d86-2545-fdfa-4fe2e6f3b637';
UPDATE `sphr_client` SET `id` = 'cce53eee-4be9-826e-530b-4fe2e6b061d9',`phone_home` = '+ 7 916 646-80-47',`phone_mobile` = '+ 7 916 646-80-47',`email` = 'homyachishka@mail.ru' WHERE `sphr_client`.`id` = 'cce53eee-4be9-826e-530b-4fe2e6b061d9';
UPDATE `sphr_client` SET `id` = 'cd833d92-2d5e-b7ea-63ee-4fe2e6919891',`phone_home` = '+ 7 917 563-16-57',`phone_mobile` = '+ 7 917 563-16-57',`email` = 'belova2105@mail.ru' WHERE `sphr_client`.`id` = 'cd833d92-2d5e-b7ea-63ee-4fe2e6919891';
UPDATE `sphr_client` SET `id` = 'ce21643c-846f-d4ad-9d03-4fe2e674f77a',`phone_home` = '+ 7 910 002-84-84',`phone_mobile` = '+ 7 910 002-84-84',`email` = 'makavto07@mail.ru' WHERE `sphr_client`.`id` = 'ce21643c-846f-d4ad-9d03-4fe2e674f77a';
UPDATE `sphr_client` SET `id` = 'cec12703-22d2-1338-df96-4fe2e610dfc9',`phone_home` = '',`phone_mobile` = '',`email` = '777travel@mail.ru' WHERE `sphr_client`.`id` = 'cec12703-22d2-1338-df96-4fe2e610dfc9';
UPDATE `sphr_client` SET `id` = 'cf60e193-e614-5138-b767-4fe2e642b512',`phone_home` = '',`phone_mobile` = '',`email` = 'slm@live.ru' WHERE `sphr_client`.`id` = 'cf60e193-e614-5138-b767-4fe2e642b512';
UPDATE `sphr_client` SET `id` = 'cff5d0a8-541c-6a38-ac5c-4fe2e678247a',`phone_home` = '',`phone_mobile` = '+ 7 985 128-03-43',`email` = 'mahrova@bk.ru' WHERE `sphr_client`.`id` = 'cff5d0a8-541c-6a38-ac5c-4fe2e678247a';
UPDATE `sphr_client` SET `id` = 'd099285a-7338-a9c5-cd25-4fe2e6419749',`phone_home` = '',`phone_mobile` = '+ 7 903 792-10-90',`email` = 'goldlav@mail.ru' WHERE `sphr_client`.`id` = 'd099285a-7338-a9c5-cd25-4fe2e6419749';
UPDATE `sphr_client` SET `id` = 'd1395ae5-8dce-0aee-0132-4fe2e6414afe',`phone_home` = '',`phone_mobile` = '+ 7 926 218-93-56',`email` = 'nmuk@mail.ru' WHERE `sphr_client`.`id` = 'd1395ae5-8dce-0aee-0132-4fe2e6414afe';
UPDATE `sphr_client` SET `id` = 'd1d37f28-0ba8-2f53-b74a-4fe2e69c3a78',`phone_home` = '+ 7 909 912-00-54',`phone_mobile` = '+ 7 909 912-00-54',`email` = 'pappilon06@mail.ru' WHERE `sphr_client`.`id` = 'd1d37f28-0ba8-2f53-b74a-4fe2e69c3a78';
UPDATE `sphr_client` SET `id` = 'd27ea557-b0fe-6a9e-93fa-4fe2e6d00ca9',`phone_home` = '+ 7 926 572-42-82',`phone_mobile` = '+ 7 926 572-42-82',`email` = 'constantini@mail.ru' WHERE `sphr_client`.`id` = 'd27ea557-b0fe-6a9e-93fa-4fe2e6d00ca9';
UPDATE `sphr_client` SET `id` = 'd3212584-37e0-0188-c179-4fe2e654e70f',`phone_home` = '+ 7 925 887-06-20',`phone_mobile` = '+ 7 925 887-06-20',`email` = 'eternica@mail.ru' WHERE `sphr_client`.`id` = 'd3212584-37e0-0188-c179-4fe2e654e70f';
UPDATE `sphr_client` SET `id` = 'd3be9388-ee25-db46-fcf9-4fe2e67f8347',`phone_home` = '+ 7 962 931-00-16',`phone_mobile` = '+ 7 9 265-29-67',`email` = 'VSM02@yandex.ru' WHERE `sphr_client`.`id` = 'd3be9388-ee25-db46-fcf9-4fe2e67f8347';
UPDATE `sphr_client` SET `id` = 'd45e575f-2073-31b5-1c5f-4fe2e6957bcb',`phone_home` = '+ 7 903 621-27-09',`phone_mobile` = '+ 7 903 621-27-09',`email` = 'k.11.1987@gmail.com' WHERE `sphr_client`.`id` = 'd45e575f-2073-31b5-1c5f-4fe2e6957bcb';
UPDATE `sphr_client` SET `id` = 'd4f8de93-451f-799b-10b5-4fe2e6b389ed',`phone_home` = '',`phone_mobile` = '',`email` = 'sbelin@rambler.ru' WHERE `sphr_client`.`id` = 'd4f8de93-451f-799b-10b5-4fe2e6b389ed';
UPDATE `sphr_client` SET `id` = 'd593b184-d17c-52f6-f22f-4fe2e6e11640',`phone_home` = '+ 7 916 696-44-80',`phone_mobile` = '+ 7 916 696-44-80',`email` = 'kolya_bo@mail.ru' WHERE `sphr_client`.`id` = 'd593b184-d17c-52f6-f22f-4fe2e6e11640';
UPDATE `sphr_client` SET `id` = 'd633399c-ea21-dd7b-a42b-4fe2e68a7893',`phone_home` = '',`phone_mobile` = '+ 7 962 990-63-23',`email` = 'vip.zemli@yandex.ru' WHERE `sphr_client`.`id` = 'd633399c-ea21-dd7b-a42b-4fe2e68a7893';
UPDATE `sphr_client` SET `id` = 'd6da24fe-bb1e-c8b3-2e29-4fe2e6a9104a',`phone_home` = '+ 7 499 977-46-20',`phone_mobile` = '',`email` = 'spiridonov.valery2011@yandex.ru' WHERE `sphr_client`.`id` = 'd6da24fe-bb1e-c8b3-2e29-4fe2e6a9104a';
UPDATE `sphr_client` SET `id` = 'd776604d-b46b-a7c1-1791-4fe2e6839df8',`phone_home` = '',`phone_mobile` = '+ 7 906 048-00-88',`email` = 'demid.balashov@gmail.com' WHERE `sphr_client`.`id` = 'd776604d-b46b-a7c1-1791-4fe2e6839df8';
UPDATE `sphr_client` SET `id` = 'd814ec6e-e701-9dbe-e30f-4fe2e67da1d1',`phone_home` = '',`phone_mobile` = '+ 7 906 795-76-34',`email` = 'v_almazov33@mail.ru' WHERE `sphr_client`.`id` = 'd814ec6e-e701-9dbe-e30f-4fe2e67da1d1';
UPDATE `sphr_client` SET `id` = 'd8ae06d9-16ba-b2c7-7173-4fe2e6384138',`phone_home` = '',`phone_mobile` = '',`email` = 'fedotova_I_a@mail.ru' WHERE `sphr_client`.`id` = 'd8ae06d9-16ba-b2c7-7173-4fe2e6384138';
UPDATE `sphr_client` SET `id` = 'd946cbb5-ad96-7ba8-4606-4fe2e6adbce3',`phone_home` = '',`phone_mobile` = '',`email` = 'zial@prov.ru' WHERE `sphr_client`.`id` = 'd946cbb5-ad96-7ba8-4606-4fe2e6adbce3';
UPDATE `sphr_client` SET `id` = 'd9e4f8b3-c72f-6f75-7bc6-4fe2e6f9df2e',`phone_home` = '',`phone_mobile` = '+ 7 926 267-83-82',`email` = 'bigbux@mail.ru' WHERE `sphr_client`.`id` = 'd9e4f8b3-c72f-6f75-7bc6-4fe2e6f9df2e';
UPDATE `sphr_client` SET `id` = 'da8b2b51-51a8-d23b-7956-4fe2e65fe1a0',`phone_home` = '+ 7 923 610-93-67',`phone_mobile` = '+ 7 923 610-93-67',`email` = 'volud@inbox.ru' WHERE `sphr_client`.`id` = 'da8b2b51-51a8-d23b-7956-4fe2e65fe1a0';
UPDATE `sphr_client` SET `id` = 'db22ad67-d6c9-a462-fa78-4fe2e69a1748',`phone_home` = '',`phone_mobile` = '+ 7 917 599-24-07',`email` = 'novikovatr@yandex.ru' WHERE `sphr_client`.`id` = 'db22ad67-d6c9-a462-fa78-4fe2e69a1748';
UPDATE `sphr_client` SET `id` = 'dbbe24e1-7f8e-29ed-e771-4fe2e6f72b9b',`phone_home` = '',`phone_mobile` = '+ 7 903 208-01-38',`email` = 'miha317@inbox.ru' WHERE `sphr_client`.`id` = 'dbbe24e1-7f8e-29ed-e771-4fe2e6f72b9b';
UPDATE `sphr_client` SET `id` = 'dc5aee7e-33d7-2e40-c27b-4fe2e6d47e1b',`phone_home` = '+ 7 916 703-47-61',`phone_mobile` = '+ 7 916 703-47-61',`email` = 'john127@yandex.ru' WHERE `sphr_client`.`id` = 'dc5aee7e-33d7-2e40-c27b-4fe2e6d47e1b';
UPDATE `sphr_client` SET `id` = 'dd021072-e684-f01f-47a3-4fe2e661a26f',`phone_home` = '+ 7 905 577-94-18',`phone_mobile` = '+ 7 905 577-94-18',`email` = 'cepellin@yandex.ru' WHERE `sphr_client`.`id` = 'dd021072-e684-f01f-47a3-4fe2e661a26f';
UPDATE `sphr_client` SET `id` = 'dda8780e-6306-b8aa-7af1-4fe2e686f09e',`phone_home` = '',`phone_mobile` = '',`email` = 'ivan7pov8a@mail.ru' WHERE `sphr_client`.`id` = 'dda8780e-6306-b8aa-7af1-4fe2e686f09e';
UPDATE `sphr_client` SET `id` = 'de4b2aa0-0c52-da5d-e1eb-4fe2e62bc1b6',`phone_home` = '',`phone_mobile` = '+ 7 495 648-50-67',`email` = 'astarrg@gmail.com' WHERE `sphr_client`.`id` = 'de4b2aa0-0c52-da5d-e1eb-4fe2e62bc1b6';
UPDATE `sphr_client` SET `id` = 'def69815-2f64-449a-1e30-4fe2e69f5e6a',`phone_home` = '',`phone_mobile` = '',`email` = 'newsfactory@mail.ru' WHERE `sphr_client`.`id` = 'def69815-2f64-449a-1e30-4fe2e69f5e6a';
UPDATE `sphr_client` SET `id` = 'df965c63-ffdd-d94e-8fe7-4fe2e65bddc6',`phone_home` = '',`phone_mobile` = '+ 7 910 777-38-70',`email` = 'mebeldv2@yandex.ru' WHERE `sphr_client`.`id` = 'df965c63-ffdd-d94e-8fe7-4fe2e65bddc6';
UPDATE `sphr_client` SET `id` = 'e02b8240-6640-fde7-4ea7-4fe2e6067171',`phone_home` = '',`phone_mobile` = '+ 7 909 940-99-76',`email` = 'mariana.gern@mail.ru' WHERE `sphr_client`.`id` = 'e02b8240-6640-fde7-4ea7-4fe2e6067171';
UPDATE `sphr_client` SET `id` = 'e0ca36a5-93d8-ac36-0f9d-4fe2e6b9fd83',`phone_home` = '+ 7 909 911-61-36',`phone_mobile` = '',`email` = 'nat-cvetochkina@yandex.ru' WHERE `sphr_client`.`id` = 'e0ca36a5-93d8-ac36-0f9d-4fe2e6b9fd83';
UPDATE `sphr_client` SET `id` = 'e16e054f-dd80-ac1b-482c-4fe2e6c060ae',`phone_home` = '+ 7 903 500-48-90',`phone_mobile` = '',`email` = 'atangelo@mail.ru' WHERE `sphr_client`.`id` = 'e16e054f-dd80-ac1b-482c-4fe2e6c060ae';
UPDATE `sphr_client` SET `id` = 'e201de86-6d33-6110-f5df-4fe2e68d5d82',`phone_home` = '',`phone_mobile` = '',`email` = 'a_m_ryabov@mail.ru' WHERE `sphr_client`.`id` = 'e201de86-6d33-6110-f5df-4fe2e68d5d82';
UPDATE `sphr_client` SET `id` = 'e2a1f64a-fd88-b3cc-0047-4fe2e671b384',`phone_home` = '+ 7 921 345-23-62',`phone_mobile` = '+ 7 921 345-23-62',`email` = 'megry@mail.ru' WHERE `sphr_client`.`id` = 'e2a1f64a-fd88-b3cc-0047-4fe2e671b384';
UPDATE `sphr_client` SET `id` = 'e337e680-ee82-518f-5923-4fe2e6dc83ca',`phone_home` = '+ 7 921 964-78-15',`phone_mobile` = '+ 7 921 964-78-15',`email` = 'yashin@smec-nw.ru' WHERE `sphr_client`.`id` = 'e337e680-ee82-518f-5923-4fe2e6dc83ca';
UPDATE `sphr_client` SET `id` = 'e3df8de1-c099-427c-ce8f-4fe2e65b2503',`phone_home` = '',`phone_mobile` = '+ 7 905 737-74-00',`email` = 'galina9056@yandex.ru' WHERE `sphr_client`.`id` = 'e3df8de1-c099-427c-ce8f-4fe2e65b2503';
UPDATE `sphr_client` SET `id` = 'e4781931-05b5-0108-5830-4fe2e611b73c',`phone_home` = '+ 7 812 544-60-24',`phone_mobile` = '+ 7 812 544-60-24',`email` = 'invest.stroy@inbox.ru' WHERE `sphr_client`.`id` = 'e4781931-05b5-0108-5830-4fe2e611b73c';
UPDATE `sphr_client` SET `id` = 'e52c9d4c-6551-71c6-93ab-4fe2e634719e',`phone_home` = '+ 371 2 947-25-47',`phone_mobile` = '+ 371 2 947-25-47',`email` = 'drkalvane@inbox.ru' WHERE `sphr_client`.`id` = 'e52c9d4c-6551-71c6-93ab-4fe2e634719e';
UPDATE `sphr_client` SET `id` = 'e5c8e41a-1d4f-f59b-864a-4fe2e6786e34',`phone_home` = '+ 7 911 137-05-36',`phone_mobile` = '+ 7 911 137-05-36',`email` = 'kern4@mail.ru' WHERE `sphr_client`.`id` = 'e5c8e41a-1d4f-f59b-864a-4fe2e6786e34';
UPDATE `sphr_client` SET `id` = 'e6631654-548d-7190-caed-4fe2e6fa65d8',`phone_home` = '',`phone_mobile` = '',`email` = 'olga.777@onego.ru' WHERE `sphr_client`.`id` = 'e6631654-548d-7190-caed-4fe2e6fa65d8';
UPDATE `sphr_client` SET `id` = 'e715aee5-8f75-8c88-2e59-4fe2e624310d',`phone_home` = '+ 7 911 225-22-56',`phone_mobile` = '+ 7 911 225-22-56',`email` = '2252256@list.ru' WHERE `sphr_client`.`id` = 'e715aee5-8f75-8c88-2e59-4fe2e624310d';
UPDATE `sphr_client` SET `id` = 'e7bc3994-665d-ff8b-16fd-4fe2e68fb307',`phone_home` = '+ 7 909 587-13-31',`phone_mobile` = '+ 7 909 587-13-31',`email` = 'novogireevo@gmail.com' WHERE `sphr_client`.`id` = 'e7bc3994-665d-ff8b-16fd-4fe2e68fb307';
UPDATE `sphr_client` SET `id` = 'e86ee508-5176-9c82-46ea-4fe2e679dec2',`phone_home` = '294-25-42',`phone_mobile` = '294-25-42',`email` = 'imz2@yandex.ru' WHERE `sphr_client`.`id` = 'e86ee508-5176-9c82-46ea-4fe2e679dec2';
UPDATE `sphr_client` SET `id` = 'e9172899-9e99-799a-0457-4fe2e679e27a',`phone_home` = '',`phone_mobile` = '',`email` = 'kukansn@gmail.com' WHERE `sphr_client`.`id` = 'e9172899-9e99-799a-0457-4fe2e679e27a';
UPDATE `sphr_client` SET `id` = 'e9b4437e-d00b-7acb-d37f-4fe2e6e91f37',`phone_home` = '',`phone_mobile` = '',`email` = 'grenkin.spb@mail.ru' WHERE `sphr_client`.`id` = 'e9b4437e-d00b-7acb-d37f-4fe2e6e91f37';
UPDATE `sphr_client` SET `id` = 'ea55982e-3058-fe03-982e-4fe2e678a9be',`phone_home` = '+ 7 906 244-20-50',`phone_mobile` = '+ 7 906 244-20-50',`email` = 'e_zmachin@mail.ru' WHERE `sphr_client`.`id` = 'ea55982e-3058-fe03-982e-4fe2e678a9be';
UPDATE `sphr_client` SET `id` = 'eb00f556-61fe-571e-f94b-4fe2e670ea6d',`phone_home` = '',`phone_mobile` = '+ 7 921 947-88-69',`email` = 'shaewa17@mail.ru' WHERE `sphr_client`.`id` = 'eb00f556-61fe-571e-f94b-4fe2e670ea6d';
UPDATE `sphr_client` SET `id` = 'ebaa7afc-ece3-6654-eb41-4fe2e6bf4d8b',`phone_home` = '',`phone_mobile` = '+ 7 952 357-73-32',`email` = 'dvin@mail.ru' WHERE `sphr_client`.`id` = 'ebaa7afc-ece3-6654-eb41-4fe2e6bf4d8b';
UPDATE `sphr_client` SET `id` = 'ec4a751b-5022-03d0-b6fd-4fe2e6cc8e64',`phone_home` = '',`phone_mobile` = '',`email` = 'alteza.spb@mail.ru' WHERE `sphr_client`.`id` = 'ec4a751b-5022-03d0-b6fd-4fe2e6cc8e64';
UPDATE `sphr_client` SET `id` = 'ecedea31-06bd-15a5-6eb9-4fe2e6c352e2',`phone_home` = '',`phone_mobile` = '+ 7 906 255-55-55',`email` = 'zhiarda@mail.ru' WHERE `sphr_client`.`id` = 'ecedea31-06bd-15a5-6eb9-4fe2e6c352e2';
UPDATE `sphr_client` SET `id` = 'ed9029ac-eae8-2741-77b3-4fe2e6c90513',`phone_home` = '',`phone_mobile` = '975-07-10',`email` = 'krist2000@mail.ru' WHERE `sphr_client`.`id` = 'ed9029ac-eae8-2741-77b3-4fe2e6c90513';
UPDATE `sphr_client` SET `id` = 'ee35cd79-8f68-e533-305b-4fe2e6f3b629',`phone_home` = '',`phone_mobile` = '+ 7 904 514-32-16',`email` = 'ekobtsova@gmail.com' WHERE `sphr_client`.`id` = 'ee35cd79-8f68-e533-305b-4fe2e6f3b629';
UPDATE `sphr_client` SET `id` = 'eecb00a3-9b5e-6896-5f52-4fe2e61d1301',`phone_home` = '',`phone_mobile` = '+ 7 921 337-25-50',`email` = 'lapelis@yandex.ru' WHERE `sphr_client`.`id` = 'eecb00a3-9b5e-6896-5f52-4fe2e61d1301';
UPDATE `sphr_client` SET `id` = 'ef66a474-a9e2-186c-2a0d-4fe2e60649bb',`phone_home` = '',`phone_mobile` = '+ 7 905 218-09-65',`email` = 'ivan-stolyarov@mail.ru' WHERE `sphr_client`.`id` = 'ef66a474-a9e2-186c-2a0d-4fe2e60649bb';
UPDATE `sphr_client` SET `id` = 'f00f6ded-2d9f-13a6-2117-4fe2e6e8ce85',`phone_home` = '',`phone_mobile` = '+ 7 921 939-75-32',`email` = 'ivanov.anatolij2012@yandex.ru' WHERE `sphr_client`.`id` = 'f00f6ded-2d9f-13a6-2117-4fe2e6e8ce85';
UPDATE `sphr_client` SET `id` = 'f0be2fb1-33f8-0475-f1a0-4fe2e6b37496',`phone_home` = '',`phone_mobile` = '',`email` = 'nataswan@list.ru' WHERE `sphr_client`.`id` = 'f0be2fb1-33f8-0475-f1a0-4fe2e6b37496';
UPDATE `sphr_client` SET `id` = 'f15c058f-8ea2-ed69-4d3e-4fe2e6e19de3',`phone_home` = '',`phone_mobile` = '+ 7 921 635-99-33',`email` = 'enter@hotmail.ru' WHERE `sphr_client`.`id` = 'f15c058f-8ea2-ed69-4d3e-4fe2e6e19de3';
UPDATE `sphr_client` SET `id` = 'f1f63f83-186a-18db-a147-4fe2e629f8fe',`phone_home` = '',`phone_mobile` = '+ 7 914 191-38-69',`email` = 'ianmaciver60@yahoo.com' WHERE `sphr_client`.`id` = 'f1f63f83-186a-18db-a147-4fe2e629f8fe';
UPDATE `sphr_client` SET `id` = 'f295c2f1-6e83-d7f8-5323-4fe2e63929b1',`phone_home` = '',`phone_mobile` = '',`email` = 'zimaroom@gmail.com' WHERE `sphr_client`.`id` = 'f295c2f1-6e83-d7f8-5323-4fe2e63929b1';
UPDATE `sphr_client` SET `id` = 'f33f5e4e-3e7e-6349-f010-4fe2e63bca87',`phone_home` = '',`phone_mobile` = '+ 7 931 254-67-81',`email` = 'irina-spb2004@mail.ru' WHERE `sphr_client`.`id` = 'f33f5e4e-3e7e-6349-f010-4fe2e63bca87';
UPDATE `sphr_client` SET `id` = 'f3e8bc0e-b81f-a92f-f076-4fe2e675640d',`phone_home` = '',`phone_mobile` = '',`email` = 'annika22@yandex.ru' WHERE `sphr_client`.`id` = 'f3e8bc0e-b81f-a92f-f076-4fe2e675640d';
UPDATE `sphr_client` SET `id` = '6d600b91-29c7-70b3-4477-4fe2e62aaf1a',`phone_home` = '',`phone_mobile` = '',`email` = 'kon_vv@mail.ru' WHERE `sphr_client`.`id` = '6d600b91-29c7-70b3-4477-4fe2e62aaf1a';
UPDATE `sphr_client` SET `id` = '10a203af-742d-55d3-fb30-4fe2e6e94b0b',`phone_home` = '',`phone_mobile` = '+ 7 921 965-95-18',`email` = 'sementitov@gmail.com' WHERE `sphr_client`.`id` = '10a203af-742d-55d3-fb30-4fe2e6e94b0b';
UPDATE `sphr_client` SET `id` = '1b3d09d9-712a-5165-b516-4fe2e6abc9e8',`phone_home` = '',`phone_mobile` = '+ 7 962 717-90-64',`email` = 'vio-58@mail.ru' WHERE `sphr_client`.`id` = '1b3d09d9-712a-5165-b516-4fe2e6abc9e8';
UPDATE `sphr_client` SET `id` = '25690418-8c4b-9727-a3e8-4fe2e612eb6d',`phone_home` = '+ 7 911 223-89-36',`phone_mobile` = '+ 7 911 223-89-36',`email` = 'shem@bk.ru' WHERE `sphr_client`.`id` = '25690418-8c4b-9727-a3e8-4fe2e612eb6d';
UPDATE `sphr_client` SET `id` = '2f9b0107-e8df-fcb3-78fd-4fe2e656829d',`phone_home` = '+ 7 921 947-88-69',`phone_mobile` = '+ 7 921 947-88-69',`email` = 'shaewa17@mail.ru' WHERE `sphr_client`.`id` = '2f9b0107-e8df-fcb3-78fd-4fe2e656829d';
UPDATE `sphr_client` SET `id` = '39d702e2-0d7a-f3bc-a1e3-4fe2e677729f',`phone_home` = '',`phone_mobile` = '+ 7 911 787-90-49',`email` = 'kopenkinaL@yandex.ru' WHERE `sphr_client`.`id` = '39d702e2-0d7a-f3bc-a1e3-4fe2e677729f';
UPDATE `sphr_client` SET `id` = '43ab0cab-6d5b-eca7-f3fb-4fe2e6d42673',`phone_home` = '',`phone_mobile` = '+ 7 921 333-10-82',`email` = 'fhjulia@yandex.ru' WHERE `sphr_client`.`id` = '43ab0cab-6d5b-eca7-f3fb-4fe2e6d42673';
UPDATE `sphr_client` SET `id` = '64e10ad3-b5ec-7db3-1f7c-4fe2e695548b',`phone_home` = '',`phone_mobile` = '962-57-43',`email` = 'aleksandr-francov@rambler.ru' WHERE `sphr_client`.`id` = '64e10ad3-b5ec-7db3-1f7c-4fe2e695548b';
UPDATE `sphr_client` SET `id` = '6f350388-f89f-e6e9-8950-4fe2e6c562d0',`phone_home` = '',`phone_mobile` = '+ 7 915 387-36-69',`email` = 'kar.adrina@mail.ru' WHERE `sphr_client`.`id` = '6f350388-f89f-e6e9-8950-4fe2e6c562d0';
UPDATE `sphr_client` SET `id` = '79f40fc8-4325-6d0e-d168-4fe2e6b7c811',`phone_home` = '',`phone_mobile` = '+ 7 919 957-07-00',`email` = 'vs@sibintel.ru' WHERE `sphr_client`.`id` = '79f40fc8-4325-6d0e-d168-4fe2e6b7c811';
UPDATE `sphr_client` SET `id` = '846c099d-22fd-7445-94e7-4fe2e6f99cbf',`phone_home` = '+ 7 911 136-26-29',`phone_mobile` = '+ 7 911 136-26-29',`email` = 'manuktaxi@mail.ru' WHERE `sphr_client`.`id` = '846c099d-22fd-7445-94e7-4fe2e6f99cbf';
UPDATE `sphr_client` SET `id` = '8d98047f-7583-9531-989f-4fe2e6c2bd02',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '8d98047f-7583-9531-989f-4fe2e6c2bd02';
UPDATE `sphr_client` SET `id` = '97ca053b-2cba-6cf6-8256-4fe2e6cd0c63',`phone_home` = '',`phone_mobile` = '',`email` = 'andr197470@mail.ru' WHERE `sphr_client`.`id` = '97ca053b-2cba-6cf6-8256-4fe2e6cd0c63';
UPDATE `sphr_client` SET `id` = 'a0c60d73-c41f-3a73-0751-4fe2e6ac61c0',`phone_home` = '',`phone_mobile` = '',`email` = 'alina15037@mail.ru' WHERE `sphr_client`.`id` = 'a0c60d73-c41f-3a73-0751-4fe2e6ac61c0';
UPDATE `sphr_client` SET `id` = 'aac30dca-777d-d7c0-aa4e-4fe2e66d140c',`phone_home` = '+ 7 921 967-94-13',`phone_mobile` = '+ 7 921 967-94-13',`email` = 'sergey.pavlov@list.ru' WHERE `sphr_client`.`id` = 'aac30dca-777d-d7c0-aa4e-4fe2e66d140c';
UPDATE `sphr_client` SET `id` = 'b4a407a6-e79e-70e6-8f49-4fe2e60a09e5',`phone_home` = '',`phone_mobile` = '',`email` = 'rita_isa@mail.ru' WHERE `sphr_client`.`id` = 'b4a407a6-e79e-70e6-8f49-4fe2e60a09e5';
UPDATE `sphr_client` SET `id` = 'be77037e-6b5d-7e79-b274-4fe2e655b697',`phone_home` = '',`phone_mobile` = '',`email` = 'po-teme@list.ru' WHERE `sphr_client`.`id` = 'be77037e-6b5d-7e79-b274-4fe2e655b697';
UPDATE `sphr_client` SET `id` = 'c7d90500-29e7-e323-4177-4fe2e6034b77',`phone_home` = '',`phone_mobile` = '934-02-80',`email` = '9340280@mail.ru' WHERE `sphr_client`.`id` = 'c7d90500-29e7-e323-4177-4fe2e6034b77';
UPDATE `sphr_client` SET `id` = 'd26e08d5-8247-d231-576c-4fe2e66dff80',`phone_home` = '',`phone_mobile` = '9989313',`email` = 'post1804@mail.ru' WHERE `sphr_client`.`id` = 'd26e08d5-8247-d231-576c-4fe2e66dff80';
UPDATE `sphr_client` SET `id` = 'dd88005f-4c5d-6397-1eac-4fe2e692fd57',`phone_home` = '+ 7 499 612-62-92',`phone_mobile` = '+ 7 916 522-35-22',`email` = 'gelupinogina@ahml.ru' WHERE `sphr_client`.`id` = 'dd88005f-4c5d-6397-1eac-4fe2e692fd57';
UPDATE `sphr_client` SET `id` = 'e8340d3c-f25b-139e-3ef5-4fe2e6c93dc3',`phone_home` = '',`phone_mobile` = '+ 7 902 990-03-03',`email` = 'molokova-mebel@mail.ru' WHERE `sphr_client`.`id` = 'e8340d3c-f25b-139e-3ef5-4fe2e6c93dc3';
UPDATE `sphr_client` SET `id` = 'f2220657-b74d-7161-531c-4fe2e6e4f4f1',`phone_home` = '',`phone_mobile` = '',`email` = 'L-89119776555@yandex.ru' WHERE `sphr_client`.`id` = 'f2220657-b74d-7161-531c-4fe2e6e4f4f1';
UPDATE `sphr_client` SET `id` = 'febb0482-6e2a-5e87-e8e6-4fe2e611134f',`phone_home` = '',`phone_mobile` = '+ 7 985 969-92-09',`email` = 'gilev1974@mail.ru' WHERE `sphr_client`.`id` = 'febb0482-6e2a-5e87-e8e6-4fe2e611134f';
UPDATE `sphr_client` SET `id` = '109c0a2c-f00c-9bda-b94c-4fe2e65a2ef2',`phone_home` = '',`phone_mobile` = '+ 7 910 002-07-05',`email` = 'nikolay30@bk.ru' WHERE `sphr_client`.`id` = '109c0a2c-f00c-9bda-b94c-4fe2e65a2ef2';
UPDATE `sphr_client` SET `id` = '11579a7d-f50d-7106-f723-4fe2e6ff8082',`phone_home` = '+ 7 495 781-21-53',`phone_mobile` = '+ 7 963 689-11-00',`email` = '04101974@rambler.ru' WHERE `sphr_client`.`id` = '11579a7d-f50d-7106-f723-4fe2e6ff8082';
UPDATE `sphr_client` SET `id` = '11f3ac6d-67f9-cd9c-9981-4fe2e6a3642f',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '11f3ac6d-67f9-cd9c-9981-4fe2e6a3642f';
UPDATE `sphr_client` SET `id` = '1287123b-4b63-2f33-f427-4fe2e6e861e8',`phone_home` = '',`phone_mobile` = '',`email` = 'naukaprsl@ukr.net' WHERE `sphr_client`.`id` = '1287123b-4b63-2f33-f427-4fe2e6e861e8';
UPDATE `sphr_client` SET `id` = '1332dec3-3ab0-0287-77b5-4fe2e629e184',`phone_home` = '+ 7 905 584-82-79',`phone_mobile` = '',`email` = 'forina59@hotmail.com' WHERE `sphr_client`.`id` = '1332dec3-3ab0-0287-77b5-4fe2e629e184';
UPDATE `sphr_client` SET `id` = '13dad31e-d12e-e240-b866-4fe2e6f29e73',`phone_home` = '',`phone_mobile` = '+ 7 921 965-81-99',`email` = 'marko3555@rambler.ru' WHERE `sphr_client`.`id` = '13dad31e-d12e-e240-b866-4fe2e6f29e73';
UPDATE `sphr_client` SET `id` = '147ad5d5-b6d6-57ef-7fe9-4fe2e62de891',`phone_home` = '+ 7 925 004-51-81',`phone_mobile` = '+ 7 921 966-22-21',`email` = 'main@stopfire.ru' WHERE `sphr_client`.`id` = '147ad5d5-b6d6-57ef-7fe9-4fe2e62de891';
UPDATE `sphr_client` SET `id` = '151accad-3904-07fc-d0a7-4fe2e6239f08',`phone_home` = '+ 7 495 232-64-25',`phone_mobile` = '+ 7 903 763-12-49',`email` = 'barinova.liza@gmail.com' WHERE `sphr_client`.`id` = '151accad-3904-07fc-d0a7-4fe2e6239f08';
UPDATE `sphr_client` SET `id` = '15b6390d-f6d0-57f8-783d-4fe2e63e9b5a',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '15b6390d-f6d0-57f8-783d-4fe2e63e9b5a';
UPDATE `sphr_client` SET `id` = '1654c0b4-9b57-3c3d-60c3-4fe2e6fd320d',`phone_home` = '',`phone_mobile` = '+ 7 911 089-22-26',`email` = 'natazolotayaf@yandex.ru' WHERE `sphr_client`.`id` = '1654c0b4-9b57-3c3d-60c3-4fe2e6fd320d';
UPDATE `sphr_client` SET `id` = '173b85d2-7754-452e-fbcb-4fe2e606eeb9',`phone_home` = '+ 7 812 380-94-80',`phone_mobile` = '',`email` = 'air@mail.wplus.net' WHERE `sphr_client`.`id` = '173b85d2-7754-452e-fbcb-4fe2e606eeb9';
UPDATE `sphr_client` SET `id` = '17f2c3c2-3114-9a13-3911-4fe2e67050ee',`phone_home` = '',`phone_mobile` = '+ 380 50 330-45-07',`email` = 'naukaprsl@ukr.net' WHERE `sphr_client`.`id` = '17f2c3c2-3114-9a13-3911-4fe2e67050ee';
UPDATE `sphr_client` SET `id` = '188d49ed-70cb-efd9-63ef-4fe2e68be6ac',`phone_home` = '',`phone_mobile` = '',`email` = 'dyukxlebus@mail.ru' WHERE `sphr_client`.`id` = '188d49ed-70cb-efd9-63ef-4fe2e68be6ac';
UPDATE `sphr_client` SET `id` = '19234b87-094d-95f9-2a17-4fe2e678f451',`phone_home` = '',`phone_mobile` = '+ 7 921 966-83-00',`email` = '9668300@mail.ru' WHERE `sphr_client`.`id` = '19234b87-094d-95f9-2a17-4fe2e678f451';
UPDATE `sphr_client` SET `id` = '19c2cbc6-0511-2ca0-56f7-4fe2e69cdfaa',`phone_home` = '',`phone_mobile` = '+ 7 952 358-73-49',`email` = 'kavtazevana@ya.ru' WHERE `sphr_client`.`id` = '19c2cbc6-0511-2ca0-56f7-4fe2e69cdfaa';
UPDATE `sphr_client` SET `id` = '1a5bead2-1d5f-a31d-11e0-4fe2e61d5f03',`phone_home` = '',`phone_mobile` = '+ 7 931 288-76-39',`email` = 'holy888@inbox.ru' WHERE `sphr_client`.`id` = '1a5bead2-1d5f-a31d-11e0-4fe2e61d5f03';
UPDATE `sphr_client` SET `id` = '1af6b766-5a44-8635-8804-4fe2e69ba264',`phone_home` = '',`phone_mobile` = '+ 7 919 113-07-77',`email` = 'kristi.night@mail.ru' WHERE `sphr_client`.`id` = '1af6b766-5a44-8635-8804-4fe2e69ba264';
UPDATE `sphr_client` SET `id` = '1b94f9dd-030c-0aca-daca-4fe2e66a346e',`phone_home` = '',`phone_mobile` = '',`email` = 'nata@sapozhkov.net' WHERE `sphr_client`.`id` = '1b94f9dd-030c-0aca-daca-4fe2e66a346e';
UPDATE `sphr_client` SET `id` = '1c2dfa7a-c6bd-e4b2-11ae-4fe2e6b19f4d',`phone_home` = '',`phone_mobile` = '+ 7 965 004-68-77',`email` = 'spb9270030@yandex.ru' WHERE `sphr_client`.`id` = '1c2dfa7a-c6bd-e4b2-11ae-4fe2e6b19f4d';
UPDATE `sphr_client` SET `id` = '1cc3ec8c-a5c1-f203-2458-4fe2e64d815d',`phone_home` = '',`phone_mobile` = '+ 7 911 916-24-69',`email` = 'bel.evrs@mail.ru' WHERE `sphr_client`.`id` = '1cc3ec8c-a5c1-f203-2458-4fe2e64d815d';
UPDATE `sphr_client` SET `id` = '1d51c9d3-abf9-5f79-70c3-4fe2e6856e44',`phone_home` = '',`phone_mobile` = '+ 7 981 815-49-70',`email` = 'goldman_andrey@mail.ru' WHERE `sphr_client`.`id` = '1d51c9d3-abf9-5f79-70c3-4fe2e6856e44';
UPDATE `sphr_client` SET `id` = '1e020330-67c2-f387-f21a-4fe2e612ab12',`phone_home` = '',`phone_mobile` = '+ 7 931 225-68-35',`email` = 'minimao@yandex.ru' WHERE `sphr_client`.`id` = '1e020330-67c2-f387-f21a-4fe2e612ab12';
UPDATE `sphr_client` SET `id` = '1eaeb509-95a9-ad48-47d0-4fe2e6b59ece',`phone_home` = '',`phone_mobile` = '+ 7 981 737-37-34',`email` = 'dubovik-a@yandex.ru' WHERE `sphr_client`.`id` = '1eaeb509-95a9-ad48-47d0-4fe2e6b59ece';
UPDATE `sphr_client` SET `id` = '1f4ec806-ed4f-f29e-f094-4fe2e60036ce',`phone_home` = '',`phone_mobile` = '+ 7 921 761-99-32',`email` = 'blank.aleksandr@mail.ru' WHERE `sphr_client`.`id` = '1f4ec806-ed4f-f29e-f094-4fe2e60036ce';
UPDATE `sphr_client` SET `id` = '1fee534a-e9d4-4784-9753-4fe2e66e03ba',`phone_home` = '',`phone_mobile` = '',`email` = 'zapotylok@gmail.com' WHERE `sphr_client`.`id` = '1fee534a-e9d4-4784-9753-4fe2e66e03ba';
UPDATE `sphr_client` SET `id` = '20950316-5533-c088-d698-4fe2e6fd7816',`phone_home` = '',`phone_mobile` = '+ 7 911 145-20-45',`email` = 'ermolaeva-a.e@bk.ru' WHERE `sphr_client`.`id` = '20950316-5533-c088-d698-4fe2e6fd7816';
UPDATE `sphr_client` SET `id` = '212b3c88-b662-c869-9718-4fe2e66ed4e5',`phone_home` = '',`phone_mobile` = '+ 7 911 932-10-01',`email` = 'abukva@gmail.com' WHERE `sphr_client`.`id` = '212b3c88-b662-c869-9718-4fe2e66ed4e5';
UPDATE `sphr_client` SET `id` = '21e23ae1-1a88-aa97-ea77-4fe2e65e73ec',`phone_home` = '+ 7 911 176-75-12',`phone_mobile` = '+ 7 911 176-75-12',`email` = 'mister.sychev2011@yandex.ru' WHERE `sphr_client`.`id` = '21e23ae1-1a88-aa97-ea77-4fe2e65e73ec';
UPDATE `sphr_client` SET `id` = '227eb380-7886-c6c7-723c-4fe2e6ea0190',`phone_home` = '',`phone_mobile` = '+ 7 911 158-16-47',`email` = 'kislyuk2005@mail.ru' WHERE `sphr_client`.`id` = '227eb380-7886-c6c7-723c-4fe2e6ea0190';
UPDATE `sphr_client` SET `id` = '2318f6fc-bea2-b4c2-71a3-4fe2e63712a5',`phone_home` = '',`phone_mobile` = '+ 7 921 939-64-72',`email` = 'pticyna_m@mail.ru' WHERE `sphr_client`.`id` = '2318f6fc-bea2-b4c2-71a3-4fe2e63712a5';
UPDATE `sphr_client` SET `id` = '23bf073e-b1b7-21ee-dd35-4fe2e65c33c1',`phone_home` = '+ 7 911 946-14-10',`phone_mobile` = '+ 7 911 946-14-10',`email` = 'svddd76@mail.ru' WHERE `sphr_client`.`id` = '23bf073e-b1b7-21ee-dd35-4fe2e65c33c1';
UPDATE `sphr_client` SET `id` = '246c210a-8a7b-2b26-928b-4fe2e631baab',`phone_home` = '+ 7 965 076-78-08',`phone_mobile` = '+ 7 965 076-78-08',`email` = NULL WHERE `sphr_client`.`id` = '246c210a-8a7b-2b26-928b-4fe2e631baab';
UPDATE `sphr_client` SET `id` = '2518d8b9-6a0b-0b5b-58bd-4fe2e62e350c',`phone_home` = '',`phone_mobile` = '',`email` = 'rybin43@mail.ru' WHERE `sphr_client`.`id` = '2518d8b9-6a0b-0b5b-58bd-4fe2e62e350c';
UPDATE `sphr_client` SET `id` = '25b836be-7828-d1a4-5a3c-4fe2e6802ab9',`phone_home` = '',`phone_mobile` = '+ 7 915 516-01-07',`email` = 'Anatoli.popov2012@yandex.ru' WHERE `sphr_client`.`id` = '25b836be-7828-d1a4-5a3c-4fe2e6802ab9';
UPDATE `sphr_client` SET `id` = '26634e93-1a0c-5194-cda3-4fe2e6d7b0d9',`phone_home` = '',`phone_mobile` = '+ 7 921 917-60-70',`email` = 'mayanew@yandex.ru' WHERE `sphr_client`.`id` = '26634e93-1a0c-5194-cda3-4fe2e6d7b0d9';
UPDATE `sphr_client` SET `id` = '2701baaf-5326-9310-301c-4fe2e63e96c4',`phone_home` = '',`phone_mobile` = '',`email` = 'Sap2010@mail.ru' WHERE `sphr_client`.`id` = '2701baaf-5326-9310-301c-4fe2e63e96c4';
UPDATE `sphr_client` SET `id` = '27a14e3b-04fc-0fcd-15bc-4fe2e63c079f',`phone_home` = '',`phone_mobile` = '+ 7 903 628-52-05',`email` = 'Ssglmk@mail.ru' WHERE `sphr_client`.`id` = '27a14e3b-04fc-0fcd-15bc-4fe2e63c079f';
UPDATE `sphr_client` SET `id` = '28594e4a-9440-b17b-2ac5-4fe2e6f0c81a',`phone_home` = '',`phone_mobile` = '',`email` = 'Ybaskin@yandex.ru' WHERE `sphr_client`.`id` = '28594e4a-9440-b17b-2ac5-4fe2e6f0c81a';
UPDATE `sphr_client` SET `id` = '28fa23b1-56e7-f6c9-bc15-4fe2e640f8f2',`phone_home` = '',`phone_mobile` = '+ 7 964 519-77-15',`email` = '08.06.1984@mail.ru' WHERE `sphr_client`.`id` = '28fa23b1-56e7-f6c9-bc15-4fe2e640f8f2';
UPDATE `sphr_client` SET `id` = '299ff068-de67-ec30-bbdf-4fe2e6f15613',`phone_home` = '',`phone_mobile` = '',`email` = 'G_krama@rambler.ru' WHERE `sphr_client`.`id` = '299ff068-de67-ec30-bbdf-4fe2e6f15613';
UPDATE `sphr_client` SET `id` = '2a4867cc-4fed-a0e0-4244-4fe2e6beeae8',`phone_home` = '',`phone_mobile` = '+ 7 915 056-12-83',`email` = 'Tlyachko@mail.ru' WHERE `sphr_client`.`id` = '2a4867cc-4fed-a0e0-4244-4fe2e6beeae8';
UPDATE `sphr_client` SET `id` = '2aefbb11-6c14-43dc-47e3-4fe2e6bf272b',`phone_home` = '',`phone_mobile` = 'Huypn@mail.ru',`email` = NULL WHERE `sphr_client`.`id` = '2aefbb11-6c14-43dc-47e3-4fe2e6bf272b';
UPDATE `sphr_client` SET `id` = '2b9d0710-921e-dd81-9d45-4fe2e64be194',`phone_home` = '',`phone_mobile` = '+ 7 916 671-59-43',`email` = 'Ivan.zaytsev66@yandex.ru' WHERE `sphr_client`.`id` = '2b9d0710-921e-dd81-9d45-4fe2e64be194';
UPDATE `sphr_client` SET `id` = '2c3e0c2f-7553-7ea4-f809-4fe2e6957064',`phone_home` = '',`phone_mobile` = '+ 7 926 455-11-90',`email` = 'Irina.angelova@bk.ru' WHERE `sphr_client`.`id` = '2c3e0c2f-7553-7ea4-f809-4fe2e6957064';
UPDATE `sphr_client` SET `id` = '2cdfe811-9005-5bee-dd22-4fe2e625976f',`phone_home` = '',`phone_mobile` = '+ 7 495 972-63-69',`email` = 'Billparts@mail.ru' WHERE `sphr_client`.`id` = '2cdfe811-9005-5bee-dd22-4fe2e625976f';
UPDATE `sphr_client` SET `id` = '2d8038de-f2ba-70ab-73a5-4fe2e6e60f51',`phone_home` = '+ 7 963 712-74-10',`phone_mobile` = '+ 7 963 712-74-10',`email` = 'Ev.mahov@yandex.ru' WHERE `sphr_client`.`id` = '2d8038de-f2ba-70ab-73a5-4fe2e6e60f51';
UPDATE `sphr_client` SET `id` = '2e235230-fd94-5cc0-522d-4fe2e610db85',`phone_home` = '',`phone_mobile` = '+ 7 967 179-11-11',`email` = 'Avakian.67@mail.ru' WHERE `sphr_client`.`id` = '2e235230-fd94-5cc0-522d-4fe2e610db85';
UPDATE `sphr_client` SET `id` = '2ec5f7e6-3edc-073c-6538-4fe2e658cf07',`phone_home` = '',`phone_mobile` = '+ 7 926 905-01-00',`email` = 'knyazev.viktor@gmail.com' WHERE `sphr_client`.`id` = '2ec5f7e6-3edc-073c-6538-4fe2e658cf07';
UPDATE `sphr_client` SET `id` = '2f6f135e-05a3-5844-13a6-4fe2e66b0abc',`phone_home` = '',`phone_mobile` = '+ 7 926 779-00-14',`email` = '9601392@mail.ru' WHERE `sphr_client`.`id` = '2f6f135e-05a3-5844-13a6-4fe2e66b0abc';
UPDATE `sphr_client` SET `id` = '301bb7d2-05b9-da93-efe6-4fe2e6d8d0f9',`phone_home` = '',`phone_mobile` = '+ 7 905 702-93-82',`email` = 'Ceo@lakehouse.ru' WHERE `sphr_client`.`id` = '301bb7d2-05b9-da93-efe6-4fe2e6d8d0f9';
UPDATE `sphr_client` SET `id` = '30b35a8a-4ea1-f91b-f782-4fe2e67dd834',`phone_home` = '+ 7 495 780-22-30',`phone_mobile` = '',`email` = '7802230@inbox.ru' WHERE `sphr_client`.`id` = '30b35a8a-4ea1-f91b-f782-4fe2e67dd834';
UPDATE `sphr_client` SET `id` = '314ff867-be37-7c43-6316-4fe2e6f639cd',`phone_home` = '',`phone_mobile` = '+ 7 926 253-78-18',`email` = 'Zelik_ml1@Mail.ru' WHERE `sphr_client`.`id` = '314ff867-be37-7c43-6316-4fe2e6f639cd';
UPDATE `sphr_client` SET `id` = '31e23a03-042b-ab9e-8c72-4fe2e644486f',`phone_home` = '+ 7 495 967-12-20',`phone_mobile` = '+ 7 926 063-74-38',`email` = 'Volkov.va@bk.ru' WHERE `sphr_client`.`id` = '31e23a03-042b-ab9e-8c72-4fe2e644486f';
UPDATE `sphr_client` SET `id` = '327eb44e-532c-d02c-ab18-4fe2e69007c6',`phone_home` = '',`phone_mobile` = '+ 7 915 075-41-31',`email` = 'Kozlov102@mail.ru' WHERE `sphr_client`.`id` = '327eb44e-532c-d02c-ab18-4fe2e69007c6';
UPDATE `sphr_client` SET `id` = '331ce9aa-ec3b-ad25-4b97-4fe2e682bbaa',`phone_home` = '',`phone_mobile` = '+ 7 916 148-13-72',`email` = '1481372@mail.ru' WHERE `sphr_client`.`id` = '331ce9aa-ec3b-ad25-4b97-4fe2e682bbaa';
UPDATE `sphr_client` SET `id` = '33b4ee3c-b482-4131-5458-4fe2e6f700a6',`phone_home` = '',`phone_mobile` = '',`email` = 'Sergei-moscow@yandex.ru' WHERE `sphr_client`.`id` = '33b4ee3c-b482-4131-5458-4fe2e6f700a6';
UPDATE `sphr_client` SET `id` = '346805fd-fa2b-0c52-2d35-4fe2e6e74521',`phone_home` = '',`phone_mobile` = '+ 7 926 369-92-21',`email` = 'akram.talibov@gmail.com' WHERE `sphr_client`.`id` = '346805fd-fa2b-0c52-2d35-4fe2e6e74521';
UPDATE `sphr_client` SET `id` = '350ace79-e661-85af-a276-4fe2e64fb72d',`phone_home` = '',`phone_mobile` = '',`email` = 'Brataba@yandex.ru' WHERE `sphr_client`.`id` = '350ace79-e661-85af-a276-4fe2e64fb72d';
UPDATE `sphr_client` SET `id` = '35a5aec5-9048-013c-05c0-4fe2e6c27a1b',`phone_home` = NULL,`phone_mobile` = '+ 7 916 614-94-81',`email` = 'Agashaa@yandex.ru' WHERE `sphr_client`.`id` = '35a5aec5-9048-013c-05c0-4fe2e6c27a1b';
UPDATE `sphr_client` SET `id` = '364568a8-aead-719b-2c05-4fe2e605bb0a',`phone_home` = '',`phone_mobile` = '+ 7 985 722-99-16',`email` = 'Nikanatol@yandex.ru' WHERE `sphr_client`.`id` = '364568a8-aead-719b-2c05-4fe2e605bb0a';
UPDATE `sphr_client` SET `id` = '36e7331c-26a9-a82a-19cc-4fe2e66fdcd7',`phone_home` = '',`phone_mobile` = '+ 7 915 035-98-74',`email` = 'Pomidorka79@mail.ru' WHERE `sphr_client`.`id` = '36e7331c-26a9-a82a-19cc-4fe2e66fdcd7';
UPDATE `sphr_client` SET `id` = '37828b78-d16b-e9d0-fa9d-4fe2e61332a7',`phone_home` = '',`phone_mobile` = '+ 7 905 728-65-99',`email` = 'Aik1963@inbox.ru' WHERE `sphr_client`.`id` = '37828b78-d16b-e9d0-fa9d-4fe2e61332a7';
UPDATE `sphr_client` SET `id` = '381d170b-97cc-ebd1-be18-4fe2e6bff5e4',`phone_home` = '',`phone_mobile` = '+ 7 903 250-17-77',`email` = 'Cccp77@inbox.ru' WHERE `sphr_client`.`id` = '381d170b-97cc-ebd1-be18-4fe2e6bff5e4';
UPDATE `sphr_client` SET `id` = '38b7218a-a496-ba86-f97c-4fe2e6cb1bc7',`phone_home` = '',`phone_mobile` = '+ 7 910 413-10-32',`email` = 'Valenrakov@yandex.ru' WHERE `sphr_client`.`id` = '38b7218a-a496-ba86-f97c-4fe2e6cb1bc7';
UPDATE `sphr_client` SET `id` = '3956c444-54a7-4018-e306-4fe2e6d52f7c',`phone_home` = '',`phone_mobile` = '+ 7 985 769-43-05',`email` = 'Bibibi19@rambler.ru' WHERE `sphr_client`.`id` = '3956c444-54a7-4018-e306-4fe2e6d52f7c';
UPDATE `sphr_client` SET `id` = '39f769f2-8b11-6656-446f-4fe2e66d7acb',`phone_home` = '',`phone_mobile` = '+ 7 968 894-80-47',`email` = 'Edward79@mail.ru' WHERE `sphr_client`.`id` = '39f769f2-8b11-6656-446f-4fe2e66d7acb';
UPDATE `sphr_client` SET `id` = '3a8d49d0-67da-2b2b-e6f0-4fe2e6fadf09',`phone_home` = '',`phone_mobile` = '',`email` = 'K28-03@yandex.ru' WHERE `sphr_client`.`id` = '3a8d49d0-67da-2b2b-e6f0-4fe2e6fadf09';
UPDATE `sphr_client` SET `id` = '3b327522-5b52-c55d-d23a-4fe2e638a1af',`phone_home` = '',`phone_mobile` = '',`email` = 'samsusam@mail.ru' WHERE `sphr_client`.`id` = '3b327522-5b52-c55d-d23a-4fe2e638a1af';
UPDATE `sphr_client` SET `id` = '3bd2339e-aaaa-f95f-00b3-4fe2e6ea672b',`phone_home` = '',`phone_mobile` = '',`email` = 'dimav@lineagrafic.ru' WHERE `sphr_client`.`id` = '3bd2339e-aaaa-f95f-00b3-4fe2e6ea672b';
UPDATE `sphr_client` SET `id` = '3c75d6e9-cd9b-f004-37c1-4fe2e6c53e32',`phone_home` = '+ 7 916 339-70-30',`phone_mobile` = '+ 7 916 362-67-61',`email` = 'tl2000@list.ru' WHERE `sphr_client`.`id` = '3c75d6e9-cd9b-f004-37c1-4fe2e6c53e32';
UPDATE `sphr_client` SET `id` = '3d0fd5a6-5f22-4a8d-cf39-4fe2e66ea5fd',`phone_home` = '',`phone_mobile` = '+ 7 926 360-13-90',`email` = 'juliana_lk@mail.ru' WHERE `sphr_client`.`id` = '3d0fd5a6-5f22-4a8d-cf39-4fe2e66ea5fd';
UPDATE `sphr_client` SET `id` = '3db0cec1-81e5-3f3d-4e18-4fe2e657b5e5',`phone_home` = '',`phone_mobile` = '+ 7 910 422-56-11',`email` = 'iva1909@mail.ru' WHERE `sphr_client`.`id` = '3db0cec1-81e5-3f3d-4e18-4fe2e657b5e5';
UPDATE `sphr_client` SET `id` = '3e51f7a7-e692-288b-94bd-4fe2e62901d9',`phone_home` = '+ 7 495 514-58-16',`phone_mobile` = '',`email` = 'tata-swan@mail.ru' WHERE `sphr_client`.`id` = '3e51f7a7-e692-288b-94bd-4fe2e62901d9';
UPDATE `sphr_client` SET `id` = '3ef2eed7-2bc2-6d70-01a4-4fe2e6d1694e',`phone_home` = '',`phone_mobile` = '+ 7 985 760-38-12',`email` = 'ank7116@yandex.ru' WHERE `sphr_client`.`id` = '3ef2eed7-2bc2-6d70-01a4-4fe2e6d1694e';
UPDATE `sphr_client` SET `id` = '3fa19a57-71bf-a594-dc7d-4fe2e675c26f',`phone_home` = '',`phone_mobile` = '+ 7 916 632-02-59',`email` = 'dmi-1@yandex.ru' WHERE `sphr_client`.`id` = '3fa19a57-71bf-a594-dc7d-4fe2e675c26f';
UPDATE `sphr_client` SET `id` = '404c16ac-66c5-c2a9-7b73-4fe2e6f06af7',`phone_home` = '',`phone_mobile` = '+ 7 916 783-17-70',`email` = 'sobolevroman@mail.ru' WHERE `sphr_client`.`id` = '404c16ac-66c5-c2a9-7b73-4fe2e6f06af7';
UPDATE `sphr_client` SET `id` = '40fa2795-4235-db30-fa56-4fe2e6fd2e2b',`phone_home` = '',`phone_mobile` = '+ 7 916 609-14-87',`email` = 'ordy@mail.ru' WHERE `sphr_client`.`id` = '40fa2795-4235-db30-fa56-4fe2e6fd2e2b';
UPDATE `sphr_client` SET `id` = '41951b78-8bab-62d2-7eb2-4fe2e6d41dee',`phone_home` = '+ 7 812 944-94-99',`phone_mobile` = '',`email` = 'diogen13@km.ru' WHERE `sphr_client`.`id` = '41951b78-8bab-62d2-7eb2-4fe2e6d41dee';
UPDATE `sphr_client` SET `id` = '42397f3f-3f76-ea14-7429-4fe2e603c926',`phone_home` = '',`phone_mobile` = '+ 7 906 740-13-13',`email` = '9342061@mail.ru' WHERE `sphr_client`.`id` = '42397f3f-3f76-ea14-7429-4fe2e603c926';
UPDATE `sphr_client` SET `id` = '42d7fc3d-b859-2991-7994-4fe2e6172b79',`phone_home` = '',`phone_mobile` = '',`email` = 'raxmaninan@mail.ru' WHERE `sphr_client`.`id` = '42d7fc3d-b859-2991-7994-4fe2e6172b79';
UPDATE `sphr_client` SET `id` = '4374bd84-cfdc-1fe8-b1f3-4fe2e6075302',`phone_home` = '',`phone_mobile` = '',`email` = 'Knv2155@mail.ru' WHERE `sphr_client`.`id` = '4374bd84-cfdc-1fe8-b1f3-4fe2e6075302';
UPDATE `sphr_client` SET `id` = '441ca255-2c80-d65e-10ca-4fe2e6b7317a',`phone_home` = '',`phone_mobile` = '+ 7 911 251-68-88',`email` = 'Sokol_av@bk.ru' WHERE `sphr_client`.`id` = '441ca255-2c80-d65e-10ca-4fe2e6b7317a';
UPDATE `sphr_client` SET `id` = '44d004e0-22cf-577d-d4ce-4fe2e661acd2',`phone_home` = '',`phone_mobile` = '+ 7 921 961-90-18',`email` = 'Borisbulkov@gmail.com' WHERE `sphr_client`.`id` = '44d004e0-22cf-577d-d4ce-4fe2e661acd2';
UPDATE `sphr_client` SET `id` = '45734961-b43d-9adf-51a1-4fe2e6b23121',`phone_home` = '',`phone_mobile` = '+ 7 911 829-90-57',`email` = 'Gramm9@yandex.ru' WHERE `sphr_client`.`id` = '45734961-b43d-9adf-51a1-4fe2e6b23121';
UPDATE `sphr_client` SET `id` = '47958304-b552-fa4d-c3b3-4fe2e6a4ffc5',`phone_home` = '',`phone_mobile` = '+ 7 921 956-46-11',`email` = 'Asirko@mail.ru' WHERE `sphr_client`.`id` = '47958304-b552-fa4d-c3b3-4fe2e6a4ffc5';
UPDATE `sphr_client` SET `id` = '4842e6c0-e06a-f808-80b4-4fe2e63fa7be',`phone_home` = '',`phone_mobile` = '+ 7 911 939-33-75',`email` = 'Malakchova@yandex.ru' WHERE `sphr_client`.`id` = '4842e6c0-e06a-f808-80b4-4fe2e63fa7be';
UPDATE `sphr_client` SET `id` = '48e43468-b438-5228-fc4e-4fe2e63b067c',`phone_home` = '',`phone_mobile` = '+ 7 911 244-30-67',`email` = 'Moleg54@bk.ru' WHERE `sphr_client`.`id` = '48e43468-b438-5228-fc4e-4fe2e63b067c';
UPDATE `sphr_client` SET `id` = '4986fea4-9081-72d3-8685-4fe2e650f60a',`phone_home` = '',`phone_mobile` = 'нет',`email` = 'Suslov_as@mail.ru' WHERE `sphr_client`.`id` = '4986fea4-9081-72d3-8685-4fe2e650f60a';
UPDATE `sphr_client` SET `id` = '4a27f2de-f6ce-e21a-8792-4fe2e69f0cfd',`phone_home` = '',`phone_mobile` = '740-10-80',`email` = 'Roman@humus-club.ru' WHERE `sphr_client`.`id` = '4a27f2de-f6ce-e21a-8792-4fe2e69f0cfd';
UPDATE `sphr_client` SET `id` = '4ad729e9-431a-91b5-18c1-4fe2e6a358d2',`phone_home` = '',`phone_mobile` = '+ 7 911 962-85-11',`email` = '09nv@rambler.ru' WHERE `sphr_client`.`id` = '4ad729e9-431a-91b5-18c1-4fe2e6a358d2';
UPDATE `sphr_client` SET `id` = '4b765299-ee50-1f3b-568f-4fe2e6e9b2e5',`phone_home` = '',`phone_mobile` = '',`email` = 'Gr.goodvin@yandex.ru' WHERE `sphr_client`.`id` = '4b765299-ee50-1f3b-568f-4fe2e6e9b2e5';
UPDATE `sphr_client` SET `id` = '4c17b3c5-8b98-b269-0513-4fe2e6bd59e9',`phone_home` = '',`phone_mobile` = '+ 7 911 238-72-75',`email` = 'renata1810@mail.ru' WHERE `sphr_client`.`id` = '4c17b3c5-8b98-b269-0513-4fe2e6bd59e9';
UPDATE `sphr_client` SET `id` = '4cc3aa8b-fa6f-70e0-e175-4fe2e6c74730',`phone_home` = '',`phone_mobile` = '+ 7 911 929-86-07',`email` = 'Profi_v@mail.ru' WHERE `sphr_client`.`id` = '4cc3aa8b-fa6f-70e0-e175-4fe2e6c74730';
UPDATE `sphr_client` SET `id` = '4d6217e8-f175-c031-9da5-4fe2e65ce472',`phone_home` = '',`phone_mobile` = '+ 7 921 922-18-19',`email` = 'Ludmila_orlova@list.ru' WHERE `sphr_client`.`id` = '4d6217e8-f175-c031-9da5-4fe2e65ce472';
UPDATE `sphr_client` SET `id` = '4e059680-454b-f16b-16d1-4fe2e66d7c9c',`phone_home` = '',`phone_mobile` = '9926779',`email` = 'Milevskaya-a@gmail.com' WHERE `sphr_client`.`id` = '4e059680-454b-f16b-16d1-4fe2e66d7c9c';
UPDATE `sphr_client` SET `id` = '4ea55b36-0a63-7c63-4b17-4fe2e6f05579',`phone_home` = '',`phone_mobile` = '+ 7 926 716-16-50',`email` = 'I-sfed@yandex.ru' WHERE `sphr_client`.`id` = '4ea55b36-0a63-7c63-4b17-4fe2e6f05579';
UPDATE `sphr_client` SET `id` = '4f47e207-cc76-b37d-087f-4fe2e6c3a39c',`phone_home` = '',`phone_mobile` = '+ 7 921 332-59-13',`email` = 'fox_angell@mail.ru' WHERE `sphr_client`.`id` = '4f47e207-cc76-b37d-087f-4fe2e6c3a39c';
UPDATE `sphr_client` SET `id` = '4ff4c306-3467-ee6d-8d94-4fe2e6a9402f',`phone_home` = '',`phone_mobile` = '',`email` = 'janech78@mail.ru' WHERE `sphr_client`.`id` = '4ff4c306-3467-ee6d-8d94-4fe2e6a9402f';
UPDATE `sphr_client` SET `id` = '509bb05b-01ba-2dfb-f36d-4fe2e6caed2a',`phone_home` = '',`phone_mobile` = '9733323',`email` = 'invest.stroy@yandex.ru' WHERE `sphr_client`.`id` = '509bb05b-01ba-2dfb-f36d-4fe2e6caed2a';
UPDATE `sphr_client` SET `id` = '5140a9b0-dab9-f92b-877a-4fe2e6b80a5c',`phone_home` = '',`phone_mobile` = '+ 7 911 986-72-56',`email` = 'redstarspb@mail.ru' WHERE `sphr_client`.`id` = '5140a9b0-dab9-f92b-877a-4fe2e6b80a5c';
UPDATE `sphr_client` SET `id` = '51e5534a-c186-25eb-8f27-4fe2e6690b8e',`phone_home` = '',`phone_mobile` = '',`email` = '922kva@mail.ru' WHERE `sphr_client`.`id` = '51e5534a-c186-25eb-8f27-4fe2e6690b8e';
UPDATE `sphr_client` SET `id` = '528b520a-8725-0145-a182-4fe2e6fe0f1b',`phone_home` = '',`phone_mobile` = '+ 7 905 251-86-27',`email` = 'irene.coal@gmail.com' WHERE `sphr_client`.`id` = '528b520a-8725-0145-a182-4fe2e6fe0f1b';
UPDATE `sphr_client` SET `id` = '533364d1-ec2a-d3ef-d76c-4fe2e6224ec6',`phone_home` = '',`phone_mobile` = '+ 7 911 703-28-07',`email` = 'alexx3012@gmail.com' WHERE `sphr_client`.`id` = '533364d1-ec2a-d3ef-d76c-4fe2e6224ec6';
UPDATE `sphr_client` SET `id` = '53dbcadd-6dd1-9e9a-3dbe-4fe2e672bbcb',`phone_home` = '',`phone_mobile` = '+ 7 921 933-52-02',`email` = 'radiant@inbox.ru' WHERE `sphr_client`.`id` = '53dbcadd-6dd1-9e9a-3dbe-4fe2e672bbcb';
UPDATE `sphr_client` SET `id` = '5473ae2c-9e90-1149-d0db-4fe2e63a9987',`phone_home` = '',`phone_mobile` = '+ 7 911 912-58-01',`email` = 'mrouge@rambler.ru' WHERE `sphr_client`.`id` = '5473ae2c-9e90-1149-d0db-4fe2e63a9987';
UPDATE `sphr_client` SET `id` = '551941d8-3c3e-6bbc-9784-4fe2e669d1e4',`phone_home` = '',`phone_mobile` = '+ 7 911 007-09-44',`email` = 'gringof@yandex.ru' WHERE `sphr_client`.`id` = '551941d8-3c3e-6bbc-9784-4fe2e669d1e4';
UPDATE `sphr_client` SET `id` = '55bb40fa-55a3-53a7-3078-4fe2e68fef21',`phone_home` = '',`phone_mobile` = '+ 7 921 409-94-36',`email` = 'iva9119@yandex.ru' WHERE `sphr_client`.`id` = '55bb40fa-55a3-53a7-3078-4fe2e68fef21';
UPDATE `sphr_client` SET `id` = '565b0302-0a07-8ac2-f911-4fe2e6367985',`phone_home` = '',`phone_mobile` = '+ 7 921 907-00-54',`email` = 'oeremin@yandex.ru' WHERE `sphr_client`.`id` = '565b0302-0a07-8ac2-f911-4fe2e6367985';
UPDATE `sphr_client` SET `id` = '56ff420f-34c5-7a25-ff96-4fe2e640ee66',`phone_home` = '',`phone_mobile` = '9676860',`email` = 'avip65@yandex.ru' WHERE `sphr_client`.`id` = '56ff420f-34c5-7a25-ff96-4fe2e640ee66';
UPDATE `sphr_client` SET `id` = '57add3e7-bdf0-7486-920c-4fe2e691acdc',`phone_home` = '',`phone_mobile` = '+ 7 911 920-44-88',`email` = 'manhattan-spb@mail.ru' WHERE `sphr_client`.`id` = '57add3e7-bdf0-7486-920c-4fe2e691acdc';
UPDATE `sphr_client` SET `id` = '5854b647-ec6a-3844-00c4-4fe2e6a3f9d7',`phone_home` = '+ 7 909 905-68-36',`phone_mobile` = '+ 7 909 905-68-36',`email` = 'philivlev@yandex.ru' WHERE `sphr_client`.`id` = '5854b647-ec6a-3844-00c4-4fe2e6a3f9d7';
UPDATE `sphr_client` SET `id` = '58f8c945-f2ef-7462-7749-4fe2e6a4c929',`phone_home` = '+ 7 916 385-82-11',`phone_mobile` = '+ 7 916 385-82-11',`email` = 'roni-moni@hotmail.com' WHERE `sphr_client`.`id` = '58f8c945-f2ef-7462-7749-4fe2e6a4c929';
UPDATE `sphr_client` SET `id` = '5998ca6c-140d-2f6e-f54b-4fe2e67edac2',`phone_home` = '+ 7 916 385-82-11',`phone_mobile` = '+ 7 916 385-82-11',`email` = 'roni-moni@hotmail.com' WHERE `sphr_client`.`id` = '5998ca6c-140d-2f6e-f54b-4fe2e67edac2';
UPDATE `sphr_client` SET `id` = '5a42ab94-af60-ad2f-cd8c-4fe2e698dea5',`phone_home` = '',`phone_mobile` = '+ 7 916 681-97-98',`email` = 'yury-abrosimov@mail.ru' WHERE `sphr_client`.`id` = '5a42ab94-af60-ad2f-cd8c-4fe2e698dea5';
UPDATE `sphr_client` SET `id` = '5af2348d-120f-5a84-0a47-4fe2e6572624',`phone_home` = '',`phone_mobile` = '+ 7 909 905-68-36',`email` = 'Philivlev@yandex.ru' WHERE `sphr_client`.`id` = '5af2348d-120f-5a84-0a47-4fe2e6572624';
UPDATE `sphr_client` SET `id` = '5b94a39c-2ccb-617e-1909-4fe2e600c86f',`phone_home` = '',`phone_mobile` = '+ 7 916 385-82-11',`email` = 'Roni-moni@hotmail.com' WHERE `sphr_client`.`id` = '5b94a39c-2ccb-617e-1909-4fe2e600c86f';
UPDATE `sphr_client` SET `id` = '5c3cab83-ffc8-1763-a966-4fe2e6ab22c2',`phone_home` = '',`phone_mobile` = '+ 7 919 101-57-24',`email` = 'Hat.07@list.ru' WHERE `sphr_client`.`id` = '5c3cab83-ffc8-1763-a966-4fe2e6ab22c2';
UPDATE `sphr_client` SET `id` = '5cef443a-696b-c7c4-796d-4fe2e685ddd6',`phone_home` = '',`phone_mobile` = '+ 7 915 424-18-50',`email` = 'Bassvm@mail.ru' WHERE `sphr_client`.`id` = '5cef443a-696b-c7c4-796d-4fe2e685ddd6';
UPDATE `sphr_client` SET `id` = '5d91b653-6a6d-5190-7754-4fe2e65c7050',`phone_home` = '',`phone_mobile` = '',`email` = 'Nat.99@mail.ru' WHERE `sphr_client`.`id` = '5d91b653-6a6d-5190-7754-4fe2e65c7050';
UPDATE `sphr_client` SET `id` = '5e42f58d-f155-ac43-b682-4fe2e69c06a0',`phone_home` = '',`phone_mobile` = '+ 7 903 762-34-12',`email` = 'Nsbykov@mail.ru' WHERE `sphr_client`.`id` = '5e42f58d-f155-ac43-b682-4fe2e69c06a0';
UPDATE `sphr_client` SET `id` = '5ede1870-ddf2-d859-7c0c-4fe2e6c62d5b',`phone_home` = '',`phone_mobile` = '+ 7 903 199-91-35',`email` = 'Mmooss@rambler.ru' WHERE `sphr_client`.`id` = '5ede1870-ddf2-d859-7c0c-4fe2e6c62d5b';
UPDATE `sphr_client` SET `id` = '5f81b686-53e3-9c97-ca67-4fe2e6ebed83',`phone_home` = '',`phone_mobile` = '+ 7 903 662-15-00',`email` = 'Nickolayreshetov@mail.ru' WHERE `sphr_client`.`id` = '5f81b686-53e3-9c97-ca67-4fe2e6ebed83';
UPDATE `sphr_client` SET `id` = '601f42d4-a19b-c2b5-3321-4fe2e632955a',`phone_home` = '',`phone_mobile` = '+ 7 903 719-95-18',`email` = 'Lera.tomashevskaya@gmail.com' WHERE `sphr_client`.`id` = '601f42d4-a19b-c2b5-3321-4fe2e632955a';
UPDATE `sphr_client` SET `id` = '60c16b64-6a4a-6aa0-52c8-4fe2e690691f',`phone_home` = '',`phone_mobile` = '+ 7 903 723-01-82',`email` = 'Levelit53@mail.ru' WHERE `sphr_client`.`id` = '60c16b64-6a4a-6aa0-52c8-4fe2e690691f';
UPDATE `sphr_client` SET `id` = '615b68bf-9bab-cbf4-964c-4fe2e6f7f105',`phone_home` = '',`phone_mobile` = '+ 7 926 325-49-62',`email` = '1@mega-c.ru' WHERE `sphr_client`.`id` = '615b68bf-9bab-cbf4-964c-4fe2e6f7f105';
UPDATE `sphr_client` SET `id` = '6205c696-6747-339b-bbea-4fe2e6864341',`phone_home` = '+ 7 812 517-34-53',`phone_mobile` = '',`email` = '5173453@gmail.com' WHERE `sphr_client`.`id` = '6205c696-6747-339b-bbea-4fe2e6864341';
UPDATE `sphr_client` SET `id` = '62a007de-8919-818c-6b61-4fe2e6cc5527',`phone_home` = '',`phone_mobile` = '+ 7 916 548-12-79',`email` = 'Fedchenkoo@mail.ru' WHERE `sphr_client`.`id` = '62a007de-8919-818c-6b61-4fe2e6cc5527';
UPDATE `sphr_client` SET `id` = '6328196b-e7c9-b599-9572-4fe2e6e0ffa3',`phone_home` = '',`phone_mobile` = '+ 7 912 826-22-74',`email` = 'Dinova@rambler.ru' WHERE `sphr_client`.`id` = '6328196b-e7c9-b599-9572-4fe2e6e0ffa3';
UPDATE `sphr_client` SET `id` = '63ab26a4-1a48-8c88-1271-4fe2e66417d0',`phone_home` = '',`phone_mobile` = '+ 7 916 440-67-39',`email` = 'ili-75@yandex.ru' WHERE `sphr_client`.`id` = '63ab26a4-1a48-8c88-1271-4fe2e66417d0';
UPDATE `sphr_client` SET `id` = '6432e49d-2c09-8930-2431-4fe2e6bfb871',`phone_home` = '',`phone_mobile` = '+ 7 985 100-00-78',`email` = 'Sakuraba66@mail.ru' WHERE `sphr_client`.`id` = '6432e49d-2c09-8930-2431-4fe2e6bfb871';
UPDATE `sphr_client` SET `id` = '64bdec62-c2fa-2f47-83c2-4fe2e6c153d6',`phone_home` = '',`phone_mobile` = '+ 7 909 658-69-24',`email` = 'Himab@narod.ru' WHERE `sphr_client`.`id` = '64bdec62-c2fa-2f47-83c2-4fe2e6c153d6';
UPDATE `sphr_client` SET `id` = '65456466-8ed9-b533-d999-4fe2e6308baa',`phone_home` = '',`phone_mobile` = '+ 7 926 044-55-55',`email` = 'Peruanskaya@mail.ru' WHERE `sphr_client`.`id` = '65456466-8ed9-b533-d999-4fe2e6308baa';
UPDATE `sphr_client` SET `id` = '65ddaf31-f143-4b42-9265-4fe2e6d2776f',`phone_home` = '',`phone_mobile` = '',`email` = 'Cuteguy@inbox.ru' WHERE `sphr_client`.`id` = '65ddaf31-f143-4b42-9265-4fe2e6d2776f';
UPDATE `sphr_client` SET `id` = '66694a95-4652-a4d0-81be-4fe2e6cd408d',`phone_home` = '',`phone_mobile` = '+ 7 911 300-01-16',`email` = 'Lb7@bk.ru' WHERE `sphr_client`.`id` = '66694a95-4652-a4d0-81be-4fe2e6cd408d';
UPDATE `sphr_client` SET `id` = '66f2709c-2d1c-4e50-d187-4fe2e601d6f6',`phone_home` = '',`phone_mobile` = '',`email` = 'Grz04@mail.ru' WHERE `sphr_client`.`id` = '66f2709c-2d1c-4e50-d187-4fe2e601d6f6';
UPDATE `sphr_client` SET `id` = '674dd18c-4bec-6275-fbf7-4fe2e658f5b9',`phone_home` = '',`phone_mobile` = '',`email` = 'len1410@mail.ru' WHERE `sphr_client`.`id` = '674dd18c-4bec-6275-fbf7-4fe2e658f5b9';
UPDATE `sphr_client` SET `id` = '679ee680-d886-aadd-17f2-4fe2e6db85f9',`phone_home` = '',`phone_mobile` = '+ 7 903 522-91-33',`email` = 'lama2220@mail.ru' WHERE `sphr_client`.`id` = '679ee680-d886-aadd-17f2-4fe2e6db85f9';
UPDATE `sphr_client` SET `id` = '67edbf39-fd58-44ca-f277-4fe2e644271f',`phone_home` = '',`phone_mobile` = '',`email` = 'Nlogin@rambler.ru' WHERE `sphr_client`.`id` = '67edbf39-fd58-44ca-f277-4fe2e644271f';
UPDATE `sphr_client` SET `id` = '68396a8e-86e0-4e8b-b8f3-4fe2e65344c2',`phone_home` = '',`phone_mobile` = '+ 7 916 086-80-05',`email` = 'Maxigeo@mail.ru' WHERE `sphr_client`.`id` = '68396a8e-86e0-4e8b-b8f3-4fe2e65344c2';
UPDATE `sphr_client` SET `id` = '687e91db-8423-ac7e-24a3-4fe2e61fb27f',`phone_home` = '',`phone_mobile` = '',`email` = 'e.mayorova@yahoo.es' WHERE `sphr_client`.`id` = '687e91db-8423-ac7e-24a3-4fe2e61fb27f';
UPDATE `sphr_client` SET `id` = '68c3a590-6558-ff52-d88d-4fe2e6b99aa9',`phone_home` = '',`phone_mobile` = '+ 7 499 340-86-38',`email` = 'arenda2010@list.ru' WHERE `sphr_client`.`id` = '68c3a590-6558-ff52-d88d-4fe2e6b99aa9';
UPDATE `sphr_client` SET `id` = '69283d70-ff51-b3b0-0d31-4fe2e6a4af8c',`phone_home` = '+ 7 495 728-23-15',`phone_mobile` = '',`email` = '7282315@gmail.com' WHERE `sphr_client`.`id` = '69283d70-ff51-b3b0-0d31-4fe2e6a4af8c';
UPDATE `sphr_client` SET `id` = '698a383f-0a1a-adbd-48af-4fe2e687a81d',`phone_home` = '',`phone_mobile` = '+ 7 909 160-06-55',`email` = 'pina.2012@yandex.ru' WHERE `sphr_client`.`id` = '698a383f-0a1a-adbd-48af-4fe2e687a81d';
UPDATE `sphr_client` SET `id` = '69ebb38f-cce4-97d4-bcdb-4fe2e6fc0e1e',`phone_home` = '',`phone_mobile` = '+ 7 917 391-02-25',`email` = 'vladt2000@mail.ru' WHERE `sphr_client`.`id` = '69ebb38f-cce4-97d4-bcdb-4fe2e6fc0e1e';
UPDATE `sphr_client` SET `id` = '6a4b9fd2-0519-78c1-493d-4fe2e6771635',`phone_home` = '',`phone_mobile` = '+ 7 963 710-18-11',`email` = 'dvinina_IA@mail.ru' WHERE `sphr_client`.`id` = '6a4b9fd2-0519-78c1-493d-4fe2e6771635';
UPDATE `sphr_client` SET `id` = '6ab2ee7c-6bf6-7522-8240-4fe2e673a9a6',`phone_home` = '',`phone_mobile` = '+ 7 916 444-48-67',`email` = 'Demnis70@hotmail.com' WHERE `sphr_client`.`id` = '6ab2ee7c-6bf6-7522-8240-4fe2e673a9a6';
UPDATE `sphr_client` SET `id` = '6b13ea93-c959-e3b3-5188-4fe2e63d95d8',`phone_home` = '',`phone_mobile` = '',`email` = '777sd@mail.ru' WHERE `sphr_client`.`id` = '6b13ea93-c959-e3b3-5188-4fe2e63d95d8';
UPDATE `sphr_client` SET `id` = '6b7c7ada-80b8-b84e-68c6-4fe2e69d1707',`phone_home` = '',`phone_mobile` = '+ 7 962 956-27-92',`email` = 'Grand077@bk.ru' WHERE `sphr_client`.`id` = '6b7c7ada-80b8-b84e-68c6-4fe2e69d1707';
UPDATE `sphr_client` SET `id` = '6bee9d0d-a6a1-e3ed-8cf8-4fe2e6b6682b',`phone_home` = '',`phone_mobile` = '+ 7 903 659-03-67',`email` = 'Shulgin_mv@bk.ru' WHERE `sphr_client`.`id` = '6bee9d0d-a6a1-e3ed-8cf8-4fe2e6b6682b';
UPDATE `sphr_client` SET `id` = '6c4b37d8-49d9-4059-1214-4fe2e6ee4a0a',`phone_home` = '',`phone_mobile` = '+ 7 903 806-01-10',`email` = 'Gendir.il@gmail.com' WHERE `sphr_client`.`id` = '6c4b37d8-49d9-4059-1214-4fe2e6ee4a0a';
UPDATE `sphr_client` SET `id` = '6ca6240a-9bb6-e1a4-6de5-4fe2e67fc9f5',`phone_home` = '+ 7 495 772-36-90',`phone_mobile` = '',`email` = '7723690@mail.ru' WHERE `sphr_client`.`id` = '6ca6240a-9bb6-e1a4-6de5-4fe2e67fc9f5';
UPDATE `sphr_client` SET `id` = '6cf49aad-fbff-ae3d-baea-4fe2e6c7b6d9',`phone_home` = '',`phone_mobile` = '+ 7 985 924-00-07',`email` = 'Sva62@mail.ru' WHERE `sphr_client`.`id` = '6cf49aad-fbff-ae3d-baea-4fe2e6c7b6d9';
UPDATE `sphr_client` SET `id` = '6d4f52c3-9549-e772-2c60-4fe2e66d403d',`phone_home` = '',`phone_mobile` = '+ 7 965 873-00-30',`email` = 'Atrifimofa@yandex.ru' WHERE `sphr_client`.`id` = '6d4f52c3-9549-e772-2c60-4fe2e66d403d';
UPDATE `sphr_client` SET `id` = '6da79353-307c-21ad-3257-4fe2e6ff1584',`phone_home` = '',`phone_mobile` = '+ 7 905 580-58-30',`email` = 'Dioksik@rambler.ru' WHERE `sphr_client`.`id` = '6da79353-307c-21ad-3257-4fe2e6ff1584';
UPDATE `sphr_client` SET `id` = '6e030190-ace4-ee20-83a0-4fe2e6f364f0',`phone_home` = '',`phone_mobile` = '+ 7 916 851-21-21',`email` = 'Homeriada@mail.ru' WHERE `sphr_client`.`id` = '6e030190-ace4-ee20-83a0-4fe2e6f364f0';
UPDATE `sphr_client` SET `id` = '6e5ae1fe-85fc-88f2-821f-4fe2e6adb6e1',`phone_home` = '',`phone_mobile` = '',`email` = '75sasha@mail.ru' WHERE `sphr_client`.`id` = '6e5ae1fe-85fc-88f2-821f-4fe2e6adb6e1';
UPDATE `sphr_client` SET `id` = '6eb6166f-c718-506c-0acc-4fe2e6328165',`phone_home` = '',`phone_mobile` = '+ 7 909 916-73-90',`email` = 'Pushkaryova11@rambler.ru' WHERE `sphr_client`.`id` = '6eb6166f-c718-506c-0acc-4fe2e6328165';
UPDATE `sphr_client` SET `id` = '6f1d1e66-f1c8-2d31-7098-4fe2e69a22f8',`phone_home` = '637244139',`phone_mobile` = '+ 7 916 696-40-39',`email` = 'Vv.zinoviev@gmail.com' WHERE `sphr_client`.`id` = '6f1d1e66-f1c8-2d31-7098-4fe2e69a22f8';
UPDATE `sphr_client` SET `id` = '6f7fc216-f163-41b8-9f97-4fe2e6840169',`phone_home` = '',`phone_mobile` = '+ 7 909 691-84-14',`email` = 'Lprozora@mail.ru' WHERE `sphr_client`.`id` = '6f7fc216-f163-41b8-9f97-4fe2e6840169';
UPDATE `sphr_client` SET `id` = '6fdb0f87-7f5a-0654-29c3-4fe2e62d41e6',`phone_home` = '',`phone_mobile` = '+ 7 906 796-03-53',`email` = 'samodurovna@gmail.com' WHERE `sphr_client`.`id` = '6fdb0f87-7f5a-0654-29c3-4fe2e62d41e6';
UPDATE `sphr_client` SET `id` = '70428aae-a789-e282-a77c-4fe2e685aad3',`phone_home` = '',`phone_mobile` = '+ 7 915 200-88-89',`email` = '9152008889@mail.ru' WHERE `sphr_client`.`id` = '70428aae-a789-e282-a77c-4fe2e685aad3';
UPDATE `sphr_client` SET `id` = '70a0e144-a829-e33e-639b-4fe2e6563b70',`phone_home` = NULL,`phone_mobile` = '+ 7 905 549-62-90',`email` = 'morozova200467@mail.ru' WHERE `sphr_client`.`id` = '70a0e144-a829-e33e-639b-4fe2e6563b70';
UPDATE `sphr_client` SET `id` = '71035796-125b-569f-3724-4fe2e63c65bd',`phone_home` = '',`phone_mobile` = '+ 7 916 028-38-70',`email` = '89160283870@mail.ru' WHERE `sphr_client`.`id` = '71035796-125b-569f-3724-4fe2e63c65bd';
UPDATE `sphr_client` SET `id` = '71664019-1f8d-a282-0d45-4fe2e614e0ca',`phone_home` = '',`phone_mobile` = '+ 7 985 259-76-07',`email` = 'S.MARKOVA63@bk.ru' WHERE `sphr_client`.`id` = '71664019-1f8d-a282-0d45-4fe2e614e0ca';
UPDATE `sphr_client` SET `id` = '71c37cad-0085-c7fb-5145-4fe2e62f13c3',`phone_home` = '',`phone_mobile` = '',`email` = 'nataly.soloshenko@gmail.com' WHERE `sphr_client`.`id` = '71c37cad-0085-c7fb-5145-4fe2e62f13c3';
UPDATE `sphr_client` SET `id` = '7213341f-8bd7-1f1e-f935-4fe2e6d75b22',`phone_home` = '',`phone_mobile` = '',`email` = 'Elenna_ch@rambler.ru' WHERE `sphr_client`.`id` = '7213341f-8bd7-1f1e-f935-4fe2e6d75b22';
UPDATE `sphr_client` SET `id` = '72734587-6563-1776-a14e-4fe2e611a642',`phone_home` = '',`phone_mobile` = '',`email` = 'tahaki@gmail.com' WHERE `sphr_client`.`id` = '72734587-6563-1776-a14e-4fe2e611a642';
UPDATE `sphr_client` SET `id` = '72d3cd97-41a7-f16b-cde8-4fe2e62358fe',`phone_home` = '',`phone_mobile` = '',`email` = 'i.karewa2012@yandex.ru' WHERE `sphr_client`.`id` = '72d3cd97-41a7-f16b-cde8-4fe2e62358fe';
UPDATE `sphr_client` SET `id` = '7338e2d4-7855-3aea-91b0-4fe2e6689316',`phone_home` = '',`phone_mobile` = '+ 7 916 505-63-35',`email` = 'xoa1969@yandex.ru' WHERE `sphr_client`.`id` = '7338e2d4-7855-3aea-91b0-4fe2e6689316';
UPDATE `sphr_client` SET `id` = '738fe595-7670-5d2d-1d7d-4fe2e6191e8a',`phone_home` = '',`phone_mobile` = '+ 7 903 678-72-17',`email` = 'oksana_yashina@mail.ru' WHERE `sphr_client`.`id` = '738fe595-7670-5d2d-1d7d-4fe2e6191e8a';
UPDATE `sphr_client` SET `id` = '7412a9ce-b1fa-246b-df8c-4fe2e6ea2370',`phone_home` = '',`phone_mobile` = '+ 7 910 453-70-54',`email` = 'intriga-007@yandex.ru' WHERE `sphr_client`.`id` = '7412a9ce-b1fa-246b-df8c-4fe2e6ea2370';
UPDATE `sphr_client` SET `id` = '747d42cb-50a5-ee80-53e7-4fe2e6408559',`phone_home` = '',`phone_mobile` = '+ 7 910 454-05-26',`email` = 'hozjain89@mail.ru' WHERE `sphr_client`.`id` = '747d42cb-50a5-ee80-53e7-4fe2e6408559';
UPDATE `sphr_client` SET `id` = '74db6ae4-eeac-a5c0-fc5f-4fe2e6144c2c',`phone_home` = '',`phone_mobile` = '+ 7 916 354-67-18',`email` = 'kolesnikovis@gmail.com' WHERE `sphr_client`.`id` = '74db6ae4-eeac-a5c0-fc5f-4fe2e6144c2c';
UPDATE `sphr_client` SET `id` = '75377de8-39d6-9ee7-fb2b-4fe2e683bd92',`phone_home` = '',`phone_mobile` = '+ 7 951 901-39-46',`email` = 'dir2@tswet.ru' WHERE `sphr_client`.`id` = '75377de8-39d6-9ee7-fb2b-4fe2e683bd92';
UPDATE `sphr_client` SET `id` = '75934ce4-6f30-b5a0-5d11-4fe2e61e25bb',`phone_home` = '',`phone_mobile` = '+ 7 903 969-35-25',`email` = '9693525@mail.ru' WHERE `sphr_client`.`id` = '75934ce4-6f30-b5a0-5d11-4fe2e61e25bb';
UPDATE `sphr_client` SET `id` = '75ed9831-38c0-775b-197e-4fe2e6a4a43e',`phone_home` = '',`phone_mobile` = '+ 7 916 526-18-50',`email` = 'G_K_BORESKOV@mail.ru' WHERE `sphr_client`.`id` = '75ed9831-38c0-775b-197e-4fe2e6a4a43e';
UPDATE `sphr_client` SET `id` = '764d2cce-5f4f-a7b9-c82a-4fe2e61a73f0',`phone_home` = '+ 7 916 654-54-74',`phone_mobile` = '+ 7 916 024-21-31',`email` = 'inna-1874@mail.ru' WHERE `sphr_client`.`id` = '764d2cce-5f4f-a7b9-c82a-4fe2e61a73f0';
UPDATE `sphr_client` SET `id` = '76bc1a71-4a79-c453-0863-4fe2e6aa1b40',`phone_home` = '',`phone_mobile` = '+ 7 925 030-14-38',`email` = 'nataliapombrik@rambler.ru' WHERE `sphr_client`.`id` = '76bc1a71-4a79-c453-0863-4fe2e6aa1b40';
UPDATE `sphr_client` SET `id` = '7743adbb-0511-0341-bea5-4fe2e643098e',`phone_home` = '',`phone_mobile` = '+ 7 917 550-94-75',`email` = 'das@altairsb.ru' WHERE `sphr_client`.`id` = '7743adbb-0511-0341-bea5-4fe2e643098e';
UPDATE `sphr_client` SET `id` = '77c002d6-1e2a-f926-c2e6-4fe2e6653a03',`phone_home` = '',`phone_mobile` = '+ 7 985 929-33-30',`email` = 'bogach69@mail.ru' WHERE `sphr_client`.`id` = '77c002d6-1e2a-f926-c2e6-4fe2e6653a03';
UPDATE `sphr_client` SET `id` = '783a2212-8e71-9a1f-bace-4fe2e62f0a34',`phone_home` = '',`phone_mobile` = '',`email` = 'marcos-2000@mail.ru' WHERE `sphr_client`.`id` = '783a2212-8e71-9a1f-bace-4fe2e62f0a34';
UPDATE `sphr_client` SET `id` = '78b1d63a-3702-a6c1-744c-4fe2e6ea6f4e',`phone_home` = '+ 7 495 795-89-23',`phone_mobile` = '',`email` = '9873004@mail.ru' WHERE `sphr_client`.`id` = '78b1d63a-3702-a6c1-744c-4fe2e6ea6f4e';
UPDATE `sphr_client` SET `id` = '792efb0a-e82d-44c5-2cf1-4fe2e6c0ae2f',`phone_home` = '',`phone_mobile` = '+ 7 906 781-77-74',`email` = 'olia_maliok@mail.ru' WHERE `sphr_client`.`id` = '792efb0a-e82d-44c5-2cf1-4fe2e6c0ae2f';
UPDATE `sphr_client` SET `id` = '79b9c9f0-9b88-1643-a3b5-4fe2e6f1d571',`phone_home` = '',`phone_mobile` = '+ 7 905 792-80-21',`email` = 'laska_marina@yahoo.com' WHERE `sphr_client`.`id` = '79b9c9f0-9b88-1643-a3b5-4fe2e6f1d571';
UPDATE `sphr_client` SET `id` = '7b35493c-aeba-9611-2d74-4fe2e6ffe437',`phone_home` = '',`phone_mobile` = '',`email` = '7696657@gmail.com' WHERE `sphr_client`.`id` = '7b35493c-aeba-9611-2d74-4fe2e6ffe437';
UPDATE `sphr_client` SET `id` = '7bce768e-951e-0725-1e3f-4fe2e6ea9bb9',`phone_home` = '',`phone_mobile` = '+ 7 921 912-42-21',`email` = 'j.charenko@gmail.com' WHERE `sphr_client`.`id` = '7bce768e-951e-0725-1e3f-4fe2e6ea9bb9';
UPDATE `sphr_client` SET `id` = '7c677c79-30fc-0a5a-bda2-4fe2e674d746',`phone_home` = '',`phone_mobile` = '+ 7 921 725-55-01',`email` = 's-luntsevich@yandex.ru' WHERE `sphr_client`.`id` = '7c677c79-30fc-0a5a-bda2-4fe2e674d746';
UPDATE `sphr_client` SET `id` = '7d05a5f6-39cf-c278-afaa-4fe2e60d29de',`phone_home` = '',`phone_mobile` = '+ 7 927 268-55-15',`email` = 'Als63@mail.ru' WHERE `sphr_client`.`id` = '7d05a5f6-39cf-c278-afaa-4fe2e60d29de';
UPDATE `sphr_client` SET `id` = '7d886f6b-8a27-10f9-25ef-4fe2e6e112ad',`phone_home` = '+ 7 910 401-10-03',`phone_mobile` = '+ 7 910 401-10-03',`email` = NULL WHERE `sphr_client`.`id` = '7d886f6b-8a27-10f9-25ef-4fe2e6e112ad';
UPDATE `sphr_client` SET `id` = '7e1a8a74-2167-247d-e0fc-4fe2e684d7c7',`phone_home` = '',`phone_mobile` = '+ 7 916 508-72-58',`email` = 'levonasa@yahoo.com' WHERE `sphr_client`.`id` = '7e1a8a74-2167-247d-e0fc-4fe2e684d7c7';
UPDATE `sphr_client` SET `id` = '7eaf36c3-f72e-6e9d-a212-4fe2e6b1013e',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '7eaf36c3-f72e-6e9d-a212-4fe2e6b1013e';
UPDATE `sphr_client` SET `id` = '7f3ac42a-42ef-adcb-6cda-4fe2e6c3c143',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '7f3ac42a-42ef-adcb-6cda-4fe2e6c3c143';
UPDATE `sphr_client` SET `id` = '7fc2a6df-2eee-7d94-7279-4fe2e6e565a6',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '7fc2a6df-2eee-7d94-7279-4fe2e6e565a6';
UPDATE `sphr_client` SET `id` = '804704cd-32d9-5e18-3848-4fe2e6bcc256',`phone_home` = '',`phone_mobile` = '',`email` = NULL WHERE `sphr_client`.`id` = '804704cd-32d9-5e18-3848-4fe2e6bcc256';
UPDATE `sphr_client` SET `id` = '80dd2b26-e227-caab-8c7f-4fe2e60b9837',`phone_home` = '',`phone_mobile` = '+ 7 903 698-02-10',`email` = '1gbk@mail.ru' WHERE `sphr_client`.`id` = '80dd2b26-e227-caab-8c7f-4fe2e60b9837';
UPDATE `sphr_client` SET `id` = '816dd5fa-43ce-c121-7a99-4fe2e6512960',`phone_home` = '',`phone_mobile` = '+ 7 921 571-09-77',`email` = 'avmlink@inbox.ru' WHERE `sphr_client`.`id` = '816dd5fa-43ce-c121-7a99-4fe2e6512960';
UPDATE `sphr_client` SET `id` = '82093bdd-3a12-689d-a401-4fe2e6b0ef11',`phone_home` = '',`phone_mobile` = '+ 7 917 580-78-48',`email` = 'vitgerman3@rambler.ru' WHERE `sphr_client`.`id` = '82093bdd-3a12-689d-a401-4fe2e6b0ef11';
UPDATE `sphr_client` SET `id` = '82a01998-d3b4-2e8d-bb14-4fe2e69a37e7',`phone_home` = '+ 7 922 203-35-50',`phone_mobile` = '+ 7 922 601-52-22',`email` = 'etd-ross@yandex.ru' WHERE `sphr_client`.`id` = '82a01998-d3b4-2e8d-bb14-4fe2e69a37e7';
UPDATE `sphr_client` SET `id` = '832ba462-9712-dd82-3e11-4fe2e624c1ef',`phone_home` = '',`phone_mobile` = '',`email` = 'kinajulia@mail.ru' WHERE `sphr_client`.`id` = '832ba462-9712-dd82-3e11-4fe2e624c1ef';
UPDATE `sphr_client` SET `id` = '83be194c-eaae-9ecf-2838-4fe2e6014dff',`phone_home` = '',`phone_mobile` = '+ 7 915 479-92-99',`email` = NULL WHERE `sphr_client`.`id` = '83be194c-eaae-9ecf-2838-4fe2e6014dff';
UPDATE `sphr_client` SET `id` = '844f07fd-8577-abe3-61b7-4fe2e6f1583f',`phone_home` = '',`phone_mobile` = '',`email` = 'zotov_denis@mail.ru' WHERE `sphr_client`.`id` = '844f07fd-8577-abe3-61b7-4fe2e6f1583f';
UPDATE `sphr_client` SET `id` = '2004d498-710f-62af-baeb-4ff2b0836ebd',`phone_home` = NULL,`phone_mobile` = '+24535436546456-65-7',`email` = NULL WHERE `sphr_client`.`id` = '2004d498-710f-62af-baeb-4ff2b0836ebd';


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

UPDATE `fields_meta_data` SET `id` = 'sphr_Clienttype_c',`name` = 'type_c',`vname` = 'LBL_TYPE',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = 'individual',`date_modified` = '2011-08-23 16:21:57',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'client_type_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clienttype_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientaddress_registration_type_c',`name` = 'address_registration_type_c',`vname` = 'LBL_ADDRESS_REGISTRATION_TYPE',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'enum',`len` = 100,`required` = 0,`default_value` = 'permanent',`date_modified` = '2011-07-26 17:02:28',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = 'registration_type_list',`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientaddress_registration_type_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientmiddle_name_c',`name` = 'middle_name_c',`vname` = 'LBL_MIDDLE_NAME',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-07-02 15:38:00',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientmiddle_name_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientphone_aon_c',`name` = 'phone_aon_c',`vname` = 'LBL_PHONE_AON',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'phone',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2011-08-23 16:23:09',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientphone_aon_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clienttest_nettel_c',`name` = 'test_nettel_c',`vname` = 'LBL_TEST_NETTEL',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2011-11-03 07:48:46',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clienttest_nettel_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientis_new_c',`name` = 'is_new_c',`vname` = 'LBL_IS_NEW',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'int',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2011-11-28 06:03:57',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientis_new_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientphone_mobile_2_c',`name` = 'phone_mobile_2_c',`vname` = 'LBL_PHONE_MOBILE_2',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'phone',`len` = 20,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-18 08:48:19',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientphone_mobile_2_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientadditional_information_c',`name` = 'additional_information_c',`vname` = 'LBL_ADDITIONAL_INFORMATION',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'text',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-06 14:02:07',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = '6',`ext3` = '50',`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientadditional_information_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientphoto_c',`name` = 'photo_c',`vname` = 'LBL_PHOTO',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 255,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-04 14:27:13',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientphoto_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientemail_2_c',`name` = 'email_2_c',`vname` = 'LBL_EMAIL_2',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 100,`required` = 0,`default_value` = NULL,`date_modified` = '2012-07-02 15:37:12',`deleted` = 0,`audited` = 1,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientemail_2_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_name_c',`name` = 'zagran_name_c',`vname` = 'LBL_ZAGRAN_NAME',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 150,`required` = 0,`default_value` = NULL,`date_modified` = '2012-07-02 15:38:21',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_name_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_last_name_c',`name` = 'zagran_last_name_c',`vname` = 'LBL_ZAGRAN_LAST_NAME',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 150,`required` = 0,`default_value` = NULL,`date_modified` = '2012-07-02 15:37:49',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_last_name_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_number_c',`name` = 'zagran_number_c',`vname` = 'LBL_ZAGRAN_NUMBER',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 50,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-08 12:11:50',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_number_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_date_birth_c',`name` = 'zagran_date_birth_c',`vname` = 'LBL_ZAGRAN_DATE_BIRTH',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'date',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-08 12:11:13',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_date_birth_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_date_give_c',`name` = 'zagran_date_give_c',`vname` = 'LBL_ZAGRAN_DATE_GIVE',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'date',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-08 12:11:42',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_date_give_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_date_end_c',`name` = 'zagran_date_end_c',`vname` = 'LBL_ZAGRAN_DATE_END',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'date',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-08 12:12:00',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_date_end_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientzagran_organ_c',`name` = 'zagran_organ_c',`vname` = 'LBL_ZAGRAN_ORGAN',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'text',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-07-02 15:38:49',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = '3',`ext3` = '100',`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientzagran_organ_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientcurrent_city_c',`name` = 'current_city_c',`vname` = 'LBL_CURRENT_CITY',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 50,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-17 15:02:21',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientcurrent_city_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientcurrent_country_c',`name` = 'current_country_c',`vname` = 'LBL_CURRENT_COUNTRY',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'varchar',`len` = 50,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-17 15:03:00',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = NULL,`ext3` = NULL,`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientcurrent_country_c';
UPDATE `fields_meta_data` SET `id` = 'sphr_Clientcurrent_address_c',`name` = 'current_address_c',`vname` = 'LBL_CURRENT_ADDRESS',`comments` = NULL,`help` = NULL,`custom_module` = 'sphr_Client',`type` = 'text',`len` = NULL,`required` = 0,`default_value` = NULL,`date_modified` = '2012-04-18 15:12:46',`deleted` = 0,`audited` = 0,`massupdate` = 0,`duplicate_merge` = 0,`reportable` = 1,`importable` = 'true',`ext1` = NULL,`ext2` = '6',`ext3` = '50',`ext4` = NULL WHERE `fields_meta_data`.`id` = 'sphr_Clientcurrent_address_c';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
