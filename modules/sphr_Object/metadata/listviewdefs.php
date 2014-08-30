<?php
$module_name = 'sphr_Object';
$listViewDefs [$module_name] = 
array (
  'COUNTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'REGION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGION',
    'width' => '10%',
    'default' => true,
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
	'link'=>true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
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
  'PAYMENT_OBJECT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_METER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_METER',
    'width' => '10%',
    'default' => true,
  ),
  'FOTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FOTO',
    'width' => '10%',
    'default' => true,
  ),
  'LAYOUT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAYOUT',
    'width' => '10%',
    'default' => true,
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
  'DESCRIPTION_COMPLEX' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_COMPLEX',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PURCHASE_SCHEME' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_SCHEME',
    'sortable' => false,
    'width' => '10%',
  ),
  'DESCRIPTION_LOCATION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_LOCATION',
    'sortable' => false,
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
