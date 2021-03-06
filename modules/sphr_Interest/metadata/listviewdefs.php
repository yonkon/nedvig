<?php
$module_name = 'sphr_Interest';
$listViewDefs [$module_name] = 
array (
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
  ),
  'DESCRIPTION_WISH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_WISH',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_OBJECT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_METER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT_METER',
    'width' => '10%',
    'default' => true,
  ),
  'DISCOUNT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'ROOM_COUNT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ROOM_COUNT',
    'sortable' => false,
    'width' => '10%',
  ),
  'SQUARE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SQUARE',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION_PAYMENT_TERMS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
