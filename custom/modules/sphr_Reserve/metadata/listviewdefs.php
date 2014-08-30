<?php
$module_name = 'sphr_Reserve';
$listViewDefs [$module_name] = 
array (
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
  ),
  'FLAT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FLAT_NUMBER',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'PAYMENT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'SPHR_CLIENTR_RESERVE_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_client_sphr_reserve',
    'label' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'SPHR_OBJECTR_RESERVE_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_sphr_reserve',
    'label' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
