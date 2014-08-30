<?php
$module_name = 'sphr_market_company';
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
            'name' => 'mc_start_date',
            'label' => 'LBL_MC_START_DATE',
          ),
          1 => 
          array (
            'name' => 'mc_end_date',
            'label' => 'LBL_MC_END_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'budget_plan',
            'label' => 'LBL_BUDGET_PLAN',
          ),
          1 => 
          array (
            'name' => 'budget_fact',
            'label' => 'LBL_BUDGET_FACT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_clients',
            'label' => 'LBL_TOTAL_CLIENTS',
          ),
          1 => 
          array (
            'name' => 'success_clients',
            'label' => 'LBL_SUCCESS_CLIENTS',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
