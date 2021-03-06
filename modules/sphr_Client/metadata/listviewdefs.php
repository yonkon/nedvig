<?php
$module_name = 'sphr_Client';
$listViewDefs [$module_name] = 
array (
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
	'link' => true,
  ),
  'LAST_AND_MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_AND_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
	'link' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_WORK',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_HOME',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_FAX' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_FAX',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_POST' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POST',
    'width' => '10%',
    'default' => true,
  ),
  'SOURCE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SOURCE',
    'sortable' => false,
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'STATUS_DESCRIPTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS_DESCRIPTION',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PASSPORT_TYPE',
    'sortable' => false,
    'width' => '10%',
  ),
  'PASSPORT_SERIES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PASSPORT_SERIES',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PASSPORT_NUMBER',
    'width' => '10%',
    'default' => true,
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
  'PASSPORT_FOREIGNER_SER_AND_NUM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_ISSUE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PASSPORT_ISSUE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PASSPORT_ISSUED' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASSPORT_ISSUED',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_PERMANENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_PERMANENT',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_TEMPORARY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_TEMPORARY',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_ACTUAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_ACTUAL',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESSL_LEGAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESSL_LEGAL',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESSL_ACTUAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESSL_ACTUAL',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'INN_AND_KPP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INN_AND_KPP',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_AND_BANK' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_AND_BANK',
    'width' => '10%',
    'default' => true,
  ),
  'NAME_GENERAL_DIRECTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME_GENERAL_DIRECTOR',
    'width' => '10%',
    'default' => true,
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WORK_PHONE',
    'default' => false,
  ),
  'ADDRESS_STREET' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
    'default' => false,
  ),
  'ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'default' => false,
  ),
  'ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'default' => false,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => false,
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
);
?>
