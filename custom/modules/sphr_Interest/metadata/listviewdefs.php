<?php
$module_name = 'sphr_Interest';
$listViewDefs [$module_name] = 
array (
  'TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'link' => true,
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
  'ROOM_COUNT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ROOM_COUNT',
    'sortable' => false,
    'width' => '10%',
  ),
  'SPHR_CLIENT_INTEREST_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_client_sphr_interest',
    'label' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'SPHR_OBJECT_INTEREST_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_sphr_interest',
    'label' => 'LBL_SPHR_OBJECT_SPHR_INTEREST_FROM_SPHR_OBJECT_TITLE',
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'PAYMENT_OBJECT_FROM_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PAYMENT_OBJECT_FROM',
    'width' => '10%',
  ),
  'PAYMENT_OBJECT_TO_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PAYMENT_OBJECT_TO',
    'width' => '10%',
  ),
  'PAYMENT_METER_FROM_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PAYMENT_METER_FROM',
    'width' => '10%',
  ),
  'PAYMENT_METER_TO_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_PAYMENT_METER_TO',
    'width' => '10%',
  ),
  'DESCRIPTION_WISH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_WISH',
    'width' => '10%',
    'default' => false,
  ),
  'DISCOUNT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'default' => false,
  ),
  'SQUARE_FROM_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_SQUARE_FROM',
    'width' => '10%',
  ),
  'SQUARE_TO_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_SQUARE_TO',
    'width' => '10%',
  ),
  'DESCRIPTION_PAYMENT_TERMS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
    'width' => '10%',
    'default' => false,
  ),
);
?>
