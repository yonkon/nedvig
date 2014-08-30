<?php
$popupMeta = array (
    'moduleMain' => 'sphr_market_channel',
    'varName' => 'sphr_market_channel',
    'orderBy' => 'sphr_market_channel.name',
    'whereClauses' => array (
  'name' => 'sphr_market_channel.name',
  'mc_source_c' => 'sphr_market_channel_cstm.mc_source_c',
  'sphr_markett_channel_name' => 'sphr_market_channel.sphr_markett_channel_name',
  'mc_start_date_c' => 'sphr_market_channel_cstm.mc_start_date_c',
  'mc_end_date_c' => 'sphr_market_channel_cstm.mc_end_date_c',
  'date_entered' => 'sphr_market_channel.date_entered',
  'date_modified' => 'sphr_market_channel.date_modified',
  'assigned_user_id' => 'sphr_market_channel.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'mc_source_c',
  5 => 'sphr_markett_channel_name',
  6 => 'mc_start_date_c',
  7 => 'mc_end_date_c',
  8 => 'date_entered',
  9 => 'date_modified',
  10 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'mc_source_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MC_SOURCE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'mc_source_c',
  ),
  'sphr_markett_channel_name' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_marketmarket_channel',
    'label' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
    'width' => '10%',
    'name' => 'sphr_markett_channel_name',
  ),
  'mc_start_date_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MC_START_DATE',
    'width' => '10%',
    'name' => 'mc_start_date_c',
  ),
  'mc_end_date_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MC_END_DATE',
    'width' => '10%',
    'name' => 'mc_end_date_c',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
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
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'SPHR_MARKETT_CHANNEL_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_marketmarket_channel',
    'label' => 'LBL_SPHR_MARKET_COMPANY_SPHR_MARKET_CHANNEL_FROM_SPHR_MARKET_COMPANY_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'sphr_markett_channel_name',
  ),
  'MC_SOURCE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MC_SOURCE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'mc_source_c',
  ),
  'MC_START_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_MC_START_DATE',
    'width' => '10%',
    'name' => 'mc_start_date_c',
  ),
  'MC_END_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_MC_END_DATE',
    'width' => '10%',
    'name' => 'mc_end_date_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
