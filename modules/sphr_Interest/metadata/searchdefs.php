<?php
$module_name = 'sphr_Interest';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'country' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'country',
      ),
      'description_wish' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DESCRIPTION_WISH',
        'width' => '10%',
        'default' => true,
        'name' => 'description_wish',
      ),
      'payment_object' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PAYMENT_OBJECT',
        'width' => '10%',
        'default' => true,
        'name' => 'payment_object',
      ),
      'payment_meter' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PAYMENT_METER',
        'width' => '10%',
        'default' => true,
        'name' => 'payment_meter',
      ),
      'discount' => 
      array (
        'type' => 'int',
        'label' => 'LBL_DISCOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'discount',
      ),
      'room_count' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ROOM_COUNT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'room_count',
      ),
      'square' => 
      array (
        'type' => 'int',
        'label' => 'LBL_SQUARE',
        'width' => '10%',
        'default' => true,
        'name' => 'square',
      ),
      'description_payment_terms' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
        'width' => '10%',
        'default' => true,
        'name' => 'description_payment_terms',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
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
