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
),
    'searchInputs' => array (
  4 => 'type',
  5 => 'payment',
  6 => 'flat_number',
  7 => 'date_expiration',
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
  ),
  'PAYMENT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT',
    'width' => '10%',
    'default' => true,
  ),
  'FLAT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_FLAT_NUMBER',
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
),
);
