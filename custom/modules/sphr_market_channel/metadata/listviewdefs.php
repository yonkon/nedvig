<?php
$module_name = 'sphr_market_channel';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SPHR_MARKETT_CHANNEL_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_marketmarket_channel',
    'label' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'MC_SOURCE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MC_SOURCE',
    'sortable' => false,
    'width' => '10%',
  ),
  'BUDGET_PLAN_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_BUDGET_PLAN',
    'currency_format' => true,
    'width' => '10%',
  ),
  'BUDGET_FACT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_BUDGET_FACT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'MC_START_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_MC_START_DATE',
    'width' => '10%',
  ),
  'MC_END_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_MC_END_DATE',
    'width' => '10%',
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
