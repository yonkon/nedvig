<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Deal',
    'varName' => 'sphr_Deal',
    'orderBy' => 'sphr_deal.name',
    'whereClauses' => array (
  'name' => 'sphr_deal.name',
  'status' => 'sphr_deal.status',
  'discount_apply' => 'sphr_deal.discount_apply',
  'assigned_user_id' => 'sphr_deal.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'discount_apply',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'discount_apply' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT_APPLY',
    'width' => '10%',
    'name' => 'discount_apply',
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
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
    'link' => true,
  ),
  'DISCOUNT_APPLY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT_APPLY',
    'width' => '10%',
    'default' => true,
    'name' => 'discount_apply',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
