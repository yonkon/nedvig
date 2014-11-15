<?php
$module_name = 'sphr_Object';
$viewdefs [$module_name] = 
array (
  'PdfView' => 
  array (
    'templateMeta' => 
    array (
      'form' => array (),
      'maxColumns' => '1',
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
            'name' => 'country',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'region',
            'label' => 'LBL_REGION',
          ),
          1 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'square',
            'label' => 'LBL_SQUARE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'payment_object',
            'label' => 'LBL_PAYMENT_OBJECT',
          ),
          1 => 
          array (
            'name' => 'payment_meter',
            'label' => 'LBL_PAYMENT_METER',
          ),
        ),
        4 =>  array (),
		5 =>  array (),
		6 =>  array (),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'description_complex',
            'label' => 'LBL_DESCRIPTION_COMPLEX',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'purchase_scheme',
            'studio' => 'visible',
            'label' => 'LBL_PURCHASE_SCHEME',
          ),
          1 => 
          array (
            'name' => 'description_location',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_LOCATION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'sphr_develohr_object_name',
          ),
          1 => 
          array (
            'name' => 'sphr_intermhr_object_name',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'sphr_owner_hr_object_name',
          ),
		   1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),		
      ),
    ),
  ),
);
?>
