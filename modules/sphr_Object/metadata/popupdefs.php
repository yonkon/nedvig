<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Object',
    'varName' => 'sphr_Object',
    'orderBy' => 'sphr_object.name',
    'whereClauses' => array (
  'country' => 'sphr_object.country',
  'address' => 'sphr_object.address',
  'region' => 'sphr_object.region',
  'title' => 'sphr_object.title',
  'type' => 'sphr_object.type',
  'square' => 'sphr_object.square',
  'payment_object' => 'sphr_object.payment_object',
  'payment_meter' => 'sphr_object.payment_meter',
  'foto' => 'sphr_object.foto',
  'layout' => 'sphr_object.layout',
  'status' => 'sphr_object.status',
  'description_complex' => 'sphr_object.description_complex',
  'purchase_scheme' => 'sphr_object.purchase_scheme',
  'description_location' => 'sphr_object.description_location',
),
    'searchInputs' => array (
  3 => 'status',
  4 => 'country',
  5 => 'address',
  6 => 'region',
  7 => 'title',
  8 => 'type',
  9 => 'square',
  10 => 'payment_object',
  11 => 'payment_meter',
  12 => 'foto',
  13 => 'layout',
  14 => 'description_complex',
  15 => 'purchase_scheme',
  16 => 'description_location',
),
    'searchdefs' => array (
  'country' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'country',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'name' => 'address',
  ),
  'region' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGION',
    'width' => '10%',
    'name' => 'region',
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'type',
  ),
  'square' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SQUARE',
    'width' => '10%',
    'name' => 'square',
  ),
  'payment_object' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'name' => 'payment_object',
  ),
  'payment_meter' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_METER',
    'width' => '10%',
    'name' => 'payment_meter',
  ),
  'foto' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FOTO',
    'width' => '10%',
    'name' => 'foto',
  ),
  'layout' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAYOUT',
    'width' => '10%',
    'name' => 'layout',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
  'description_complex' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_COMPLEX',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description_complex',
  ),
  'purchase_scheme' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_SCHEME',
    'sortable' => false,
    'width' => '10%',
    'name' => 'purchase_scheme',
  ),
  'description_location' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_LOCATION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description_location',
  ),
),
    'listviewdefs' => array (
  'COUNTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'country',
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
    'name' => 'address',
  ),
  'REGION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGION',
    'width' => '10%',
    'default' => true,
    'name' => 'region',
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'title',
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
    'name' => 'type',
  ),
  'SQUARE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SQUARE',
    'width' => '10%',
    'default' => true,
    'name' => 'square',
  ),
  'PAYMENT_OBJECT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_OBJECT',
    'width' => '10%',
    'default' => true,
    'name' => 'payment_object',
  ),
  'PAYMENT_METER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_METER',
    'width' => '10%',
    'default' => true,
    'name' => 'payment_meter',
  ),
  'FOTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FOTO',
    'width' => '10%',
    'default' => true,
    'name' => 'foto',
  ),
  'LAYOUT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAYOUT',
    'width' => '10%',
    'default' => true,
    'name' => 'layout',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
  'DESCRIPTION_COMPLEX' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_COMPLEX',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description_complex',
  ),
  'PURCHASE_SCHEME' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_SCHEME',
    'sortable' => false,
    'width' => '10%',
    'name' => 'purchase_scheme',
  ),
  'DESCRIPTION_LOCATION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION_LOCATION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description_location',
  ),
),
);
