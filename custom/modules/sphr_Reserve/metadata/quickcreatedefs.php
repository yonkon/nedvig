<?php
$module_name = 'sphr_Reserve';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'payment',
            'label' => 'LBL_PAYMENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'flat_number',
            'label' => 'LBL_FLAT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'date_expiration',
            'label' => 'LBL_DATE_EXPIRATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sphr_clientr_reserve_name',
            'label' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
          ),
          1 => 
          array (
            'name' => 'sphr_objectr_reserve_name',
            'label' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
