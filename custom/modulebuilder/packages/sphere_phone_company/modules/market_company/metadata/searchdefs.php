<?php
$module_name = 'sphr_market_company';
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
      'phone' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'mc_start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_MC_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'mc_start_date',
      ),
      'mc_end_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_MC_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'mc_end_date',
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
      'phone' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'mc_start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_MC_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'mc_start_date',
      ),
      'mc_end_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_MC_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'mc_end_date',
      ),
      'budget_plan' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_BUDGET_PLAN',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'budget_plan',
      ),
      'budget_fact' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_BUDGET_FACT',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'budget_fact',
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
