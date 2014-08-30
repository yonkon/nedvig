<?php
$module_name = 'sphr_Interest';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
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
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_object_from_c',
            'label' => 'LBL_PAYMENT_OBJECT_FROM',
          ),
          1 => 
          array (
            'name' => 'payment_object_to_c',
            'label' => 'LBL_PAYMENT_OBJECT_TO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'payment_meter_from_c',
            'label' => 'LBL_PAYMENT_METER_FROM',
          ),
          1 => 
          array (
            'name' => 'payment_meter_to_c',
            'label' => 'LBL_PAYMENT_METER_TO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'room_count',
            'studio' => 'visible',
            'label' => 'LBL_ROOM_COUNT',
          ),
          1 => 
          array (
            'name' => 'description_payment_terms',
            'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'square_from_c',
            'label' => 'LBL_SQUARE_FROM',
          ),
          1 => 
          array (
            'name' => 'square_to_c',
            'label' => 'LBL_SQUARE_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sphr_client_interest_name',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sphr_object_interest_name',
          ),
        ),
      ),
    ),
  ),
);
?>
