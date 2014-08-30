<?php
$module_name = 'sphr_Owner';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'first_and_middle_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_and_middle_name',
      ),
      'phone_mobile' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_MOBILE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'phone_home' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_HOME',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'phone_work' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_WORK',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'contract_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_number',
      ),
      'contract_date_singing' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CONTRACT_DATE_SINGING',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_date_singing',
      ),
      'contract_date_expiration' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CONTRACT_DATE_EXPIRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_date_expiration',
      ),
      'contract_duration' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_DURATION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_duration',
      ),
      'contract_comission' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_COMISSION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_comission',
      ),
      'passport_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PASSPORT_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'passport_type',
      ),
      'passport_last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_last_name',
      ),
      'passport_first_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_FIRST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_first_name',
      ),
      'passport_middle_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_MIDDLE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_middle_name',
      ),
      'passport_series' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PASSPORT_SERIES',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_series',
      ),
      'passport_number' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PASSPORT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_number',
      ),
      'passport_foreigner_ser_and_num' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_foreigner_ser_and_num',
      ),
      'passport_issue_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PASSPORT_ISSUE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_issue_date',
      ),
      'passport_issued' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_ISSUED',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_issued',
      ),
      'address_permanent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_PERMANENT',
        'width' => '10%',
        'default' => true,
        'name' => 'address_permanent',
      ),
      'address_temporary' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_TEMPORARY',
        'width' => '10%',
        'default' => true,
        'name' => 'address_temporary',
      ),
      'address_actual' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_ACTUAL',
        'width' => '10%',
        'default' => true,
        'name' => 'address_actual',
      ),
    ),
    'advanced_search' => 
    array (
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'first_and_middle_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_and_middle_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'phone_mobile' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_MOBILE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'phone_home' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_HOME',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'phone_work' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PHONE_WORK',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'contract_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_number',
      ),
      'contract_date_singing' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CONTRACT_DATE_SINGING',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_date_singing',
      ),
      'contract_date_expiration' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CONTRACT_DATE_EXPIRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_date_expiration',
      ),
      'contract_duration' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_DURATION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_duration',
      ),
      'contract_comission' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_COMISSION',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_comission',
      ),
      'passport_type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PASSPORT_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'passport_type',
      ),
      'passport_last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_last_name',
      ),
      'passport_first_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_FIRST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_first_name',
      ),
      'passport_middle_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_MIDDLE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_middle_name',
      ),
      'passport_number' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PASSPORT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_number',
      ),
      'passport_series' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_PASSPORT_SERIES',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_series',
      ),
      'passport_foreigner_ser_and_num' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_FOREIGNER_SER_AND_NUM',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_foreigner_ser_and_num',
      ),
      'passport_issue_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PASSPORT_ISSUE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_issue_date',
      ),
      'passport_issued' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PASSPORT_ISSUED',
        'width' => '10%',
        'default' => true,
        'name' => 'passport_issued',
      ),
      'address_temporary' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_TEMPORARY',
        'width' => '10%',
        'default' => true,
        'name' => 'address_temporary',
      ),
      'address_permanent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_PERMANENT',
        'width' => '10%',
        'default' => true,
        'name' => 'address_permanent',
      ),
      'address_actual' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_ACTUAL',
        'width' => '10%',
        'default' => true,
        'name' => 'address_actual',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
