<?php
$module_name = 'sphr_market_channel';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mc_source_c' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'sphr_markett_channel_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mc_source_c' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'sphr_markett_channel_name',
      ),
      'budget_plan_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_BUDGET_PLAN',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'budget_plan_c',
      ),
      'budget_fact_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_BUDGET_FACT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'budget_fact_c',
      ),
      'mc_start_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_MC_START_DATE',
        'width' => '10%',
        'name' => 'mc_start_date_c',
      ),
      'mc_end_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_MC_END_DATE',
        'width' => '10%',
        'name' => 'mc_end_date_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
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
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
