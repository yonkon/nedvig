<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Reserve',
    'varName' => 'sphr_Reserve',
    'orderBy' => 'sphr_reserve.name',
    'whereClauses' => array (
  'type' => 'sphr_reserve.type',
  'payment' => 'sphr_reserve.payment',
  'flat_number' => 'sphr_reserve.flat_number',
  'date_expiration' => 'sphr_reserve.date_expiration',
  'sphr_clientr_reserve_name' => 'sphr_reserve.sphr_clientr_reserve_name',
  'sphr_objectr_reserve_name' => 'sphr_reserve.sphr_objectr_reserve_name',
),
    'searchInputs' => array (
  4 => 'type',
  5 => 'payment',
  6 => 'flat_number',
  7 => 'date_expiration',
  8 => 'sphr_clientr_reserve_name',
  9 => 'sphr_objectr_reserve_name',
),
    'searchdefs' => array (
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'type',
  ),
  'payment' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT',
    'width' => '10%',
    'name' => 'payment',
  ),
  'flat_number' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FLAT_NUMBER',
    'width' => '10%',
    'name' => 'flat_number',
  ),
  'date_expiration' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_EXPIRATION',
    'width' => '10%',
    'name' => 'date_expiration',
  ),
  'sphr_clientr_reserve_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_client_sphr_reserve',
    'label' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'name' => 'sphr_clientr_reserve_name',
  ),
  'sphr_objectr_reserve_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_object_sphr_reserve',
    'label' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'name' => 'sphr_objectr_reserve_name',
  ),
),
    'listviewdefs' => array (
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'type',
  ),
  'PAYMENT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT',
    'width' => '10%',
    'default' => true,
    'name' => 'payment',
  ),
  'FLAT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FLAT_NUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'flat_number',
	'link'=>true,
  ),
  'DATE_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_EXPIRATION',
    'width' => '10%',
    'default' => true,
    'name' => 'date_expiration',
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
),
);
