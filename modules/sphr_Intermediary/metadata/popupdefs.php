<?php
$popupMeta = array (
    'moduleMain' => 'sphr_Intermediary',
    'varName' => 'sphr_Intermediary',
    'orderBy' => 'sphr_intermediary.first_name, sphr_intermediary.last_name',
    'whereClauses' => array (
  'date_entered' => 'sphr_intermediary.date_entered',
  'title' => 'sphr_intermediary.title',
  'last_name' => 'sphr_intermediary.last_name',
  'first_and_middle_nme' => 'sphr_intermediary.first_and_middle_nme',
  'phone_mobile' => 'sphr_intermediary.phone_mobile',
  'phone_work' => 'sphr_intermediary.phone_work',
  'phone_home' => 'sphr_intermediary.phone_home',
  'email' => 'sphr_intermediary.email',
  'source' => 'sphr_intermediary.source',
  'assigned_user_id' => 'sphr_intermediary.assigned_user_id',
  'status' => 'sphr_intermediary.status',
  'date_modified' => 'sphr_intermediary.date_modified',
),
    'searchInputs' => array (
  2 => 'date_entered',
  3 => 'title',
  4 => 'last_name',
  5 => 'first_and_middle_nme',
  6 => 'phone_mobile',
  7 => 'phone_work',
  8 => 'phone_home',
  9 => 'email',
  10 => 'source',
  11 => 'assigned_user_id',
  12 => 'status',
  13 => 'date_modified',
),
    'searchdefs' => array (
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'name' => 'title',
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name',
  ),
  'first_and_middle_nme' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NME',
    'width' => '10%',
    'name' => 'first_and_middle_nme',
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'name' => 'phone_mobile',
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'name' => 'phone_work',
  ),
  'phone_home' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'name' => 'phone_home',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'name' => 'email',
  ),
  'source' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOURCE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'source',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'width' => '10%',
    'name' => 'assigned_user_id',
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
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
),
    'listviewdefs' => array (
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'FIRST_AND_MIDDLE_NME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_AND_MIDDLE_NME',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'SOURCE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SOURCE',
    'sortable' => false,
    'width' => '10%',
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_ID',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
),
);
