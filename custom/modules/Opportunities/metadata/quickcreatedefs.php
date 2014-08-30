<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'discount_apply_c',
            'label' => 'LBL_DISCOUNT_APPLY ',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sphr_clientrtunities_name',
            'label' => 'LBL_SPHR_CLIENT_OPPORTUNITIES_FROM_SPHR_CLIENT_TITLE',
          ),
          1 => 
          array (
            'name' => 'sphr_objectrtunities_name',
            'label' => 'LBL_SPHR_OBJECT_OPPORTUNITIES_FROM_SPHR_OBJECT_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sphr_intermrtunities_name',
            'label' => 'LBL_SPHR_INTERMEDIARY_OPPORTUNITIES_FROM_SPHR_INTERMEDIARY_TITLE',
          ),
          1 => 
          array (
            'name' => 'payment_object',
            'label' => 'LBL_PAYMENT_OBJECT',
          ),
        ),
      ),
    ),
  ),
);
?>
