<?php
$module_name = 'sphr_Interest';
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
            'name' => 'title',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'country',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description_wish',
            'label' => 'LBL_DESCRIPTION_WISH',
          ),
          1 => 
          array (
            'name' => 'payment_object',
            'label' => 'LBL_PAYMENT_OBJECT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_meter',
            'label' => 'LBL_PAYMENT_METER',
          ),
          1 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'room_count',
            'studio' => 'visible',
            'label' => 'LBL_ROOM_COUNT',
          ),
          1 => 
          array (
            'name' => 'square',
            'label' => 'LBL_SQUARE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description_payment_terms',
            'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
