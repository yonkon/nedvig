<?php
$module_name = 'sphr_Reserve';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type',
      ),
      'payment' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'payment',
      ),
      'flat_number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_FLAT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'flat_number',
      ),
      'date_expiration' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_EXPIRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'date_expiration',
      ),
      'sphr_clientr_reserve_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_client_sphr_reserve',
        'label' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_clientr_reserve_name',
      ),
      'sphr_objectr_reserve_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_object_sphr_reserve',
        'label' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_objectr_reserve_name',
      ),
    ),
    'advanced_search' => 
    array (
      'type' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type',
      ),
      'payment' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PAYMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'payment',
      ),
      'flat_number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_FLAT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'flat_number',
      ),
      'date_expiration' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_EXPIRATION',
        'width' => '10%',
        'default' => true,
        'name' => 'date_expiration',
      ),
      'sphr_clientr_reserve_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_client_sphr_reserve',
        'label' => 'LBL_SPHR_CLIENT_SPHR_RESERVE_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_clientr_reserve_name',
      ),
      'sphr_objectr_reserve_name' => 
      array (
        'type' => 'relate',
        'link' => 'sphr_object_sphr_reserve',
        'label' => 'LBL_SPHR_OBJECT_SPHR_RESERVE_FROM_SPHR_OBJECT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'sphr_objectr_reserve_name',
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
