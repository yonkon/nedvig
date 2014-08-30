<?php
$module_name = 'sphr_Interest';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_c',
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
      'sphr_client_interest_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_client_sphr_interest',
        'label' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_client_interest_name',
      ),
    ),
    'advanced_search' => 
    array (
      'type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_c',
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
      'payment_object_from_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PAYMENT_OBJECT_FROM',
        'width' => '10%',
        'name' => 'payment_object_from_c',
      ),
      'payment_object_to_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PAYMENT_OBJECT_TO',
        'width' => '10%',
        'name' => 'payment_object_to_c',
      ),
      'payment_meter_from_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PAYMENT_METER_FROM',
        'width' => '10%',
        'name' => 'payment_meter_from_c',
      ),
      'payment_meter_to_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PAYMENT_METER_TO',
        'width' => '10%',
        'name' => 'payment_meter_to_c',
      ),
      'description_wish' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DESCRIPTION_WISH',
        'width' => '10%',
        'default' => true,
        'name' => 'description_wish',
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
      'square_from_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_SQUARE_FROM',
        'width' => '10%',
        'name' => 'square_from_c',
      ),
      'square_to_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_SQUARE_TO',
        'width' => '10%',
        'name' => 'square_to_c',
      ),
      'description_payment_terms' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DESCRIPTION_PAYMENT_TERMS',
        'width' => '10%',
        'default' => true,
        'name' => 'description_payment_terms',
      ),
      'sphr_client_interest_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_client_sphr_interest',
        'label' => 'LBL_SPHR_CLIENT_SPHR_INTEREST_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_client_interest_name',
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
