<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Client',
    'varName' => 'sphr_Client',
    'orderBy' => 'sphr_client.first_name, sphr_client.last_name',
    'whereClauses' => array (
  'title' => 'sphr_client.title',
  'name' => 'sphr_client.name',
  'last_and_middle_name' => 'sphr_client.last_and_middle_name',
  'phone_mobile' => 'sphr_client.phone_mobile',
  'phone_work' => 'sphr_client.phone_work',
  'phone_home' => 'sphr_client.phone_home',
  'phone_fax' => 'sphr_client.phone_fax',
  'email' => 'sphr_client.email',
  'address_post' => 'sphr_client.address_post',
  'source' => 'sphr_client.source',
  'assigned_user_id' => 'sphr_client.assigned_user_id',
  'status' => 'sphr_client.status',
  'status_description' => 'sphr_client.status_description',
  'date_entered' => 'sphr_client.date_entered',
  'date_modified' => 'sphr_client.date_modified',
  'passport_type' => 'sphr_client.passport_type',
  'passport_series' => 'sphr_client.passport_series',
  'passport_number' => 'sphr_client.passport_number',
  'passport_foreigner_ser_and_num' => 'sphr_client.passport_foreigner_ser_and_num',
  'passport_issue_date' => 'sphr_client.passport_issue_date',
  'passport_issued' => 'sphr_client.passport_issued',
  'address_permanent' => 'sphr_client.address_permanent',
  'address_temporary' => 'sphr_client.address_temporary',
  'address_actual' => 'sphr_client.address_actual',
  'addressl_actual' => 'sphr_client.addressl_actual',
  'addressl_legal' => 'sphr_client.addressl_legal',
  'phone' => 'sphr_client.phone',
  'inn_and_kpp' => 'sphr_client.inn_and_kpp',
  'account_and_bank' => 'sphr_client.account_and_bank',
  'name_general_director' => 'sphr_client.name_general_director',
  'passport_last_name' => 'sphr_client.passport_last_name',
  'passport_first_name' => 'sphr_client.passport_first_name',
  'passport_middle_name' => 'sphr_client.passport_middle_name',
),
    'searchInputs' => array (
  2 => 'title',
  3 => 'name',
  4 => 'last_and_middle_name',
  5 => 'phone_mobile',
  6 => 'phone_work',
  7 => 'phone_home',
  8 => 'phone_fax',
  9 => 'email',
  10 => 'address_post',
  11 => 'source',
  12 => 'assigned_user_id',
  13 => 'status',
  14 => 'status_description',
  15 => 'date_entered',
  16 => 'date_modified',
  17 => 'passport_type',
  19 => 'passport_series',
  20 => 'passport_number',
  21 => 'passport_foreigner_ser_and_num',
  22 => 'passport_issue_date',
  23 => 'passport_issued',
  24 => 'address_permanent',
  25 => 'address_temporary',
  26 => 'address_actual',
  27 => 'addressl_actual',
  28 => 'addressl_legal',
  29 => 'phone',
  30 => 'inn_and_kpp',
  31 => 'account_and_bank',
  32 => 'name_general_director',
  33 => 'passport_last_name',
  34 => 'passport_first_name',
  35 => 'passport_middle_name',
),
    'searchdefs' => array (
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
	'link' => true,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'last_and_middle_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_AND_MIDDLE_NAME',
    'width' => '10%',
    'name' => 'last_and_middle_name',
  ),
  'phone_mobile' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'name' => 'phone_mobile',
  ),
  'phone_work' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_WORK',
    'width' => '10%',
    'name' => 'phone_work',
  ),
  'phone_home' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_HOME',
    'width' => '10%',
    'name' => 'phone_home',
  ),
  'phone_fax' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_FAX',
    'width' => '10%',
    'name' => 'phone_fax',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'name' => 'email',
  ),
  'address_post' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POST',
    'width' => '10%',
    'name' => 'address_post',
  ),
  'source' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOURCE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'source',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'name' => 'assigned_user_id',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
  'status_description' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS_DESCRIPTION',
    'width' => '10%',
    'name' => 'status_description',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
  'passport_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PASSPORT_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'passport_type',
  ),
  'passport_series' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PASSPORT_SERIES',
    'width' => '10%',
    'name' => 'passport_series',
  ),
  'passport_number' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PASSPORT_NUMBER',
    'width' => '10%',
    'name' => 'passport_number',
  ),
  'passport_last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_LAST_NAME',
    'width' => '10%',
    'name' => 'passport_last_name',
  ),
  'passport_first_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_FIRST_NAME',
    'width' => '10%',
    'name' => 'passport_first_name',
  ),
  'passport_middle_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_MIDDLE_NAME',
    'width' => '10%',
    'name' => 'passport_middle_name',
  ),
  'passport_foreigner_ser_and_num' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
    'width' => '10%',
    'name' => 'passport_foreigner_ser_and_num',
  ),
  'passport_issue_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PASSPORT_ISSUE_DATE',
    'width' => '10%',
    'name' => 'passport_issue_date',
  ),
  'passport_issued' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_ISSUED',
    'width' => '10%',
    'name' => 'passport_issued',
  ),
  'address_permanent' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_PERMANENT',
    'width' => '10%',
    'name' => 'address_permanent',
  ),
  'address_temporary' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_TEMPORARY',
    'width' => '10%',
    'name' => 'address_temporary',
  ),
  'address_actual' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_ACTUAL',
    'width' => '10%',
    'name' => 'address_actual',
  ),
  'addressl_actual' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESSL_ACTUAL',
    'width' => '10%',
    'name' => 'addressl_actual',
  ),
  'addressl_legal' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESSL_LEGAL',
    'width' => '10%',
    'name' => 'addressl_legal',
  ),
  'phone' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'name' => 'phone',
  ),
  'inn_and_kpp' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INN_AND_KPP',
    'width' => '10%',
    'name' => 'inn_and_kpp',
  ),
  'account_and_bank' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_AND_BANK',
    'width' => '10%',
    'name' => 'account_and_bank',
  ),
  'name_general_director' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME_GENERAL_DIRECTOR',
    'width' => '10%',
    'name' => 'name_general_director',
  ),
),
    'listviewdefs' => array (
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'title',
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
  ),
  'LAST_AND_MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_AND_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_and_middle_name',
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_HOME',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_home',
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_mobile',
  ),
  'PHONE_WORK' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_WORK',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_work',
  ),
  'PHONE_FAX' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_FAX',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_fax',
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email',
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_id',
  ),
  'PASSPORT_LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_FIRST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone',
  ),
  'INN_AND_KPP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INN_AND_KPP',
    'width' => '10%',
    'default' => true,
    'name' => 'inn_and_kpp',
  ),
),
);
