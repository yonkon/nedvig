<?php
$module_name = 'sphr_Client';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'first_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_name',
      ),
      'phone_mobile' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PHONE_MOBILE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'email1' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'editField' => true,
        ),
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
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
        'width' => '10%',
        'default' => true,
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status',
      ),
      'accounts_sphr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'accounts_sphr_client',
        'label' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_sphr_client_name',
      ),
      't_start_c' =>
        array (
          'type' => 'date',
          'default' => true,
          'label' => 'LBL_T_START',
          'width' => '10%',
          'name' => 't_start_c',
        ),
      't_end_c' =>
        array (
          'type' => 'date',
          'default' => true,
          'label' => 'LBL_T_END',
          'width' => '10%',
          'name' => 't_end_c',
        ),
      'budget_c' =>
        array (
          'type' => 'minimax',
          'name' => 'budget_c',
          'label' => 'LBL_BUDGET',
        ),

    ),
    'advanced_search' => 
    array (
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'country_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'country_c',
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
        'width' => '10%',
        'default' => true,
      ),
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'region_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REGION',
        'sortable' => false,
        'width' => '10%',
        'name' => 'region_c',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status',
      ),
      'middle_name_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MIDDLE_NAME',
        'width' => '10%',
        'name' => 'middle_name_c',
      ),
      'city_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CITY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'city_c',
      ),
      'source' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SOURCE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'source',
      ),
      'budget_c' => 
      array (
        'type' => 'minimax',
        'name' => 'budget_c',
        'label' => 'LBL_BUDGET',
      ),
      'phone_mobile' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PHONE_MOBILE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'accounts_sphr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'accounts_sphr_client',
        'label' => 'LBL_ACCOUNTS_SPHR_CLIENT_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_sphr_client_name',
      ),
      'object_type_c' => 
      array (
        'name' => 'object_type_c',
        'label' => 'LBL_OBJECT_TYPE',
      ),
      'phone_mobile_2_c' => 
      array (
        'type' => 'phone',
        'default' => true,
        'label' => 'LBL_PHONE_MOBILE_2',
        'width' => '10%',
        'name' => 'phone_mobile_2_c',
      ),
      'phone_home' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PHONE_HOME',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'phone_work' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PHONE_WORK',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'email1' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'editField' => true,
        ),
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
      ),
      'phone_fax' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PHONE_FAX',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_fax',
      ),
      'birthday_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_BIRTHDAY',
        'width' => '10%',
        'name' => 'birthday_c',
      ),
      'vip_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_VIP',
        'width' => '10%',
        'name' => 'vip_c',
      ),
      'types_of_queries_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'label' => 'LBL_TYPES_OF_QUERIES_C ',
        'width' => '10%',
        'name' => 'types_of_queries_c',
      ),
      't_start_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_T_START',
        'width' => '10%',
        'name' => 't_start_c',
      ),
      't_end_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_T_END',
        'width' => '10%',
        'name' => 't_end_c',
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
