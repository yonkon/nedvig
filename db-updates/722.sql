UPDATE `fields_meta_data` SET `len`='20' WHERE `name`='middle_name_c';
ALTER TABLE `sphr_client_cstm` CHANGE `middle_name_c` `middle_name_c` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientphone_mobile_2_c', `name`='phone_mobile_2_c', `vname`='LBL_PHONE_MOBILE_2', `custom_module`='sphr_Client', `type`='phone', `len`='20', `date_modified`='2012-04-04 10:59:43', `audited`='1',  `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `phone_mobile_2_c` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientadditional_information_c', `name`='additional_information_c', `vname`='LBL_ADDITIONAL_INFORMATION', `custom_module`='sphr_Client', `type`='text', `date_modified`='2012-04-04 13:22:15', `reportable`='1', `importable`='true', `ext2`='6', `ext3`='50';
ALTER TABLE `sphr_client_cstm` ADD `additional_information_c` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientphoto_c', `name`='photo_c', `vname`='LBL_PHOTO', `custom_module`='sphr_Client', `type`='varchar', `len`='255', `date_modified`='2012-04-04 14:27:13', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `photo_c` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientemail_2_c', `name`='email_2_c', `vname`='LBL_EMAIL_2', `custom_module`='sphr_Client', `type`='varchar', `len`='20', `date_modified`='2012-04-06 12:32:46 ', `audited`='1',  `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `email_2_c` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_name_c', `name`='zagran_name_c', `vname`='LBL_ZAGRAN_NAME', `custom_module`='sphr_Client', `type`='varchar', `len`='20', `date_modified`='2012-04-06 14:25:10', `reportable`='q', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_name_c` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_last_name_c', `name`='zagran_last_name_c', `vname`='LBL_ZAGRAN_LAST_NAME', `custom_module`='sphr_Client', `type`='varchar', `len`='20', `date_modified`='2012-04-06 14:25:10', `reportable`='q', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_last_name_c` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_number_c', `name`='zagran_number_c', `vname`='LBL_ZAGRAN_NUMBER', `custom_module`='sphr_Client', `type`='varchar', `len`='50', `date_modified`='2012-04-06 14:25:10', `reportable`='q', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_number_c` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_date_birth_c', `name`='zagran_date_birth_c', `vname`='LBL_ZAGRAN_DATE_BIRTH', `custom_module`='sphr_Client', `type`='date', `date_modified`='2012-04-06 14:53:37', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_date_birth_c` DATE NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_date_give_c', `name`='zagran_date_give_c', `vname`='LBL_ZAGRAN_DATE_GIVE', `custom_module`='sphr_Client', `type`='date', `date_modified`='2012-04-06 14:53:37', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_date_give_c` DATE NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_date_end_c', `name`='zagran_date_end_c', `vname`='LBL_ZAGRAN_DATE_END', `custom_module`='sphr_Client', `type`='date', `date_modified`='2012-04-06 14:53:37', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `zagran_date_end_c` DATE NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientzagran_organ_c', `name`='zagran_organ_c', `vname`='LBL_ZAGRAN_ORGAN', `custom_module`='sphr_Client', `type`='text', `date_modified`='2012-04-08 11:50:55', `reportable`='1', `importable`='true', `ext2`='3', `ext3`='50';
ALTER TABLE `sphr_client_cstm` ADD `zagran_organ_c` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientcurrent_country_c', `name`='current_country_c', `vname`='	LBL_CURRENT_COUNTRY', `custom_module`='sphr_Client', `type`='varchar', `len`='50', `date_modified`='2012-04-17 15:03:00', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `current_country_c` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientcurrent_city_c', `name`='current_city_c', `vname`='	LBL_CURRENT_CITY', `custom_module`='sphr_Client', `type`='varchar', `len`='50', `date_modified`='2012-04-17 15:03:30', `reportable`='1', `importable`='true';
ALTER TABLE `sphr_client_cstm` ADD `current_city_c` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

INSERT INTO `fields_meta_data` SET `id`='sphr_Clientcurrent_address_c', `name`='current_address_c', `vname`='LBL_CURRENT_ADDRESS', `custom_module`='sphr_Client', `type`='text', `date_modified`='2012-04-04 13:22:15', `reportable`='1', `importable`='true', `ext2`='6', `ext3`='50';
ALTER TABLE `sphr_client_cstm` ADD `current_address_c` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

CREATE TABLE
`sphr_client_kindred` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`id_client` CHAR(36) NOT NULL,
	`first_name` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`last_name` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`middle_name` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`birthday` VARCHAR( 20 ) NULL,
	`mobile` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`mobile_2` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`email` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`email_2` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`degree` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
	PRIMARY KEY(`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE
`sphr_client_countries` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `sphr_client_countries` SET `name`='Россия';
INSERT INTO `sphr_client_countries` SET `name`='Испания';

CREATE TABLE
`sphr_client_cities` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`country_id` INT(11) NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `sphr_client_cities` SET `name`='Москва', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Санкт-Петербург', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Волгоград', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Владивосток', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Хабаровск', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Екатеринбург', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Казань', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Калининград', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Краснодар', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Красноярск', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Нижний Новгород', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Новосибирск', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Омск', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Пермь', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Ростов-на-Дону', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Самара', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Уфа', `country_id`='1';
INSERT INTO `sphr_client_cities` SET `name`='Челябинск', `country_id`='1';

INSERT INTO `sphr_client_cities` SET `name`='Barcelona', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Bilbao', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Granada', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Las Palmas de Gran Canaria', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Madrid', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Malaga', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Murcia', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Palma', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Santa Cruz de Tenerife', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Sevilla', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Valencia', `country_id`='2';
INSERT INTO `sphr_client_cities` SET `name`='Zaragoza', `country_id`='2';

CREATE TABLE IF NOT EXISTS
`sphr_client_documents_c` (
	`id` VARCHAR( 36 ) NOT NULL,
	`date_modified` DATETIME NULL DEFAULT NULL,
	`deleted` TINYINT( 1 ) NULL DEFAULT '0',
	`sphr_clien29a0_client_ida` VARCHAR( 36 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`sphr_clien34c3cuments_idb` VARCHAR( 36 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`document_revision_id` VARCHAR( 36 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS
`sphr_client_sphr_object_c` (
	`id` VARCHAR( 36 ) NOT NULL,
	`date_modified` DATETIME NULL DEFAULT NULL,
	`deleted` TINYINT( 1 ) NULL DEFAULT '0',
	`sphr_clien88c3_client_ida` VARCHAR( 36 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`sphr_clien826b_object_idb` VARCHAR( 36 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
