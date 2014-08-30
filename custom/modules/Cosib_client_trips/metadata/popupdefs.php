<?php
$popupMeta = array (
    'moduleMain' => 'Cosib_client_trips',
    'varName' => 'Cosib_client_trips',
    'orderBy' => 'cosib_client_trips.name',
    'whereClauses' => array (
  'cosib_clienhr_client_name' => 'cosib_client_trips.cosib_clienhr_client_name',
  'status' => 'cosib_client_trips.status',
  'date_arrive' => 'cosib_client_trips.date_arrive',
  'date_departure' => 'cosib_client_trips.date_departure',
  'assigned_user_name' => 'cosib_client_trips.assigned_user_name',
),
    'searchInputs' => array (
  3 => 'status',
  4 => 'cosib_clienhr_client_name',
  5 => 'date_arrive',
  6 => 'date_departure',
  7 => 'assigned_user_name',
),
    'searchdefs' => array (
  'cosib_clienhr_client_name' => 
  array (
    'type' => 'relate',
    'link' => 'cosib_clienps_sphr_client',
    'label' => 'LBL_COSIB_CLIENT_TRIPS_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'name' => 'cosib_clienhr_client_name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status',
  ),
  'date_arrive' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ARRIVE',
    'width' => '10%',
    'name' => 'date_arrive',
  ),
  'date_departure' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEPARTURE',
    'width' => '10%',
    'name' => 'date_departure',
  ),
  'assigned_user_name' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
);
