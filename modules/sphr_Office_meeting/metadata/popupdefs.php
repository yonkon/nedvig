<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Office_meeting',
    'varName' => 'sphr_Office_meeting',
    'orderBy' => 'sphr_office_meeting.name',
    'whereClauses' => array (
  'name' => 'sphr_office_meeting.name',
  'status' => 'sphr_office_meeting.status',
  'date_start' => 'sphr_office_meeting.date_start',
  'location' => 'sphr_office_meeting.location',
  'description' => 'sphr_office_meeting.description',
  'assigned_user_id' => 'sphr_office_meeting.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'date_start',
  5 => 'location',
  6 => 'description',
  7 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
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
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_START',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'location' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
    'name' => 'location',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'name' => 'assigned_user_id',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_START',
    'width' => '10%',
    'default' => true,
  ),
  'LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'default' => true,
  ),
),
);
