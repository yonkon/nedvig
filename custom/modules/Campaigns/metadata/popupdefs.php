<?php
$popupMeta = array (
    'moduleMain' => 'Campaign',
    'varName' => 'CAMPAIGN',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'campaigns.name',
  'start_date' => 'campaigns.start_date',
  'end_date' => 'campaigns.end_date',
  'assigned_user_name' => 'campaigns.assigned_user_name',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'start_date',
  3 => 'end_date',
  6 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'start_date' => 
  array (
    'name' => 'start_date',
    'width' => '10%',
  ),
  'end_date' => 
  array (
    'name' => 'end_date',
    'width' => '10%',
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
    'width' => '20%',
    'label' => 'LBL_LIST_CAMPAIGN_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'EXPECTED_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_EXPECTED_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'expected_cost',
  ),
  'ACTUAL_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CAMPAIGN_ACTUAL_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'actual_cost',
  ),
  'START_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_START_DATE',
    'default' => true,
    'name' => 'start_date',
  ),
  'END_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_END_DATE',
    'default' => true,
    'name' => 'end_date',
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
