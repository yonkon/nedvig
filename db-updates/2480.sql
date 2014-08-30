ALTER TABLE `cosib_queries_cstm`
ADD COLUMN `province_to_live_c` varchar(100) DEFAULT '1',
ADD COLUMN `visa_d_obtaining_date_c` date DEFAULT NULL;

INSERT INTO `fields_meta_data` VALUES
('cosib_queriesprovince_to_live_c', 'province_to_live_c', 'LBL_PROVINCE_TO_LIVE', NULL, NULL, 'cosib_queries', 'enum', 100, 0, '1', '2013-07-14 23:24:14', 0, 0, 0, 0, 1, 'true', 'province_list', NULL, NULL, NULL),
('cosib_queriesvisa_d_obtaining_date_c', 'visa_d_obtaining_date_c', 'LBL_VISA_D_OBTAINING_DATE', NULL, NULL, 'cosib_queries', 'date', NULL, 0, NULL, '2013-07-14 23:23:46', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL);

UPDATE `fields_meta_data` SET `audited` = 1
WHERE `id` 
IN ('cosib_queriesdni_begin_date_c', 
'cosib_queriesresolution_date_c', 
'cosib_queriesdocuments_date_c', 
'cosib_queriespayment_size_c', 
'cosib_queriespayment_date_c', 
'cosib_queriescharge_summ_date_c', 
'cosib_queriesprepayment_size_c', 
'cosib_queriesprepayment_date_c', 
'cosib_queriescharge_c', 
'cosib_queriesdni_end_date_c');

