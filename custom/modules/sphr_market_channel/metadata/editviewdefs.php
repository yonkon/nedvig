<?php
$module_name = 'sphr_market_channel';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sphr_markett_channel_name',
          ),
          1 => 
          array (
            'name' => 'mc_source_c',
            'studio' => 'visible',
            'label' => 'LBL_MC_SOURCE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'budget_plan_c',
            'label' => 'LBL_BUDGET_PLAN',
          ),
          1 => 
          array (
            'name' => 'budget_fact_c',
            'label' => 'LBL_BUDGET_FACT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mc_start_date_c',
            'label' => 'LBL_MC_START_DATE',
          ),
          1 => 
          array (
            'name' => 'mc_end_date_c',
            'label' => 'LBL_MC_END_DATE',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
