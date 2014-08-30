<?php
$module_name = 'cosib_messages';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
  'SPHR_CLIENT_MESSAGES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_clientcosib_messages',
    'label' => 'LBL_SPHR_CLIENT_COSIB_MESSAGES_FROM_SPHR_CLIENT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SPHR_OBJECT_MESSAGES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'sphr_objectcosib_messages',
    'label' => 'LBL_SPHR_OBJECT_COSIB_MESSAGES_FROM_SPHR_OBJECT_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => true,
    'width' => '10%',
    'default' => false,
  ),
);
?>
