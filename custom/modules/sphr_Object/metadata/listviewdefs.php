<?php
$module_name = 'sphr_Object';
$listViewDefs [$module_name] = 
array (
  'ID_OBJECT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_OBJECT',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => true,
    'width' => '10%',
  ),
  'CATEGORY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => true,
    'width' => '10%',
  ),
  'OBJECT_STATUS_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_OBJECT_STATUS',
    'width' => '10%',
  ),
  'PRICE_SALE_INT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRICE_SALE_INT',
    'width' => '10%',
  ),
  'PRICE_RENT_INT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PRICE_RENT_INT',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'NAME_ENG_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NAME_ENG',
    'width' => '10%',
  ),
);
?>
