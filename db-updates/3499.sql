
ALTER TABLE `sphr_object_cstm` ADD `price_sale_meter_c` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;


INSERT INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('sphr_Objectprice_sale_meter_c', 'price_sale_meter_c', 'LBL_PRICE_SALE_METER', NULL, NULL, 'sphr_Object', 'varchar', 255, 0, NULL, '2014-05-06 18:14:24', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);