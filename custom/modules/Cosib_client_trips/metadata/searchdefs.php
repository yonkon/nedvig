<?php
$module_name = 'Cosib_client_trips';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'cosib_clienhr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_clienps_sphr_client',
        'label' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_clienhr_client_name',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'date_arrive' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_ARRIVE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_arrive',
      ),
      'date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_departure',
      ),
      'assigned_user_name' => 
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      'cosib_clienhr_client_name' => 
      array (
        'type' => 'relate',
        'link' => 'cosib_clienps_sphr_client',
        'label' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cosib_clienhr_client_name',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'date_arrive' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_ARRIVE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_arrive',
      ),
      'date_departure' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_DEPARTURE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_departure',
      ),
      'trip_place' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TRIP_PLACE',
        'width' => '10%',
        'default' => true,
        'name' => 'trip_place',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'arrival' => 
      array (
        'type' => 'int',
        'label' => 'LBL_ARRIVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'arrival',
      ),
      'residence' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_RESIDENCE',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'residence',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'assigned_user_name' => 
      array (
        'link' => 'assigned_user_link',
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
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
