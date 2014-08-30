<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Interest',
    'varName' => 'sphr_Interest',
    'orderBy' => 'sphr_interest.name',
    'whereClauses' => array (
  'title' => 'sphr_interest.title',
  'country' => 'sphr_interest.country',
  'description_wish' => 'sphr_interest.description_wish',
  'payment_object' => 'sphr_interest.payment_object',
  'payment_meter' => 'sphr_interest.payment_meter',
  'discount' => 'sphr_interest.discount',
  'room_count' => 'sphr_interest.room_count',
  'square' => 'sphr_interest.square',
  'description_payment_terms' => 'sphr_interest.description_payment_terms',
),
    'searchInputs' => array (
  4 => 'title',
  5 => 'country',
  6 => 'description_wish',
  7 => 'payment_object',
  8 => 'payment_meter',
  9 => 'discount',
  10 => 'room_count',
  11 => 'square',
  12 => 'description_payment_terms',
),
    'searchdefs' => array (
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'country' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'country',
  ),
  'description_wish' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_WISH',
    'width' => '10%',
    'name' => 'description_wish',
  ),
  'payment_object' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'name' => 'payment_object',
  ),
  'payment_meter' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PAYMENT_METER',
    'width' => '10%',
    'name' => 'payment_meter',
  ),
  'discount' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'name' => 'discount',
  ),
  'room_count' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ROOM_COUNT',
    'sortable' => false,
    'width' => '10%',
    'name' => 'room_count',
  ),
  'square' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SQUARE',
    'width' => '10%',
    'name' => 'square',
  ),
  'description_payment_terms' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
    'width' => '10%',
    'name' => 'description_payment_terms',
  ),
),
    'listviewdefs' => array (
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
),
);
