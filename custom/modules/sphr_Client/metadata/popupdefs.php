<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Client',
    'varName' => 'sphr_Client',
    'orderBy' => 'sphr_client.first_name, sphr_client.last_name',
    'whereClauses' => array (
  'status' => 'sphr_client.status',
  'assigned_user_id' => 'sphr_client.assigned_user_id',
  'last_name' => 'sphr_client.last_name',
  'first_name' => 'sphr_client.first_name',
  'current_city_c' => 'sphr_client_cstm.current_city_c',
  'source' => 'sphr_client.source',
  'vip_c' => 'sphr_client_cstm.vip_c',
  'name' => 'sphr_client.full_name',
),
    'searchInputs' => array (
  13 => 'status',
  48 => 'assigned_user_id',
  52 => 'last_name',
  53 => 'first_name',
  54 => 'current_city_c',
  55 => 'source',
  57 => 'vip_c',
),
    'searchdefs' => array (
  'last_name' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name',
  ),
  'first_name' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'name' => 'first_name',
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
  'current_city_c' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_CURRENT_CITY',
    'width' => '10%',
    'name' => 'current_city_c',
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
  'vip_c' =>
  array (
    'type' => 'bool',
    'label' => 'LBL_VIP',
    'width' => '10%',
    'name' => 'vip_c',
  ),
),
    'listviewdefs' => array (
  'LAST_NAME' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'FIRST_NAME' =>
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
    'link' => true,
  ),
  'PHONE_MOBILE' =>
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_mobile',
  ),
   'EMAIL1' =>
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
  'CURRENT_CITY_C' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CURRENT_CITY',
    'width' => '10%',
    'name' => 'current_city_c',
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'STATUS' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
),
);
