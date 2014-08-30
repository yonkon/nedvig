ALTER TABLE `sphr_client_cstm` ADD `budget_c` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `fields_meta_data` VALUES ('sphr_Clientbudget_c', 'budget_c', 'LBL_BUDGET', NULL, NULL, 'sphr_Client', 'varchar', 255, 0, NULL, NULL, 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

ALTER TABLE `sphr_client_cstm` ADD `object_type_c` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `fields_meta_data` VALUES ('sphr_Clientobject_type_c', 'object_type_c', 'LBL_OBJECT_TYPE', NULL, NULL, 'sphr_Client', 'enum', 100, 0, 11, NULL, 0, 0, 0, 0, 1, 'true', 'object_type_list', NULL, NULL, NULL);