<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Owner',
    'varName' => 'sphr_Owner',
    'orderBy' => 'sphr_owner.name',
    'whereClauses' => array (
  'name' => 'sphr_owner.name',
  'last_name' => 'sphr_owner.last_name',
  'first_and_middle_name' => 'sphr_owner.first_and_middle_name',
  'assigned_user_id' => 'sphr_owner.assigned_user_id',
),
    'searchInputs' => array (
  4 => 'name',
  6 => 'last_name',
  7 => 'first_and_middle_name',
  8 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
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
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name',
  ),
  'first_and_middle_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
    'width' => '10%',
    'name' => 'first_and_middle_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
	'link'=>true,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'FIRST_AND_MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_and_middle_name',
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
),
);
