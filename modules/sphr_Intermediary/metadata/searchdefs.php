<?php
$module_name = 'sphr_Intermediary';
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
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'first_and_middle_nme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_AND_MIDDLE_NME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_and_middle_nme',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'phone_work' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'phone_home' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_HOME_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'source' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SOURCE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'source',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
    'advanced_search' => 
    array (
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'first_and_middle_nme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_AND_MIDDLE_NME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_and_middle_nme',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'phone_work' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      'phone_home' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_HOME_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_home',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'source' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'assigned_user_id',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
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
