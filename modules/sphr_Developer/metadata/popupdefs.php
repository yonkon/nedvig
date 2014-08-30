<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Developer',
    'varName' => 'sphr_Developer',
    'orderBy' => 'sphr_developer.name',
    'whereClauses' => array (
  'title' => 'sphr_developer.title',
  'assigned_user_id' => 'sphr_developer.assigned_user_id',
  'address' => 'sphr_developer.address',
  'phone' => 'sphr_developer.phone',
  'phone_fax' => 'sphr_developer.phone_fax',
  'email' => 'sphr_developer.email',
  'website' => 'sphr_developer.website',
  'contract_number' => 'sphr_developer.contract_number',
  'contract_date_singing' => 'sphr_developer.contract_date_singing',
  'contract_date_expiration' => 'sphr_developer.contract_date_expiration',
  'contract_duration' => 'sphr_developer.contract_duration',
  'contract_comission' => 'sphr_developer.contract_comission',
  'inn_and_kpp' => 'sphr_developer.inn_and_kpp',
  'address_legal' => 'sphr_developer.address_legal',
  'address_post' => 'sphr_developer.address_post',
  'account_and_bank' => 'sphr_developer.account_and_bank',
  'name_general_director' => 'sphr_developer.name_general_director',
),
    'searchInputs' => array (
  4 => 'title',
  5 => 'assigned_user_id',
  6 => 'address',
  7 => 'phone',
  8 => 'phone_fax',
  9 => 'email',
  10 => 'website',
  11 => 'contract_number',
  12 => 'contract_date_singing',
  13 => 'contract_date_expiration',
  14 => 'contract_duration',
  15 => 'contract_comission',
  16 => 'inn_and_kpp',
  17 => 'address_legal',
  18 => 'address_post',
  19 => 'account_and_bank',
  20 => 'name_general_director',
),
    'searchdefs' => array (
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'name' => 'assigned_user_id',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'name' => 'address',
  ),
  'phone' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'name' => 'phone',
  ),
  'phone_fax' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX',
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
  'website' => 
  array (
    'type' => 'url',
    'label' => 'LBL_WEBSITE',
    'width' => '10%',
    'name' => 'website',
  ),
  'contract_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTRACT_NUMBER',
    'width' => '10%',
    'name' => 'contract_number',
  ),
  'contract_date_singing' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CONTRACT_DATE_SINGING',
    'width' => '10%',
    'name' => 'contract_date_singing',
  ),
  'contract_date_expiration' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CONTRACT_DATE_EXPIRATION',
    'width' => '10%',
    'name' => 'contract_date_expiration',
  ),
  'contract_duration' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTRACT_DURATION',
    'width' => '10%',
    'name' => 'contract_duration',
  ),
  'contract_comission' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTRACT_COMISSION',
    'width' => '10%',
    'name' => 'contract_comission',
  ),
  'inn_and_kpp' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INN_AND_KPP',
    'width' => '10%',
    'name' => 'inn_and_kpp',
  ),
  'address_legal' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_LEGAL',
    'width' => '10%',
    'name' => 'address_legal',
  ),
  'address_post' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POST',
    'width' => '10%',
    'name' => 'address_post',
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
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
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
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
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
),
);
