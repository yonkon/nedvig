<?php
$module_name = 'sphr_Object';
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
            'name' => 'country',
            'studio' => 'visible',
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
            'studio' => 'visible',
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
        4 => 
        array (
          0 => '',
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'foto',
            'label' => 'LBL_FOTO',
          ),
          1 => 
          array (
            'name' => 'layout',
            'label' => 'LBL_LAYOUT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'description_complex',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_COMPLEX',
          ),
        ),
        7 => 
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
        8 => 
        array (
          0 => 
          array (
            'name' => 'sphr_develohr_object_name',
            'label' => 'LBL_SPHR_DEVELOPER_SPHR_OBJECT_FROM_SPHR_DEVELOPER_TITLE',
          ),
          1 => 
          array (
            'name' => 'sphr_interm_object_1_name',
            'label' => 'LBL_SPHR_INTERMEDIARY_SPHR_OBJECT_1_FROM_SPHR_INTERMEDIARY_TITLE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'sphr_client_object_1_name',
            'label' => 'LBL_SPHR_CLIENT_SPHR_OBJECT_1_FROM_SPHR_CLIENT_TITLE',
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