<?php
$module_name = 'Cosib_postsale';
$listViewDefs [$module_name] = 
array (
  'COSIB_POSTSHR_CLIENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cosib_postsle_sphr_client',
    'label' => 'LBL_COSIB_POSTSALE_SPHR_CLIENT_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'COSIB_POSTSHR_OBJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cosib_postsle_sphr_object',
    'label' => 'LBL_COSIB_POSTSALE_SPHR_OBJECT_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
);
?>
