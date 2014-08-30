<?php
$popupMeta = array (
    'moduleMain' => 'bcm_business_center',
    'varName' => 'bcm_business_center',
    'orderBy' => 'bcm_business_center.name',
    'whereClauses' => array (
  'name' => 'bcm_business_center.name',
  'address_c' => 'bcm_business_center.address_c',
  'assigned_user_name' => 'bcm_business_center.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'address_c',
  5 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'address_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_C',
    'sortable' => false,
    'width' => '10%',
    'name' => 'address_c',
  ),
  'assigned_user_name' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_C' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_C',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
),
);
