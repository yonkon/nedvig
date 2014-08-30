<?php
$module_name = 'sphr_market_company';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'MC_START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MC_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'MC_END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MC_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'BUDGET_PLAN' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BUDGET_PLAN',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BUDGET_FACT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BUDGET_FACT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_CLIENTS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TOTAL_CLIENTS',
    'width' => '10%',
    'default' => true,
  ),
  'SUCCESS_CLIENTS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SUCCESS_CLIENTS',
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
);
?>
