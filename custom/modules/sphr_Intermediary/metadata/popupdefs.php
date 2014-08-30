<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Intermediary',
    'varName' => 'sphr_Intermediary',
    'orderBy' => 'sphr_intermediary.first_name, sphr_intermediary.last_name',
    'whereClauses' => array (
  'name' => 'sphr_intermediary.name',
  'last_name' => 'sphr_intermediary.last_name',
  'first_and_middle_nme' => 'sphr_intermediary.first_and_middle_nme',
  'assigned_user_name' => 'sphr_intermediary.assigned_user_name',
),
    'searchInputs' => array (
  3 => 'name',
  4 => 'last_name',
  5 => 'first_and_middle_nme',
  14 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name',
  ),
  'first_and_middle_nme' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NME',
    'width' => '10%',
    'name' => 'first_and_middle_nme',
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
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'FIRST_AND_MIDDLE_NME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NME',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'first_and_middle_nme',
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
