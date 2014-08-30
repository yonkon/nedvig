<?php
$module_name = 'sphr_Owner';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_AND_MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => false,
    'link' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => false,
  ),
  'PHONE_HOME_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PHONE_HOME',
    'width' => '10%',
  ),
  'PHONE_WORK_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PHONE_WORK',
    'width' => '10%',
  ),
  'PHONE_MOBILE_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PHONE_MOBILE_C',
    'width' => '10%',
  ),
);
?>
