<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Deal',
    'varName' => 'sphr_Deal',
    'orderBy' => 'sphr_deal.name',
    'whereClauses' => array (
  'name' => 'sphr_deal.name',
),
    'searchInputs' => array (
  0 => 'sphr_deal_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DISCOUNT_APPLY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT_APPLY',
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
),
);
